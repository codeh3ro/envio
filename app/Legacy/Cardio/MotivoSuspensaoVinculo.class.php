<?php
/**
 * Created by PhpStorm.
 * User: guilhermejra
 * Date: 17/11/17
 * Time: 02:21
 */

class MotivoSuspensaoVinculo
{
    private $Codigo;
    private $Nomed;

    /**
     * MotivoSuspensaoVinculo constructor.
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
    public function getNomed()
    {
        return $this->Nomed;
    }

    /**
     * @param mixed $Nomed
     */
    public function setNomed($Nomed)
    {
        $this->Nomed = $Nomed;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM MotivoSuspensaoVinculo";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}