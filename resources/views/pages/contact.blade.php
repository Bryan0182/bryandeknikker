@extends('layouts.base')

@section('pageTitle')
    Contact
@endsection

@section('metaDescription')
    Neem contact op met Bryan de Knikker voor vragen, opmerkingen of samenwerkingsmogelijkheden.
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Neem contact op</h1>
                <p>Hey!</p>
                <p>Heb je een vraag, suggestie of gewoon zin in een praatje? Ik sta voor je klaar! Laat me weten waar ik je mee kan helpen door het contactformulier hieronder in te vullen. Of je nu een idee hebt voor een samenwerking, feedback wilt geven of gewoon hallo wilt zeggen, ik kijk ernaar uit om van je te horen!</p>
                <p>Dus waar wacht je nog op? Laat van je horen en laten we samen iets geweldigs creëren!</p>
                <p>Tot snel!</p>
            </div>
            <div class="col-md-6">
                @if(session('success'))
                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="mt-4">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Naam:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mailadres:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contactmessage" class="form-label">Bericht:</label>
                        <textarea name="contactmessage" id="contactmessage" class="form-control" rows="5" required>{{ old('contactmessage') }}</textarea>
                        @error('contactmessage') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary main-button">Verzenden</button>
                </form>
            </div>
        </div>
    </div>
@endsection
