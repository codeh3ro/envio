<?php

namespace App\Jobs;

use App\Mail\SendAnexoEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class JobSendAnexoEmail implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $email, public $competencia, public $nome, public $contrato, public $anexo)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
      try{
        // Envia o e-mail com o PDF anexado
        Mail::to($this->email)
          ->send(new SendAnexoEmail($this->competencia, $this->nome, $this->contrato, $this->anexo));

        // Deleta o arquivo anexo temporário
        if (Storage::exists($this->anexo)) {
          Storage::delete($this->anexo);
        }

      }catch (\Exception $e){
        // Loga o erro
        Log::error('Erro ao enviar anexo por e-mail para o contrato '.$this->contrato.' : ' . $e->getMessage());
      }

    }
}
