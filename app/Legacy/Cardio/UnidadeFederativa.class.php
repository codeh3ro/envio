<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 17/03/2017
 * Time: 18:04
 */
class UnidadeFederativa
{
    private $Codigo;
    private $Nome;

    /**
     * UnidadeFederativa constructor.
     * @param $Codigo
     * @param $Nome
     */
    public function __construct($Codigo='', $Nome='')
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
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

    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM UnidadeFederativa";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }


}