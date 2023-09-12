@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Pokemon</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('pokemons.update', $pokemon)}}"  method="POST">
            @method('PUT')
            @include('pokemons._form')
        </form>
    </div>

@endsection