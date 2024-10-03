<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 03/04/2017
 * Time: 13:51
 */
class TelefonePessoa
{
    private $AutoId;
    private $Pessoa;
    private $Seq;
    private $Tipo;
    private $TipoEndereco;
    private $Endereco;
    private $DDI;
    private $DDD;
    private $Numero;
    private $Ramal;
    private $Operadora;
    private $InicioVigencia;
    private $FimVigencia;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * TelefonePessoa constructor.
     * @param $AutoId
     * @param $Pessoa
     * @param $Seq
     * @param $Tipo
     * @param $TipoEndereco
     * @param $Endereco
     * @param $DDI
     * @param $DDD
     * @param $Numero
     * @param $Ramal
     * @param $Operadora
     * @param $InicioVigencia
     * @param $FimVigencia
     * @param $TelosRgUs
     * @param $TelosRgDt
     * @param $TelosUpUs
     * @param $TelosUpDt
     */
    public function __construct($AutoId='', $Pessoa='', $Seq='', $Tipo='', $TipoEndereco='', $Endereco='', $DDI='', $DDD='', $Numero='', $Ramal='', $Operadora='', $InicioVigencia='', $FimVigencia='', $TelosRgUs='', $TelosRgDt='', $TelosUpUs='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Pessoa = $Pessoa;
        $this->Seq = $Seq;
        $this->Tipo = $Tipo;
        $this->TipoEndereco = $TipoEndereco;
        $this->Endereco = $Endereco;
        $this->DDI = $DDI;
        $this->DDD = $DDD;
        $this->Numero = $Numero;
        $this->Ramal = $Ramal;
        $this->Operadora = $Operadora;
        $this->InicioVigencia = $InicioVigencia;
        $this->FimVigencia = $FimVigencia;
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
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param string $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @return string
     */
    public function getTipoEndereco()
    {
        return $this->TipoEndereco;
    }

    /**
     * @param string $TipoEndereco
     */
    public function setTipoEndereco($TipoEndereco)
    {
        $this->TipoEndereco = $TipoEndereco;
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
    public function getDDI()
    {
        return $this->DDI;
    }

    /**
     * @param string $DDI
     */
    public function setDDI($DDI)
    {
        $this->DDI = $DDI;
    }

    /**
     * @return string
     */
    public function getDDD()
    {
        return $this->DDD;
    }

    /**
     * @param string $DDD
     */
    public function setDDD($DDD)
    {
        $this->DDD = $DDD;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param string $Numero
     */
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;
    }

    /**
     * @return string
     */
    public function getRamal()
    {
        return $this->Ramal;
    }

    /**
     * @param string $Ramal
     */
    public function setRamal($Ramal)
    {
        $this->Ramal = $Ramal;
    }

    /**
     * @return string
     */
    public function getOperadora()
    {
        return $this->Operadora;
    }

    /**
     * @param string $Operadora
     */
    public function setOperadora($Operadora)
    {
        $this->Operadora = $Operadora;
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
            $sql = "INSERT INTO TelefonePessoa (Pessoa,Seq,Tipo,TipoEndereco,Endereco,DDI,DDD,Numero,Ramal,Operadora,InicioVigencia,TelosRgUs,TelosRgDt)
                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $insert = $conn->prepare($sql);
            $insert->bindValue(1,$this->Pessoa);
            $insert->bindValue(2,$seq['Seq']+1);
            $insert->bindValue(3,$this->Tipo);
            $insert->bindValue(4,$this->TipoEndereco);
            $insert->bindValue(5,$this->Endereco);
            $insert->bindValue(6,$this->DDI);
            $insert->bindValue(7,$this->DDD);
            $insert->bindValue(8,$this->Numero);
            $insert->bindValue(9,$this->Ramal);
            $insert->bindValue(10,$this->Operadora);
            $insert->bindValue(11,$this->InicioVigencia);
            $insert->bindValue(12,$this->TelosRgUs);
            $insert->bindValue(13,$this->TelosRgDt);
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
     * @return bool
     * @throws Exception
     */
    public function update(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "UPDATE TelefonePessoa SET Seq=?,
                                              Tipo=?,
                                              TipoEndereco=?,
                                              Endereco=?,
                                              DDI=?,
                                              DDD=?,
                                              Numero=?,
                                              Ramal=?,
                                              Operadora=?,
                                              InicioVigencia=?,
                                              TelosUpUs=?,
                                              TelosUpDt=?
                      WHERE AutoId=?";
            $update = $conn->prepare($sql);
            $update->bindValue(1,$this->Seq);
            $update->bindValue(2,$this->Tipo);
            $update->bindValue(3,$this->TipoEndereco);
            $update->bindValue(4,$this->Endereco);
            $update->bindValue(5,$this->DDI);
            $update->bindValue(6,$this->DDD);
            $update->bindValue(7,$this->Numero);
            $update->bindValue(8,$this->Ramal);
            $update->bindValue(9,$this->Operadora);
            $update->bindValue(10,$this->InicioVigencia);
            $update->bindValue(11,$this->TelosUpUs);
            $update->bindValue(12,$this->TelosUpDt);
            $update->bindValue(13,$this->AutoId);
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
            $sql = "SELECT * FROM TelefonePessoa WHERE Pessoa=? AND FimVigencia IS NULL";
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
    public function getAllPublicacaoByPessoa(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT t.* FROM TelefonePessoa t
                      INNER JOIN EnderecoPessoa ep on ep.AutoId=t.Endereco
                    WHERE t.Pessoa=? AND ep.AutoId=? AND ep.ParaPublicacao=1 AND t.FimVigencia IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
            $busca->bindValue(2,$this->Endereco);
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
            $sql = "SELECT * FROM TelefonePessoa WHERE Pessoa=? AND AutoId=?";
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

    public function getByPessoaByTipo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM TelefonePessoa WHERE Pessoa=? AND Tipo=? AND FimVigencia IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
            $busca->bindValue(2,$this->Tipo);
            $busca->execute();
            /*echo "<pre>";
            print_r($busca->fetch(PDO::FETCH_ASSOC));
            echo "</pre>";
            die;*/
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
            $sql = "SELECT MAX(Seq) as Seq FROM TelefonePessoa WHERE Pessoa=?";
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