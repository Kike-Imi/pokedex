<nav class="nav">

    <div class="nav__container">

    <h1 class="nav__title">Pokedex</h1>

        <a href="#menu" class="nav__menu">
            <img src="{{ asset('img/menu.png') }}" class="nav__icon">
        </a>

        <a href="#" class="nav__menu nav__menu--second">
            <img src="{{ asset('assets/close.svg') }}" class="nav__icon ">
        </a>

        <ul class="dropdown" id="menu">

            <li class="dropdown__list">
                <a href="{{ route('pokemons.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/pokebola.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Pokemons</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('categories.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/categoria.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Categorías</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('generations.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/generacion.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Generaciones</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('groupEggs.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/huevos.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Grupo de Huevos</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('habitats.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/habitat.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Habitats</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('hiddenHabilities.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/oculto.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Habilidades Ocultas</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('regions.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/region.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Regiones</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('skills.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/habilidad.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Habilidades</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="{{ route('types.index') }}" class="dropdown__link">
                    <img src="{{ asset('img/tipos.png') }}" class="dropdown__icon">
                    <span class="dropdown__span">Tipos</span>
                </a>
            </li>

        </ul>

    </div>

</nav>