@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Tipo</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('types.store')}}"  method="POST">
            @include('types._form')
        </form>
    </div>

@endsection