<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 24/10/2017
 * Time: 15:24
 */
class ModuloOperadora
{
    private $AutoId;
    private $Codigo;
    private $Nome;
    private $NomeReduzido;
    private $Tipo;
    private $Linha;
    private $Classe;
    private $Abrangencia;
    private $Descricao;
    private $DataInicioComerc;
    private $DataFimComerc;
    private $Participativo;
    private $Segmentacao;
    private $TipoContratacao;
    private $Acomodacao;
    private $NumRegistroExterno;
    private $DataRegistroExterno;
    private $ProdutoIntercambio;
    private $PadraoInternacao;
    private $SituacaoANS;

    /**
     * ModuloOperadora constructor.
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
    public function getNomeReduzido()
    {
        return $this->NomeReduzido;
    }

    /**
     * @param mixed $NomeReduzido
     */
    public function setNomeReduzido($NomeReduzido)
    {
        $this->NomeReduzido = $NomeReduzido;
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
     */
    public function getLinha()
    {
        return $this->Linha;
    }

    /**
     * @param mixed $Linha
     */
    public function setLinha($Linha)
    {
        $this->Linha = $Linha;
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
    public function getAbrangencia()
    {
        return $this->Abrangencia;
    }

    /**
     * @param mixed $Abrangencia
     */
    public function setAbrangencia($Abrangencia)
    {
        $this->Abrangencia = $Abrangencia;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->Descricao;
    }

    /**
     * @param mixed $Descricao
     */
    public function setDescricao($Descricao)
    {
        $this->Descricao = $Descricao;
    }

    /**
     * @return mixed
     */
    public function getDataInicioComerc()
    {
        return $this->DataInicioComerc;
    }

    /**
     * @param mixed $DataInicioComerc
     */
    public function setDataInicioComerc($DataInicioComerc)
    {
        $this->DataInicioComerc = $DataInicioComerc;
    }

    /**
     * @return mixed
     */
    public function getDataFimComerc()
    {
        return $this->DataFimComerc;
    }

    /**
     * @param mixed $DataFimComerc
     */
    public function setDataFimComerc($DataFimComerc)
    {
        $this->DataFimComerc = $DataFimComerc;
    }

    /**
     * @return mixed
     */
    public function getParticipativo()
    {
        return $this->Participativo;
    }

    /**
     * @param mixed $Participativo
     */
    public function setParticipativo($Participativo)
    {
        $this->Participativo = $Participativo;
    }

    /**
     * @return mixed
     */
    public function getSegmentacao()
    {
        return $this->Segmentacao;
    }

    /**
     * @param mixed $Segmentacao
     */
    public function setSegmentacao($Segmentacao)
    {
        $this->Segmentacao = $Segmentacao;
    }

    /**
     * @return mixed
     */
    public function getTipoContratacao()
    {
        return $this->TipoContratacao;
    }

    /**
     * @param mixed $TipoContratacao
     */
    public function setTipoContratacao($TipoContratacao)
    {
        $this->TipoContratacao = $TipoContratacao;
    }

    /**
     * @return mixed
     */
    public function getAcomodacao()
    {
        return $this->Acomodacao;
    }

    /**
     * @param mixed $Acomodacao
     */
    public function setAcomodacao($Acomodacao)
    {
        $this->Acomodacao = $Acomodacao;
    }

    /**
     * @return mixed
     */
    public function getNumRegistroExterno()
    {
        return $this->NumRegistroExterno;
    }

    /**
     * @param mixed $NumRegistroExterno
     */
    public function setNumRegistroExterno($NumRegistroExterno)
    {
        $this->NumRegistroExterno = $NumRegistroExterno;
    }

    /**
     * @return mixed
     */
    public function getDataRegistroExterno()
    {
        return $this->DataRegistroExterno;
    }

    /**
     * @param mixed $DataRegistroExterno
     */
    public function setDataRegistroExterno($DataRegistroExterno)
    {
        $this->DataRegistroExterno = $DataRegistroExterno;
    }

    /**
     * @return mixed
     */
    public function getProdutoIntercambio()
    {
        return $this->ProdutoIntercambio;
    }

    /**
     * @param mixed $ProdutoIntercambio
     */
    public function setProdutoIntercambio($ProdutoIntercambio)
    {
        $this->ProdutoIntercambio = $ProdutoIntercambio;
    }

    /**
     * @return mixed
     */
    public function getPadraoInternacao()
    {
        return $this->PadraoInternacao;
    }

    /**
     * @param mixed $PadraoInternacao
     */
    public function setPadraoInternacao($PadraoInternacao)
    {
        $this->PadraoInternacao = $PadraoInternacao;
    }

    /**
     * @return mixed
     */
    public function getSituacaoANS()
    {
        return $this->SituacaoANS;
    }

    /**
     * @param mixed $SituacaoANS
     */
    public function setSituacaoANS($SituacaoANS)
    {
        $this->SituacaoANS = $SituacaoANS;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT NumRegistroExterno, Nome FROM ModuloOperadora WHERE NumRegistroExterno IS NOT NULL GROUP BY NumRegistroExterno, Nome ORDER BY Nome ASC";
            $busca = $conn->prepare($sql);
            $busca->execute();
            return $busca->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByNumRegistroExterno(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT NumRegistroExterno, Nome FROM ModuloOperadora WHERE NumRegistroExterno = ?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1, $this->NumRegistroExterno);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }
}