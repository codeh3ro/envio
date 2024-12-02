<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProducaoMedicaRequest;
use App\Jobs\JobCreatePdfProducaoMedica;
use App\Models\Cardio\ClassePrestador;
use App\Models\Cardio\DocFinanceiro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducaoMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      $classes = ClassePrestador::all('Codigo', 'Nome');

      return inertia('ProducaoMedica/Index', [
        'prestadores' => [
          'data' => []
        ],
        'params' => '',
        'count' => 0,
        'classes' => $classes,
        'old' => fn() => $request->old()
      ]);
    }

    public function searchAll(ProducaoMedicaRequest $request)
    {
      $request->validated();

      try {
        $params = $request->query;

        // Recupera os parâmetros do request
        $codigoContrato = $request->input('codigoContrato');
        $classePrestador = $request->input('classePrestador');
        $diaInicial = $request->input('diaInicial');
        $diaFinal = $request->input('diaFinal');
        $compFinanceira = $request->input('compFinanceira');

        $finalCompetencia = '';
        if ($compFinanceira != '') {
          list($mes, $ano) = explode('/', $compFinanceira);
          $finalCompetencia = $ano . $mes;
        }

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
          ->where('DocFinanceiro.CompFinanceira', $finalCompetencia)
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

        $count = $query->count();

        //return $query->toRawSql();

        $resultados = $query->paginate(30);

        $classes = ClassePrestador::all('Codigo', 'Nome');

        return inertia('ProducaoMedica/Index', [
          'prestadores' => $resultados,
          'params' => $params,
          'count' => $count,
          'classes' => $classes,
          'old' => $request->all()
        ]);

      }catch (\Exception $e){
        dd($e->getMessage());
      }
    }

    public function sendEmail(Request $request)
    {
      $users = collect();

      if ($request->input('massSend', false)) {

        // Busca todos os prestadores
        if($request->input('queryParams')){

          $params = $request->input('queryParams');

          // Recupera os parâmetros do request
          $codigoContrato = $params['codigoContrato'];
          $classePrestador = $params['classePrestador'];
          $diaInicial = $params['diaInicial'];
          $diaFinal = $params['diaFinal'];
          $compFinanceira = $params['compFinanceira'];

          $finalCompetencia = '';
          if($compFinanceira != '') {
            list($mes, $ano) = explode('/', $compFinanceira);
            $finalCompetencia = $ano . $mes;
          }

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
            ->where('DocFinanceiro.CompFinanceira', $finalCompetencia)
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

          $resultados = $query->get()->toArray();

        }

        foreach ($resultados as $result) {
          $users[] = [
            'email' => $result['email_pessoa']['Email'],
            'nome' => $result['Nome'],
            'competencia' => $result['CompFinanceira'],
            'contrato' => $result['Codigo'],
            'contratoFinanceiro' => $result['ContratoFinanceiro'],
            'autoId' => $result['AutoId']
          ];
        }
        $users = collect($users);

      } else {
        // Usa os dados recebidos do frontend
        $users = collect($request->input('users'));
      }

      foreach ($users as $user) {
        $email = is_array($user) ? $user['email'] : $user->email;
        $nome = is_array($user) ? $user['nome'] : $user->name;
        $competencia = is_array($user) ? $user['competencia'] : $user->competencia;
        $contrato = is_array($user) ? $user['contrato'] : $user->contrato;
        $contratoFinanceiro = is_array($user) ? $user['contratoFinanceiro'] : $user->contratoFinanceiro;
        $autoId = is_array($user) ? $user['autoId'] : $user->autoId;

        env('APP_ENV') === 'local' ? $email = env('MAIL_ADDRESS_TEST') : $email;

        JobCreatePdfProducaoMedica::dispatch($contratoFinanceiro, $autoId,$competencia, $contrato, $email, $nome)->onQueue('pdfs');

      }

      return redirect()->route('envioProducaoMedica.index')->with('success', 'E-mails enviados com sucesso!');
    }

}
