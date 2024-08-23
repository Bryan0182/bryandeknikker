<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormConfirmation extends Mailable
{
    use SerializesModels;

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
        return $this->view('emails.confirmation')
            ->with([
                'name' => $this->formData['name'],
            ])
            ->subject('Onderwerp: Bevestiging van ontvangst van je contactformulier')
            ->from('info@bryandeknikker.nl', 'Bryan de Knikker');
    }
}
