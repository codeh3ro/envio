<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 19/04/2018
 * Time: 15:03
 */
class NegociacaoAqModulo
{
    private $AutoId;
    private $Modulo;
    private $Modelo;
    private $Contrato;
    private $InicioVigencia;
    private $FimVigencia;

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
    public function getModelo()
    {
        return $this->Modelo;
    }

    /**
     * @param mixed $Modelo
     */
    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;
    }

    /**
     * @return mixed
     */
    public function getContrato()
    {
        return $this->Contrato;
    }

    /**
     * @param mixed $Contrato
     */
    public function setContrato($Contrato)
    {
        $this->Contrato = $Contrato;
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
     * @return array
     * @throws Exception
     */
    public function getByModuloByModelo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM NegociacaoAqModulo WHERE Modulo=? AND Modelo=? AND InicioVigencia<=GETDATE() AND FimVigencia IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Modulo);
            $busca->bindValue(2, $this->Modelo);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }
}