@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/hero.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/services.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.hero', [
        'title' => 'Mijn diensten',
        'description' => 'Technologie en creativiteit komen samen om jouw project te laten groeien. Of het nu gaat om een website, applicatie of online strategie – ik bied praktische en op maat gemaakte oplossingen die echt werken. Bekijk hieronder hoe ik kan helpen met jouw digitale plannen.',
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => 'Lees meer',
        'second_button_url' => '',
        'imageSrc' => 'blob-profielfoto-transparent.png',
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 300,
        'height' => 300,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.services', [
        'title' => 'De diensten',
        'description' => 'Ontdek mijn professionele diensten die jouw bedrijf helpen groeien.',
        'services' => [
            [
                'title' => 'Website Laten Maken',
                'description' => 'Ik ontwerp en bouw gebruiksvriendelijke, responsive websites die werken op alle apparaten. Of het nu gaat om een eenvoudige site of een uitgebreide webshop, ik zorg voor een unieke online aanwezigheid die past bij jouw merk.',
                'url' => route('diensten.web'),
                'image' => 'globe-black.svg',
                'image-dark' => 'globe.svg'
            ],
            [
                'title' => 'Applicatie Laten Maken',
                'description' => 'Van mobiele apps tot complexe webapplicaties, ik ontwikkel op maat gemaakte oplossingen die aansluiten op de specifieke behoeften van jouw project. Ik gebruik moderne technologieën en zorg voor een soepele gebruikerservaring.',
                'url' => route('diensten.app'),
                'image' => 'application-black.svg',
                'image-dark' => 'application.svg'
            ],
            [
                'title' => 'SEO Werkzaamheden',
                'description' => 'Met mijn SEO-diensten zorg ik ervoor dat jouw website beter gevonden wordt in zoekmachines. Van technische optimalisatie tot content creatie – ik help je om hoger te ranken en meer verkeer te genereren.',
                'url' => route('diensten.seo'),
                'image' => 'magnifying-glass-black.svg',
                'image-dark' => 'magnifying-glass.svg'
            ],
            [
                'title' => 'Social Werkzaamheden',
                'description' => 'Ik ondersteun je met het beheren van social media-kanalen en het creëren van een effectieve online strategie. Laat je social media een krachtige tool worden om met je doelgroep te communiceren en je merk te versterken.',
                'url' => route('diensten.seo'),
                'image' => 'social-black.svg',
                'image-dark' => 'social.svg'
            ],
            [
                'title' => 'Design Werkzaamheden',
                'description' => 'Met oog voor detail creëer ik aantrekkelijke ontwerpen die jouw merk op een professionele manier presenteren. Van logo’s tot complete huisstijlen – ik zorg ervoor dat jouw visuele identiteit perfect aansluit bij je doelgroep.',
                'url' => route('diensten.seo'),
                'image' => 'webdesign-black.svg',
                'image-dark' => 'webdesign.svg'
            ],
            [
                'title' => 'Hosting',
                'description' => 'Ik bied betrouwbare en snelle hostingpakketten, inclusief technische ondersteuning, zodat je website altijd online is en optimaal presteert. Ontzorg jezelf en laat het beheer van je hosting aan mij over.',
                'url' => route('diensten.seo'),
                'image' => 'server-black.svg',
                'image-dark' => 'server.svg'
            ]
        ]
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Twijfel je nog?',
        'description' => 'Ik help je graag met het realiseren van jouw ideeën. Neem contact met mij op en laten we samen kijken hoe we jouw ideeën tot leven kunnen brengen.',
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Benieuwd wat ik voor jou kan betekenen?',
        'description' => 'Stuur me een bericht en laten we jouw ideeën tot leven brengen!',
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent

@endsection
