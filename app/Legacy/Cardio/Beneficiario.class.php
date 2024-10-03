<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 03/04/2017
 * Time: 18:08
 */
class Beneficiario
{
    private $AutoId;
    private $Pessoa;
    private $Contrato;
    private $Familia;
    private $RDP;
    private $Codigo;
    private $Tipo;
    private $Titular;
    private $InicioVigencia;
    private $DataBaseCalc;
    private $GauDependencia;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;

    /**
     * Beneficiario constructor.
     * @param string $AutoId
     * @param Pessoa|NULL $Pessoa
     * @param string $Contrato
     * @param string $Familia
     * @param string $RDP
     * @param string $Codigo
     * @param string $Tipo
     * @param string $Titular
     * @param string $InicioVigencia
     * @param string $DataBaseCalc
     * @param string $GauDependencia
     * @param string $TelosRgUs
     * @param string $TelosRgDt
     * @param string $TelosUpUs
     * @param string $TelosUpDt
     */
    public function __construct($AutoId='', $Contrato='', $Familia='', $RDP='', $Codigo='', $Tipo='', $Titular='', $InicioVigencia='', $DataBaseCalc='', $GauDependencia='', $TelosRgUs='', $TelosRgDt='', $TelosUpUs='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Contrato = $Contrato;
        $this->Familia = $Familia;
        $this->RDP = $RDP;
        $this->Codigo = $Codigo;
        $this->Tipo = $Tipo;
        $this->Titular = $Titular;
        $this->InicioVigencia = $InicioVigencia;
        $this->DataBaseCalc = $DataBaseCalc;
        $this->GauDependencia = $GauDependencia;
        $this->TelosRgUs = $TelosRgUs;
        $this->TelosRgDt = $TelosRgDt;
        $this->TelosUpUs = $TelosUpUs;
        $this->TelosUpDt = $TelosUpDt;

        $this->Pessoa = new Pessoa();

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
     * @return NULL|Pessoa
     */
    public function getPessoa()
    {
        return $this->Pessoa;
    }

    /**
     * @param Pessoa $Pessoa
     */
    public function setPessoa(Pessoa $Pessoa)
    {
        $this->Pessoa = $Pessoa;
    }

    /**
     * @return string
     */
    public function getContrato()
    {
        return $this->Contrato;
    }

    /**
     * @param string $Contrato
     */
    public function setContrato($Contrato)
    {
        $this->Contrato = $Contrato;
    }

    /**
     * @return string
     */
    public function getFamilia()
    {
        return $this->Familia;
    }

    /**
     * @param string $Familia
     */
    public function setFamilia($Familia)
    {
        $this->Familia = $Familia;
    }

    /**
     * @return string
     */
    public function getRDP()
    {
        return $this->RDP;
    }

    /**
     * @param string $RDP
     */
    public function setRDP($RDP)
    {
        $this->RDP = $RDP;
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
    public function getTitular()
    {
        return $this->Titular;
    }

    /**
     * @param string $Titular
     */
    public function setTitular($Titular)
    {
        $this->Titular = $Titular;
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
    public function getDataBaseCalc()
    {
        return $this->DataBaseCalc;
    }

    /**
     * @param string $DataBaseCalc
     */
    public function setDataBaseCalc($DataBaseCalc)
    {
        $this->DataBaseCalc = $DataBaseCalc;
    }

    /**
     * @return string
     */
    public function getGauDependencia()
    {
        return $this->GauDependencia;
    }

    /**
     * @param string $GauDependencia
     */
    public function setGauDependencia($GauDependencia)
    {
        $this->GauDependencia = $GauDependencia;
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
     * @return mixed
     * @throws Exception
     */
    public function getByCodigo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN ModeloContrato mc on mc.AutoId=c.Modelo
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE b.Codigo=? AND mc.TipoContratacao in(2,4) AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL) OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Contratante']);
            if(!empty($array)){
                $array['objPessoa'] = $pessoa->getById();
            }
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByCodigoProtocolo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN ModeloContrato mc on mc.AutoId=c.Modelo
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE b.Codigo=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Pessoa']);
            if(!empty($array)){
                $array['objPessoa'] = $pessoa->getById();
            }
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getDoencaBeneficiario(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM DoencaBeneficiario WHERE Beneficiario=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @param null $nome
     * @param null $contratoFinanceiro
     * @return array
     * @throws Exception
     */
    public function getByPesquisaNomeCodigo($nome=null,$contratoFinanceiro=null){
        try{
            $conn = DB_Cardio::conn();
            if(!empty($this->Codigo)){
                $where = "b.Codigo='".$this->Codigo."'";
            }
            if(!empty($nome)){
                if(!empty($where)){
                    $where .= " AND p.Nome LIKE '%".$nome."%'";
                }
                else{
                    $where = "p.Nome LIKE '%".$nome."%'";
                }
            }
            $sql = "SELECT b.*, con.ContratoFinanceiro FROM Beneficiario b
                        INNER JOIN Contrato con on con.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                    WHERE con.ContratoFinanceiro=? AND b.Tipo=1 AND ".$where;
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$contratoFinanceiro);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($array)){
                $arrayFinal = array();
                foreach ($array as $k => $b){
                    $objSuspensao = new SuspensaoVinculo();
                    $objSuspensao->setBeneficiario($b['AutoId']);
                    $arraySuspensao = $objSuspensao->getByBeneficiario();

                    if(empty($arraySuspensao)){
                        $pessoa = new Pessoa();
                        $pessoa->setAutoId($b['Pessoa']);
                        $b['objPessoa'] = $pessoa->getById();
                        array_push($arrayFinal, $b);
                    }
                }
            }
            return $arrayFinal;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @param $cpf
     * @return array
     * @throws Exception
     */
    public function getByPesquisaCPF($cpf){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, con.Codigo CodigoContrato, con.ContratoFinanceiro FROM Beneficiario b
                        INNER JOIN Contrato con on con.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                    WHERE b.Tipo=1 AND p.Cnp=:cpf";
            $busca = $conn->prepare($sql);
            $busca->bindValue("cpf", $cpf);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $arrayFinal=array();
            if(!empty($array)){
                foreach ($array as $k => $b){
                    $objSuspensao = new SuspensaoVinculo();
                    $objSuspensao->setBeneficiario($b['AutoId']);
                    $arraySuspensao = $objSuspensao->getByBeneficiario();

                    if(empty($arraySuspensao)){
                        $objSuspensao->setContrato($b['Contrato']);
                        $arraySuspensao = $objSuspensao->getByContrato();
                        if(empty($arraySuspensao)){
                            $pessoa = new Pessoa();
                            $pessoa->setAutoId($b['Pessoa']);
                            $b['objPessoa'] = $pessoa->getById();
                            array_push($arrayFinal, $b);
                        }
                    }
                }
            }
            return $arrayFinal;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getCartaoByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT mo.Nome NomePlano,
                           mo.AutoId idModuloOP,
                           mo.NomeReduzido NomePlanoReduzido,
                           mo.NumRegistroExterno, 
                           mo.Tipo TipoModulo, 
                           mo.Codigo CodigoModulo, 
                           mo.Participativo, 
                           tc.Nome NomeTipoContratacao,
                           lm.Nome RegulamentacaoPlano,
		                   sc.Nome SegmentacaoPlano,
                           pin.Nome PadraoInternacao, 
                           ag.Nome AreaAbrangencia,
                           ci.DataValidadeFinal,
                           b.Codigo, 
                           p.NomeReduzido Nome, 
                           p.DataNascimento,
                           b.AutoId, 
                           b.Pessoa, 
                           b.InicioVigencia, 
                           b.* 
                    FROM Beneficiario b
                        INNER JOIN Pessoa p on p.AutoId = b.Pessoa
                        INNER JOIN ModuloBeneficiario mb on mb.Beneficiario=b.AutoId
                        INNER JOIN ModuloOperadora mo on mo.AutoId=mb.Modulo
                        INNER JOIN PadraoInternacao pin on pin.Codigo=mo.PadraoInternacao
                        INNER JOIN AbrangenciaGeografica ag on ag.Codigo=mo.Abrangencia
                        INNER JOIN SegmentacaoCobertura sc on sc.Codigo=mo.Segmentacao
                        INNER JOIN LinhaModuloOperadora lm on lm.Codigo=mo.Linha
                        INNER JOIN TipoContratacao tc on tc.Codigo = mo.TipoContratacao
                        LEFT JOIN CartaoIdentificacao ci on ci.Beneficiario=b.AutoId
                    WHERE b.AutoId=? AND mo.Tipo<>9 AND (mb.FimVigencia IS NULL OR mb.FimVigencia>GETDATE()) AND (ci.DataValidadeFinal>=GETDATE() OR ci.DataValidadeFinal IS NULL)";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Pessoa']);
            $array['objPessoa'] = $pessoa->getById();
            $objRegistroPessoa = new RegistroPessoa();
            $objRegistroPessoa->setPessoa($array['objPessoa']['AutoId']);
            $objRegistroPessoa->setTipo('10');// Tipo 10 - CNS
            $array['objPessoa']['objRegistroPessoa'] = $objRegistroPessoa->getByPessoaByTipo();
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByContratoByFamilia(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, b.Codigo as CodigoContrato FROM Beneficiario b
                        INNER JOIN Contrato con on con.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                    WHERE b.Contrato=? AND b.Familia=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Contrato);
            $busca->bindValue(2, $this->Familia);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($array)){
                $arrayFinal = array();
                foreach ($array as $k => $b){
                    $objSuspensao = new SuspensaoVinculo();
                    $objSuspensao->setBeneficiario($b['AutoId']);
                    $arraySuspensao = $objSuspensao->getByBeneficiario();

                    if(empty($arraySuspensao)){
                        $pessoa = new Pessoa();
                        $pessoa->setAutoId($b['Pessoa']);
                        $b['objPessoa'] = $pessoa->getById();
                        array_push($arrayFinal, $b);
                    }
                }
            }
            return $arrayFinal;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByCodigoByApoio(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN ModeloContrato mc on mc.AutoId=c.Modelo
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE b.Codigo=? AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL) OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Contratante']);
            if(!empty($array)){
                $array['objPessoa'] = $pessoa->getById();
            }
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByCodigoOuvidoria(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE b.Codigo=? AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL) OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Contratante']);
            if(!empty($array)){
                $array['objPessoa'] = $pessoa->getById();
            }
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array|null
     * @throws Exception
     */
    public function getByContratoFinanceiro($limit){
        try{
            if($limit!=''){
                $limit=explode(',',$limit);
                $pag = $limit[0];
                $maximo = $limit[1];
                $limit='OFFSET '.$limit[0].' ROWS FETCH NEXT '.$limit[1].' ROWS ONLY';
            }

            $conn = DB_Cardio::conn();
            /*$sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                    WHERE c.ContratoFinanceiro=? ORDER BY b.Familia, b.Tipo ".$limit;*/

            $sql = "SELECT top($maximo) b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                    WHERE c.ContratoFinanceiro=? AND b.AutoId NOT IN(
                          SELECT top($pag) b.AutoId FROM Beneficiario b
                            INNER JOIN Contrato c on c.AutoId=b.Contrato
                          WHERE c.ContratoFinanceiro=? ORDER BY b.Familia, b.Tipo
                    ) ORDER BY b.Familia, b.Tipo";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Contrato);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $arrayNovo = null;
            foreach($array as $b){
                $pessoa = new Pessoa();
                $pessoa->setAutoId($b['Pessoa']);
                $b['objPessoa'] = $pessoa->getById();

                $objTitular = new Beneficiario();
                $objTitular->setAutoId($b['Titular']);
                $arrayTitular = $objTitular->getByAutoId();

                $pessoa->setAutoId($arrayTitular['Pessoa']);
                $b['objTitular'] = $pessoa->getById();
                $arrayNovo[] = $b;
            }

            return $arrayNovo;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function contByContratoFinanceiro(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT count(b.AutoId) as Total FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                    WHERE c.ContratoFinanceiro=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Contrato);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            return $array['Total'];
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByContratoFinanceiroPesquisa($limit,$suspenso=null){
        try{
            $maximo=50;
            $pag=0;
            if($limit!=''){
                $limit=explode(',',$limit);
                $pag = $limit[0];
                $maximo = $limit[1];
                $limit='OFFSET '.$limit[0].' ROWS FETCH NEXT '.$limit[1].' ROWS ONLY';
            }
            $where='';
            $situacao='';
            if(!empty($this->Codigo)){
                $where .= " AND b.Codigo='$this->Codigo'";
            }
            if(!empty($this->Familia)){
                $where .= " AND b.Familia='$this->Familia'";
            }
            if(!empty($this->Pessoa->getCnp())){
                $where .= " AND p.Cnp='".$this->Pessoa->getCnp()."'";
            }

            if($suspenso==1){//ATIVO
                $situacao = " AND b.AutoId NOT IN(
                        SELECT b.AutoId FROM Beneficiario b
                            INNER JOIN Contrato c on c.AutoId=b.Contrato
                            INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                            INNER JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                        WHERE c.ContratoFinanceiro=".$this->Contrato." AND sv.DataReativacao IS NULL
                        )";
            }
            elseif($suspenso==2){//SUSPENSO
                $situacao = " AND (sv.DataReativacao IS NULL AND sv.DataSuspensao IS NOT NULL)";
            }

            $conn = DB_Cardio::conn();
            /*$sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE c.ContratoFinanceiro=? ".$where." ORDER BY b.Familia, b.Tipo ".$limit;*/

            $sql = "SELECT top($maximo) b.AutoId,b.Familia,b.Codigo,b.InicioVigencia,b.Tipo,b.Pessoa,b.Titular, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE c.ContratoFinanceiro=? ".$where." AND b.AutoId NOT IN(
                        SELECT top($pag) b.AutoId FROM Beneficiario b
                            INNER JOIN Contrato c on c.AutoId=b.Contrato
                            INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                            LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                        WHERE c.ContratoFinanceiro=? ".$where." ".$situacao."
                        )
                        ".$situacao."
                    GROUP BY b.AutoId,b.Familia,b.Codigo,b.InicioVigencia,b.Tipo,b.Pessoa,b.Titular,c.Contratante ORDER BY b.Familia, b.Tipo ASC";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Contrato);
            $busca->bindValue(2,$this->Contrato);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $arrayNovo = null;
            foreach($array as $b){
                $pessoa = new Pessoa();
                $pessoa->setAutoId($b['Pessoa']);
                $b['objPessoa'] = $pessoa->getById();

                $objTitular = new Beneficiario();
                $objTitular->setAutoId($b['Titular']);
                $arrayTitular = $objTitular->getByAutoId();

                $pessoa->setAutoId($b['Pessoa']);
                $b['objTitular'] = $pessoa->getById();
                $arrayNovo[] = $b;
            }

            return $arrayNovo;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function contByContratoFinanceiroPesquisa($suspenso=null){
        try{
            $where='';
            if(!empty($this->Codigo)){
                $where .= " AND b.Codigo='$this->Codigo'";
            }
            if(!empty($this->Familia)){
                $where .= " AND b.Familia='$this->Familia'";
            }
            if(!empty($this->Pessoa->getCnp())){
                $where .= " AND p.Cnp='".$this->Pessoa->getCnp()."'";
            }

            if($suspenso==1){//ATIVO
                $where .= " AND b.AutoId NOT IN(
                        SELECT b.AutoId FROM Beneficiario b
                            INNER JOIN Contrato c on c.AutoId=b.Contrato
                            INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                            INNER JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                        WHERE c.ContratoFinanceiro=".$this->Contrato." AND sv.DataReativacao IS NULL GROUP BY b.AutoId
                        )";
            }
            elseif($suspenso==2){//SUSPENSO
                $where .= " AND (sv.DataReativacao IS NULL AND sv.DataSuspensao IS NOT NULL)";
            }

            $conn = DB_Cardio::conn();
            //echo $this->Contrato.'<br/>';
            $sql = "SELECT count(*) as Total FROM (SELECT count(b.AutoId) as Total FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE c.ContratoFinanceiro=? ".$where." GROUP BY b.AutoId) Resultado";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Contrato);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            return $array['Total'];
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array|null
     * @throws Exception
     */
    public function getByContrato(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN ModeloContrato mc on mc.AutoId=c.Modelo
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE b.Contrato=? AND mc.TipoContratacao in(2,4) AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL) OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Contrato);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $arrayNovo = null;
            foreach($array as $b){
                $pessoa = new Pessoa();
                $pessoa->setAutoId($b['Contratante']);
                $b['objPessoa'] = $pessoa->getById();
                $arrayNovo[] = $b;
            }

            return $arrayNovo;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getByTipoByContratoByPesso(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM Beneficiario
                    WHERE Codigo=? AND Tipo=? AND Pessoa=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Contrato);
            $busca->bindValue(2,$this->Tipo);
            $busca->bindValue(3,$this->Pessoa->getAutoId());
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            if(!empty($array)){
                $pessoa = new Pessoa();
                $pessoa->setAutoId($array['Pessoa']);
                $array['objPessoa'] = $pessoa->getById();
            }

            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array|null
     * @throws Exception
     */
    public function getByContratoTitular(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN ModeloContrato mc on mc.AutoId=c.Modelo
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE b.Contrato=? AND mc.TipoContratacao in(2,4) AND b.Tipo=1 AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL) OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Contrato);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);

            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Contratante']);
            $array[] = $pessoa->getById();

            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @param $contratoFinanceiro
     * @return array
     * @throws Exception
     */
    public function getDependentesAtivos($contratoFinanceiro=null){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, con.ContratoFinanceiro FROM Beneficiario b
                        INNER JOIN Contrato con on con.AutoId=b.Contrato
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                    WHERE con.ContratoFinanceiro=? AND b.Titular=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$contratoFinanceiro);
            $busca->bindValue(2,$this->Titular);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $arrayFinal = array();
            if(!empty($array)){
                foreach ($array as $k => $b){
                    $objSuspensao = new SuspensaoVinculo();
                    $objSuspensao->setBeneficiario($b['AutoId']);
                    $arraySuspensao = $objSuspensao->getByBeneficiario();

                    if(empty($arraySuspensao)){
                        $pessoa = new Pessoa();
                        $pessoa->setAutoId($b['Pessoa']);
                        $b['objPessoa'] = $pessoa->getById();
                        array_push($arrayFinal, $b);
                    }
                }
            }

            return $arrayFinal;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function buscaCodigosByNome($nome){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.Codigo FROM Beneficiario b
                        INNER JOIN Pessoa p on p.AutoId=b.Pessoa
                    WHERE p.Nome LIKE ?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,"%".$nome."%");
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $codigos = '';
            foreach($array as $c){
                if(!empty($codigos)){
                    $codigos .=",'".$c['Codigo']."'";
                }
                else{
                    $codigos = "'".$c['Codigo']."'";
                }
            }
            return $codigos;
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
            $sql = "SELECT mo.Nome NomePlano, 
                           mo.NumRegistroExterno, 
                           mo.Tipo TipoModulo, 
                           mo.Codigo CodigoModulo, 
                           mo.Participativo, 
                           lm.Nome RegulamentacaoPlano,
		                   sc.Nome SegmentacaoPlano,
                           pin.Nome PadraoInternacao, 
                           ag.Nome AreaAbrangencia, 
                           b.Codigo, 
                           p.Nome, 
                           b.AutoId, 
                           b.Pessoa, 
                           b.InicioVigencia, 
                           b.* 
                    FROM Beneficiario b
                        INNER JOIN Pessoa p on p.AutoId = b.Pessoa
                        INNER JOIN ModuloBeneficiario mb on mb.Beneficiario=b.AutoId
                        INNER JOIN ModuloOperadora mo on mo.AutoId=mb.Modulo
                        INNER JOIN PadraoInternacao pin on pin.Codigo=mo.PadraoInternacao
                        INNER JOIN AbrangenciaGeografica ag on ag.Codigo=mo.Abrangencia
                        INNER JOIN SegmentacaoCobertura sc on sc.Codigo=mo.Segmentacao
                        INNER JOIN LinhaModuloOperadora lm on lm.Codigo=mo.Linha
                    WHERE b.AutoId=? AND mb.FimVigencia IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Pessoa']);
            $array['objPessoa'] = $pessoa->getById();
            $objRegistroPessoa = new RegistroPessoa();
            $objRegistroPessoa->setPessoa($array['objPessoa']['AutoId']);
            $objRegistroPessoa->setTipo('10');// Tipo 10 - CNS
            $array['objPessoa']['objRegistroPessoa'] = $objRegistroPessoa->getByPessoaByTipo();
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getBenefByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT p.Nome,
                           b.* 
                    FROM Beneficiario b
                        INNER JOIN Pessoa p on p.AutoId = b.Pessoa
                        INNER JOIN ModuloBeneficiario mb on mb.Beneficiario=b.AutoId
                    WHERE b.AutoId=? AND mb.FimVigencia IS NULL";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Pessoa']);
            $array['objPessoa'] = $pessoa->getById();
            $objRegistroPessoa = new RegistroPessoa();
            $objRegistroPessoa->setPessoa($array['objPessoa']['AutoId']);
            $objRegistroPessoa->setTipo('10');// Tipo 10 - CNS
            $array['objPessoa']['objRegistroPessoa'] = $objRegistroPessoa->getByPessoaByTipo();
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByAutoIdLogar(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT b.*, c.Contratante FROM Beneficiario b
                        INNER JOIN Contrato c on c.AutoId=b.Contrato
                        INNER JOIN ModeloContrato mc on mc.AutoId=c.Modelo
                        LEFT JOIN SuspensaoVinculo sv on sv.Beneficiario=b.AutoId
                    WHERE b.AutoId=? AND mc.TipoContratacao in(2,4) AND (((sv.DataReativacao IS NULL AND sv.DataSuspensao IS NULL) OR sv.DataReativacao IS NOT NULL) OR sv.DataSuspensao>GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $pessoa = new Pessoa();
            $pessoa->setAutoId($array['Contratante']);
            if(!empty($array)){
                $array['objPessoa'] = $pessoa->getById();
            }
            return $array;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     */
    public function getBenefByCodigo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT mo.Nome Plano, tpr.Nome TipoRedeNome, * FROM Beneficiario b
                    INNER JOIN ModuloBeneficiario mb on mb.Beneficiario=b.AutoId
                    INNER JOIN ModuloOperadora mo on mo.AutoId=mb.Modulo
                    INNER JOIN RedeRefClPrestador rp on rp.ModuloOperadora=mo.AutoId
                    INNER JOIN TipoRedeReferenciada tpr on tpr.Codigo=rp.TipoRede WHERE b.Codigo=? AND mb.FimVigencia IS NULL AND rp.PublicaRede=1";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    /**
     * @return array
     */
    public function getBenefByCodigoByContrato(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT  mo.Nome Plano, tpr.Nome TipoRedeNome, * FROM Beneficiario b
                    INNER JOIN ModuloBeneficiario mb on mb.Beneficiario=b.AutoId
                    INNER JOIN ModuloOperadora mo on mo.AutoId=mb.Modulo
                    INNER JOIN RedeRefClPrestador rp on rp.Contrato=b.Contrato
                    INNER JOIN TipoRedeReferenciada tpr on tpr.Codigo=rp.TipoRede WHERE b.Codigo=? AND mb.FimVigencia IS NULL AND rp.PublicaRede=1";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    /**
     * @return array
     */
    public function getBenefByCodigoByModelo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT  mo.Nome Plano, tpr.Nome TipoRedeNome, * FROM Beneficiario b
                    INNER JOIN ModuloBeneficiario mb on mb.Beneficiario=b.AutoId
                    INNER JOIN ModuloOperadora mo on mo.AutoId=mb.Modulo
                    INNER JOIN Contrato c on c.AutoId=b.Contrato
                    INNER JOIN RedeRefClPrestador rp on rp.ModeloContrato=c.Modelo
                    INNER JOIN TipoRedeReferenciada tpr on tpr.Codigo=rp.TipoRede WHERE b.Codigo=? AND mb.FimVigencia IS NULL AND rp.PublicaRede=1";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Codigo);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

}