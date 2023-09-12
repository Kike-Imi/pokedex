@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Habitat</label>
    <input type="text" class="card-form-i" value="{{ old('habitat_name', $habitat->habitat_name) }}" name="habitat_name">
</div> 

<div class="content_card_inputs">
    <a href="{{ route('habitats.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>