@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Categoria</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('categories.update', $category)}}"  method="POST">
            @method('PUT')
            @include('categories._form')
        </form>
    </div>

@endsection