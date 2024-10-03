<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/01/2018
 * Time: 14:55
 */
class NegConjuntoTabela
{
    private $AutoId;
    private $Seq;
    private $ConjTabela;
    private $Negociacao;

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
    public function getConjTabela()
    {
        return $this->ConjTabela;
    }

    /**
     * @param mixed $ConjTabela
     */
    public function setConjTabela($ConjTabela)
    {
        $this->ConjTabela = $ConjTabela;
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
     * @throws Exception
     */
    public function getByNeg(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT Seq, ConjTabela as Conjunto FROM NegConjuntoTabela WHERE Negociacao=:neg";
            $busca = $conn->prepare($sql);
            $busca->bindValue("neg", $this->Negociacao);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}