@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Nombre de generación:</label>
    <input type="text" class="card-form-i" value="{{ old('generation_name', $generation->generation_name) }}" name="generation_name">
</div> 

<div class="content_card_inputs">
    <a href="{{ route('generations.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>