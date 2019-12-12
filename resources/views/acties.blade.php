@extends('layout.master')
@section('stylesheets')
    <link rel="stylesheet" href="/css/modal.css">
@endsection

@section('main')
    <section class="main__acties">
        <div class="acties__filter">
            <div class="filter__article">
                <h1 class="article__title">Acties</h1>
                <p class="article__text">1e en 2e jaars studenten van de opleiding Mediamanagement hebben hun best gedaan om acties te voeren om geld op te halen voor Make a Wish. </p>
            </div>
        </div>
    </section>
    <section class="main__grid">

    @foreach($modals as $modal)
        <!-- Trigger/Open The Modal -->
            <div class="myBtn__multi grid__element" style="background-image: url('{{url('img/' . $modal->img)}}');">
            <div class="element__filter"></div>
            </div>

        <!-- The Modal -->
        <div id="myModal--{{$modal->id}}" class="modal modal__multi">
            <!-- Modal content -->
            <div class="modal-content">
                <div><span class="close close__multi">&times;</span></div>
                <img class="modal-content__img" src="img/{{$modal->img}}" alt="Actiefoto">
                <h2 class="modal-content__title">{{$modal->title}}</h2>
                <p class="modal-content__text">{{$modal->content}}</p>
                <p class="modal-content__autors">{{$modal->autor}}</p>
            </div>
        </div>
    </div>
    @endforeach

    </section>


    <script src="/js/modal.js"></script>
@endsection


