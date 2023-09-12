@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Habilidad Oculta</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('hiddenHabilities.update', $hiddenHability)}}"  method="POST">
            @method('PUT')
            @include('hiddenHabilities._form')
        </form>
    </div>

@endsection