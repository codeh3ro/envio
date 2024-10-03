<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 12/01/2018
 * Time: 16:55
 */
class Vendedor
{
    private $AutoId;
    private $Revenda;
    private $Codigo;
    private $Pessoa;
    private $InicioVigencia;
    private $ECoordenador;
    private $Coordenador;
    private $Classe;

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
    public function getRevenda()
    {
        return $this->Revenda;
    }

    /**
     * @param mixed $Revenda
     */
    public function setRevenda($Revenda)
    {
        $this->Revenda = $Revenda;
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
    public function getPessoa()
    {
        return $this->Pessoa;
    }

    /**
     * @param mixed $Pessoa
     */
    public function setPessoa($Pessoa)
    {
        $this->Pessoa = $Pessoa;
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
    public function getECoordenador()
    {
        return $this->ECoordenador;
    }

    /**
     * @param mixed $ECoordenador
     */
    public function setECoordenador($ECoordenador)
    {
        $this->ECoordenador = $ECoordenador;
    }

    /**
     * @return mixed
     */
    public function getCoordenador()
    {
        return $this->Coordenador;
    }

    /**
     * @param mixed $Coordenador
     */
    public function setCoordenador($Coordenador)
    {
        $this->Coordenador = $Coordenador;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->Classe;
    }

    /**
     * @param mixed $Classe
     */
    public function setClasse($Classe)
    {
        $this->Classe = $Classe;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM Vendedor";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}