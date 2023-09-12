@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Pokemon</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('pokemons.store')}}"  method="POST">
            @include('pokemons._form')
        </form>
    </div>

@endsection