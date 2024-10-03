<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 14/03/2017
 * Time: 09:29
 */
class Pessoa
{
    private $AutoId;
    private $Nome;
    private $NomeReduzido;
    private $Cnp;
    private $DataNascimento;
    private $Sexo;
    private $EstadoCivil;
    private $Escolaridade;
    private $NomeMae;
    private $NomePai;
    private $NomeConjuge;
    private $Nacionalidade;
    private $Naturalidade;
    private $TelosRgUs;
    private $TelosUpUs;
    private $TelosRgDt;
    private $TelosUpDt;

    /**
     * Pessoa constructor.
     * @param $AutoId
     * @param $Nome
     * @param $NomeReduzido
     * @param $Cnp
     * @param $DataNascimento
     * @param $Sexo
     * @param $EstadoCivil
     * @param $Escolaridade
     * @param $NomeMae
     * @param $NomePai
     * @param $NomeConjuge
     * @param $Nacionalidade
     * @param $Naturalidade
     * @param $TelosRgUs
     * @param $TelosUpUs
     * @param $TelosRgDt
     * @param $TelosUpDt
     */
    public function __construct($AutoId='', $Nome='', $NomeReduzido='', $Cnp='', $DataNascimento='', $Sexo='', $EstadoCivil='', $Escolaridade='', $NomeMae='', $NomePai='', $NomeConjuge='', $Nacionalidade='', $Naturalidade='', $TelosRgUs='', $TelosUpUs='', $TelosRgDt='', $TelosUpDt='')
    {
        $this->AutoId = $AutoId;
        $this->Nome = $Nome;
        $this->NomeReduzido = $NomeReduzido;
        $this->Cnp = $Cnp;
        $this->DataNascimento = $DataNascimento;
        $this->Sexo = $Sexo;
        $this->EstadoCivil = $EstadoCivil;
        $this->Escolaridade = $Escolaridade;
        $this->NomeMae = $NomeMae;
        $this->NomePai = $NomePai;
        $this->NomeConjuge = $NomeConjuge;
        $this->Nacionalidade = $Nacionalidade;
        $this->Naturalidade = $Naturalidade;
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
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @return mixed
     */
    public function getNomeReduzido()
    {
        return $this->NomeReduzido;
    }

    /**
     * @param mixed $NomeReduzido
     */
    public function setNomeReduzido($NomeReduzido)
    {
        $this->NomeReduzido = $NomeReduzido;
    }

    /**
     * @return mixed
     */
    public function getCnp()
    {
        return $this->Cnp;
    }

    /**
     * @param mixed $Cnp
     */
    public function setCnp($Cnp)
    {
        $this->Cnp = $Cnp;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->DataNascimento;
    }

    /**
     * @param mixed $DataNascimento
     */
    public function setDataNascimento($DataNascimento)
    {
        $this->DataNascimento = $DataNascimento;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->Sexo;
    }

    /**
     * @param mixed $Sexo
     */
    public function setSexo($Sexo)
    {
        $this->Sexo = $Sexo;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivil()
    {
        return $this->EstadoCivil;
    }

    /**
     * @param mixed $EstadoCivil
     */
    public function setEstadoCivil($EstadoCivil)
    {
        $this->EstadoCivil = $EstadoCivil;
    }

    /**
     * @return mixed
     */
    public function getEscolaridade()
    {
        return $this->Escolaridade;
    }

    /**
     * @param mixed $Escolaridade
     */
    public function setEscolaridade($Escolaridade)
    {
        $this->Escolaridade = $Escolaridade;
    }

    /**
     * @return mixed
     */
    public function getNomeMae()
    {
        return $this->NomeMae;
    }

    /**
     * @param mixed $NomeMae
     */
    public function setNomeMae($NomeMae)
    {
        $this->NomeMae = $NomeMae;
    }

    /**
     * @return mixed
     */
    public function getNomePai()
    {
        return $this->NomePai;
    }

    /**
     * @param mixed $NomePai
     */
    public function setNomePai($NomePai)
    {
        $this->NomePai = $NomePai;
    }

    /**
     * @return mixed
     */
    public function getNomeConjuge()
    {
        return $this->NomeConjuge;
    }

    /**
     * @param mixed $NomeConjuge
     */
    public function setNomeConjuge($NomeConjuge)
    {
        $this->NomeConjuge = $NomeConjuge;
    }

    /**
     * @return mixed
     */
    public function getNacionalidade()
    {
        return $this->Nacionalidade;
    }

    /**
     * @param mixed $Nacionalidade
     */
    public function setNacionalidade($Nacionalidade)
    {
        $this->Nacionalidade = $Nacionalidade;
    }

    /**
     * @return mixed
     */
    public function getNaturalidade()
    {
        return $this->Naturalidade;
    }

    /**
     * @param mixed $Naturalidade
     */
    public function setNaturalidade($Naturalidade)
    {
        $this->Naturalidade = $Naturalidade;
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
     * @return mixed
     * @throws Exception
     */
    public function getById(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM Pessoa WHERE AutoId=?";
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
     * @param int $qtd
     * @return array
     * @throws Exception
     */
    public function getAleatorios($qtd=4){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT TOP ".$qtd." * FROM Pessoa WHERE Tipo=2 AND Cnp IS NOT NULL AND Sexo='F' ORDER BY NEWID()";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

}