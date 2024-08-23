<?php

function berekenLeeftijd($geboorteDatum) {
    $geboorteDatumObj = new DateTime($geboorteDatum);
    $huidigeDatumObj = new DateTime();
    $leeftijdInterval = $huidigeDatumObj->diff($geboorteDatumObj);
    $leeftijd = $leeftijdInterval->y;
    return $leeftijd;
}

$geboorteDatum = '2004-06-27'; // Vul hier je geboortedatum in
$leeftijd = berekenLeeftijd($geboorteDatum);
?>


@extends('layouts.base')

@section('pageTitle')
    Over mij
@endsection

@section('metaDescription')
    Ontdek het persoonlijke portfolio van Bryan de Knikker. Bekijk zijn projecten, vaardigheden en ervaring. Neem contact op voor samenwerkingsmogelijkheden.
@endsection

@section('opengraphMetaTitle')
    Over mij - Bryan de Knikker
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
    <div class="container-fluid align-items-center d-flex flex-column">
        <div class="container image-text">
            <div class="row">
                <div class="col-md-8 col-sm-12 align-items-center d-flex image-text-column">
                    <div class="row">
                        <div class="col-12 title">
                            <h2>Wie ben ik?</h2>
                        </div>
                        <div class="col-12">
                            <p>Hallo, ik ben Bryan de Knikker, momenteel <?php echo $leeftijd ?> jaar oud en studeer Software Development aan
                                de Hogeschool Rotterdam. Mijn focus ligt voornamelijk op het programmeren in Python en
                                het verkennen van Frameworks, HTML, CSS, JavaScript en databases.</p>
                            <p>Wat mijn opleiding zo waardevol maakt, is de praktijkervaring die ik opdoe en de
                                diversiteit aan projecten die ik tegenkom. Van complexe programmeeruitdagingen tot het
                                ontwikkelen van webapplicaties, elke dag biedt nieuwe inzichten en
                                groeimogelijkheden.</p>
                            <p>Naast mijn studie ben ik werkzaam bij DoubleWeb, een webdevelopment bureau in Gouda. Hier
                                richt ik me voornamelijk op het ontwikkelen van Wordpress websites. Mijn taken omvatten
                                het bouwen van op maat gemaakte oplossingen, het ondersteunen van klanten en het
                                implementeren van nieuwe functionaliteiten.</p>
                            <p>Kortom, ik ben gedreven door mijn passie voor technologie en webontwikkeling, en ik kijk
                                uit naar de verdere ontwikkeling van mijn vaardigheden en kennis in deze boeiende
                                vakgebieden.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 justify-content-center d-flex text-image-column">
                    <div class="vector-column">
                        <img src="{{ asset('/images/software-tester.svg') }}" class="img-fluid" loading="lazy"
                             alt="Web developer" width="350px" height="350px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container experience-container">
        <div class="row">
            <div class="col-md-6">
                <h2>Over mij</h2>
                <p>Op mijn profiel zie je een gedetailleerd overzicht van zowel mijn werkervaring als mijn opleidingen. Gedurende mijn studietraject heb ik waardevolle ervaring opgedaan door stage te lopen bij verschillende bedrijven. Deze stages boden mij de mogelijkheid om diverse aspecten van het vakgebied te verkennen en mijn vaardigheden verder te ontwikkelen. Elk bedrijf en elke opdracht bracht unieke uitdagingen met zich mee, waardoor ik mijn kennis kon verdiepen en mijn professionele netwerk kon uitbreiden.</p>
            </div>
            <div class="col-md-6" id="experience-section">
                <div class="experience-block">
                    <h3>Hogeschool Rotterdam</h3>
                    <h6>Associate's degree, Software Developer </h6>
                    <b>September 2023 - Heden</b>
                    <p>Bij de Hogeschool Rotterdam vergroot ik mijn kennis van HTML, CSS en JavaScript, terwijl ik tevens met Python als hoofdtaal werk. We maken gebruik van diverse frameworks en voeren opdrachten uit voor echte opdrachtgevers.</p>
                </div>
                <div class="experience-block">
                    <h3>DoubleWeb</h3>
                    <h6>Trainee Developer</h6>
                    <b>Juni 2023 - Heden</b>
                    <p>Als Trainee developer ben ik verantwoordelijk voor het helpen bouwen aan verschillende WordPress websites voor klanten. Ik help ook bij het oplossen van tickets bij verschillende klanten, hierdoor krijg ik ervaring in het oplossen van problemen en het implementeren daarvan.</p>
                </div>
                <div class="experience-block">
                    <h3>WebPresto</h3>
                    <h6>Software Developer</h6>
                    <b>September 2022 - Heden</b>
                    <p>Als software developer bij WebPresto ondersteun ik bij het maken van WordPress websites, daarnaast ben ik verantwoordelijk voor het schrijven van de blogs die 2 keer per maand verschijnen op de website.</p>
                </div>
                <div class="experience-block">
                    <h3>DoubleSmart</h3>
                    <h6>Stagiair</h6>
                    <b>Januari 2023 - Juni 2023</b>
                    <p>Bij DoubleSmart heb ik geleerd hoe SEO werkt en hoe je dit het beste kon aanpakken om een zo goed mogelijke score te krijgen op een website. Ik was verantwoordelijk voor het wijzigen van blog websites, deze moesten een moderner uiterlijk krijgen waar ik aan de slag kon met DIVI. Ik heb veel geleerd over hoe DIVI werkt en hoe je met WordPress zo goed mogelijk op SEO kan scoren.</p>
                </div>
                <div class="experience-block">
                    <h3>Albert Heijn</h3>
                    <h6>Kassamedewerker B</h6>
                    <b>Juni 2022 - Juni 2023</b>
                    <p>Bij deze functie was ik verantwoordelijk voor de verkoopafhandeling in de supermarkt. Ik moest ervoor zorgen dat er steekproeven werden uitgevoerd op het zelfscanplein en ik moest service verlenen achter de servicebalie. Ik vond dit leuk om te doen omdat je veel klanten kon helpen en hun een glimlach kon bezorgen door de goede service.</p>
                </div>
                <div class="experience-block">
                    <h3>Albert Heijn</h3>
                    <h6>Vakkenvuller</h6>
                    <b>Oktober 2019 - Juni 2022</b>
                    <p>Als vakkenvuller was ik verantwoordelijk voor het vullen van de schappen. Ik heb gewerkt op de koeling afdeling en op de houdbare afdeling. Ik vond dat erg leuk om te doen, omdat je vaak klantcontact had die vragen stelde over producten.</p>
                </div>
                <div class="experience-block">
                    <h3>WebRabbitz</h3>
                    <h6>Stagiair</h6>
                    <b>Augustus 2021 - Januari 2022</b>
                    <p>Bij deze stage heb ik geleerd om samen te werken aan het maken van een website, ik heb meerdere websites ontwikkeld of aanpassingen gedaan aan bestaande websites. Dit was erg leerzaam en leuk om te doen, daarnaast heb ik mijn kennis verbreed over de standaard programmeertalen die er zijn.</p>
                </div>
                <div class="experience-block">
                    <h3>MboRijnland</h3>
                    <h6>Mbo niveau 4, Software Developer</h6>
                    <b>Augustus 2020 - Augustus 2023</b>
                    <p>Bij mboRijnland ben ik gestart met mijn ontwikkeling als Software Developer. Daar legde ik een stevige basis in HTML, CSS, JavaScript en PHP. Ik leerde er werken met frameworks en kon diverse projecten succesvol afronden.</p>
                </div>
                <div class="experience-block">
                    <h3>SolidBE</h3>
                    <h6>Stagiair</h6>
                    <b>Januari 2018 - Januari 2018</b>
                    <p>Tijdens mijn stage heb ik mij voornamelijk gericht op het werken met hardware, waarbij switches en routers centraal stonden. Hoewel ik aanvankelijk weinig ervaring had met deze apparatuur, heb ik tijdens mijn stageperiode een basis weten te leggen en waardevolle kennis opgedaan over hun werking en toepassingen.</p>
                </div>
                <div class="experience-block">
                    <h3>Coenecoop College</h3>
                    <h6>Mavo</h6>
                    <b>Augustus 2016 - Juli 2020</b>
                    <p>Bij het Coenecoop College heb ik mijn mavo afgerond en mezelf als individu ontwikkeld. Hier ben ik me gaan toeleggen op de Science keuzestroom, omdat mijn interesse in de wereld van computers al groot was.</p>
                </div>
            </div>
            <div class="vertical-line"></div>
        </div>
    </div>

@endsection
