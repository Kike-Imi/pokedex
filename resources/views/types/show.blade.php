@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Tipo</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('types.index')}}"  method="">
            @include('types._form')
        </form>
    </div>

@endsection