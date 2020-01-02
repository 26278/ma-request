@extends('layout.master')

@section('stylesheets')

@endsection

@section('main')
    <section class="main__reportages">
        <div class="reportages__filter">
            <div class="filter__article">
                <h1 class="article__title">Dag reportages</h1>
                <p class="article__text">1e en 2e jaars studenten van de opleiding Mediamanagement hebben hun best gedaan om acties te voeren om geld op te halen voor Make a Wish. </p>
            </div>
        </div>
    </section>
    <section class="main__maw">
        <div class="maw__wrap">
            <img class="wrap__logo" src="img/maw-logo.png" alt="Make-A-Wish">
            <iframe class="wrap__video" src="https://www.youtube.com/embed/uMwY_tnRNOU">
            </iframe>
        </div>
        <div class="maw__wrap">
            <div class="wrap__article-maw">
                <h2 class="article-maw__title">Kom in actie!</h2>
                <hr class="article-maw__hr">
                <p class="article-maw__text">Elke dag horen gemiddeld 3 families in Nederland dat hun kind een ernstige, soms zelfs levensbedreigende ziekte heeft. Het gezinsleven verandert in één klap totaal. Die impact is moeilijk voor te stellen. Make-A-Wish Nederland wil al deze jonge patiënten tussen 3 en 18 jaar een positieve boost meegeven. Een ervaring die ze sterker maakt. En vertrouwen en kracht geeft voor de toekomst. Dat doen we door samen hun allerliefste wens te laten uitkomen.</p>
                <div class="centerwrap">
                    <a class="readmore--blue article__donate" href="https://makeawishnederland.org/actie/1374/media-college-amsterdam-in-actie">DONEER NU!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="main__verslag">
        <div class="verslag__article-verslag">
            <h2 class="article-verslag__title">Maandag 17 december 2019<br>Dag reportage</h2>
            <p class="article-verslag__text"></p>
        </div>
        <iframe class="verslag__video" src="https://www.youtube.com/embed/cTy3aH9Oi-k"></iframe>
    </section>
    <section class="main__verslag--white">
    <iframe class="verslag__video" src="https://www.youtube.com/embed/cqzBrGI9-wQ"></iframe>
    <div class="verslag__article-verslag">
    <h2 class="article-verslag__title">Maandag 18 december 2019<br>Dag reportage</h2>
    <p class="article-verslag__text"></p>
    </div>
    </section>
    {{--<section class="main__verslag">--}}
    {{--<div class="verslag__article-verslag">--}}
    {{--<h2 class="article-verslag__title">Dag verslag #3</h2>--}}
    {{--<p class="article-verslag__text">Lorem ipsum dolor amet ramps normcore street art vaporware, butcher umami tofu--}}
    {{--banh mi. Raclette chicharrones activated charcoal tote bag scenester irony. Lomo disrupt air plant--}}
    {{--semiotics helvetica butcher street art 90’s tbh chartreuse migas whatever twee hot chicken blue bottle.--}}
    {{--Echo park authentic squid pour-over, raw denim salvia franzen mixtape portland forage wolf. Yr tacos--}}
    {{--keffiyeh meditation unicorn vinyl street art photo booth live-edge portland chia meggings hell of--}}
    {{--Tumblr roof party.</p>--}}
    {{--</div>--}}
    {{--<iframe class="verslag__video" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>--}}
    {{--</section>--}}

@endsection
