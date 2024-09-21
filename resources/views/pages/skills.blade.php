@extends('layouts.base')

@section('title', 'Skills')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/skills.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.text', [
        'title' => 'Mijn skills',
        'description' => 'Welkom op mijn skills pagina! Hier krijg je een kijkje in de vaardigheden die ik door de jaren heen heb ontwikkeld. Als hbo-student softwareontwikkeling heb ik een sterke basis gelegd in zowel frontend als backend ontwikkeling. Ik ben bedreven in talen zoals HTML, CSS, JavaScript en PHP, en werk met frameworks als Laravel, React en Bootstrap om gebruiksvriendelijke en efficiënte webapplicaties te bouwen. Daarnaast heb ik ervaring met het optimaliseren van websites voor betere vindbaarheid (SEO) en werk ik met diverse tools en technieken om projecten naar een hoger niveau te tillen. Scroll verder om meer te ontdekken over de tools en technologieën waar ik mee werk en waar mijn passie ligt!'
    ])
    @endcomponent

    @component('components.skills', ['frontend' => $frontend, 'backend' => $backend])
    @endcomponent

    @component('components.cta', [
        'title' => 'Benieuwd wat ik voor jou kan betekenen?',
        'description' => 'Stuur me een bericht en laten we jouw ideeën tot leven brengen!',
        'first_button' => 'Contact',
        'first_button_url' => '/contact/',
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent
@endsection
