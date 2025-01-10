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

class SendAnexoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $competencia, public $nome, public $contrato, public $anexo)
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
            subject: 'Comunicado via envio de anexo',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.anexoEmailHtml',
            with: [
              'competencia' => $this->competencia,
              'nome' => $this->nome,
              'contrato' => $this->contrato,
              'logoCid' => 'logo.png'
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
        $anexo = $this->anexo;
        $attachments = [];

        // Adicione o logotipo como um anexo inline com Content ID 'logoCid'
        $attachments[] = Attachment::fromPath(public_path('assets/logo.png'))
            ->as('logo.png')
            ->withMime('image/png');

        // Adiciona o anexo
        if($this->anexo != ''){
            $attachments[] = Attachment::fromPath(Storage::path($anexo));
                //->as($anexoNomeOriginal);
                //->withMime($anexo->getClientMimeType());
        }

        // foreach ($pathsTempFile as $path) {
        //   $attachments[] = Attachment::fromPath(Storage::path($path));
        // }

        return $attachments;
//          [
//          Attachment::fromPath(Storage::path($pathsTempFile)),
//        ];
    }

}
