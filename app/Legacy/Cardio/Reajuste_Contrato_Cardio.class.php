<?php

/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 02/07/2017
 * Time: 15:41
 */
class Reajuste_Contrato_Cardio
{
    private $id;
    private $contratofinanceiro;
    private $referencia;
    private $referencia_inicial;
    private $referencia_final;
    private $receita_total_periodo;
    private $custo_assistencial_periodo;
    private $coparticipacao_periodo;
    private $percent_sinistro;
    private $percent_reajuste;
    private $tipo_indice;
    private $observacao;
    private $usuario_registro;
    private $data_registro;
    private $usuario_alteracao;
    private $data_alteracao;
    private $situacao;
    private $oficio_reajuste;
    private $memoria_calculo;

    /**
     * Reajuste_Contrato constructor.
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
    public function getContratofinanceiro()
    {
        return $this->contratofinanceiro;
    }

    /**
     * @param mixed $contratofinanceiro
     */
    public function setContratofinanceiro($contratofinanceiro)
    {
        $this->contratofinanceiro = $contratofinanceiro;
    }

    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @param mixed $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * @return mixed
     */
    public function getReferenciaInicial()
    {
        return $this->referencia_inicial;
    }

    /**
     * @param mixed $referencia_inicial
     */
    public function setReferenciaInicial($referencia_inicial)
    {
        $this->referencia_inicial = $referencia_inicial;
    }

    /**
     * @return mixed
     */
    public function getReferenciaFinal()
    {
        return $this->referencia_final;
    }

    /**
     * @param mixed $referencia_final
     */
    public function setReferenciaFinal($referencia_final)
    {
        $this->referencia_final = $referencia_final;
    }

    /**
     * @return mixed
     */
    public function getReceitaTotalPeriodo()
    {
        return $this->receita_total_periodo;
    }

    /**
     * @param mixed $receita_total_periodo
     */
    public function setReceitaTotalPeriodo($receita_total_periodo)
    {
        $this->receita_total_periodo = $receita_total_periodo;
    }

    /**
     * @return mixed
     */
    public function getCustoAssistencialPeriodo()
    {
        return $this->custo_assistencial_periodo;
    }

    /**
     * @param mixed $custo_assistencial_periodo
     */
    public function setCustoAssistencialPeriodo($custo_assistencial_periodo)
    {
        $this->custo_assistencial_periodo = $custo_assistencial_periodo;
    }

    /**
     * @return mixed
     */
    public function getCoparticipacaoPeriodo()
    {
        return $this->coparticipacao_periodo;
    }

    /**
     * @param mixed $coparticipacao_periodo
     */
    public function setCoparticipacaoPeriodo($coparticipacao_periodo)
    {
        $this->coparticipacao_periodo = $coparticipacao_periodo;
    }

    /**
     * @return mixed
     */
    public function getPercentSinistro()
    {
        return $this->percent_sinistro;
    }

    /**
     * @param mixed $percent_sinistro
     */
    public function setPercentSinistro($percent_sinistro)
    {
        $this->percent_sinistro = $percent_sinistro;
    }

    /**
     * @return mixed
     */
    public function getPercentReajuste()
    {
        return $this->percent_reajuste;
    }

    /**
     * @param mixed $percent_reajuste
     */
    public function setPercentReajuste($percent_reajuste)
    {
        $this->percent_reajuste = $percent_reajuste;
    }

    /**
     * @return mixed
     */
    public function getTipoIndice()
    {
        return $this->tipo_indice;
    }

    /**
     * @param mixed $tipo_indice
     */
    public function setTipoIndice($tipo_indice)
    {
        $this->tipo_indice = $tipo_indice;
    }

    /**
     * @return mixed
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * @param mixed $observacao
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }

    /**
     * @return mixed
     */
    public function getUsuarioRegistro()
    {
        return $this->usuario_registro;
    }

    /**
     * @param mixed $usuario_registro
     */
    public function setUsuarioRegistro($usuario_registro)
    {
        $this->usuario_registro = $usuario_registro;
    }

    /**
     * @return mixed
     */
    public function getDataRegistro()
    {
        return $this->data_registro;
    }

    /**
     * @param mixed $data_registro
     */
    public function setDataRegistro($data_registro)
    {
        $this->data_registro = $data_registro;
    }

    /**
     * @return mixed
     */
    public function getUsuarioAlteracao()
    {
        return $this->usuario_alteracao;
    }

    /**
     * @param mixed $usuario_alteracao
     */
    public function setUsuarioAlteracao($usuario_alteracao)
    {
        $this->usuario_alteracao = $usuario_alteracao;
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
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    /**
     * @return mixed
     */
    public function getOficioReajuste()
    {
        return $this->oficio_reajuste;
    }

    /**
     * @param mixed $oficio_reajuste
     */
    public function setOficioReajuste($oficio_reajuste)
    {
        $this->oficio_reajuste = $oficio_reajuste;
    }

    /**
     * @return mixed
     */
    public function getMemoriaCalculo()
    {
        return $this->memoria_calculo;
    }

    /**
     * @param mixed $memoria_calculo
     */
    public function setMemoriaCalculo($memoria_calculo)
    {
        $this->memoria_calculo = $memoria_calculo;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function add(){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "INSERT INTO reajuste_contrato (contratofinanceiro,
                                                    referencia,
                                                    referencia_inicial,
                                                    referencia_final,
                                                    receita_total_periodo,
                                                    custo_assistencial_periodo,
                                                    coparticipacao_periodo,
                                                    percent_sinistro,
                                                    percent_reajuste,
                                                    tipo_indice,
                                                    observacao,
                                                    data_registro,
                                                    usuario_registro,
                                                    situacao,
                                                    oficio_reajuste,
                                                    memoria_calculo)
                                                    VALUES
                                                    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $insert = $conn->prepare($sql);
            $insert->bindValue(1,$this->contratofinanceiro);
            $insert->bindValue(2,$this->referencia);
            $insert->bindValue(3,$this->referencia_inicial);
            $insert->bindValue(4,$this->referencia_final);
            $insert->bindValue(5,$this->receita_total_periodo);
            $insert->bindValue(6,$this->custo_assistencial_periodo);
            $insert->bindValue(7,$this->coparticipacao_periodo);
            $insert->bindValue(8,$this->percent_sinistro);
            $insert->bindValue(9,$this->percent_reajuste);
            $insert->bindValue(10,$this->tipo_indice);
            $insert->bindValue(11,$this->observacao);
            $insert->bindValue(12,$this->data_registro);
            $insert->bindValue(13,$this->usuario_registro);
            $insert->bindValue(14,$this->situacao);
            $insert->bindValue(15,$this->oficio_reajuste);
            $insert->bindValue(16,$this->memoria_calculo);
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

    /**
     * @return array
     * @throws Exception
     */
    public function getAll(){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "SELECT * FROM reajuste_contrato";
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
    public function getAllByContrato(){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "SELECT * FROM reajuste_contrato WHERE contratofinanceiro=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->contratofinanceiro);
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
    public function getAllByContratoPesquisa(){
        try{
            $parametro='';
            if(!empty($this->referencia_inicial)){
                $parametro=' AND referencia_inicial="'.$this->referencia_inicial.'"';
            }
            if(!empty($this->referencia_final)){
                $parametro=' AND referencia_final="'.$this->referencia_final.'"';
            }

            $conn = DB_Autenticacao::conn();
            $sql = "SELECT * FROM reajuste_contrato WHERE contratofinanceiro=? ".$parametro;
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->contratofinanceiro);
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
    public function getAllAtivosByContrato(){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "SELECT * FROM reajuste_contrato WHERE contratofinanceiro=? AND situacao=1";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->contratofinanceiro);
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
    public function getById(){
        try{
            $conn = DB_Autenticacao::conn();
            $sql = "SELECT * FROM reajuste_contrato WHERE id=?";
            $busca = $conn->prepare($sql);
            $busca->bindValue(1,$this->id);
            $busca->execute();
            return $busca->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function update(){
        try{
            $conn = DB_Autenticacao::conn();

            $array = $this->getById();/** VERIFICAR ALTERAÇÕES PARA GERAR LOG */

            $sql = "UPDATE reajuste_contrato SET contratofinanceiro=?,
                                                    referencia=?,
                                                    referencia_inicial=?,
                                                    referencia_final=?,
                                                    receita_total_periodo=?,
                                                    custo_assistencial_periodo=?,
                                                    coparticipacao_periodo=?,
                                                    percent_sinistro=?,
                                                    percent_reajuste=?,
                                                    tipo_indice=?,
                                                    observacao=?,
                                                    data_alteracao=?,
                                                    usuario_alteracao=?,
                                                    situacao=?,
                                                    oficio_reajuste=?,
                                                    memoria_calculo=?
                                                    WHERE id=?";
            $update = $conn->prepare($sql);
            $update->bindValue(1,$this->contratofinanceiro);
            $update->bindValue(2,$this->referencia);
            $update->bindValue(3,$this->referencia_inicial);
            $update->bindValue(4,$this->referencia_final);
            $update->bindValue(5,$this->receita_total_periodo);
            $update->bindValue(6,$this->custo_assistencial_periodo);
            $update->bindValue(7,$this->coparticipacao_periodo);
            $update->bindValue(8,$this->percent_sinistro);
            $update->bindValue(9,$this->percent_reajuste);
            $update->bindValue(10,$this->tipo_indice);
            $update->bindValue(11,$this->observacao);
            $update->bindValue(12,$this->data_alteracao);
            $update->bindValue(13,$this->usuario_alteracao);
            $update->bindValue(14,$this->situacao);
            $update->bindValue(15,$this->oficio_reajuste);
            $update->bindValue(16,$this->memoria_calculo);
            $update->bindValue(17,$this->id);
            if($update->execute()){
                $log=2;
                if($this->logAlteracao($array)){
                    $log=1;/** GRAVA STATUS DO LOG CASO NECESSÁRIO FUTURAMENTE (1 SUCESSO, 2 ERRO)*/
                }
                return true;
            }
            return false;
        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

    /**
     * @param $array
     * @return bool
     * @throws Exception
     */
    private function logAlteracao($array){
        try{
            $alteracao='';
            if($array['referencia']!=$this->referencia){
                $alteracao.='referencia = "'.$this->referencia.'"<br/>';
            }
            if($array['referencia_inicial']!=$this->referencia_inicial){
                $alteracao.='referencia_inicial = "'.$this->referencia_inicial.'"<br/>';
            }
            if($array['referencia_final']!=$this->referencia_final){
                $alteracao.='referencia_final = "'.$this->referencia_final.'"<br/>';
            }
            if($array['receita_total_periodo']!=$this->receita_total_periodo){
                $alteracao.='receita_total_periodo = "'.$this->receita_total_periodo.'"<br/>';
            }
            if($array['custo_assistencial_periodo']!=$this->custo_assistencial_periodo){
                $alteracao.='custo_assistencial_periodo = "'.$this->custo_assistencial_periodo.'"<br/>';
            }
            if($array['coparticipacao_periodo']!=$this->coparticipacao_periodo){
                $alteracao.='coparticipacao_periodo = "'.$this->coparticipacao_periodo.'"<br/>';
            }
            if($array['percent_sinistro']!=$this->percent_sinistro){
                $alteracao.='percent_sinistro = "'.$this->percent_sinistro.'"<br/>';
            }
            if($array['percent_reajuste']!=$this->percent_reajuste){
                $alteracao.='percent_reajuste = "'.$this->percent_reajuste.'"<br/>';
            }
            if($array['tipo_indice']!=$this->tipo_indice){
                $alteracao.='tipo_indice = "'.$this->tipo_indice.'"<br/>';
            }
            if($array['observacao']!=$this->observacao){
                $alteracao.='observacao = "'.$this->observacao.'"<br/>';
            }
            if($array['situacao']!=$this->situacao){
                $alteracao.='situacao = "'.$this->situacao.'"<br/>';
            }
            if($array['oficio_reajuste']!=$this->oficio_reajuste){
                $alteracao.='oficio_reajuste = "'.$this->oficio_reajuste.'"<br/>';
            }
            if($array['memoria_calculo']!=$this->memoria_calculo){
                $alteracao.='memoria_calculo = "'.$this->memoria_calculo.'"<br/>';
            }

            if(!empty($alteracao)){
                $objLogReajuste = new Log_Reajuste_Cardio();
                $objLogReajuste->setIdReajuste($array['id']);
                $objLogReajuste->setDataAlteracao(date('Y-m-d H:i:s'));
                $objLogReajuste->setIdUsuario($this->usuario_alteracao);
                $objLogReajuste->setAlteracao($alteracao);
                if($objLogReajuste->add()){
                    return true;
                }
            }
            return false;

        }
        catch (PDOException $ex){
            throw new Exception($ex);
        }
    }

}