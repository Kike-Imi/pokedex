@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Habilidad Oculta</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('hiddenHabilities.index')}}"  method="">
            @include('hiddenHabilities._form')
        </form>
    </div>

@endsection