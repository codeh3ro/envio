<?php

namespace App\Http\Controllers;

use App\Legacy\FPDF_Protection;
use Carbon\Carbon;
use App\Legacy\Cardio\{
  DocFinanceiro,
  PrestadorServico,
  EspecPrestador,
  ContratoFinanceiro,
  RegistroPessoa,
  ClassePrestador,
};
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function generate(Request $request)
    {
        $data = array(
          'name' => 'H3ro',
        );

        $pdf = Pdf::loadView('pdf.relatorios.producaoMedica', $data);

        return $pdf->stream('invoice.pdf');
    }

    public function generatePdf(FPDF_Protection $pdf)
    {
      $dataAtual = Carbon::now();
      $layout = 2;
      $logoPath = public_path('assets/logo.png');
      $pdf->AliasNbPages(); // Para o uso de número de páginas

      $docFinanceiro = new DocFinanceiro();
      $docFinanceiro->setContratoFinanceiro('317700001818');
      $docFinanceiro->setCompFinanceira('202408');
      $extratoImposto = $docFinanceiro->getExtratoImposto();
      //dd($extratoImposto);

      $coluna = [];
      $colunaTotal = 194;
      $layoutPagina = 'P';
      if ($layout == 1) {//Retrato
        /** LINHAS GERAL - RETRATO */
        $colunaTotal = 194;
        $layoutPagina = 'P';

        /** LAGURA DAS COLUNAS DA LINHA */
        $coluna[0] = 15;
        $coluna[1] = 12;
        $coluna[2] = 7;
        $coluna[3] = 38;
        $coluna[4] = 24;
        $coluna[5] = 16;
        $coluna[6] = 12;
        $coluna[7] = 16;
        $coluna[8] = 11;
        $coluna[9] = 10;
        $coluna[10] = 12;
        $coluna[11] = 9;
        $coluna[12] = 12;
      } elseif ($layout == 2) {//Paisagem
        /** LINHAS GERAL - PAISAGEM */
        $colunaTotal = 280;
        $layoutPagina = 'L';

        /** LAGURA DAS COLUNAS DA LINHA */
        $coluna[0] = 20; //Data Pag.
        $coluna[1] = 30; //Valor Remuneração Mês
        $coluna[2] = 22; //Valor Liquido
        $coluna[3] = 25; //Valor Base Cálculo
        $coluna[4] = 30; //Valor Ref. Primário
        $coluna[5] = 20; //Valor Ref. Secundário
        $coluna[6] = 29; //Valor Ref. Outras Fontes
        $coluna[7] = 27; //Valor Retenção IRPF
        $coluna[8] = 25; //Valor Retido Primário
        $coluna[9] = 28; //Valor Retido Sec.
        $coluna[10] = 20; //Total Retido
      }

      $arrayColunas = array();

      foreach ($coluna as $c) {
        array_push($arrayColunas, $c);
      }

      $tituloRelatorio = "Comprovante de Retenção de Contribuição Previdenciária";

      $pdf->AddPage($layoutPagina);
      //$pdf->SetAuthor($autor);
      $pdf->SetTitle(utf8_decode($tituloRelatorio));
      $pdf->SetMargins(10, 10, 10);
      $pdf->SetFont('Arial', 'B', 11);
      $pdf->Image($logoPath, 10, 6, 38, 0);
      $pdf->Ln(1);
      $pdf->Cell(0, 0, utf8_decode($tituloRelatorio), 0, 0, 'C');

      $pdf->Ln(15);
      $pdf->SetTextColor(0, 0, 0);
      /** FONTE PRETA */
      $pdf->SetFillColor(255, 255, 255);
      $pdf->SetDrawColor(255, 255, 255);

      $pdf->SetFont('Arial', 'B', 8);
      $pdf->SetWidths(array(($colunaTotal - 94), 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
      $pdf->SetFont('Arial', '', 7);
      $pdf->Row(array(utf8_decode('Prestador/Contribuinte: '.$extratoImposto->CodigoPrestador.' - '.$extratoImposto->NomePrestador)));

      $pdf->SetWidths(array(90, 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
      $pdf->Row(array(utf8_decode('Classe: '.$extratoImposto->CodigoClassePrestador.' - '.$extratoImposto->NomeClassePrestador),
        utf8_decode('Cidade: '.$extratoImposto->Cidade))); //. is_object($arrayRegistroCNES) && array_key_exists('Numero', $arrayRegistroCNES) ? $arrayRegistroCNES->Numero : '')));

      $pdf->SetWidths(array(90, 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
      $pdf->Row(array(utf8_decode('CNP: '.$extratoImposto->CNPPrestador),
        utf8_decode('PIS: '.$extratoImposto->PISPrestador)));
      $pdf->Ln(2);


      // Dados da Fonte
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->Cell(190, 4, 'Dados da Fonte', 0, 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->Cell(190, 4, 'Razao Social: '.env('RAZAOSOCIAL'), 0, 1);
      $pdf->Cell(190, 4, 'CNPJ: '.env('CNPJ'), 0, 1);
      $pdf->Cell(190, 4, 'Endereco: '.env('ENDERECO').'    Bairro: '.env('BAIRRO'), 0, 1);
      $pdf->Cell(190, 4, 'Cidade: '.env('CIDADE').'     UF: '.env('UF').'     CEP: '.env('CEP'), 0, 1);
      $pdf->Ln(2);

      // Competencia financeira e Data de Pagamento
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->Cell(40, 10, 'Competencia Financeira:', 0, 0);
      $pdf->Cell(50, 10, substr($extratoImposto->CompFinanceira, 4) . '/' . substr($extratoImposto->CompFinanceira, 0, 4), 0, 1);
      $pdf->Ln(2);


      $pdf->SetFont('Arial', 'B', 8);
      $pdf->SetWidths($arrayColunas);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
      $pdf->SetFillColor(127, 127, 127);
      /** CABEÇALHO CINZA */
      $pdf->SetDrawColor(255, 255, 255);
      $pdf->SetTextColor(255, 255, 255);
      /** FONTE BRANCA */
      $pdf->Row(array(
        utf8_decode("Data Pag."),
        utf8_decode("Valor Remuneração Mês"),
        utf8_decode("Valor Liquido"),
        utf8_decode("Valor Base Cálculo"),
        utf8_decode("Valor Ref. Primário"),
        utf8_decode("Valor Ref. Secundário"),
        utf8_decode("Valor Ref. Outras Fontes"),
        utf8_decode("Valor Retenção IRPF"),
        utf8_decode("Valor Retido Primário"),
        utf8_decode("Valor Retido Sec."),
        utf8_decode("Total Retido")), true, array('L', 'C', 'C', 'C', 'L', 'C', 'C', 'C', 'C', 'L', 'L'), 4, false, 10);
      $pdf->SetTextColor(0, 0, 0);


      $cor = false;
      $pdf->SetFont('Arial', '', 7);
      $pdf->TableStriped($cor);
      $pdf->SetWidths($arrayColunas);
      $pdf->Row(array(
        date('d/m/Y', strtotime($extratoImposto->DataPagamento)),
        utf8_decode(number_format($extratoImposto->VlBruto, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->VlLiquido, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->ValorBase, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->ValorBase, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->ValorBaseSecundario, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->RetOutrasFontes, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->TotalRetencaoIR, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->TotalRetencao, 2, ',', '.')),
        number_format((float)$extratoImposto->ValorRetencaoSec, 2, ',', '.'),
        utf8_decode(number_format((float)$extratoImposto->TotalRetencao, 2, ',', '.'))),
        false, array('L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'),2);
      $pdf->Ln();

      $pdf->SetDrawColor(0,0,0);
      $pdf->SetLineWidth(0.1);
      $pdf->Line(11, 93, 286, 93);
      //$pdf->Line(0);
      $pdf->SetDrawColor(255, 255, 255);

      // Total final
      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 9);
      $pdf->TableStriped($cor);
      $pdf->SetWidths($arrayColunas);
      $pdf->Row(array('Total',
        utf8_decode(number_format($extratoImposto->VlBruto, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->VlLiquido, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->ValorBase, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->ValorBase, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->ValorBaseSecundario, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->RetOutrasFontes, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->TotalRetencaoIR, 2, ',', '.')),
        utf8_decode(number_format($extratoImposto->TotalRetencao, 2, ',', '.')),
        number_format((float)$extratoImposto->ValorRetencaoSec, 2, ',', '.'),
        utf8_decode(number_format((float)$extratoImposto->TotalRetencao, 2, ',', '.'))),
        false, array('C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'),2);

      // Rodapé
      $pdf->SetY(-31);
      // Fonte Arial itálico 8
      $pdf->SetFont('Arial', 'I', 8);
      // Texto adicional no rodapé
      $pdf->Cell(0, 10, env('CIDADE').', '.$dataAtual->translatedFormat('d \\d\\e F \\d\\e Y'), 0, 0, 'R');



      $fileName = 'teste.pdf'; //'EspelhoPagamento-' . $autoId . '_Comp_' . substr($compFinanceira, 4) . '-' . substr($compFinanceira, 0, 4) . '.pdf';
      $pdfPath = 'temp/' . $fileName;

      $pdf->Output('I', $pdfPath);
      die;

      //return $pdfPath;

      //Storage::put($pdfPath, $arquivo);

    }


}
