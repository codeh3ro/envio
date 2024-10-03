<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoFinanceiro extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'ContratoFinanceiro';
    protected $primaryKey = 'AutoId';
    const CREATED_AT = 'telosRgDt';
    const UPDATED_AT = 'telosUpDt';

    protected $fillable = [
      'AutoId',
      'Codigo',
      'Pessoa',
      'Classe',
      'PracaCobranca',
      'LocalCobranca',
      'Banco',
      'Agencia',
      'ContaCorrente',
      'SufixoContabil',
      'InicioVigencia',
      'CamaraCompensacao',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
      'CodigoRetencao',
      'ContratoEncContas',
      'CodExterno',
      'Pai',
      'FimVigencia',
      'TipoNegRetencao',
      'ConverteDivida',
      'TipoRespInad',
      'PessoaEncConta',
      'BancoCamaraCompensacao',
      'AgenciaCamaraCompensacao',
      'ContaCamaraCompensacao',
      'IdDebitoAutomatico',
      'EnviarEmail'
    ];
}
