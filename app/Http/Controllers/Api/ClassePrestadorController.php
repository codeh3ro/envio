<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cardio\ClassePrestador;

class ClassePrestadorController extends Controller
{
  public function index()
  {
    $classes = ClassePrestador::all();
    return response()->json($classes, 200);
  }
}
