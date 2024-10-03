<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/01/2018
 * Time: 15:33
 */
class ValorServTabela
{
    private $AutoId;
    private $Servico;
    private $Tabela;
    private $InicioVigencia;
    private $FimVigencia;

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
    public function getServico()
    {
        return $this->Servico;
    }

    /**
     * @param mixed $Servico
     */
    public function setServico($Servico)
    {
        $this->Servico = $Servico;
    }

    /**
     * @return mixed
     */
    public function getTabela()
    {
        return $this->Tabela;
    }

    /**
     * @param mixed $Tabela
     */
    public function setTabela($Tabela)
    {
        $this->Tabela = $Tabela;
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
     * @throws Exception
     */
    public function getByTabela(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT AutoId FROM ValorServTabela 
                      WHERE Servico=25772 AND Tabela=:tabela AND InicioVigencia<=GETDATE() AND (FimVigencia>=GETDATE() OR FimVigencia IS NULL)";
            $busca = $conn->prepare($sql);
            $busca->bindValue("tabela", $this->Tabela);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}