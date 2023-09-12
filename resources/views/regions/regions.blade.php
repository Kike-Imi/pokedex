@extends('template')

@section('content')
    <div class="title__content">
        <h2>Lista de Regiones</h2>
    </div>

    <div class="title__content">
        <a href="{{ route('regions.create') }}" class="button_content">Crear</a>
    </div>
    @foreach ($regions as $region)

            <div class="card__content">
                <div class="card_link">
                    <!-- <strong> {{ $region->id }} </strong> -->
                        <a href="{{ route('regions.show', $region) }}" class="card_link_button">
                            {{ $region->region_name }}
                        </a>
                </div>

                <div class="card_buttons_max">
                    <a href="{{ route('regions.edit', $region) }}" class="card-buttons-links">Editar</a>
                    <form action="{{ route('regions.destroy', $region) }}" method="POST">
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
                            <a href="{{ route('regions.edit', $region) }}" class="dropbtn">Editar</a>
                            <form action="{{ route('regions.destroy', $region) }}" method="POST">
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