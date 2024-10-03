<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassePrestador extends Model
{
    use HasFactory;

    protected $table = 'ClassePrestador';
    protected $connection = 'sqlsrv';
    protected $primaryKey = 'Codigo';
    public $timestamps = false;

    const CREATED_AT = 'TelosRgDt';
    const UPDATED_AT = 'TelosUpDt';

    protected $fillable = [
      'Codigo',
      'Nome',
      'CodigoExterno',
      'Tipo',
      'TipoAtoFixoServico',
      'TipoAtoSolServico',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
      'ClasseSus',
      'ClasseContratoFinanceiro'
    ];
}
