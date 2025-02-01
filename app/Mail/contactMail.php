<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    public function build()
    {
        return $this->subject('Nuevo Mensaje de Contacto')
                    ->to(['dueña1@example.com', 'dueña2@example.com']) // Actualiza con los correos reales
                    ->markdown('email.contact', ['data' => $this->data]);
    }
}
