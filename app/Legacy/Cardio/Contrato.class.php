<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 27/06/2017
 * Time: 21:16
 */
class Contrato
{
    private $AutoId;
    private $Codigo;
    private $Modelo;
    private $Contratante;
    private $Contratado;
    private $Pagador;
    private $Vendedor;
    private $DataProposta;
    private $DataEnvio;
    private $DataAssinatura;
    private $DataParecer;
    private $InicioVigencia;
    private $HerdaModsModelo;
    private $DataBaseCalc;
    private $ContratoFinanceiro;
    private $ClassifOrigem;
    private $ContratoOrigem;
    private $Empresa;
    private $TipoCompRef;
    private $ClasseContabilDispendio;

    /**
     * Contrato constructor.
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
    public function getModelo()
    {
        return $this->Modelo;
    }

    /**
     * @param mixed $Modelo
     */
    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;
    }

    /**
     * @return mixed
     */
    public function getContratante()
    {
        return $this->Contratante;
    }

    /**
     * @param mixed $Contratante
     */
    public function setContratante($Contratante)
    {
        $this->Contratante = $Contratante;
    }

    /**
     * @return mixed
     */
    public function getContratado()
    {
        return $this->Contratado;
    }

    /**
     * @param mixed $Contratado
     */
    public function setContratado($Contratado)
    {
        $this->Contratado = $Contratado;
    }

    /**
     * @return mixed
     */
    public function getPagador()
    {
        return $this->Pagador;
    }

    /**
     * @param mixed $Pagador
     */
    public function setPagador($Pagador)
    {
        $this->Pagador = $Pagador;
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
    public function getDataProposta()
    {
        return $this->DataProposta;
    }

    /**
     * @param mixed $DataProposta
     */
    public function setDataProposta($DataProposta)
    {
        $this->DataProposta = $DataProposta;
    }

    /**
     * @return mixed
     */
    public function getDataEnvio()
    {
        return $this->DataEnvio;
    }

    /**
     * @param mixed $DataEnvio
     */
    public function setDataEnvio($DataEnvio)
    {
        $this->DataEnvio = $DataEnvio;
    }

    /**
     * @return mixed
     */
    public function getDataAssinatura()
    {
        return $this->DataAssinatura;
    }

    /**
     * @param mixed $DataAssinatura
     */
    public function setDataAssinatura($DataAssinatura)
    {
        $this->DataAssinatura = $DataAssinatura;
    }

    /**
     * @return mixed
     */
    public function getDataParecer()
    {
        return $this->DataParecer;
    }

    /**
     * @param mixed $DataParecer
     */
    public function setDataParecer($DataParecer)
    {
        $this->DataParecer = $DataParecer;
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
    public function getHerdaModsModelo()
    {
        return $this->HerdaModsModelo;
    }

    /**
     * @param mixed $HerdaModsModelo
     */
    public function setHerdaModsModelo($HerdaModsModelo)
    {
        $this->HerdaModsModelo = $HerdaModsModelo;
    }

    /**
     * @return mixed
     */
    public function getDataBaseCalc()
    {
        return $this->DataBaseCalc;
    }

    /**
     * @param mixed $DataBaseCalc
     */
    public function setDataBaseCalc($DataBaseCalc)
    {
        $this->DataBaseCalc = $DataBaseCalc;
    }

    /**
     * @return mixed
     */
    public function getContratoFinanceiro()
    {
        return $this->ContratoFinanceiro;
    }

    /**
     * @param mixed $ContratoFinanceiro
     */
    public function setContratoFinanceiro($ContratoFinanceiro)
    {
        $this->ContratoFinanceiro = $ContratoFinanceiro;
    }

    /**
     * @return mixed
     */
    public function getClassifOrigem()
    {
        return $this->ClassifOrigem;
    }

    /**
     * @param mixed $ClassifOrigem
     */
    public function setClassifOrigem($ClassifOrigem)
    {
        $this->ClassifOrigem = $ClassifOrigem;
    }

    /**
     * @return mixed
     */
    public function getContratoOrigem()
    {
        return $this->ContratoOrigem;
    }

    /**
     * @param mixed $ContratoOrigem
     */
    public function setContratoOrigem($ContratoOrigem)
    {
        $this->ContratoOrigem = $ContratoOrigem;
    }

    /**
     * @return mixed
     */
    public function getEmpresa()
    {
        return $this->Empresa;
    }

    /**
     * @param mixed $Empresa
     */
    public function setEmpresa($Empresa)
    {
        $this->Empresa = $Empresa;
    }

    /**
     * @return mixed
     */
    public function getTipoCompRef()
    {
        return $this->TipoCompRef;
    }

    /**
     * @param mixed $TipoCompRef
     */
    public function setTipoCompRef($TipoCompRef)
    {
        $this->TipoCompRef = $TipoCompRef;
    }

    /**
     * @return mixed
     */
    public function getClasseContabilDispendio()
    {
        return $this->ClasseContabilDispendio;
    }

    /**
     * @param mixed $ClasseContabilDispendio
     */
    public function setClasseContabilDispendio($ClasseContabilDispendio)
    {
        $this->ClasseContabilDispendio = $ClasseContabilDispendio;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByContratoFinancero(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, p.AutoId Pessoa, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        LEFT JOIN SuspensaoVinculo sv on sv.Contrato=c.AutoId
                    WHERE cf.Codigo=? AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL)OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Codigo);
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
    public function getByIdConFinan(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, p.AutoId Pessoa, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        LEFT JOIN SuspensaoVinculo sv on sv.Contrato=c.AutoId
                    WHERE cf.AutoId=? AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL)OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Codigo);
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
    public function getByModelo(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, p.AutoId Pessoa, c.Codigo FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
						INNER JOIN ModeloContrato m on m.AutoId=c.Modelo
                        LEFT JOIN SuspensaoVinculo sv on sv.Contrato=c.AutoId
                    WHERE m.Codigo=? AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL)OR sv.DataSuspensao>GETDATE())
					group by p.Cnp, p.Nome, p.Tipo, cf.AutoId, cf.Codigo, p.AutoId, c.Codigo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Modelo);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByAutoIdContratoFinancero(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        LEFT JOIN SuspensaoVinculo sv on sv.Contrato=c.AutoId
                    WHERE cf.AutoId=? AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL)OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ContratoFinanceiro);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByAutoIdContratoFinanceroDADOS($inicioTel='1900-01-01', $docFinan){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT tp.Numero NumeroTelefone, ep.Email, tp.DDD, tp.AutorizaSMS, p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN DocFinanceiro df on df.ContratoFinanceiro=cf.AutoId
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        INNER JOIN TelefonePessoa tp on tp.Pessoa=p.AutoId  
                        LEFT JOIN EmailPessoa ep on ep.Pessoa = p.AutoId
                    WHERE cf.AutoId=? AND df.AutoId=? AND tp.Tipo=2 AND (tp.TelosUpDt>'".$inicioTel."' OR tp.TelosRgDt>'".$inicioTel."')";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ContratoFinanceiro);
            $busca->bindValue(2, $docFinan);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByAutoIdContratoFinanceroDADOSEmail($docFinan){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT ep.Email, ep.FimVigencia FimVigenciaEmail, p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN DocFinanceiro df on df.ContratoFinanceiro=cf.AutoId
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        LEFT JOIN EmailPessoa ep on ep.Pessoa = p.AutoId
                    WHERE cf.AutoId=? AND df.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ContratoFinanceiro);
            $busca->bindValue(2, $docFinan);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getTodosCelulares($inicioTel='1900-01-01', $docFinan){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT df.AutoId, tp.Numero NumeroTelefone, tp.DDD, tp.AutorizaSMS, p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN DocFinanceiro df on df.ContratoFinanceiro=cf.AutoId
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        INNER JOIN TelefonePessoa tp on tp.Pessoa=p.AutoId  
                    WHERE cf.AutoId=? 
						AND df.AutoId=?
						AND tp.Tipo=2 
						AND tp.AutorizaSMS=1 
						AND (tp.FimVigencia IS NULL OR tp.FimVigencia > getdate())
						AND (tp.TelosUpDt>'".$inicioTel."' OR tp.TelosRgDt>'".$inicioTel."')";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ContratoFinanceiro);
            $busca->bindValue(2, $docFinan);
            $busca->execute();
            /*echo "<pre>";
            print_r('Bind1 - '.$this->ContratoFinanceiro.'<br/>'.'Bind2 - '.$docFinan);
            echo "</pre>";
            die;*/
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
	
	public function getTodosCelularesProducao($inicioTel='1900-01-01', $docFinan){
        try{
            $conn = DB_Cardio::conn();
            /*$sql="SELECT tp.Numero NumeroTelefone, tp.DDD, tp.AutorizaSMS, p.Cnp, p.Nome, p.Tipo, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN DocFinanceiro df on df.ContratoFinanceiro=cf.AutoId
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                        INNER JOIN TelefonePessoa tp on tp.Pessoa=p.AutoId  
                    WHERE df.AutoId=? 
						AND tp.Tipo=2 
						AND tp.AutorizaSMS=1 
						AND (tp.FimVigencia IS NULL OR tp.FimVigencia > getdate())
						AND (tp.TelosUpDt>'".$inicioTel."' OR tp.TelosRgDt>'".$inicioTel."')";*/
            
            $sql="SELECT df.AutoId, tp.Numero, tp.DDD, tp.AutorizaSMS, p.Cnp, p.Nome, p.Tipo, cf.AutoId AS idContratoFinanc, cf.Codigo AS CodigoContratoFinanc
                        FROM ContratoFinanceiro AS cf INNER JOIN
                            DocFinanceiro AS df ON df.ContratoFinanceiro = cf.AutoId INNER JOIN
                            Pessoa AS p ON p.AutoId = cf.Pessoa INNER JOIN
                            TelefonePessoa AS tp ON tp.Pessoa = p.AutoId
                        WHERE (cf.AutoId = ?) AND (df.AutoId = ?) AND (tp.Tipo = 2) AND (tp.AutorizaSMS = 1) AND (tp.FimVigencia IS NULL OR
                            tp.FimVigencia > GETDATE()) AND (tp.TelosUpDt > '".$inicioTel."')";

            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ContratoFinanceiro);
            $busca->bindValue(2, $docFinan);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT p.Cnp, p.Nome, p.Tipo TipoPessoa, c.* FROM Contrato c
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=c.ContratoFinanceiro
                        INNER JOIN Pessoa p on p.AutoId=cf.Pessoa
                    WHERE c.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getLoginEmpresa(){
        try{
            $conn = DB_Cardio::conn();
            $sql="SELECT c.* FROM Contrato c
                        INNER JOIN Pessoa p on p.AutoId=c.Contratante
                        LEFT JOIN SuspensaoVinculo sv on sv.Contrato=c.AutoId
                    WHERE c.ContratoFinanceiro=? AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL)OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->ContratoFinanceiro);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Contratante']);
            if(!empty($array)){
                $array['objPessoa'] = $pessoa->getById();
            }
            return $array;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

}