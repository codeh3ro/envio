<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacaoDocumento extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'SituacaoDocumento';
    protected $primaryKey = 'Codigo';
    const CREATED_AT = 'TelosRgDt';
    const UPDATED_AT = 'TelosUpDt';

    protected $fillable = [
      'Codigo',
      'Nome',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
    ];
}
