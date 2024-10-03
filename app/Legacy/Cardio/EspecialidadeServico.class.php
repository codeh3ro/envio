<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 23/05/2017
 * Time: 13:10
 */
class EspecialidadeServico
{
    private $AutoId;
    private $Codigo;
    private $Nome;
    private $CBO;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * EspecialidadeServico constructor.
     * @param $AutoId
     * @param $Codigo
     * @param $Nome
     * @param $CBO
     * @param $TelosRgUs
     * @param $TelosRgDt
     * @param $TelosUpUs
     * @param $TelosUpDt
     */
    public function __construct($AutoId='', $Codigo='', $Nome='', $CBO='', $TelosRgUs='', $TelosRgDt='', $TelosUpUs='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->CBO = $CBO;
        $this->TelosRgUs = $TelosRgUs;
        $this->TelosRgDt = $TelosRgDt;
        $this->TelosUpUs = $TelosUpUs;
        $this->TelosUpDt = $TelosUpDt;
    }

    /**
     * @return string
     */
    public function getAutoId()
    {
        return $this->AutoId;
    }

    /**
     * @param string $AutoId
     */
    public function setAutoId($AutoId)
    {
        $this->AutoId = $AutoId;
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
    public function getCBO()
    {
        return $this->CBO;
    }

    /**
     * @param string $CBO
     */
    public function setCBO($CBO)
    {
        $this->CBO = $CBO;
    }

    /**
     * @return string
     */
    public function getTelosRgUs()
    {
        return $this->TelosRgUs;
    }

    /**
     * @param string $TelosRgUs
     */
    public function setTelosRgUs($TelosRgUs)
    {
        $this->TelosRgUs = $TelosRgUs;
    }

    /**
     * @return string
     */
    public function getTelosRgDt()
    {
        return $this->TelosRgDt;
    }

    /**
     * @param string $TelosRgDt
     */
    public function setTelosRgDt($TelosRgDt)
    {
        $this->TelosRgDt = $TelosRgDt;
    }

    /**
     * @return string
     */
    public function getTelosUpUs()
    {
        return $this->TelosUpUs;
    }

    /**
     * @param string $TelosUpUs
     */
    public function setTelosUpUs($TelosUpUs)
    {
        $this->TelosUpUs = $TelosUpUs;
    }

    /**
     * @return string
     */
    public function getTelosUpDt()
    {
        return $this->TelosUpDt;
    }

    /**
     * @param string $TelosUpDt
     */
    public function setTelosUpDt($TelosUpDt)
    {
        $this->TelosUpDt = $TelosUpDt;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EspecialidadeServico WHERE CBO IS NOT NULL ORDER BY Nome";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EspecialidadeServico WHERE CBO IS NOT NULL AND AutoId=? ORDER BY Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByCodigo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EspecialidadeServico WHERE Codigo=? ORDER BY Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

}