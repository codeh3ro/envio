<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 18/04/2018
 * Time: 12:18
 */
class NegociacaoCobertura
{
    private $AutoId;
    private $Cobertura;
    private $Modulo;
    private $ModNeg;
    private $ModBenef;

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
    public function getCobertura()
    {
        return $this->Cobertura;
    }

    /**
     * @param mixed $Cobertura
     */
    public function setCobertura($Cobertura)
    {
        $this->Cobertura = $Cobertura;
    }

    /**
     * @return mixed
     */
    public function getModulo()
    {
        return $this->Modulo;
    }

    /**
     * @param mixed $Modulo
     */
    public function setModulo($Modulo)
    {
        $this->Modulo = $Modulo;
    }

    /**
     * @return mixed
     */
    public function getModNeg()
    {
        return $this->ModNeg;
    }

    /**
     * @param mixed $ModNeg
     */
    public function setModNeg($ModNeg)
    {
        $this->ModNeg = $ModNeg;
    }

    /**
     * @return mixed
     */
    public function getModBenef()
    {
        return $this->ModBenef;
    }

    /**
     * @param mixed $ModBenef
     */
    public function setModBenef($ModBenef)
    {
        $this->ModBenef = $ModBenef;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getByModNeg(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT nc.ModNeg, gc.NomePublicacao, ca.CarPrimConting, ca.UnidPrimConting FROM NegociacaoCobertura nc 
                        INNER JOIN GrupoCobertura gc on gc.Codigo=nc.Cobertura
                        INNER JOIN NegociacaoCarencia ca on ca.NegociacaoCobertura=nc.AutoId
                    WHERE nc.ModNeg=? GROUP BY nc.ModNeg, gc.NomePublicacao, ca.CarPrimConting, ca.UnidPrimConting";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ModNeg);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }
}