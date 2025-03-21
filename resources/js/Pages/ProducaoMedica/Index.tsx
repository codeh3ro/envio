import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, useForm, usePage} from '@inertiajs/react';
import React, {useState, FormEventHandler, useEffect, useMemo} from 'react';
import { PatternFormat } from 'react-number-format';
import Swal from 'sweetalert2'

import { Input } from "@/components/ui/input";
import { Button } from "@/components/ui/button";
import { Checkbox } from "@/components/ui/checkbox";
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table";
import {
  Dialog,
  DialogContent,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
  DialogDescription
} from "@/components/ui/dialog";
import { Label } from "@/components/ui/label"
import { Card, CardContent } from "@/components/ui/card";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/components/ui/select"
import {
  Tooltip,
  TooltipContent,
  TooltipProvider,
  TooltipTrigger,
} from "@/components/ui/tooltip"

import {Square, SquareX} from 'lucide-react';

import { Link, Pagination} from "@/Components/Pagination";

import { toast } from 'react-toastify';

type IRoot = {
  current_page: number
  data: IPessoas[]
  first_page_url: string
  from: number
  last_page: number
  last_page_url: string
  links: Link[]
  next_page_url: string
  path: string
  per_page: number
  prev_page_url: any
  to: number
  total: number
}
type EmailPessoa = {
  AutoId: number
  Pessoa: string
  Seq: string
  Email: string | null
  InicioVigencia: string
  FimVigencia: any
  TelosRgUs: string
  TelosRgDt: string
  TelosUpUs: string
  TelosUpDt: string
  TelosCtrler: string
  Endereco: any
  EnviarEmail: string
}
type IPessoas = {
  Codigo: string
  Nome: string
  Cnp: string
  SituacaoDoc: string
  DIA: string
  PessoaID: string
  AutoId: number
  Classe: string
  NumeroProvisorio: string
  NumDocFornec: any
  Numero: string
  Pessoa: string
  ContratoFinanceiro: string
  CompFinanceira: string
  CompSeq: string
  DataEmissao: string
  DataVencimento: string
  TipoNegJuros: any
  TipoNegMultas: any
  ValorBruto: string
  ValorLiquido: string
  EProvisao: string
  SituacaoDocumento: string
  SaldoEmAberto: string
  DataSituacao: string
  DataContPDD: any
  DataInclusao: string
  CodLotacao: any
  CompGeracao: string
  DocResultante: any
  DocProvisao: any
  PracaCobranca: string
  DocOrigem: any
  DocAjustado: any
  TelosRgUs: string
  TelosRgDt: string
  TelosUpUs: string
  TelosUpDt: string
  TelosCtrler: any
  IdGerador: any
  InfoCompl: any
  EAgrupamento: any
  TotalDebitos: string
  TotalCreditos: string
  TipoGerador: any
  SomenteProvisorio: string
  DocVinculado: any
  GeradorDoc: string
  ContratoFinanceiroResp: any
  CamaraCompensacao: any
  DiaCompetencia: any
  PercTaxaAdm: any
  Conferido: any
  Observacao: any
  ClassificacaoCobranca: string
  ValorFatInterc: string
  DataEmiFatInterc: string
  DataVencFatInterc: string
  ValorNDC: any
  DataEmiNDC: any
  DataVencNDC: any
  NumFatInterc: string
  NumNDC: any
  Tp_Arquivo: any
  ProcessoFinanceiro: string
  RecursoGlosa: string
  TipoDocFinanceiroFatura: any
  TipoDocFinanceiroNDC: any
  NFeSerie: any
  NFeNumero: any
  NFeCodigoVerificacao: any
  NFeDataEmissao: any
  DocumentoFiscal1: any
  DocumentoFiscal2: any
  ValorPreestabelecido: string
  OutrasFormasRemuneracao: string
  DataMonitoramento: any
  IdentCobranca: any
  PendenteEmissaoNFSe: string
  email_pessoa: EmailPessoa
}
type IClasses = {
  Codigo: string
  Nome: string
}
type Props = {
  prestadores?: IRoot
  count?: number
  classes: IClasses[]
  old: {
    compFinanceira: string
    codigoContrato: string
    nome: string
    classePrestador: string
    diaInicial: string
    diaFinal: string
    anexo: null
  }
}


export default function EnvioProducaoMedica({ prestadores, count, classes, old } : Props) {

  const errors = usePage().props.errors;

  const { data, setData, post, processing, get } = useForm({
    compFinanceira: old.compFinanceira || '',
    codigoContrato: old.codigoContrato || '',
    nome: old.nome || '',
    classePrestador: old.classePrestador || '',
    diaInicial: old.diaInicial || '',
    diaFinal: old.diaFinal || '',
    anexo: null as File | null,
  });

  const [searchTerm, setSearchTerm] = useState('')
  const [selectAllChecked, setSelectAllChecked] = useState(false);
  const [selectedPrestadores, setSelectedPrestadores] = useState<any[]>([]);
  const [open, setOpen] = useState(false);
  const [uploadedFilePath, setUploadedFilePath] = useState('');

  const handleClose = () => setOpen(false);

  const handleSearch = (event: React.ChangeEvent<HTMLInputElement>) => {
    setSearchTerm(event.target.value)
  }

  const normalizeText = (text: string) => 
    text.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().trim();
  
  const filteredClients = useMemo(() => {
    return prestadores?.data.filter(client =>
      (client.Nome && normalizeText(client.Nome).includes(normalizeText(searchTerm))) ||
      (client.Codigo && normalizeText(client.Codigo.toString()).includes(normalizeText(searchTerm)))
    );
  }, [prestadores, searchTerm]);

  const handleCheckboxChange = (user: any) => {
    if (selectedPrestadores.includes(user)) {
      setSelectedPrestadores(selectedPrestadores.filter((e) => e !== user));
    } else {
      setSelectedPrestadores([...selectedPrestadores, user]);
    }
  };

  const handleSendEmail = (massSend = false, onlySelected = false) => {  

    if (massSend) {
      const paramsData = {
        compFinanceira: data.compFinanceira,
        codigoContrato: data.codigoContrato,
        nome: data.nome,
        classePrestador: data.classePrestador,
        diaInicial: data.diaInicial,
        diaFinal: data.diaFinal,
      }

      // Quando for envio em massa, passamos a flag sem enviar os dados
      post(route('envioProducaoMedica.sendMail', { queryParams: paramsData , massSend: true }),{
        onSuccess: () => {
          setSelectedPrestadores([]);
          setSelectAllChecked(false);
          toast.success('E-mails enviados com sucesso!',{
            position: 'bottom-right'
          });
        }
      });

    } else if (onlySelected) {

      // Envio somente para os usuários selecionados, independente da página
      const userData = selectedPrestadores.map(user => ({
        email: user.email_pessoa?.Email || '',
        nome: user.Nome,
        competencia: user.CompFinanceira,
        contrato: user.Codigo,
        contratoFinanceiro: user.ContratoFinanceiro,
        autoId: user.AutoId
      }));

      post(route('envioProducaoMedica.sendMail', { users: userData }),{
        onSuccess: () => {
          setSelectAllChecked(false);
          setSelectedPrestadores([]);
          if(selectedPrestadores.length > 1) {
            toast.success(selectedPrestadores.length + ' e-mails enviados com sucesso!', {
              position: 'bottom-right'
            });
          }else{
            toast.success('E-mail enviado com sucesso!', {
              position: 'bottom-right'
            });
          }
        }
      });
    } else {
      const userData = prestadores?.data.map(user => ({
        email: user.email_pessoa.Email,
        nome: user.Nome,
        competencia: user.CompFinanceira,
        contrato: user.Codigo,
        contratoFinanceiro: user.ContratoFinanceiro,
        autoId: user.AutoId
      }));

      post(route('envioProducaoMedica.sendMail', { users: userData }),{
        onSuccess: () => {
          setSelectedPrestadores([]);
          setSelectAllChecked(false);
          toast.success(prestadores?.data.length + ' e-mail(s) enviados com sucesso!',{
            position: 'bottom-right'
          });
        }
      });
    }

    setSelectedPrestadores([]);
    setSelectAllChecked(!selectAllChecked);
  }

  const submit: FormEventHandler = (e) => {
    e.preventDefault();

    get(route('envioProducaoMedica.searchAll'), {
      onSuccess: ({ props }) => {
        //setUploadedFilePath((props.flash as { message: { path: string } }).message.path);
      }
    });
  };

  function toggleSelectAll() {
    if (selectAllChecked) {
      setSelectedPrestadores([]);
    } else {
      setSelectedPrestadores(
        prestadores?.data
          .filter(prestador => 
            prestador?.email_pessoa?.Email && prestador.email_pessoa.Email.trim() !== ''
          )
          .map(prestador => prestador) ?? []
      );
    }
    setSelectAllChecked(!selectAllChecked);
  }

  return (
        <AuthenticatedLayout
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Produção Médica</h2>}
        >
          <Head title="Produção Médica" />

          <div className="p-0">

            <div className="mx-auto p-4">

              <Card>
                <CardContent>
                  <form onSubmit={submit}>
                    <div className="flex items-center justify-between">

                      <div className="mt-3 flex">
                        <div className="w-auto max-w-sm mr-5">
                          <Label htmlFor="comp">Competência</Label>
                          <PatternFormat
                            format="##/####"
                            customInput={Input}
                            className={`w-[100px] ${errors.compFinanceira && 'border-destructive'} `}
                            value={data.compFinanceira}
                            id="comp"
                            placeholder="MM/AAAA"
                            autoComplete="off"
                            onChange={(e) => setData('compFinanceira', e.target.value)}
                          />
                        </div>

                        <div className="w-auto max-w-sm mr-5">
                          <Label htmlFor="contrato">Contrato</Label>
                          <PatternFormat
                            format="#####################"
                            customInput={Input}
                            className={`w-[180px]`}
                            value={data.codigoContrato}
                            id="contrato"
                            placeholder="Cód. Contrato"
                            autoComplete="off"
                            onChange={(e) => setData('codigoContrato', e.target.value)}
                          />
                        </div>

                        <div className="w-auto max-w-sm mr-5">
                          <Label htmlFor="nome">Nome</Label>
                          <Input                            
                            type='text'
                            className={`w-[230px]`}
                            value={data.nome}
                            maxLength={60}
                            id="nome"
                            placeholder="Nome"
                            autoComplete="off"
                            onChange={(e) => setData('nome', e.target.value.replace(/[0-9]/g, "").toUpperCase())}
                          />
                        </div>

                        <div className="w-auto max-w-sm mr-5">
                          <Label htmlFor="prestador">Classe Prestador</Label>
                          <Select
                            value={data.classePrestador}
                            onValueChange={(value) => {
                              setData('classePrestador', value)
                            }}
                          >
                            <SelectTrigger className={`w-[180px] ${errors.classePrestador && 'border-destructive'} `}>
                              <SelectValue placeholder="Selecione a classe"/>
                            </SelectTrigger>
                            <SelectContent>
                              {classes.map((classe) => (
                                <SelectItem key={classe.Codigo} value={(classe.Codigo).toString()}>{classe.Nome}</SelectItem>
                              ))}
                            </SelectContent>
                          </Select>
                        </div>
                        
                        <div className="w-auto max-w-sm mr-5">
                          <Label htmlFor="inicial">Dia Inicial</Label>

                          <PatternFormat
                            format="##"
                            value={data.diaInicial}
                            customInput={Input}
                            className={`w-[100px] ${errors.diaInicial && 'border-destructive'} `}
                            onChange={(e) => setData('diaInicial', e.target.value)}
                            placeholder="Dia inicial"
                            autoComplete="off"
                          />

                        </div>

                        <div className="w-auto max-w-sm mr-5">
                        <Label htmlFor="final">Dia Final</Label>
                          <PatternFormat
                            format="##"
                            value={data.diaFinal}
                            customInput={Input} onChange={(e) => setData('diaFinal', e.target.value)}
                            placeholder="Dia final"
                            autoComplete="off"
                            className={`w-[100px] ${errors.diaFinal && 'border-destructive'} `}
                          />
                      </div>
                      </div>

                      <div className="w-auto max-w-sm mt-9">
                        <Button variant='default' disabled={processing}>Buscar</Button>
                      </div>

                    </div>
                  </form>
                </CardContent>
              </Card>


              {prestadores?.data.length === 0 ? (
                <p className="text-center p-8">Nenhum registro encontrado.</p>
              ) : (
                <>
                <div className="mt-5 flex justify-start items-center mb-4">
                  <div className="w-full max-w-sm flex justify-center items-center">
                    <Label htmlFor="final">Pesquisar:</Label>
                    <Input
                      type="text"
                      placeholder="Pesquise pelo nome ou contrato"
                      value={searchTerm}
                      onChange={handleSearch}
                      className="max-w-sm ml-3"
                    />
                  </div>

                  <div className="w-auto max-w-sm mt-0 ml-4">
                    <Label className="dark:text-gray-300 text-gray-600">Total: {count} Registros</Label>
                  </div>

                  <div className="w-auto max-w-sm mt-0 ml-4">
                    <div className="grid w-full max-w-sm items-center gap-1.5">
                      <Input id="anexo" type="file" name="anexo" onChange={(e: React.ChangeEvent<HTMLInputElement>) => {
                        const file = e.target.files?.[0];
                        if(file){
                          setData('anexo', file);
                        }
                      }} />
                    </div>
                  </div>

                    {selectedPrestadores.length > 0 && (
                      <div className="w-auto max-w-sm mt-0 ml-4">
                        <Button disabled={processing} onClick={() => {
                          Swal.fire({
                            title: "Confirme para prosseguir",
                            text: "Deseja enviar e-mail para selecionados?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#0f172a",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Sim",
                            cancelButtonText: "Não"
                          }).then((result:any) => {
                            if (result.isConfirmed) {
                              handleSendEmail(false, true)
                            }
                          });
                          }
                        }>
                          Enviar e-mail para selecionados ({selectedPrestadores.length})
                        </Button>
                      </div>
                    )}
                </div>
                  <Table>
                    <TableHeader>
                      <TableRow>
                        <TableHead className="w-[50px] text-left">
                            <TooltipProvider>
                              <Tooltip >
                                <TooltipTrigger asChild>
                                  <Button className="w-5 h-5" variant="ghost" size="icon" onClick={toggleSelectAll}>
                                    {selectAllChecked ? 
                                      <SquareX size={'23'} className="dark:text-white text-black/50" /> : 
                                      <Square size={'23'} className="dark:text-white text-black/50" />}
                                  </Button>
                                </TooltipTrigger>
                                <TooltipContent side='bottom'>
                                  <p>Seleciona/Desmarca todos abaixo</p>
                                </TooltipContent>
                              </Tooltip>
                            </TooltipProvider>

                        </TableHead>
                        <TableHead className="text-left">Nome</TableHead>
                        <TableHead className="text-left">E-mail</TableHead>
                        <TableHead className="text-left">Contrato</TableHead>
                        <TableHead className="text-left">Vencimento</TableHead>
                        <TableHead className="text-left">Valor Bruto</TableHead>
                        <TableHead className="text-left">Valor Liquido</TableHead>
                        <TableHead className="text-right">
                          <Button
                            size={'sm'}
                            variant='default'
                            disabled={processing}
                            onClick={() => {
                              Swal.fire({
                                title: "Confirme para prosseguir!",
                                text: "Deseja mesmo enviar para todos?",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#0f172a",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Sim",
                                cancelButtonText: "Não"
                              }).then((result:any) => {
                                if (result.isConfirmed) {
                                  handleSendEmail(true)
                                }
                              });
                              }
                            }
                          >
                            Enviar para todos
                          </Button>
                        </TableHead>
                      </TableRow>
                    </TableHeader>
                    <TableBody>
                    {(filteredClients ?? []).length > 0 ? (
                      filteredClients?.map((client,index) => (
                        <TableRow key={`${client.Codigo}-${index}`}>
                          <TableCell>
                            <Checkbox
                              disabled={!client.email_pessoa || client.email_pessoa.Email === ''}
                              checked={selectedPrestadores.includes(client)}
                              onCheckedChange={() => handleCheckboxChange(client)}

                            />
                          </TableCell>
                          <TableCell className="text-left">{client.Nome}</TableCell>
                          <TableCell className="text-left">{client.email_pessoa?.Email || ''}</TableCell>
                          <TableCell className="text-left">{client.Codigo}</TableCell>
                          <TableCell className="text-left">{client.CompFinanceira}</TableCell>
                          <TableCell
                            className="text-left">{Number(client.ValorBruto).toLocaleString('pt-br', {minimumFractionDigits: 2})}</TableCell>
                          <TableCell
                            className="text-left">{Number(client.ValorLiquido).toLocaleString('pt-br', {minimumFractionDigits: 2})}</TableCell>
                          <TableCell className="text-right" hidden>
                            <Dialog>
                              <DialogTrigger asChild>
                                <Button variant="outline" disabled={processing}>Enviar E-mail</Button>
                              </DialogTrigger>
                              <DialogContent>
                                <DialogHeader>
                                  <DialogTitle>Enviar E-mail para {client.Nome}</DialogTitle>
                                  <DialogDescription></DialogDescription>
                                </DialogHeader>
                                <div className="grid gap-4 py-4">
                                  <Input id="subject" placeholder="Assunto"/>
                                  <textarea
                                    id="message"
                                    placeholder="Mensagem"
                                    className="min-h-[100px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                  />
                                  <Button onClick={() => {

                                    const userData = {
                                        email: client.email_pessoa.Email,
                                        competencia: data.compFinanceira,
                                        nome: client.Nome,
                                        contrato: client.Codigo,
                                        contratoFinanceiro: client.ContratoFinanceiro,
                                        autoId: client.AutoId
                                    }
                                    
                                      post(route('envioProducaoMedica.sendMail', { users: [ userData ] }),{
                                        onSuccess: () => {
                                          setSelectedPrestadores([]);
                                          setSelectAllChecked(false);
                                          toast.success('E-mail enviado com sucesso!', {
                                            position: 'bottom-right'
                                          });
                                        }
                                      });

                                      handleClose();
                                    }}
                                  >
                                    Enviar
                                  </Button>
                                </div>
                              </DialogContent>
                            </Dialog>
                          </TableCell>
                        </TableRow>
                      ))) : (
                        <TableRow>
                          <TableCell colSpan={12} className="text-center p-8">Nenhum registro encontrado.</TableCell>
                        </TableRow>
                      )}
                    </TableBody>
                  </Table>
                  {prestadores?.links && <Pagination links={prestadores.links as Link[]}/>}
                </>
                )}
                </div>
                </div>

        </AuthenticatedLayout>
  );
}
