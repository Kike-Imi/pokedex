@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Habilidad Oculta</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('hiddenHabilities.store')}}"  method="POST">
            @include('hiddenHabilities._form')
        </form>
    </div>

@endsection