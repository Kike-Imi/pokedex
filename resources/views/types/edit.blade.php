@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Tipo</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('types.update', $type)}}"  method="POST">
            @method('PUT')
            @include('types._form')
        </form>
    </div>

@endsection