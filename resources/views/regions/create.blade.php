@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Región</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('regions.store')}}"  method="POST">
            @include('regions._form')
        </form>
    </div>

@endsection