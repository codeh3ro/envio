<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 27/10/2017
 * Time: 09:16
 */
class RedeRefClPrestador
{
    private $AutoId;
    private $Classe;
    private $TipoRede;
    private $InicioVigencia;
    private $FimVigencia;
    private $ModuloOperadora;
    private $PrestadorServico;
    private $Contrato;
    private $ModeloContrato;
    private $PublicaRede;
    private $ExclusaoSubstituicaoRede;
    private $NumRegistroExternoModulo;

    /**
     * RedeRefClPrestador constructor.
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
    public function getClasse()
    {
        return $this->Classe;
    }

    /**
     * @param mixed $Classe
     */
    public function setClasse($Classe)
    {
        $this->Classe = $Classe;
    }

    /**
     * @return mixed
     */
    public function getTipoRede()
    {
        return $this->TipoRede;
    }

    /**
     * @param mixed $TipoRede
     */
    public function setTipoRede($TipoRede)
    {
        $this->TipoRede = $TipoRede;
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
     */
    public function getModuloOperadora()
    {
        return $this->ModuloOperadora;
    }

    /**
     * @param mixed $ModuloOperadora
     */
    public function setModuloOperadora($ModuloOperadora)
    {
        $this->ModuloOperadora = $ModuloOperadora;
    }

    /**
     * @return mixed
     */
    public function getPrestadorServico()
    {
        return $this->PrestadorServico;
    }

    /**
     * @param mixed $PrestadorServico
     */
    public function setPrestadorServico($PrestadorServico)
    {
        $this->PrestadorServico = $PrestadorServico;
    }

    /**
     * @return mixed
     */
    public function getContrato()
    {
        return $this->Contrato;
    }

    /**
     * @param mixed $Contrato
     */
    public function setContrato($Contrato)
    {
        $this->Contrato = $Contrato;
    }

    /**
     * @return mixed
     */
    public function getModeloContrato()
    {
        return $this->ModeloContrato;
    }

    /**
     * @param mixed $ModeloContrato
     */
    public function setModeloContrato($ModeloContrato)
    {
        $this->ModeloContrato = $ModeloContrato;
    }

    /**
     * @return mixed
     */
    public function getPublicaRede()
    {
        return $this->PublicaRede;
    }

    /**
     * @param mixed $PublicaRede
     */
    public function setPublicaRede($PublicaRede)
    {
        $this->PublicaRede = $PublicaRede;
    }

    /**
     * @return mixed
     */
    public function getExclusaoSubstituicaoRede()
    {
        return $this->ExclusaoSubstituicaoRede;
    }

    /**
     * @param mixed $ExclusaoSubstituicaoRede
     */
    public function setExclusaoSubstituicaoRede($ExclusaoSubstituicaoRede)
    {
        $this->ExclusaoSubstituicaoRede = $ExclusaoSubstituicaoRede;
    }

    /**
     * @return mixed
     */
    public function getNumRegistroExternoModulo()
    {
        return $this->NumRegistroExternoModulo;
    }

    /**
     * @param mixed $NumRegistroExternoModulo
     */
    public function setNumRegistroExternoModulo($NumRegistroExternoModulo)
    {
        $this->NumRegistroExternoModulo = $NumRegistroExternoModulo;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getByModuloOperadoraNumRegistroExterno(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT rp.TipoRede FROM RedeRefClPrestador rp
                    INNER JOIN ModuloOperadora mo on mo.AutoId=rp.ModuloOperadora
                    WHERE mo.NumRegistroExterno=? GROUP BY rp.TipoRede";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->NumRegistroExternoModulo);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

}