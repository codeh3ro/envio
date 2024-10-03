<?php

use Mpdf\Mpdf;

class geraFatura
{
    private $contratoFinanceiro;
    private $autoId;
    private $compFinanceira;
    private $tipoFatura;

    /**
     * @return mixed
     */
    public function getAutoId()
    {
        return $this->autoId;
    }

    /**
     * @param mixed $autoId
     */
    public function setAutoId($autoId)
    {
        $this->autoId = $autoId;
    }

    /**
     * @return mixed
     */
    public function getContratoFinanceiro()
    {
        return $this->contratoFinanceiro;
    }

    /**
     * @param mixed $contratoFinanceiro
     */
    public function setContratoFinanceiro($contratoFinanceiro)
    {
        $this->contratoFinanceiro = $contratoFinanceiro;
    }

    /**
     * @return mixed
     */
    public function getCompFinanceira()
    {
        return $this->compFinanceira;
    }

    /**
     * @param mixed $compFinanceira
     */
    public function setCompFinanceira($compFinanceira)
    {
        $this->compFinanceira = $compFinanceira;
    }

    /**
     * @return mixed
     */
    public function getTipoFatura()
    {
        return $this->tipoFatura;
    }

    /**
     * @param mixed $tipoFatura
     */
    public function setTipoFatura($tipoFatura)
    {
        $this->tipoFatura = $tipoFatura;
    }

    public function __construct()
    {
    }
    
    /**
     * @return mixed
     */
    public function geraFaturaItau()
    {
        $mpdf = new mPDF();
        $objDoc = new DocFinanceiro();
        $objDoc->setAutoId($this->autoId);
        $arrayBoleto = $objDoc->getBoletoByIdDocPreview();
        $arquivoPDF2 = null;

        if (!empty($arrayBoleto)) {
            
            ob_clean();
            ob_start();

            if (!empty($this->autoId)) {
                $dados[1] = $this->autoId;
            }

            $configSite = new Config_site();
            $array_ConfigSite = $configSite->getConfig();

            $tipo_fatura = $this->tipoFatura;//TIPO FATURAS -> 1-BOLETO PF | 2-FATURA PRE | 3-FATURA PÓS
            $objConfBoleto = new Config_Boleto();
            $objConfBoleto->setId($tipo_fatura);
            $arrayConfBoleto = $objConfBoleto->getConfig();
            $objTipoBoleto = new Tipo_Boleto();
            $objTipoBoleto->setId($arrayConfBoleto['id_tipo_boleto']);
            $arrayTipoBoleto = $objTipoBoleto->getById();

            /**
             * BUSCA DOC FINANCEIRO PARA GERAR BOLETO
             */

            if(!empty(Url::getURL(3)) && is_numeric(base64_decode(Url::getURL(3)))){
                $objDoc->setAutoId(base64_decode(Url::getURL(3)));
            }
            elseif(!empty($dados[1])){
                $objDoc->setAutoId($dados[1]);
            }
            $arrayBoleto = $objDoc->getBoletoByIdDocPreview();

            $arrayMultaJuros = $objDoc->getMultaJuros();
            /**
             * FIM BUSCA DOC FINANCEIRO
             */

            /**
             * CONFIGURAÇÃO BOLETO
             */
            $objConfBoleto = new Config_Boleto();
            $objConfBoleto->setId($tipo_fatura);
            $arrayConfBoleto = $objConfBoleto->getConfig();
            $objTipoBoleto = new Tipo_Boleto();
            $objTipoBoleto->setId($arrayConfBoleto['id_tipo_boleto']);
            $arrayTipoBoelto = $objTipoBoleto->getById();

            $paginaBoleto = 'boleto/'.$arrayTipoBoelto['pagina'].'/';
            /**
             * FIM CONFIGURAÇÃO BOLETO
             */


            // DADOS DO BOLETO PARA O SEU CLIENTE
            $dias_de_prazo_para_pagamento = $arrayConfBoleto['prazo_pagamento'];
            $taxa_boleto = 0;//usar como juros
            $data_venc = date('d/m/Y',strtotime($arrayBoleto['DataVencimento']));//date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006";
            $valor_cobrado = $arrayBoleto['ValorLiquido']; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
            $valor_cobrado = str_replace(",", ".",$valor_cobrado);
            $valor_boleto=number_format($valor_cobrado, 2, ',', '');

            $dadosboleto["nosso_numero"] = $arrayBoleto["NossoNumero"];  // Nosso numero - REGRA: Máximo de 8 caracteres!
            $dadosboleto["numero_documento"] = $arrayBoleto['Numero'];	// Num do pedido ou nosso numero
            $dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
            $dadosboleto["data_documento"] = date('d/m/Y',strtotime($arrayBoleto['DataEmissao'])); // Data de emissão do Boleto
            $dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
            $dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula


            // DADOS DO SEU CLIENTE
            $objContrato = new Contrato();
            $objContrato->setCodigo($arrayBoleto['Codigo']);
            $arrayContrato = $objContrato->getByContratoFinancero();

            $objEndereco = new EnderecoPessoa();
            $objEndereco->setPessoa($arrayContrato['Pessoa']);
            $arrayEndereco = $objEndereco->getAllByPessoaUltimo();

            $objCidade = new CidadePais();
            $objCidade->setCodigo($arrayEndereco['Cidade']);
            $arrayCidade = $objCidade->getByCodigo();



            // DADOS DO SEU CLIENTE
            $dadosboleto["sacado"] = $arrayBoleto['Nome'];
            $dadosboleto["endereco1"] = $arrayEndereco['Logradouro']." Nº ".$arrayEndereco['NumLogradouro']." Bairro: ".$arrayEndereco['Bairro'];
            $dadosboleto["endereco2"] = $arrayCidade['Nome']." - ".$arrayCidade['UF']." -  CEP: ".$arrayEndereco['CEP'];

            // INFORMACOES PARA O CLIENTE
            $dadosboleto["demonstrativo1"] = "";
            $dadosboleto["demonstrativo2"] = "<b>Competência: ".substr($arrayBoleto['CompFinanceira'],4,2).'/'.substr($arrayBoleto['CompFinanceira'],0,4)."</b>";
            $dadosboleto["demonstrativo3"] = "<b>Contrato: ".$arrayBoleto['Codigo']."</b>";

            $dadosboleto["instrucoes1"] = "- Sr. Caixa, cobrar multa de ".($arrayMultaJuros['multa']*100)."% após o vencimento e juros de ".($arrayMultaJuros['juros']*100)."% ao dia";
            $dadosboleto["instrucoes2"] = "- Não Receber após ".$dias_de_prazo_para_pagamento." dias do vencimento";
            $dadosboleto["instrucoes3"] = "";
            $dadosboleto["instrucoes4"] = "";

            // DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
            $dadosboleto["quantidade"] = "1";
            $dadosboleto["valor_unitario"] = $dadosboleto['valor_boleto'];
            $dadosboleto["aceite"] = "N";
            $dadosboleto["especie"] = "R$";
            $dadosboleto["especie_doc"] = "DM";


            // ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //
            //$IdDoSeuSistemaAutoIncremento = '2'; // Deve informar um numero sequencial a ser passada a função abaixo, Até 6 dígitos
            $agencia = $arrayConfBoleto['agencia']; // Num da agencia, sem digito
            $conta = $arrayConfBoleto['conta']; // Num da conta, sem digito
            $convenio = $arrayConfBoleto['convenio']; //Número do convênio indicado no frontend

            // DADOS DA SUA CONTA - ITAÚ
            $dadosboleto["agencia"] = $agencia; // Num da agencia, sem digito
            $dadosboleto["conta"] = substr($conta,0,strlen($conta)-2);	// Num da conta, sem digito
            $dadosboleto["conta_dv"] = substr($conta,strlen($conta)-1); 	// Digito do Num da conta

            // DADOS PERSONALIZADOS - ITAÚ
            $dadosboleto["carteira"] = $arrayConfBoleto['carteira'];  // Código da Carteira: pode ser 175, 174, 104, 109, 178, ou 157

            // SEUS DADOS
            $dadosboleto["identificacao"] = $array_ConfigSite['nome_site'];
            $dadosboleto["cpf_cnpj"] = $arrayConfBoleto['cnpj'];
            $dadosboleto["endereco"] = $array_ConfigSite['Endereco'].' - '.$array_ConfigSite['Complemento'];
            $dadosboleto["cidade_uf"] = $array_ConfigSite['Cidade'].' - '.$array_ConfigSite['Estado'].' - '.$array_ConfigSite['CEP'];
            $dadosboleto["cedente"] = $array_ConfigSite['nome_site'];





            ##############################################





            // FUNÇÕES
            // Algumas foram retiradas do Projeto PhpBoleto e modificadas para atender as particularidades de cada banco

            if (!function_exists('digitoVerificador_barra')) {
                function digitoVerificador_barra($numero) {
                    $resto2 = modulo_11($numero, 9, 1);
                    $digito = 11 - $resto2;
                    if ($digito == 0 || $digito == 1 || $digito == 10  || $digito == 11) {
                        $dv = 1;
                    } else {
                        $dv = $digito;
                    }
                    return $dv;
                }
            }

            if (!function_exists('formata_numero')) {
                function formata_numero($numero,$loop,$insert,$tipo = "geral") {
                    if ($tipo == "geral") {
                        $numero = str_replace(",","",$numero);
                        while(strlen($numero)<$loop){
                            $numero = $insert . $numero;
                        }
                    }
                    if ($tipo == "valor") {
                        /*
                        retira as virgulas
                        formata o numero
                        preenche com zeros
                        */
                        $numero = str_replace(",","",$numero);
                        while(strlen($numero)<$loop){
                            $numero = $insert . $numero;
                        }
                    }
                    if ($tipo == "convenio") {
                        while(strlen($numero)<$loop){
                            $numero = $numero . $insert;
                        }
                    }
                    return $numero;
                }
            }

            if (!function_exists('fbarcode')) {
                function fbarcode($valor,$idDocFinan='000001'){
                new barCodeGenrator($valor, 1, 'portal_unimed/padrao_boleto/codigosbarra/' . $idDocFinan . '.gif', 450, 60);

                echo $codigoHTMLBarra = '<img src="portal_unimed/padrao_boleto/codigosbarra/' . $idDocFinan . '.gif"/>';

                /*$fino = 1 ;
                $largo = 3 ;
                $altura = 60 ;

                $barcodes[0] = "00110" ;
                $barcodes[1] = "10001" ;
                $barcodes[2] = "01001" ;
                $barcodes[3] = "11000" ;
                $barcodes[4] = "00101" ;
                $barcodes[5] = "10100" ;
                $barcodes[6] = "01100" ;
                $barcodes[7] = "00011" ;
                $barcodes[8] = "10010" ;
                $barcodes[9] = "01010" ;
                for($f1=9;$f1>=0;$f1--){
                    for($f2=9;$f2>=0;$f2--){
                    $f = ($f1 * 10) + $f2 ;
                    $texto = "" ;
                    for($i=1;$i<6;$i++){
                        $texto .=  substr($barcodes[$f1],($i-1),1) . substr($barcodes[$f2],($i-1),1);
                    }
                    $barcodes[$f] = $texto;
                    }
                }


                //Desenho da barra


                //Guarda inicial
                */?><!--<img src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/p.png width=<?php /*echo $fino*/?> height=<?php /*echo $altura*/?> border=0><img
                src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/b.png width=<?php /*echo $fino*/?> height=<?php /*echo $altura*/?> border=0><img
                src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/p.png width=<?php /*echo $fino*/?> height=<?php /*echo $altura*/?> border=0><img
                src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/b.png width=<?php /*echo $fino*/?> height=<?php /*echo $altura*/?> border=0><img
                <?php
                /*$texto = $valor ;
                if((strlen($texto) % 2) <> 0){
                    $texto = "0" . $texto;
                }

                // Draw dos dados
                while (strlen($texto) > 0) {
                $i = round(esquerda($texto,2));
                $texto = direita($texto,strlen($texto)-2);
                $f = $barcodes[$i];
                for($i=1;$i<11;$i+=2){
                    if (substr($f,($i-1),1) == "0") {
                    $f1 = $fino ;
                    }else{
                    $f1 = $largo ;
                    }
                */?>
                    src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/p.png width=<?php /*echo $f1*/?> height=<?php /*echo $altura*/?> border=0><img
                <?php
                /*    if (substr($f,$i,1) == "0") {
                    $f2 = $fino ;
                    }else{
                    $f2 = $largo ;
                    }
                */?>
                    src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/b.png width=<?php /*echo $f2*/?> height=<?php /*echo $altura*/?> border=0><img
                <?php
                /*  }
                }

                // Draw guarda final
                */?>
                src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/p.png width=<?php /*echo $largo*/?> height=<?php /*echo $altura*/?> border=0><img
                src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/b.png width=<?php /*echo $fino*/?> height=<?php /*echo $altura*/?> border=0><img
                src=<?php /*echo Url::getBase().'portal_unimed/padrao_boleto/'; */?>imagens/p.png width=<?php /*echo 1*/?> height=<?php /*echo $altura*/?> border=0>
                --><?php
                } //Fim da função
            }

            if (!function_exists('esquerda')) {
                function esquerda($entra,$comp){
                    return substr($entra,0,$comp);
                }
            }

            if (!function_exists('direita')) {
                function direita($entra,$comp){
                    return substr($entra,strlen($entra)-$comp,$comp);
                }
            }

            if (!function_exists('fator_vencimento')) {
                function fator_vencimento($data) {
                    $data = explode("/",$data);
                    $ano = $data[2];
                    $mes = $data[1];
                    $dia = $data[0];
                    return(abs((_dateToDays("1997","10","07")) - (_dateToDays($ano, $mes, $dia))));
                }
            }

            if (!function_exists('_dateToDays')) {
                function _dateToDays($year,$month,$day) {
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
                            $century --;
                        }
                    }
                    return ( floor((  146097 * $century)    /  4 ) +
                            floor(( 1461 * $year)        /  4 ) +
                            floor(( 153 * $month +  2) /  5 ) +
                                intval($day) +  1721119);
                }
            }

            if (!function_exists('modulo_10')) {
                function modulo_10($num) {
                        $numtotal10 = 0;
                        $fator = 2;

                        // Separacao dos numeros
                        for ($i = strlen($num); $i > 0; $i--) {
                            // pega cada numero isoladamente
                            $numeros[$i] = substr($num,$i-1,1);
                            // Efetua multiplicacao do numero pelo (falor 10)
                            // 2002-07-07 01:33:34 Macete para adequar ao Mod10 do Itaú
                            $temp = $numeros[$i] * $fator;
                            $temp0=0;
                            foreach (preg_split('//',$temp,-1,PREG_SPLIT_NO_EMPTY) as $k=>$v){ $temp0+=$v; }
                            $parcial10[$i] = $temp0; //$numeros[$i] * $fator;
                            // monta sequencia para soma dos digitos no (modulo 10)
                            $numtotal10 += $parcial10[$i];
                            if ($fator == 2) {
                                $fator = 1;
                            } else {
                                $fator = 2; // intercala fator de multiplicacao (modulo 10)
                            }
                        }

                        // várias linhas removidas, vide função original
                        // Calculo do modulo 10
                        $resto = $numtotal10 % 10;
                        $digito = 10 - $resto;
                        if ($resto == 0) {
                            $digito = 0;
                        }

                        return $digito;

                }
            }

            if (!function_exists('monta_linha_digitavel')) {
                function monta_linha_digitavel($codigo) {
                    // campo 1
                    $banco    = substr($codigo,0,3);
                    $moeda    = substr($codigo,3,1);
                    $ccc      = substr($codigo,19,3);
                    $ddnnum   = substr($codigo,22,2);
                    $dv1      = modulo_10($banco.$moeda.$ccc.$ddnnum);
                    // campo 2
                    $resnnum  = substr($codigo,24,6);
                    $dac1     = substr($codigo,30,1);//modulo_10($agencia.$conta.$carteira.$nnum);
                    $dddag    = substr($codigo,31,3);
                    $dv2      = modulo_10($resnnum.$dac1.$dddag);
                    // campo 3
                    $resag    = substr($codigo,34,1);
                    $contadac = substr($codigo,35,6); //substr($codigo,35,5).modulo_10(substr($codigo,35,5));
                    $zeros    = substr($codigo,41,3);
                    $dv3      = modulo_10($resag.$contadac.$zeros);
                    // campo 4
                    $dv4      = substr($codigo,4,1);
                    // campo 5
                    $fator    = substr($codigo,5,4);
                    $valor    = substr($codigo,9,10);

                    $campo1 = substr($banco.$moeda.$ccc.$ddnnum.$dv1,0,5) . '.' . substr($banco.$moeda.$ccc.$ddnnum.$dv1,5,5);
                    $campo2 = substr($resnnum.$dac1.$dddag.$dv2,0,5) . '.' . substr($resnnum.$dac1.$dddag.$dv2,5,6);
                    $campo3 = substr($resag.$contadac.$zeros.$dv3,0,5) . '.' . substr($resag.$contadac.$zeros.$dv3,5,6);
                    $campo4 = $dv4;
                    $campo5 = $fator.$valor;

                    return "$campo1 $campo2 $campo3 $campo4 $campo5";
                }
            }

            if (!function_exists('modulo_11')) {
                function modulo_11($num, $base=9, $r=0)  {
                    /**
                     *   Autor:
                     *           Pablo Costa <pablo@users.sourceforge.net>
                     *
                     *   Função:
                     *    Calculo do Modulo 11 para geracao do digito verificador
                     *    de boletos bancarios conforme documentos obtidos
                     *    da Febraban - www.febraban.org.br
                     *
                     *   Entrada:
                     *     $num: string numérica para a qual se deseja calcularo digito verificador;
                     *     $base: valor maximo de multiplicacao [2-$base]
                     *     $r: quando especificado um devolve somente o resto
                     *
                     *   Saída:
                     *     Retorna o Digito verificador.
                     *
                     *   Observações:
                     *     - Script desenvolvido sem nenhum reaproveitamento de código pré existente.
                     *     - Assume-se que a verificação do formato das variáveis de entrada é feita antes da execução deste script.
                     */

                    $soma = 0;
                    $fator = 2;

                    /* Separacao dos numeros */
                    for ($i = strlen($num); $i > 0; $i--) {
                        // pega cada numero isoladamente
                        $numeros[$i] = substr($num,$i-1,1);
                        // Efetua multiplicacao do numero pelo falor
                        $parcial[$i] = $numeros[$i] * $fator;
                        // Soma dos digitos
                        $soma += $parcial[$i];
                        if ($fator == $base) {
                            // restaura fator de multiplicacao para 2
                            $fator = 1;
                        }
                        $fator++;
                    }

                    /* Calculo do modulo 11 */
                    if ($r == 0) {
                        $soma *= 10;
                        $digito = $soma % 11;
                        if ($digito == 10) {
                            $digito = 0;
                        }
                        return $digito;
                    } elseif ($r == 1){
                        $resto = $soma % 11;
                        return $resto;
                    }
                }
            }

            if (!function_exists('geraCodigoBanco')) {
                function geraCodigoBanco($numero) {
                    $parte1 = substr($numero, 0, 3);
                    $parte2 = modulo_11($parte1);
                    return $parte1 . "-" . $parte2;
                }
            }

            $codigobanco = "341";
            $codigo_banco_com_dv = geraCodigoBanco($codigobanco);
            $nummoeda = "9";
            $fator_vencimento = fator_vencimento($dadosboleto["data_vencimento"]);

            //valor tem 10 digitos, sem virgula
            $valor = formata_numero($dadosboleto["valor_boleto"],10,0,"valor");
            //agencia é 4 digitos
            $agencia = formata_numero($dadosboleto["agencia"],4,0);
            //conta é 5 digitos + 1 do dv
            $conta = formata_numero($dadosboleto["conta"],5,0);
            $conta_dv = formata_numero($dadosboleto["conta_dv"],1,0);
            //carteira 175
            $carteira = $dadosboleto["carteira"];
            //nosso_numero no maximo 8 digitos
            $nnum = formata_numero($dadosboleto["nosso_numero"],8,0);

            //$codigo_barras = $codigobanco.$nummoeda.$fator_vencimento.$valor.$carteira.$nnum.modulo_10($agencia.$conta.$carteira.$nnum).$agencia.$conta.modulo_10($agencia.$conta).'000';
            $codigo_barras = $codigobanco.$nummoeda.$fator_vencimento.$valor.$carteira.$nnum.$agencia.$conta.modulo_10($agencia.$conta).'000';
            // 43 numeros para o calculo do digito verificador
            $dv = digitoVerificador_barra($codigo_barras);

            // Numero para o codigo de barras com 44 digitos
            $linha = substr($codigo_barras,0,4).$dv.substr($codigo_barras,4,43);

            $nossonumero = $carteira.'/'.$nnum;
            $agencia_codigo = $agencia." / ". $conta."-".modulo_10($agencia.$conta);

            $dadosboleto["codigo_barras"] = $linha;
            $dadosboleto["linha_digitavel"] = monta_linha_digitavel($linha); // verificar
            $dadosboleto["agencia_codigo"] = $agencia_codigo ;
            $dadosboleto["nosso_numero"] = $nossonumero;
            $dadosboleto["codigo_banco_com_dv"] = $codigo_banco_com_dv;

            // NÃO ALTERAR!
            //include("portal_unimed/padrao_boleto/include/funcoes_itau.php");
            include("portal_unimed/padrao_boleto/include/fatura_geral.php");

            // DEFINE SE O LAYOUT É PF OU PJ
            if ($this->tipofatura == '1') {
                include("portal_unimed/padrao_boleto/include/layout_itau_novo_pdf.php"); 
            } else {     
                include("portal_unimed/padrao_boleto/include/layout_itau_pdf.php");
            }

            if(!empty(Url::getURL(3)) && is_numeric(base64_decode(Url::getURL(3)))){
                $mpdf->Output($dadosboleto['identificacao'].'-Boleto.pdf','I');
            }

            $rootDirectory = dirname(dirname(__DIR__));
                     
            // Define o caminho para salvar o PDF
            $directory = $rootDirectory . '/portal_unimed/arquivos/envia_boleto/' . $this->contratoFinanceiro . '/' . $this->autoId . '/';
            $filename = "Boleto_Unimed_Comp_" . substr($this->compFinanceira, 4) . '_' . substr($this->compFinanceira, 0, 4) . '_' . $this->autoId . '.pdf';
            $filename = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $filename); // Substitui caracteres inválidos
            $filepath = $directory . '/' . $filename;

            // Verifica se o diretório existe, senão, cria
            if (!file_exists($directory)) {
                if (!mkdir($directory, 0777, true) && !is_dir($directory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $directory));
                }
            }

            $mpdf->setProtection(array('copy', 'print'),$arrayBoleto['Cnp'],'kmzway87aa@');

            // Gera e salva o PDF
            $mpdf->Output($filepath, \Mpdf\Output\Destination::FILE);

            return $filepath; 
        }
    }

}