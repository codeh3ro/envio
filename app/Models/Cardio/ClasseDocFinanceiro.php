<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseDocFinanceiro extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'ClasseDocFinanceiro';
    protected $primaryKey = 'Codigo';
    public $timestamps = false;
    const CREATED_AT = 'TelosRgDt';
    const UPDATED_AT = 'TelosUpDt';

    protected $fillable = [
      'Codigo',
      'Nome',
      'TipoMovimentoFinan',
      'Grupo',
      'Ajuste',
      'Fiscal',
      'Cobranca',
      'Caixa',
      'RequerAutorizacao',
      'NomeArqConfiguracao',
      'ClasseMovCC',
      'TipoPessoa',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
      'ClasseAproEncContas',
      'ClasseDocAgrupado',
      'ClasseDocAjAcrescimo',
      'NomeArqCfgEtiqueta',
      'ClasseAproAcresRepassado',
      'ClasseAproDescRepassado',
      'TipoDifImpFatura',
      'GrupoNDC'
    ];
}
