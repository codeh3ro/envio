<?php


class AreaAtuacaoEspecPrestador
{
    private $AutoId;
    private $EspecPrestador;
    private $PublicarAreaAtuacao;

    /**
     * AreaAtuacaoEspecPrestador constructor.
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
    public function getEspecPrestador()
    {
        return $this->EspecPrestador;
    }

    /**
     * @param mixed $EspecPrestador
     */
    public function setEspecPrestador($EspecPrestador)
    {
        $this->EspecPrestador = $EspecPrestador;
    }

    /**
     * @return mixed
     */
    public function getPublicarAreaAtuacao()
    {
        return $this->PublicarAreaAtuacao;
    }

    /**
     * @param mixed $PublicarAreaAtuacao
     */
    public function setPublicarAreaAtuacao($PublicarAreaAtuacao)
    {
        $this->PublicarAreaAtuacao = $PublicarAreaAtuacao;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByEspecP(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM AreaAtuacaoEspecPrestador WHERE EspecPrestador=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->EspecPrestador);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}
