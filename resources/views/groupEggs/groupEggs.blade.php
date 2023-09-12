@extends('template')

@section('content')
    <div class="title__content">
        <h2>Lista de Grupo de Huevos</h2>
    </div>

    <div class="title__content">
        <a href="{{ route('groupEggs.create') }}" class="button_content">Crear</a>
    </div>
    @foreach ($groupEggs as $groupEgg)

            <div class="card__content">
                <div class="card_link">
                    <!-- <strong> {{ $groupEgg->id }} </strong> -->
                        <a href="{{ route('groupEggs.show', $groupEgg) }}" class="card_link_button">
                            {{ $groupEgg->groupEgg_name }}
                        </a>
                </div>

                <div class="card_buttons_max">
                    <a href="{{ route('groupEggs.edit', $groupEgg) }}" class="card-buttons-links">Editar</a>
                    <form action="{{ route('groupEggs.destroy', $groupEgg) }}" method="POST">
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
                            <a href="{{ route('groupEggs.edit', $groupEgg) }}" class="dropbtn">Editar</a>
                            <form action="{{ route('groupEggs.destroy', $groupEgg) }}" method="POST">
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