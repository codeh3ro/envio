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
use Log;
use Mpdf\Mpdf;
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
      //$pdf->SetProtection(array('copy','print'), '1234', 'kmzway87aa@');
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

      $pdf->Output('F', storage_path('app/public/' . $pdfPath));
            
      $mpdf = new Mpdf(['tempDir'=>storage_path(base_path('storage/app/public/'.$pdfPath))]);
      $pagecount = $mpdf->SetSourceFile(base_path('storage/app/public/'.$pdfPath));
      $tplId = $mpdf->ImportPage($pagecount);
      $mpdf->UseTemplate($tplId);
      $mpdf->SetProtection(['print', 'copy'], '123', 'mestre');  // Adicionando senha
      $mpdf->Output($pdfPath, 'I');  // Gerar o PDF protegido em string

      die;

      //return $pdfPath;

      //Storage::put($pdfPath, $arquivo);

    }

    public function generatePdfProducao(): string
    {
      try {
        $layout = 1;
        $contratoFinanceiro = '11338';
        $autoId = '662328';
        $autor = env('APP_NAME');
        $compFinanceira = '202312';

        
        $docFinanceiro = new DocFinanceiro();
        $docFinanceiro->setContratoFinanceiro($contratoFinanceiro);
        $docFinanceiro->setAutoId($autoId);
        $arrayDocFinanceiro = $docFinanceiro->getEspelhoByAutoIdByContrato();
        $arquivoPDF = null;
        $logoPath = public_path('assets/logo.png');
        
        $pdfPath = '';

        if (!empty($arrayDocFinanceiro)) {

          $objPrestador = new PrestadorServico();
          $objPrestador->setCodigo($arrayDocFinanceiro->CodigoContratoFinanceiro);
          $arrayPrestador = $objPrestador->getByCodigoContratoFinanceiro();

          $objEspecPrest = new EspecPrestador();
          $objEspecPrest->setPrestador($arrayPrestador->AutoId);
          $arrayEspecPrest = $objEspecPrest->getAllByPrestador();

          $conteudoDocFinanc = $docFinanceiro->getEspelhoAnalitico();
          //dd($conteudoDocFinanc);


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
            $coluna[0] = 15;
            $coluna[1] = 12;
            $coluna[2] = 7;
            $coluna[3] = 58;
            $coluna[4] = 54;//-------------24
            $coluna[5] = 16;
            $coluna[6] = 15;
            $coluna[7] = 19;
            $coluna[8] = 21;//-----------11
            $coluna[9] = 20;//-----------10
            $coluna[10] = 12;
            $coluna[11] = 9;
            $coluna[12] = 22;//-----------12
          }

          $arrayColunas = array();

          foreach ($coluna as $c) {
            array_push($arrayColunas, $c);
          }

          $tituloRelatorio = "Espelho de Pagamento Analítico";


          $pdf = new FPDF_Protection();
          //$pdf->SetProtection(array('copy', 'print'), '123', 'kmzway87aa@');
          $pdf->AddPage($layoutPagina);
          $pdf->SetAuthor($autor);
          $pdf->SetTitle(utf8_decode($tituloRelatorio));
          $pdf->SetMargins(10, 10, 10);
          $pdf->SetFont('Arial', '', 10);
          $pdf->Image($logoPath, 5, 5, 30, 0);
          $pdf->Ln(1);
          $pdf->Cell(0, 0, utf8_decode($tituloRelatorio), 0, 0, 'C');

          $pdf->Ln(4);
          $pdf->Cell(0, 0, utf8_decode("Competência: ") . substr($compFinanceira, 4) . '/' . substr($compFinanceira, 0, 4), 0, 0, 'C');
          $pdf->Ln(4);

          $pdf->SetTextColor(0, 0, 0);
          /** FONTE PRETA */
          $pdf->SetFillColor(255, 255, 255);
          $pdf->SetDrawColor(255, 255, 255);

          $objClassePrestPDF = new ClassePrestador();
          $objClassePrestPDF->setCodigo($arrayPrestador->Classe);
          $arrayClassePrestPDF = $objClassePrestPDF->getByCodigo();


          $objRegistroCNES = new RegistroPessoa();
          $objRegistroCNES->setPessoa($arrayPrestador->Pessoa);
          $objRegistroCNES->setTipo(26);
          $arrayRegistroCNES = $objRegistroCNES->getByPessoaByTipo();
          //dd($arrayPrestador->Pessoa,$arrayRegistroCNES);

          $contratoF = new ContratoFinanceiro();
          $contratoF->setCodigo($arrayDocFinanceiro->CodigoContratoFinanceiro);
          $arrayContratoF = $contratoF->getByCodigo();


          $pdf->SetFont('Arial', 'B', 8);
          $pdf->SetWidths(array(($colunaTotal - 94), 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $pdf->Row(array(utf8_decode('Prest. Recebedor: ' . $arrayPrestador->Nome),
            utf8_decode('Classe Prestador: ' . $arrayClassePrestPDF->Nome)));

          $pdf->SetWidths(array(($colunaTotal - 94), 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $pdf->Row(array(utf8_decode('Contrato Financeiro: ' . $arrayDocFinanceiro->CodigoContratoFinanceiro),
            utf8_decode('Registro CNES: ' . is_object($arrayRegistroCNES) && array_key_exists('Numero', $arrayRegistroCNES) ? $arrayRegistroCNES->Numero : '')));

          $especialidade = $arrayEspecPrest->Nome;

          $pdf->SetWidths(array(($colunaTotal - 94), 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $pdf->Row(array(utf8_decode('Nº Provisório: ' . $arrayDocFinanceiro->NumeroProvisorio),
            utf8_decode('Classe Contrato Financeiro: ' . $arrayDocFinanceiro->ClasseDocumento)));

          $pdf->SetWidths(array(($colunaTotal - 94), 31, 31, 32));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $pdf->Row(array(utf8_decode('Nº Doc Financeiro: ' . $arrayDocFinanceiro->Numero),
            utf8_decode('Banco: ' . $arrayContratoF->Banco), utf8_decode('Ag.: ' . $arrayContratoF->Agencia), utf8_decode('C.Corrente: ' . $arrayContratoF->ContaCorrente)));

          $pdf->Ln(4);

          $pdf->SetFont('Arial', '', 7);
          $pdf->SetWidths($arrayColunas);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $pdf->SetFillColor(127, 127, 127);
          /** CABEÇALHO CINZA */
          $pdf->SetDrawColor(255, 255, 255);
          $pdf->SetTextColor(255, 255, 255);
          /** FONTE BRANCA */
          $pdf->Row(array(
            utf8_decode("Data"),
            utf8_decode("Hora"),
            utf8_decode("Seq"),
            utf8_decode("Prest. Exec. Externo"),
            utf8_decode("Serviço"),
            utf8_decode("Composição"),
            utf8_decode("Particip."),
            utf8_decode("Percent. Part."),
            utf8_decode("Via Acesso"),
            utf8_decode("Valor Unitário"),
            utf8_decode("%Pago"),
            utf8_decode("Qtde"),
            utf8_decode("Valor Pago")), true, array('L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'C', 'R', 'R', 'C', 'R'), 5, false, 10);
          $pdf->SetTextColor(0, 0, 0);
          /** FONTE PRETA */

          $grupoAprop = '';
          $beneficiario = '';
          $evento = '';
          $totalBenef = 0;
          $totalEvento = 0;
          $cor = false;
          $s = 0;
          foreach ($conteudoDocFinanc as $doc) {

            if ($doc->CodigoEvento != $evento || $beneficiario != $doc->Beneficiario) {
              if ($evento != '') {

                /** SUBTOTAL EVENTO */
                $cor = $pdf->TableStriped($cor);
                $pdf->SetWidths(array($colunaTotal));
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Row(array(utf8_decode("SubTotal - Evento: " . number_format((float)$totalEvento, 2, ',', '.'))), false, array('R'));

              }
            }

            /*if($beneficiario!=$doc['Beneficiario']){
                if($beneficiario!=''){

                    // SUBTOTAL
                    $cor = $pdf->TableStriped($cor);
                    $pdf->SetWidths(array($colunaTotal));
                    $pdf->SetFont('Arial','B',8);
                    $pdf->Row(array(utf8_decode("SubTotal - Beneficiário: ".number_format((float)$totalBenef,2,',','.'))),false, array('R'));
                    $pdf->Row(array(""),false, array('R'));
                    $totalBenef=0;
                }
            }*/

            if ($grupoAprop != $doc->Nome) {
              $grupoAprop = $doc->Nome;

              /** GRUPO APROPRIAÇÃO */
              $cor = $pdf->TableStriped($cor);
              $pdf->SetWidths(array($colunaTotal));
              $pdf->SetFont('Arial', 'B', 8);
              $pdf->Row(array(utf8_decode("Grupo Apropriação: " . $doc->Nome)));
            } else {
              $grupoAprop = $doc->Nome;
            }

            if ($doc->CodigoEvento != $evento || $beneficiario != $doc->Beneficiario) {

              /** BENEFICIÁRIO */
              $competenciaB = substr($doc->CompetenciaPag, 4) . '/' . substr($doc->CompetenciaPag, 0, 4);
              $cor = $pdf->TableStriped($cor);
              $pdf->SetWidths(array(
                ($colunaTotal / 3),
                (($colunaTotal / 3) / 3),
                (($colunaTotal / 3) / 3),
                (($colunaTotal / 3) / 3),
                (($colunaTotal / 5)),
                (($colunaTotal / 7.4))
              ));
              $pdf->SetFont('Arial', 'B', 8);
              $pdf->Row(array(utf8_decode("Beneficiário: " . $doc->Beneficiario),
                utf8_decode("Senha: " . $doc->SenhaAut),
                utf8_decode("Lote: " . $doc->CodigoLote),
                utf8_decode("Evento: " . $doc->CodigoEvento),
                utf8_decode("Guia Prestador: " . $doc->GuiaPrestador),
                utf8_decode("Competência: " . $competenciaB)), false, array('L', 'L', 'L', 'L', 'L', 'L'));

              $evento = $doc->CodigoEvento;
              $totalEvento = $doc->TotalPago;

            } else {
              $evento = $doc->CodigoEvento;
              $totalEvento += $doc->TotalPago;
            }

            $beneficiario = $doc->Beneficiario;
            $totalBenef += $doc->TotalPago;


            $pdf->SetFont('Arial', '', 7);
            $cor = $pdf->TableStriped($cor);
            $pdf->SetWidths($arrayColunas);
            $pdf->Row(array(
              date('d/m/Y', strtotime($doc->DataInicioRealizacao)),
              utf8_decode($doc->hora),
              utf8_decode($doc->Seq),
              utf8_decode($doc->NomePrestExt),
              utf8_decode($doc->Servico),
              utf8_decode($doc->Composicao),
              utf8_decode($doc->ClasseParticip),
              utf8_decode($doc->Percentual),
              utf8_decode($doc->Expr4),
              number_format((float)$doc->ValorUnitUtil, 2, ',', '.'),
              utf8_decode(number_format((float)$doc->PercAplicUtil * 100, 2, ',', '.') . '%'),
              utf8_decode(number_format((float)$doc->QteUtil, 2, ',', '.')),
              number_format((float)$doc->TotalPago, 2, ',', '.')), false, array('L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'C', 'R', 'R', 'C', 'R'));

          }

          /** SUBTOTAL EVENTO FINAL */
          $cor = $pdf->TableStriped($cor);
          $pdf->SetWidths(array($colunaTotal));
          $pdf->SetFont('Arial', 'B', 8);
          //$pdf->Row(array(utf8_decode("SubTotal: ".number_format((float)$totalBenef,2,',','.'))),false, array('R'));
          $pdf->Row(array(utf8_decode("SubTotal - Evento: " . number_format((float)$totalEvento, 2, ',', '.'))), false, array('R'));

          $pdf->Ln(10);

          /** TOTAL GERAL */
          $arrayTotalGeral = $docFinanceiro->getEspelhoAnaliticoTotalGeral();
          if (!empty($arrayTotalGeral)) {
            $pdf->SetWidths(array($colunaTotal));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
            $pdf->SetFillColor(127, 127, 127);
            /** CABEÇALHO CINZA */
            $pdf->SetDrawColor(255, 255, 255);
            $pdf->SetTextColor(255, 255, 255);
            /** FONTE BRANCA */
            $pdf->Row(array(utf8_decode("Total Pago")), true, array('C'));
            $pdf->SetTextColor(0, 0, 0);
            /** FONTE PRETA */

            $totalGeral = 0;
            $cor = false;
            foreach ($arrayTotalGeral as $total) {
              $totalGeral += $total->TotalPago;

              $pdf->SetFont('Arial', '', 7);
              $cor = $pdf->TableStriped($cor);
              $pdf->SetWidths(array(($colunaTotal - 94), 94));
              $pdf->Row(array(utf8_decode($total->Nome),
                number_format((float)$total->TotalPago, 2, ',', '.')), false, array('L', 'R'));
            }

            $pdf->SetFont('Arial', 'B', 8);
            $cor = $pdf->TableStriped($cor);
            $pdf->SetWidths(array(($colunaTotal - 94), 94));
            $pdf->Row(array(utf8_decode("Total"),
              number_format((float)$totalGeral, 2, ',', '.')), false, array('L', 'R'));

          }

          /** RESUMO COMPOSICOES */
          $arrayResumoComposicoes = $docFinanceiro->getEspelhoAnaliticoResumoComposicoes();
          if (!empty($arrayResumoComposicoes)) {
            $pdf->Ln(10);

            $pdf->SetFont('Arial', '', 9);
            $pdf->SetTextColor(0, 0, 0);
            /** FONTE PRETA */
            $pdf->Cell(0, 0, utf8_decode("Resumo das Composições"), 0, 0);
            $pdf->Ln(5);

            /** LAGURA DAS COLUNAS DA LINHA */
            $colunaNovo[0] = 104;
            $colunaNovo[1] = 45;
            $colunaNovo[2] = 45;
            $arrayColunasNovo = array();

            foreach ($colunaNovo as $c) {
              array_push($arrayColunasNovo, $c);
            }

            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetWidths($arrayColunasNovo);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
            $pdf->SetFillColor(127, 127, 127);
            /** CABEÇALHO CINZA */
            $pdf->SetDrawColor(255, 255, 255);
            $pdf->SetTextColor(255, 255, 255);
            /** FONTE BRANCA */
            $pdf->Row(array(utf8_decode("Composição"),
              utf8_decode("Valor Total Utilizado"),
              utf8_decode("Valor Total Pago")), true);
            $pdf->SetTextColor(0, 0, 0);
            /** FONTE PRETA */

            $cor = false;
            foreach ($arrayResumoComposicoes as $composicao) {
              $pdf->SetFont('Arial', '', 7);
              $pdf->SetWidths($arrayColunasNovo);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
              $cor = $pdf->TableStriped($cor);
              $pdf->Row(array(utf8_decode($composicao->Composicao),
                number_format((float)$composicao->TotalUtilizado, 2, ',', '.'),
                number_format((float)$composicao->TotalPago, 2, ',', '.')), false);
            }
          }

          /** IMPOSTOS */
          $arrayImpostos = $docFinanceiro->getEspelhoAnaliticoImpostos();
          if (!empty($arrayImpostos)) {
            $pdf->Ln(10);

            $pdf->SetFont('Arial', '', 9);
            $pdf->SetTextColor(100, 100, 100);
            /** FONTE PRETA */
            $pdf->Cell(0, 0, utf8_decode("Impostos"), 0, 0);
            $pdf->Ln(5);

            /** LAGURA DAS COLUNAS DA LINHA */
            $colunaImp[0] = 50;
            $colunaImp[1] = 15;
            $colunaImp[2] = 25;
            $colunaImp[3] = 20;
            $colunaImp[4] = 27;
            $colunaImp[5] = 20;
            $colunaImp[6] = 15;
            $colunaImp[7] = 22;
            $arrayColunasImp = array();

            foreach ($colunaImp as $c) {
              array_push($arrayColunasImp, $c);
            }

            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetWidths($arrayColunasImp);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
            $pdf->SetFillColor(100, 100, 100);
            /** CABEÇALHO CINZA */
            $pdf->SetDrawColor(255, 255, 255);
            $pdf->SetTextColor(255, 255, 255);
            /** FONTE BRANCA */
            $pdf->Row(array(utf8_decode("Tipo Imposto"),
              utf8_decode("Valor Base"),
              utf8_decode("Valor Base Sec."),
              utf8_decode("Valor Retenção"),
              utf8_decode("Valor Retenção Sec."),
              utf8_decode("Total Retenção"),
              utf8_decode("Percentual"),
              utf8_decode("Percentual Sec.")), true, array('L', 'R', 'R', 'R', 'R', 'R', 'R', 'R'));
            $pdf->SetTextColor(0, 0, 0);
            /** FONTE PRETA */

            $cor = false;

            foreach ($arrayImpostos as $imposto) {
              $pdf->SetFont('Arial', '', 7);
              $pdf->SetWidths($arrayColunasImp);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
              $cor = $pdf->TableStriped($cor);
              $pdf->Row(array(utf8_decode($imposto->Nome),
                number_format((float)$imposto->ValorBase, 2, ',', '.'),
                number_format((float)$imposto->ValorBaseSecundario, 2, ',', '.'),
                number_format((float)$imposto->ValorRetencao, 2, ',', '.'),
                number_format((float)$imposto->ValorRetencaoSec, 2, ',', '.'),
                number_format((float)$imposto->TotalRetencao, 2, ',', '.'),
                utf8_decode(number_format((float)$imposto->Percentual * 100, 2, ',', '.') . "%"),
                utf8_decode(number_format((float)$imposto->PercentualSec * 100, 2, ',', '.') . "%")), false, array('L', 'R', 'R', 'R', 'R', 'R', 'R', 'R'));
            }
          }

          $pdf->Ln(10);

          /** RESUMO PAGAMENTO */
          $arrayResumoPagamento = $docFinanceiro->getEspelhoAnaliticoResumoPagamento();
          if (!empty($arrayResumoPagamento)) {
            $pdf->SetFont('Arial', '', 9);
            $pdf->SetTextColor(0, 0, 0);
            /** FONTE PRETA */
            $pdf->Cell(0, 0, utf8_decode("Resumo de Pagamento"), 0, 0);
            $pdf->Ln(5);

            /** LAGURA DAS COLUNAS DA LINHA */
            $colunaResumo[0] = 78;
            $colunaResumo[1] = 16;
            $colunaResumo[2] = 15;
            $colunaResumo[3] = 55;
            $colunaResumo[4] = 15;
            $colunaResumo[5] = 15;
            $arrayColunasResumo = array();

            foreach ($colunaResumo as $c) {
              array_push($arrayColunasResumo, $c);
            }

            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetWidths($arrayColunasResumo);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
            $pdf->SetFillColor(127, 127, 127);
            /** CABEÇALHO CINZA */
            $pdf->SetDrawColor(255, 255, 255);
            $pdf->SetTextColor(255, 255, 255);
            /** FONTE BRANCA */
            $pdf->Row(array(utf8_decode("Classe Apropriação"),
              utf8_decode("Comp. Doc."),
              utf8_decode("Item"),
              utf8_decode("Complemento"),
              utf8_decode("Valor"),
              utf8_decode("Tipo Valor")), true, array('L', 'L', 'L', 'L', 'R', 'C'));
            $pdf->SetTextColor(0, 0, 0);
            /** FONTE PRETA */

            $cor = false;
            foreach ($arrayResumoPagamento as $pgto) {
              $pdf->SetFont('Arial', '', 7);
              $pdf->SetWidths($arrayColunasResumo);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
              $cor = $pdf->TableStriped($cor);
              $pdf->Row(array(utf8_decode($pgto->Nome),
                substr($pgto->CompFinanceira, 4) . '/' . substr($pgto->CompFinanceira, 0, 4),
                utf8_decode($pgto->AutoId),
                utf8_decode($pgto->Descricao),
                number_format((float)$pgto->ValorTotal, 2, ',', '.'),
                utf8_decode($pgto->Expr2)), false, array('L', 'L', 'L', 'L', 'R', 'C'));
            }

            $arrayCreditoDebitoLiquido = $docFinanceiro->getEspelhoAnaliticoCreditoDebitoLiquido();

            $arrayTotais = array(134, 30, 30);

            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetWidths($arrayTotais);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
            $pdf->SetFillColor(127, 127, 127);
            /** CABEÇALHO CINZA */
            $pdf->SetDrawColor(255, 255, 255);
            $pdf->SetTextColor(255, 255, 255);
            /** FONTE BRANCA */
            $pdf->Row(array(utf8_decode("Créditos"),
              utf8_decode("Débitos"),
              utf8_decode("Líquido")), true, array('R', 'R', 'R'));
            $pdf->SetTextColor(0, 0, 0);
            /** FONTE PRETA */

            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetWidths($arrayTotais);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
            $cor = $pdf->TableStriped(false);
            $pdf->Row(array(number_format((float)$arrayCreditoDebitoLiquido->Creditos, 2, ',', '.'),
              number_format((float)$arrayCreditoDebitoLiquido->Debitos, 2, ',', '.'),
              number_format((float)($arrayCreditoDebitoLiquido->Creditos - $arrayCreditoDebitoLiquido->Debitos), 2, ',', '.')), false, array('R', 'R', 'R'));
          }

          //$pdf->SetWidths(194);//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $cor = $pdf->TableStriped(false);
          $pdf->SetFont('Arial', 'B', 10);
          $pdf->Row(array(utf8_encode("")), false, array('L'));
          //$pdf->Row(array(utf8_decode("OBSERVAÇÃO:")),false, array('L'));
          //$pdf->SetFont('Arial','',8);
          //$pdf->Row(array(utf8_decode($_SESSION['observacao'])),false, array('L'));

          $fileName = 'EspelhoPagamento-' . $autoId . '_Comp_' . substr($compFinanceira, 4) . '-' . substr($compFinanceira, 0, 4) . '.pdf';
          $pdfPath = 'temp/' . $fileName;

          $pdf->Output('F', storage_path('app/public/' . $pdfPath));

          $mpdf = new Mpdf(['tempDir'=>storage_path(base_path('storage/app/public/'.$pdfPath))]);
          $pagecount = $mpdf->SetSourceFile(base_path('storage/app/public/'.$pdfPath));

          // Criar o conteúdo do PDF (importando as páginas)
          for ($i = 1; $i <= $pagecount; $i++) {
            // Importar cada página
            $templateId = $mpdf->importPage($i);

            // Definir o tamanho da página de acordo com a página importada
            $size = $mpdf->getTemplateSize($templateId);
            
            // Adicionar a página ao conteúdo PDF
            $mpdf->useTemplate($templateId);
          }      
          
          $mpdf->SetProtection(['print', 'copy'], '123', 'kmzway87aa@');  // Adicionando senha
          $arquivo = $mpdf->Output('', 'S');

          Storage::put($pdfPath, $arquivo);
        }

        return $pdfPath;

      } catch (\Exception $e) {
        Log::error('Erro ao gerar TESTE PDF: ' . $e->getMessage());
        return false; // Retorna false em caso de erro
      }

    }

    public function generatePdfExtratoImposto(): string
    {
      try {
        $dataAtual = Carbon::now();
        $pdf = new FPDF_Protection();
        $pdf->AliasNbPages(); // Para o uso de número de páginas
        $layout = 2;
        $logoPath = public_path('assets/logo.png');

        $contratoFinanceiro = '11338';
        $autoId = '662328';
        $autor = env('APP_NAME');
        $compFinanceira = '202312';

        $pdfPath = '';

        $docFinanceiro = new DocFinanceiro();
        $docFinanceiro->setContratoFinanceiro($contratoFinanceiro); //11338
        $docFinanceiro->setAutoId($autoId);
        $docFinanceiro->setCompFinanceira($compFinanceira); //202312
        $extratoImposto = $docFinanceiro->getExtratoImposto();

        if (!empty($extratoImposto)) {

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
          $pdf->Row(array(utf8_decode('Prestador/Contribuinte: ' . $extratoImposto->CodigoPrestador . ' - ' . $extratoImposto->NomePrestador)));

          $pdf->SetWidths(array(90, 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $pdf->Row(array(utf8_decode('Classe: ' . $extratoImposto->CodigoClassePrestador . ' - ' . $extratoImposto->NomeClassePrestador),
            utf8_decode('Cidade: ' . $extratoImposto->Cidade))); //. is_object($arrayRegistroCNES) && array_key_exists('Numero', $arrayRegistroCNES) ? $arrayRegistroCNES->Numero : '')));

          $pdf->SetWidths(array(90, 94));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
          $pdf->Row(array(utf8_decode('CNP: ' . $extratoImposto->CNPPrestador),
            utf8_decode('PIS: ' . $extratoImposto->PISPrestador)));
          $pdf->Ln(2);


          // Dados da Fonte
          $pdf->SetFont('Arial', 'B', 8);
          $pdf->Cell(190, 4, 'Dados da Fonte', 0, 1);
          $pdf->SetFont('Arial', '', 7);
          $pdf->Cell(190, 4, 'Razao Social: ' . env('RAZAOSOCIAL'), 0, 1);
          $pdf->Cell(190, 4, 'CNPJ: ' . env('CNPJ'), 0, 1);
          $pdf->Cell(190, 4, 'Endereco: ' . env('ENDERECO') . '    Bairro: ' . env('BAIRRO'), 0, 1);
          $pdf->Cell(190, 4, 'Cidade: ' . env('CIDADE') . '     UF: ' . env('UF') . '     CEP: ' . env('CEP'), 0, 1);
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
            false, array('L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'), 2);
          $pdf->Ln();

          $pdf->SetDrawColor(0, 0, 0);
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
            false, array('C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'), 2);

          // Rodapé
          $pdf->SetY(-31);
          // Fonte Arial itálico 8
          $pdf->SetFont('Arial', 'I', 8);
          // Texto adicional no rodapé
          $pdf->Cell(0, 10, env('CIDADE').', '.$dataAtual->translatedFormat('d \\d\\e F \\d\\e Y'), 0, 0, 'R');

          $fileName = 'ExtratoImposto-' . $autoId . '_Comp_' . substr($compFinanceira, 4) . '-' . substr($compFinanceira, 0, 4) . '.pdf';
          $pdfPath = 'temp/' . $fileName;

          $pdf->Output('F', storage_path('app/public/' . $pdfPath));

          $mpdf = new Mpdf(['tempDir'=>storage_path(base_path('storage/app/public/'.$pdfPath))]);
          $pagecount = $mpdf->SetSourceFile(base_path('storage/app/public/'.$pdfPath));

          // Criar o conteúdo do PDF (importando as páginas)
          for ($i = 1; $i <= $pagecount; $i++) {
            // Importar cada página
            $templateId = $mpdf->importPage($i);

            // Definir o tamanho da página de acordo com a página importada
            $size = $mpdf->getTemplateSize($templateId);
            
            // Adicionar a página ao conteúdo PDF
            $mpdf->useTemplate($templateId);
          }      
          
          $mpdf->SetProtection(['print', 'copy'], '123', 'kmzway87aa@');  // Adicionando senha
          $arquivo = $mpdf->Output('', 'S');

          Storage::put($pdfPath, $arquivo);
        }

        return $pdfPath;

      } catch (\Exception $e) {
        Log::error('Erro ao gerar TESTE PDF: ' . $e->getMessage().' | Linha: '.$e->getTrace()[0]);
        return false; // Retorna false em caso de erro
      }
    }

}
