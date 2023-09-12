@extends('template')

@section('content')
    <div class="title__content">
        <h2>Lista de Habilidades</h2>
    </div>

    <div class="title__content">
        <a href="{{ route('skills.create') }}" class="button_content">Crear</a>
    </div>
    @foreach ($skills as $skill)

            <div class="card__content">
                <div class="card_link">
                    <!-- <strong> {{ $skill->id }} </strong> -->
                        <a href="{{ route('skills.show', $skill) }}" class="card_link_button">
                            {{ $skill->skill_name }}
                        </a>
                </div>

                <div class="card_buttons_max">
                    <a href="{{ route('skills.edit', $skill) }}" class="card-buttons-links">Editar</a>
                    <form action="{{ route('skills.destroy', $skill) }}" method="POST">
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
                            <a href="{{ route('skills.edit', $skill) }}" class="dropbtn">Editar</a>
                            <form action="{{ route('skills.destroy', $skill) }}" method="POST">
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