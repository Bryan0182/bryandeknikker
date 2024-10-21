@extends('layouts.base')

@section('title', 'Applicatie laten maken')

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
        'title' => 'Applicatie laten maken',
        'description' => 'Op zoek naar een simpele, effectieve applicatie die snel en efficiënt is? Ik ontwikkel gebruiksvriendelijke applicaties in onder andere Python, perfect geschikt voor het automatiseren van taken, gegevensverwerking, of het oplossen van specifieke problemen. Simpele oplossingen, met grote impact.',
        'mail_button' => 'info@bryandeknikker.nl',
        'phone_button' => '06 82490183',
        'phone_button_url' => '+31682490183',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom kiezen voor een simpele applicatie?',
        'description' => 'Soms heb je geen complexe software nodig, maar een simpele applicatie die precies doet wat je nodig hebt. Een simpele applicatie kan snel ontwikkeld worden, is gebruiksvriendelijk en zorgt voor efficiënte oplossingen, zonder de kosten en complexiteit van grote systemen. Hier zijn enkele voordelen van een eenvoudige applicatie:
        <ul>
            <li><strong>Snel ontwikkelbaar:</strong> Applicaties kunnen in korte tijd worden ontwikkeld en aangepast.</li>
            <li><strong>Gebruiksvriendelijk:</strong> Makkelijk te gebruiken voor iedereen, zonder overbodige functies.</li>
            <li><strong>Kostenbesparend:</strong> Een simpele oplossing betekent lagere ontwikkelkosten.</li>
            <li><strong>Specifieke oplossingen:</strong> Ideaal voor het automatiseren van herhalende taken of het oplossen van specifieke problemen.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
       'title' => 'Mijn werkwijze voor applicatieontwikkeling',
       'description' => 'Het ontwikkelen van een simpele applicatie begint met het begrijpen van jouw specifieke behoeften. Dit is hoe ik het proces aanpak:
       <ol>
           <li><strong>Behoeftebepaling:</strong> We bespreken de functie die je nodig hebt en de problemen die je wilt oplossen.</li>
           <li><strong>Ontwikkeling:</strong> Ik ontwikkel een gebruiksvriendelijke applicatie in bijvoorbeeld Python, gericht op het snel en effectief oplossen van het probleem.</li>
           <li><strong>Testen:</strong> De applicatie wordt getest om te zorgen dat deze naar behoren werkt en doet wat je verwacht.</li>
           <li><strong>Oplevering en ondersteuning:</strong> Na oplevering bied ik ondersteuning aan om ervoor te zorgen dat de applicatie goed blijft werken.</li>
       </ol>',
   ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat kun je van mij verwachten?',
        'description' => 'Wanneer je met mij samenwerkt aan het ontwikkelen van een simpele applicatie, kun je rekenen op snelheid, gebruiksgemak en maatwerk. Je kunt van mij verwachten:
    <ul>
        <li><strong>Snelle oplevering:</strong> Een simpele applicatie kan vaak binnen enkele dagen ontwikkeld worden.</li>
        <li><strong>Efficiënte oplossingen:</strong> Applicaties die specifieke taken uitvoeren en jouw werk vereenvoudigen.</li>
        <li><strong>Gebruiksvriendelijke interface:</strong> Ik zorg ervoor dat de applicatie intuïtief is en makkelijk te gebruiken.</li>
        <li><strong>Ondersteuning na oplevering:</strong> Ik blijf beschikbaar voor ondersteuning en eventuele aanpassingen na de oplevering.</li>
    </ul>',
    ])
    @endcomponent

    @include('components.recent_cases', ['recentBlogs' => $recentBlogs])

    @component('components.cta', [
        'title' => 'Wil je een simpele applicatie laten maken?',
        'description' => 'Of je nu een eenvoudige tool nodig hebt om tijd te besparen of een applicatie voor specifieke taken, ik help je graag. Neem vandaag nog contact op en ontdek de mogelijkheden!',
        'first_button' => 'Start mijn applicatie',
        'first_button_url' => route('contact'),
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent

@endsection
