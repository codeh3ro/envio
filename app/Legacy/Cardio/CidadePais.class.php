<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 17/03/2017
 * Time: 16:55
 */
class CidadePais
{
    private $Codigo;
    private $Nome;
    private $UF;
    private $CodigoExterno;

    /**
     * CidadePais constructor.
     * @param $Codigo
     * @param $Nome
     * @param $UF
     * @param $CodigoExterno
     */
    public function __construct($Codigo='', $Nome='', $UF='', $CodigoExterno='')
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->UF = $UF;
        $this->CodigoExterno = $CodigoExterno;
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * @param string $Codigo
     */
    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @param string $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @return string
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * @param string $UF
     */
    public function setUF($UF)
    {
        $this->UF = $UF;
    }

    /**
     * @return string
     */
    public function getCodigoExterno()
    {
        return $this->CodigoExterno;
    }

    /**
     * @param string $CodigoExterno
     */
    public function setCodigoExterno($CodigoExterno)
    {
        $this->CodigoExterno = $CodigoExterno;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByCodigo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM CidadePais WHERE Codigo=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllByUF(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM CidadePais WHERE UF=? ORDER BY Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->UF);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

}