@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Categoria</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('categories.store')}}"  method="POST">
            @include('categories._form')
        </form>
    </div>

@endsection