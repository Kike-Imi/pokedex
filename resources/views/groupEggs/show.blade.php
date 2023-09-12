@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Grupo de Huevo</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('groupEggs.index')}}"  method="">
            @include('groupEggs._form')
        </form>
    </div>

@endsection