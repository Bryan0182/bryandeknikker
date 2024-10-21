@extends('layouts.base')

@section('title', 'SEO Diensten')

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
        'title' => 'SEO Diensten',
        'description' => 'Wil je hoger scoren in Google en meer organisch verkeer naar je website trekken? Met mijn SEO-diensten zorg ik ervoor dat jouw website beter vindbaar wordt in zoekmachines, meer bezoekers aantrekt en uiteindelijk meer conversies genereert. Ik help je met technische SEO, content optimalisatie en linkbuilding om je website stap voor stap naar de top van de zoekresultaten te brengen.',
        'mail_button' => 'info@bryandeknikker.nl',
        'phone_button' => '06 82490183',
        'phone_button_url' => '+31682490183',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom investeren in SEO?',
        'description' => 'SEO, oftewel zoekmachineoptimalisatie, is een van de meest effectieve manieren om op lange termijn organisch verkeer naar je website te trekken. Een goed geoptimaliseerde website zorgt ervoor dat jouw bedrijf beter vindbaar is voor mensen die actief op zoek zijn naar jouw producten of diensten. SEO biedt vele voordelen:
        <ul>
            <li><strong>Verhoogde zichtbaarheid:</strong> Zorg ervoor dat jouw website bovenaan de zoekresultaten verschijnt.</li>
            <li><strong>Meer verkeer:</strong> Trek meer relevante bezoekers naar je website zonder te betalen voor advertenties.</li>
            <li><strong>Betere gebruikerservaring:</strong> SEO verbetert ook de snelheid en bruikbaarheid van je website.</li>
            <li><strong>Hogere conversies:</strong> Bereik mensen die al actief op zoek zijn naar jouw producten of diensten, en zet hen om in klanten.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
       'title' => 'Mijn werkwijze voor SEO',
       'description' => 'SEO is geen eenmalige taak, het is een continu proces dat tijd en aandacht vereist. Ik werk volgens een bewezen strategie die je website geleidelijk naar de top van de zoekresultaten brengt. Dit zijn de stappen die ik volg:
       <ol>
           <li><strong>SEO-audit:</strong> Ik analyseer je huidige website om te zien waar verbeteringen mogelijk zijn op het gebied van techniek, content en autoriteit.</li>
           <li><strong>Keyword research:</strong> Samen bepalen we welke zoekwoorden jouw doelgroep gebruikt om je producten of diensten te vinden.</li>
           <li><strong>On-page optimalisatie:</strong> Ik optimaliseer de inhoud, meta-tags, headers en interne links op je website.</li>
           <li><strong>Technische SEO:</strong> Ik zorg ervoor dat de technische aspecten van je website, zoals laadsnelheid en mobielvriendelijkheid, geoptimaliseerd zijn.</li>
           <li><strong>Linkbuilding:</strong> Door waardevolle backlinks te genereren, vergroot ik de autoriteit van je website.</li>
           <li><strong>Monitoren en optimaliseren:</strong> SEO is een doorlopend proces. Ik volg de voortgang en optimaliseer waar nodig om de resultaten te verbeteren.</li>
       </ol>',
   ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat kun je van mij verwachten?',
        'description' => 'SEO is geen magie, het vereist een gedegen strategie en continu werk. Wanneer je met mij samenwerkt, kun je rekenen op een resultaatgerichte aanpak die gebaseerd is op data en bewezen technieken. Je kunt van mij verwachten:
    <ul>
        <li><strong>Transparantie:</strong> Regelmatige rapportages en updates over de voortgang van je SEO-campagne.</li>
        <li><strong>Duurzaam resultaat:</strong> Ik richt me op organische groei die standhoudt, zonder snelle, tijdelijke resultaten.</li>
        <li><strong>Full-service SEO:</strong> Van technische SEO tot contentstrategie en linkbuilding, ik bied een complete oplossing.</li>
        <li><strong>Blijvende ondersteuning:</strong> Ik blijf je website monitoren en optimaliseren voor blijvende resultaten.</li>
    </ul>',
    ])
    @endcomponent

    @include('components.recent_cases', ['recentBlogs' => $recentBlogs])

    @component('components.cta', [
        'title' => 'Wil je hoger scoren in Google?',
        'description' => 'SEO is de sleutel tot meer zichtbaarheid, verkeer en conversies. Ik help je met een op maat gemaakte SEO-strategie die zorgt voor duurzame resultaten. Neem vandaag nog contact op en zet de eerste stap naar betere vindbaarheid!',
        'first_button' => 'Verbeter mijn vindbaarheid',
        'first_button_url' => route('contact'),
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent

@endsection
