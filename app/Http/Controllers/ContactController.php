<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormConfirmation;

class ContactController extends Controller
{
    /**
     * Toon het contactformulier.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Verwerk het ingediende contactformulier.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactPost(Request $request)
    {
        // Valideer de ingediende gegevens
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contactmessage' => 'required',
        ]);

        // Sla de ingediende gegevens op in de database
        Contact::create($validatedData);

        // Verstuur een e-mailmelding naar de beheerder
        Mail::to('info@bryandeknikker.nl')->send(new ContactFormSubmitted($validatedData));

        // Stuur een bevestigingsmail naar de afzender
        Mail::to($validatedData['email'])->send(new ContactFormConfirmation($validatedData));

        // Stuur de gebruiker terug met een succesbericht
        return back()->with('success', 'Bedankt voor je bericht! We nemen zo spoedig mogelijk contact met je op.');
    }
}
