<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProducaoMedicaRequest;
use App\Jobs\JobSendAnexoEmail;
use App\Models\Cardio\ClassePrestador;
use App\Models\Cardio\DocFinanceiro;
use App\Models\Cardio\EspecialidadeServico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EnvioAnexoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      $classes = ClassePrestador::all('Codigo', 'Nome');
      $especialidades = EspecialidadeServico::all('Codigo', 'Nome');
      
      return inertia('Anexo/Index', [
        'prestadores' => [
          'data' => []
        ],
        'params' => '',
        'count' => 0,
        'classes' => $classes,
        'especialidades' => $especialidades,
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
        $nome = $request->input('nome');
        $classePrestador = $request->input('classePrestador');
        $especialidade = $request->input('especialidade');
        $diaInicial = $request->input('diaInicial');
        $diaFinal = $request->input('diaFinal');
        $compFinanceira = $request->input('compFinanceira');

        $finalCompetencia = '';
        if ($compFinanceira != '') {
          list($mes, $ano) = explode('/', $compFinanceira);
          $finalCompetencia = $ano . $mes;
        }

        $query = DocFinanceiro::with('EmailPessoa');

        // $query->select([
        //   'ContratoFinanceiro.Codigo',
        //   'Pessoa.Nome',
        //   'Pessoa.Cnp',
        //   'SituacaoDocumento.Nome as SituacaoDoc',
        //   DB::raw('DAY(DocFinanceiro.DataVencimento) AS DIA'),
        //   'ContratoFinanceiro.Pessoa as PessoaID',
        //   'DocFinanceiro.*'
        // ])
        //   ->join('ContratoFinanceiro', 'ContratoFinanceiro.AutoId', '=', 'DocFinanceiro.ContratoFinanceiro')
        //   ->join('Pessoa', 'Pessoa.AutoId', '=', 'ContratoFinanceiro.Pessoa')
        //   ->join('SituacaoDocumento', 'SituacaoDocumento.Codigo', '=', 'DocFinanceiro.SituacaoDocumento')
        //   ->join('PrestadorServico', 'PrestadorServico.ContratoFinanceiro', '=', 'ContratoFinanceiro.AutoId')
        //   ->where('DocFinanceiro.CompFinanceira', $finalCompetencia)
        //   ->where('DocFinanceiro.Classe', 3);



        $query->select([
          'ContratoFinanceiro.Codigo',
          'Pessoa.Nome',
          'Pessoa.Cnp',
          'SituacaoDocumento.Nome as SituacaoDoc',
          DB::raw('DAY(DocFinanceiro.DataVencimento) AS DIA'),
          'ContratoFinanceiro.Pessoa AS PessoaID',
          'DocFinanceiro.AutoId',
          'DocFinanceiro.Classe',
          'DocFinanceiro.NumeroProvisorio',
          'DocFinanceiro.NumDocFornec',
          'DocFinanceiro.Numero',
          'DocFinanceiro.Pessoa',
          'DocFinanceiro.ContratoFinanceiro',
          'DocFinanceiro.CompFinanceira',
          'DocFinanceiro.CompSeq',
          'DocFinanceiro.DataEmissao',
          'DocFinanceiro.DataVencimento',
          'DocFinanceiro.TipoNegJuros',
          'DocFinanceiro.TipoNegMultas',
          'DocFinanceiro.ValorBruto',
          'DocFinanceiro.ValorLiquido',
          'DocFinanceiro.EProvisao',
          'DocFinanceiro.SituacaoDocumento',
          'DocFinanceiro.SaldoEmAberto',
          'DocFinanceiro.DataSituacao',
          'DocFinanceiro.DataContPDD',
          'DocFinanceiro.DataInclusao',
          'DocFinanceiro.CodLotacao',
          'DocFinanceiro.CompGeracao',
          'DocFinanceiro.DocResultante',
          'DocFinanceiro.DocProvisao',
          'DocFinanceiro.PracaCobranca',
          'DocFinanceiro.DocOrigem',
          'DocFinanceiro.DocAjustado',
          'DocFinanceiro.TelosRgUs',
          'DocFinanceiro.TelosRgDt',
          'DocFinanceiro.TelosUpUs',
          'DocFinanceiro.TelosUpDt',
          'DocFinanceiro.TelosCtrler',
          'DocFinanceiro.IdGerador',
          'DocFinanceiro.InfoCompl',
          'DocFinanceiro.EAgrupamento',
          'DocFinanceiro.TotalDebitos',
          'DocFinanceiro.TotalCreditos',
          'DocFinanceiro.TipoGerador',
          'DocFinanceiro.SomenteProvisorio',
          'DocFinanceiro.DocVinculado',
          'DocFinanceiro.GeradorDoc',
          'DocFinanceiro.ContratoFinanceiroResp',
          'DocFinanceiro.CamaraCompensacao',
          'DocFinanceiro.DiaCompetencia',
          'DocFinanceiro.PercTaxaAdm',
          'DocFinanceiro.Conferido',
          'DocFinanceiro.Observacao',
          'DocFinanceiro.ClassificacaoCobranca',
          'DocFinanceiro.ValorFatInterc',
          'DocFinanceiro.DataEmiFatInterc',
          'DocFinanceiro.DataVencFatInterc',
          'DocFinanceiro.ValorNDC',
          'DocFinanceiro.DataEmiNDC',
          'DocFinanceiro.DataVencNDC',
          'DocFinanceiro.NumFatInterc',
          'DocFinanceiro.NumNDC',
          'DocFinanceiro.Tp_Arquivo',
          'DocFinanceiro.ProcessoFinanceiro',
          'DocFinanceiro.RecursoGlosa',
          'DocFinanceiro.TipoDocFinanceiroFatura',
          'DocFinanceiro.TipoDocFinanceiroNDC',
          'DocFinanceiro.NFeSerie',
          'DocFinanceiro.NFeNumero',
          'DocFinanceiro.NFeCodigoVerificacao',
          'DocFinanceiro.NFeDataEmissao',
          'DocFinanceiro.DocumentoFiscal1',
          'DocFinanceiro.DocumentoFiscal2',
          'DocFinanceiro.ValorPreestabelecido',
          'DocFinanceiro.OutrasFormasRemuneracao',
          'DocFinanceiro.DataMonitoramento',
          'DocFinanceiro.IdentCobranca',
          'DocFinanceiro.PendenteEmissaoNFSe',
          'EspecialidadeServico.Codigo as EspecialidadeCodigo',
          'EspecialidadeServico.Nome as EspecialidadeNome',
        ])
      ->join('ContratoFinanceiro', 'ContratoFinanceiro.AutoId', '=', 'DocFinanceiro.ContratoFinanceiro')
      ->join('Pessoa', 'Pessoa.AutoId', '=', 'ContratoFinanceiro.Pessoa')
      ->join('SituacaoDocumento', 'SituacaoDocumento.Codigo', '=', 'DocFinanceiro.SituacaoDocumento')
      ->join('PrestadorServico', 'PrestadorServico.ContratoFinanceiro', '=', 'ContratoFinanceiro.AutoId')
      ->leftJoin('EspecPrestador', 'EspecPrestador.Prestador', '=', 'PrestadorServico.AutoId')
      ->leftJoin('EspecialidadeServico', 'EspecialidadeServico.AutoId', '=', 'EspecPrestador.Especialidade')
      ->where('DocFinanceiro.CompFinanceira', $finalCompetencia)
      ->where('DocFinanceiro.Classe', 3)
      ->whereNull('EspecPrestador.FimVigencia');



        $query->when($codigoContrato, function ($q) use ($codigoContrato) {
          $q->where('ContratoFinanceiro.Codigo', $codigoContrato);
          //$q->where('DocFinanceiro.ContratoFinanceiro', $codigoContrato);
        });
        $query->when($nome, function ($q) use ($nome) {
          $q->where('Pessoa.Nome', 'like', '%' . $nome . '%');
        });
        $query->when($classePrestador, function ($q) use ($classePrestador) {
          $q->where('PrestadorServico.Classe', $classePrestador);
        });
        $query->when($especialidade, function ($q) use ($especialidade) {
          $q->where('EspecialidadeServico.Codigo', $especialidade);
        });
        $query->when(!empty($diaInicial) && !empty($diaFinal), function ($q) use ($diaInicial, $diaFinal) {
          $q->whereBetween(DB::raw('DAY(DocFinanceiro.DataVencimento)'), [$diaInicial, $diaFinal]);
        });

        $query->orderBy('ContratoFinanceiro.Codigo');

        $count = $query->count();

        //return $query->toRawSql();

        $resultados = $query->paginate(30);

        $classes = ClassePrestador::all('Codigo', 'Nome');
        $especialidades = EspecialidadeServico::all('Codigo', 'Nome');

        return inertia('Anexo/Index', [
          'prestadores' => $resultados,
          'params' => $params,
          'count' => $count,
          'classes' => $classes,
          'especialidades' => $especialidades,
          'old' => $request->all()
        ]);

      }catch (\Exception $e){
        dd($e->getMessage());
      }
    }

    public function sendAnexoEmail(Request $request)
    {
      $users = collect();

      if ($request->input('massSend', false)) {

        // Busca todos os prestadores
        if($request->input('queryParams')){

          $params = $request->input('queryParams');

          // Recupera os parâmetros do request
          $codigoContrato = $params['codigoContrato'];
          $nome = $params['nome'];
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

        $file = '';

        $request->validate([
          'anexo' => 'required|file|max:50120', // Máx 50MB
        ]);

        if($request->hasFile('anexo')){
          $file = $request->file('anexo')->storeAs('temp', $request->file('anexo')->getClientOriginalName());
        }
        

        JobSendAnexoEmail::dispatch($email, $competencia, $nome, $contrato, $file)->onQueue('anexos');

      }

      return redirect()->route('envioAnexo.index')->with('success', 'E-mails enviados com sucesso!');
    }

}
