<?php

namespace App\Legacy\Cardio;

class EmailPessoa
{
    private $AutoId;
    private $Pessoa;
    private $Seq;
    private $Email;
    private $InicioVigencia;
    private $FimVigencia;
    private $Endereco;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * EmailPessoa constructor.
     * @param $AutoId
     * @param $Pessoa
     * @param $Seq
     * @param $Email
     * @param $InicioVigencia
     * @param $FimVigencia
     * @param $Endereco
     * @param $TelosRgUs
     * @param $TelosRgDt
     * @param $TelosUpUs
     * @param $TelosUpDt
     */
    public function __construct($AutoId='', $Pessoa='', $Seq='', $Email='', $InicioVigencia='', $FimVigencia='', $Endereco='', $TelosRgUs='', $TelosRgDt='', $TelosUpUs='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Pessoa = $Pessoa;
        $this->Seq = $Seq;
        $this->Email = $Email;
        $this->InicioVigencia = $InicioVigencia;
        $this->FimVigencia = $FimVigencia;
        $this->Endereco = $Endereco;
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
    public function getPessoa()
    {
        return $this->Pessoa;
    }

    /**
     * @param string $Pessoa
     */
    public function setPessoa($Pessoa)
    {
        $this->Pessoa = $Pessoa;
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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * @param string $Endereco
     */
    public function setEndereco($Endereco)
    {
        $this->Endereco = $Endereco;
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

            $seq = $this->getUltimaSeq();

            $conn = DB_Cardio::conn();
            $sql = "INSERT INTO EmailPessoa (Pessoa,
                                             Seq,
                                             Email,
                                             InicioVigencia,
                                             FimVigencia,
                                             Endereco,
                                             TelosRgUs,
                                             TelosRgDt)
                                             VALUES (?,?,?,?,?,?,?,?)";
            $insere = $conn->prepare($sql);
            $insere->bindValue(1,$this->Pessoa);
            $insere->bindValue(2,$seq['Seq']+1);
            $insere->bindValue(3,$this->Email);
            $insere->bindValue(4,$this->InicioVigencia);
            $insere->bindValue(5,$this->FimVigencia);
            $insere->bindValue(6,$this->Endereco);
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
     * @return bool
     * @throws Exception
     */
    public function update(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "UPDATE EmailPessoa SET Pessoa=?,
                                             Email=?,
                                             InicioVigencia=?,
                                             FimVigencia=?,
                                             Endereco=?,
                                             TelosUpUs=?,
                                             TelosUpDt=?
                                             WHERE AutoId=?";
            $update = $conn->prepare($sql);
            $update->bindValue(1,$this->Pessoa);
            $update->bindValue(2,$this->Email);
            $update->bindValue(3,$this->InicioVigencia);
            $update->bindValue(4,$this->FimVigencia);
            $update->bindValue(5,$this->Endereco);
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
     * @return array
     * @throws Exception
     */
    public function getAllByPessoa(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EmailPessoa WHERE Pessoa=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAllByPessoaByVigencia(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EmailPessoa WHERE Pessoa=? AND FimVigencia IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
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
    public function getByPessoaByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EmailPessoa WHERE Pessoa=? AND AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
            $busca->bindValue(2,$this->AutoId);
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
    public function getUltimaSeq(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT MAX(Seq) as Seq FROM EmailPessoa WHERE Pessoa=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

}
