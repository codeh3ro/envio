<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SendProducaoMedicaEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $competencia, public $nome, public $contrato, public $tempFiles)
    {
      $ano = substr($competencia, 0, 4);
      $mes = substr($competencia, 4, 2);
      $this->competencia = $mes. '/' . $ano;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Espelho de Pagamento Produção Médica Comp. Financeira ' . $this->competencia,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.producaoMedicaEmailHtml',
            with: [
              'competencia' => $this->competencia,
              'nome' => $this->nome,
              'contrato' => $this->contrato,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $pathsTempFile = $this->tempFiles;
        $atachments = [];

        foreach ($pathsTempFile as $path) {
          $atachments[] = Attachment::fromPath(Storage::path($path));
        }

        return $atachments;
//          [
//          Attachment::fromPath(Storage::path($pathsTempFile)),
//        ];
    }

}
