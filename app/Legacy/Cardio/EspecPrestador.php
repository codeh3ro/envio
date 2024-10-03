<?php

namespace App\Legacy\Cardio;

class EspecPrestador
{
    private $AutoId;
    private $Prestador;
    private $Especialidade;
    private $Seq;
    private $InstituicaoEspec;
    private $Observacao;
    private $InicioVigencia;
    private $FimVigencia;
    private $PublicarEspecialidade;
    private $Residencia;
    private $Gerencial;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * EspecPrestador constructor.
     * @param string $AutoId
     * @param string $Prestador
     * @param string $Especialidade
     * @param string $Seq
     * @param string $InstituicaoEspec
     * @param string $Observacao
     * @param string $InicioVigencia
     * @param string $FimVigencia
     * @param string $PublicarEspecialidade
     * @param string $Residencia
     * @param string $Gerencial
     * @param string $TelosRgUs
     * @param string $TelosRgDt
     * @param string $TelosUpUs
     * @param string $TelosUpDt
     */
    public function __construct($AutoId='', $Prestador='', $Especialidade='', $Seq='', $InstituicaoEspec='', $Observacao='', $InicioVigencia='', $FimVigencia='', $PublicarEspecialidade='', $Residencia='', $Gerencial='', $TelosRgUs='', $TelosRgDt='', $TelosUpUs='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Prestador = $Prestador;
        $this->Especialidade = $Especialidade;
        $this->Seq = $Seq;
        $this->InstituicaoEspec = $InstituicaoEspec;
        $this->Observacao = $Observacao;
        $this->InicioVigencia = $InicioVigencia;
        $this->FimVigencia = $FimVigencia;
        $this->PublicarEspecialidade = $PublicarEspecialidade;
        $this->Residencia = $Residencia;
        $this->Gerencial = $Gerencial;
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
    public function getEspecialidade()
    {
        return $this->Especialidade;
    }

    /**
     * @param string $Especialidade
     */
    public function setEspecialidade($Especialidade)
    {
        $this->Especialidade = $Especialidade;
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
    public function getInstituicaoEspec()
    {
        return $this->InstituicaoEspec;
    }

    /**
     * @param string $InstituicaoEspec
     */
    public function setInstituicaoEspec($InstituicaoEspec)
    {
        $this->InstituicaoEspec = $InstituicaoEspec;
    }

    /**
     * @return string
     */
    public function getObservacao()
    {
        return $this->Observacao;
    }

    /**
     * @param string $Observacao
     */
    public function setObservacao($Observacao)
    {
        $this->Observacao = $Observacao;
    }

    /**
     * @return string
     */
    public function getInicioVigencia()
    {
        return $this->InicioVigencia;
    }

    /**
     * @param string $InicioVigencia
     */
    public function setInicioVigencia($InicioVigencia)
    {
        $this->InicioVigencia = $InicioVigencia;
    }

    /**
     * @return string
     */
    public function getFimVigencia()
    {
        return $this->FimVigencia;
    }

    /**
     * @param string $FimVigencia
     */
    public function setFimVigencia($FimVigencia)
    {
        $this->FimVigencia = $FimVigencia;
    }

    /**
     * @return string
     */
    public function getPublicarEspecialidade()
    {
        return $this->PublicarEspecialidade;
    }

    /**
     * @param string $PublicarEspecialidade
     */
    public function setPublicarEspecialidade($PublicarEspecialidade)
    {
        $this->PublicarEspecialidade = $PublicarEspecialidade;
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
    public function getGerencial()
    {
        return $this->Gerencial;
    }

    /**
     * @param string $Gerencial
     */
    public function setGerencial($Gerencial)
    {
        $this->Gerencial = $Gerencial;
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
            $sql = "INSERT INTO EspecPrestador (Prestador,
                                                Especialidade,
                                                Seq,
                                                InicioVigencia,
                                                PublicarEspecialidade,
                                                Residencia,
                                                Gerencial,
                                                TelosRgUs,
                                                TelosRgDt)
                                                VALUES (?,?,?,?,?,?,?,?,?)";
            $insert = $conn->prepare($sql);
            $insert->bindValue(1,$this->Prestador);
            $insert->bindValue(2,$this->Especialidade);
            $insert->bindValue(3,$this->Seq);
            $insert->bindValue(4,$this->InicioVigencia);
            $insert->bindValue(5,$this->PublicarEspecialidade);
            $insert->bindValue(6,$this->Residencia);
            $insert->bindValue(7,$this->Gerencial);
            $insert->bindValue(8,$this->TelosRgUs);
            $insert->bindValue(9,$this->TelosRgDt);
            if($insert->execute()){
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
     * @return mixed
     * @throws Exception
     */
    public function getByPrestadorByEspec(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT es.Nome, es.CBO, es.Codigo, ep.* FROM EspecPrestador ep
                        INNER JOIN EspecialidadeServico es on es.AutoId=ep.Especialidade
                    WHERE ep.Prestador=? AND ep.Especialidade=? ORDER BY es.Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Prestador);
            $busca->bindValue(2,$this->Especialidade);
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
    public function getAllByPrestador(){
        try{
            $busca = DB_Cardio::select("SELECT es.Nome, es.CBO, es.Codigo, ep.* FROM EspecPrestador ep
                        INNER JOIN EspecialidadeServico es on es.AutoId=ep.Especialidade
                    WHERE ep.Prestador=? ORDER BY es.Nome", [$this->Prestador]);

            return $busca[0];
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT es.Nome, es.CBO, es.Codigo, ep.* FROM EspecPrestador ep
                        INNER JOIN EspecialidadeServico es on es.AutoId=ep.Especialidade
                    WHERE ep.AutoId=? ORDER BY es.Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByAutoIdByPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT es.Nome, es.CBO, es.Codigo, ep.* FROM EspecPrestador ep
                        INNER JOIN EspecialidadeServico es on es.AutoId=ep.Especialidade
                    WHERE ep.AutoId=? AND ep.Prestador=? ORDER BY es.Nome";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->bindValue(2,$this->Prestador);
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
            $sql = "UPDATE EspecPrestador SET Especialidade=?,
                                                InicioVigencia=?,
                                                PublicarEspecialidade=?,
                                                Residencia=?,
                                                Gerencial=?,
                                                TelosUpUs=?,
                                                TelosUpDt=? WHERE AutoId=?";
            $update = $conn->prepare($sql);
            $update->bindValue(1,$this->Especialidade);
            $update->bindValue(2,$this->InicioVigencia);
            $update->bindValue(3,$this->PublicarEspecialidade);
            $update->bindValue(4,$this->Residencia);
            $update->bindValue(5,$this->Gerencial);
            $update->bindValue(6,$this->TelosUpUs);
            $update->bindValue(7,$this->TelosUpDt);
            $update->bindValue(8,$this->AutoId);
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
     * @return mixed
     * @throws Exception
     */
    public function getUltimaSeq(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT MAX(Seq) as Seq FROM EspecPrestador WHERE Prestador=?";
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
