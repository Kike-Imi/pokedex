@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Grupo de Huevo</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('groupEggs.update', $groupEgg)}}"  method="POST">
            @method('PUT')
            @include('groupEggs._form')
        </form>
    </div>

@endsection