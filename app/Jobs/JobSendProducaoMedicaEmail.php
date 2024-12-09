<?php

namespace App\Jobs;

use App\Mail\SendProducaoMedicaEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class JobSendProducaoMedicaEmail implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $email, public $competencia, public $nome, public $contrato, public $tempFile, public $anexo)
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
          ->send(new SendProducaoMedicaEmail($this->competencia, $this->nome, $this->contrato, $this->tempFile, $this->anexo));

        // Exclui o PDF temporário após o envio
        foreach ($this->tempFile as $file) {
          if (Storage::exists($file)) {
            Storage::delete($file);
          }
        }

        if (Storage::exists($this->anexo)) {
          Storage::delete($this->anexo);
        }

      }catch (\Exception $e){
        // Loga o erro
        Log::error('Erro ao enviar e-mail de produção médica do contrato '.$this->contrato.' : ' . $e->getMessage());
      }

    }
}
