<?php

namespace App\Legacy\Cardio;

use Illuminate\Support\Facades\DB;

class DB_Cardio
{
  public static function conn()
  {
    // Utilize a conexão do Laravel com o banco de dados
    return DB::connection('sqlsrv'); // ou a conexão que você configurou no .env
  }

  public static function select($query, $bindings = [])
  {
    return self::conn()->select($query, $bindings);
  }

  public static function statement($query, $bindings = [])
  {
    return self::conn()->statement($query, $bindings);
  }
}
