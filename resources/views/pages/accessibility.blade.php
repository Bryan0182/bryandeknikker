@extends('layouts.case')

@section('pageTitle')
    Accessibility Hub
@endsection

@section('metaDescription')
    Bekijk de gedetailleerde case van Accessibility Hub op het portfolio van Bryan de Knikker. Leer meer over de uitdagingen, oplossingen en resultaten van dit project.
@endsection

@section('cases-titel')
    Accessibility Hub
@endsection

@section('cases-beschrijving')
    Welkom bij onze spannende reis door de "Accessibility Hub"! In het kader van mijn schoolopdracht, samen met mijn toegewijde projectgroep, hebben we gewerkt aan een platform dat een brug slaat tussen mensen met verschillende beperkingen en organisaties die onderzoek willen uitvoeren. Stel je voor: een innovatief systeem waar mensen met een beperking zich kunnen aanmelden voor boeiende onderzoeken, terwijl organisaties hun vragen en studies kunnen indienen via een slimme API. Maar wacht, er is meer! Voordat organisaties aan de slag kunnen, moeten ze worden goedgekeurd door de toegewijde medewerkers van Accessibility. En laten we de onderzoeken niet vergeten - ook die moeten worden gekeurd voordat ze het groene licht krijgen. Klinkt als een uitdagend avontuur, toch? Laten we ons onderdompelen in de wereld van toegankelijkheid en innovatie!
@endsection

@section('button-link')
@endsection

@section('button-text')
@endsection

@section('logo-src')
    {{ asset('/images/accessibility.webp') }}
@endsection

@section('logo-alt')
    logo van Accessibility
@endsection

@section('case-punt-een-titel')
    Gebruiksvriendelijkheid
@endsection

@section('case-punt-een-beschrijving')
    Het was bij dit project erg belangrijk om de website gebruiksvriendelijk te maken, omdat er ook bezoekers zouden komen die een beperking hebben zoals slechtziend. De schermlezer die de bezoeker dan gebruikten moest wel goed door de website kunnen gaan.
@endsection

@section('case-punt-twee-titel')
    Overzichtelijk
@endsection

@section('case-punt-twee-beschrijving')
    De applicatie moest overzichtelijk blijven, daarom heb ik gekozen om bij het portaal van de medewerkers gebruik te maken van tabjes. Hierdoor bleef je op de homepagina en kon je via tabjes switchen naar andere gegevens. Zo was het simpel en duidelijk waar je de medewerkers van Accessibility kon bekijken, de nieuwe onderzoeksaanvragen kon bekijken en de ingediende ervaringsdeskundige en organisaties.
@endsection

@section('case-punt-drie-titel')
    Live verversen
@endsection

@section('case-punt-drie-beschrijving')
    Bij dit project was het een eis dat de organisaties en onderzoeken live werden opgehaald zonder een verversing van de pagina, dit heb ik gedaan via AJAX. Als er een verzoek in werd gestuurd door een organisatie of ervaringsdeskundige dan kwam dit gelijk zichtbaar bij de medewerkers van Accessibility.
@endsection

@section('case-explanation-titel')
    Wat was de case?
@endsection

@section('case-explanation-een-beschrijving')
    De "Accessibility Hub" case betreft de ontwikkeling van een webapplicatie voor Stichting Accessibility. Deze applicatie heeft als doel een panel van ongeveer 125 mensen met een beperking samen te brengen met organisaties en bedrijven, waarbij Stichting Accessibility fungeert als poortwachter voor onderzoeksvragen en ervaringsdeskundigen zorgvuldig selecteert. Belangrijke aspecten zijn toegankelijkheid en informatiebeveiliging.
@endsection

@section('case-explanation-twee-beschrijving')
    Het proces omvat registratie en goedkeuring van ervaringsdeskundigen, goedkeuring van onderzoeksaanvragen door beheerders, en inschrijvingen van ervaringsdeskundigen voor onderzoeken. Vereisten omvatten een toegankelijke webapplicatie conform WCAG 2.2 - AA, met portals voor ervaringsdeskundigen en beheerders, een REST API voor organisaties, en het gebruik van Python, SQL, HTML, CSS, JavaScript, AJAX, en een bekend framework zoals Flask, FastAPI, of Django. Additionele wensen zijn onder meer CRUD-functionaliteit voor organisaties, een aparte portal voor organisaties, proces- en UI-verbeteringen, en e-mailnotificaties.
@endsection

@section('case-details-een-titel')
    Uitdagingen
@endsection

@section('case-details-een-een-beschrijving')
    Zoals je misschien al verwacht waren er bij dit project een hoop uitdagingen. We begonnen deze periode met een nieuw projectgroepje, op het begin blijft dat aftasten waar iedereens kwaliteiten liggen. Daarbij gingen we de techniek bepalen waarmee we dit project gingen aanvliegen, wij kozen voor Django een nieuw framework waar we nog nooit mee hadden gewerkt, maar we wilden eens iets anders proberen. We kozen ook voor platte JavaScript en geen JQuery, omdat JavaScript in onze ogen meer een uitdaging is dan JQuery en als je JavaScript begrijpt kan je ook JQuery schrijven. Er moesten ook onwijs veel CRUD schermen gemaakt worden voor deze applicatie, tel daar de nieuwe technieken bij als uitzoekwerk en je besefte al snel dat er best wat vaart achter deze case zat.
@endsection

@section('case-details-een-twee-beschrijving')
@endsection

@section('image-een-src')
    {{ asset('/images/accessibility-home.webp') }}
@endsection

@section('image-een-alt')
    Een schermafbeelding van de applicatie, op de schermafbeelding is te zien hoe het startscherm van de medewerkers eruit ziet.
@endsection

@section('image-twee-src')
    {{ asset('/images/accessibility-research.webp') }}
@endsection

@section('image-twee-alt')
    Een schermafbeelding van de applicatie, op de schermafbeelding is te zien hoe het scherm van de onderzoekdetails eruit ziet.
@endsection

@section('case-details-twee-titel')
    Aanpak
@endsection

@section('case-details-twee-een-beschrijving')
    We waren begonnen met het opzetten van de applicatie. Ik vond het belangrijk om een goede basis te hebben, zodat iedereen op dezelfde manier zou werken. Ik heb dus een basis pagina opgezet met een header en footer en daarin variabelen geplaatst waar dan de content kwam te staan voor die specifieke pagina, daarnaast heb ik de database klaargezet en gewerkt aan het opzetten van de verschillende folders binnen de applicatie. Dit alles om ervoor te zorgen dat de start zo soepel mogelijk verliep.
@endsection

@section('case-details-twee-twee-beschrijving')
    Deze aanpak heeft wel zijn vruchten afgeworpen, door dit te doen kon iedereen makkelijk van start en liepen we niet gelijk vast doordat we geen basis hadden en iedereen het op een eigen manier deed wat later niet met elkaar kon samenwerken. Uiteindelijk hebben we een mooie applicatie neer kunnen zetten die goed werkte en voldeed aan de eisen die aan het begin waren gesteld. Het heeft een hoop werk gekost, maar dat heeft ook een hoop opgeleverd.
@endsection
