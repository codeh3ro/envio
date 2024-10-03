<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailPessoa extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'EmailPessoa';
    protected $primaryKey = 'AutoId';
    const CREATED_AT = 'TelosRgDt';
    const UPDATED_AT = 'TelosUpDt';

    protected $fillable = [
      'AutoId',
      'Pessoa',
      'Seq',
      'Email',
      'InicioVigencia',
      'FimVigencia',
      'TelosRgUs',
      'TelosRgDt',
      'TelosUpUs',
      'TelosUpDt',
      'TelosCtrler',
      'Endereco',
      'EnviarEmail'
    ];

}
