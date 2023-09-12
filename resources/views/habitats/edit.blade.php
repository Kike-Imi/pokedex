@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Habitat</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('habitats.update', $habitat)}}"  method="POST">
            @method('PUT')
            @include('habitats._form')
        </form>
    </div>

@endsection