<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 09/05/2018
 * Time: 10:15
 */
class ModeloContrato
{
    private $AutoId;
    private $Codigo;
    private $Nome;
    private $NomeReduzido;
    private $Tipo;

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
    public function getNomeReduzido()
    {
        return $this->NomeReduzido;
    }

    /**
     * @param mixed $NomeReduzido
     */
    public function setNomeReduzido($NomeReduzido)
    {
        $this->NomeReduzido = $NomeReduzido;
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
     * @throws Exception
     */
    public function getByCodigo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM ModeloContrato WHERE Codigo=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Codigo);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }
}