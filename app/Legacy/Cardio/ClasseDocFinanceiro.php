]<?php

namespace App\Legacy\Cardio;

class ClasseDocFinanceiro
{
    private $Codigo;
    private $Nome;
    private $TipoMovimentoFinan;
    private $Grupo;
    private $Ajuste;
    private $Fiscal;
    private $Cobranca;
    private $Caixa;
    private $RequerAutorizacao;
    private $NomeArqConfiguracao;
    private $ClasseMovCC;
    private $TipoPessoa;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * ClasseDocFinanceiro constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * @param mixed $Codigo
     */
    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @return mixed
     */
    public function getTipoMovimentoFinan()
    {
        return $this->TipoMovimentoFinan;
    }

    /**
     * @param mixed $TipoMovimentoFinan
     */
    public function setTipoMovimentoFinan($TipoMovimentoFinan)
    {
        $this->TipoMovimentoFinan = $TipoMovimentoFinan;
    }

    /**
     * @return mixed
     */
    public function getGrupo()
    {
        return $this->Grupo;
    }

    /**
     * @param mixed $Grupo
     */
    public function setGrupo($Grupo)
    {
        $this->Grupo = $Grupo;
    }

    /**
     * @return mixed
     */
    public function getAjuste()
    {
        return $this->Ajuste;
    }

    /**
     * @param mixed $Ajuste
     */
    public function setAjuste($Ajuste)
    {
        $this->Ajuste = $Ajuste;
    }

    /**
     * @return mixed
     */
    public function getFiscal()
    {
        return $this->Fiscal;
    }

    /**
     * @param mixed $Fiscal
     */
    public function setFiscal($Fiscal)
    {
        $this->Fiscal = $Fiscal;
    }

    /**
     * @return mixed
     */
    public function getCobranca()
    {
        return $this->Cobranca;
    }

    /**
     * @param mixed $Cobranca
     */
    public function setCobranca($Cobranca)
    {
        $this->Cobranca = $Cobranca;
    }

    /**
     * @return mixed
     */
    public function getCaixa()
    {
        return $this->Caixa;
    }

    /**
     * @param mixed $Caixa
     */
    public function setCaixa($Caixa)
    {
        $this->Caixa = $Caixa;
    }

    /**
     * @return mixed
     */
    public function getRequerAutorizacao()
    {
        return $this->RequerAutorizacao;
    }

    /**
     * @param mixed $RequerAutorizacao
     */
    public function setRequerAutorizacao($RequerAutorizacao)
    {
        $this->RequerAutorizacao = $RequerAutorizacao;
    }

    /**
     * @return mixed
     */
    public function getNomeArqConfiguracao()
    {
        return $this->NomeArqConfiguracao;
    }

    /**
     * @param mixed $NomeArqConfiguracao
     */
    public function setNomeArqConfiguracao($NomeArqConfiguracao)
    {
        $this->NomeArqConfiguracao = $NomeArqConfiguracao;
    }

    /**
     * @return mixed
     */
    public function getClasseMovCC()
    {
        return $this->ClasseMovCC;
    }

    /**
     * @param mixed $ClasseMovCC
     */
    public function setClasseMovCC($ClasseMovCC)
    {
        $this->ClasseMovCC = $ClasseMovCC;
    }

    /**
     * @return mixed
     */
    public function getTipoPessoa()
    {
        return $this->TipoPessoa;
    }

    /**
     * @param mixed $TipoPessoa
     */
    public function setTipoPessoa($TipoPessoa)
    {
        $this->TipoPessoa = $TipoPessoa;
    }

    /**
     * @return mixed
     */
    public function getTelosRgUs()
    {
        return $this->TelosRgUs;
    }

    /**
     * @param mixed $TelosRgUs
     */
    public function setTelosRgUs($TelosRgUs)
    {
        $this->TelosRgUs = $TelosRgUs;
    }

    /**
     * @return mixed
     */
    public function getTelosRgDt()
    {
        return $this->TelosRgDt;
    }

    /**
     * @param mixed $TelosRgDt
     */
    public function setTelosRgDt($TelosRgDt)
    {
        $this->TelosRgDt = $TelosRgDt;
    }

    /**
     * @return mixed
     */
    public function getTelosUpUs()
    {
        return $this->TelosUpUs;
    }

    /**
     * @param mixed $TelosUpUs
     */
    public function setTelosUpUs($TelosUpUs)
    {
        $this->TelosUpUs = $TelosUpUs;
    }

    /**
     * @return mixed
     */
    public function getTelosUpDt()
    {
        return $this->TelosUpDt;
    }

    /**
     * @param mixed $TelosUpDt
     */
    public function setTelosUpDt($TelosUpDt)
    {
        $this->TelosUpDt = $TelosUpDt;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM ClasseDocFinanceiro";
            $busca = $conn->prepare($sql);
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
    public function getAllNome(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM ClasseDocFinanceiro WHERE Nome like '%$this->Nome%'";
            $busca = $conn->prepare($sql);
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
    public function getAllTipoContratacao(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM tipocontratacao";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}
