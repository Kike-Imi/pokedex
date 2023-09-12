@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Región</label>
    <input type="text" class="card-form-i" value="{{ old('region_name', $region->region_name) }}" name="region_name">
</div> 

<div class="content_card_inputs">
    <a href="{{ route('regions.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>