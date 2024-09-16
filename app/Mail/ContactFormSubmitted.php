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
                'naam' => $this->formData['naam'],
                'emailadres' => $this->formData['emailadres'],
                'telefoonnummer' => $this->formData['telefoonnummer'] ?? 'Niet opgegeven', // Optioneel veld
                'reden_van_contact' => $this->formData['reden_van_contact'],
                'onderwerp' => $this->formData['onderwerp'],
                'bericht' => $this->formData['bericht'],
            ])
            ->subject('Contactformulier Ingevuld')
            ->from('info@bryandeknikker.nl', 'Bryan de Knikker');
    }
}
