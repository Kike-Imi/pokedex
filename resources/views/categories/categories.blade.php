@extends('template')

@section('content')
    <div class="title__content">
        <h2>Lista de Categorías</h2>
    </div>

    <div class="title__content">
        <a href="{{ route('categories.create') }}" class="button_content">Crear</a>
    </div>
    @foreach ($categories as $category)

            <div class="card__content">
                <div class="card_link">
                    <!-- <strong> {{ $category->id }} </strong> -->
                        <a href="{{ route('categories.show', $category) }}" class="card_link_button">
                            {{ $category->category_name }}
                        </a>
                </div>

                <div class="card_buttons_max">
                    <a href="{{ route('categories.edit', $category) }}" class="card-buttons-links">Editar</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
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
                            <a href="{{ route('categories.edit', $category) }}" class="dropbtn">Editar</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
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