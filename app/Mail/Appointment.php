<?php

namespace App\Mail;

use App\Formulario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Appointment extends Mailable
{
    use Queueable, SerializesModels;

    public $formulario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formulario)
    {
        $this->formulario = $formulario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = $this->formulario['email'];
        $name = $this->formulario['nome'];
        $subject = 'New Appointment';
        return $this->view('emails.appointment')
                    ->subject($subject);
    }
}
