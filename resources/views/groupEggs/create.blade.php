@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Crear Grupo de Huevo</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('groupEggs.store')}}"  method="POST">
            @include('groupEggs._form')
        </form>
    </div>

@endsection