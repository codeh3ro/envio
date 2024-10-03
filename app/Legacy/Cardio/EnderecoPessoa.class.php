<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 14/03/2017
 * Time: 14:31
 */
class EnderecoPessoa
{
    private $AutoId;
    private $Pessoa;
    private $Seq;
    private $Logradouro;
    private $NumLogradouro;
    private $ComplLogradouro;
    private $Bairro;
    private $Cidade;
    private $CEP;
    private $Tipo;
    private $ParaCorrespondencia;
    private $ParaCobranca;
    private $ParaFaturamento;
    private $ParaPublicacao;
    private $InicioVigencia;
    private $FimVigencia;
    private $TelosRgUs;
    private $TelosUpUs;
    private $TelosRgDt;
    private $TelosUpDt;

    /**
     * EnderecoPessoa constructor.
     * @param $AutoId
     * @param $Pessoa
     * @param $Seq
     * @param $Logradouro
     * @param $NumLogradouro
     * @param $ComplLogradouro
     * @param $Bairro
     * @param $Cidade
     * @param $CEP
     * @param $Tipo
     * @param $ParaCorrespondencia
     * @param $ParaCobranca
     * @param $ParaFaturamento
     * @param $ParaPublicacao
     * @param $InicioVigencia
     * @param $FimVigencia
     * @param $TelosRgUs
     * @param $TelosUpUs
     * @param $TelosRgDt
     * @param $TelosUpDt
     */
    public function __construct($AutoId='', $Pessoa='', $Seq='', $Logradouro='', $NumLogradouro='', $ComplLogradouro='', $Bairro='', $Cidade='', $CEP='', $Tipo='', $ParaCorrespondencia='', $ParaCobranca='', $ParaFaturamento='', $ParaPublicacao='', $InicioVigencia='', $FimVigencia='', $TelosRgUs='', $TelosUpUs='', $TelosRgDt='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Pessoa = $Pessoa;
        $this->Seq = $Seq;
        $this->Logradouro = preg_replace("/[^a-zA-Z0-9\s]/", "", strtr($Logradouro, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC "));
        $this->NumLogradouro = $NumLogradouro;
        $this->ComplLogradouro = preg_replace("/[^a-zA-Z0-9\s]/", "", strtr($ComplLogradouro, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC "));
        $this->Bairro = preg_replace("/[^a-zA-Z0-9\s]/", "", strtr($Bairro, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC "));
        $this->Cidade = $Cidade;
        $this->CEP = $CEP;
        $this->Tipo = $Tipo;
        $this->ParaCorrespondencia = $ParaCorrespondencia;
        $this->ParaCobranca = $ParaCobranca;
        $this->ParaFaturamento = $ParaFaturamento;
        $this->ParaPublicacao = $ParaPublicacao;
        $this->InicioVigencia = $InicioVigencia;
        $this->FimVigencia = $FimVigencia;
        $this->TelosRgUs = $TelosRgUs;
        $this->TelosUpUs = $TelosUpUs;
        $this->TelosRgDt = $TelosRgDt;
        $this->TelosUpDt = $TelosUpDt;
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
    public function getPessoa()
    {
        return $this->Pessoa;
    }

    /**
     * @param mixed $Pessoa
     */
    public function setPessoa($Pessoa)
    {
        $this->Pessoa = $Pessoa;
    }

    /**
     * @return mixed
     */
    public function getSeq()
    {
        return $this->Seq;
    }

    /**
     * @param mixed $Seq
     */
    public function setSeq($Seq)
    {
        $this->Seq = $Seq;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->Logradouro;
    }

    /**
     * @param mixed $Logradouro
     */
    public function setLogradouro($Logradouro)
    {
        $this->Logradouro = preg_replace("/[^a-zA-Z0-9\s]/", "", strtr($Logradouro, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC "));
    }

    /**
     * @return mixed
     */
    public function getNumLogradouro()
    {
        return $this->NumLogradouro;
    }

    /**
     * @param mixed $NumLogradouro
     */
    public function setNumLogradouro($NumLogradouro)
    {
        $this->NumLogradouro = $NumLogradouro;
    }

    /**
     * @return mixed
     */
    public function getComplLogradouro()
    {
        return $this->ComplLogradouro;
    }

    /**
     * @param mixed $ComplLogradouro
     */
    public function setComplLogradouro($ComplLogradouro)
    {
        $this->ComplLogradouro = preg_replace("/[^a-zA-Z0-9\s]/", "", strtr($ComplLogradouro, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC "));
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->Bairro;
    }

    /**
     * @param mixed $Bairro
     */
    public function setBairro($Bairro)
    {
        $this->Bairro = preg_replace("/[^a-zA-Z0-9\s]/", "", strtr($Bairro, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC "));
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->Cidade;
    }

    /**
     * @param mixed $Cidade
     */
    public function setCidade($Cidade)
    {
        $this->Cidade = $Cidade;
    }

    /**
     * @return mixed
     */
    public function getCEP()
    {
        return $this->CEP;
    }

    /**
     * @param mixed $CEP
     */
    public function setCEP($CEP)
    {
        $this->CEP = $CEP;
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
    public function getParaCorrespondencia()
    {
        return $this->ParaCorrespondencia;
    }

    /**
     * @param mixed $ParaCorrespondencia
     */
    public function setParaCorrespondencia($ParaCorrespondencia)
    {
        $this->ParaCorrespondencia = $ParaCorrespondencia;
    }

    /**
     * @return mixed
     */
    public function getParaCobranca()
    {
        return $this->ParaCobranca;
    }

    /**
     * @param mixed $ParaCobranca
     */
    public function setParaCobranca($ParaCobranca)
    {
        $this->ParaCobranca = $ParaCobranca;
    }

    /**
     * @return mixed
     */
    public function getParaFaturamento()
    {
        return $this->ParaFaturamento;
    }

    /**
     * @param mixed $ParaFaturamento
     */
    public function setParaFaturamento($ParaFaturamento)
    {
        $this->ParaFaturamento = $ParaFaturamento;
    }

    /**
     * @return mixed
     */
    public function getParaPublicacao()
    {
        return $this->ParaPublicacao;
    }

    /**
     * @param mixed $ParaPublicacao
     */
    public function setParaPublicacao($ParaPublicacao)
    {
        $this->ParaPublicacao = $ParaPublicacao;
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
     * @return array
     * @throws Exception
     */
    public function getAllByPessoa(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EnderecoPessoa WHERE Pessoa=?";
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
    public function getAllByPessoaUltimo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EnderecoPessoa WHERE Pessoa=? AND FimVigencia IS NULL AND (ParaPublicacao=1 or ParaCobranca=1) ORDER BY AutoId DESC";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
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
    public function getByPessoaByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EnderecoPessoa WHERE Pessoa=? AND AutoId=?";
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
    public function getByPessoaByPublicacao(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM EnderecoPessoa WHERE Pessoa=? AND ParaPublicacao=1";
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
    public function getUltimaSeq(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT MAX(Seq) as Seq FROM EnderecoPessoa WHERE Pessoa=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
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
    public function add(){
        try{
            $seq = $this->getUltimaSeq();

            $conn = DB_Cardio::conn();
            $sql = "INSERT INTO EnderecoPessoa (Pessoa,
                                            Logradouro,
                                            NumLogradouro,
                                            ComplLogradouro,
                                            Bairro,
                                            Cidade,
                                            CEP,
                                            Tipo,
                                            ParaCorrespondencia,
                                            ParaCobranca,
                                            ParaFaturamento,
                                            ParaPublicacao,
                                            InicioVigencia,
                                            FimVigencia,
                                            TelosRgUs,
                                            TelosRgDt,
                                            Seq)
                                            VALUES
                                            (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
            $busca->bindValue(2,$this->Logradouro);
            $busca->bindValue(3,$this->NumLogradouro);
            $busca->bindValue(4,$this->ComplLogradouro);
            $busca->bindValue(5,$this->Bairro);
            $busca->bindValue(6,$this->Cidade);
            $busca->bindValue(7,$this->CEP);
            $busca->bindValue(8,$this->Tipo);
            $busca->bindValue(9,$this->ParaCorrespondencia);
            $busca->bindValue(10,$this->ParaCobranca);
            $busca->bindValue(11,$this->ParaFaturamento);
            $busca->bindValue(12,$this->ParaPublicacao);
            $busca->bindValue(13,$this->InicioVigencia);
            $busca->bindValue(14,$this->FimVigencia);
            $busca->bindValue(15,$this->TelosRgUs);
            $busca->bindValue(16,$this->TelosRgDt);
            $busca->bindValue(17,$seq['Seq']+1);
            if($busca->execute()){
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
            $sql = "UPDATE EnderecoPessoa SET Logradouro=?,
                                            NumLogradouro=?,
                                            ComplLogradouro=?,
                                            Bairro=?,
                                            Cidade=?,
                                            CEP=?,
                                            Tipo=?,
                                            ParaCorrespondencia=?,
                                            ParaCobranca=?,
                                            ParaFaturamento=?,
                                            ParaPublicacao=?,
                                            InicioVigencia=?,
                                            FimVigencia=?,
                                            TelosUpUs=?,
                                            TelosUpDt=?
                                            WHERE AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Logradouro);
            $busca->bindValue(2,$this->NumLogradouro);
            $busca->bindValue(3,$this->ComplLogradouro);
            $busca->bindValue(4,$this->Bairro);
            $busca->bindValue(5,$this->Cidade);
            $busca->bindValue(6,$this->CEP);
            $busca->bindValue(7,$this->Tipo);
            $busca->bindValue(8,$this->ParaCorrespondencia);
            $busca->bindValue(9,$this->ParaCobranca);
            $busca->bindValue(10,$this->ParaFaturamento);
            $busca->bindValue(11,$this->ParaPublicacao);
            $busca->bindValue(12,$this->InicioVigencia);
            $busca->bindValue(13,$this->FimVigencia);
            $busca->bindValue(14,$this->TelosUpUs);
            $busca->bindValue(15,$this->TelosUpDt);
            $busca->bindValue(16,$this->AutoId);
            if($busca->execute()){
                return true;
            }
            return false;
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }


}