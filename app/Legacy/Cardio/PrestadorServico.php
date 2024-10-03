<?php

namespace App\Legacy\Cardio;

class PrestadorServico
{
    private $AutoId;
    private $Pessoa;
    private $Codigo;
    private $CodigoReduzido;
    private $Classe;
    private $ContratoFinanceiro;
    private $InicioVigencia;

    /**
     * PrestadorServico constructor.
     * @param $AutoId
     * @param $Pessoa
     * @param $Codigo
     * @param $CodigoReduzido
     * @param $Classe
     * @param $ContratoFinanceiro
     * @param $InicioVigencia
     */
    public function __construct($AutoId='', $Pessoa='', $Codigo='', $CodigoReduzido='', $Classe='', $ContratoFinanceiro='', $InicioVigencia='')
    {
        $this->AutoId = $AutoId;
        $this->Pessoa = $Pessoa;
        $this->Codigo = $Codigo;
        $this->CodigoReduzido = $CodigoReduzido;
        $this->Classe = $Classe;
        $this->ContratoFinanceiro = $ContratoFinanceiro;
        $this->InicioVigencia = $InicioVigencia;
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
    public function getPessoa()
    {
        return $this->Pessoa;
    }

    /**
     * @param mixed $Pessoa
     */
    public function setPessoa($Pessoa)
    {
        $this->Pessoa = $Pessoa;
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
    public function getCodigoReduzido()
    {
        return $this->CodigoReduzido;
    }

    /**
     * @param mixed $CodigoReduzido
     */
    public function setCodigoReduzido($CodigoReduzido)
    {
        $this->CodigoReduzido = $CodigoReduzido;
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
    public function getContratoFinanceiro()
    {
        return $this->ContratoFinanceiro;
    }

    /**
     * @param mixed $ContratoFinanceiro
     */
    public function setContratoFinanceiro($ContratoFinanceiro)
    {
        $this->ContratoFinanceiro = $ContratoFinanceiro;
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
     * @throws Exception
     */
    public function getByCodigoReduzido(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM PrestadorServico WHERE CodigoReduzido=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->CodigoReduzido);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByPessoa(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM PrestadorServico WHERE Pessoa=? AND EExterno=0";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->Pessoa);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getByCodigoContratoFinanceiro(){
        try{
            $busca = DB_Cardio::select("SELECT p.Cnp, p.Nome, ps.CodigoReduzido, cf.AutoId idContratoFinanc, cf.Codigo CodigoContratoFinanc, p.DataNascimento, ps.*
                    FROM PrestadorServico ps
                        INNER JOIN Pessoa p on p.AutoId=ps.Pessoa
                        INNER JOIN ContratoFinanceiro cf on cf.AutoId=ps.ContratoFinanceiro
                    WHERE cf.Codigo=?",[$this->Codigo]);

            $array = $busca[0];

            if(!empty($array)){
                $objSusp = new SuspensaoVinculo();
                $objSusp->setPrestador($array->AutoId);
                $arraySusp = $objSusp->getByPrestador();

                if(!empty($arraySusp)){
                    return Array();//Prestador Suspenso
                }
            }
            return $array;//Prestador Ativo
        }
        catch(PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @param null $espec
     * @param null $cidade
     * @param null $nome
     * @return array
     * @throws Exception
     */
    public function getRedeByPesquisa($espec=null,$cidade=null,$nome=null,$rede=null,$qtdInicial=0, $qtdMaximo=999){
        try{
            $conn = DB_Cardio::conn();
            $where="";
            if(!empty($this->getClasse())){
                $where = "AND p.Classe = ".$this->getClasse();
            }
            if(!empty($espec)){
                $where.=" AND es.Especialidade='".$espec."'";
                $espec = "INNER JOIN EspecPrestador es on es.Prestador=p.AutoId";
            }
            if(!empty($cidade)){
                $where.=" AND ep.Cidade='".$cidade."' AND ep.ParaPublicacao=1 AND ep.FimVigencia IS NULL";
                $cidade = "INNER JOIN EnderecoPessoa ep on ep.Pessoa=p.Pessoa";
            }
            if(!empty($nome)){
                $where.=" AND pe.Nome LIKE '%".$nome."%'";
            }
            if(!empty($rede)){
                $where.=" AND re.TipoRede IN(".$rede.") AND re.FimVigencia IS NULL";
                $rede = "INNER JOIN RedeRefClPrestador re on re.PrestadorServico=p.AutoId";
            }

            $sql = "SELECT * FROM (SELECT ROW_NUMBER() OVER(ORDER BY pe.Nome ASC) linha, p.AutoId, p.Pessoa, p.Codigo, p.CodigoReduzido, p.Classe, p.AtendeUrgencia, p.ContratoFinanceiro, p.InicioVigencia, p.LcAt, p.EExterno, pe.Nome FROM PrestadorServico p
                                ".$espec."
                                ".$cidade."
                                ".$rede."
                                INNER JOIN Pessoa pe on pe.AutoId=p.Pessoa
                                WHERE p.EExterno=0 ".$where." GROUP BY p.AutoId, p.Pessoa, p.Codigo, p.CodigoReduzido, p.Classe, p.AtendeUrgencia, p.ContratoFinanceiro, p.InicioVigencia, p.LcAt, p.EExterno, pe.Nome) TabelaNumerada
                         WHERE linha BETWEEN ".($qtdInicial+1)." AND ".($qtdInicial+$qtdMaximo);
            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $arrayFinal = array();
            foreach ($array as $p){
                $objSusp = new SuspensaoVinculo();
                $objSusp->setPrestador($p['AutoId']);
                $arraySusp = $objSusp->getByPrestador();
                if(empty($arraySusp)){
                    array_push($arrayFinal, $p);
                }
            }

            foreach ($arrayFinal as $k => $p){
                $objPessoa = new Pessoa();
                $objPessoa->setAutoId($p['Pessoa']);
                $arrayPessoa = $objPessoa->getById();
                $arrayFinal[$k]['ObjPessoa']=$arrayPessoa;
            }

            foreach ($arrayFinal as $k => $p){
                $objEndreco = new EnderecoPessoa();
                $objEndreco->setPessoa($p['Pessoa']);
                $arrayEndreco = $objEndreco->getByPessoaByPublicacao();
                $arrayFinal[$k]['ObjEndereco']=$arrayEndreco;
            }

            foreach ($arrayFinal as $k => $p){
                $objRegistro = new RegistroPessoa();
                $objRegistro->setPessoa($p['Pessoa']);
                $objRegistro->setTipo(5);//Tipo CRM
                $arrayRegistro = $objRegistro->getByPessoaByTipo();
                $arrayFinal[$k]['ObjCRM']=$arrayRegistro;
            }

            foreach ($arrayFinal as $k => $p){
                $objEspec = new EspecPrestador();
                $objEspec->setPrestador($p['AutoId']);
                $arrayEspec = $objEspec->getAllByPrestador();
                $arrayFinal[$k]['ObjEspecialidade']=$arrayEspec;
            }

            foreach ($arrayFinal as $k => $p){
                $objArea = new AreaAtuacaoEspecPrestador();
                $arrayFinal[$k]['ObjEspec_P']=null;
                foreach ($p['ObjEspecialidade'] as $j => $es){
                    $objArea->setEspecPrestador($es['AutoId']);
                    $arrayArea = $objArea->getByEspecP();
                    $arrayFinal[$k]['ObjEspec_P'][]=$arrayArea;
                }
            }

            foreach ($arrayFinal as $k => $p){
                $objTitulo = new TituloEspecialistaPrestador();
                $objTitulo->setPrestador($p['AutoId']);
                $arrayTitulo = $objTitulo->getAllByPrestador();
                $arrayFinal[$k]['ObjTitulacao']=$arrayTitulo;
            }

            return $arrayFinal;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function getRedeByPesquisaAndClasse($espec=null,$cidade=null,$nome=null,$rede=null){
        try{
            $conn = DB_Cardio::conn();

            $where = "AND p.Classe IN(1,21) ";

            if(!empty($espec)){
                $where.=" AND es.Especialidade='".$espec."'";
                $espec = "INNER JOIN EspecPrestador es on es.Prestador=p.AutoId";
            }
            if(!empty($cidade)){
                $where.=" AND ep.Cidade='".$cidade."' AND ep.ParaPublicacao=1 AND ep.FimVigencia IS NULL";
                $cidade = "INNER JOIN EnderecoPessoa ep on ep.Pessoa=p.Pessoa";
            }
            if(!empty($nome)){
                $where.=" AND pe.Nome LIKE '%".$nome."%'";
            }
            if(!empty($rede)){
                $where.=" AND re.TipoRede IN(".$rede.") AND re.FimVigencia IS NULL";
                $rede = "INNER JOIN RedeRefClPrestador re on re.PrestadorServico=p.AutoId";
            }

            $sql = "SELECT * FROM (SELECT row_number() OVER (ORDER BY pe.Nome ASC) AS row_number, p.AutoId, p.Pessoa, p.Codigo, p.CodigoReduzido, p.Classe, p.AtendeUrgencia, p.ContratoFinanceiro, p.InicioVigencia, p.LcAt, p.EExterno, pe.Nome FROM PrestadorServico p
                    ".$espec."
                    ".$cidade."
                    ".$rede."
                    INNER JOIN Pessoa pe on pe.AutoId=p.Pessoa
                    WHERE p.EExterno=0 ".$where." GROUP BY p.AutoId, p.Pessoa, p.Codigo, p.CodigoReduzido, p.Classe, p.AtendeUrgencia, p.ContratoFinanceiro, p.InicioVigencia, p.LcAt, p.EExterno, pe.Nome) TabelaNumerada WHERE row_number BETWEEN 0 AND 50";
            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            $arrayFinal = array();
            foreach ($array as $p){
                $objSusp = new SuspensaoVinculo();
                $objSusp->setPrestador($p['AutoId']);
                $arraySusp = $objSusp->getByPrestador();
                if(empty($arraySusp)){
                    array_push($arrayFinal, $p);
                }
            }

            foreach ($arrayFinal as $k => $p){
                $objPessoa = new Pessoa();
                $objPessoa->setAutoId($p['Pessoa']);
                $arrayPessoa = $objPessoa->getById();
                $arrayFinal[$k]['ObjPessoa']=$arrayPessoa;
            }

            foreach ($arrayFinal as $k => $p){
                $objEndreco = new EnderecoPessoa();
                $objEndreco->setPessoa($p['Pessoa']);
                $arrayEndreco = $objEndreco->getByPessoaByPublicacao();
                $arrayFinal[$k]['ObjEndereco']=$arrayEndreco;
            }

            foreach ($arrayFinal as $k => $p){
                $objRegistro = new RegistroPessoa();
                $objRegistro->setPessoa($p['Pessoa']);
                $objRegistro->setTipo(5);//Tipo CRM
                $arrayRegistro = $objRegistro->getByPessoaByTipo();
                $arrayFinal[$k]['ObjCRM']=$arrayRegistro;
            }

            foreach ($arrayFinal as $k => $p){
                $objEspec = new EspecPrestador();
                $objEspec->setPrestador($p['AutoId']);
                $arrayEspec = $objEspec->getAllByPrestador();
                $arrayFinal[$k]['ObjEspecialidade']=$arrayEspec;
            }

            foreach ($arrayFinal as $k => $p){
                $objArea = new AreaAtuacaoEspecPrestador();
                $arrayFinal[$k]['ObjEspec_P']=null;
                foreach ($p['ObjEspecialidade'] as $j => $es){
                    $objArea->setEspecPrestador($es['AutoId']);
                    $arrayArea = $objArea->getByEspecP();
                    $arrayFinal[$k]['ObjEspec_P'][]=$arrayArea;
                }
            }

            foreach ($arrayFinal as $k => $p){
                $objTitulo = new TituloEspecialistaPrestador();
                $objTitulo->setPrestador($p['AutoId']);
                $arrayTitulo = $objTitulo->getAllByPrestador();
                $arrayFinal[$k]['ObjTitulacao']=$arrayTitulo;
            }

            return $arrayFinal;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getByAutoId(){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT p.* FROM PrestadorServico p
                    INNER JOIN Pessoa pe on pe.AutoId=p.Pessoa
                    WHERE p.EExterno=0 AND p.AutoId=? ORDER BY pe.Nome ";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->AutoId);
            $busca->execute();
            $array = $busca->fetch(PDO::FETCH_ASSOC);
            $arrayFinal = array();

            $objSusp = new SuspensaoVinculo();
            $objSusp->setPrestador($array['AutoId']);
            $arraySusp = $objSusp->getByPrestador();
            if(empty($arraySusp)){
                $arrayFinal=$array;
            }

            $objPessoa = new Pessoa();
            $objPessoa->setAutoId($array['Pessoa']);
            $arrayPessoa = $objPessoa->getById();
            $arrayFinal['ObjPessoa']=$arrayPessoa;

            $objEndreco = new EnderecoPessoa();
            $objEndreco->setPessoa($array['Pessoa']);
            $arrayEndreco = $objEndreco->getByPessoaByPublicacao();
            $arrayFinal['ObjEndereco']=$arrayEndreco;

            $objRegistro = new RegistroPessoa();
            $objRegistro->setPessoa($array['Pessoa']);
            $objRegistro->setTipo(5);//Tipo CRM
            $arrayRegistro = $objRegistro->getByPessoaByTipo();
            $arrayFinal['ObjCRM']=$arrayRegistro;

            $objEspec = new EspecPrestador();
            $objEspec->setPrestador($array['AutoId']);
            $arrayEspec = $objEspec->getAllByPrestador();
            $arrayFinal['ObjEspecialidade']=$arrayEspec;

            return $arrayFinal;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /** não editar esse metodo
     * metodo especifico de listagem de prestadores para o portal*/
    public function getAllAtivos($tipo=null){
        try{
            $conn = DB_Cardio::conn();
            $sql = "SELECT * FROM PrestadorServico p WHERE Classe IN (1) AND LcAt=215 AND CodigoReduzido<>'99999999' AND AutoId not in(SELECT p.AutoId FROM SuspensaoVinculo WHERE Prestador=p.AutoId AND DataReativacao IS NULL AND DataSuspensao<=GETDATE())";
            $busca = $conn->prepare($sql);
            $busca->execute();
            $array = $busca->fetchAll(PDO::FETCH_ASSOC);
            /*echo "<pre>";
            print_r($array);*/

            $novoArray = Array();
            foreach ($array as $p){
                $objSuspVinc = new SuspensaoVinculo();
                $objSuspVinc->setPrestador($p['AutoId']);
                if($objSuspVinc->verificaSuspensoByPrestador()==false){
                    /*$objEspecialidade = new EspecPrestador();
                    $objEspecialidade->setPrestador($p['AutoId']);
                    $p['objEspecialidade'] = $objEspecialidade->getAllByPrestador();*/

                    $objCNES = new RegistroPessoa();
                    $objCNES->setPessoa($p['Pessoa']);
                    $objCNES->setTipo(26);
                    $p['objCNES'] = $objCNES->getByPessoaByTipo();
                    $objCNES->setTipo(5);
                    $p['objCRM'] = $objCNES->getByPessoaByTipo();

                    $objPessoa = new Pessoa();
                    $objPessoa->setAutoId($p['Pessoa']);
                    $p['objPessoa']=$objPessoa->getById();

                    array_push($novoArray, $p);
                }
            }

            return $novoArray;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    public function buscaPrestador($nome, $crm)
    {

        $nome = str_replace(" ","%", $nome);
        if (!empty($nome)){
            $exec = "select ps.Pessoa, p.Nome, ps.Classe, ps.Codigo, ps.CodigoReduzido from PrestadorServico ps
                    inner join Pessoa p on p.AutoId = ps.Pessoa
                    where ps.Classe in (1,2,3,4) and p.Nome like '$nome%'";
        }elseif(!empty($crm)){
            $exec = "select ps.Pessoa, p.Nome, ps.Classe, ps.Codigo, ps.CodigoReduzido, rp.Numero, rp.UFExp from PrestadorServico ps
                    inner join Pessoa p on p.AutoId = ps.Pessoa
                    left join RegistroPessoa rp on rp.Pessoa = p.AutoId
                    where ps.Classe in (1,2,3,4) and rp.Numero='$crm' and rp.Tipo=5";
        }

        try {
            $sql = $exec;
            $sql = DB_Cardio::conn()->prepare($sql);
            $sql->execute();

            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
            $dadosFinal=array();
            foreach ($dados as $p) {
                $objCNES = new RegistroPessoa();
                $objCNES->setPessoa($p['Pessoa']);
                $objCNES->setTipo(5);
                $retorno = $objCNES->getByPessoaByTipo();
                $p['Numero']=$retorno['Numero'];
                $p['UFExp']=$retorno['UFExp'];
                array_push($dadosFinal,$p);
            }


            return $dadosFinal;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

}
