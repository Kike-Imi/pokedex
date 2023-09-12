@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Detalle Categoria</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('categories.index')}}"  method="">
            @include('categories._form')
        </form>
    </div>

@endsection