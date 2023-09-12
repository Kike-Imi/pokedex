@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Habilidad</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('skills.update', $skill)}}"  method="POST">
            @method('PUT')
            @include('skills._form')
        </form>
    </div>

@endsection