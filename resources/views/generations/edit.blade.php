@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Generación</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('generations.update', $generation)}}"  method="POST">
            @method('PUT')
            @include('generations._form')
        </form>
    </div>

@endsection