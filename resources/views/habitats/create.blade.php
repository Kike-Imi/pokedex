@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Habitat</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('habitats.store')}}"  method="POST">
            @include('habitats._form')
        </form>
    </div>

@endsection