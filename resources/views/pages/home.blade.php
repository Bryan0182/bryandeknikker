@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('metaDescription')
    Ontdek het persoonlijke portfolio van Bryan de Knikker. Bekijk zijn projecten, vaardigheden en ervaring. Neem contact op voor samenwerkingsmogelijkheden.
@endsection

@section('opengraphMetaTitle')
    Home - Bryan de Knikker
@endsection
@section('opengraphMetaDescription')
    Ontdek het persoonlijke portfolio van Bryan de Knikker. Bekijk zijn projecten, vaardigheden en ervaring. Neem contact op voor samenwerkingsmogelijkheden.
@endsection
@section('opengraphMetaUrl')
    https://www.bryandeknikker.nl
@endsection
@section('opengraphMetaImage')
    {{ asset('images/profielfoto.webp') }}
@endsection

    @section('content')
    <div class="container-fluid align-items-center d-flex flex-column page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 align-items-center d-flex text-column">
                    <div class="row">
                        <div class="col-12 title">
                            <h1>Bryan de Knikke</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 intro-text">
                            <p>Ben je benieuwd naar de grenzeloze mogelijkheden van code? Ik ben Bryan de Knikker, een
                                leergierige software developer in opleiding, ik ben klaar om de digitale wereld te
                                verkennen. Welkom op mijn portfolio, waar websites tot leven komen en hand in hand gaan
                                met creativiteit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-md-end text-center profile-image-column">
                    <img src="{{ asset('images/profielfoto.webp') }}" class="img-fluid profile-picture" loading="eager" alt="Profielfoto" width="250px" height="auto">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid align-items-center d-flex flex-column">
        <div class="container image-text">
            <div class="row">
                <div class="col-md-4 col-sm-12 justify-content-center d-flex text-image-column">
                    <div class="vector-column">
                        <img src="{{ asset('/images/Programming_black.gif') }}" class="img-fluid"
                             loading="eager" alt="Web developer" width="350px" height="350px">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 align-items-center d-flex text-column">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-12 title">
                                <h2>Wat doe ik?</h2>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-12">
                                <p>Ik besteed veel tijd aan het verbeteren van mijn eigen
                                    kennis en vaardigheden. In mijn opleiding staat Python centraal, en ik heb ontdekt
                                    dat ik het een bijzonder leuke programmeertaal vind om mee te werken vanwege zijn
                                    veelzijdigheid. Python biedt een breed scala aan toepassingen, waardoor ik constant
                                    nieuwe dingen leer en mijn vaardigheden blijf uitbreiden.
                                    <br>
                                    Naast mijn studie werk ik ook regelmatig met WordPress op mijn werk. Daar ben ik
                                    voornamelijk bezig met het ontwikkelen van websites. We passen WordPress aan door
                                    voor elke website een uniek thema te ontwikkelen. Deze taak stelt me in staat mijn
                                    creativiteit te uiten en mijn programmeervaardigheden verder te verfijnen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid align-items-center d-flex flex-column projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Mijn laatste cases</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-evenly projects-row">
                <a href="{{ route('accessibility') }}" class="projects-column">
                    <div class="col-lg-4 col-md-12 justify-content-center align-items-center d-flex projects-block">
                        <img src="{{ asset('/images/accessibility.webp') }}" loading="lazy" alt="Logo van Accessibility" width="170px" height="auto">
                    </div>
                </a>
                <a href="{{ route('testcorrect') }}" class="projects-column">
                    <div class="col-lg-4 col-md-12 justify-content-center align-items-center d-flex projects-block">
                        <img src="{{ asset('/images/testcorrect.svg') }}" loading="lazy" alt="Logo van Test-Correct" width="170px" height="auto">
                    </div>
                </a>
                <a href="{{ route('kunstvanelk') }}" class="projects-column">
                    <div class="col-lg-4 col-md-12 justify-content-center align-items-center d-flex projects-block">
                        <img src="{{ asset('/images/kunstvanelk.webp') }}" loading="lazy" alt="Logo van Kunst van Elk" width="170px" height="auto">
                    </div>
                </a>
            </div>
        </div>
        <div class="container justify-content-center d-flex">
            <div class="row">
                <a href="{{ route('cases') }}" class="btn-gradient"><span>Bekijk alle cases</span></a>
            </div>
        </div>
    </div>

    <div class="container-fluid align-items-center d-flex flex-column">
        <div class="container image-text">
            <div class="row">
                <div class="col-md-8 col-sm-12 align-items-center d-flex image-text-column">
                    <div class="row">
                        <div class="col-12 title">
                            <h2>Wat wil ik nog doen?</h2>
                        </div>
                        <div class="col-12">
                            <p>Ik ben van plan om mijn kennis van Python verder te verdiepen en meer te gaan
                                experimenteren met frameworks. Het gebruik van frameworks spreekt mij enorm aan vanwege
                                de gestructureerde aanpak die ze bieden. Met frameworks heb je duidelijke richtlijnen en
                                structuren waarbinnen je kunt werken, waardoor het proces van het opzetten van websites
                                aanzienlijk wordt versneld. Het geeft me een gevoel van efficiëntie en zekerheid,
                                wetende dat ik kan bouwen op de solide basis die het framework biedt. Dit stelt me in
                                staat om me meer te concentreren op het ontwikkelen van functionaliteit en het creëren
                                van waarde voor gebruikers, in plaats van tijd te besteden aan het heruitvinden van het
                                wiel bij elke nieuwe project. Het vooruitzicht om mijn vaardigheden te verbeteren en
                                meer te leren over de verschillende mogelijkheden die Python-frameworks te bieden
                                hebben, inspireert me en ik kijk er naar uit om mijn kennis en expertise op dit gebied
                                verder uit te breiden.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 justify-content-center d-flex text-image-column">
                    <div class="vector-column">
                        <img src="{{ asset('/images/web-development.svg') }}" class="img-fluid" loading="lazy" alt="Web developer" width="350px" height="350px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
