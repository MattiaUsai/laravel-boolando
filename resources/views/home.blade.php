@extends('layout.app')

@section('main')

<div class="row">
    <!-- larghezza massima 1200px -->
    <div class="container">
        <!-- imposta la larghezza del contenuto a 1/3 della larghezza del container  -->

        @foreach ( $products as $product )



        <div class="content col-33">
            <!-- immagine prodotto -->

            <img class="view" src="{{ Vite::asset('resources/img/') }}{{$product['frontImage']}}" alt="" />
            <!-- immagine da visualizzare al passare del mouse -->
            <img class="hover" src="{{ Vite::asset('resources/img/') }}{{$product['backImage']}}" alt="" />
            <!-- contenitore cuori per aggiungere ai preferiti  -->
            <div class="heart-contain">
                <!-- cuore diventa rosso al passare del mouse -->
                <span class="heart-view">&hearts;</span>
                <span class="heart-hover">&hearts;</span>
            </div>
            <!-- marca prodotto -->
            <span class="mark">{{$product['brand']}}</span>
            <!-- nome del prodotto  -->
            <h2 class="name">{{$product['name']}}</h2>
            <!-- prezzo del prodotto  -->
            <span class="price">{{$product['price']}}</span>
            <!-- vecchio prezzo del prodotto  -->
        </div>
        @endforeach

    </div>
</div>
@endsection