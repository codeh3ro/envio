<?php

class BoletoItau extends geraFatura
{
    private $dadosBoleto;
    private $objDoc;

    public function __construct($dadosBoleto, $objDoc) {
        $this->dadosBoleto = $dadosBoleto;
        $this->objDoc = $objDoc;
    }

    public function gerarBoleto() {
        $codigobanco = "341";
        $codigo_banco_com_dv = $this->geraCodigoBanco($codigobanco);
        $nummoeda = "9";
        $fator_vencimento = $this->fatorVencimento($this->dadosBoleto["data_vencimento"]);

        $valor = $this->formataNumero($this->dadosBoleto["valor_boleto"], 10, 0, "valor");
        $agencia = $this->formataNumero($this->dadosBoleto["agencia"], 4, 0);
        $conta = $this->formataNumero($this->dadosBoleto["conta"], 5, 0);
        $conta_dv = $this->formataNumero($this->dadosBoleto["conta_dv"], 1, 0);
        $carteira = $this->dadosBoleto["carteira"];
        $nnum = $this->formataNumero($this->dadosBoleto["nosso_numero"], 8, 0);

        $codigo_barras = $codigobanco . $nummoeda . $fator_vencimento . $valor . $carteira . $nnum . $agencia . $conta . $this->modulo10($agencia . $conta) . '000';
        $dv = $this->digitoVerificadorBarra($codigo_barras);
        $linha = substr($codigo_barras, 0, 4) . $dv . substr($codigo_barras, 4, 43);

        $nossonumero = $carteira . '/' . $nnum;
        $agencia_codigo = $agencia . " / " . $conta . "-" . $this->modulo10($agencia . $conta);

        $this->dadosBoleto["codigo_barras"] = $linha;
        $this->dadosBoleto["linha_digitavel"] = $this->montaLinhaDigitavel($linha);
        $this->dadosBoleto["agencia_codigo"] = $agencia_codigo;
        $this->dadosBoleto["nosso_numero"] = $nossonumero;
        $this->dadosBoleto["codigo_banco_com_dv"] = $codigo_banco_com_dv;

        $this->gerardadosBoleto();

        //include("portal_unimed/padrao_boleto/include/fatura_geral.php");
        include("portal_unimed/padrao_boleto/include/layout_itau_pdf.php");
    }

    public function gerardadosBoleto($arrayBoleto, $arrayEndereco, $arrayCidade, $arrayConfBoleto, $arrayPessoaSacado, $valor_cobrado, $taxa_boleto, $dias_de_prazo_para_pagamento, $agencia, $conta, $convenio, $array_ConfigSite)
    {
        // ITENS MENSALIDADE
        $arrayItensMensalidade = $this->objDoc->getItensMensalidade();
        if (!empty($arrayItensMensalidade)) {
            $this->dadosBoleto['descricao_itens'] = null;
            $totalGrupo = null;
            $cont = 0;
            foreach ($arrayItensMensalidade as $grupoApro) {
                $totalGrupo += $grupoApro['Total'];
                $this->dadosBoleto['descricao_itens'][$grupoApro['Ato']][$cont]['descricao'] = utf8_decode($grupoApro['Nome']);
                $this->dadosBoleto['descricao_itens'][$grupoApro['Ato']][$cont]['valor'] = number_format((float)$grupoApro['Total'], 2, ',', '.');
                $cont++;
            }
            $this->dadosBoleto['total_itens'] = number_format((float)$totalGrupo, 2, ',', '.');
        }

        // INSTRUÇÕES E OUTROS DADOS
        $this->dadosBoleto['instrucoes_impostos'] = $this->objDoc->getInstucaoImpostosByIdDoc();
        $this->dadosBoleto['utilizacaoBoleto'] = $this->objDoc->getUltilizacaoBoletoPF();
        $this->dadosBoleto['composicaoCobrancaBoleto'] = $this->objDoc->getComposicaoCobrancaBoletoPF();

        // DEMONSTRATIVO MENSALIDADE
        if ($arrayBoleto['Tipo'] == 2) {
            $this->dadosBoleto["demonstrativoMensalidade"] = "<table><tr>";
            $cont = 0;
            $subtrair = 0;
            $espacos = 17;
            $arrayMensalidade = $this->objDoc->getItensBoleto();
            foreach ($arrayMensalidade as $mens) {
                $cont++;
                if ($cont == 4) {
                    $this->dadosBoleto["demonstrativoMensalidade"] .= "</tr><tr>";
                    $cont = 1;
                    $subtrair += 5;
                }
                $sinal = '';
                if ($mens['TipoValor'] == 1) {
                    $sinal = ' -';
                }
                $this->dadosBoleto["demonstrativoMensalidade"] .= "<td style='width: 222px;font-size: 8px;'>" . $mens['Nome'] . "<br/>" . $mens['Codigo'] . "<br/>" . $mens['NomeModuloOperadora'] . " - " . $mens["Abrangencia"] . "<br/>Vigencia: " . date('d/m/Y', strtotime($mens['InicioVigencia'])) . " - Valor: " . $sinal . number_format($mens["ValorMensalidade"], 2, ',', '') . "</td>";
            }
            $subtrair += 5;
            $this->dadosBoleto["demonstrativoMensalidade"] .= "</tr></table>";
            $espacos -= $subtrair;
            while ($espacos > 0) {
                $this->dadosBoleto["demonstrativoMensalidade"] .= "<br/>";
                $espacos--;
            }
        } else {
            $this->dadosBoleto["demonstrativoMensalidade"] = '';
        }

        // VALORES E INSTRUÇÕES
        $this->dadosBoleto["valor_semjuros"] = number_format((float)$valor_cobrado, 2, ',', '');
        $this->dadosBoleto["sacado"] = $arrayBoleto['Nome'];
        $this->dadosBoleto["cpf_sacado"] = $arrayBoleto['Cnp'];
        $this->dadosBoleto["endereco1"] = $arrayEndereco['Logradouro'] . " Nº " . $arrayEndereco['NumLogradouro'] . " Bairro: " . $arrayEndereco['Bairro'];
        $this->dadosBoleto["endereco2"] = $arrayCidade['Nome'] . " - " . $arrayCidade['UF'];
        $this->dadosBoleto["endereco3"] = $arrayEndereco['CEP'];
        $this->dadosBoleto["endereco4"] = $arrayEndereco['Bairro'];
        $this->dadosBoleto["competencia"] = substr($arrayBoleto['CompFinanceira'], 4, 2) . '/' . substr($arrayBoleto['CompFinanceira'], 0, 4);
        $this->dadosBoleto["cod_unimed"] = $arrayConfBoleto['cod_unimed'];
        $this->dadosBoleto["cod_contrato"] = $arrayBoleto['Codigo'];
        $this->dadosBoleto["sacado_cnpj"] = $this->formataCNPJ($arrayBoleto['Cnp']);
        $this->dadosBoleto["inscricao_estadual"] = $arrayPessoaSacado['Numero'];
        $this->dadosBoleto["inscricao_data"] = $arrayPessoaSacado['DataExp'];

        $this->dadosBoleto["instrucoes1"] = "SR. CAIXA, NAO RECEBER APOS " . $dias_de_prazo_para_pagamento . " DIAS DO VENCIMENTO.";
        $this->dadosBoleto["instrucoes2"] = "PAG. QUALQUER AGENCIA BANCARIA ATE SEU VENC.";
        $this->dadosBoleto["instrucoes3"] = "APOS VENCIMENTO, MULTA 2% MAIS MORA DE 1% AM.";
        $this->dadosBoleto["instrucoes4"] = "OS BOLETOS DOS CONTRATOS C/ ANIV DE 05 A 07/2024 FORAM GERADOS SEM REAJUSTE ANUAL. O REAJUSTE RETROATIVO SERA COBRADO NOS BOLETOS DE 08 A 10/2024. REAJUSTE ANUAL (ANS) 6,91% VIG. 05/2024 A 04/2025, CONFORME OFÍCIO Nº: 215/2024/GEFAP/GGREP/DIPRO/ANS.";

        $this->dadosBoleto["mora_multa"] = number_format($taxa_boleto, 2, ',', '');
        $this->dadosBoleto["outros_acrescimos"] = "";
        $this->dadosBoleto["multa_perc"] = (str_replace(",", ".", $arrayMultaJuros['multa']) * 100);
        $this->dadosBoleto["juros_perc"] = 0.0333;

        // DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO
        $this->dadosBoleto["quantidade"] = "&nbsp;";
        $this->dadosBoleto["valor_unitario"] = $this->dadosBoleto['valor_boleto'];
        $this->dadosBoleto["aceite"] = "N";
        $this->dadosBoleto["especie"] = "R$";
        $this->dadosBoleto["especie_doc"] = "DM";

        // DADOS ESPECIFICOS DO SICOOB
        $this->dadosBoleto["modalidade_cobranca"] = "01";
        $this->dadosBoleto["numero_parcela"] = "01";

        // DADOS DA SUA CONTA - BANCO SICOOB
        $this->dadosBoleto["agencia"] = $agencia; // Num da agencia, sem digito
        $this->dadosBoleto["conta"] = $conta; // Num da conta, sem digito

        // DADOS PERSONALIZADOS - SICOOB
        $this->dadosBoleto["convenio"] = $convenio; // Num do convênio - REGRA: No máximo 7 dígitos
        $this->dadosBoleto["carteira"] = $arrayConfBoleto['carteira'];

        // SEUS DADOS
        $this->dadosBoleto["identificacao"] = $array_ConfigSite['nome_site'];
        $this->dadosBoleto["cpf_cnpj"] = $arrayConfBoleto['cnpj'];
        $this->dadosBoleto["endereco"] = $array_ConfigSite['Endereco'] . ' - ' . $array_ConfigSite['Complemento'];
        $this->dadosBoleto["cep"] = $array_ConfigSite['CEP'];
        $this->dadosBoleto["telefone"] = $arrayConfBoleto['telefone'];
        $this->dadosBoleto["email"] = $arrayConfBoleto['email'];
        $this->dadosBoleto["numero_ans"] = $array_ConfigSite['numero_ans'];
        $this->dadosBoleto["cidade_uf"] = $array_ConfigSite['Cidade'] . ' - ' . $array_ConfigSite['Estado'];
        $this->dadosBoleto["cedente"] = $arrayConfBoleto['cedente'];
    }

    public function getdadosBoleto()
    {
        return $this->dadosBoleto;
    }

    private function formataCNPJ($cnpj)
    {
        // Implementar a formatação do CNPJ aqui se necessário
        return $cnpj;
    }

    private function digitoVerificadorBarra($numero) {
        $resto2 = $this->modulo11($numero, 9, 1);
        $digito = 11 - $resto2;
        return ($digito == 0 || $digito == 1 || $digito == 10 || $digito == 11) ? 1 : $digito;
    }

    private function formataNumero($numero, $loop, $insert, $tipo = "geral") {
        $numero = str_replace(",", "", $numero);
        if ($tipo == "geral") {
            while (strlen($numero) < $loop) {
                $numero = $insert . $numero;
            }
        } elseif ($tipo == "valor") {
            while (strlen($numero) < $loop) {
                $numero = $insert . $numero;
            }
        } elseif ($tipo == "convenio") {
            while (strlen($numero) < $loop) {
                $numero = $numero . $insert;
            }
        }
        return $numero;
    }

    private function fatorVencimento($data) {
        $data = explode("/", $data);
        $ano = $data[2];
        $mes = $data[1];
        $dia = $data[0];
        return abs($this->_dateToDays("1997", "10", "07") - $this->_dateToDays($ano, $mes, $dia));
    }

    private function _dateToDays($year, $month, $day) {
        $century = substr($year, 0, 2);
        $year = substr($year, 2, 2);
        if ($month > 2) {
            $month -= 3;
        } else {
            $month += 9;
            if ($year) {
                $year--;
            } else {
                $year = 99;
                $century--;
            }
        }
        return floor((146097 * $century) / 4) + floor((1461 * $year) / 4) + floor((153 * $month + 2) / 5) + intval($day) + 1721119;
    }

    private function modulo10($num) {
        $numtotal10 = 0;
        $fator = 2;

        for ($i = strlen($num); $i > 0; $i--) {
            $numeros[$i] = substr($num, $i - 1, 1);
            $temp = $numeros[$i] * $fator;
            $temp0 = 0;
            foreach (preg_split('//', $temp, -1, PREG_SPLIT_NO_EMPTY) as $k => $v) {
                $temp0 += $v;
            }
            $numtotal10 += $temp0;
            $fator = ($fator == 2) ? 1 : 2;
        }

        $resto = $numtotal10 % 10;
        return ($resto == 0) ? 0 : 10 - $resto;
    }

    private function modulo11($num, $base = 9, $r = 0) {
        $soma = 0;
        $fator = 2;

        for ($i = strlen($num); $i > 0; $i--) {
            $numeros[$i] = substr($num, $i - 1, 1);
            $soma += $numeros[$i] * $fator;
            $fator = ($fator == $base) ? 1 : $fator + 1;
        }

        if ($r == 0) {
            $soma *= 10;
            $digito = $soma % 11;
            return ($digito == 10) ? 0 : $digito;
        } else {
            return $soma % 11;
        }
    }

    private function montaLinhaDigitavel($codigo) {
        $banco = substr($codigo, 0, 3);
        $moeda = substr($codigo, 3, 1);
        $ccc = substr($codigo, 19, 3);
        $ddnnum = substr($codigo, 22, 2);
        $dv1 = $this->modulo10($banco . $moeda . $ccc . $ddnnum);
        $resnnum = substr($codigo, 24, 6);
        $dac1 = substr($codigo, 30, 1);
        $dddag = substr($codigo, 31, 3);
        $dv2 = $this->modulo10($resnnum . $dac1 . $dddag);
        $resag = substr($codigo, 34, 1);
        $contadac = substr($codigo, 35, 6);
        $zeros = substr($codigo, 41, 3);
        $dv3 = $this->modulo10($resag . $contadac . $zeros);
        $dv4 = substr($codigo, 4, 1);
        $fator = substr($codigo, 5, 4);
        $valor = substr($codigo, 9, 10);

        $campo1 = substr($banco . $moeda . $ccc . $ddnnum . $dv1, 0, 5) . '.' . substr($banco . $moeda . $ccc . $ddnnum . $dv1, 5, 5);
        $campo2 = substr($resnnum . $dac1 . $dddag . $dv2, 0, 5) . '.' . substr($resnnum . $dac1 . $dddag . $dv2, 5, 6);
        $campo3 = substr($resag . $contadac . $zeros . $dv3, 0, 5) . '.' . substr($resag . $contadac . $zeros . $dv3, 5, 6);
        $campo4 = $dv4;
        $campo5 = $fator . $valor;

        return "$campo1 $campo2 $campo3 $campo4 $campo5";
    }

    private function geraCodigoBanco($numero) {
        $parte1 = substr($numero, 0, 3);
        $parte2 = $this->modulo11($parte1);
        return $parte1 . "-" . $parte2;
    }
}

?>
