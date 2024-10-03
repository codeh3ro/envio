<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/01/2018
 * Time: 14:19
 */
class NegociacaoTabServ
{
    private $AutoId;
    private $ClassePrestador;
    private $Prestador;
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
    public function getClassePrestador()
    {
        return $this->ClassePrestador;
    }

    /**
     * @param mixed $ClassePrestador
     */
    public function setClassePrestador($ClassePrestador)
    {
        $this->ClassePrestador = $ClassePrestador;
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
     * @throws Exception
     */
    private function getByPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT AutoId as Negociacao, * FROM NegociacaoTabServ WHERE Prestador=? AND FimVigencia IS NULL ORDER BY AutoId DESC";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Prestador);
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
    private function getByClasse(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT AutoId as Negociacao, * FROM NegociacaoTabServ WHERE ClassePrestador=1 AND FimVigencia IS NULL ORDER BY AutoId DESC";
            $busca = $conn->prepare($sql);
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
    public function getNegociacaoByPrestadorOrClasse(){
        try{
            $arrayByPrestadorOrClasse = $this->getByPrestador();

            if(empty($arrayByPrestadorOrClasse)){
                $arrayByPrestadorOrClasse = $this->getByClasse();

            }

            return $arrayByPrestadorOrClasse;
        }
        catch (Exception $ex){
            throw new Exception($ex);
        }
    }
}