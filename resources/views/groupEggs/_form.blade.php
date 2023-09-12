@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Grupo de Huevo</label>
    <input type="text" class="card-form-i" value="{{ old('groupEgg_name', $groupEgg->groupEgg_name) }}" name="groupEgg_name">
</div> 

<div class="content_card_inputs">
    <a href="{{ route('groupEggs.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>