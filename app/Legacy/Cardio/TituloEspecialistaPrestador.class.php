<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 23/05/2017
 * Time: 15:14
 */
class TituloEspecialistaPrestador
{
    private $AutoId;
    private $Prestador;
    private $Seq;
    private $TituloEspecialista;
    private $DataObtencaoTitulo;
    private $Residencia;
    private $DataObtencaoResidencia;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * TituloEspecialistaPrestador constructor.
     * @param $AutoId
     * @param $Prestador
     * @param $Seq
     * @param $TituloEspecialista
     * @param $DataObtencaoTitulo
     * @param $Residencia
     * @param $DataObtencaoResidencia
     * @param $TelosRgUs
     * @param $TelosRgDt
     * @param $TelosUpUs
     * @param $TelosUpDt
     */
    public function __construct($AutoId='', $Prestador='', $Seq='', $TituloEspecialista='', $DataObtencaoTitulo='', $Residencia='', $DataObtencaoResidencia='', $TelosRgUs='', $TelosRgDt='', $TelosUpUs='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Prestador = $Prestador;
        $this->Seq = $Seq;
        $this->TituloEspecialista = $TituloEspecialista;
        $this->DataObtencaoTitulo = $DataObtencaoTitulo;
        $this->Residencia = $Residencia;
        $this->DataObtencaoResidencia = $DataObtencaoResidencia;
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
    public function getPrestador()
    {
        return $this->Prestador;
    }

    /**
     * @param string $Prestador
     */
    public function setPrestador($Prestador)
    {
        $this->Prestador = $Prestador;
    }

    /**
     * @return string
     */
    public function getSeq()
    {
        return $this->Seq;
    }

    /**
     * @param string $Seq
     */
    public function setSeq($Seq)
    {
        $this->Seq = $Seq;
    }

    /**
     * @return string
     */
    public function getTituloEspecialista()
    {
        return $this->TituloEspecialista;
    }

    /**
     * @param string $TituloEspecialista
     */
    public function setTituloEspecialista($TituloEspecialista)
    {
        $this->TituloEspecialista = $TituloEspecialista;
    }

    /**
     * @return string
     */
    public function getDataObtencaoTitulo()
    {
        return $this->DataObtencaoTitulo;
    }

    /**
     * @param string $DataObtencaoTitulo
     */
    public function setDataObtencaoTitulo($DataObtencaoTitulo)
    {
        $this->DataObtencaoTitulo = $DataObtencaoTitulo;
    }

    /**
     * @return string
     */
    public function getResidencia()
    {
        return $this->Residencia;
    }

    /**
     * @param string $Residencia
     */
    public function setResidencia($Residencia)
    {
        $this->Residencia = $Residencia;
    }

    /**
     * @return string
     */
    public function getDataObtencaoResidencia()
    {
        return $this->DataObtencaoResidencia;
    }

    /**
     * @param string $DataObtencaoResidencia
     */
    public function setDataObtencaoResidencia($DataObtencaoResidencia)
    {
        $this->DataObtencaoResidencia = $DataObtencaoResidencia;
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
     * @return bool
     * @throws Exception
     */
    public function add(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "INSERT INTO TituloEspecialistaPrestador (Prestador,
                                                             Seq,
                                                             TituloEspecialista,
                                                             DataObtencaoTitulo,
                                                             Residencia,
                                                             DataObtencaoResidencia,
                                                             TelosRgUs,
                                                             TelosRgDt)
                                                             VALUES (?,?,?,?,?,?,?,?)";
            $insere = $conn->prepare($sql);
            $insere->bindValue(1,$this->Prestador);
            $insere->bindValue(2,$this->Seq);
            $insere->bindValue(3,$this->TituloEspecialista);
            $insere->bindValue(4,$this->DataObtencaoTitulo);
            $insere->bindValue(5,$this->Residencia);
            $insere->bindValue(6,$this->DataObtencaoResidencia);
            $insere->bindValue(7,$this->TelosRgUs);
            $insere->bindValue(8,$this->TelosRgDt);
            if($insere->execute()){
                $this->AutoId = $conn->lastInsertId();
                return true;
            }
            return false;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllByPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT te.Nome, te.Codigo, tep.* FROM TituloEspecialistaPrestador tep
                        INNER JOIN TituloEspecialista te on te.Codigo=tep.TituloEspecialista
                    WHERE tep.Prestador=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Prestador);
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
    public function getByPrestadorByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT te.Nome, te.Codigo, tep.* FROM TituloEspecialistaPrestador tep
                        INNER JOIN TituloEspecialista te on te.Codigo=tep.TituloEspecialista
                    WHERE tep.Prestador=? AND tep.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Prestador);
            $busca->bindValue(2, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function update(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "UPDATE TituloEspecialistaPrestador SET TituloEspecialista=?,
                                                             DataObtencaoTitulo=?,
                                                             Residencia=?,
                                                             DataObtencaoResidencia=?,
                                                             TelosUpUs=?,
                                                             TelosUpDt=?
                                                             WHERE AutoId=?";
            $update = $conn->prepare($sql);
            $update->bindValue(1,$this->TituloEspecialista);
            $update->bindValue(2,$this->DataObtencaoTitulo);
            $update->bindValue(3,$this->Residencia);
            $update->bindValue(4,$this->DataObtencaoResidencia);
            $update->bindValue(5,$this->TelosUpUs);
            $update->bindValue(6,$this->TelosUpDt);
            $update->bindValue(7,$this->AutoId);
            if($update->execute()){
                return true;
            }
            return false;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function delete(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "DELETE FROM TituloEspecialistaPrestador WHERE AutoId=?";
            $update = $conn->prepare($sql);
            $update->bindValue(1,$this->AutoId);
            if($update->execute()){
                return true;
            }
            return false;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getUltimaSeq(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT MAX(Seq) as Seq FROM TituloEspecialistaPrestador WHERE Prestador=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Prestador);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }
}