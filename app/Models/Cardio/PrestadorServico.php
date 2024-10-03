<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestadorServico extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'PrestadorServico';
    protected $primaryKey = 'AutoId';
    const CREATED_AT = 'telosRgDt';
    const UPDATED_AT = 'telosUpDt';
    protected $fillable = [
      'AutoId',
      'Pessoa',
      'Codigo',
      'CodigoReduzido',
      'Classe',
      'AtendeUrgencia',
      'ContratoFinanceiro',
      'CCorrenteAgencia',
      'CCorrenteNumero',
      'InicioVigencia',
      'ELcAt',
      'LcAt',
      'Categoria',
      'SeqGeracao',
      'AtendeObstetricia',
      'AltoCusto',
      'ClasseContabil',
      'RestrictoCanalAtend',
      'DataInicioContrato',
      'TipoClasseEstabelecimento',
      'TipoContratualizacao',
      'Recebedor',
      'CodigoIntercambio',
      'NumRegistroExterno',
      'DataRegistroExterno',
      'PertenceRedeInter',
      'PertenceRedeRegional',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
      'NrLeitosTotais',
      'NrLeitosContrat',
      'NrLeitosPsiquiat',
      'NrUtiAdulto',
      'NrUTINeoNatal',
      'NrUtiPediatria',
      'TipoDisponibilidade',
      'AutoLogin',
      'EExterno',
      'RedeAcidenteTrabalho',
      'TabelaPropria',
      'PerfilAssistencial',
      'VinculoObrigatorio',
      'NumMeses',
      'ContestacaoAutomatizada',
      'NrLeitosIntermed',
      'DataOpcaoFgts',
      'PrestAcred',
      'InstituicaoAcreditadora',
      'NivelAcreditacao',
      'EFederacao',
      'CodigoExterno',
      'NotEventosAdversos',
      'NrLeitosTotClinic',
      'NrLeitosTotCirur',
      'NrLeitosTotObstr',
      'NrLeitosTotPediat',
      'NrLeitosTotPsiqu',
      'NrLeitosHospDia',
      'ParticipQualiss',
      'Residencia',
      'DataObtencaoResidencia',
      'ParticipRedeAssistFedInt',
      'UtilizaBiometria',
      'CADU',
      'PublicaANS',
      'LoginWSD',
      'Inativo',
      'NrLeitosIntermedOriginal',
      'SaudeOcupacional',
      'GuiaMedico',
      'ISO9001',
      'PtuA520Batch',
      'PtuA520Liberado',
      'AtendeTelessaudeIntercambio',
      'DataAprovacaoA400'
    ];
}
