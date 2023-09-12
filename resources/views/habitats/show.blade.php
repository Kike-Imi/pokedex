@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Habitat</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('habitats.index')}}"  method="">
            @include('habitats._form')
        </form>
    </div>

@endsection