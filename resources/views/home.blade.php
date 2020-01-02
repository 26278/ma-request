@extends('layout.master')
@section('stylesheets')
    <link rel="stylesheet" href="/css/carousel.css">
@endsection

@section('main')
    <section class="main__acties">
        <div class="acties__filter">
            <div class="filter__content">
                <h2 class="content__title">Acties</h2>
                <p class="content__text">1e en 2e jaars studenten van de opleiding Mediamanagement hebben hun best
                    gedaan om acties te voeren om geld op te halen voor Make a Wish. </p>
                <a class="content__readmore readmore--white" href="{{url('/acties')}}">Lees meer</a>
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
                    <a class="readmore--blue" href="https://makeawishnederland.org/actie/1374/media-college-amsterdam-in-actie" target="_blank">DONEER NU!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="main__game">
        <div class="game__filter">
            <div class="filter__article">
                <h2 class="article__title">Doe mee aan de VR Game!</h2>
                <p class="article__text">3e jaars game developers hebben een
                    Viritual Reality game ontwikkeld als actie voor Make-A-Wish. Doe mee en behaal de High Score!</p>
                <!-- <a class="article__readmore readmore--white" href="{{url('/acties')}}">Lees meer</a> -->
            </div>
        </div>
    </section>
    <section class="main__reportages">
        <div class="reportages__article-repo">
            <h2 class="article-repo__title">Bekijk de dag-reportages</h2>
            <p class="article-repo__text">De studenten van de opleiding Media Management hebben hun elke dag een
                rapportage gemaakt van hun dag waarin ze actie voeren. <br>Bekijk hun video’s!</p>
            <a href="{{url('/reportages')}}" class="article-repo__readmore readmore--black">Lees meer</a>
        </div>
        <div class="reportage__wrap">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="container__slider fade">
                    <img class="slider__img" src="img/variety-of-assorted-designed-cookies-752499.jpg" style="width:100%; height: auto;" onclick="location.href='{{url('/reportages')}}'">
                </div>

                <div class="container__slider fade">
                    <img class="slider__img" src="img/shallow-focus-photo-of-video-recording-3062556.jpg" style="width:100%" onclick="location.href='{{url('/reportages')}}'">
                </div>

                <div class="container__slider fade">
                    <img class="slider__img" src="img/photography-of-a-woman-wearing-virtual-reality-headset-911682.jpg" style="width:100%" onclick="location.href='{{url('/reportages')}}'">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

    </section>
    {{--<section class="main__livestream">--}}
        {{--<div class="livestream__filter">--}}
            {{--<iframe class="filter__video" src="https://www.youtube.com/embed/tgbNymZ7vqY">--}}
            {{--</iframe>--}}
            {{--<div class="filter__article-live">--}}
                {{--<h2 class="article-live__title">Volg de livestream!</h2>--}}
                {{--<p class="article-live__text">Op 19 december 2019 om 16:45 gaan wij live zodat jullie kunnen zien wat wij in vredesnaam aan het doen zijn.--}}
                    {{--Mis het niet!</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="main__commercial">--}}
        {{--<div class="commercial__article-commercial">--}}
            {{--<div class="article-commercial__wrapper">--}}
                {{--<h2 class="wrapper__title">Nog steeds niet overtuigd?</h2>--}}
                {{--<p class="wrapper__text">Kijk dan deze commercial!<br>--}}
                    {{--Onze studenten van media management doen hun uiterste best om donateurs binnen te krijgen voor--}}
                    {{--Make-A-Wish.</p>--}}
            {{--</div>--}}

        {{--</div>--}}
            {{--<iframe class="commercial__video" src="https://www.youtube.com/embed/tgbNymZ7vqY">--}}
            {{--</iframe>--}}
    {{--</section>--}}

    <script src="{{url('/js/slider.js')}}"></script>
@endsection
