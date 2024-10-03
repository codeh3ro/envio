<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/07/2017
 * Time: 16:00
 */
class Log_Reajuste_Cardio
{
    private $id;
    private $id_reajuste;
    private $id_usuario;
    private $data_alteracao;
    private $alteracao;

    /**
     * Log_Reajuste constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdReajuste()
    {
        return $this->id_reajuste;
    }

    /**
     * @param mixed $id_reajuste
     */
    public function setIdReajuste($id_reajuste)
    {
        $this->id_reajuste = $id_reajuste;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getDataAlteracao()
    {
        return $this->data_alteracao;
    }

    /**
     * @param mixed $data_alteracao
     */
    public function setDataAlteracao($data_alteracao)
    {
        $this->data_alteracao = $data_alteracao;
    }

    /**
     * @return mixed
     */
    public function getAlteracao()
    {
        return $this->alteracao;
    }

    /**
     * @param mixed $alteracao
     */
    public function setAlteracao($alteracao)
    {
        $this->alteracao = $alteracao;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function add(){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "INSERT INTO log_reajuste (id_reajuste, id_usuario, data_alteracao, alteracao) VALUES (?,?,?,?)";
            $insert = $conn->prepare($sql);
            $insert->bindValue(1, $this->id_reajuste);
            $insert->bindValue(2, $this->id_usuario);
            $insert->bindValue(3, $this->data_alteracao);
            $insert->bindValue(4, $this->alteracao);
            if($insert->execute()){
                $this->id = $conn->lastInsertId();
                return true;
            }
            return false;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

}