@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Habilidad</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('skills.index')}}"  method="">
            @include('skills._form')
        </form>
    </div>

@endsection