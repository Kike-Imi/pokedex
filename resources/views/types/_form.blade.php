@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Habilidad:</label>
    <input type="text" class="card-form-i" value="{{ old('type_name', $type->type_name) }}" name="type_name">
</div> 

<div class="content_card_inputs">
    <a href="{{ route('types.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>