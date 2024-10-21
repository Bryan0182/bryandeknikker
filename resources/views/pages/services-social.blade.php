@extends('layouts.base')

@section('title', 'Social Media Diensten')

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
        'title' => 'Social Media Diensten',
        'description' => 'Wil je jouw merk op de juiste manier presenteren op social media en je bereik vergroten? Ik help je bij het beheren, optimaliseren en laten groeien van je social mediakanalen. Van strategie tot uitvoering, ik zorg ervoor dat jouw bedrijf zichtbaar is waar jouw doelgroep zich bevindt.',
        'mail_button' => 'info@bryandeknikker.nl',
        'phone_button' => '06 82490183',
        'phone_button_url' => '+31682490183',
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Waarom investeren in social media?',
        'description' => 'Social media is een krachtig hulpmiddel voor het opbouwen van een sterke band met je doelgroep. Door actief aanwezig te zijn op platforms zoals Facebook, Instagram, en LinkedIn, kun je niet alleen je merk versterken, maar ook direct in contact komen met potentiële klanten. Hier zijn enkele voordelen van een sterke social media strategie:
        <ul>
            <li><strong>Meer zichtbaarheid:</strong> Vergroot je bereik en zorg ervoor dat je merk opvalt.</li>
            <li><strong>Directe interactie:</strong> Communiceer rechtstreeks met je doelgroep en bouw een loyale klantenbasis op.</li>
            <li><strong>Betere merkherkenning:</strong> Zorg ervoor dat je consistent zichtbaar bent op verschillende platforms.</li>
            <li><strong>Groei en betrokkenheid:</strong> Bouw een actieve community op rond je merk en verhoog de betrokkenheid.</li>
        </ul>',
    ])
    @endcomponent

    @component('components.text', [
       'title' => 'Mijn werkwijze voor social media',
       'description' => 'Social media vereist een strategische aanpak om blijvende resultaten te behalen. Hier is hoe ik te werk ga om jouw social mediakanalen naar een hoger niveau te tillen:
       <ol>
           <li><strong>Strategie ontwikkelen:</strong> Samen bepalen we de doelen en doelgroep, en creëren we een contentstrategie die werkt voor jouw bedrijf.</li>
           <li><strong>Content creatie:</strong> Ik help met het maken van aantrekkelijke en relevante content, inclusief visuals en berichten die jouw merk versterken.</li>
           <li><strong>Social media beheer:</strong> Ik beheer jouw accounts, plan berichten in en zorg voor consistente activiteit op de platforms.</li>
           <li><strong>Interactie en betrokkenheid:</strong> Ik reageer op reacties, beantwoord vragen en bouw een relatie op met jouw volgers.</li>
           <li><strong>Analyse en optimalisatie:</strong> Door resultaten te monitoren, optimaliseer ik de strategie waar nodig om groei en betrokkenheid te maximaliseren.</li>
       </ol>',
   ])
    @endcomponent

    @component('components.text', [
        'title' => 'Wat kun je van mij verwachten?',
        'description' => 'Bij het beheren van social media is het belangrijk om altijd up-to-date te zijn met de laatste trends en platformveranderingen. Wanneer je met mij samenwerkt, kun je rekenen op:
    <ul>
        <li><strong>Creatieve content:</strong> Unieke en visueel aantrekkelijke content die opvalt en jouw merk versterkt.</li>
        <li><strong>Consistentie:</strong> Een constante stroom van relevante content om jouw merk in de spotlights te houden.</li>
        <li><strong>Engagement:</strong> Ik zorg voor echte interactie met je volgers en bouw een betrokken community op.</li>
        <li><strong>Rapportages:</strong> Regelmatige updates over de prestaties van je social media campagnes.</li>
    </ul>',
    ])
    @endcomponent

    @include('components.recent_cases', ['recentBlogs' => $recentBlogs])

    @component('components.cta', [
        'title' => 'Wil je jouw social media laten groeien?',
        'description' => 'Social media is essentieel voor een sterke online aanwezigheid. Laten we samen een strategie ontwikkelen om jouw merk te laten opvallen! Neem vandaag nog contact op.',
        'first_button' => 'Start mijn social media groei',
        'first_button_url' => route('contact'),
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent

@endsection
