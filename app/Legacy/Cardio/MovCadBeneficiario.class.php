<?php
/**
 * Created by PhpStorm.
 * User: guilhermejra
 * Date: 17/11/17
 * Time: 02:15
 */

class MovCadBeneficiario
{
    private $AutoId;
    private $Beneficiario;
    private $DataMov;
    private $Tipo;
    private $DataSolicitacao;
    private $CanalSolicitacao;
    private $OperadorMov;
    private $Faturada;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;
    private $ConsideraCartao;

    /**
     * MovCadBeneficiario constructor.
     */
    public function __construct()
    {
    }

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
    public function getBeneficiario()
    {
        return $this->Beneficiario;
    }

    /**
     * @param mixed $Beneficiario
     */
    public function setBeneficiario($Beneficiario)
    {
        $this->Beneficiario = $Beneficiario;
    }

    /**
     * @return mixed
     */
    public function getDataMov()
    {
        return $this->DataMov;
    }

    /**
     * @param mixed $DataMov
     */
    public function setDataMov($DataMov)
    {
        $this->DataMov = $DataMov;
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
     */
    public function getDataSolicitacao()
    {
        return $this->DataSolicitacao;
    }

    /**
     * @param mixed $DataSolicitacao
     */
    public function setDataSolicitacao($DataSolicitacao)
    {
        $this->DataSolicitacao = $DataSolicitacao;
    }

    /**
     * @return mixed
     */
    public function getCanalSolicitacao()
    {
        return $this->CanalSolicitacao;
    }

    /**
     * @param mixed $CanalSolicitacao
     */
    public function setCanalSolicitacao($CanalSolicitacao)
    {
        $this->CanalSolicitacao = $CanalSolicitacao;
    }

    /**
     * @return mixed
     */
    public function getOperadorMov()
    {
        return $this->OperadorMov;
    }

    /**
     * @param mixed $OperadorMov
     */
    public function setOperadorMov($OperadorMov)
    {
        $this->OperadorMov = $OperadorMov;
    }

    /**
     * @return mixed
     */
    public function getFaturada()
    {
        return $this->Faturada;
    }

    /**
     * @param mixed $Faturada
     */
    public function setFaturada($Faturada)
    {
        $this->Faturada = $Faturada;
    }

    /**
     * @return mixed
     */
    public function getTelosRgUs()
    {
        return $this->TelosRgUs;
    }

    /**
     * @param mixed $TelosRgUs
     */
    public function setTelosRgUs($TelosRgUs)
    {
        $this->TelosRgUs = $TelosRgUs;
    }

    /**
     * @return mixed
     */
    public function getTelosRgDt()
    {
        return $this->TelosRgDt;
    }

    /**
     * @param mixed $TelosRgDt
     */
    public function setTelosRgDt($TelosRgDt)
    {
        $this->TelosRgDt = $TelosRgDt;
    }

    /**
     * @return mixed
     */
    public function getTelosUpUs()
    {
        return $this->TelosUpUs;
    }

    /**
     * @param mixed $TelosUpUs
     */
    public function setTelosUpUs($TelosUpUs)
    {
        $this->TelosUpUs = $TelosUpUs;
    }

    /**
     * @return mixed
     */
    public function getTelosUpDt()
    {
        return $this->TelosUpDt;
    }

    /**
     * @param mixed $TelosUpDt
     */
    public function setTelosUpDt($TelosUpDt)
    {
        $this->TelosUpDt = $TelosUpDt;
    }

    /**
     * @return mixed
     */
    public function getConsideraCartao()
    {
        return $this->ConsideraCartao;
    }

    /**
     * @param mixed $ConsideraCartao
     */
    public function setConsideraCartao($ConsideraCartao)
    {
        $this->ConsideraCartao = $ConsideraCartao;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function insereMov(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "INSERT INTO MovCadBeneficiario (Beneficiario,
                                                    DataMov,
                                                    Tipo,
                                                    DataSolicitacao,
                                                    CanalSolicitacao,
                                                    OperadorMov,
                                                    Faturada,
                                                    TelosRgUs,
                                                    TelosRgDt,
                                                    TelosUpUs,
                                                    TelosUpDt,
                                                    ConsideraCartao)
                                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $insere = $conn->prepare($sql);
            $insere->bindValue(1,$this->Beneficiario);
            $insere->bindValue(2,$this->DataMov);
            $insere->bindValue(3,$this->Tipo);
            $insere->bindValue(4,$this->DataSolicitacao);
            $insere->bindValue(5,$this->CanalSolicitacao);
            $insere->bindValue(6,$this->OperadorMov);
            $insere->bindValue(7,$this->Faturada);
            $insere->bindValue(8,$this->TelosRgUs);
            $insere->bindValue(9,$this->TelosRgDt);
            $insere->bindValue(10,$this->TelosUpUs);
            $insere->bindValue(11,$this->TelosUpDt);
            $insere->bindValue(12,$this->ConsideraCartao);
            if($insere->execute()){
                $this->AutoId = $conn->lastInsertId();
                return true;
            }
            return false;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

}