<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @param array $formData
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-mail')
            ->with([
                'name' => $this->formData['name'],
                'email' => $this->formData['email'],
                'contactmessage' => $this->formData['contactmessage'],
            ])
            ->subject('Contactformulier Ingevuld')
            ->from('info@bryandeknikker.nl', 'Bryan de Knikker');
    }
}
