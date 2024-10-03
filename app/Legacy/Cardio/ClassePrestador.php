<?php

namespace App\Legacy\Cardio;

class ClassePrestador
{
    private $Codigo;
    private $Nome;
    private $CodigoExterno;
    private $Tipo;

    /**
     * ClassePrestador constructor.
     */
    public function __construct()
    {
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
    public function getCodigoExterno()
    {
        return $this->CodigoExterno;
    }

    /**
     * @param mixed $CodigoExterno
     */
    public function setCodigoExterno($CodigoExterno)
    {
        $this->CodigoExterno = $CodigoExterno;
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
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM ClassePrestador WHERE Codigo IN(1,2,3,4,21,10,11)";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }



    /**
     * @return array
     * @throws Exception
     */
    public function getByCodigo(){
        try{
            $busca = DB_Cardio::select("SELECT * FROM ClassePrestador WHERE Codigo = ?", [$this->Codigo]);
            return $busca[0];
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

}
