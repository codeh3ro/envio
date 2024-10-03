<?php

namespace App\Legacy\Cardio;

class DocFinanceiro
{
    private $AutoId;
    private $Classe;
    private $NumeroProvisorio;
    private $Numero;
    private $Pessoa;
    private $ContratoFinanceiro;
    private $CompFinanceira;
    private $CompSeq;
    private $DataEmissão;
    private $DataVencimento;
    private $ValorBruto;
    private $ValorLiquido;
    private $Eprovisao;
    private $SituacaoDocumento;
    private $SaldoEmAberto;
    private $DataSituacao;
    private $DataInclusao;
    private $CompGeracao;
    private $ParaCobranca;
    private $TotalDebitos;
    private $TotalCreditos;
    private $SomenteProvisorio;
    private $GeradorDoc;
    private $ClassificacaoCobranca;
    private $ValorFatInterc;
    private $DataVencFatInterc;
    private $NumFatInterc;
    private $ProcessoFinanceiro;
    private $RecursoGlosa;
    private $Prestador;

    /**
     * DocFinanceiro constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getAutoId()
    {
        return $this->AutoId;
    }

    /**
     * @param mixed $AutoId
     */
    public function setAutoId($AutoId)
    {
        $this->AutoId = $AutoId;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->Classe;
    }

    /**
     * @param mixed $Classe
     */
    public function setClasse($Classe)
    {
        $this->Classe = $Classe;
    }

    /**
     * @return mixed
     */
    public function getNumeroProvisorio()
    {
        return $this->NumeroProvisorio;
    }

    /**
     * @param mixed $NumeroProvisorio
     */
    public function setNumeroProvisorio($NumeroProvisorio)
    {
        $this->NumeroProvisorio = $NumeroProvisorio;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param mixed $Numero
     */
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;
    }

    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->Pessoa;
    }

    /**
     * @param mixed $Pessoa
     */
    public function setPessoa($Pessoa)
    {
        $this->Pessoa = $Pessoa;
    }

    /**
     * @return mixed
     */
    public function getContratoFinanceiro()
    {
        return $this->ContratoFinanceiro;
    }

    /**
     * @param mixed $ContratoFinanceiro
     */
    public function setContratoFinanceiro($ContratoFinanceiro)
    {
        $this->ContratoFinanceiro = $ContratoFinanceiro;
    }

    /**
     * @return mixed
     */
    public function getCompFinanceira()
    {
        return $this->CompFinanceira;
    }

    /**
     * @param mixed $CompFinanceira
     */
    public function setCompFinanceira($CompFinanceira)
    {
        $this->CompFinanceira = $CompFinanceira;
    }

    /**
     * @return mixed
     */
    public function getCompSeq()
    {
        return $this->CompSeq;
    }

    /**
     * @param mixed $CompSeq
     */
    public function setCompSeq($CompSeq)
    {
        $this->CompSeq = $CompSeq;
    }

    /**
     * @return mixed
     */
    public function getDataEmissão()
    {
        return $this->DataEmissão;
    }

    /**
     * @param mixed $DataEmissão
     */
    public function setDataEmissão($DataEmissão)
    {
        $this->DataEmissão = $DataEmissão;
    }

    /**
     * @return mixed
     */
    public function getDataVencimento()
    {
        return $this->DataVencimento;
    }

    /**
     * @param mixed $DataVencimento
     */
    public function setDataVencimento($DataVencimento)
    {
        $this->DataVencimento = $DataVencimento;
    }

    /**
     * @return mixed
     */
    public function getValorBruto()
    {
        return $this->ValorBruto;
    }

    /**
     * @param mixed $ValorBruto
     */
    public function setValorBruto($ValorBruto)
    {
        $this->ValorBruto = $ValorBruto;
    }

    /**
     * @return mixed
     */
    public function getValorLiquido()
    {
        return $this->ValorLiquido;
    }

    /**
     * @param mixed $ValorLiquido
     */
    public function setValorLiquido($ValorLiquido)
    {
        $this->ValorLiquido = $ValorLiquido;
    }

    /**
     * @return mixed
     */
    public function getEprovisao()
    {
        return $this->Eprovisao;
    }

    /**
     * @param mixed $Eprovisao
     */
    public function setEprovisao($Eprovisao)
    {
        $this->Eprovisao = $Eprovisao;
    }

    /**
     * @return mixed
     */
    public function getSituacaoDocumento()
    {
        return $this->SituacaoDocumento;
    }

    /**
     * @param mixed $SituacaoDocumento
     */
    public function setSituacaoDocumento($SituacaoDocumento)
    {
        $this->SituacaoDocumento = $SituacaoDocumento;
    }

    /**
     * @return mixed
     */
    public function getSaldoEmAberto()
    {
        return $this->SaldoEmAberto;
    }

    /**
     * @param mixed $SaldoEmAberto
     */
    public function setSaldoEmAberto($SaldoEmAberto)
    {
        $this->SaldoEmAberto = $SaldoEmAberto;
    }

    /**
     * @return mixed
     */
    public function getDataSituacao()
    {
        return $this->DataSituacao;
    }

    /**
     * @param mixed $DataSituacao
     */
    public function setDataSituacao($DataSituacao)
    {
        $this->DataSituacao = $DataSituacao;
    }

    /**
     * @return mixed
     */
    public function getDataInclusao()
    {
        return $this->DataInclusao;
    }

    /**
     * @param mixed $DataInclusao
     */
    public function setDataInclusao($DataInclusao)
    {
        $this->DataInclusao = $DataInclusao;
    }

    /**
     * @return mixed
     */
    public function getCompGeracao()
    {
        return $this->CompGeracao;
    }

    /**
     * @param mixed $CompGeracao
     */
    public function setCompGeracao($CompGeracao)
    {
        $this->CompGeracao = $CompGeracao;
    }

    /**
     * @return mixed
     */
    public function getParaCobranca()
    {
        return $this->ParaCobranca;
    }

    /**
     * @param mixed $ParaCobranca
     */
    public function setParaCobranca($ParaCobranca)
    {
        $this->ParaCobranca = $ParaCobranca;
    }

    /**
     * @return mixed
     */
    public function getTotalDebitos()
    {
        return $this->TotalDebitos;
    }

    /**
     * @param mixed $TotalDebitos
     */
    public function setTotalDebitos($TotalDebitos)
    {
        $this->TotalDebitos = $TotalDebitos;
    }

    /**
     * @return mixed
     */
    public function getTotalCreditos()
    {
        return $this->TotalCreditos;
    }

    /**
     * @param mixed $TotalCreditos
     */
    public function setTotalCreditos($TotalCreditos)
    {
        $this->TotalCreditos = $TotalCreditos;
    }

    /**
     * @return mixed
     */
    public function getSomenteProvisorio()
    {
        return $this->SomenteProvisorio;
    }

    /**
     * @param mixed $SomenteProvisorio
     */
    public function setSomenteProvisorio($SomenteProvisorio)
    {
        $this->SomenteProvisorio = $SomenteProvisorio;
    }

    /**
     * @return mixed
     */
    public function getGeradorDoc()
    {
        return $this->GeradorDoc;
    }

    /**
     * @param mixed $GeradorDoc
     */
    public function setGeradorDoc($GeradorDoc)
    {
        $this->GeradorDoc = $GeradorDoc;
    }

    /**
     * @return mixed
     */
    public function getClassificacaoCobranca()
    {
        return $this->ClassificacaoCobranca;
    }

    /**
     * @param mixed $ClassificacaoCobranca
     */
    public function setClassificacaoCobranca($ClassificacaoCobranca)
    {
        $this->ClassificacaoCobranca = $ClassificacaoCobranca;
    }

    /**
     * @return mixed
     */
    public function getValorFatInterc()
    {
        return $this->ValorFatInterc;
    }

    /**
     * @param mixed $ValorFatInterc
     */
    public function setValorFatInterc($ValorFatInterc)
    {
        $this->ValorFatInterc = $ValorFatInterc;
    }

    /**
     * @return mixed
     */
    public function getDataVencFatInterc()
    {
        return $this->DataVencFatInterc;
    }

    /**
     * @param mixed $DataVencFatInterc
     */
    public function setDataVencFatInterc($DataVencFatInterc)
    {
        $this->DataVencFatInterc = $DataVencFatInterc;
    }

    /**
     * @return mixed
     */
    public function getNumFatInterc()
    {
        return $this->NumFatInterc;
    }

    /**
     * @param mixed $NumFatInterc
     */
    public function setNumFatInterc($NumFatInterc)
    {
        $this->NumFatInterc = $NumFatInterc;
    }

    /**
     * @return mixed
     */
    public function getProcessoFinanceiro()
    {
        return $this->ProcessoFinanceiro;
    }

    /**
     * @param mixed $ProcessoFinanceiro
     */
    public function setProcessoFinanceiro($ProcessoFinanceiro)
    {
        $this->ProcessoFinanceiro = $ProcessoFinanceiro;
    }

    /**
     * @return mixed
     */
    public function getRecursoGlosa()
    {
        return $this->RecursoGlosa;
    }

    /**
     * @param mixed $RecursoGlosa
     */
    public function setRecursoGlosa($RecursoGlosa)
    {
        $this->RecursoGlosa = $RecursoGlosa;
    }

    /**
     * @return mixed
     */
    public function getPrestador()
    {
        return $this->Prestador;
    }

    /**
     * @param mixed $Prestador
     */
    public function setPrestador($Prestador)
    {
        $this->Prestador = $Prestador;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getDocByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM DocFinanceiro WHERE AutoId = ?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllFinanceiro($limit=''){
        try{
            if($limit!=''){
                $limit=explode(',',$limit);
                $pag = $limit[0];
                $maximo = $limit[1];
                $limit='OFFSET '.$limit[0].' ROWS FETCH NEXT '.$limit[1].' ROWS ONLY';
            }
            $conn = DB_Cardio::conn();
            /*$sql = "SELECT f.AutoId, CASE WHEN f.DataVencimento < GETDATE() AND f.SituacaoDocumento = 1 THEN CAST('Vencido a' AS VARCHAR(10)) + ' ' + CAST(Datediff(day , f.DataVencimento , GETDATE()) AS VARCHAR(5)) + ' ' + CAST('dias' AS VARCHAR(4)) END AS status, f.Classe, c.Nome AS NomeClasse, s.Nome AS NomeSituacao, t.Codigo AS CodigoContratoFinanceiro, f.CompFinanceira, f.CompGeracao, f.CompSeq, f.ContratoFinanceiro, f.DataEmissao, f.DataInclusao, f.DataSituacao, f.DataVencimento, f.Numero, f.NumeroProvisorio, f.Pessoa, f.SaldoEmAberto, f.SituacaoDocumento, f.ValorBruto, f.SaldoEmAberto, f.TipoNegJuros, f.TipoNegMultas FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro INNER JOIN BoletoCobranca AS b ON b.DocFinanceiro = f.AutoId
                      WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) ORDER BY f.DataVencimento DESC, f.AutoId DESC ".$limit;*/

            $sql = "SELECT top($maximo) f.AutoId, CASE WHEN f.DataVencimento < GETDATE() AND f.SituacaoDocumento = 1 THEN CAST('Vencido a' AS VARCHAR(10)) + ' ' + CAST(Datediff(day , f.DataVencimento , GETDATE()) AS VARCHAR(5)) + ' ' + CAST('dias' AS VARCHAR(4)) END AS status, f.Classe, c.Nome AS NomeClasse, s.Nome AS NomeSituacao, t.Codigo AS CodigoContratoFinanceiro, f.CompFinanceira, f.CompGeracao, f.CompSeq, f.ContratoFinanceiro, f.DataEmissao, f.DataInclusao, f.DataSituacao, f.DataVencimento, f.Numero, f.NumeroProvisorio, f.Pessoa, f.ValorLiquido, f.SituacaoDocumento, f.ValorBruto, f.SaldoEmAberto, f.TipoNegJuros, f.TipoNegMultas FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro INNER JOIN BoletoCobranca AS b ON b.DocFinanceiro = f.AutoId
                      WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) AND f.AutoId NOT IN(
                          SELECT top($pag) f.AutoId FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro INNER JOIN BoletoCobranca AS b ON b.DocFinanceiro = f.AutoId
                          WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) ORDER BY f.AutoId DESC
                      ) ORDER BY f.DataVencimento DESC, f.AutoId DESC ";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->ContratoFinanceiro);
            $busca->bindValue(2,$this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function contAllFinanceiro(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT count(f.AutoId) as Total FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro INNER JOIN BoletoCobranca AS b ON b.DocFinanceiro = f.AutoId
                      WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL))";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->ContratoFinanceiro);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            return $array['Total'];
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllSlip($limit=''){
        try{
            if($limit!=''){
                $limit=explode(',',$limit);
                $pag = $limit[0];
                $maximo = $limit[1];
                $limit='OFFSET '.$limit[0].' ROWS FETCH NEXT '.$limit[1].' ROWS ONLY';
            }
            $conn = DB_Cardio::conn();
            /*$sql = "SELECT f.AutoId, f.Classe, c.Nome AS ClasseDocumento, s.Nome AS NomeSituacao, t.Codigo AS CodigoContratoFinanceiro, f.CompFinanceira, f.CompGeracao, f.CompSeq, f.ContratoFinanceiro, f.DataEmissao, f.DataInclusao, f.DataSituacao, f.DataVencimento, f.Numero, f.NumeroProvisorio, f.Pessoa, f.SaldoEmAberto, f.SituacaoDocumento, f.ValorBruto, f.SaldoEmAberto, f.TipoNegJuros, f.TipoNegMultas, '/sic/fornecedor/arquivos/' + CAST(f.CompFinanceira AS Varchar(10)) + '-' + CAST(t.Codigo AS Varchar(20)) + '.pdf' AS Glosas FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
            WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) AND f.Classe=6 ORDER BY f.DataVencimento DESC, f.CompFinanceira DESC ".$limit;*/

            $sql = "SELECT top($maximo) f.AutoId, f.Classe, c.Nome AS ClasseDocumento, s.Nome AS NomeSituacao, t.Codigo AS CodigoContratoFinanceiro, f.CompFinanceira, f.CompGeracao, f.CompSeq, f.ContratoFinanceiro, f.DataEmissao, f.DataInclusao, f.DataSituacao, f.DataVencimento, f.Numero, f.NumeroProvisorio, f.Pessoa, f.SaldoEmAberto, f.ValorLiquido, f.SituacaoDocumento, f.ValorBruto, f.SaldoEmAberto, f.TipoNegJuros, f.TipoNegMultas, '/sic/fornecedor/arquivos/' + CAST(f.CompFinanceira AS Varchar(10)) + '-' + CAST(t.Codigo AS Varchar(20)) + '.pdf' AS Glosas FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
            WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) AND f.Classe=6 AND f.AutoId NOT IN(
                SELECT top($pag) f.AutoId FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
                WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) AND f.Classe=6 ORDER BY f.AutoId DESC
            ) ORDER BY f.DataVencimento DESC, f.CompFinanceira DESC ";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->ContratoFinanceiro);
            $busca->bindValue(2,$this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function contAllSlip(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT count(f.AutoId) as Total FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
            WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) AND f.Classe=6";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->ContratoFinanceiro);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            return $array['Total'];
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllEspelhos($limit=''){
        try{
            if($limit!=''){
                $limit=explode(',',$limit);
                $pag = $limit[0];
                $maximo = $limit[1];
                $limit='OFFSET '.$limit[0].' ROWS FETCH NEXT '.$limit[1].' ROWS ONLY';
            }
            $conn = DB_Cardio::conn();
            /*$sql = "SELECT f.AutoId, f.Classe, c.Nome AS ClasseDocumento, s.Nome AS NomeSituacao, t.Codigo AS CodigoContratoFinanceiro, f.CompFinanceira, f.CompGeracao, f.CompSeq, f.ContratoFinanceiro, f.DataEmissao, f.DataInclusao, f.DataSituacao, f.DataVencimento, f.Numero, f.NumeroProvisorio, f.Pessoa, f.SaldoEmAberto, f.SituacaoDocumento, f.ValorBruto, f.SaldoEmAberto, f.TipoNegJuros, f.TipoNegMultas, '/sic/fornecedor/arquivos/' + CAST(f.CompFinanceira AS Varchar(10)) + '-' + CAST(t.Codigo AS Varchar(20)) + '.pdf' AS Glosas FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
            WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) ORDER BY f.DataVencimento DESC, f.CompFinanceira DESC ".$limit;*/

            $sql = "SELECT top($maximo) f.AutoId, f.Classe, c.Nome AS ClasseDocumento, s.Nome AS NomeSituacao, t.Codigo AS CodigoContratoFinanceiro, f.CompFinanceira, f.CompGeracao, f.CompSeq, f.ContratoFinanceiro, f.DataEmissao, f.DataInclusao, f.DataSituacao, f.DataVencimento, f.Numero, f.NumeroProvisorio, f.Pessoa, f.ValorLiquido, f.SituacaoDocumento, f.ValorBruto, f.SaldoEmAberto, f.TipoNegJuros, f.TipoNegMultas, '/sic/fornecedor/arquivos/' + CAST(f.CompFinanceira AS Varchar(10)) + '-' + CAST(t.Codigo AS Varchar(20)) + '.pdf' AS Glosas FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
            WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) AND f.AutoId NOT IN (
                SELECT top($pag) f.AutoId FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
                WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL)) ORDER BY f.DataVencimento DESC, f.CompFinanceira DESC
            ) ORDER BY f.DataVencimento DESC, f.CompFinanceira DESC ";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->ContratoFinanceiro);
            $busca->bindValue(2,$this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function contAllEspelhos(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT count(f.AutoId) as Total FROM DocFinanceiro AS f INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
            WHERE (f.ContratoFinanceiro = ?) AND (NOT (f.DataEmissao IS NULL))";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->ContratoFinanceiro);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            return $array['Total'];
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoByAutoIdByContrato(){
        try{
            $busca = DB_Cardio::select("SELECT f.AutoId, f.Classe, c.Nome AS ClasseDocumento, s.Nome AS NomeSituacao, t.Codigo AS CodigoContratoFinanceiro, f.CompFinanceira, f.CompGeracao, f.CompSeq, f.ContratoFinanceiro, f.DataEmissao, f.DataInclusao, f.DataSituacao, f.DataVencimento, f.Numero, f.NumeroProvisorio, f.Pessoa, f.SaldoEmAberto, f.SituacaoDocumento, f.ValorBruto, f.SaldoEmAberto, f.TipoNegJuros, f.TipoNegMultas, '/sic/fornecedor/arquivos/' + CAST(f.CompFinanceira AS Varchar(10)) + '-' + CAST(t.Codigo AS Varchar(20)) + '.pdf' AS Glosas
                    FROM DocFinanceiro AS f
                      INNER JOIN ClasseDocFinanceiro AS c ON f.Classe = c.Codigo
                      INNER JOIN SituacaoDocumento AS s ON f.SituacaoDocumento = s.Codigo
                      INNER JOIN ContratoFinanceiro AS t ON t.AutoId = f.ContratoFinanceiro
            WHERE (f.ContratoFinanceiro = ?) AND (f.AutoId = ?) ORDER BY f.DataVencimento DESC",[(string)$this->ContratoFinanceiro,$this->AutoId]);

            return $busca[0];
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

  /**
   * @return array
   * @throws Exception
   */
  public function getExtratoImposto(){
    try{
      $busca = DB_Cardio::select("SELECT DISTINCT
        ContratoFinanceiro.Codigo AS CodigoPrestador,
        Pessoa.Nome AS NomePrestador,
        ClassePrestador.Codigo AS CodigoClassePrestador,
        ClassePrestador.Nome AS NomeClassePrestador,
        Pessoa.Cnp AS CNPPrestador,
        DocFinanceiro.CompFinanceira,
        DATEADD(
          DAY, - 1,
          DATEADD(
            MONTH,
            1,
            SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 0, 5 ) + '-' + SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 5, 2 ) + '-' + '01 23:59:59.000'
          )
        ) AS UltimoCompFinan,
        DocFinanceiro.CompSeq,
        QuitacaoDocFinan.DataQuitacao AS DataPagamento,
        DocFinanceiro.ValorLiquido AS Valor,
        DocFinanceiro.ValorLiquido AS VlLiquido,
        DocFinanceiro.AutoId,
        DocFinanceiro.ValorBruto,
        DocFinanceiro.ValorBruto AS VlBruto,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 13 ) ) AS CI,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 11 ) ) AS INSSPrestador,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 9 ) ) AS PISPrestador,
        ( SELECT DISTINCT Tipo FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 13 ) ) AS Tipo,
        TipoImposto.Nome AS ImpostoRetido,
        ImpostoDocFinan.ValorBase,
        ImpostoDocFinan.ValorBaseSecundariaDoc AS ValorBaseSecundario,
        ImpostoDocFinan.ValorRetencaoSec,
      CASE

          WHEN tipoimposto.tipoidentimposto = 2 THEN
          impostodocfinan.totalretencao ELSE impostodocfinan.valorretencao
        END AS ValorImpostoRetido,
        ImpostoDocFinan.TemDevolucao AS TemDev,
        (
        SELECT
          ISNULL( TotalRetencao, 0 ) AS Expr1
        FROM
          ImpostoDocFinan AS impostoIR
        WHERE
          ( DocFinanceiro = DocFinanceiro.AutoId )
          AND ( TipoImposto = 500 )
        ) AS TotalRetencaoIR,
      CASE
          impostodocfinan.tipoimposto
          WHEN 501 THEN
          impostodocfinan.totalretencao ELSE 0
        END AS TotalRetencao,
        (
        SELECT SUM
          ( RetencaoImposto.TotalRetencao ) AS Expr1
        FROM
          RetencaoImposto
          INNER JOIN RefRetencaoImposto ON RetencaoImposto.AutoId = RefRetencaoImposto.RetencaoImposto
        WHERE
          ( RefRetencaoImposto.ImpostoDocFinan = ImpostoDocFinan.AutoId )
          AND ( RefRetencaoImposto.TipoRetencao = 2 )
        ) AS RetOutrasFontes,
        (
        SELECT SUM
          ( GeradorItemFinan.Valor ) AS Expr1
        FROM
          ItemBaseImposto
          INNER JOIN ItemFinanceiro ON ItemBaseImposto.ItemFinanceiro = ItemFinanceiro.AutoId
          INNER JOIN GeradorItemFinan ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan
          INNER JOIN ClasseApropriacaoFinan ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo
        WHERE
          ( ClasseApropriacaoFinan.TipoValor = 1 )
          AND ( GeradorItemFinan.TipoGerador = 5 )
          AND ( ItemFinanceiro.Documento = DocFinanceiro.AutoId )
          AND ( ItemBaseImposto.ImpostoDoc = ImpostoDocFinan.AutoId )
        ) AS AjusteDeb,
        (
        SELECT SUM
          ( Valor ) AS Expr1
        FROM
          (
          SELECT DISTINCT
            ItemFinanceiro.Documento,
            GeradorItemFinan.AutoId,
            GeradorItemFinan.Valor
          FROM
            ItemBaseImposto
            INNER JOIN ItemFinanceiro ON ItemBaseImposto.ItemFinanceiro = ItemFinanceiro.AutoId
            INNER JOIN GeradorItemFinan ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan
            INNER JOIN ClasseApropriacaoFinan ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo
            INNER JOIN ImpostoDocFinan ON ImpostoDocFinan.AutoId = ItemBaseImposto.ImpostoDoc
            AND ItemBaseImposto.ImpostoDoc = ImpostoDocFinan.AutoId
            LEFT OUTER JOIN Itemtipoimposto ON Itemtipoimposto.TipoImposto = ImpostoDocFinan.TipoImposto
          WHERE
            ( Itemtipoimposto.ClasseDocCobranca = ItemFinanceiro.ClasseDocCobranca OR Itemtipoimposto.ClasseDocCobranca IS NULL )
            AND ( ClasseApropriacaoFinan.TipoValor = 2 )
            AND ( GeradorItemFinan.TipoGerador = 5 )
            OR ( ClasseApropriacaoFinan.TipoValor = 2 )
            AND ( GeradorItemFinan.TipoGerador = 5 )
            AND ( ItemFinanceiro.ClasseDocCobranca IS NULL )
          ) AS Result
        WHERE
          ( Documento = DocFinanceiro.AutoId )
        ) AS AjusteCred,
        (
        SELECT MAX
          ( VigenciaTipoImposto.ValorBaseMaximo ) AS Expr1
        FROM
          TipoImposto
          INNER JOIN Itemtipoimposto ON TipoImposto.Codigo = Itemtipoimposto.TipoImposto
          INNER JOIN VigenciaTipoImposto ON Itemtipoimposto.AutoId = VigenciaTipoImposto.ItemTipoImposto
        WHERE
          ( TipoImposto.Codigo = ImpostoDocFinan.TipoImposto )
          AND (
            VigenciaTipoImposto.Vigencia <= DATEADD(
              DAY, - 1,
              DATEADD(
                MONTH,
                1,
                SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 0, 5 ) + '-' + SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 5, 2 ) + '-' + '01 23:59:59.000'
              )
            )
          )
        ) AS BaseMaxima,
        DocFinanceiro.CompFinanceira AS Competencia,
        '' AS Cidade
      FROM
        PrestadorServico
        INNER JOIN ClassePrestador ON ClassePrestador.Codigo = PrestadorServico.Classe
        INNER JOIN ContratoFinanceiro ON ContratoFinanceiro.AutoId = PrestadorServico.ContratoFinanceiro
        INNER JOIN Pessoa ON ContratoFinanceiro.Pessoa = Pessoa.AutoId
        LEFT OUTER JOIN RegistroPessoa ON RegistroPessoa.Pessoa = Pessoa.AutoId
        INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro
        AND DocFinanceiro.Pessoa = PrestadorServico.Pessoa
        LEFT OUTER JOIN QuitacaoDocFinan ON DocFinanceiro.AutoId = QuitacaoDocFinan.DocFinanceiro
        INNER JOIN ImpostoDocFinan ON DocFinanceiro.AutoId = ImpostoDocFinan.DocFinanceiro
        INNER JOIN TipoImposto ON ImpostoDocFinan.TipoImposto = TipoImposto.Codigo
      WHERE
        ( DocFinanceiro.SituacaoDocumento IN ( 1, 2 ) )
        AND ( QuitacaoDocFinan.Cancelada = 0 OR QuitacaoDocFinan.Cancelada IS NULL )
        AND ( PrestadorServico.Codigo >= '$this->ContratoFinanceiro' )
        AND ( PrestadorServico.Codigo <= '$this->ContratoFinanceiro' )
        AND ( ImpostoDocFinan.NaoRecolher = 0 )
        AND ( DocFinanceiro.Classe <> 0 )
        AND ( DocFinanceiro.Classe <> 50 )
        AND ( DocFinanceiro.Classe <> 51 )
        AND ( DocFinanceiro.Classe <> 91 )
        AND ( DocFinanceiro.Classe <> 97 )
        AND ( DocFinanceiro.Classe <> 98 )
        AND ( DocFinanceiro.CompFinanceira = ".$this->CompFinanceira.")
        AND ( TipoImposto.Codigo = 501 )
        AND ( ImpostoDocFinan.TipoBaseImposto = 1 ) UNION
      SELECT DISTINCT
        ContratoFinanceiro.Codigo AS CodigoPrestador,
        Pessoa.Nome AS NomePrestador,
        ClassePrestador.Codigo AS CodigoClassePrestador,
        ClassePrestador.Nome AS NomeClassePrestador,
        Pessoa.Cnp AS CNPPrestador,
        DocFinanceiro.CompFinanceira,
        DATEADD(
          DAY, - 1,
          DATEADD(
            MONTH,
            1,
            SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 0, 5 ) + '-' + SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 5, 2 ) + '-' + '01 23:59:59.000'
          )
        ) AS UltimoCompFinan,
        DocFinanceiro.CompSeq,
        QuitacaoDocFinan.DataQuitacao AS DataPagamento,
        DocFinanceiro.ValorLiquido AS Valor,
        DocFinanceiro.ValorLiquido AS VlLiquido,
        DocFinanceiro.AutoId,
        DocFinanceiro.ValorBruto,
        DocFinanceiro.ValorBruto AS VlBruto,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 13 ) ) AS CI,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 11 ) ) AS INSSPrestador,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 9 ) ) AS PISPrestador,
        ( SELECT DISTINCT Tipo FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 13 ) ) AS Tipo,
        TipoImposto.Nome AS ImpostoRetido,
        ImpostoDocFinan.ValorBase,
        ImpostoDocFinan.ValorBaseSecundariaDoc AS ValorBaseSecundario,
        ImpostoDocFinan.ValorRetencaoSec,
      CASE

          WHEN tipoimposto.tipoidentimposto = 2 THEN
          impostodocfinan.totalretencao ELSE impostodocfinan.valorretencao
        END AS ValorImpostoRetido,
        ImpostoDocFinan.TemDevolucao AS TemDev,
        (
        SELECT
          ISNULL( TotalRetencao, 0 ) AS Expr1
        FROM
          ImpostoDocFinan AS impostoIR
        WHERE
          ( DocFinanceiro = DocFinanceiro.AutoId )
          AND ( TipoImposto = 500 )
        ) AS TotalRetencaoIR,
      CASE
          impostodocfinan.tipoimposto
          WHEN 501 THEN
          impostodocfinan.totalretencao ELSE 0
        END AS TotalRetencao,
        (
        SELECT SUM
          ( RetencaoImposto.TotalRetencao ) AS Expr1
        FROM
          RetencaoImposto
          INNER JOIN RefRetencaoImposto ON RetencaoImposto.AutoId = RefRetencaoImposto.RetencaoImposto
        WHERE
          ( RefRetencaoImposto.ImpostoDocFinan = ImpostoDocFinan.AutoId )
          AND ( RefRetencaoImposto.TipoRetencao = 2 )
        ) AS RetOutrasFontes,
        (
        SELECT SUM
          ( GeradorItemFinan.Valor ) AS Expr1
        FROM
          ItemBaseImposto
          INNER JOIN ItemFinanceiro ON ItemBaseImposto.ItemFinanceiro = ItemFinanceiro.AutoId
          INNER JOIN GeradorItemFinan ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan
          INNER JOIN ClasseApropriacaoFinan ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo
        WHERE
          ( ClasseApropriacaoFinan.TipoValor = 1 )
          AND ( GeradorItemFinan.TipoGerador = 5 )
          AND ( ItemFinanceiro.Documento = DocFinanceiro.AutoId )
          AND ( ItemBaseImposto.ImpostoDoc = ImpostoDocFinan.AutoId )
        ) AS AjusteDeb,
        (
        SELECT SUM
          ( Valor ) AS Expr1
        FROM
          (
          SELECT DISTINCT
            ItemFinanceiro.Documento,
            GeradorItemFinan.AutoId,
            GeradorItemFinan.Valor
          FROM
            ItemBaseImposto
            INNER JOIN ItemFinanceiro ON ItemBaseImposto.ItemFinanceiro = ItemFinanceiro.AutoId
            INNER JOIN GeradorItemFinan ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan
            INNER JOIN ClasseApropriacaoFinan ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo
            INNER JOIN ImpostoDocFinan ON ImpostoDocFinan.AutoId = ItemBaseImposto.ImpostoDoc
            AND ItemBaseImposto.ImpostoDoc = ImpostoDocFinan.AutoId
            LEFT OUTER JOIN Itemtipoimposto ON Itemtipoimposto.TipoImposto = ImpostoDocFinan.TipoImposto
          WHERE
            ( Itemtipoimposto.ClasseDocCobranca = ItemFinanceiro.ClasseDocCobranca OR Itemtipoimposto.ClasseDocCobranca IS NULL )
            AND ( ClasseApropriacaoFinan.TipoValor = 2 )
            AND ( GeradorItemFinan.TipoGerador = 5 )
            OR ( ClasseApropriacaoFinan.TipoValor = 2 )
            AND ( GeradorItemFinan.TipoGerador = 5 )
            AND ( ItemFinanceiro.ClasseDocCobranca IS NULL )
          ) AS Result
        WHERE
          ( Documento = DocFinanceiro.AutoId )
        ) AS AjusteCred,
        (
        SELECT MAX
          ( VigenciaTipoImposto.ValorBaseMaximo ) AS Expr1
        FROM
          TipoImposto
          INNER JOIN Itemtipoimposto ON TipoImposto.Codigo = Itemtipoimposto.TipoImposto
          INNER JOIN VigenciaTipoImposto ON Itemtipoimposto.AutoId = VigenciaTipoImposto.ItemTipoImposto
        WHERE
          ( TipoImposto.Codigo = ImpostoDocFinan.TipoImposto )
          AND (
            VigenciaTipoImposto.Vigencia <= DATEADD(
              DAY, - 1,
              DATEADD(
                MONTH,
                1,
                SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 0, 5 ) + '-' + SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 5, 2 ) + '-' + '01 23:59:59.000'
              )
            )
          )
        ) AS BaseMaxima,
        CAST ( YEAR ( DocFinanceiro.DataVencimento ) AS VARCHAR ( 4 ) ) + REPLICATE( '0', 2 - LEN( CAST ( MONTH ( DocFinanceiro.DataVencimento ) AS VARCHAR ( 2 ) ) ) ) + CAST ( MONTH ( DocFinanceiro.DataVencimento ) AS VARCHAR ( 2 ) ) AS Competencia,
        '' AS Cidade
      FROM
        PrestadorServico
        INNER JOIN ClassePrestador ON ClassePrestador.Codigo = PrestadorServico.Classe
        INNER JOIN ContratoFinanceiro ON ContratoFinanceiro.AutoId = PrestadorServico.ContratoFinanceiro
        INNER JOIN Pessoa ON ContratoFinanceiro.Pessoa = Pessoa.AutoId
        LEFT OUTER JOIN RegistroPessoa ON RegistroPessoa.Pessoa = Pessoa.AutoId
        INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro
        AND DocFinanceiro.Pessoa = PrestadorServico.Pessoa
        LEFT OUTER JOIN QuitacaoDocFinan ON DocFinanceiro.AutoId = QuitacaoDocFinan.DocFinanceiro
        INNER JOIN ImpostoDocFinan ON DocFinanceiro.AutoId = ImpostoDocFinan.DocFinanceiro
        INNER JOIN TipoImposto ON ImpostoDocFinan.TipoImposto = TipoImposto.Codigo
      WHERE
        ( DocFinanceiro.SituacaoDocumento IN ( 1, 2 ) )
        AND ( QuitacaoDocFinan.Cancelada = 0 OR QuitacaoDocFinan.Cancelada IS NULL )
        AND ( PrestadorServico.Codigo >= '$this->ContratoFinanceiro' )
        AND ( PrestadorServico.Codigo <= '$this->ContratoFinanceiro' )
        AND ( ImpostoDocFinan.NaoRecolher = 0 )
        AND ( DocFinanceiro.Classe <> 0 )
        AND ( DocFinanceiro.Classe <> 50 )
        AND ( DocFinanceiro.Classe <> 51 )
        AND ( DocFinanceiro.Classe <> 91 )
        AND ( DocFinanceiro.Classe <> 97 )
        AND ( DocFinanceiro.Classe <> 98 )
        AND ( DocFinanceiro.CompFinanceira = ".$this->CompFinanceira.")
        AND ( TipoImposto.Codigo = 501 )
        AND ( ImpostoDocFinan.TipoBaseImposto = 2 ) UNION
      SELECT DISTINCT
        ContratoFinanceiro.Codigo AS CodigoPrestador,
        Pessoa.Nome AS NomePrestador,
        ClassePrestador.Codigo AS CodigoClassePrestador,
        ClassePrestador.Nome AS NomeClassePrestador,
        Pessoa.Cnp AS CNPPrestador,
        DocFinanceiro.CompFinanceira,
        DATEADD(
          DAY, - 1,
          DATEADD(
            MONTH,
            1,
            SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 0, 5 ) + '-' + SUBSTRING ( CAST ( DocFinanceiro.CompFinanceira AS VARCHAR ( 6 ) ), 5, 2 ) + '-' + '01 23:59:59.000'
          )
        ) AS UltimoCompFinan,
        DocFinanceiro.CompSeq,
        QuitacaoDocFinan.DataQuitacao AS DataPagamento,
        DocFinanceiro.ValorLiquido AS Valor,
        DocFinanceiro.ValorLiquido AS VlLiquido,
        DocFinanceiro.AutoId,
        DocFinanceiro.ValorBruto,
        DocFinanceiro.ValorBruto AS VlBruto,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 13 ) ) AS CI,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 11 ) ) AS INSSPrestador,
        ( SELECT TOP ( 1 ) Numero FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 9 ) ) AS PISPrestador,
        ( SELECT DISTINCT Tipo FROM RegistroPessoa WHERE ( Pessoa = Pessoa.AutoId ) AND ( Tipo = 13 ) ) AS Tipo,
        NULL AS ImpostoRetido,
        NULL AS ValorImpostoRetido,
        NULL AS ValorBase,
        NULL AS ValorBaseSecundario,
        NULL AS ValorRetencaoSec,
        NULL AS TemDev,
        NULL AS TotalRetencaoIR,
        NULL AS TotalRetencao,
        NULL AS RetOutrasFontes,
        NULL AS AjusteDeb,
        NULL AS AjusteCred,
        NULL AS BaseMaxima,
        DocFinanceiro.CompFinanceira AS Competencia,
        '' AS Cidade
      FROM
        PrestadorServico
        INNER JOIN ClassePrestador ON ClassePrestador.Codigo = PrestadorServico.Classe
        INNER JOIN ContratoFinanceiro ON ContratoFinanceiro.AutoId = PrestadorServico.ContratoFinanceiro
        INNER JOIN Pessoa ON ContratoFinanceiro.Pessoa = Pessoa.AutoId
        LEFT OUTER JOIN RegistroPessoa ON RegistroPessoa.Pessoa = Pessoa.AutoId
        INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro
        AND DocFinanceiro.Pessoa = PrestadorServico.Pessoa
        LEFT OUTER JOIN QuitacaoDocFinan ON DocFinanceiro.AutoId = QuitacaoDocFinan.DocFinanceiro
      WHERE
        ( DocFinanceiro.SituacaoDocumento IN ( 1, 2 ) )
        AND ( QuitacaoDocFinan.Cancelada = 0 OR QuitacaoDocFinan.Cancelada IS NULL )
        AND ( PrestadorServico.Codigo >= '$this->ContratoFinanceiro' )
        AND ( PrestadorServico.Codigo <= '$this->ContratoFinanceiro' )
        AND ( DocFinanceiro.Classe <> 0 )
        AND ( DocFinanceiro.Classe <> 50 )
        AND ( DocFinanceiro.Classe <> 51 )
        AND ( DocFinanceiro.Classe <> 91 )
        AND ( DocFinanceiro.Classe <> 97 )
        AND ( DocFinanceiro.Classe <> 98 )
        AND ( DocFinanceiro.CompFinanceira = ".$this->CompFinanceira.")
        AND ( DocFinanceiro.AutoId NOT IN ( SELECT DocFinanceiro FROM ImpostoDocFinan ) )
      ORDER BY
        nomeprestador,
        codigoprestador");

      return $busca[0];
    }
    catch (Exception $ex){
      throw new Exception($ex);
    }
  }

    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoAnalitico(){
        try{
            $busca = DB_Cardio::select("SELECT Pessoa_1.Nome AS NomePrestExt, CompVlItemEvento.CompetenciaPag, ItemEvento.DataInicioRealizacao, CONVERT(varchar(18), ItemEvento.DataInicioRealizacao, 103) AS datainicio, CONVERT(varchar(18),
                         ItemEvento.DataInicioRealizacao, 108) AS hora, GrupoApropriacaoUtil.Nome, CAST(Beneficiario.Codigo AS Varchar(17)) + '  ' + CAST(Pessoa.NomeReduzido AS Varchar(30)) AS Beneficiario, LoteDocServico.Codigo AS CodigoLote,
                          Evento.Codigo AS CodigoEvento, ItemEvento.Seq, CAST(ServicoOperadora.Codigo AS Varchar(8)) + '  ' + CAST(ServicoOperadora.Nome AS Varchar(45)) AS Servico, ClasseParticipacaoServico.Nome AS ClasseParticip,
                         CompVlItemEvento.PercAplicUtil, CompVlItemEvento.ValorUnitUtil, CompVlItemEvento.QteUtil, CASE WHEN TipoValorPag = 1 THEN TotalPago - TotalPago * 2 ELSE TotalPago END AS TotalPago, CompVlItemEvento.AutoId,
                         GeradorItemFinan.Localizador, DocFinanceiro.AutoId AS IdDoc, LEFT(TipoValorFinan.Nome, 1) AS Expr1, TipoValorFinan.Codigo, ContratoFinanceiro.AutoId AS Expr2, ServicoOperadora_1.Nome AS Composicao,
                         CASE WHEN ItemEvento.ParecerAuditoria = 1 THEN 0 ELSE CASE WHEN CompVlItemEvento.Composicao IN (21918, 21921) THEN 0 ELSE CASE WHEN ItemEvento.ClasseParticipacao IS NULL
                         THEN CASE WHEN TipoValorPag = 1 THEN CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2)
                         * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) ELSE CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil))
                         * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) END ELSE CASE WHEN TipoValorPag = 1 THEN CompVlItemEvento.QteUtil * ((((ValorUnitUtil * ValorIndUtil)
                         - (ValorUnitUtil * ValorIndUtil) * 2) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END)
                         ELSE CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END)
                         END END END END AS TotalCheio, CASE WHEN ItemEvento.ParecerAuditoria = 1 THEN 0 ELSE CASE WHEN CompVlItemEvento.Composicao IN (21918, 21921)
                         THEN 0 ELSE CASE WHEN TipoValorPag = 1 THEN 0 ELSE CASE WHEN ItemEvento.ClasseParticipacao IS NULL THEN CASE WHEN TipoValorPag = 1 THEN (CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil)
                         - (ValorUnitUtil * ValorIndUtil) * 2)) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) - TotalPago ELSE (CompVlItemEvento.QteUtil * ((ValorUnitUtil * ValorIndUtil)
                         * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END)) - TotalPago END ELSE CASE WHEN TipoValorPag = 1 THEN (CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil)
                         - (ValorUnitUtil * ValorIndUtil) * 2) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END)
                         - TotalPago ELSE (CompVlItemEvento.QteUtil * ((ValorUnitUtil * ValorIndUtil) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END)
                         - TotalPago END END END END END AS Desconto, ClasseParticipacaoServico.Nome AS Expr3, ClasseParticipacaoServico.Percentual, ViaAcessoProc.Codigo AS Expr5, ViaAcessoProc.Nome AS Expr4,
                         ItemEvento.ClasseParticipacao, CAST(RIGHT(Evento.ClassifExterno, 10) AS VARCHAR) AS GuiaPrestador, SolicitacaoServico.Codigo AS SenhaAut
FROM            Pessoa AS Pessoa_1 FULL OUTER JOIN
                         PrestadorServico AS PrestadorServico_1 FULL OUTER JOIN
                         ClasseParticipacaoServico RIGHT OUTER JOIN
                         DocFinanceiro INNER JOIN
                         ItemFinanceiro ON DocFinanceiro.AutoId = ItemFinanceiro.Documento INNER JOIN
                         GrupoApropriacaoUtil INNER JOIN
                         Evento ON GrupoApropriacaoUtil.Codigo = Evento.GrupoApro INNER JOIN
                         LoteDocServico ON Evento.Lote = LoteDocServico.AutoId INNER JOIN
                         ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN
                         CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN
                         Beneficiario ON Evento.Beneficiario = Beneficiario.AutoId INNER JOIN
                         Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId INNER JOIN
                         PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId INNER JOIN
                         ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId INNER JOIN
                         GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan INNER JOIN
                         TipoValorFinan ON CompVlItemEvento.TipoValorPag = TipoValorFinan.Codigo INNER JOIN
                         ContratoFinanceiro ON PrestadorServico.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN
                         ServicoOperadora AS ServicoOperadora_1 ON CompVlItemEvento.Composicao = ServicoOperadora_1.AutoId LEFT OUTER JOIN
                         ViaAcessoProc ON ItemEvento.ViaAcesso = ViaAcessoProc.Codigo ON ClasseParticipacaoServico.Codigo = ItemEvento.ClasseParticipacao
                  FULL OUTER JOIN SolicitacaoServico ON Evento.Solicitacao = SolicitacaoServico.AutoId ON PrestadorServico_1.AutoId = ItemEvento.ExecutanteExt ON Pessoa_1.AutoId = PrestadorServico_1.Pessoa
            WHERE (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) AND (GeradorItemFinan.Localizador = 'SubTotalPago') AND (CompVlItemEvento.TotalPago > 0)
            ORDER BY GrupoApropriacaoUtil.Nome, NomePrestExt, Pessoa.Nome, ItemEvento.DataInicioRealizacao, hora, datainicio, Servico, Expr1",
              [$this->AutoId,$this->ContratoFinanceiro]);

            return $busca;
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

	    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoAnaliticoToExcel(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT CompVlItemEvento.CompetenciaPag, ItemEvento.DataInicioRealizacao, CONVERT (varchar(18),
                ItemEvento.DataInicioRealizacao, 103) AS datainicio, CONVERT (varchar(18),
                ItemEvento.DataInicioRealizacao, 108) AS hora, GrupoApropriacaoUtil.Nome, CAST(Beneficiario.Codigo AS Varchar(17)) + '  - ' + CAST(Pessoa.Nome AS Varchar(50)) AS Beneficiario,
                LoteDocServico.Codigo AS CodigoLote, Evento.Codigo AS CodigoEvento, ItemEvento.Seq,
                CAST(ServicoOperadora.Codigo AS Varchar(8)) + '  ' + CAST(ServicoOperadora.Nome AS Varchar(45)) AS Servico,
                ClasseParticipacaoServico.Nome AS ClasseParticip, CompVlItemEvento.PercAplicUtil, CompVlItemEvento.ValorUnitUtil, CompVlItemEvento.QteUtil,
                CASE WHEN TipoValorPag = 1 THEN TotalPago - TotalPago * 2 ELSE TotalPago END AS TotalPago, CompVlItemEvento.AutoId, GeradorItemFinan.Localizador, DocFinanceiro.AutoId AS IdDoc, LEFT (TipoValorFinan.Nome, 1) AS TipoValor, TipoValorFinan.Codigo, ContratoFinanceiro.AutoId AS Expr2, ServicoOperadora_1.Nome AS Composicao, CASE WHEN ItemEvento.ParecerAuditoria = 1 THEN 0 ELSE CASE WHEN CompVlItemEvento.Composicao IN (21918 , 21921) THEN 0 ELSE CASE WHEN ItemEvento.ClasseParticipacao IS NULL THEN CASE WHEN TipoValorPag = 1 THEN CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) ELSE CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil)) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) END ELSE CASE WHEN TipoValorPag = 1 THEN CompVlItemEvento.QteUtil * ((((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) ELSE CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) END END END END AS TotalCheio, CASE WHEN ItemEvento.ParecerAuditoria = 1 THEN 0 ELSE CASE WHEN CompVlItemEvento.Composicao IN (21918 , 21921) THEN 0 ELSE CASE WHEN TipoValorPag = 1 THEN 0 ELSE CASE WHEN ItemEvento.ClasseParticipacao IS NULL THEN CASE WHEN TipoValorPag = 1 THEN (CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2)) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) - TotalPago ELSE (CompVlItemEvento.QteUtil * ((ValorUnitUtil * ValorIndUtil) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END)) - TotalPago END ELSE CASE WHEN TipoValorPag = 1 THEN (CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) - TotalPago ELSE (CompVlItemEvento.QteUtil * ((ValorUnitUtil * ValorIndUtil) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) - TotalPago END END END END END AS Desconto,
                ClasseParticipacaoServico.Nome AS Participacao, ClasseParticipacaoServico.Percentual, ViaAcessoProc.Nome AS ViaAcesso,
                ItemEvento.ClasseParticipacao, CAST(RIGHT (Evento.ClassifExterno, 10) AS VARCHAR) AS GuiaPrestador
            FROM DocFinanceiro
                INNER JOIN ItemFinanceiro ON DocFinanceiro.AutoId = ItemFinanceiro.Documento
                INNER JOIN GrupoApropriacaoUtil
                INNER JOIN Evento ON GrupoApropriacaoUtil.Codigo = Evento.GrupoApro
                INNER JOIN LoteDocServico ON Evento.Lote = LoteDocServico.AutoId
                INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento
                INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento
                INNER JOIN Beneficiario ON Evento.Beneficiario = Beneficiario.AutoId
                INNER JOIN Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId
                INNER JOIN PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId
                INNER JOIN ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId
                INNER JOIN GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan
                INNER JOIN TipoValorFinan ON CompVlItemEvento.TipoValorPag = TipoValorFinan.Codigo
                INNER JOIN ContratoFinanceiro ON PrestadorServico.ContratoFinanceiro = ContratoFinanceiro.AutoId
                INNER JOIN ServicoOperadora AS ServicoOperadora_1 ON CompVlItemEvento.Composicao = ServicoOperadora_1.AutoId
                LEFT OUTER JOIN ViaAcessoProc ON ItemEvento.ViaAcesso = ViaAcessoProc.Codigo
                LEFT OUTER JOIN ClasseParticipacaoServico ON ItemEvento.ClasseParticipacao = ClasseParticipacaoServico.Codigo
            WHERE (DocFinanceiro.AutoId = ?) AND (GeradorItemFinan.Localizador = 'SubTotalPago')
            ORDER BY CAST(Beneficiario.Codigo AS Varchar(17)) + '  - ' + CAST(Pessoa.Nome AS Varchar(50)), ItemEvento.DataInicioRealizacao, hora, datainicio, Servico, TipoValor";

            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoAnaliticoTotalGeral(){
        try{
            $busca = DB_Cardio::select("SELECT GrupoApropriacaoUtil.Nome, SUM(CASE WHEN TipoValorPag = 1 THEN TotalPago - TotalPago * 2 ELSE TotalPago END) AS TotalPago, GeradorItemFinan.Localizador, DocFinanceiro.AutoId AS IdDoc, ContratoFinanceiro.AutoId AS Expr2, SUM(CASE WHEN ItemEvento.ParecerAuditoria = 1 THEN 0 ELSE CASE WHEN CompVlItemEvento.Composicao IN (21918 , 21921) THEN 0 ELSE CASE WHEN ItemEvento.ClasseParticipacao IS NULL THEN CASE WHEN TipoValorPag = 1 THEN CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) ELSE CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil)) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) END ELSE CASE WHEN TipoValorPag = 1 THEN CompVlItemEvento.QteUtil * ((((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) ELSE CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) END END END END) AS TotalCheio, SUM(CASE WHEN ItemEvento.ParecerAuditoria = 1 THEN 0 ELSE CASE WHEN CompVlItemEvento.Composicao IN (21918 , 21921) THEN 0 ELSE CASE WHEN TipoValorPag = 1 THEN 0 ELSE CASE WHEN ItemEvento.ClasseParticipacao IS NULL THEN CASE WHEN TipoValorPag = 1 THEN (CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2)) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) - TotalPago ELSE (CompVlItemEvento.QteUtil * ((ValorUnitUtil * ValorIndUtil) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END)) - TotalPago END ELSE CASE WHEN TipoValorPag = 1 THEN (CompVlItemEvento.QteUtil * (((ValorUnitUtil * ValorIndUtil) - (ValorUnitUtil * ValorIndUtil) * 2) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) - TotalPago ELSE (CompVlItemEvento.QteUtil * ((ValorUnitUtil * ValorIndUtil) * ClasseParticipacaoServico.Percentual) * CASE ViaAcessoProc.Codigo WHEN 0 THEN 1 WHEN 1 THEN 0.5 WHEN 2 THEN 0.7 ELSE 1 END) - TotalPago END END END END END) AS Desconto FROM DocFinanceiro INNER JOIN ItemFinanceiro ON DocFinanceiro.AutoId = ItemFinanceiro.Documento INNER JOIN GrupoApropriacaoUtil INNER JOIN Evento ON GrupoApropriacaoUtil.Codigo = Evento.GrupoApro INNER JOIN LoteDocServico ON Evento.Lote = LoteDocServico.AutoId INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN Beneficiario ON Evento.Beneficiario = Beneficiario.AutoId INNER JOIN Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId INNER JOIN PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId INNER JOIN ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId INNER JOIN GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan INNER JOIN TipoValorFinan ON CompVlItemEvento.TipoValorPag = TipoValorFinan.Codigo INNER JOIN ContratoFinanceiro ON PrestadorServico.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN ServicoOperadora AS ServicoOperadora_1 ON CompVlItemEvento.Composicao = ServicoOperadora_1.AutoId LEFT OUTER JOIN ViaAcessoProc ON ItemEvento.ViaAcesso = ViaAcessoProc.Codigo LEFT OUTER JOIN ClasseParticipacaoServico ON ItemEvento.ClasseParticipacao = ClasseParticipacaoServico.Codigo GROUP BY GrupoApropriacaoUtil.Nome, GeradorItemFinan.Localizador, DocFinanceiro.AutoId, ContratoFinanceiro.AutoId
                    HAVING (DocFinanceiro.AutoId = ?) AND (GeradorItemFinan.Localizador = 'SubTotalPago') AND (ContratoFinanceiro.AutoId = ?)",[$this->AutoId,$this->ContratoFinanceiro]);
            return $busca;
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoAnaliticoResumoComposicoes(){
        try{
            $busca = DB_Cardio::select("SELECT ServicoOperadora.Nome AS Composicao, SUM(CASE WHEN TipoValorPag = 1 THEN TotalUtilizado - TotalUtilizado * 2 ELSE TotalUtilizado END) AS TotalUtilizado, SUM(CASE WHEN TipoValorPag = 1 THEN TotalPago - TotalPago * 2 ELSE TotalPago END) AS TotalPago, DocFinanceiro.AutoId, CompVlItemEvento.TipoValorPag, GeradorItemFinan.Localizador FROM ItemFinanceiro INNER JOIN GeradorItemFinan ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId INNER JOIN GrupoApropriacaoUtil INNER JOIN Evento ON GrupoApropriacaoUtil.Codigo = Evento.GrupoApro INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN ServicoOperadora ON CompVlItemEvento.Composicao = ServicoOperadora.AutoId LEFT OUTER JOIN IndiceFinanceiro ON CompVlItemEvento.IndiceUtil = IndiceFinanceiro.Codigo ON GeradorItemFinan.IdGerador = CompVlItemEvento.AutoId GROUP BY ServicoOperadora.Nome, DocFinanceiro.AutoId, CompVlItemEvento.TipoValorPag, GeradorItemFinan.Localizador
                    HAVING (DocFinanceiro.AutoId = ?) AND (CompVlItemEvento.TipoValorPag = 2) AND (GeradorItemFinan.Localizador = 'SubTotalPago')",[$this->AutoId]);
            return $busca;
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoAnaliticoImpostos(){
        try{
            $busca = DB_Cardio::select("SELECT TipoImposto.Nome, ImpostoDocFinan.ValorBase, ImpostoDocFinan.ValorBaseSecundario, ImpostoDocFinan.ValorRetencao, ImpostoDocFinan.ValorRetencaoSec, ImpostoDocFinan.TotalRetencao, ImpostoDocFinan.Percentual, ImpostoDocFinan.PercentualSec, DocFinanceiro.AutoId FROM ImpostoDocFinan INNER JOIN TipoImposto ON ImpostoDocFinan.TipoImposto = TipoImposto.Codigo INNER JOIN ItemFinanceiro ON ImpostoDocFinan.ItemFinanceiro = ItemFinanceiro.AutoId INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId
                    WHERE (DocFinanceiro.AutoId = ?)",[$this->AutoId]);
            return $busca;
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoAnaliticoResumoPagamento(){
        try{
            $busca = DB_Cardio::select("SELECT ClasseApropriacaoFinan.Nome, ItemFinanceiro.CompFinanceira, ItemFinanceiro.AutoId, ItemFinanceiro.Descricao, ItemFinanceiro.ValorTotal, LEFT (TipoValorFinan.Nome, 1) AS Expr2, DocFinanceiro.AutoId AS Expr1 FROM ItemFinanceiro INNER JOIN ClasseApropriacaoFinan ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo INNER JOIN TipoValorFinan ON ClasseApropriacaoFinan.TipoValor = TipoValorFinan.Codigo INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId
                    WHERE (DocFinanceiro.AutoId = ?)",[$this->AutoId]);
            return $busca;
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getEspelhoAnaliticoCreditoDebitoLiquido(){
        try{
            $busca = DB_Cardio::select("SELECT DocFinanceiro.AutoId, SUM(DocFinanceiro.TotalCreditos) AS Creditos, SUM(DocFinanceiro.TotalDebitos) AS Debitos, SUM(DocFinanceiro.SaldoEmAberto) AS Liquido, ContratoFinanceiro.AutoId AS Expr1 FROM DocFinanceiro INNER JOIN ContratoFinanceiro ON DocFinanceiro.ContratoFinanceiro = ContratoFinanceiro.AutoId GROUP BY DocFinanceiro.AutoId, ContratoFinanceiro.AutoId
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?)",[$this->AutoId,$this->ContratoFinanceiro]);
            return $busca[0];
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getGlosasAutomaticas(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT GrupoApropriacaoUtil.Nome, Beneficiario.Codigo CodigoBenef, Pessoa.NomeReduzido AS Beneficiario, LoteDocServico.Codigo AS CodigoLote, Evento.Codigo AS CodigoEvento, ItemEvento.Seq, ItemEvento.DataInicioRealizacao, CAST(ServicoOperadora.Codigo AS Varchar(8)) + '  ' + CAST(ServicoOperadora.Nome AS Varchar(30)) AS Servico, TipoGlosaAuditoria.Nome AS Glosa, CompVlItemEvento.Prestador, ItemEvento.CompAuditoria, ItemEvento.ParecerAuditoria, LoteDocServico.CompApresentacao FROM TipoValorFinan
                        INNER JOIN GrupoApropriacaoUtil
                        INNER JOIN Evento ON GrupoApropriacaoUtil.Codigo = Evento.GrupoApro
                        INNER JOIN LoteDocServico ON Evento.Lote = LoteDocServico.AutoId
                        INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento
                        INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento
                        INNER JOIN Beneficiario ON Evento.Beneficiario = Beneficiario.AutoId
                        INNER JOIN Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId
                        INNER JOIN PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId
                        INNER JOIN ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId ON TipoValorFinan.Codigo = CompVlItemEvento.TipoValorPag
                        INNER JOIN GlosaEvento ON ItemEvento.AutoId = GlosaEvento.ItemAssociado
                        INNER JOIN TipoGlosaAuditoria ON GlosaEvento.Tipo = TipoGlosaAuditoria.Codigo
                        LEFT OUTER JOIN ClasseParticipacaoServico ON ItemEvento.ClasseParticipacao = ClasseParticipacaoServico.Codigo GROUP BY GrupoApropriacaoUtil.Nome, Beneficiario.Codigo, Pessoa.NomeReduzido, LoteDocServico.Codigo, Evento.Codigo, ItemEvento.Seq, ItemEvento.DataInicioRealizacao, CAST(ServicoOperadora.Codigo AS Varchar(8)) + '  ' + CAST(ServicoOperadora.Nome AS Varchar(30)), TipoGlosaAuditoria.Nome, CompVlItemEvento.Prestador, ItemEvento.CompAuditoria, ItemEvento.ParecerAuditoria, LoteDocServico.CompApresentacao
                    HAVING (CompVlItemEvento.Prestador = ?)
                    AND (ItemEvento.CompAuditoria = ?)
                    AND (ItemEvento.ParecerAuditoria IN (1, 3))
                    AND (LoteDocServico.CompApresentacao = ?) ORDER BY ItemEvento.DataInicioRealizacao";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Prestador);
            $busca->bindValue(2,$this->CompFinanceira);
            $busca->bindValue(3,$this->CompFinanceira);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }


    /**
     * @return mixed
     * @throws Exception
     */
    public function getServicosPrestadosByContrato(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT Beneficiario_1.Familia, Beneficiario.ClassifOrigem, CAST(Pessoa_1.Nome AS varchar(50)) AS CodigoTitular, DocFinanceiro.AutoId AS iddoc, ContratoFinanceiro.AutoId AS idcontrato, ModalidadeCobranca.Nome AS NomeModalidade, CAST(Contrato.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa_3.Nome AS varchar(50)) AS CodigoContrato, SUM(CompVlItemEvento.SubTotalCobrado) AS Expr2, SUM(CompVlItemEvento.TotalCusteioCobrado) AS Expr3, SUM(CASE WHEN TipoValorCobr = 1 THEN GeradorItemFinan.Valor - GeradorItemFinan.Valor * 2 ELSE GeradorItemFinan.Valor END) AS Expr1, Pessoa_3.AutoId, DocFinanceiro.CompFinanceira, Pessoa_1.Cnp AS CPFTitular FROM Pessoa AS Pessoa_4 INNER JOIN PrestadorServico AS PrestadorServico_2 ON Pessoa_4.AutoId = PrestadorServico_2.Pessoa RIGHT OUTER JOIN Pessoa AS Pessoa_2 INNER JOIN ModeloContrato INNER JOIN Contrato ON ModeloContrato.AutoId = Contrato.Modelo INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN Beneficiario ON Contrato.AutoId = Beneficiario.Contrato INNER JOIN Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId INNER JOIN Evento ON Beneficiario.AutoId = Evento.Beneficiario INNER JOIN LoteDocServico ON Evento.Lote = LoteDocServico.AutoId INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId INNER JOIN GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador INNER JOIN ItemFinanceiro ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId ON Pessoa_2.AutoId = PrestadorServico.Pessoa INNER JOIN Pessoa AS Pessoa_3 ON Contrato.Contratante = Pessoa_3.AutoId INNER JOIN ModalidadeCobranca ON ModeloContrato.ModCobranca = ModalidadeCobranca.Codigo INNER JOIN ServicoOperadora AS ServicoOperadora_1 ON CompVlItemEvento.Composicao = ServicoOperadora_1.AutoId INNER JOIN PrestadorServico AS PrestadorServico_1 ON Evento.LcAt = PrestadorServico_1.AutoId INNER JOIN TipoValorFinan ON CompVlItemEvento.TipoValorCobr = TipoValorFinan.Codigo ON PrestadorServico_2.AutoId = ItemEvento.SolicitanteExt LEFT OUTER JOIN Pessoa AS Pessoa_1 LEFT OUTER JOIN Beneficiario AS Beneficiario_1 ON Pessoa_1.AutoId = Beneficiario_1.Pessoa ON Beneficiario.Titular = Beneficiario_1.AutoId
                    WHERE (GeradorItemFinan.Localizador IN ('SubTotalCobrado', 'TotalCusteioCobrado')) GROUP BY DocFinanceiro.AutoId, Beneficiario.ClassifOrigem, ContratoFinanceiro.AutoId, ModalidadeCobranca.Nome, CAST(Contrato.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa_3.Nome AS varchar(50)), CAST(Pessoa_1.Nome AS varchar(50)), Pessoa_3.AutoId, DocFinanceiro.CompFinanceira, Beneficiario_1.Familia, Pessoa_1.Cnp
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) ORDER BY Beneficiario_1.Familia, CodigoTitular";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getServicosPrestadosByContratoGrupoAprop(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT DocFinanceiro.AutoId AS iddoc, ContratoFinanceiro.AutoId AS idcontrato, GrupoApropriacaoUtil.Nome, SUM(ItemEvento.QteInformada) AS Expr2, SUM(CASE WHEN TipoValorCobr = 1 THEN GeradorItemFinan.Valor - GeradorItemFinan.Valor * 2 ELSE GeradorItemFinan.Valor END) AS Expr1, ItemEvento.ParecerAuditoria FROM TipoValorFinan INNER JOIN ModeloContrato INNER JOIN Contrato ON ModeloContrato.AutoId = Contrato.Modelo INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN Beneficiario ON Contrato.AutoId = Beneficiario.Contrato INNER JOIN Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId INNER JOIN Evento ON Beneficiario.AutoId = Evento.Beneficiario INNER JOIN LoteDocServico ON Evento.Lote = LoteDocServico.AutoId INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId INNER JOIN GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador INNER JOIN ItemFinanceiro ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId INNER JOIN Beneficiario AS Beneficiario_1 ON Beneficiario.Titular = Beneficiario_1.AutoId INNER JOIN Pessoa AS Pessoa_1 ON Beneficiario_1.Pessoa = Pessoa_1.AutoId INNER JOIN Pessoa AS Pessoa_2 ON PrestadorServico.Pessoa = Pessoa_2.AutoId INNER JOIN Pessoa AS Pessoa_3 ON Contrato.Contratante = Pessoa_3.AutoId INNER JOIN ModalidadeCobranca ON ModeloContrato.ModCobranca = ModalidadeCobranca.Codigo INNER JOIN ServicoOperadora AS ServicoOperadora_1 ON CompVlItemEvento.Composicao = ServicoOperadora_1.AutoId INNER JOIN PrestadorServico AS PrestadorServico_1 ON Evento.LcAt = PrestadorServico_1.AutoId ON TipoValorFinan.Codigo = CompVlItemEvento.TipoValorCobr INNER JOIN GrupoApropriacaoUtil ON Evento.GrupoApro = GrupoApropriacaoUtil.Codigo LEFT OUTER JOIN Pessoa AS Pessoa_4 INNER JOIN PrestadorServico AS PrestadorServico_2 ON Pessoa_4.AutoId = PrestadorServico_2.Pessoa ON ItemEvento.SolicitanteExt = PrestadorServico_2.AutoId
                    WHERE (GeradorItemFinan.Localizador IN ('SubTotalCobrado', 'TotalCusteioCobrado')) GROUP BY DocFinanceiro.AutoId, ContratoFinanceiro.AutoId, ItemEvento.ParecerAuditoria, GrupoApropriacaoUtil.Nome
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) AND (ItemEvento.ParecerAuditoria IN (0, 3))";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getServicosPrestadosAnalitico(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT Beneficiario_1.Familia, Beneficiario.ClassifOrigem, CAST(Beneficiario_1.Familia AS varchar(17)) + ' - ' + CAST(Pessoa_1.Nome AS varchar(50)) AS CodigoTitular, DocFinanceiro.AutoId AS iddoc, ContratoFinanceiro.AutoId AS idcontrato, ModalidadeCobranca.Nome AS NomeModalidade, CAST(Contrato.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa_3.Nome AS varchar(50)) AS CodigoContrato, Beneficiario.GrauDependencia, CAST(Beneficiario.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa.NomeReduzido AS varchar(50)) AS NomeBeneficiario, Evento.Codigo AS Evento, CONVERT (varchar(10), ItemEvento.DataInicioRealizacao, 103)+ ' ' + Convert(varchar(05),ItemEvento.DataInicioRealizacao,108) AS datainicio, CAST(PrestadorServico.Codigo AS varchar(14)) + ' - ' + CAST(Pessoa_2.NomeReduzido AS varchar(30)) AS CodigoPrestador, CAST(PrestadorServico_2.Codigo AS varchar(12)) + ' - ' + CAST(Pessoa_4.NomeReduzido AS varchar(30)) AS ExecutanteExt, CAST(ServicoOperadora.Codigo AS varchar(8)) + ' - ' + CAST(ServicoOperadora.Nome AS varchar(50)) AS ServicoOperadora, CompVlItemEvento.FatorParticipUtil, CompVlItemEvento.SubTotalCobrado, SUM(CASE WHEN TipoValorCobr = 1 THEN GeradorItemFinan.Valor - GeradorItemFinan.Valor * 2 ELSE GeradorItemFinan.Valor END) AS Expr1, Pessoa_3.AutoId, ItemEvento.Seq,  SUM(DISTINCT(ItemEvento.QteInformada)) AS Expr2, DocFinanceiro.CompFinanceira, ServicoOperadora_1.Nome AS Composicao, LEFT (TipoValorFinan.Nome, 1) AS TipoValor, ItemEvento.ParecerAuditoria, ItemEvento.DataInicioRealizacao FROM Pessoa AS Pessoa_4 INNER JOIN PrestadorServico AS PrestadorServico_2 ON Pessoa_4.AutoId = PrestadorServico_2.Pessoa RIGHT OUTER JOIN Pessoa AS Pessoa_2 INNER JOIN ModeloContrato INNER JOIN Contrato ON ModeloContrato.AutoId = Contrato.Modelo INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN Beneficiario ON Contrato.AutoId = Beneficiario.Contrato INNER JOIN Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId INNER JOIN Evento ON Beneficiario.AutoId = Evento.Beneficiario INNER JOIN LoteDocServico ON Evento.Lote = LoteDocServico.AutoId INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId INNER JOIN GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador INNER JOIN ItemFinanceiro ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId ON Pessoa_2.AutoId = PrestadorServico.Pessoa INNER JOIN Pessoa AS Pessoa_3 ON Contrato.Contratante = Pessoa_3.AutoId INNER JOIN ModalidadeCobranca ON ModeloContrato.ModCobranca = ModalidadeCobranca.Codigo INNER JOIN ServicoOperadora AS ServicoOperadora_1 ON CompVlItemEvento.Composicao = ServicoOperadora_1.AutoId INNER JOIN PrestadorServico AS PrestadorServico_1 ON Evento.LcAt = PrestadorServico_1.AutoId INNER JOIN TipoValorFinan ON CompVlItemEvento.TipoValorCobr = TipoValorFinan.Codigo ON PrestadorServico_2.AutoId = ItemEvento.SolicitanteExt LEFT OUTER JOIN Pessoa AS Pessoa_1 LEFT OUTER JOIN Beneficiario AS Beneficiario_1 ON Pessoa_1.AutoId = Beneficiario_1.Pessoa ON Beneficiario.Titular = Beneficiario_1.AutoId
                    WHERE (GeradorItemFinan.Localizador IN ('SubTotalCobrado', 'TotalCusteioCobrado')) GROUP BY Pessoa_1.Nome, Beneficiario.ClassifOrigem, DocFinanceiro.AutoId, Beneficiario.GrauDependencia, CompVlItemEvento.FatorParticipUtil, ItemEvento.DataInicioRealizacao, ContratoFinanceiro.AutoId, ModalidadeCobranca.Nome, CAST(Contrato.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa_3.Nome AS varchar(50)), CAST(Beneficiario.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa.NomeReduzido AS varchar(50)), Evento.Codigo, CAST(ServicoOperadora.Codigo AS varchar(8)) + ' - ' + CAST(ServicoOperadora.Nome AS varchar(50)), CAST(PrestadorServico.Codigo AS varchar(14)) + ' - ' + CAST(Pessoa_2.NomeReduzido AS varchar(30)), CAST(Beneficiario_1.Familia AS varchar(17)) + ' - ' + CAST(Pessoa_1.Nome AS varchar(50)), Pessoa_3.AutoId, ItemEvento.Seq, DocFinanceiro.CompFinanceira, ServicoOperadora_1.Nome, CAST(PrestadorServico_2.Codigo AS varchar(12)) + ' - ' + CAST(Pessoa_4.NomeReduzido AS varchar(30)), Beneficiario_1.Familia, LEFT (TipoValorFinan.Nome, 1), ItemEvento.ParecerAuditoria, CompVlItemEvento.SubTotalCobrado, CONVERT (varchar(10), ItemEvento.DataInicioRealizacao, 103)
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) ORDER BY Pessoa_1.Nome, NomeBeneficiario, Evento.Codigo, ItemEvento.DataInicioRealizacao ASC";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

	/**
     * @return array
     * @throws Exception
     */
    public function getTotalizadorServicosPrestadosAnalitico(){
        try{
            $conn = DB_Cardio::conn();

			$sql="SELECT Beneficiario_1.Familia, CAST(Beneficiario_1.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa_1.Nome AS varchar(50)) AS Titular, Pessoa_1.Cnp, DocFinanceiro.AutoId AS iddoc,
                         ContratoFinanceiro.AutoId AS idcontrato, CAST(Contrato.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa_3.Nome AS varchar(50)) AS CodigoContrato,
                         SUM(CASE WHEN TipoValorCobr = 1 THEN GeradorItemFinan.Valor - GeradorItemFinan.Valor * 2 ELSE GeradorItemFinan.Valor END) AS ValorTotal, DocFinanceiro.CompFinanceira
					FROM Pessoa AS Pessoa_3 INNER JOIN
                         ModeloContrato INNER JOIN
                         Contrato ON ModeloContrato.AutoId = Contrato.Modelo INNER JOIN
                         ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN
                         Beneficiario ON Contrato.AutoId = Beneficiario.Contrato INNER JOIN
                         Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId INNER JOIN
                         Evento ON Beneficiario.AutoId = Evento.Beneficiario INNER JOIN
                         ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN
                         CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN
                         GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador INNER JOIN
                         ItemFinanceiro ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN
                         DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId ON Pessoa_3.AutoId = Contrato.Contratante INNER JOIN
                         TipoValorFinan ON CompVlItemEvento.TipoValorCobr = TipoValorFinan.Codigo LEFT OUTER JOIN
                         Pessoa AS Pessoa_1 LEFT OUTER JOIN
                         Beneficiario AS Beneficiario_1 ON Pessoa_1.AutoId = Beneficiario_1.Pessoa ON Beneficiario.Titular = Beneficiario_1.AutoId
					WHERE (GeradorItemFinan.Localizador IN ('SubTotalCobrado', 'TotalCusteioCobrado'))
					GROUP BY Pessoa_1.Nome, DocFinanceiro.AutoId, ContratoFinanceiro.AutoId, CAST(Contrato.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa_3.Nome AS varchar(50)), CAST(Beneficiario_1.Codigo AS varchar(17))
                         + ' - ' + CAST(Pessoa_1.Nome AS varchar(50)), DocFinanceiro.CompFinanceira, Beneficiario_1.Familia, Pessoa_1.Cnp
					HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) ORDER BY Pessoa_1.Nome";

            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
			//print_r($this->AutoId.' '.$this->ContratoFinanceiro);
			//die;
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getServicosPrestadosAnaliticoGrupoApro(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT DocFinanceiro.AutoId AS iddoc, ContratoFinanceiro.AutoId AS idcontrato, GrupoApropriacaoUtil.Nome, SUM(ItemEvento.QteInformada) AS Expr2, SUM(CASE WHEN TipoValorCobr = 1 THEN GeradorItemFinan.Valor - GeradorItemFinan.Valor * 2 ELSE GeradorItemFinan.Valor END) AS Expr1 FROM TipoValorFinan INNER JOIN ModeloContrato INNER JOIN Contrato ON ModeloContrato.AutoId = Contrato.Modelo INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN Beneficiario ON Contrato.AutoId = Beneficiario.Contrato INNER JOIN Pessoa ON Beneficiario.Pessoa = Pessoa.AutoId INNER JOIN Evento ON Beneficiario.AutoId = Evento.Beneficiario INNER JOIN LoteDocServico ON Evento.Lote = LoteDocServico.AutoId INNER JOIN ItemEvento ON Evento.AutoId = ItemEvento.Evento INNER JOIN ServicoOperadora ON ItemEvento.Servico = ServicoOperadora.AutoId INNER JOIN CompVlItemEvento ON ItemEvento.AutoId = CompVlItemEvento.ItemEvento INNER JOIN PrestadorServico ON CompVlItemEvento.Prestador = PrestadorServico.AutoId INNER JOIN GeradorItemFinan ON CompVlItemEvento.AutoId = GeradorItemFinan.IdGerador INNER JOIN ItemFinanceiro ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId INNER JOIN Beneficiario AS Beneficiario_1 ON Beneficiario.Titular = Beneficiario_1.AutoId INNER JOIN Pessoa AS Pessoa_1 ON Beneficiario_1.Pessoa = Pessoa_1.AutoId INNER JOIN Pessoa AS Pessoa_2 ON PrestadorServico.Pessoa = Pessoa_2.AutoId INNER JOIN Pessoa AS Pessoa_3 ON Contrato.Contratante = Pessoa_3.AutoId INNER JOIN ModalidadeCobranca ON ModeloContrato.ModCobranca = ModalidadeCobranca.Codigo INNER JOIN ServicoOperadora AS ServicoOperadora_1 ON CompVlItemEvento.Composicao = ServicoOperadora_1.AutoId INNER JOIN PrestadorServico AS PrestadorServico_1 ON Evento.LcAt = PrestadorServico_1.AutoId ON TipoValorFinan.Codigo = CompVlItemEvento.TipoValorCobr INNER JOIN GrupoApropriacaoUtil ON Evento.GrupoApro = GrupoApropriacaoUtil.Codigo LEFT OUTER JOIN Pessoa AS Pessoa_4 INNER JOIN PrestadorServico AS PrestadorServico_2 ON Pessoa_4.AutoId = PrestadorServico_2.Pessoa ON ItemEvento.SolicitanteExt = PrestadorServico_2.AutoId
                    WHERE (GeradorItemFinan.Localizador IN ('SubTotalCobrado', 'TotalCusteioCobrado')) AND (ItemEvento.ParecerAuditoria IN (0, 3)) GROUP BY DocFinanceiro.AutoId, ContratoFinanceiro.AutoId, GrupoApropriacaoUtil.Nome
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?)";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getItensMensalidade(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT GrupoApropriacaoFinan.Nome AS Ato, DescClasseAproFinan.Nome, SUM(CASE WHEN TipoValor = 1 THEN ValorTotal - ValorTotal * 2 ELSE ValorTotal END) AS Total
                        FROM GrupoApropriacaoFinan FULL OUTER JOIN
                             DescClasseAproFinan ON GrupoApropriacaoFinan.Codigo = DescClasseAproFinan.Grupo FULL OUTER JOIN
                             ItemFinanceiro INNER JOIN
                             ClasseApropriacaoFinan ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo ON DescClasseAproFinan.Codigo = ClasseApropriacaoFinan.DescClasse
                        WHERE (ItemFinanceiro.Documento = ?)
                        GROUP BY DescClasseAproFinan.Nome, GrupoApropriacaoFinan.Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getDesmonstrativoFamiliaAnalitico(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT
                      ContratoFinanceiro.Codigo AS CodigoContratante,
                      Pessoa_1.Nome AS NomeContratante,
                      Beneficiario_1.Matricula,
                      '0 ' + CAST(Beneficiario_1.Codigo AS varchar(18)) AS CodigoBeneficiarioTitular,
                      Pessoa_2.Nome AS NomeBeneficiarioTitular,
                      ContratoFinanceiro.AutoId,
                      DocFinanceiro.AutoId AS documento,
                      '0 ' + CAST(Beneficiario.Codigo AS varchar(18)) AS CodigoBeneficiario,
                      Pessoa.Nome AS NomeBeneficiario,
                      ModuloOperadora.Codigo AS CodigoProduto,
                      ModuloOperadora.Nome AS NomeProduto,
                      ModuloOperadora.NumRegistroExterno,
                      TipoAcInternacao.Nome AS Acomodacao,
                      AbrangenciaGeografica.Nome AS Abrangencia,
                      ModuloCompetencia.BenefIdade,
                      ModuloCompetencia.PercReajusteTabela,
                      DocFinanceiro.CompFinanceira,
                      ModuloCompetencia.ValorMensAnt,
                      SUM(CASE
                        WHEN TipoValores = 1 THEN geradorItemFinan.Valor - geradorItemFinan.Valor * 2
                        ELSE geradorItemFinan.Valor
                      END) AS ValorCobrado,
                      Beneficiario_1.Familia,
                      Beneficiario.ClassifOrigem,
                      Pessoa.DataNascimento, GeradorItemFinan.TipoGerador
                    FROM Pessoa
                    INNER JOIN GeradorItemFinan
                    INNER JOIN ItemFinanceiro
                    INNER JOIN DocFinanceiro
                      ON ItemFinanceiro.Documento = DocFinanceiro.AutoId
                      ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId
                    INNER JOIN ModuloOperadora
                    INNER JOIN ModuloBeneficiario
                    INNER JOIN Beneficiario
                      ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId
                      ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo
                    INNER JOIN ModuloCompetencia
                      ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo
                      ON GeradorItemFinan.IdGerador = ModuloCompetencia.AutoId
                      ON Pessoa.AutoId = Beneficiario.Pessoa
                    INNER JOIN Beneficiario AS Beneficiario_1
                      ON Beneficiario.Titular = Beneficiario_1.AutoId
                    INNER JOIN Pessoa AS Pessoa_2
                      ON Beneficiario_1.Pessoa = Pessoa_2.AutoId
                    INNER JOIN Contrato
                      ON Beneficiario.Contrato = Contrato.AutoId
                    INNER JOIN AbrangenciaGeografica
                      ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
                    INNER JOIN Pessoa AS Pessoa_1
                    INNER JOIN ContratoFinanceiro
                      ON Pessoa_1.AutoId = ContratoFinanceiro.Pessoa
                      ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId
                    LEFT OUTER JOIN TipoAcInternacao
                      ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo

                    GROUP BY ContratoFinanceiro.AutoId,
                             '0 ' + CAST(Beneficiario.Codigo AS varchar(18)),
                             Pessoa.Nome,
                             Pessoa.DataNascimento,
                             ModuloOperadora.Codigo,
                             ModuloCompetencia.ValorMensalidade,
                             DocFinanceiro.AutoId,
                             ModuloOperadora.NumRegistroExterno,
                             TipoAcInternacao.Nome,
                             AbrangenciaGeografica.Nome,
                             ModuloCompetencia.ValorMensAnt,
                             ModuloCompetencia.BenefIdade,
                             ModuloCompetencia.PercReajusteTabela,
                             DocFinanceiro.CompFinanceira,
                             Beneficiario_1.Familia,
                             '0 ' + CAST(Beneficiario_1.Codigo AS varchar(18)),
                             Pessoa_2.Nome,
                             ContratoFinanceiro.Codigo,
                             Pessoa_1.Nome,
                             Beneficiario_1.Matricula,
                             ModuloOperadora.Nome,
                             Beneficiario.ClassifOrigem, GeradorItemFinan.TipoGerador
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) AND (GeradorItemFinan.TipoGerador = 1) ORDER BY NomeBeneficiarioTitular ASC";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getDesmonstrativoFamilia(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT
                      ContratoFinanceiro.Codigo AS CodigoContratante,
                      Pessoa_1.Nome AS NomeContratante,
                      Beneficiario_1.Matricula,
                      Beneficiario_1.Familia,
                      Beneficiario.ClassifOrigem,
                      Pessoa_2.Cnp AS CPF,
                      '0 ' + CAST(Beneficiario_1.Codigo AS varchar(17)) AS CodigoBeneficiario,
                      CAST(Pessoa_2.Nome AS varchar(50)) AS NomeBeneficiario,
                      COUNT(DISTINCT ModuloCompetencia.AutoId) AS QtdBenfFamilia,
                      COUNT(DISTINCT ModuloCompetencia.AutoId) AS ModuloCompetencia,
                      ContratoFinanceiro.AutoId,
                      DocFinanceiro.AutoId AS IdDoc,
                      DocFinanceiro.CompFinanceira,
                      ModuloOperadora.Codigo AS CodigoProduto,
                      ModuloOperadora.Nome AS NomeProduto,
                      TipoAcInternacao.Nome AS Acomodacao,
                      AbrangenciaGeografica.Nome AS Abrangencia,
                      TipoValorFinan.Nome AS TipoValor,
                      SUM(ModuloCompetencia.ValorMensAnt) AS ValorMensAnt,
                      SUM(CASE
                        WHEN TipoValores = 1 THEN geradorItemFinan.Valor - geradorItemFinan.Valor * 2
                        ELSE geradorItemFinan.Valor
                      END) AS ValorCobrado, GeradorItemFinan.TipoGerador
                    FROM Pessoa
                    INNER JOIN GeradorItemFinan
                    INNER JOIN ItemFinanceiro
                    INNER JOIN DocFinanceiro
                      ON ItemFinanceiro.Documento = DocFinanceiro.AutoId
                      ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId
                    INNER JOIN ModuloOperadora
                    INNER JOIN ModuloBeneficiario
                    INNER JOIN Beneficiario
                      ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId
                      ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo
                    INNER JOIN ModuloCompetencia
                      ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo
                      ON GeradorItemFinan.IdGerador = ModuloCompetencia.AutoId
                      ON Pessoa.AutoId = Beneficiario.Pessoa
                    INNER JOIN Beneficiario AS Beneficiario_1
                      ON Beneficiario.Titular = Beneficiario_1.AutoId
                      AND Beneficiario.Familia = Beneficiario_1.Familia
                    INNER JOIN Pessoa AS Pessoa_2
                      ON Beneficiario_1.Pessoa = Pessoa_2.AutoId
                    INNER JOIN Contrato
                      ON Beneficiario.Contrato = Contrato.AutoId
                    INNER JOIN AbrangenciaGeografica
                      ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
                    INNER JOIN Pessoa AS Pessoa_1
                    INNER JOIN ContratoFinanceiro
                      ON Pessoa_1.AutoId = ContratoFinanceiro.Pessoa
                      ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId
                    INNER JOIN TipoValorFinan
                      ON ModuloCompetencia.TipoValores = TipoValorFinan.Codigo
                    LEFT OUTER JOIN TipoAcInternacao
                      ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo

                    GROUP BY ContratoFinanceiro.AutoId,
                             CAST(Pessoa_2.Nome AS varchar(50)),
                             DocFinanceiro.AutoId,
                             DocFinanceiro.CompFinanceira,
                             Beneficiario_1.Familia,
                             ModuloOperadora.Nome,
                             TipoAcInternacao.Nome,
                             AbrangenciaGeografica.Nome,
                             TipoValorFinan.Nome,
                             '0 ' + CAST(Beneficiario_1.Codigo AS varchar(17)),
                             Pessoa_2.Cnp,
                             Beneficiario_1.Matricula,
                             ContratoFinanceiro.Codigo,
                             Pessoa_1.Nome,
                             ModuloOperadora.Codigo,
                             Beneficiario.ClassifOrigem, GeradorItemFinan.TipoGerador
                    HAVING (DocFinanceiro.AutoId = ?)
                    AND (ContratoFinanceiro.AutoId = ?) AND (GeradorItemFinan.TipoGerador = 1)
                    ORDER BY Beneficiario_1.Familia, NomeBeneficiario";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getDesmonstrativoFamiliaAnaliticoCSV(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT
                      ContratoFinanceiro.Codigo AS CodigoContratante,
                      Pessoa_1.Nome AS NomeContratante,
                      '0 ' + CAST(Beneficiario_1.Codigo AS varchar(18)) AS CodigoBeneficiarioTitular,
                      Pessoa_2.Nome AS NomeBeneficiarioTitular,
                      '0 ' + CAST(Beneficiario.Codigo AS varchar(18)) AS CodigoBeneficiario,
                      Pessoa.Nome AS NomeBeneficiario,
                      SUM(CASE
                        WHEN TipoValores = 1 THEN geradorItemFinan.Valor - geradorItemFinan.Valor * 2
                        ELSE geradorItemFinan.Valor
                      END) AS ValorCobrado,
                      Beneficiario_1.Familia,
                      Beneficiario.ClassifOrigem, GeradorItemFinan.TipoGerador
                    FROM Pessoa
                    INNER JOIN GeradorItemFinan
                    INNER JOIN ItemFinanceiro
                    INNER JOIN DocFinanceiro
                      ON ItemFinanceiro.Documento = DocFinanceiro.AutoId
                      ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId
                    INNER JOIN ModuloOperadora
                    INNER JOIN ModuloBeneficiario
                    INNER JOIN Beneficiario
                      ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId
                      ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo
                    INNER JOIN ModuloCompetencia
                      ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo
                      ON GeradorItemFinan.IdGerador = ModuloCompetencia.AutoId
                      ON Pessoa.AutoId = Beneficiario.Pessoa
                    INNER JOIN Beneficiario AS Beneficiario_1
                      ON Beneficiario.Titular = Beneficiario_1.AutoId
                    INNER JOIN Pessoa AS Pessoa_2
                      ON Beneficiario_1.Pessoa = Pessoa_2.AutoId
                    INNER JOIN Contrato
                      ON Beneficiario.Contrato = Contrato.AutoId
                    INNER JOIN AbrangenciaGeografica
                      ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
                    INNER JOIN Pessoa AS Pessoa_1
                    INNER JOIN ContratoFinanceiro
                      ON Pessoa_1.AutoId = ContratoFinanceiro.Pessoa
                      ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId
                    LEFT OUTER JOIN TipoAcInternacao
                      ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo

                    GROUP BY ContratoFinanceiro.AutoId,
                             '0 ' + CAST(Beneficiario.Codigo AS varchar(18)),
                             Pessoa.Nome,
                             Pessoa.DataNascimento,
                             ModuloOperadora.Codigo,
                             ModuloCompetencia.ValorMensalidade,
                             DocFinanceiro.AutoId,
                             ModuloOperadora.NumRegistroExterno,
                             TipoAcInternacao.Nome,
                             AbrangenciaGeografica.Nome,
                             ModuloCompetencia.ValorMensAnt,
                             ModuloCompetencia.BenefIdade,
                             ModuloCompetencia.PercReajusteTabela,
                             DocFinanceiro.CompFinanceira,
                             Beneficiario_1.Familia,
                             '0 ' + CAST(Beneficiario_1.Codigo AS varchar(18)),
                             Pessoa_2.Nome,
                             ContratoFinanceiro.Codigo,
                             Pessoa_1.Nome,
                             Beneficiario_1.Matricula,
                             ModuloOperadora.Nome,
                             Beneficiario.ClassifOrigem, GeradorItemFinan.TipoGerador
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) AND (GeradorItemFinan.TipoGerador = 1)";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getDesmonstrativoFamiliaCSV(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT
                      ContratoFinanceiro.Codigo AS CodigoContratante,
                      Pessoa_1.Nome AS NomeContratante,
                      Beneficiario_1.Matricula,
                      Beneficiario_1.Familia,
                      Beneficiario.ClassifOrigem,
                      Pessoa_2.Cnp AS CPF,
                      '0 ' + CAST(Beneficiario_1.Codigo AS varchar(17)) AS CodigoBeneficiario,
                      CAST(Pessoa_2.Nome AS varchar(50)) AS NomeBeneficiario,
                      COUNT(DISTINCT ModuloCompetencia.AutoId) AS QtdBenfFamilia,
                      COUNT(DISTINCT ModuloCompetencia.AutoId) AS ModuloCompetencia,
                      ContratoFinanceiro.AutoId,
                      DocFinanceiro.AutoId AS IdDoc,
                      DocFinanceiro.CompFinanceira,
                      ModuloOperadora.Codigo AS CodigoProduto,
                      ModuloOperadora.Nome AS NomeProduto,
                      TipoAcInternacao.Nome AS Acomodacao,
                      AbrangenciaGeografica.Nome AS Abrangencia,
                      TipoValorFinan.Nome AS TipoValor,
                      SUM(ModuloCompetencia.ValorMensAnt) AS ValorMensAnt,
                      SUM(CASE
                        WHEN TipoValores = 1 THEN geradorItemFinan.Valor - geradorItemFinan.Valor * 2
                        ELSE geradorItemFinan.Valor
                      END) AS ValorCobrado, GeradorItemFinan.TipoGerador
                    FROM Pessoa
                    INNER JOIN GeradorItemFinan
                    INNER JOIN ItemFinanceiro
                    INNER JOIN DocFinanceiro
                      ON ItemFinanceiro.Documento = DocFinanceiro.AutoId
                      ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId
                    INNER JOIN ModuloOperadora
                    INNER JOIN ModuloBeneficiario
                    INNER JOIN Beneficiario
                      ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId
                      ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo
                    INNER JOIN ModuloCompetencia
                      ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo
                      ON GeradorItemFinan.IdGerador = ModuloCompetencia.AutoId
                      ON Pessoa.AutoId = Beneficiario.Pessoa
                    INNER JOIN Beneficiario AS Beneficiario_1
                      ON Beneficiario.Titular = Beneficiario_1.AutoId
                      AND Beneficiario.Familia = Beneficiario_1.Familia
                    INNER JOIN Pessoa AS Pessoa_2
                      ON Beneficiario_1.Pessoa = Pessoa_2.AutoId
                    INNER JOIN Contrato
                      ON Beneficiario.Contrato = Contrato.AutoId
                    INNER JOIN AbrangenciaGeografica
                      ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
                    INNER JOIN Pessoa AS Pessoa_1
                    INNER JOIN ContratoFinanceiro
                      ON Pessoa_1.AutoId = ContratoFinanceiro.Pessoa
                      ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId
                    INNER JOIN TipoValorFinan
                      ON ModuloCompetencia.TipoValores = TipoValorFinan.Codigo
                    LEFT OUTER JOIN TipoAcInternacao
                      ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo

                    GROUP BY ContratoFinanceiro.AutoId,
                             CAST(Pessoa_2.Nome AS varchar(50)),
                             DocFinanceiro.AutoId,
                             DocFinanceiro.CompFinanceira,
                             Beneficiario_1.Familia,
                             ModuloOperadora.Nome,
                             TipoAcInternacao.Nome,
                             AbrangenciaGeografica.Nome,
                             TipoValorFinan.Nome,
                             '0 ' + CAST(Beneficiario_1.Codigo AS varchar(17)),
                             Pessoa_2.Cnp,
                             Beneficiario_1.Matricula,
                             ContratoFinanceiro.Codigo,
                             Pessoa_1.Nome,
                             ModuloOperadora.Codigo,
                             Beneficiario.ClassifOrigem, GeradorItemFinan.TipoGerador
                    HAVING (DocFinanceiro.AutoId = ?)
                    AND (ContratoFinanceiro.AutoId = ?) AND (GeradorItemFinan.TipoGerador = 1)
                    ORDER BY Beneficiario_1.Familia, NomeBeneficiario";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getDesmonstrativoTotaisTipoBenef(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT TipoBeneficiario.Codigo, ContratoFinanceiro.AutoId, DocFinanceiro.AutoId AS documento, ModuloOperadora.NumRegistroExterno, TipoBeneficiario.Nome, COUNT(DISTINCT ModuloCompetencia.AutoId) AS Expr1, SUM(ModuloCompetencia.ValorMensalidade) AS Expr4, SUM(ModuloCompetencia.ValorMensAnt) AS Expr3, SUM(CASE WHEN TipoValores = 1 THEN geradorItemFinan.Valor - geradorItemFinan.Valor * 2 ELSE geradorItemFinan.Valor END) AS Expr6, SUM(GeradorItemFinan.Valor) AS TotalGerador FROM Pessoa INNER JOIN GeradorItemFinan INNER JOIN ItemFinanceiro INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN ModuloOperadora INNER JOIN ModuloBeneficiario INNER JOIN Beneficiario ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo INNER JOIN ModuloCompetencia ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo ON GeradorItemFinan.IdGerador = ModuloCompetencia.AutoId ON Pessoa.AutoId = Beneficiario.Pessoa INNER JOIN Beneficiario AS Beneficiario_1 ON Beneficiario.Titular = Beneficiario_1.AutoId AND Beneficiario.Familia = Beneficiario_1.Familia INNER JOIN Pessoa AS Pessoa_2 ON Beneficiario_1.Pessoa = Pessoa_2.AutoId INNER JOIN Contrato ON Beneficiario.Contrato = Contrato.AutoId INNER JOIN TipoAcInternacao ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo INNER JOIN AbrangenciaGeografica ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo INNER JOIN Pessoa AS Pessoa_1 INNER JOIN ContratoFinanceiro ON Pessoa_1.AutoId = ContratoFinanceiro.Pessoa ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN TipoValorFinan ON ModuloCompetencia.TipoValores = TipoValorFinan.Codigo INNER JOIN TipoBeneficiario ON Beneficiario.Tipo = TipoBeneficiario.Codigo
                     GROUP BY ContratoFinanceiro.AutoId, DocFinanceiro.AutoId, TipoBeneficiario.Codigo, TipoBeneficiario.Nome, ModuloOperadora.NumRegistroExterno
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) ORDER BY ModuloOperadora.NumRegistroExterno, TipoBeneficiario.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getDesmonstrativoMovimentacoes(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT Beneficiario_1.Familia, CAST(Pessoa_2.Nome AS varchar(50)) AS NomeFamilia, ContratoFinanceiro.AutoId, DocFinanceiro.AutoId AS documento, CAST(Pessoa.Nome AS varchar(50)) AS Expr1, Pessoa.DataNascimento, DocFinanceiro.CompFinanceira,TipoMovCadastral.Codigo as CodigoTipoMovCad, TipoMovCadastral.Nome AS Expr3, FatMovCadBeneficiario.Valor, ModuloOperadora.Codigo, ModuloOperadora.NumRegistroExterno, AbrangenciaGeografica.Nome, TipoAcInternacao.Nome AS Expr2, Pessoa_2.Cnp FROM TipoMovCadastral INNER JOIN GeradorItemFinan INNER JOIN ItemFinanceiro INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN MovCadBeneficiario INNER JOIN Beneficiario AS Beneficiario_1 INNER JOIN Pessoa INNER JOIN Beneficiario ON Pessoa.AutoId = Beneficiario.Pessoa ON Beneficiario_1.AutoId = Beneficiario.Titular INNER JOIN Pessoa AS Pessoa_2 ON Beneficiario_1.Pessoa = Pessoa_2.AutoId ON Beneficiario.AutoId = MovCadBeneficiario.Beneficiario LEFT OUTER JOIN FatMovCadBeneficiario ON FatMovCadBeneficiario.MovCadBeneficiario = MovCadBeneficiario.AutoId ON GeradorItemFinan.IdGerador = FatMovCadBeneficiario.AutoId ON TipoMovCadastral.Codigo = MovCadBeneficiario.Tipo INNER JOIN ModuloBeneficiario ON Beneficiario.AutoId = ModuloBeneficiario.Beneficiario INNER JOIN ModuloOperadora ON ModuloBeneficiario.Modulo = ModuloOperadora.AutoId INNER JOIN AbrangenciaGeografica ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo INNER JOIN TipoAcInternacao ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo INNER JOIN Contrato ON Beneficiario.Contrato = Contrato.AutoId INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId GROUP BY ContratoFinanceiro.AutoId, CAST(Pessoa_2.Nome AS varchar(50)), CAST(Pessoa.Nome AS varchar(50)), Pessoa.DataNascimento, DocFinanceiro.AutoId, DocFinanceiro.CompFinanceira, Beneficiario_1.Familia, TipoMovCadastral.Codigo ,TipoMovCadastral.Nome, FatMovCadBeneficiario.Valor, ModuloOperadora.Codigo, ModuloOperadora.NumRegistroExterno, AbrangenciaGeografica.Nome, TipoAcInternacao.Nome, Pessoa_2.Cnp
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) ORDER BY Beneficiario_1.Familia, CodigoTipoMovCad";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getDesmonstrativoMovimentacoesPorTipoBenef(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT TipoBeneficiario.Codigo, ContratoFinanceiro.AutoId, DocFinanceiro.AutoId AS documento, ModuloOperadora.NumRegistroExterno, TipoBeneficiario.Nome, SUM(FatMovCadBeneficiario.Valor) AS Expr1, COUNT(FatMovCadBeneficiario.AutoId) AS Expr2 FROM TipoMovCadastral INNER JOIN GeradorItemFinan INNER JOIN ItemFinanceiro INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId INNER JOIN MovCadBeneficiario INNER JOIN Beneficiario AS Beneficiario_1 INNER JOIN Pessoa INNER JOIN Beneficiario ON Pessoa.AutoId = Beneficiario.Pessoa ON Beneficiario_1.AutoId = Beneficiario.Titular INNER JOIN Pessoa AS Pessoa_2 ON Beneficiario_1.Pessoa = Pessoa_2.AutoId ON Beneficiario.AutoId = MovCadBeneficiario.Beneficiario LEFT OUTER JOIN FatMovCadBeneficiario ON FatMovCadBeneficiario.MovCadBeneficiario = MovCadBeneficiario.AutoId ON GeradorItemFinan.IdGerador = FatMovCadBeneficiario.AutoId ON TipoMovCadastral.Codigo = MovCadBeneficiario.Tipo INNER JOIN ModuloBeneficiario ON Beneficiario.AutoId = ModuloBeneficiario.Beneficiario INNER JOIN ModuloOperadora ON ModuloBeneficiario.Modulo = ModuloOperadora.AutoId INNER JOIN AbrangenciaGeografica ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo INNER JOIN TipoAcInternacao ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo INNER JOIN Contrato ON Beneficiario.Contrato = Contrato.AutoId INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN TipoBeneficiario ON Beneficiario.Tipo = TipoBeneficiario.Codigo GROUP BY ContratoFinanceiro.AutoId, DocFinanceiro.AutoId, ModuloOperadora.NumRegistroExterno, TipoBeneficiario.Codigo, TipoBeneficiario.Nome
                    HAVING (DocFinanceiro.AutoId = ?) AND (ContratoFinanceiro.AutoId = ?) ORDER BY TipoBeneficiario.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->bindValue(2, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllPesquisa_POS($diaInicial=null,$diaFinal=null){
        try{
            $where = '';
            if($this->ContratoFinanceiro!=''){
                $where = ' AND df.ContratoFinanceiro='.$this->ContratoFinanceiro;
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $where .= "AND (df.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."') ";
            }

            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, cf.Pessoa PessoaID, con.Modelo as ModeloContrato, df.* FROM DocFinanceiro df
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=df.Pessoa
                        INNER JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                        INNER JOIN Contrato con on con.ContratoFinanceiro = cf.AutoId
                    WHERE df.CompFinanceira=? AND df.Classe=? ".$where." order by cf.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->CompFinanceira);
            $busca->bindValue(2, $this->Classe);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

	/**
     * @return array
     * @throws Exception
     */
    public function getAllPesquisaVencimento_PRE($dataInicial=null,$dataFinal=null){
        try{
            $where = '';
            if($this->ContratoFinanceiro!=''){
                $where = ' AND df.ContratoFinanceiro='.$this->ContratoFinanceiro;
            }
            if(!empty($dataInicial)){
                //$diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                //$diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                //$where .= "AND (df.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."') ";
                $where .= "AND (df.DataVencimento BETWEEN '".$dataInicial."' AND '".$dataFinal."') ";
            }

            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, cf.Pessoa PessoaID, con.Modelo as ModeloContrato, df.* FROM DocFinanceiro df
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=df.Pessoa
                        LEFT JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                        INNER JOIN Contrato con on con.ContratoFinanceiro = cf.AutoId
                    WHERE df.Classe=? ".$where." order by cf.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Classe);
            $busca->execute();
			/*echo '<pre>';
			print_r($busca->fetchAll(PDO::FETCH_ASSOC));
			echo '</pre>';
			die;*/
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllPesquisa_PRE($diaInicial=null,$diaFinal=null){
        try{
            $where = '';
            if($this->ContratoFinanceiro!=''){
                $where = ' AND df.ContratoFinanceiro='.$this->ContratoFinanceiro;
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;

                $diaInicial2=date('Y-m-d',strtotime($diaInicial. ' +1 month'));

                if($diaFinal>29){
                    $pegar_diafinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4);
                    $diaFinal=date('t',strtotime($pegar_diafinal));
                    $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;

                    $diaFinal2=date('Y-m-t',strtotime($diaFinal. ' +1 month'));;
                }
                else{
                    $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                    $diaFinal2=date('Y-m-d',strtotime($diaFinal. ' +1 month'));;
                }

                $where .= " AND (df.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."' OR df.DataVencimento BETWEEN '".$diaInicial2."' AND '".$diaFinal2."')";

            }

            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, cf.Pessoa PessoaID, con.Modelo as ModeloContrato, df.* FROM DocFinanceiro df
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=df.Pessoa
                        LEFT JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                        INNER JOIN Contrato con on con.ContratoFinanceiro = cf.AutoId
                    WHERE df.CompFinanceira=? AND df.Classe=? ".$where." order by cf.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->CompFinanceira);
            $busca->bindValue(2, $this->Classe);
			echo '<pre>';
			print_r($this->CompFinanceira .' - '.$this->Classe);
			echo '</pre>';
			die;
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

	/**
     * @return array
     * @throws Exception
     */
    public function getAllPesquisa_Anexo($diaInicial=null,$diaFinal=null){
        try{
            $where = '';
            if($this->ContratoFinanceiro!=''){
                $where = ' AND df.ContratoFinanceiro='.$this->ContratoFinanceiro;
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $where .= "AND (df.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."') ";
            }

            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, cf.Pessoa AS PessoaID, df.Pessoa, df.ContratoFinanceiro, df.CompFinanceira, ModeloContrato.TipoContratacao
                    FROM DocFinanceiro AS df
                        INNER JOIN ContratoFinanceiro AS cf ON cf.AutoId = df.ContratoFinanceiro
                        INNER JOIN Pessoa AS p ON p.AutoId = df.Pessoa
                        INNER JOIN SituacaoDocumento AS si ON si.Codigo = df.SituacaoDocumento
                        INNER JOIN Contrato AS con ON con.ContratoFinanceiro = cf.AutoId
                        INNER JOIN ModeloContrato ON con.Modelo = ModeloContrato.AutoId
                    WHERE (df.Classe IN (1, 2, 6))
                    GROUP BY cf.Codigo, p.Nome, p.Cnp, cf.Pessoa, df.Pessoa, df.ContratoFinanceiro, df.CompFinanceira, ModeloContrato.TipoContratacao
                    HAVING (df.CompFinanceira = ?) AND (ModeloContrato.TipoContratacao = ?) ".$where." ORDER BY cf.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->CompFinanceira);
            $busca->bindValue(2, $this->Classe);
            /*echo '<pre>';
            print_r($this->CompFinanceira.' - '.$this->Classe.' - '.$this->ContratoFinanceiro);
            echo '</pre>';
            die;*/
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllPesquisa_PRODUCAO($tipoPessoa="", $classePrestador="", $diaInicial=null, $diaFinal=null){
        try{
            $where = '';
            if($this->ContratoFinanceiro!=''){
                $where .= ' AND df.ContratoFinanceiro='.$this->ContratoFinanceiro;
            }
            if($this->SituacaoDocumento!=''){
                $where .= ' AND df.SituacaoDocumento='.$this->SituacaoDocumento;
            }
            if($tipoPessoa!=''){
                $where .= ' AND p.Tipo='.$tipoPessoa;
            }
            if($classePrestador!=''){
                $where .= ' AND ps.Classe='.$classePrestador;
            }
            if(!empty($diaInicial)){
                $where .= " AND DAY(df.DataVencimento) BETWEEN '".$diaInicial."' AND '".$diaFinal."'";
            }

            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, DAY(df.DataVencimento) AS DIA, cf.Pessoa PessoaID, df.* FROM DocFinanceiro df
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        INNER JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                        INNER JOIN PrestadorServico ps on ps.ContratoFinanceiro=cf.AutoId
                    WHERE df.CompFinanceira=? AND df.Classe=3 ".$where." order by cf.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->CompFinanceira);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllPesquisa_PRODUCAO_SMS($tipoPessoa="", $classePrestador=""){
        try{
            $where = '';
            if($this->ContratoFinanceiro!=''){
                $where .= ' AND df.ContratoFinanceiro='.$this->ContratoFinanceiro;
            }
            if($this->SituacaoDocumento!=''){
                $where .= ' AND df.SituacaoDocumento='.$this->SituacaoDocumento;
            }
            if($tipoPessoa!=''){
                $where .= ' AND p.Tipo='.$tipoPessoa;
            }
            if($classePrestador!=''){
                $where .= ' AND ps.Classe='.$classePrestador;
            }

            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, df.* FROM DocFinanceiro df
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        INNER JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                        INNER JOIN PrestadorServico ps on ps.ContratoFinanceiro=cf.AutoId
                    WHERE df.CompFinanceira=? AND df.Classe=3 ".$where;
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->CompFinanceira);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

	/**
     * @return array
     * @throws Exception
     */
    public function getAllPesquisa_PRODUCAO_SMS_Vencimento($tipoPessoa="", $classePrestador="",$diaInicial=null,$diaFinal=null){
        try{
            $where="";

            if($this->ContratoFinanceiro!=''){
                $where .= ' AND df.ContratoFinanceiro='.$this->ContratoFinanceiro;
            }
            if($this->SituacaoDocumento!=''){
                $where .= ' AND df.SituacaoDocumento='.$this->SituacaoDocumento;
            }
            if($tipoPessoa!=''){
                $where .= ' AND p.Tipo='.$tipoPessoa;
            }
            if($classePrestador!=''){
                $where .= ' AND ps.Classe='.$classePrestador;
            }

            if(!empty($diaInicial)){
                //$diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                //$diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $where .= " AND DAY(df.DataVencimento) BETWEEN '".$diaInicial."' AND '".$diaFinal."'";
            }

            $sql = "SELECT
                cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, DAY(df.DataVencimento) AS DIA, df.DataVencimento,  df.*
            FROM DocFinanceiro df
                INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                INNER JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                INNER JOIN PrestadorServico ps on ps.ContratoFinanceiro=cf.AutoId
            WHERE df.CompFinanceira=? AND df.Classe=3".$where;

            $conn = DB_Cardio::conn();
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->CompFinanceira);
            $busca->execute();

            return $array = $busca->fetchAll(PDO::FETCH_ASSOC);

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getPRODUCAOByIdDoc(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, cf.Pessoa, df.* FROM DocFinanceiro df
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        INNER JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                    WHERE df.Classe=3 AND df.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);

            if(!empty($array)){
                $objTelefone = new TelefonePessoa();
                $objTelefone->setPessoa($array['Pessoa']);
                $objTelefone->setTipo(2);
                $arrayTelefone = $objTelefone->getByPessoaByTipo();
                if(!empty($arrayTelefone)){
                    $array['TelefoneDDD'] = $arrayTelefone['DDD'];
                    $array['TelefoneNum'] = $arrayTelefone['Numero'];
                }
            }
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getBoletoByIdDoc(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT DocFinanceiro.AutoId as IdDocFinanceiro, ContratoFinanceiro.AutoId IdContratoFinan, ContratoFinanceiro.Codigo, Pessoa.AutoId idPessoa, Pessoa.Nome, Pessoa.NomeReduzido, Pessoa.Cnp, DocFinanceiro.Classe, DocFinanceiro.CompFinanceira, DocFinanceiro.SituacaoDocumento, DocFinanceiro.Numero, DocFinanceiro.DataEmissao,
                         DocFinanceiro.DataVencimento, DocFinanceiro.NFeNumero, DocFinanceiro.NFeCodigoVerificacao, DocFinanceiro.SaldoEmAberto, BoletoCobranca.NossoNumero, BoletoCobranca.FormaCobranca, DocFinanceiro.ValorBruto, DocFinanceiro.ValorLiquido, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse
                        FROM Pessoa INNER JOIN
                                         ContratoFinanceiro INNER JOIN
                                         DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = DocFinanceiro.Pessoa INNER JOIN
                                         BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro INNER JOIN
                                         ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                        WHERE (DocFinanceiro.SituacaoDocumento in( 1,3)) AND DocFinanceiro.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getBoletoByIdDocPreview(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT
            DocFinanceiro.AutoId as IdDocFinanceiro,
            ContratoFinanceiro.AutoId IdContratoFinan,
            ContratoFinanceiro.Codigo,
            Pessoa.AutoId idPessoa,
            Pessoa.Nome,
            Pessoa.NomeReduzido,
            Pessoa.Cnp,
            DocFinanceiro.Classe,
            DocFinanceiro.CompFinanceira,
            DocFinanceiro.SituacaoDocumento,
            DocFinanceiro.Numero,
            DocFinanceiro.DataEmissao,
            DocFinanceiro.DataVencimento,
            DocFinanceiro.NFeNumero,
            DocFinanceiro.NFeCodigoVerificacao,
            DocFinanceiro.SaldoEmAberto AS saldoEmAberto,
            BoletoCobranca.NossoNumero,
            BoletoCobranca.FormaCobranca,
            DocFinanceiro.ValorBruto,
            DocFinanceiro.ValorLiquido,
            DocFinanceiro.ValorLiquido AS SaldoEmAberto,
            ClasseContratoFinanceiro.Codigo AS CodigoClasse,
            ClasseContratoFinanceiro.Nome AS NomeClasse
            FROM Pessoa
            INNER JOIN ContratoFinanceiro
            INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = DocFinanceiro.Pessoa
            INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
            INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
            WHERE (DocFinanceiro.SituacaoDocumento in(1,2,3)) AND DocFinanceiro.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getCNS_cliente(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT Numero FROM RegistroPessoa where Pessoa = ? and Tipo = 10";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Pessoa);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getDadosIdDoc(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT mc.Codigo Modelo, DocFinanceiro.AutoId as IdDocFinanceiro, ContratoFinanceiro.AutoId IdContratoFinan, ContratoFinanceiro.Codigo, Pessoa.AutoId idPessoa, Pessoa.Nome, Pessoa.NomeReduzido, Pessoa.Cnp, DocFinanceiro.Classe, DocFinanceiro.CompFinanceira, DocFinanceiro.SituacaoDocumento, DocFinanceiro.Numero, DocFinanceiro.DataEmissao,
                         DocFinanceiro.DataVencimento, DocFinanceiro.NFeNumero, DocFinanceiro.NFeCodigoVerificacao, DocFinanceiro.SaldoEmAberto, BoletoCobranca.NossoNumero, DocFinanceiro.ValorBruto, DocFinanceiro.ValorLiquido, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse
                        FROM Pessoa INNER JOIN
                                         ContratoFinanceiro INNER JOIN
                                         DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa INNER JOIN
                                         BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro INNER JOIN
                                         ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                         INNER JOIN Contrato con on con.ContratoFinanceiro=ContratoFinanceiro.AutoId
                                         INNER JOIN ModeloContrato mc on mc.AutoId=con.Modelo
                        WHERE DocFinanceiro.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getDadosIdDocPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.Codigo, p.Nome, p.Cnp, si.Nome as SituacaoDoc, cf.Codigo, cf.Pessoa PessoaID, df.* FROM DocFinanceiro df
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=df.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        INNER JOIN SituacaoDocumento si on si.Codigo=df.SituacaoDocumento
                        INNER JOIN PrestadorServico ps on ps.ContratoFinanceiro=cf.AutoId
                    WHERE df.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getItensBoleto(){
        try{
            $conn = DB_Cardio::conn();
            //ModuloCompetencia.ValorMensInteg / ModuloCompetencia.ValorMensAnt - 1 AS [%Reajuste],
            $sql = "SELECT caf.TipoValor, Beneficiario.Codigo,
                        Beneficiario.InicioVigencia,
                        Pessoa.Nome,
                        ModuloCompetencia.BenefIdade,
                        ModuloBeneficiario.InicioVigencia,
                        ModuloCompetencia.ValorMensAnt,
                        ModuloCompetencia.ValorMensInteg,
                        ModuloOperadora.NumRegistroExterno,
                        ModuloOperadora.Nome NomeModuloOperadora,
                        AbrangenciaGeografica.Nome AS Abrangencia,
                        ModuloCompetencia.ProxReajTabela,
                        DocFinanceiro.AutoId,
                        ModuloCompetencia.ValorMensalidade,
                        CONVERT (VARCHAR(12), ModuloBeneficiario.InicioVigencia, 103) AS VigenciaModuloBenef
                        FROM ModuloOperadora
                        INNER JOIN Pessoa
                        INNER JOIN ModuloBeneficiario
                        INNER JOIN Beneficiario ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId ON Pessoa.AutoId = Beneficiario.Pessoa
                        INNER JOIN ModuloCompetencia ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo
                        INNER JOIN DocFinanceiro
                        INNER JOIN ItemFinanceiro ON DocFinanceiro.AutoId = ItemFinanceiro.Documento
                        INNER JOIN GeradorItemFinan ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan ON ModuloCompetencia.AutoId = GeradorItemFinan.IdGerador ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo
                        INNER JOIN AbrangenciaGeografica ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
						INNER JOIN ClasseApropriacaoFinan caf ON caf.Codigo=ItemFinanceiro.ClasseApro
                        WHERE (GeradorItemFinan.Localizador = 'ValorMensalidade')
                        GROUP BY caf.TipoValor, Beneficiario.Codigo, Beneficiario.InicioVigencia, Pessoa.Nome, ModuloCompetencia.BenefIdade, ModuloBeneficiario.InicioVigencia, ModuloCompetencia.ValorMensAnt, ModuloCompetencia.ValorMensInteg, ModuloOperadora.NumRegistroExterno, ModuloOperadora.Nome, AbrangenciaGeografica.Nome, ModuloCompetencia.ProxReajTabela, DocFinanceiro.AutoId, ModuloCompetencia.ValorMensInteg / ModuloCompetencia.ValorMensAnt - 1, ModuloCompetencia.ValorMensalidade, CONVERT (VARCHAR(12), ModuloBeneficiario.InicioVigencia, 103)
                        HAVING (DocFinanceiro.AutoId = ?)";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getItensBoletoNoroesteRS(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT
                        Beneficiario.Codigo,
                        TipoBeneficiario.Nome AS TipoBenef,
                        Pessoa.Nome,
                        Beneficiario.InicioVigencia,
                        ModuloOperadora.NumRegistroExterno,
                        AbrangenciaGeografica.Nome AS Abrangencia,
                        DocFinanceiro.AutoId,
                        SUM(CASE WHEN TipoValores = 2 THEN ModuloCompetencia.ValorMensalidade ELSE 0 END) AS ValorCredito,
                        SUM(CASE WHEN TipoValores = 1 THEN ModuloCompetencia.ValorMensalidade - ModuloCompetencia.ValorMensalidade * 2 ELSE 0 END) AS ValorDebito,
                        CONVERT (VARCHAR(12), ModuloBeneficiario.InicioVigencia, 103) AS VigenciaModuloBenef,
                        ModuloOperadora.NomeReduzido AS NomeProduto,
                        ModuloCompetencia.Observacao,
                        CASE
                            WHEN ItemNegPre <> ItemNegPreAnt AND Eajuste = 0
                                THEN 'Reajuste por faixa etária aplicado. Valor Anterior R$ ' + CAST(ValorMensAnt AS varchar(20))
                            ELSE '' END AS Msg
                        FROM ModuloOperadora
                        INNER JOIN Pessoa
                        INNER JOIN ModuloBeneficiario
                        INNER JOIN Beneficiario
                            ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId
                            ON Pessoa.AutoId = Beneficiario.Pessoa
                        INNER JOIN ModuloCompetencia
                            ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo
                        INNER JOIN DocFinanceiro
                        INNER JOIN ItemFinanceiro
                            ON DocFinanceiro.AutoId = ItemFinanceiro.Documento
                        INNER JOIN GeradorItemFinan
                            ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan
                            ON ModuloCompetencia.AutoId = GeradorItemFinan.IdGerador
                            ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo
                        INNER JOIN AbrangenciaGeografica
                            ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
                        INNER JOIN TipoBeneficiario
                            ON Beneficiario.Tipo = TipoBeneficiario.Codigo
                        WHERE (GeradorItemFinan.Localizador = 'ValorMensalidade')
                            AND (ModuloOperadora.Tipo = 1)
                        GROUP BY Beneficiario.Codigo,
                            Pessoa.Nome,
                            Beneficiario.InicioVigencia,
                            ModuloOperadora.NumRegistroExterno,
                            AbrangenciaGeografica.Nome,
                            DocFinanceiro.AutoId,
                            CONVERT (VARCHAR(12),ModuloBeneficiario.InicioVigencia, 103),
                            ModuloOperadora.NomeReduzido,
                            ModuloCompetencia.Observacao,
                            TipoBeneficiario.Nome,
                            CASE WHEN ItemNegPre <> ItemNegPreAnt AND Eajuste = 0 THEN 'Reajuste por faixa etária aplicado. Valor Anterior R$ ' + CAST(ValorMensAnt AS varchar(20)) ELSE '' END
                        HAVING (DocFinanceiro.AutoId = ?) ORDER BY TipoBenef DESC, Pessoa.Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getAcessoriosNoroesteRS(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT SUM(ValorCredito) ValorCredito, SUM(ValorDebito) ValorDebito, NomeProduto FROM (SELECT DocFinanceiro.AutoId,
                        SUM(CASE WHEN TipoValores = 2 THEN ModuloCompetencia.ValorMensalidade ELSE 0 END) AS ValorCredito,
                        SUM(CASE WHEN TipoValores = 1 THEN ModuloCompetencia.ValorMensalidade - ModuloCompetencia.ValorMensalidade * 2 ELSE 0 END) AS ValorDebito,
                        ModuloOperadora.NomeReduzido AS NomeProduto
                    FROM ModuloOperadora
                        INNER JOIN Pessoa
                        INNER JOIN ModuloBeneficiario
                        INNER JOIN Beneficiario
                            ON ModuloBeneficiario.Beneficiario = Beneficiario.AutoId
                            ON Pessoa.AutoId = Beneficiario.Pessoa
                        INNER JOIN ModuloCompetencia
                            ON ModuloBeneficiario.AutoId = ModuloCompetencia.Modulo
                        INNER JOIN DocFinanceiro
                        INNER JOIN ItemFinanceiro
                            ON DocFinanceiro.AutoId = ItemFinanceiro.Documento
                        INNER JOIN GeradorItemFinan
                            ON ItemFinanceiro.AutoId = GeradorItemFinan.ItemFinan
                            ON ModuloCompetencia.AutoId = GeradorItemFinan.IdGerador
                            ON ModuloOperadora.AutoId = ModuloBeneficiario.Modulo
                        INNER JOIN AbrangenciaGeografica
                            ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
                        INNER JOIN TipoBeneficiario
                            ON Beneficiario.Tipo = TipoBeneficiario.Codigo
                    WHERE (GeradorItemFinan.Localizador = 'ValorMensalidade')
                        AND (ModuloOperadora.Tipo <> 1)
                    GROUP BY DocFinanceiro.AutoId, ModuloOperadora.NomeReduzido
                    HAVING (DocFinanceiro.AutoId = ?)) tb GROUP BY NomeProduto";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getComposicaoNoroesteRS(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT
                        ItemFinanceiro.Documento,
                        ClasseApropriacaoFinan.Nome,
                        ItemFinanceiro.Descricao,
                        CASE WHEN TipoValor = 1 THEN ItemFinanceiro.ValorTotal - ItemFinanceiro.ValorTotal * 2 ELSE ItemFinanceiro.ValorTotal END AS Valor,
                        ItemFinanceiro.ObsImpressao
                    FROM ItemFinanceiro
                        INNER JOIN ClasseApropriacaoFinan
                            ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo
                    WHERE (ItemFinanceiro.Documento = ?)";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getUltilizacaoBoleto(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "select h.contratofinanceiro as contrato, h.compfinanceira as competencia, left(cast(b.codigo as VARCHAR(16))+' - '+ a.nomereduzido,44) as nomebenef, p.codigo, left(z.nome,255) as nomeprest, e.DataAbertura as data, left(g.nome,8) as grupo, e.codigo as codigoevento, left(cast(s.codigo as VARCHAR(8))+' - '+ s.nome,50) as nomeserv, sum(n.QteCobr) as Quantidade, sum((n.ValorUnitCobr * n.valorindcobr)* n.QteCobr) as TotalBruto, sum(n.subtotalcobrado) as valorcobrado, sum(n.totalcusteiocobrado)as taxacobrado, sum(n.totalcobrado) as totalcobrado, AVG(n.FatorParticipCobr) as media from compvlitemevento as n
                        INNER JOIN ItemEvento as i on i.autoid = n.itemevento
                        INNER JOIN Evento as e on e.autoid = i.evento
                        INNER JOIN Beneficiario as b on b.autoid = e.beneficiario
                        INNER JOIN ServicoOperadora as s on s.autoid = i.servico
                        INNER JOIN PrestadorServico as p on p.autoid = e.LocalExecucao or p.autoid = e.LocalExecucaoExt
                        INNER JOIN Pessoa as a on a.autoid = b.pessoa
                        INNER JOIN Pessoa as z on z.autoid = p.pessoa
                        INNER JOIN GrupoApropriacaoUtil as g on g.codigo = e.grupoapro
                        INNER JOIN GeradorITemFinan as f on f.IdGerador = n.autoid
                        INNER JOIN ItemFinanceiro as h on h.autoid = f.itemfinan
                    WHERE h.Documento = ? AND f.Localizador='SubTotalCobrado' AND f.Localizador<>'ValorMensalidade' GROUP BY h.contratofinanceiro, h.compfinanceira, b.codigo, a.nomereduzido, p.codigo, z.nome, e.DataAbertura, g.nome, e.codigo, s.codigo, s.nome ORDER BY data ASC";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

	   /**
     * @return mixed
     * @throws Exception
     */
    public function getUltilizacaoBoletoPF(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "select h.contratofinanceiro as contrato, h.compfinanceira as competencia,
                left(cast(b.codigo as VARCHAR(16))+' - '+ a.nomereduzido,44) as nomebenef, p.codigo,
                left(z.nomereduzido,25) as nomeprest, e.DataAbertura as data, left(g.nome,8) as grupo, e.codigo as codigoevento,
                left(cast(s.codigo as VARCHAR(8))+' - '+ s.nome,50) as nomeserv, sum(n.QteCobr) as Quantidade,
                sum((n.ValorUnitCobr * n.valorindcobr)* n.QteCobr) as TotalBruto, sum(n.subtotalcobrado) as valorcobrado,
                sum(n.totalcusteiocobrado)as taxacobrado, sum(n.totalcobrado) as totalcobrado, AVG(n.FatorParticipCobr) as media
            from compvlitemevento as n
                INNER JOIN ItemEvento as i on i.autoid = n.itemevento
                INNER JOIN Evento as e on e.autoid = i.evento
                INNER JOIN Beneficiario as b on b.autoid = e.beneficiario
                INNER JOIN ServicoOperadora as s on s.autoid = i.servico
                INNER JOIN PrestadorServico as p on p.autoid = n.prestador
                INNER JOIN Pessoa as a on a.autoid = b.pessoa
                INNER JOIN Pessoa as z on z.autoid = p.pessoa
                INNER JOIN GrupoApropriacaoUtil as g on g.codigo = e.grupoapro
                INNER JOIN GeradorITemFinan as f on f.IdGerador = n.autoid
                INNER JOIN ItemFinanceiro as h on h.autoid = f.itemfinan
            WHERE h.Documento = ? AND f.Localizador = 'SubTotalCobrado' AND f.Localizador<>'ValorMensalidade'
            GROUP BY h.contratofinanceiro, h.compfinanceira, b.codigo, a.nomereduzido, p.codigo, z.nomereduzido, e.DataAbertura,
            g.nome, e.codigo, s.codigo, s.nome";

            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getComposicaoCobrancaBoletoPF(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT ItemFinanceiro.Documento, ClasseApropriacaoFinan.Nome, ItemFinanceiro.Descricao,
            CASE WHEN TipoValor = 1 THEN ItemFinanceiro.ValorTotal - ItemFinanceiro.ValorTotal * 2 ELSE ItemFinanceiro.ValorTotal END AS Valor
            FROM ItemFinanceiro INNER JOIN ClasseApropriacaoFinan ON ItemFinanceiro.ClasseApro = ClasseApropriacaoFinan.Codigo
            WHERE (ItemFinanceiro.Documento = ?)";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getUltilizacaoBoletoAgrupado(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "select h.contratofinanceiro as contrato, h.compfinanceira as competencia, left(cast(b.codigo as VARCHAR(16))+' - '+ a.nomereduzido,44) as nomebenef, p.codigo, left(z.nome,255) as nomeprest, e.DataAbertura as data, left(g.nome,8) as grupo, e.codigo as codigoevento, sum(n.QteCobr) as Quantidade, sum((n.ValorUnitCobr * n.valorindcobr)* n.QteCobr) as TotalBruto, sum(n.subtotalcobrado) as valorcobrado, sum(n.totalcusteiocobrado)as taxacobrado, sum(n.totalcobrado) as totalcobrado, AVG(n.FatorParticipCobr) as media from compvlitemevento as n
                        INNER JOIN ItemEvento as i on i.autoid = n.itemevento
                        INNER JOIN Evento as e on e.autoid = i.evento
                        INNER JOIN Beneficiario as b on b.autoid = e.beneficiario
                        INNER JOIN ServicoOperadora as s on s.autoid = i.servico
                        INNER JOIN PrestadorServico as p on p.autoid = e.LocalExecucao or p.autoid = e.LocalExecucaoExt
                        INNER JOIN Pessoa as a on a.autoid = b.pessoa
                        INNER JOIN Pessoa as z on z.autoid = p.pessoa
                        INNER JOIN GrupoApropriacaoUtil as g on g.codigo = e.grupoapro
                        INNER JOIN GeradorITemFinan as f on f.IdGerador = n.autoid
                        INNER JOIN ItemFinanceiro as h on h.autoid = f.itemfinan
                    WHERE h.Documento = ? AND f.Localizador='SubTotalCobrado' AND f.Localizador<>'ValorMensalidade' GROUP BY h.contratofinanceiro, h.compfinanceira, b.codigo, a.nomereduzido, p.codigo, z.nome, e.DataAbertura, g.nome, e.codigo ORDER BY data ASC";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getReajusteBoleto(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT mc.*, mo.NumRegistroExterno, mo.Nome NomeProduto FROM ContratoFinanceiro cf
                        INNER JOIN Contrato c ON c.ContratoFinanceiro=cf.AutoId
                        INNER JOIN Beneficiario b ON b.Contrato = c.AutoId
                        INNER JOIN ModuloBeneficiario mb ON mb.Beneficiario=b.AutoId
                        INNER JOIN ModuloOperadora mo ON mo.AutoId=mb.Modulo
                        INNER JOIN ModuloCompetencia mc ON mc.Modulo=mb.AutoId
                    WHERE cf.AutoId=? AND mc.Competencia=? AND b.Tipo=1 AND mo.Tipo=1 AND mb.FimVigencia IS NULL AND PercReajusteTabela > 0";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ContratoFinanceiro);
            $busca->bindValue(2, $this->CompFinanceira);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getImpostoDoc(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT ";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

/**
     * @return mixed
     * @throws Exception
     */
    public function getTitularIRRF($ano,$contrato){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "SELECT IR.DescGrauDependencia, IR.CodigoContratoFinanceiro, IR.CodigoBenefTitular, IR.NomeTitular, IR.CnpTitular, IR.DataNascimentoBenef, IR.bloqueado, IR.Ano, IR.IdPessoaTitular
            FROM IR
                INNER JOIN AgrupaIR ON IR.IdQuitacao = AgrupaIR.IdQ
            WHERE (IR.TipoMovimentoFinan = 1 )
                GROUP BY IR.CodigoContratoFinanceiro, IR.DescGrauDependencia, IR.DataNascimentoBenef, IR.CodigoBenefTitular, IR.NomeTitular, IR.CnpTitular, IR.bloqueado, IR.Ano, IR.IdPessoaTitular
            HAVING        (IR.bloqueado = 0) AND (IR.Ano = '".$ano."') AND (IR.CodigoContratoFinanceiro = '".$contrato."') AND (IR.DescGrauDependencia = N'Titular')";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getTodosBenefIRRF($ano,$contrato){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "SELECT        IR.DescGrauDependencia, IR.CodigoContratoFinanceiro, IR.CodigoBenef, IR.NomeBenef, IR.CnpBenef, IR.DataNascimentoBenef, IR.bloqueado, IR.Ano, IR.IdPessoaTitular, IR.IdPessoaBenef
            FROM            IR INNER JOIN
                                     AgrupaIR ON IR.IdQuitacao = AgrupaIR.IdQ
            WHERE        (IR.TipoMovimentoFinan = 1 )
            GROUP BY IR.CodigoContratoFinanceiro, IR.DescGrauDependencia, IR.DataNascimentoBenef, IR.CodigoBenef, IR.NomeBenef, IR.CnpBenef, IR.bloqueado, IR.Ano, IR.IdPessoaTitular, IR.IdPessoaBenef
            HAVING        (IR.bloqueado = 0) AND (IR.Ano = '".$ano."') AND (IR.CodigoContratoFinanceiro = '".$contrato."')
            ORDER BY IR.DescGrauDependencia DESC";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getBeneficiarioIRRF($ano,$contrato,$idPessoaBenef){
        try{
            $conn = DB_Autenticacao::conn();

            $sql = "SELECT Meses.Meses,
                    CASE Meses WHEN 1 THEN 'Janeiro' WHEN 2 THEN 'Fevereiro' WHEN 3 THEN 'Março' WHEN 4 THEN 'Abril' WHEN 5 THEN 'Maio' WHEN 6 THEN 'Junho' WHEN 7 THEN 'Julho' WHEN 8 THEN 'Agosto' WHEN 9 THEN
                    'Setembro' WHEN 10 THEN 'Outubro' WHEN 11 THEN 'Novembro' WHEN 12 THEN 'Dezembro' END AS MesesNome, IR.CodigoContratoFinanceiro, IR.IdPessoaBenef, SUM(CASE WHEN TotalGerador IS NULL
                    THEN 0 ELSE TotalGerador END) AS Valor, IR.Ano, IR.bloqueado
                FROM            IR
                    RIGHT OUTER JOIN Meses ON IR.Mes = Meses.Meses AND IR.Ano = '".$ano."' AND IR.bloqueado = 0
                    AND IR.TipoMovimentoFinan = 1 AND IR.CodigoContratoFinanceiro = '".$contrato."' AND IdPessoaBenef = '".$idPessoaBenef."'
                GROUP BY IR.CodigoContratoFinanceiro,
                    CASE Meses WHEN 1 THEN 'Janeiro' WHEN 2 THEN 'Fevereiro' WHEN 3 THEN 'Março' WHEN 4 THEN 'Abril' WHEN 5 THEN 'Maio' WHEN 6 THEN 'Junho' WHEN 7 THEN 'Julho' WHEN 8 THEN 'Agosto' WHEN 9 THEN
                    'Setembro' WHEN 10 THEN 'Outubro' WHEN 11 THEN 'Novembro' WHEN 12 THEN 'Dezembro' END, IR.IdPessoaBenef, IR.Ano, IR.bloqueado, Meses.Meses
                ORDER BY Meses.Meses";

            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

/**
     * @return array
     * @throws Exception
     */
    public function getIRRF($ano=null,$numcontrato=null){//$diaInicial=null,$diaFinal=null){
        try{

            $conn = DB_Autenticacao::conn();

			$sql="SELECT Meses.Meses,
                         CASE Meses WHEN 1 THEN 'Janeiro' WHEN 2 THEN 'Fevereiro' WHEN 3 THEN 'Março' WHEN 4 THEN 'Abril' WHEN 5 THEN 'Maio' WHEN 6 THEN 'Junho' WHEN 7 THEN 'Julho' WHEN 8 THEN 'Agosto' WHEN 9 THEN
                          'Setembro' WHEN 10 THEN 'Outubro' WHEN 11 THEN 'Novembro' WHEN 12 THEN 'Dezembro' END AS MesesNome, IR.Mes AS Expr3, IR.GrauDependencia, IR.DescGrauDependencia,
                         CAST(IR.CodigoBenef AS varchar(17)) + ' - ' + CAST(IR.NomeBenef AS varchar(50)) AS Expr2, IR.CodigoContratoFinanceiro,
                         CASE Mes WHEN 1 THEN 'Janeiro' WHEN 2 THEN 'Fevereiro' WHEN 3 THEN 'Março' WHEN 4 THEN 'Abril' WHEN 5 THEN 'Maio' WHEN 6 THEN 'Junho' WHEN 7 THEN 'Julho' WHEN 8 THEN 'Agosto' WHEN 9 THEN
                          'Setembro' WHEN 10 THEN 'Outubro' WHEN 11 THEN 'Novembro' WHEN 12 THEN 'Dezembro' END AS Mes, IR.IdPessoaBenef, IR.Situacao, SUM(CASE WHEN TotalGerador IS NULL
                         THEN 0 ELSE TotalGerador END) AS Expr1, IR.NomeBenef, IR.CnpBenef, IR.DataNascimentoBenef, IR.CodigoBenefTitular, IR.IdPessoaTitular, IR.NomeTitular, IR.CnpTitular, IR.CodigoContrato, IR.DataContrato,
                         IR.IdPessoaContrato, IR.NomePessoaContrato, IR.CnpPessoaContrato, IR.Ano, IR.bloqueado
			FROM    IR INNER JOIN
                         AgrupaIR ON IR.IdQuitacao = AgrupaIR.IdQ RIGHT OUTER JOIN
                         Meses ON IR.Mes = Meses.Meses AND IR.Ano = ".$ano." AND IR.bloqueado = 0 AND IR.TipoMovimentoFinan = 1
                         AND IR.CodigoContratoFinanceiro = '".$numcontrato."'
			GROUP BY IR.CodigoContratoFinanceiro,
                         CASE Meses WHEN 1 THEN 'Janeiro' WHEN 2 THEN 'Fevereiro' WHEN 3 THEN 'Março' WHEN 4 THEN 'Abril' WHEN 5 THEN 'Maio' WHEN 6 THEN 'Junho' WHEN 7 THEN 'Julho' WHEN 8 THEN 'Agosto' WHEN 9 THEN
                          'Setembro' WHEN 10 THEN 'Outubro' WHEN 11 THEN 'Novembro' WHEN 12 THEN 'Dezembro' END,
                         CASE Mes WHEN 1 THEN 'Janeiro' WHEN 2 THEN 'Fevereiro' WHEN 3 THEN 'Março' WHEN 4 THEN 'Abril' WHEN 5 THEN 'Maio' WHEN 6 THEN 'Junho' WHEN 7 THEN 'Julho' WHEN 8 THEN 'Agosto' WHEN 9 THEN
                          'Setembro' WHEN 10 THEN 'Outubro' WHEN 11 THEN 'Novembro' WHEN 12 THEN 'Dezembro' END, CAST(IR.CodigoBenef AS varchar(17)) + ' - ' + CAST(IR.NomeBenef AS varchar(50)), IR.IdPessoaBenef,
                         IR.Situacao, IR.DescGrauDependencia, IR.NomeBenef, IR.CnpBenef, IR.DataNascimentoBenef, IR.CodigoBenefTitular, IR.IdPessoaTitular, IR.NomeTitular, IR.CnpTitular, IR.CodigoContrato, IR.DataContrato,
                         IR.IdPessoaContrato, IR.NomePessoaContrato, IR.CnpPessoaContrato, IR.Ano, IR.GrauDependencia, IR.bloqueado, IR.Mes, Meses.Meses
			ORDER BY Meses.Meses";


            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);

			// echo '<pre>';
			// print_r($array);
			// echo '</pre>';
            // die;

            return $array;

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getPesquisaIRRF($ano=null,$contrato=null,$tipo=null,$modelo=null,$qtdInicial=0, $qtdMaximo=100){
        try{

            if(!empty($contrato)){
                $contrato = "AND Contrato.Codigo='".$contrato."'";
            }
            if(!empty($tipo)){
                $tipo = "AND TipoPessoa.Codigo='".$tipo."'";
            }
            if(!empty($modelo)){
                $modelo = "AND ModeloContrato.Codigo='".$modelo."'";
            }

            $conn = DB_Cardio::conn();

            $sql="SELECT * FROM (
                SELECT
                IR.Ano,
                Contrato.Codigo AS Codigo,
                Pessoa.Nome,
                TipoPessoa.Codigo AS CodigoTipoPessoa,
                TipoPessoa.Nome AS NomeTipoPessoa,
                ModeloContrato.Codigo AS ModeloContrato,
                --ModeloContrato.Nome AS NomeModeloContrato,
                Pessoa.AutoId AS Pessoa,
                ROW_NUMBER() OVER(ORDER BY IR.Ano ASC) as linhas
            FROM Contrato
                INNER JOIN ModeloContrato ON Contrato.Modelo = ModeloContrato.AutoId
                INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId
                INNER JOIN Pessoa ON Contrato.Contratante = Pessoa.AutoId
                INNER JOIN TipoPessoa ON Pessoa.Tipo = TipoPessoa.Codigo
                INNER JOIN sicweb.dbo.IR as IR ON IR.CodigoContratoFinanceiro = ContratoFinanceiro.Codigo
            WHERE IR.Ano = ".$ano." ".$contrato." ".$tipo." ".$modelo."
            GROUP BY IR.Ano, Contrato.Codigo, Pessoa.Nome, TipoPessoa.Codigo, TipoPessoa.Nome, ModeloContrato.Codigo,
            ModeloContrato.Nome, Pessoa.AutoId) TabelaNumerada WHERE linhas BETWEEN ".(intval($qtdInicial)+1)." AND ".(intval($qtdInicial)+$qtdMaximo)."";

            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            // echo '<pre>';
            // print_r($array);
            // print_r($sql);
            // echo '</pre>';
            // die;
            return $array;

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

/**
     * @return array
     * @throws Exception
     */
    public function getPesquisaTotalIRRF($ano=null,$contrato=null,$tipo=null,$modelo=null){
        try{

            if(!empty($contrato)){
                $contrato = "AND Contrato.Codigo='".$contrato."'";
            }
            if(!empty($tipo)){
                $tipo = "AND TipoPessoa.Codigo='".$tipo."'";
            }
            if(!empty($modelo)){
                $modelo = "AND ModeloContrato.Codigo='".$modelo."'";
            }

            $conn = DB_Cardio::conn();

            $sql="SELECT
                IR.Ano,
                Contrato.Codigo AS Codigo,
                Pessoa.Nome,
                TipoPessoa.Codigo AS CodigoTipoPessoa,
                TipoPessoa.Nome AS NomeTipoPessoa,
                ModeloContrato.Codigo AS ModeloContrato,
                Pessoa.AutoId AS Pessoa
            FROM Contrato
                INNER JOIN ModeloContrato ON Contrato.Modelo = ModeloContrato.AutoId
                INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId
                INNER JOIN Pessoa ON Contrato.Contratante = Pessoa.AutoId
                INNER JOIN TipoPessoa ON Pessoa.Tipo = TipoPessoa.Codigo
                INNER JOIN sicweb.dbo.IR as IR ON IR.CodigoContratoFinanceiro = ContratoFinanceiro.Codigo
            WHERE IR.Ano = ".$ano." ".$contrato." ".$tipo." ".$modelo."
            GROUP BY IR.Ano, Contrato.Codigo, Pessoa.Nome, TipoPessoa.Codigo, TipoPessoa.Nome, ModeloContrato.Codigo,
            ModeloContrato.Nome, Pessoa.AutoId
            ORDER BY Pessoa.Nome";

            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            //echo '<pre>';
            //print_r($array);
            //print_r($sql);
            //echo '</pre>';
            //die;
            return $array;

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getBoleto_pesquisa($diaInicial=null,$diaFinal=null){
        try{
            $classe = "in(1,2,6)";
            $comp = "";
            $contrato = "";
            $dataVencimento = "";

            if(!empty($this->Classe)){
                $classe = "in(".$this->Classe.")";
            }
            if(!empty($this->CompFinanceira)){
                $comp = "AND DocFinanceiro.CompFinanceira='".$this->CompFinanceira."'";
            }
            if(!empty($this->ContratoFinanceiro)){
                $contrato = "AND DocFinanceiro.ContratoFinanceiro='".$this->ContratoFinanceiro."'";
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $dataVencimento = "AND DocFinanceiro.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."'";
            }

            $conn = DB_Cardio::conn();

            $sql="SELECT con.AutoId as idContrato, DocFinanceiro.AutoId as IdDocFinanceiro, si.Nome SituacaoDoc, ContratoFinanceiro.Codigo, Pessoa.Nome, Pessoa.Cnp, BoletoCobranca.NossoNumero, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse, cd.Nome ClasseDocFinan, DocFinanceiro.AutoId,DocFinanceiro.Classe,DocFinanceiro.NumeroProvisorio,DocFinanceiro.NumDocFornec,DocFinanceiro.Numero,DocFinanceiro.Pessoa,DocFinanceiro.ContratoFinanceiro,DocFinanceiro.CompFinanceira,DocFinanceiro.CompSeq,DocFinanceiro.DataEmissao,DocFinanceiro.DataVencimento,DocFinanceiro.TipoNegJuros,DocFinanceiro.TipoNegMultas,DocFinanceiro.ValorBruto,DocFinanceiro.ValorLiquido,DocFinanceiro.EProvisao,DocFinanceiro.SituacaoDocumento,DocFinanceiro.SaldoEmAberto,DocFinanceiro.DataSituacao,DocFinanceiro.DataContPDD,DocFinanceiro.DataInclusao,DocFinanceiro.CodLotacao,DocFinanceiro.CompGeracao,DocFinanceiro.DocResultante,DocFinanceiro.DocProvisao,DocFinanceiro.PracaCobranca,DocFinanceiro.DocOrigem,DocFinanceiro.DocAjustado,DocFinanceiro.TelosRgUs,DocFinanceiro.TelosRgDt,DocFinanceiro.TelosUpUs,DocFinanceiro.TelosUpDt,DocFinanceiro.TelosCtrler,DocFinanceiro.IdGerador,DocFinanceiro.InfoCompl,DocFinanceiro.EAgrupamento,DocFinanceiro.TotalDebitos,DocFinanceiro.TotalCreditos,DocFinanceiro.TipoGerador,DocFinanceiro.SomenteProvisorio,DocFinanceiro.DocVinculado,DocFinanceiro.GeradorDoc,DocFinanceiro.ContratoFinanceiroResp,DocFinanceiro.CamaraCompensacao,DocFinanceiro.DiaCompetencia,DocFinanceiro.PercTaxaAdm,DocFinanceiro.Conferido FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND BoletoCobranca.NossoNumero IS NOT NULL AND (DocFinanceiro.Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ORDER BY Pessoa.Nome";

            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);

            $arrayFinal = array();

            foreach ($array as $k => $b){
                $objSuspensao = new SuspensaoVinculo();
                $objSuspensao->setContrato($b['idContrato']);
                $arraySuspensao = $objSuspensao->getByContrato();

                if(empty($arraySuspensao)){
                    $pessoa = new Pessoa();
                    $pessoa->setAutoId($b['Pessoa']);
                    $b['objPessoa'] = $pessoa->getById();
                    array_push($arrayFinal, $b);
                }
            }

            return $arrayFinal;

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getBoleto_pesquisaNovo($modelo=null,$diaInicial=null,$diaFinal=null, $qtdInicial=0, $qtdMaximo=100, $tipoEnvio='sms_boleto'){
        try{
            $classe = "in(1,2,6)";
            $comp = "";
            $contrato = "";
            $dataVencimento = "";


            $objNaoEnvia = new Nao_Envia_SMS();
            $objNaoEnvia->setSituacao(1);
            $arrayNaoEnvia = $objNaoEnvia->getAllBySituacao();
            $contratos_nao_envia="";
            $where="";
            if($tipoEnvio!='email'){
                foreach ($arrayNaoEnvia as $cont_nao){
                    if($cont_nao[$tipoEnvio]==2){
                        if($contratos_nao_envia==""){
                            $contratos_nao_envia.=$cont_nao['contrato_financeiro'];
                        }
                        else{
                            $contratos_nao_envia.=",".$cont_nao['contrato_financeiro'];
                        }
                    }

                }
                if($contratos_nao_envia!=""){
                    $where = " AND ContratoFinanceiro NOT IN(".$contratos_nao_envia.")";
                }
            }

            if(!empty($this->Classe)){
                $classe = "in(".$this->Classe.")";
            }
            if(!empty($this->CompFinanceira)){
                $comp = "AND DocFinanceiro.CompFinanceira='".$this->CompFinanceira."'";
            }
            if(!empty($this->ContratoFinanceiro)){
                $contrato = "AND DocFinanceiro.ContratoFinanceiro='".$this->ContratoFinanceiro."'";
            }
            if(!empty($modelo)){
                $modelo = "AND con.Modelo='".$modelo."'";
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $dataVencimento = "AND DocFinanceiro.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."'";
            }

            $conn = DB_Cardio::conn();

            $sql="SELECT * FROM (SELECT ROW_NUMBER() OVER(ORDER BY Pessoa.Nome ASC) as linhas, con.AutoId as idContrato, DocFinanceiro.AutoId as IdDocFinanceiro, con.Modelo as ModeloContrato, si.Nome SituacaoDoc, ContratoFinanceiro.Codigo, Pessoa.Nome, Pessoa.Cnp, BoletoCobranca.NossoNumero, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse, cd.Nome ClasseDocFinan, DocFinanceiro.AutoId,DocFinanceiro.Classe,DocFinanceiro.NumeroProvisorio,DocFinanceiro.NumDocFornec,DocFinanceiro.Numero,ContratoFinanceiro.Pessoa,DocFinanceiro.ContratoFinanceiro,DocFinanceiro.CompFinanceira,DocFinanceiro.CompSeq,DocFinanceiro.DataEmissao,DocFinanceiro.DataVencimento,DocFinanceiro.TipoNegJuros,DocFinanceiro.TipoNegMultas,DocFinanceiro.ValorBruto,DocFinanceiro.ValorLiquido,DocFinanceiro.EProvisao,DocFinanceiro.SituacaoDocumento,DocFinanceiro.SaldoEmAberto,DocFinanceiro.DataSituacao,DocFinanceiro.DataContPDD,DocFinanceiro.DataInclusao,DocFinanceiro.CodLotacao,DocFinanceiro.CompGeracao,DocFinanceiro.DocResultante,DocFinanceiro.DocProvisao,DocFinanceiro.PracaCobranca,DocFinanceiro.DocOrigem,DocFinanceiro.DocAjustado,DocFinanceiro.TelosRgUs,DocFinanceiro.TelosRgDt,DocFinanceiro.TelosUpUs,DocFinanceiro.TelosUpDt,DocFinanceiro.TelosCtrler,DocFinanceiro.IdGerador,DocFinanceiro.InfoCompl,DocFinanceiro.EAgrupamento,DocFinanceiro.TotalDebitos,DocFinanceiro.TotalCreditos,DocFinanceiro.TipoGerador,DocFinanceiro.SomenteProvisorio,DocFinanceiro.DocVinculado,DocFinanceiro.GeradorDoc,DocFinanceiro.ContratoFinanceiroResp,DocFinanceiro.CamaraCompensacao,DocFinanceiro.DiaCompetencia,DocFinanceiro.PercTaxaAdm,DocFinanceiro.Conferido FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND (DocFinanceiro.Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ".$modelo.") TabelaNumerada
                    WHERE linhas BETWEEN ".(intval($qtdInicial)+1)." AND ".(intval($qtdInicial)+$qtdMaximo)." ".$where;

            $busca = $conn->prepare($sql);
            $busca->execute();
            return $array = $busca->fetchAll(PDO::FETCH_ASSOC);

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getContarBoleto_pesquisa($modelo=null,$diaInicial=null,$diaFinal=null,$inicioTel='1900-01-01', $adimplentes=0,$enviaEmail='',$tipoEnvio='sms_boleto'){
        try{
            $classe = "in(1,2,6)";
            $comp = "";
            $contrato = "";
            $dataVencimento = "";


            $objNaoEnvia = new Nao_Envia_SMS();
            $objNaoEnvia->setSituacao(1);
            $arrayNaoEnvia = $objNaoEnvia->getAllBySituacao();
            $contratos_nao_envia="";
            $where="";
            if($tipoEnvio!='email'){
                foreach ($arrayNaoEnvia as $cont_nao){
                    if($cont_nao[$tipoEnvio]==2){
                        if($contratos_nao_envia==""){
                            $contratos_nao_envia.=$cont_nao['contrato_financeiro'];
                        }
                        else{
                            $contratos_nao_envia.=",".$cont_nao['contrato_financeiro'];
                        }
                    }

                }
                if($contratos_nao_envia!=""){
                    $where = " AND ContratoFinanceiro.AutoId NOT IN(".$contratos_nao_envia.")";
                }
            }



            if(!empty($this->Classe)){
                $classe = "in(".$this->Classe.")";
            }
            if(!empty($this->CompFinanceira)){
                $comp = "AND DocFinanceiro.CompFinanceira='".$this->CompFinanceira."'";
            }
            if(!empty($this->ContratoFinanceiro)){
                $contrato = "AND DocFinanceiro.ContratoFinanceiro='".$this->ContratoFinanceiro."'";
            }
            if(!empty($modelo)){
                $modelo = "AND con.Modelo='".$modelo."'";
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $dataVencimento = "AND DocFinanceiro.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."'";
            }

            $conn = DB_Cardio::conn();

            if($adimplentes==0){
                if($enviaEmail==1){
                    $sql="SELECT count(con.AutoId) as Total, 1 as linha FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                                INNER JOIN EmailPessoa ep on ep.Pessoa = Pessoa.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3)
                            AND con.AutoId NOT IN(SELECT Contrato FROM SuspensaoVinculo WHERE DataSuspensao<=GETDATE() AND DataReativacao IS NULL AND Contrato IS NOT NULL)
                            AND (DocFinanceiro.Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ".$modelo." ".$where;
                }
                else{
                    $sql="SELECT count(con.AutoId) as Total, 1 as linha FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3)
                            AND Pessoa.AutoId IN(SELECT Pessoa FROM TelefonePessoa WHERE Tipo=2 AND (TelosUpDt>'".$inicioTel."' OR TelosRgDt>'".$inicioTel."'))
                            AND con.AutoId NOT IN(SELECT Contrato FROM SuspensaoVinculo WHERE DataSuspensao<=GETDATE() AND DataReativacao IS NULL AND Contrato IS NOT NULL)
                            AND (DocFinanceiro.Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ".$modelo." ".$where;
                }

                $busca = $conn->prepare($sql);
                $busca->execute();
                $array = $busca->fetch(PDO::FETCH_ASSOC);
            }
            else{
                if($enviaEmail==1){
                    $sql = "SELECT count(linha) as Total FROM (SELECT count(con.AutoId) as Total, con.AutoId, 1 as linha FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                                INNER JOIN EmailPessoa ep on ep.Pessoa=Pessoa.AutoId
                                LEFT JOIN SuspensaoVinculo sv on sv.Contrato=con.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND (DocFinanceiro.Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ".$modelo." ".$where."
                            AND con.AutoId NOT IN(SELECT Contrato FROM SuspensaoVinculo WHERE DataSuspensao<=GETDATE() AND DataReativacao IS NULL AND Contrato IS NOT NULL)
                            AND con.AutoId NOT IN(SELECT con.AutoId as idContrato FROM Pessoa
                                                        INNER JOIN ContratoFinanceiro
                                                        INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                                        INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                                        INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                                        INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                                        INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                                        INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND DocFinanceiro.CompFinanceira<".$this->CompFinanceira." AND DocFinanceiro.ContratoFinanceiro IS NOT NULL)
                            group by con.AutoId) Tabela GROUP BY linha";
                }
                else{
                    $sql = "SELECT count(linha) as Total FROM (SELECT count(con.AutoId) as Total, con.AutoId, 1 as linha FROM Pessoa
                                    INNER JOIN ContratoFinanceiro
                                    INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                    INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                    INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                    INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                    INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                    INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                                    INNER JOIN TelefonePessoa tp on tp.Pessoa=con.Contratante
                                    LEFT JOIN SuspensaoVinculo sv on sv.Contrato=con.AutoId
                                WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND tp.Tipo=2 AND (tp.TelosUpDt>'".$inicioTel."' OR tp.TelosRgDt>'".$inicioTel."') AND (DocFinanceiro.Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ".$modelo." ".$where."
                                AND con.AutoId NOT IN(SELECT Contrato FROM SuspensaoVinculo WHERE DataSuspensao<=GETDATE() AND DataReativacao IS NULL AND Contrato IS NOT NULL)
                                AND con.AutoId NOT IN(SELECT con.AutoId as idContrato FROM Pessoa
                                                            INNER JOIN ContratoFinanceiro
                                                            INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                                            INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                                            INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                                            INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                                            INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                                            INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                                WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND DocFinanceiro.CompFinanceira<".$this->CompFinanceira." AND DocFinanceiro.ContratoFinanceiro IS NOT NULL)
                                group by con.AutoId) Tabela GROUP BY linha";
                }

                $busca = $conn->prepare($sql);
                $busca->execute();
                $array = $busca->fetch(PDO::FETCH_ASSOC);
            }
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

	public function getContarBoleto_pesquisaGeral($modelo=null,$diaInicial=null,$diaFinal=null,$inicioTel='1900-01-01', $adimplentes=0){
        try{
            $classe = "in(1,2,6)";
            $comp = "";
            $contrato = "";
            $dataVencimento = "";
            if(!empty($this->Classe)){
                $classe = "in(".$this->Classe.")";
            }
            if(!empty($this->CompFinanceira)){
                $comp = "AND DocFinanceiro.CompFinanceira='".$this->CompFinanceira."'";
            }
            if(!empty($this->ContratoFinanceiro)){
                $contrato = "AND DocFinanceiro.ContratoFinanceiro='".$this->ContratoFinanceiro."'";
            }
            if(!empty($modelo)){
                $modelo = "AND con.Modelo='".$modelo."'";
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $dataVencimento = "AND DocFinanceiro.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."'";
            }

            $conn = DB_Cardio::conn();

			$sql="SELECT count(con.AutoId) as Total FROM Pessoa
							INNER JOIN ContratoFinanceiro
							INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
							INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
							INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
							INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
							INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
							INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
						WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND (DocFinanceiro.Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ".$modelo;

			$busca = $conn->prepare($sql);
			$busca->execute();
			$array = $busca->fetch(PDO::FETCH_ASSOC);

            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

	public function getContarBoleto_pesquisaGeralExibir($modelo=null,$diaInicial=null,$diaFinal=null,$inicioTel='1900-01-01', $adimplentes=0){
        try{
            $classe = "in(1,2,6)";
            $comp = "";
            $contrato = "";
            $dataVencimento = "";
            if(!empty($this->Classe)){
                $classe = "in(".$this->Classe.")";
            }
            if(!empty($this->CompFinanceira)){
                $comp = "AND dc.CompFinanceira='".$this->CompFinanceira."'";
            }
            if(!empty($this->ContratoFinanceiro)){
                $contrato = "AND dc.ContratoFinanceiro='".$this->ContratoFinanceiro."'";
            }
            if(!empty($modelo)){
                $modelo = "AND con.Modelo='".$modelo."'";
            }
            if(!empty($diaInicial)){
                $diaInicial=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaInicial;
                $diaFinal=substr($this->CompFinanceira,0,4).'-'.substr($this->CompFinanceira,4).'-'.$diaFinal;
                $dataVencimento = "AND dc.DataVencimento BETWEEN '".$diaInicial."' AND '".$diaFinal."'";
            }

            $conn = DB_Cardio::conn();

			$sql="SELECT COUNT(dc.AutoId) AS Total FROM DocFinanceiro dc
				    INNER JOIN Contrato con on con.ContratoFinanceiro = dc.ContratoFinanceiro
				    INNER JOIN BoletoCobranca ON dc.AutoId = BoletoCobranca.DocFinanceiro
				  WHERE dc.SituacaoDocumento in(1,3) AND (Classe ".$classe.") ".$comp." ".$contrato." ".$dataVencimento." ".$modelo;

			$busca = $conn->prepare($sql);
			$busca->execute();
			$array = $busca->fetch(PDO::FETCH_ASSOC);

            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @param null $contratofinaneiro
     * @return bool
     * @throws Exception
     */
    public function verificaAdimplentes($contratofinaneiro=null){
        try{
            $array=null;
            $conn = DB_Cardio::conn();
            $sql = "SELECT con.AutoId as idContrato FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) AND DocFinanceiro.CompFinanceira<".$this->CompFinanceira." AND DocFinanceiro.ContratoFinanceiro=".$contratofinaneiro;
            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($array)){
                /** INADIMPLENTE */
                return false;
            }
            /** ADIMPLENTE */
            return true;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getMultaJuros(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT cast(cm.Percentual as decimal(38,5)) as multa, cj.PercFixoJuros as juros FROM DocFinanceiro as df
                        INNER JOIN TipoNegociacaoMultas tm on tm.Codigo=df.TipoNegMultas
                        INNER JOIN CalcMultasTipoNeg cm on cm.TipoNeg=tm.Codigo
                        INNER JOIN TipoNegociacaoJuros tj on tj.Codigo=df.TipoNegJuros
                        INNER JOIN CalcJurosTipoNeg cj on cj.TipoNeg=tj.Codigo
                    WHERE df.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getBancoByDocFinan(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.* FROM BoletoCobranca bc
                        INNER JOIN DocFinanceiro df ON df.AutoId = bc.DocFinanceiro
                        INNER JOIN NegociacaoBancaria nb ON nb.AutoId = bc.NegociacaoBancaria
                        INNER JOIN LayoutBancario lb ON lb.Codigo = nb.LayoutBancario
                        INNER JOIN Banco b ON b.Codigo = lb.Banco
                    WHERE df.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }


    public function getInadimplentes_pesquisa($modelo='',$contratoinicial='', $contratofinal='',$diaInicial=null,$diaFinal=null, $qtdInicial=0, $qtdMaximo=100){
        try{
            $comp = "";
            $contrato = "";
            $dataVencimento = "";

            if(!empty($contratoinicial) && !empty($contratofinal)){
                $contrato = " AND con.Codigo BETWEEN '".$contratoinicial."' AND '".$contratofinal."'";
            }
            if(!empty($modelo)){
                $modelo = "AND con.Modelo='".$modelo."'";
            }

            $conn = DB_Cardio::conn();

            $objNaoEnvia = new Nao_Envia_SMS();
            $objNaoEnvia->setSituacao(1);
            $arrayNaoEnvia = $objNaoEnvia->getAllBySituacao();
            $contratos_nao_envia="";
            $where="";
            foreach ($arrayNaoEnvia as $cont_nao){
                if($cont_nao['sms_inadimplencia']==2){
                    if($contratos_nao_envia==""){
                        $contratos_nao_envia.=$cont_nao['contrato_financeiro'];
                    }
                    else{
                        $contratos_nao_envia.=",".$cont_nao['contrato_financeiro'];
                    }
                }

            }
            if($contratos_nao_envia!=""){
                $where = " AND ContratoFinanceiro NOT IN(".$contratos_nao_envia.")";
            }

            /*$sql="SELECT * FROM (SELECT ROW_NUMBER() OVER(ORDER BY Nome ASC) as linhas, idContrato, ContratoFinanceiro, Codigo, Nome, IdDocFinanceiro, ModeloContrato  FROM (
                                            SELECT DATEDIFF(day,DocFinanceiro.DataVencimento,GETDATE()) AS dias, con.Modelo as ModeloContrato, con.AutoId as idContrato, DocFinanceiro.AutoId as IdDocFinanceiro, si.Nome SituacaoDoc, ContratoFinanceiro.Codigo, Pessoa.Nome, Pessoa.Cnp, BoletoCobranca.NossoNumero, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse, cd.Nome ClasseDocFinan, DocFinanceiro.AutoId,DocFinanceiro.Classe,DocFinanceiro.NumeroProvisorio,DocFinanceiro.NumDocFornec,DocFinanceiro.Numero,DocFinanceiro.Pessoa,DocFinanceiro.ContratoFinanceiro,DocFinanceiro.CompFinanceira,DocFinanceiro.CompSeq,DocFinanceiro.DataEmissao,DocFinanceiro.DataVencimento,DocFinanceiro.TipoNegJuros,DocFinanceiro.TipoNegMultas,DocFinanceiro.ValorBruto,DocFinanceiro.ValorLiquido,DocFinanceiro.EProvisao,DocFinanceiro.SituacaoDocumento,DocFinanceiro.SaldoEmAberto,DocFinanceiro.DataSituacao,DocFinanceiro.DataContPDD,DocFinanceiro.DataInclusao,DocFinanceiro.CodLotacao,DocFinanceiro.CompGeracao,DocFinanceiro.DocResultante,DocFinanceiro.DocProvisao,DocFinanceiro.PracaCobranca,DocFinanceiro.DocOrigem,DocFinanceiro.DocAjustado,DocFinanceiro.TelosRgUs,DocFinanceiro.TelosRgDt,DocFinanceiro.TelosUpUs,DocFinanceiro.TelosUpDt,DocFinanceiro.TelosCtrler,DocFinanceiro.IdGerador,DocFinanceiro.InfoCompl,DocFinanceiro.EAgrupamento,DocFinanceiro.TotalDebitos,DocFinanceiro.TotalCreditos,DocFinanceiro.TipoGerador,DocFinanceiro.SomenteProvisorio,DocFinanceiro.DocVinculado,DocFinanceiro.GeradorDoc,DocFinanceiro.ContratoFinanceiroResp,DocFinanceiro.CamaraCompensacao,DocFinanceiro.DiaCompetencia,DocFinanceiro.PercTaxaAdm,DocFinanceiro.Conferido FROM Pessoa
                                                INNER JOIN ContratoFinanceiro
                                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) ".$contrato." ".$modelo.") TabelaDias
                                    WHERE dias BETWEEN $diaInicial AND $diaFinal GROUP BY idContrato, ContratoFinanceiro, Codigo, Nome, IdDocFinanceiro, ModeloContrato) TabelaNumerada
                    WHERE linhas BETWEEN ".($qtdInicial+1)." AND ".($qtdInicial+$qtdMaximo)." ".$where;*/

            $sql="SELECT * FROM (SELECT ROW_NUMBER() OVER(ORDER BY Nome ASC) as linhas, idContrato, ContratoFinanceiro, Codigo, Nome, IdDocFinanceiro, ModeloContrato, Pessoa, CompFinanceira FROM (
                                            SELECT DATEDIFF(day,DocFinanceiro.DataVencimento,GETDATE()) AS dias, con.Modelo as ModeloContrato, con.AutoId as idContrato, DocFinanceiro.AutoId as IdDocFinanceiro, DocFinanceiro.Pessoa as Pesspa, si.Nome SituacaoDoc, ContratoFinanceiro.Codigo, Pessoa.Nome, Pessoa.Cnp, BoletoCobranca.NossoNumero, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse, cd.Nome ClasseDocFinan, DocFinanceiro.AutoId,DocFinanceiro.Classe,DocFinanceiro.NumeroProvisorio,DocFinanceiro.NumDocFornec,DocFinanceiro.Numero,DocFinanceiro.Pessoa,DocFinanceiro.ContratoFinanceiro,DocFinanceiro.CompFinanceira,DocFinanceiro.CompSeq,DocFinanceiro.DataEmissao,DocFinanceiro.DataVencimento,DocFinanceiro.TipoNegJuros,DocFinanceiro.TipoNegMultas,DocFinanceiro.ValorBruto,DocFinanceiro.ValorLiquido,DocFinanceiro.EProvisao,DocFinanceiro.SituacaoDocumento,DocFinanceiro.SaldoEmAberto,DocFinanceiro.DataSituacao,DocFinanceiro.DataContPDD,DocFinanceiro.DataInclusao,DocFinanceiro.CodLotacao,DocFinanceiro.CompGeracao,DocFinanceiro.DocResultante,DocFinanceiro.DocProvisao,DocFinanceiro.PracaCobranca,DocFinanceiro.DocOrigem,DocFinanceiro.DocAjustado,DocFinanceiro.TelosRgUs,DocFinanceiro.TelosRgDt,DocFinanceiro.TelosUpUs,DocFinanceiro.TelosUpDt,DocFinanceiro.TelosCtrler,DocFinanceiro.IdGerador,DocFinanceiro.InfoCompl,DocFinanceiro.EAgrupamento,DocFinanceiro.TotalDebitos,DocFinanceiro.TotalCreditos,DocFinanceiro.TipoGerador,DocFinanceiro.SomenteProvisorio,DocFinanceiro.DocVinculado,DocFinanceiro.GeradorDoc,DocFinanceiro.ContratoFinanceiroResp,DocFinanceiro.CamaraCompensacao,DocFinanceiro.DiaCompetencia,DocFinanceiro.PercTaxaAdm,DocFinanceiro.Conferido FROM Pessoa
                                                INNER JOIN ContratoFinanceiro
                                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) ".$contrato." ".$modelo.") TabelaDias
                                            WHERE dias BETWEEN $diaInicial AND $diaFinal GROUP BY idContrato, ContratoFinanceiro, Codigo, Nome, IdDocFinanceiro, ModeloContrato, Pessoa, CompFinanceira) TabelaNumerada
                                            WHERE linhas BETWEEN ".($qtdInicial+1)." AND ".($qtdInicial+$qtdMaximo)." ".$where;

            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);

            return $array;

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getContarInadimplentes_pesquisa($modelo='',$contratoinicial='', $contratofinal='',$diaInicial=null,$diaFinal=null,$inicioTel='1900-01-01'){
        try{
            $comp = "";
            $contrato = "";
            $dataVencimento = "";

            if(!empty($contratoinicial) && !empty($contratofinal)){
                $contrato = " AND con.Codigo BETWEEN '".$contratoinicial."' AND '".$contratofinal."'";
            }
            if(!empty($modelo)){
                $modelo = "AND con.Modelo='".$modelo."'";
            }

            $objNaoEnvia = new Nao_Envia_SMS();
            $objNaoEnvia->setSituacao(1);
            $arrayNaoEnvia = $objNaoEnvia->getAllBySituacao();
            $contratos_nao_envia="";
            $where="";
            foreach ($arrayNaoEnvia as $cont_nao){
                if($cont_nao['sms_inadimplencia']==2){
                    if($contratos_nao_envia==""){
                        $contratos_nao_envia.=$cont_nao['contrato_financeiro'];
                    }
                    else{
                        $contratos_nao_envia.=",".$cont_nao['contrato_financeiro'];
                    }
                }

            }
            if($contratos_nao_envia!=""){
                $where = " AND ContratoFinanceiro NOT IN(".$contratos_nao_envia.")";
            }


            $conn = DB_Cardio::conn();

            $sql="SELECT COUNT(Nome) Total FROM (SELECT ROW_NUMBER() OVER(ORDER BY Nome ASC) as linhas, idContrato, ContratoFinanceiro, Codigo, Nome FROM (SELECT DATEDIFF(day,DocFinanceiro.DataVencimento,GETDATE()) AS dias, con.AutoId as idContrato, DocFinanceiro.AutoId as IdDocFinanceiro, si.Nome SituacaoDoc, ContratoFinanceiro.Codigo, Pessoa.Nome, Pessoa.Cnp, BoletoCobranca.NossoNumero, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse, cd.Nome ClasseDocFinan, DocFinanceiro.AutoId,DocFinanceiro.Classe,DocFinanceiro.NumeroProvisorio,DocFinanceiro.NumDocFornec,DocFinanceiro.Numero,DocFinanceiro.Pessoa,DocFinanceiro.ContratoFinanceiro,DocFinanceiro.CompFinanceira,DocFinanceiro.CompSeq,DocFinanceiro.DataEmissao,DocFinanceiro.DataVencimento,DocFinanceiro.TipoNegJuros,DocFinanceiro.TipoNegMultas,DocFinanceiro.ValorBruto,DocFinanceiro.ValorLiquido,DocFinanceiro.EProvisao,DocFinanceiro.SituacaoDocumento,DocFinanceiro.SaldoEmAberto,DocFinanceiro.DataSituacao,DocFinanceiro.DataContPDD,DocFinanceiro.DataInclusao,DocFinanceiro.CodLotacao,DocFinanceiro.CompGeracao,DocFinanceiro.DocResultante,DocFinanceiro.DocProvisao,DocFinanceiro.PracaCobranca,DocFinanceiro.DocOrigem,DocFinanceiro.DocAjustado,DocFinanceiro.TelosRgUs,DocFinanceiro.TelosRgDt,DocFinanceiro.TelosUpUs,DocFinanceiro.TelosUpDt,DocFinanceiro.TelosCtrler,DocFinanceiro.IdGerador,DocFinanceiro.InfoCompl,DocFinanceiro.EAgrupamento,DocFinanceiro.TotalDebitos,DocFinanceiro.TotalCreditos,DocFinanceiro.TipoGerador,DocFinanceiro.SomenteProvisorio,DocFinanceiro.DocVinculado,DocFinanceiro.GeradorDoc,DocFinanceiro.ContratoFinanceiroResp,DocFinanceiro.CamaraCompensacao,DocFinanceiro.DiaCompetencia,DocFinanceiro.PercTaxaAdm,DocFinanceiro.Conferido FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3)
                            AND Pessoa.AutoId IN(SELECT Pessoa FROM TelefonePessoa WHERE Tipo=2 AND (AutorizaSMS=1 OR AutorizaSMS IS NULL) AND (TelosUpDt>'".$inicioTel."' OR TelosRgDt>'".$inicioTel."'))
                            AND con.AutoId NOT IN(SELECT Contrato FROM SuspensaoVinculo WHERE DataSuspensao<=GETDATE() AND DataReativacao IS NULL AND Contrato IS NOT NULL)
                            ".$contrato." ".$modelo.") TabelaDias WHERE dias BETWEEN $diaInicial AND $diaFinal ".$where." GROUP BY idContrato, ContratoFinanceiro, Codigo, Nome) TabelaNumerada
                    ";

            $busca = $conn->prepare($sql);
            $busca->execute();
            return $array = $busca->fetch(PDO::FETCH_ASSOC);

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getContarInadimplentes_pesquisaGeral($modelo='',$contratoinicial='', $contratofinal='',$diaInicial=null,$diaFinal=null){
        try{
            $comp = "";
            $contrato = "";
            $dataVencimento = "";

            if(!empty($contratoinicial) && !empty($contratofinal)){
                $contrato = " AND con.Codigo BETWEEN '".$contratoinicial."' AND '".$contratofinal."'";
            }
            if(!empty($modelo)){
                $modelo = "AND con.Modelo='".$modelo."'";
            }

            $conn = DB_Cardio::conn();

            $sql="SELECT COUNT(Nome) as Total FROM (SELECT ROW_NUMBER() OVER(ORDER BY Nome ASC) as linhas, Nome FROM (SELECT DATEDIFF(day,DocFinanceiro.DataVencimento,GETDATE()) AS dias, con.AutoId as idContrato, DocFinanceiro.AutoId as IdDocFinanceiro, si.Nome SituacaoDoc, ContratoFinanceiro.Codigo, Pessoa.Nome, Pessoa.Cnp, BoletoCobranca.NossoNumero, ClasseContratoFinanceiro.Codigo AS CodigoClasse, ClasseContratoFinanceiro.Nome AS NomeClasse, cd.Nome ClasseDocFinan, DocFinanceiro.AutoId,DocFinanceiro.Classe,DocFinanceiro.NumeroProvisorio,DocFinanceiro.NumDocFornec,DocFinanceiro.Numero,DocFinanceiro.Pessoa,DocFinanceiro.ContratoFinanceiro,DocFinanceiro.CompFinanceira,DocFinanceiro.CompSeq,DocFinanceiro.DataEmissao,DocFinanceiro.DataVencimento,DocFinanceiro.TipoNegJuros,DocFinanceiro.TipoNegMultas,DocFinanceiro.ValorBruto,DocFinanceiro.ValorLiquido,DocFinanceiro.EProvisao,DocFinanceiro.SituacaoDocumento,DocFinanceiro.SaldoEmAberto,DocFinanceiro.DataSituacao,DocFinanceiro.DataContPDD,DocFinanceiro.DataInclusao,DocFinanceiro.CodLotacao,DocFinanceiro.CompGeracao,DocFinanceiro.DocResultante,DocFinanceiro.DocProvisao,DocFinanceiro.PracaCobranca,DocFinanceiro.DocOrigem,DocFinanceiro.DocAjustado,DocFinanceiro.TelosRgUs,DocFinanceiro.TelosRgDt,DocFinanceiro.TelosUpUs,DocFinanceiro.TelosUpDt,DocFinanceiro.TelosCtrler,DocFinanceiro.IdGerador,DocFinanceiro.InfoCompl,DocFinanceiro.EAgrupamento,DocFinanceiro.TotalDebitos,DocFinanceiro.TotalCreditos,DocFinanceiro.TipoGerador,DocFinanceiro.SomenteProvisorio,DocFinanceiro.DocVinculado,DocFinanceiro.GeradorDoc,DocFinanceiro.ContratoFinanceiroResp,DocFinanceiro.CamaraCompensacao,DocFinanceiro.DiaCompetencia,DocFinanceiro.PercTaxaAdm,DocFinanceiro.Conferido FROM Pessoa
                                INNER JOIN ContratoFinanceiro
                                INNER JOIN DocFinanceiro ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa.AutoId = ContratoFinanceiro.Pessoa
                                INNER JOIN BoletoCobranca ON DocFinanceiro.AutoId = BoletoCobranca.DocFinanceiro
                                INNER JOIN ClasseContratoFinanceiro ON ContratoFinanceiro.Classe = ClasseContratoFinanceiro.AutoId
                                INNER JOIN SituacaoDocumento si on si.Codigo=DocFinanceiro.SituacaoDocumento
                                INNER JOIN ClasseDocFinanceiro cd on cd.Codigo=DocFinanceiro.Classe
                                INNER JOIN Contrato con on con.ContratoFinanceiro = ContratoFinanceiro.AutoId
                            WHERE DocFinanceiro.SituacaoDocumento in(1,3) ".$contrato." ".$modelo.") TabelaDias WHERE dias BETWEEN $diaInicial AND $diaFinal GROUP BY Nome) TabelaNumerada
                    ";

            $busca = $conn->prepare($sql);
            $busca->execute();
            return $array = $busca->fetch(PDO::FETCH_ASSOC);

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getInadimplencias($idContratoFinanceiro=''){
        try{

            $conn = DB_Cardio::conn();

            $sql="SELECT ContratoFinanceiro.Codigo, ClasseDocFinanceiro.Nome AS NomeClasse, SituacaoDocumento.Nome AS NomeSituacao, DocFinanceiro.CompFinanceira, DocFinanceiro.DataVencimento, DocFinanceiro.Numero,
                    DocFinanceiro.ValorLiquido, ContratoFinanceiro.AutoId AS IdContratoFinanceiro
                    FROM    Pessoa INNER JOIN
                            Pessoa AS Pessoa_1 INNER JOIN
                            Contrato INNER JOIN
                            ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId INNER JOIN
                            ClasseDocFinanceiro INNER JOIN
                            BoletoCobranca INNER JOIN
                            DocFinanceiro ON BoletoCobranca.DocFinanceiro = DocFinanceiro.AutoId ON ClasseDocFinanceiro.Codigo = DocFinanceiro.Classe INNER JOIN
                            SituacaoDocumento ON DocFinanceiro.SituacaoDocumento = SituacaoDocumento.Codigo ON ContratoFinanceiro.AutoId = DocFinanceiro.ContratoFinanceiro ON Pessoa_1.AutoId = ContratoFinanceiro.Pessoa ON
                            Pessoa.AutoId = DocFinanceiro.Pessoa
                    WHERE (DocFinanceiro.SituacaoDocumento IN (1, 3)) AND (ContratoFinanceiro.AutoId = ".$idContratoFinanceiro.") AND (DocFinanceiro.DataVencimento < GETDATE())
                    ORDER BY DocFinanceiro.DataVencimento DESC, ContratoFinanceiro.Codigo
                    ";

            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            return $array;

        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function gerarCSV($linhasQuery=null, $nome_arquivo=null)
    {
        if(empty($linhasQuery)){
            return false;
        }
        elseif(empty($nome_arquivo)){
            return false;
        }
        $novaLinha = 0;
        $cabecalho = '';

        //Abre o arquivo para escrita e posiciona o ponteiro no INICIO do arquivo.
        $arquivo = fopen($nome_arquivo, "w+");

        //** PERCORRE OS DADOS ENCONTRADOS NO TASY PARA MONTAR O ARQUIVO. */
        $key = 0;
        foreach ($linhasQuery as $linhaQ){

            $linhasArquvio = '';
            $linhasFianl='';

            foreach ($linhaQ as $titulo => $colunas){
                if($novaLinha==0){
                    $linhasArquvio .= trim($colunas);
                    $novaLinha = 1;
                    if($key==0){//** montar cabeçalho - 1ª LINHA */
                        $cabecalho .= $titulo;
                    }
                }
                else{
                    if($key==0){//** montar cabeçalho */
                        $cabecalho .= ';'.$titulo;
                    }
                    if(is_numeric($colunas)){
                        $colunas = str_replace('.' ,',',$colunas);
                    }
                    $linhasArquvio .= ';'.utf8_decode(trim($colunas));
                }
            }
            if($key==0){ //** insere o cabeçalhos */
                $linhasFianl .= $cabecalho."\r\n";
            }
            $novaLinha = 0;
            $linhasArquvio .= "\r\n";
            $linhasFianl .= $linhasArquvio;

            $escreve = fwrite($arquivo, $linhasFianl);//Escreve no arquivo.
            $key++;
        }

        fclose($arquivo);//Fecha o arquivo.

        return true;

    }

    public function getInstucaoImpostosByIdDoc(){

        $conn = DB_Cardio::conn();

        $sql = "SELECT        ImpostoDocFinan.DocFinanceiro, ImpostoDocFinan.TipoImposto, TipoImposto.Nome, ImpostoDocFinan.ValorBase, ImpostoDocFinan.ValorRetencao, ImpostoDocFinan.Percentual,
										 CASE WHEN TipoImposto = 1 THEN 'IR art45-8541/92 (art64-8981/95) B.Calc. R$ ' + REPLACE(CONVERT(VARCHAR, CONVERT(money, ValorBase)), '.', ',') + ' Serv. Pessoais - aliq.legal ' + REPLACE(CONVERT(VARCHAR,
										 CONVERT(money, Percentual * 100)), '.', ',') + '% I.R. R$ ' + + REPLACE(CONVERT(VARCHAR, CONVERT(money, TotalRetencao)), '.', ',')
										 WHEN TipoImposto = 4 THEN 'Retenção de PIS/CONFINS/CSLL 10.833/2003 art 30a35, 13.137/15 art24. e ADI 09/14 art2º/14 B.Calculo R$ ' + + REPLACE(CONVERT(VARCHAR, CONVERT(money, VALORBASE)), '.', ',') + ' Serv. Prof. Med.– aliq legal ' + REPLACE(CONVERT(VARCHAR,
										 CONVERT(money, Percentual * 100)), '.', ',') + '% PIS R$ ' + + REPLACE(CONVERT(VARCHAR, CONVERT(money, TotalRetencao)), '.', ',')
										 WHEN TipoImposto = 5 THEN 'COFINS (3%) = R$ ' + + REPLACE(CONVERT(VARCHAR, CONVERT(money, VALORBASE)), '.', ',') + ' Serv. Prof. Med.– aliq legal ' + REPLACE(CONVERT(VARCHAR,
										 CONVERT(money, Percentual * 100)), '.', ',') + '% COFINS R$ ' + + REPLACE(CONVERT(VARCHAR, CONVERT(money, TOTALRETENCAO)), '.', ',')
										 WHEN TipoImposto = 6 THEN 'CSLL (1%) = R$ ' + + REPLACE(CONVERT(VARCHAR, CONVERT(money, VALORBASE)), '.', ',') + ' Serv. Prof. Med.– aliq legal ' + REPLACE(CONVERT(VARCHAR,
										 CONVERT(money, Percentual * 100)), '.', ',') + '% COFINS R$ ' + + REPLACE(CONVERT(VARCHAR, CONVERT(money, TOTALRETENCAO)), '.', ',')
										 END AS RegraImposto
				FROM            ImpostoDocFinan INNER JOIN
										 TipoImposto ON ImpostoDocFinan.TipoImposto = TipoImposto.Codigo
				WHERE        (ImpostoDocFinan.DocFinanceiro = ?) AND (ImpostoDocFinan.NaoRecolher = 0) AND (TipoImposto.Codigo IN(1,4,5,6))";


        $busca = $conn->prepare($sql);
        $busca->bindValue(1, $this->AutoId);
        $busca->execute();
        return $array = $busca->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getDesmonstrativoFamiliaAnaliticoInclusoes(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT
				Beneficiario_1.Familia,
				CAST(Beneficiario_1.Familia AS varchar(6)) + ' - ' + CAST(Pessoa_2.Nome AS varchar(50)) AS NomeFamilia,
				ContratoFinanceiro.AutoId,
				DocFinanceiro.AutoId AS documento,
				CAST(Beneficiario.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa.Nome AS varchar(50)) AS Expr1,
				Pessoa.DataNascimento,
				DocFinanceiro.CompFinanceira,
				TipoMovCadastral.Nome AS Expr3,
				FatMovCadBeneficiario.Valor,
				ModuloOperadora.Codigo,
				ModuloOperadora.NumRegistroExterno,
				AbrangenciaGeografica.Nome,
				TipoAcInternacao.Nome AS Expr2,
				Pessoa.Cnp
				FROM TipoMovCadastral
				INNER JOIN GeradorItemFinan
				INNER JOIN ItemFinanceiro
				INNER JOIN DocFinanceiro ON ItemFinanceiro.Documento = DocFinanceiro.AutoId ON GeradorItemFinan.ItemFinan = ItemFinanceiro.AutoId
				INNER JOIN MovCadBeneficiario
				INNER JOIN Beneficiario AS Beneficiario_1
				INNER JOIN Pessoa
				INNER JOIN Beneficiario ON Pessoa.AutoId = Beneficiario.Pessoa ON Beneficiario_1.AutoId = Beneficiario.Titular
				INNER JOIN Pessoa AS Pessoa_2 ON Beneficiario_1.Pessoa = Pessoa_2.AutoId ON Beneficiario.AutoId = MovCadBeneficiario.Beneficiario
				LEFT OUTER JOIN FatMovCadBeneficiario ON FatMovCadBeneficiario.MovCadBeneficiario = MovCadBeneficiario.AutoId ON GeradorItemFinan.IdGerador = FatMovCadBeneficiario.AutoId ON TipoMovCadastral.Codigo = MovCadBeneficiario.Tipo
				INNER JOIN ModuloBeneficiario ON Beneficiario.AutoId = ModuloBeneficiario.Beneficiario
				INNER JOIN ModuloOperadora ON ModuloBeneficiario.Modulo = ModuloOperadora.AutoId
				INNER JOIN Contrato ON Beneficiario.Contrato = Contrato.AutoId
				INNER JOIN ContratoFinanceiro ON Contrato.ContratoFinanceiro = ContratoFinanceiro.AutoId
				LEFT OUTER JOIN AbrangenciaGeografica ON ModuloOperadora.Abrangencia = AbrangenciaGeografica.Codigo
				LEFT OUTER JOIN TipoAcInternacao ON ModuloOperadora.Acomodacao = TipoAcInternacao.Codigo
				WHERE (ModuloOperadora.Tipo = 1) AND (GeradorItemFinan.Localizador = 'Valor')
				GROUP BY
				ContratoFinanceiro.AutoId, CAST(Beneficiario_1.Familia AS varchar(6)) + ' - ' + CAST(Pessoa_2.Nome AS varchar(50)), CAST(Beneficiario.Codigo AS varchar(17)) + ' - ' + CAST(Pessoa.Nome AS varchar(50)),
				Pessoa.DataNascimento,
				DocFinanceiro.AutoId,
				DocFinanceiro.CompFinanceira,
				Beneficiario_1.Familia,
				TipoMovCadastral.Nome,
				FatMovCadBeneficiario.Valor,
				ModuloOperadora.Codigo,
				ModuloOperadora.NumRegistroExterno,
				AbrangenciaGeografica.Nome,
				TipoAcInternacao.Nome,
				Pessoa.Cnp
				HAVING (DocFinanceiro.AutoId = ?) ORDER BY Beneficiario_1.Familia, NomeFamilia";

            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

}
