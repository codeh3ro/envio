<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cardio\DocFinanceiro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducaoMedicaController extends Controller
{
    public function index()
    {

    }

    public function list(Request $request)
    {
      // Recupera os parâmetros do request
      $codigoContrato = $request->input('codigoContrato');
      $classePrestador = $request->input('classePrestador');
      $diaInicial = $request->input('diaInicial');
      $diaFinal = $request->input('diaFinal');
      $compFinanceira = $request->input('compFinanceira');

      $query = DocFinanceiro::with('EmailPessoa');

      $query->select([
        'ContratoFinanceiro.Codigo',
        'Pessoa.Nome',
        'Pessoa.Cnp',
        'SituacaoDocumento.Nome as SituacaoDoc',
        DB::raw('DAY(DocFinanceiro.DataVencimento) AS DIA'),
        'ContratoFinanceiro.Pessoa as PessoaID',
        'DocFinanceiro.*'
      ])
        ->join('ContratoFinanceiro', 'ContratoFinanceiro.AutoId', '=', 'DocFinanceiro.ContratoFinanceiro')
        ->join('Pessoa', 'Pessoa.AutoId', '=', 'ContratoFinanceiro.Pessoa')
        ->join('SituacaoDocumento', 'SituacaoDocumento.Codigo', '=', 'DocFinanceiro.SituacaoDocumento')
        ->join('PrestadorServico', 'PrestadorServico.ContratoFinanceiro', '=', 'ContratoFinanceiro.AutoId')
        ->where('DocFinanceiro.CompFinanceira', $compFinanceira)
        ->where('DocFinanceiro.Classe', 3);

      $query->when($codigoContrato, function ($q) use ($codigoContrato) {
        $q->where('ContratoFinanceiro.Codigo', $codigoContrato);
        //$q->where('DocFinanceiro.ContratoFinanceiro', $codigoContrato);
      });
      $query->when($classePrestador, function ($q) use ($classePrestador) {
        $q->where('PrestadorServico.Classe', $classePrestador);
      });
      $query->when(!empty($diaInicial) && !empty($diaFinal), function ($q) use ($diaInicial, $diaFinal) {
        $q->whereBetween(DB::raw('DAY(DocFinanceiro.DataVencimento)'), [$diaInicial, $diaFinal]);
      });

      $query->orderBy('ContratoFinanceiro.Codigo');

      $resultados = $query->paginate(5);

      return inertia()->render('ProducaoMedica/Index', [
        'lista' => $resultados
      ]);

      //return response()->json($resultados);
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

    }
    public function search(Request $request)
    {

    }
    public function filter(Request $request)
    {

    }

}
