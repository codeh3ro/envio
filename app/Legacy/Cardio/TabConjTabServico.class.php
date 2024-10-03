<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/01/2018
 * Time: 15:29
 */
class TabConjTabServico
{
    private $AutoId;
    private $Tabela;
    private $Conjunto;
    private $Tipo;

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
    public function getConjunto()
    {
        return $this->Conjunto;
    }

    /**
     * @param mixed $Conjunto
     */
    public function setConjunto($Conjunto)
    {
        $this->Conjunto = $Conjunto;
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
     * @throws Exception
     */
    public function getByConjunto(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT Tabela, Conjunto FROM TabConjTabServico WHERE Conjunto=:conj AND Tipo=1";
            $busca = $conn->prepare($sql);
            $busca->bindValue("conj", $this->Conjunto);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}