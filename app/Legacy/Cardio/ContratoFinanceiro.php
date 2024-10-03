<?php

namespace App\Legacy\Cardio;

class ContratoFinanceiro
{
    private $AutoId;
    private $Codigo;
    private $Pessoa;
    private $Classe;

    /**
     * ContratoFinanceiro constructor.
     * @param $AutoId
     * @param $Codigo
     * @param $Pessoa
     * @param $Classe
     */
    public function __construct($AutoId='', $Codigo='', $Pessoa='', $Classe='')
    {
        $this->AutoId = $AutoId;
        $this->Codigo = $Codigo;
        $this->Pessoa = $Pessoa;
        $this->Classe = $Classe;
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
    public function getClasse()
    {
        return $this->Classe;
    }

    /**
     * @param string $Classe
     */
    public function setClasse($Classe)
    {
        $this->Classe = $Classe;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByAutoId(){
        try{
			$contrato = '';
			if(!empty($this->AutoId)){
				$contrato = $this->AutoId;
			}

            $conn = DB_Cardio::conn();
            $sql = "SELECT mc.Codigo as Modelo, cf.* FROM ContratoFinanceiro cf
                        INNER JOIN Contrato con on con.ContratoFinanceiro=cf.AutoId
                        INNER JOIN ModeloContrato mc on mc.AutoId=con.Modelo
                    WHERE cf.AutoId=".$contrato;
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
            $busca->execute();

            /*echo '<pre>';
            print_r($this->AutoId);
            echo '</pre>';
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
    public function getByAutoIdPrestador(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.* FROM ContratoFinanceiro cf
                        INNER JOIN PrestadorServico ps on ps.ContratoFinanceiro=cf.AutoId
                    WHERE cf.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
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
    public function getByAutoIdProducao(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT cf.* FROM ContratoFinanceiro cf
                    WHERE cf.AutoId=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->AutoId);
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
    public function getByCodigo(){
        try{
            $busca = DB_Cardio::select("SELECT * FROM ContratoFinanceiro WHERE Codigo=?", [$this->Codigo]);
            return $busca[0];
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }
}
