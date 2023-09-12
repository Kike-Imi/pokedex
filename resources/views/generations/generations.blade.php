@extends('template')

@section('content')
    <div class="title__content">
        <h2>Lista de Generaciones</h2>
    </div>

    <div class="title__content">
        <a href="{{ route('generations.create') }}" class="button_content">Crear</a>
    </div>
    @foreach ($generations as $generation)

            <div class="card__content">
                <div class="card_link">
                    <!-- <strong> {{ $generation->id }} </strong> -->
                        <a href="{{ route('generations.show', $generation) }}" class="card_link_button">
                            {{ $generation->generation_name }}
                        </a>
                </div>

                <div class="card_buttons_max">
                    <a href="{{ route('generations.edit', $generation) }}" class="card-buttons-links">Editar</a>
                    <form action="{{ route('generations.destroy', $generation) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="card-buttons-links" 
                        onclick="return confirm('Desea eliminar?')">
                    </form>
                </div>

                <div class="card_buttons_min">
                    
                    <div class="drop">
                        <button href="" class="dropbutton">
                            <img src="{{ asset('img/menup.png') }}" alt="" class="card_buttons_min_menu">
                        </button>
                        <div class="drop-content">
                            <a href="{{ route('generations.edit', $generation) }}" class="dropbtn">Editar</a>
                            <form action="{{ route('generations.destroy', $generation) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar" class="dropbtn" 
                                onclick="return confirm('Desea eliminar?')">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

@endsection