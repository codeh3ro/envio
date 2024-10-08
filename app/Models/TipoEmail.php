<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEmail extends Model
{
    use HasFactory;
    protected $connection = 'mysql';

    protected $table = 'tipo_email';

    protected $fillable = [
      'id',
      'nome',
    ];
}
