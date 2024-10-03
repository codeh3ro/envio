<?php

namespace App\Legacy\Cardio;
class RegistroPessoa
{
    private $AutoId;
    private $Pessoa;
    private $Tipo;
    private $Numero;
    private $OrgaoExp;
    private $UFExp;
    private $DataExp;
    private $TelosRgUs;
    private $TelosRgDt;
    private $TelosUpUs;
    private $TelosUpDt;
    private $DataValidadeFinal;

    /**
     * RegistroPessoa constructor.
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
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param mixed $Numero
     */
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;
    }

    /**
     * @return mixed
     */
    public function getOrgaoExp()
    {
        return $this->OrgaoExp;
    }

    /**
     * @param mixed $OrgaoExp
     */
    public function setOrgaoExp($OrgaoExp)
    {
        $this->OrgaoExp = $OrgaoExp;
    }

    /**
     * @return mixed
     */
    public function getUFExp()
    {
        return $this->UFExp;
    }

    /**
     * @param mixed $UFExp
     */
    public function setUFExp($UFExp)
    {
        $this->UFExp = $UFExp;
    }

    /**
     * @return mixed
     */
    public function getDataExp()
    {
        return $this->DataExp;
    }

    /**
     * @param mixed $DataExp
     */
    public function setDataExp($DataExp)
    {
        $this->DataExp = $DataExp;
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
    public function getDataValidadeFinal()
    {
        return $this->DataValidadeFinal;
    }

    /**
     * @param mixed $DataValidadeFinal
     */
    public function setDataValidadeFinal($DataValidadeFinal)
    {
        $this->DataValidadeFinal = $DataValidadeFinal;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByPessoaByTipo(){
        try{
            $busca = DB_Cardio::select("SELECT * FROM RegistroPessoa WHERE Pessoa=? AND Tipo=?", [$this->Pessoa, $this->Tipo]);
            return $busca;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}
