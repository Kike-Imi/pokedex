@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Generación</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('generations.index')}}"  method="">
            @include('generations._form')
        </form>
    </div>

@endsection