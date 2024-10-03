<?php
/**
 * Created by PhpStorm.
 * User: guilh
 * Date: 10/03/2019
 * Time: 14:06
 */

class GrauDepPessoa
{
    private $Codigo;
    private $Nome;

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
     * @throws Exception
     */
    public function getByCodigo(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM GrauDepPessoa WHERE Codigo=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->Codigo);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}