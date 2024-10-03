<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'Pessoa';
    protected $primaryKey = 'AutoId';
    const CREATED_AT = 'TelosRgDt';
    const UPDATED_AT = 'TelosUpDt';
    protected $fillable = [
      'AutoId',
      'Nome',
      'NomeReduzido',
      'Tipo',
      'Cnp',
      'Classe',
      'FaixaReceita',
      'FaixaPatrimonial',
      'CanalDivulgacao',
      'ComplCanalDivulg',
      'ClassifOrigem',
      'Url',
      'DataNascimento',
      'Sexo',
      'EstadoCivil',
      'Escolaridade',
      'Mae',
      'Pai',
      'Conjuge',
      'NomePai',
      'NomeMae',
      'NomeConjuge',
      'Nacionalidade',
      'Naturalidade',
      'NaturezaOcup',
      'OcupProfissional',
      'DataFalecimento',
      'TipoExcecao',
      'JuntaComercial',
      'DataFundacao',
      'CapitalSocial',
      'Regiao',
      'RamoAtividade',
      'SegmentoMercado',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
      'CodExecutanteInf',
      'DataAdocao',
      'ParticipProgCert',
      'ProtocoloConsultaSRF',
      'DataConsultaSRF',
      'DigVerificadorSRF',
      'SituacaoSRF',
      'NomeFantasia',
      'NomeSocial',
      'RendaMensal',
      'ECaepf',
      'NomeSocialReduzido',
      'SexoSocial',
      'UsuarioAuditorMedicoEnfermeiro',
      'SituacaoReceitaFederal',
    ];
}
