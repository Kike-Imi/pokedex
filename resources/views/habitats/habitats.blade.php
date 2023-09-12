@extends('template')

@section('content')
    <div class="title__content">
        <h2>Lista de Habitats</h2>
    </div>

    <div class="title__content">
        <a href="{{ route('habitats.create') }}" class="button_content">Crear</a>
    </div>
    @foreach ($habitats as $habitat)

            <div class="card__content">
                <div class="card_link">
                    <!-- <strong> {{ $habitat->id }} </strong> -->
                        <a href="{{ route('habitats.show', $habitat) }}" class="card_link_button">
                            {{ $habitat->habitat_name }}
                        </a>
                </div>

                <div class="card_buttons_max">
                    <a href="{{ route('habitats.edit', $habitat) }}" class="card-buttons-links">Editar</a>
                    <form action="{{ route('habitats.destroy', $habitat) }}" method="POST">
                        @csrf
                        @method ('DELETE')
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
                            <a href="{{ route('habitats.edit', $habitat) }}" class="dropbtn">Editar</a>
                            <form action="{{ route('habitats.destroy', $habitat) }}" method="POST">
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