@extends('layouts.case')

@section('pageTitle')
    Test-Correct
@endsection

@section('metaDescription')
    Bekijk de gedetailleerde case van Test-Correct op het portfolio van Bryan de Knikker. Leer meer over de uitdagingen, oplossingen en resultaten van dit project.
@endsection

@section('cases-titel')
    Test-Correct
@endsection

@section('cases-beschrijving')
    Bij deze schoolopdracht kregen we de uitdagende taak om een systeem te ontwikkelen waarmee docenten op een creatieve manier toetsvragen konden maken, allemaal dankzij de magie van ChatGPT! Stel je voor: een docent kon simpelweg een notitie maken in ons gloednieuwe systeem. Vervolgens nam ChatGPT de tekst van die notitie, toverde er een briljante toetsvraag van en sloeg deze op in een database. En het beste van alles? De docent had de vrijheid om de vraag nog aan te passen of zelfs te verwijderen als het nodig was.
@endsection

@section('button-link')
@endsection

@section('button-text')
@endsection

@section('logo-src')
    {{ asset('/images/testcorrect.svg') }}
@endsection

@section('logo-alt')
    logo van Test-Correct
@endsection

@section('case-punt-een-titel')
    ChatGPT
@endsection

@section('case-punt-een-beschrijving')
    Bij dit project stond één uitdaging centraal: het naadloos integreren van onze applicatie met ChatGPT. Ons doel was om ervoor te zorgen dat de input van gebruikers correct werd doorgegeven aan ChatGPT, zodat het de juiste output kon genereren. Vervolgens moesten we ervoor zorgen dat deze output op een georganiseerde manier werd opgeslagen in onze database. Dit vereiste een zorgvuldige afstemming tussen verschillende onderdelen van de applicatie en ChatGPT, wat een boeiende en uitdagende taak met zich meebracht.
@endsection

@section('case-punt-twee-titel')
    Technieken
@endsection

@section('case-punt-twee-beschrijving')
    Bij deze spannende case stapten we voor het eerst in de wereld van web development met Python, een totaal nieuwe ervaring voor mij aangezien ik normaal gesproken met PHP werk. Hoewel ik eerder al met Python had gewerkt tijdens de vorige periode, was dat met Pygame, een totaal ander gebied. Dit keer gingen we aan de slag met Flask, wat een compleet nieuwe en uitdagende ervaring was.
@endsection

@section('case-punt-drie-titel')
    Database
@endsection

@section('case-punt-drie-beschrijving')
    We doken ook in de wereld van databases, met SQLite dit keer. Hoewel ik al ervaring had met MySQL, was het toch een nieuwe uitdaging om met SQLite te werken. We moesten gegevens opslaan, aanpassen, lezen en verwijderen, wat enorm leuk was omdat we allerlei schermen moesten ontwikkelen die al deze functionaliteiten ondersteunden.
@endsection

@section('case-explanation-titel')
    Wat was de case?
@endsection

@section('case-explanation-een-beschrijving')
    Stel je eens voor: een briljante applicatie die de kracht van ChatGPT benut om docenten te helpen bij het maken van toetsvragen. Wanneer een docent een notitie maakt, wordt de tekst automatisch gebruikt om een slimme vraag te genereren door ChatGPT. Deze vraag wordt vervolgens netjes opgeslagen in de database, klaar om later door de docent te worden aangepast.
@endsection

@section('case-explanation-twee-beschrijving')
    Met deze innovatieve tool kunnen docenten in een handomdraai hoogwaardige toetsvragen creëren, gebaseerd op de informatie die ze verzamelen. Normaal gesproken zouden docenten dit hele proces zelf moeten doorlopen, maar hoe geweldig is het om een slimme assistent te hebben die hen hierbij ondersteunt? Deze applicatie maakt het leven van docenten niet alleen makkelijker, maar ook veel leuker!
@endsection

@section('case-details-een-titel')
    Uitdagingen
@endsection

@section('case-details-een-een-beschrijving')
    Bij dit project kwamen we voor een paar leuke uitdagingen te staan. Zo moesten we voor het eerst aan de slag met Flask, wat voor mij persoonlijk een totaal nieuwe ervaring was. En alsof dat nog niet genoeg was, waren er ook teamleden die voor het eerst hun tanden gingen zetten in HTML, CSS en JavaScript. Dit zorgde voor een lekker gevarieerde en dynamische groep. We konden elkaar mooi aanvullen, want waar de één even vastliep, sprong de ander bij met frisse ideeën.
@endsection

@section('case-details-een-twee-beschrijving')
    Alsof dat nog niet genoeg was, kregen we ook te maken met een database waarin we gegevens moesten opslaan en raadplegen. Dat bracht natuassetijk de nodige uitdagingen met zich mee, vooral omdat we met meerdere teamleden tegelijkertijd aan diezelfde database werkten. Maar dat maakte het juist ook zo interessant en leerzaam!
@endsection

@section('image-een-src')
    {{ asset('/images/testcorrect-home.webp') }}
@endsection

@section('image-een-alt')
    Een schermafbeelding van de applicatie, op de schermafbeelding is te zien hoe het startscherm van de docent eruit ziet.
@endsection

@section('image-twee-src')
    {{ asset('/images/testcorrect-note.webp') }}
@endsection

@section('image-twee-alt')
    Een schermafbeelding van de applicatie, op de schermafbeelding is te zien hoe het scherm eruit ziet als je een nieuwe notitie gaat maken.
@endsection

@section('case-details-twee-titel')
    Aanpak
@endsection

@section('case-details-twee-een-beschrijving')
    We zijn gestart met het opzetten van de applicatie. Voor mij was het cruciaal om een stevige basis te leggen, zodat iedereen op dezelfde manier kon werken. Daarom heb ik een basispagina gecreëerd met een header en footer, waarin variabelen werden geplaatst voor de specifieke inhoud van elke pagina. Daarnaast heb ik de database gereedgemaakt en gewerkt aan het structureren van de verschillende mappen binnen de applicatie. Dit alles met als doel een zo vlekkeloos mogelijke start te garanderen.
@endsection

@section('case-details-twee-twee-beschrijving')
    Deze strategie heeft zeker zijn voordelen opgeleverd. Door deze aanpak konden we moeiteloos van start gaan en voorkwamen we dat we meteen vastliepen doordat iedereen op zijn eigen manier te werk ging, wat later problemen zou kunnen veroorzaken bij de samenwerking. Uiteindelijk zijn we erin geslaagd een prachtige applicatie te ontwikkelen die goed functioneerde en voldeed aan de gestelde eisen. Het kostte veel inspanning, maar het heeft ook veel opgeleverd.
@endsection
