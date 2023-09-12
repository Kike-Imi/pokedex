@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Pokemon</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('pokemons.index')}}"  method="">
            @include('pokemons._form')
        </form>
    </div>

@endsection