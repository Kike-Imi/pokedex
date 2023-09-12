@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Generación</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('generations.store')}}"  method="POST">
            @include('generations._form')
        </form>
    </div>

@endsection