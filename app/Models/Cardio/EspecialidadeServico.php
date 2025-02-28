<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspecialidadeServico extends Model
{
    use HasFactory;

    protected $table = 'EspecialidadeServico';
    protected $connection = 'sqlsrv';
    protected $primaryKey = 'AutoId';
    public $timestamps = false;

    const CREATED_AT = 'TelosRgDt';
    const UPDATED_AT = 'TelosUpDt';

    protected $fillable = [
      'AutoId',
      'Codigo',
      'Nome',
      'NomeReduzido',
      'IdadeInicialPermitida',
      'IdadeFinalPermitida',
      'SexoPermitido',
      'CodigoExterno',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
      'PeriodoAtendMinimo',
      'GlosaConsultaPorTipoProc',
      'GlosaApenasMesAtendimento',
      'CFM',
      'CBO',
    ];
}
