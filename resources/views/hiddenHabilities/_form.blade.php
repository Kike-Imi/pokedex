@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Habilidad Oculta</label>
    <input type="text" class="card-form-i" value="{{ old('hiddenHability_name', $hiddenHability->hiddenHability_name) }}" name="hiddenHability_name">

    <label for="" class="card-form-l">Descripción</label>
    <textarea name="hiddenHability_description" id="" class="card-form-ta" cols="30" rows="10">{{ old('hiddenHability_description', $hiddenHability->hiddenHability_description) }}</textarea>
</div> 

<div class="content_card_inputs">
    <a href="{{ route('hiddenHabilities.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>