@extends('template')

@section('content')

    <div class="title__content">
        <h2 class="">Editar Región</h2>
    </div>

    <div class="content-inputs">
        <form action="{{ route('regions.update', $region)}}"  method="POST">
            @method('PUT')
            @include('regions._form')
        </form>
    </div>

@endsection