<?php

namespace App\Models\Cardio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocFinanceiro extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'DocFinanceiro';
    protected $primaryKey = 'AutoId';
    public $timestamps = false;

    protected $fillable = [
        'AutoId',
        'Classe',
        'NumeroProvisorio',
        'NumDocFornec',
        'Numero',
        'Pessoa',
        'ContratoFinanceiro',
        'CompFinanceira',
        'CompSeq',
        'DataEmissao',
        'DataVencimento',
        'TipoNegJuros',
        'TipoNegMultas',
        'ValorBruto',
        'ValorLiquido',
        'EProvisao',
        'SituacaoDocumento',
        'SaldoEmAberto',
        'DataSituacao',
        'DataContPDD',
        'DataInclusao',
        'CodLotacao',
        'CompGeracao',
        'DocResultante',
        'DocProvisao',
        'PracaCobranca',
        'DocOrigem',
        'DocAjustado',
        'TelosRgUs',
        'TelosRgDt',
        'TelosUpUs',
        'TelosUpDt',
        'TelosCtrler',
        'IdGerador',
        'InfoCompl',
        'EAgrupamento',
        'TotalDebitos',
        'TotalCreditos',
        'TipoGerador',
        'SomenteProvisorio',
        'DocVinculado',
        'GeradorDoc',
        'ContratoFinanceiroResp',
        'CamaraCompensacao',
        'DiaCompetencia',
        'PercTaxaAdm',
        'Conferido',
        'Observacao',
        'ClassificacaoCobranca',
        'ValorFatInterc',
        'DataEmiFatInterc',
        'DataVencFatInterc',
        'ValorNDC',
        'DataEmiNDC',
        'DataVencNDC',
        'NumFatInterc',
        'NumNDC',
        'Tp_Arquivo',
        'ProcessoFinanceiro',
        'RecursoGlosa',
        'TipoDocFinanceiroFatura',
        'TipoDocFinanceiroNDC',
        'NFeSerie',
        'NFeNumero',
        'NFeCodigoVerificacao',
        'NFeDataEmissao',
        'DocumentoFiscal1',
        'DocumentoFiscal2',
        'ValorPreestabelecido',
        'OutrasFormasRemuneracao',
        'DataMonitor',
    ];

    public function emailPessoa()
    {
        return $this->belongsTo(EmailPessoa::class, 'Pessoa', 'Pessoa');
    }


}
