@extends('layouts.base')

@section('title', 'Design Diensten')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/hero-cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/text.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/recent_cases.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.hero-cta', [
        'title' => 'Design Diensten',
        'description' => 'Wil je een uniek, professioneel ontwerp dat past bij jouw merkidentiteit? Ik bied design diensten aan, van website-ontwerpen tot logo’s en complete huisstijlen. Met oog voor detail en gebruiksvriendelijkheid creëer ik ontwerpen die niet alleen mooi zijn, maar ook functioneel en effectief.',
        'mail_button' => 'info@bryandeknikker.nl',
        'phone_button' => '06 82490183',
        'phone_button_url' => '+31682490183',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom investeren in goed design?',
        'description' => 'Een sterk design is essentieel voor het succes van je merk. Het zorgt voor een herkenbare identiteit, geeft je bedrijf professionaliteit en trekt de aandacht van je doelgroep. Hier zijn enkele redenen waarom goed design belangrijk is:
        <ul>
            <li><strong>Merkherkenning:</strong> Een uniek en consistent design zorgt voor een sterke merkidentiteit.</li>
            <li><strong>Gebruikerservaring:</strong> Goed design maakt je website of product gebruiksvriendelijker, wat leidt tot hogere tevredenheid.</li>
            <li><strong>Professionele uitstraling:</strong> Een goed ontworpen website of logo straalt professionaliteit uit en wekt vertrouwen bij je klanten.</li>
            <li><strong>Meer conversies:</strong> Een aantrekkelijk design zorgt ervoor dat bezoekers langer blijven en sneller actie ondernemen.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
       'title' => 'Mijn werkwijze voor design',
       'description' => 'Een goed ontwerp begint met een sterk concept en een helder begrip van jouw merk en doelen. Hier is hoe ik te werk ga bij het creëren van unieke designs:
       <ol>
           <li><strong>Ontwerpbriefing:</strong> Samen bespreken we jouw merk, doelgroep, en wat je wilt bereiken met het ontwerp.</li>
           <li><strong>Conceptontwikkeling:</strong> Ik werk aan meerdere ontwerpconcepten op basis van onze briefing en geef je keuzes.</li>
           <li><strong>Feedback en revisies:</strong> Je geeft feedback en ik werk samen met jou om het ontwerp te perfectioneren.</li>
           <li><strong>Finale oplevering:</strong> Na goedkeuring lever ik het definitieve ontwerp in de gewenste formaten en voor verschillende media op.</li>
       </ol>',
   ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat kun je van mij verwachten?',
        'description' => 'Wanneer je met mij samenwerkt voor jouw designbehoeften, kun je rekenen op creativiteit, maatwerk en een zorgvuldige aanpak. Ik lever:
    <ul>
        <li><strong>Unieke ontwerpen:</strong> Geen standaard templates, maar creatieve, op maat gemaakte designs die passen bij jouw merk.</li>
        <li><strong>Gebruiksvriendelijke ontwerpen:</strong> Of het nu om een website of een logo gaat, ik zorg ervoor dat het ontwerp niet alleen mooi, maar ook functioneel is.</li>
        <li><strong>Revisiemogelijkheden:</strong> Ik zorg dat het ontwerp precies aan jouw wensen voldoet met uitgebreide revisiemogelijkheden.</li>
        <li><strong>Snelle levertijden:</strong> Ik werk efficiënt om jouw deadlines te halen zonder in te leveren op kwaliteit.</li>
    </ul>',
    ])
    @endcomponent

    @include('components.recent_cases', ['recentBlogs' => $recentBlogs])

    @component('components.cta', [
        'title' => 'Wil je een uniek design voor jouw merk?',
        'description' => 'Of je nu een website, logo, of complete huisstijl nodig hebt, ik creëer unieke en op maat gemaakte ontwerpen die jouw merk naar een hoger niveau tillen. Neem vandaag nog contact op om jouw project te bespreken!',
        'first_button' => 'Start mijn ontwerp',
        'first_button_url' => route('contact'),
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent

@endsection
