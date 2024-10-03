<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 24/10/2017
 * Time: 16:39
 */
class TipoRedeReferenciada
{
    private $Codigo;
    private $Nome;
    private $CodigoExterno;

    /**
     * TipoRedeReferenciada constructor.
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
    public function getCodigoExterno()
    {
        return $this->CodigoExterno;
    }

    /**
     * @param mixed $CodigoExterno
     */
    public function setCodigoExterno($CodigoExterno)
    {
        $this->CodigoExterno = $CodigoExterno;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM TipoRedeReferenciada";
            $busca=$conn->prepare($sql);
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
    public function getByCodigo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT  tpr.Nome TipoRedeNome FROM TipoRedeReferenciada tpr
                    INNER JOIN RedeRefClPrestador rp on tpr.Codigo=rp.TipoRede
                    WHERE rp.TipoRede=?";
            $busca=$conn->prepare($sql);
            $busca->bindValue(1, $this->Codigo);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}