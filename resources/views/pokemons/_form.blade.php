@csrf

<script>
    var pokemon = @json($pokemon);
</script>

<div class="content_card_form">
    <label for="" class="card-form-l">Nombre:</label>
    <input type="text" class="card-form-i" placeholder="@error('pokemon_name') {{ $message }} @enderror" value="{{ old('pokemon_name', $pokemon->pokemon_name) }}" name="pokemon_name">

    <label for="" class="card-form-l">Peso:</label>
    <input type="text" class="card-form-i" value="{{ old('pokemon_weight', $pokemon->pokemon_weight) }}" name="pokemon_weight">

    <label for="" class="card-form-l">Altura:</label>
    <input type="text" class="card-form-i" value="{{ old('pokemon_height', $pokemon->pokemon_height) }}" name="pokemon_height">

    <label for="" class="card-form-l">Sexo:</label>
    <select id="pokem_sex" class="card-form-i" name="pokemon_sex">
        <option value="" class="">Seleccione el sexo</option>
        <option value="M" class="">Macho</option>
        <option value="H" class="">Hembra</option>
    </select>
    
    <label for="" class="card-form-l">Descripción</label>
    <textarea name="pokemon_description" id="" class="card-form-ta" cols="30" rows="10">{{ old('pokemon_description', $pokemon->pokemon_description) }}</textarea>

    <div class="data-content">

        <label for="" class="card-form-l">Tipo Primario</label>
        <select id="types1" class="card-form-i" name="pokemon_typeA">
            <option value="" class="">Seleccione un tipo</option>
            @foreach ($types as $type)
            <option value="{{ $type->id}}" class="" >{{ $type->type_name}}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Tipo Secundario</label>
        <select id="types2" class="card-form-i" name="pokemon_typeB">
            <option value="" class="">Seleccione un tipo</option>
            @foreach ($types as $type)
            <option value="{{ $type->id }}" class="">{{ $type->type_name }}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Generación</label>
        <select id="generations" class="card-form-i" name="generationId">
            <option value="" class="">Seleccione una generación</option>
            @foreach ($generations as $generation)
            <option value="{{ $generation->id}}" class="">{{ $generation->generation_name}}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Habilidad</label>
        <select id="skills" class="card-form-i" name="skillId">
            <option value="" class="">Seleccione una habilidad</option>
            @foreach ($skills as $skill)
            <option value="{{ $skill->id}}" class="">{{ $skill->skill_name}}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Habilidad Oculta</label>
        <select id="hiddenhabilities" class="card-form-i" name="hiddenHabilityId">
            <option value="" class="">Seleccione una habilidad oculta</option>
            @foreach ($hiddenhabilities as $hiddenhability)
            <option value="{{ $hiddenhability->id}}" class="">{{ $hiddenhability->hiddenHability_name}}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Habitat</label>
        <select id="habitats" class="card-form-i" name="habitatId">
            <option value="" class="">Seleccione un habitat</option>
            @foreach ($habitats as $habitat)
            <option value="{{ $habitat->id }}" class="">{{ $habitat->habitat_name }}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Grupo de Huevo</label>
        <select id="groupeggs" class="card-form-i" name="groupEggId">
            <option value="" class="">Seleccione un grupo de huevo</option>
            @foreach ($groupeggs as $groupegg)
            <option value="{{ $groupegg->id }}" class="">{{ $groupegg->groupEgg_name }}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Región</label>
        <select id="regions" class="card-form-i" name="regionId">
            <option value="" class="">Seleccione una región</option>
            @foreach ($regions as $region)
            <option value="{{ $region->id }}" class="">{{ $region->region_name }}</option>
            @endforeach
        </select>

        <label for="" class="card-form-l">Categorìas</label>
        <select id="categories" class="card-form-i" name="categoryId">
            <option value="" class="">Seleccione una categoría</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" class="">{{ $category->category_name }}</option>
            @endforeach
        </select>

    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>

</div> 

<div class="content_card_inputs">
    <a href="{{ route('pokemons.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>