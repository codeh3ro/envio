<?php

namespace App\Legacy\Cardio;

class SuspensaoVinculo
{
    private $AutoId;
    private $Beneficiario;
    private $Contrato;
    private $Prestador;
    private $Vendedor;
    private $Revenda;
    private $DataSuspensao;
    private $Motivo;
    private $Observacao;
    private $Processo;
    private $VinculoRescindido;
    private $ExclusoSubstituicaoRede;
    private $MovCadSuspensao;
    private $DataReativacao;
    private $MotivoRativacao;
    private $ObservacaoRativacao;
    private $VendedorRativacao;
    private $ProcessoReativacao;
    private $MovCadReativacao;
    private $DataRegistroReativacao;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * SuspensaoVinculo constructor.
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
    public function getContrato()
    {
        return $this->Contrato;
    }

    /**
     * @param mixed $Contrato
     */
    public function setContrato($Contrato)
    {
        $this->Contrato = $Contrato;
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
    public function getVendedor()
    {
        return $this->Vendedor;
    }

    /**
     * @param mixed $Vendedor
     */
    public function setVendedor($Vendedor)
    {
        $this->Vendedor = $Vendedor;
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
    public function getDataSuspensao()
    {
        return $this->DataSuspensao;
    }

    /**
     * @param mixed $DataSuspensao
     */
    public function setDataSuspensao($DataSuspensao)
    {
        $this->DataSuspensao = $DataSuspensao;
    }

    /**
     * @return mixed
     */
    public function getMotivo()
    {
        return $this->Motivo;
    }

    /**
     * @param mixed $Motivo
     */
    public function setMotivo($Motivo)
    {
        $this->Motivo = $Motivo;
    }

    /**
     * @return mixed
     */
    public function getObservacao()
    {
        return $this->Observacao;
    }

    /**
     * @param mixed $Observacao
     */
    public function setObservacao($Observacao)
    {
        $this->Observacao = $Observacao;
    }

    /**
     * @return mixed
     */
    public function getProcesso()
    {
        return $this->Processo;
    }

    /**
     * @param mixed $Processo
     */
    public function setProcesso($Processo)
    {
        $this->Processo = $Processo;
    }

    /**
     * @return mixed
     */
    public function getVinculoRescindido()
    {
        return $this->VinculoRescindido;
    }

    /**
     * @param mixed $VinculoRescindido
     */
    public function setVinculoRescindido($VinculoRescindido)
    {
        $this->VinculoRescindido = $VinculoRescindido;
    }

    /**
     * @return mixed
     */
    public function getExclusoSubstituicaoRede()
    {
        return $this->ExclusoSubstituicaoRede;
    }

    /**
     * @param mixed $ExclusoSubstituicaoRede
     */
    public function setExclusoSubstituicaoRede($ExclusoSubstituicaoRede)
    {
        $this->ExclusoSubstituicaoRede = $ExclusoSubstituicaoRede;
    }

    /**
     * @return mixed
     */
    public function getMovCadSuspensao()
    {
        return $this->MovCadSuspensao;
    }

    /**
     * @param mixed $MovCadSuspensao
     */
    public function setMovCadSuspensao($MovCadSuspensao)
    {
        $this->MovCadSuspensao = $MovCadSuspensao;
    }

    /**
     * @return mixed
     */
    public function getDataReativacao()
    {
        return $this->DataReativacao;
    }

    /**
     * @param mixed $DataReativacao
     */
    public function setDataReativacao($DataReativacao)
    {
        $this->DataReativacao = $DataReativacao;
    }

    /**
     * @return mixed
     */
    public function getMotivoRativacao()
    {
        return $this->MotivoRativacao;
    }

    /**
     * @param mixed $MotivoRativacao
     */
    public function setMotivoRativacao($MotivoRativacao)
    {
        $this->MotivoRativacao = $MotivoRativacao;
    }

    /**
     * @return mixed
     */
    public function getObservacaoRativacao()
    {
        return $this->ObservacaoRativacao;
    }

    /**
     * @param mixed $ObservacaoRativacao
     */
    public function setObservacaoRativacao($ObservacaoRativacao)
    {
        $this->ObservacaoRativacao = $ObservacaoRativacao;
    }

    /**
     * @return mixed
     */
    public function getVendedorRativacao()
    {
        return $this->VendedorRativacao;
    }

    /**
     * @param mixed $VendedorRativacao
     */
    public function setVendedorRativacao($VendedorRativacao)
    {
        $this->VendedorRativacao = $VendedorRativacao;
    }

    /**
     * @return mixed
     */
    public function getProcessoReativacao()
    {
        return $this->ProcessoReativacao;
    }

    /**
     * @param mixed $ProcessoReativacao
     */
    public function setProcessoReativacao($ProcessoReativacao)
    {
        $this->ProcessoReativacao = $ProcessoReativacao;
    }

    /**
     * @return mixed
     */
    public function getMovCadReativacao()
    {
        return $this->MovCadReativacao;
    }

    /**
     * @param mixed $MovCadReativacao
     */
    public function setMovCadReativacao($MovCadReativacao)
    {
        $this->MovCadReativacao = $MovCadReativacao;
    }

    /**
     * @return mixed
     */
    public function getDataRegistroReativacao()
    {
        return $this->DataRegistroReativacao;
    }

    /**
     * @param mixed $DataRegistroReativacao
     */
    public function setDataRegistroReativacao($DataRegistroReativacao)
    {
        $this->DataRegistroReativacao = $DataRegistroReativacao;
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
     * @throws Exception
     */
    public function getByBeneficiario(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM SuspensaoVinculo WHERE Beneficiario=? AND DataSuspensao<=GETDATE() AND DataReativacao IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Beneficiario);
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
    public function getByPrestador(){
        try{
            $busca = DB_Cardio::select("SELECT * FROM SuspensaoVinculo WHERE Prestador=? AND DataReativacao IS NULL",[ $this->Prestador ]);
            return $busca;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByContrato(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM SuspensaoVinculo WHERE Contrato=? AND DataSuspensao<=GETDATE() AND DataReativacao IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Contrato);
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
    public function getByBeneficiarioSuspensaoFutura(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM SuspensaoVinculo WHERE Beneficiario=? AND DataSuspensao>GETDATE() AND DataReativacao IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Beneficiario);
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
    public function getByContratoSuspensaoFutura(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM SuspensaoVinculo WHERE Contrato=? AND DataSuspensao>GETDATE() AND DataReativacao IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Contrato);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function suspendeBeneficiario(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "INSERT INTO SuspensaoVinculo (Beneficiario,
                                                  DataSuspensao,
                                                  Motivo,
                                                  Observacao,
                                                  MovCadSuspensao,
                                                  TelosRgUs,
                                                  TelosRgDt,
                                                  TelosUpUs,
                                                  TelosUpDt,
                                                  VinculoRescindido)
                                                  VALUES (?,?,?,?,?,?,?,?,?,0)";
            $insere = $conn->prepare($sql);
            $insere->bindValue(1, $this->Beneficiario);
            $insere->bindValue(2, $this->DataSuspensao);
            $insere->bindValue(3, $this->Motivo);
            $insere->bindValue(4, $this->Observacao);
            $insere->bindValue(5, $this->MovCadSuspensao);
            $insere->bindValue(6, $this->TelosRgUs);
            $insere->bindValue(7, $this->TelosRgDt);
            $insere->bindValue(8, $this->TelosUpUs);
            $insere->bindValue(9, $this->TelosUpDt);
            if($insere->execute()){
                $this->AutoId=$conn->lastInsertId();
                return true;
            }
            return false;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /** não editar esse metodo
     * metodo especifico de listagem de prestadores para o portal*/
    public function verificaSuspensoByPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM SuspensaoVinculo WHERE Prestador=? AND DataReativacao IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Prestador);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            if(!empty($array)){
                return true;
            }
            return false;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}
