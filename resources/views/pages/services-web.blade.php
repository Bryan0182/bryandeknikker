@extends('layouts.base')

@section('title', 'Website laten maken')

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
        'title' => 'Website laten maken',
        'description' => 'Wil je een professionele website die niet alleen mooi oogt, maar ook functioneel is en perfect aansluit bij jouw doelen? Of het nu gaat om een simpele informatieve website, een uitgebreide webshop of een platform op maat – ik help je met het realiseren van een website die naadloos aansluit op jouw visie en de behoeften van je doelgroep. Met oog voor detail en een focus op gebruiksvriendelijkheid zorg ik ervoor dat jouw website een sterke indruk achterlaat en optimaal presteert op alle apparaten.',
        'mail_button' => 'info@bryandeknikker.nl',
        'phone_button' => '06 82490183',
        'phone_button_url' => '+31682490183',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom een website laten maken?',
        'description' => 'Waarom een professionele website? Een website is vaak het eerste contactpunt tussen jou en je potentiële klanten. Het is meer dan alleen een online visitekaartje; het is een plek waar je bedrijf, diensten of producten op de juiste manier gepresenteerd worden. Met een professioneel ontworpen website zorg je voor:
        <ul>
            <li><strong>Verhoogde zichtbaarheid:</strong> Zorg dat klanten je gemakkelijk kunnen vinden.</li>
            <li><strong>Betrouwbaarheid en professionaliteit:</strong> Laat zien dat je serieus bent over je vak.</li>
            <li><strong>Gemakkelijke navigatie en gebruiksvriendelijkheid:</strong> Zorg dat bezoekers snel vinden wat ze nodig hebben.</li>
            <li><strong>Betere conversies:</strong> Een goede website zorgt voor meer klanten en groei.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
       'title' => 'Mijn werkwijze',
       'description' => 'Hoe ga ik te werk?
       Wanneer je ervoor kiest om een website te laten maken, is het belangrijk dat het proces soepel verloopt en dat de resultaten precies aansluiten op jouw verwachtingen. Daarom werk ik volgens de volgende stappen:
       <ol>
           <li><strong>Kennismaking en doelen bepalen:</strong> We bespreken jouw wensen, doelen en de functionaliteiten die je nodig hebt.</li>
           <li><strong>Ontwerp en feedback:</strong> Ik ontwerp de eerste versie van de website en neem feedback mee om ervoor te zorgen dat alles klopt.</li>
           <li><strong>Ontwikkeling en optimalisatie:</strong> De website wordt gebouwd en geoptimaliseerd voor snelheid, veiligheid en SEO.</li>
           <li><strong>Lancering en ondersteuning:</strong> Na goedkeuring wordt de website live gezet en zorg ik voor de benodigde ondersteuning.</li>
       </ol>',
   ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat kun je van mij verwachten?',
        'description' => 'Een maatwerk website die werkt voor jou.
    Elke website die ik maak, is volledig op maat gemaakt. Dit betekent dat jouw website uniek is, past bij jouw merk en voldoet aan de specifieke doelen die je wilt bereiken. Van design tot technische functionaliteiten, ik zorg ervoor dat elk aspect naadloos op elkaar aansluit.

    Je kunt rekenen op:
    <ul>
        <li><strong>Responsief ontwerp:</strong> Jouw website werkt op elk apparaat, van smartphone tot desktop.</li>
        <li><strong>Snelle laadtijd:</strong> Optimalisatie voor snelheid zodat bezoekers niet afhaken.</li>
        <li><strong>SEO-vriendelijk:</strong> Een website die goed gevonden wordt in zoekmachines.</li>
        <li><strong>Veiligheid:</strong> Ik zorg voor een veilige website zodat gegevens van jou en je bezoekers beschermd blijven.</li>
    </ul>',
    ])
    @endcomponent

    @include('components.recent_cases', ['recentBlogs' => $recentBlogs])
    @component('components.cta', [
        'title' => 'Klaar om jouw website tot leven te brengen?',
        'description' => 'Ik help je graag met het ontwikkelen van een professionele, op maat gemaakte website die perfect aansluit bij jouw doelen. Neem contact met me op en ontdek hoe we jouw project kunnen realiseren!',
        'first_button' => 'Start jouw project',
        'first_button_url' => route('contact'),
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent

@endsection
