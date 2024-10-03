<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/01/2018
 * Time: 14:30
 */
class NegImposicaoTabela
{
    private $AutoId;
    private $Negociacao;
    private $Tipo;
    private $Seq;
    private $ConjTabPag;
    private $Servico;
    private $Prestador;
    private $InicioVigencia;
    private $FimVigencia;
    private $TipoConting;

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
    public function getNegociacao()
    {
        return $this->Negociacao;
    }

    /**
     * @param mixed $Negociacao
     */
    public function setNegociacao($Negociacao)
    {
        $this->Negociacao = $Negociacao;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param mixed $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @return mixed
     */
    public function getSeq()
    {
        return $this->Seq;
    }

    /**
     * @param mixed $Seq
     */
    public function setSeq($Seq)
    {
        $this->Seq = $Seq;
    }

    /**
     * @return mixed
     */
    public function getConjTabPag()
    {
        return $this->ConjTabPag;
    }

    /**
     * @param mixed $ConjTabPag
     */
    public function setConjTabPag($ConjTabPag)
    {
        $this->ConjTabPag = $ConjTabPag;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->Servico;
    }

    /**
     * @param mixed $Servico
     */
    public function setServico($Servico)
    {
        $this->Servico = $Servico;
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
     */
    public function getInicioVigencia()
    {
        return $this->InicioVigencia;
    }

    /**
     * @param mixed $InicioVigencia
     */
    public function setInicioVigencia($InicioVigencia)
    {
        $this->InicioVigencia = $InicioVigencia;
    }

    /**
     * @return mixed
     */
    public function getFimVigencia()
    {
        return $this->FimVigencia;
    }

    /**
     * @param mixed $FimVigencia
     */
    public function setFimVigencia($FimVigencia)
    {
        $this->FimVigencia = $FimVigencia;
    }

    /**
     * @return mixed
     */
    public function getTipoConting()
    {
        return $this->TipoConting;
    }

    /**
     * @param mixed $TipoConting
     */
    public function setTipoConting($TipoConting)
    {
        $this->TipoConting = $TipoConting;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    private function getByServicoAndNegociacaoAndPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT Seq, ConjTabPag as Conjunto, Tipo, Servico FROM NegImposicaoTabela 
                      WHERE Negociacao=:neg 
                      AND Tipo=2 
                      AND Servico=25772 
                      AND Prestador=:prestador 
                      AND FimVigencia IS NULL 
                      AND (TipoConting IS NULL OR TipoConting=1 OR TipoConting=4)";
            $busca = $conn->prepare($sql);
            $busca->bindValue("neg", $this->Negociacao);
            $busca->bindValue("prestador", $this->Prestador);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    private function getByNegociacaoAndPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT Seq, ConjTabPag as Conjunto, Tipo, Servico FROM NegImposicaoTabela 
                      WHERE Negociacao=:neg 
                      AND Tipo=2 
                      AND Servico IS NULL 
                      AND Prestador=:prestador 
                      AND FimVigencia IS NULL 
                      AND (TipoConting IS NULL OR TipoConting=1 OR TipoConting=4)";
            $busca = $conn->prepare($sql);
            $busca->bindValue("neg", $this->Negociacao);
            $busca->bindValue("prestador", $this->Prestador);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    private function getByServicoAndNegociacao(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT Seq, ConjTabPag as Conjunto, Tipo, Servico FROM NegImposicaoTabela 
                      WHERE Negociacao=:neg 
                      AND Tipo=2 
                      AND Servico=25772 
                      AND Prestador IS NULL 
                      AND FimVigencia IS NULL 
                      AND (TipoConting IS NULL OR TipoConting=1 OR TipoConting=4)";
            $busca = $conn->prepare($sql);
            $busca->bindValue("neg", $this->Negociacao);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    private function getByServicoAndNegociacaoItemServOp(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT si.AutoId, si.Codigo, si.Nome, ni.Negociacao, ni.ConjTabPag as Conjunto, ni.* FROM NegImposicaoTabela ni
                        INNER JOIN ServicoOperadora so on so.AutoId=ni.Servico
                        INNER JOIN ItemServOperadora it on it.Servico=so.AutoId
                        INNER JOIN ServicoOperadora si on si.AutoId=it.ItemServico
                    WHERE ni.Negociacao=:neg
                        AND ni.Tipo=2 
                        AND si.AutoId=25772 
                        AND ni.Prestador IS NULL
                        AND ni.FimVigencia IS NULL 
                        AND (ni.TipoConting IS NULL OR ni.TipoConting=1 OR ni.TipoConting=4)";
            $busca = $conn->prepare($sql);
            $busca->bindValue("neg", $this->Negociacao);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    private function getByNegociacao(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT Seq, ConjTabPag as Conjunto, Tipo, Servico FROM NegImposicaoTabela 
                      WHERE Negociacao=:neg 
                      AND Tipo=2 
                      AND Servico IS NULL 
                      AND Prestador IS NULL 
                      AND FimVigencia IS NULL 
                      AND (TipoConting IS NULL OR TipoConting=1 OR TipoConting=4)";
            $busca = $conn->prepare($sql);
            $busca->bindValue("neg", $this->Negociacao);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed|null
     * @throws Exception
     */
    public function getNegImposicao(){
        try{
            $arrayNeg = $this->getByServicoAndNegociacaoAndPrestador();

            if(empty($arrayNeg)){
                $arrayNeg = $this->getByNegociacaoAndPrestador();
                if(empty($arrayNeg)){
                    $arrayNeg = $this->getByServicoAndNegociacao();
                    if(empty($arrayNeg)){
                        $arrayNeg = $this->getByServicoAndNegociacaoItemServOp();
                        if(empty($arrayNeg)) {
                            $arrayNeg = $this->getByNegociacao();
                            if(empty($arrayNeg)) {
                                /** Pega o conjuto padrão */
                                $objNegConj = new NegConjuntoTabela();
                                $objNegConj->setNegociacao($this->Negociacao);
                                $arrayNeg = $objNegConj->getByNeg();
                            }
                        }
                    }
                }
            }
            return $arrayNeg;
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }
}