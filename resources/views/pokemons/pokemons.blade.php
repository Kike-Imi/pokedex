@extends('template')

@section('content')
    <div class="title__content">
        <h2>Lista de Pokemon</h2>
    </div>

    <div class="title__content">
        <a href="{{ route('pokemons.create') }}" class="button_content">Crear</a>
    </div>
    @foreach ($pokemons as $pokemon)

            <div class="card__content">
                <div class="card_link">
                    <!-- <strong> {{ $pokemon->id }} </strong> -->
                        <a href="{{ route('pokemons.show', $pokemon) }}" class="card_link_button">
                            {{ $pokemon->pokemon_name }}
                        </a>
                </div>

                <div class="card_buttons_max">
                    <a href="{{ route('pokemons.edit', $pokemon) }}" class="card-buttons-links">Editar</a>
                    <form action="{{ route('pokemons.destroy', $pokemon) }}" method="POST">
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
                            <a href="{{ route('pokemons.edit', $pokemon) }}" class="dropbtn">Editar</a>
                            <form action="{{ route('pokemons.destroy', $pokemon) }}" method="POST">
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