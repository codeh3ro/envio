<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/01/2018
 * Time: 15:40
 */
class CompServTabela
{
    private $AutoId;
    private $Servico;
    private $Composicao;
    private $Valor;
    private $Indice;

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
    public function getComposicao()
    {
        return $this->Composicao;
    }

    /**
     * @param mixed $Composicao
     */
    public function setComposicao($Composicao)
    {
        $this->Composicao = $Composicao;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->Valor;
    }

    /**
     * @param mixed $Valor
     */
    public function setValor($Valor)
    {
        $this->Valor = $Valor;
    }

    /**
     * @return mixed
     */
    public function getIndice()
    {
        return $this->Indice;
    }

    /**
     * @param mixed $Indice
     */
    public function setIndice($Indice)
    {
        $this->Indice = $Indice;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByServico(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM CompServTabela WHERE Servico=:servico";
            $busca = $conn->prepare($sql);
            $busca->bindValue("servico", $this->Servico);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}