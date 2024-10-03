<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 17/05/2018
 * Time: 00:04
 */
class SituacaoDocumento
{
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM SituacaoDocumento";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }
}