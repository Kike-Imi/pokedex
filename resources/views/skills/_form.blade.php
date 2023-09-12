@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Habilidad</label>
    <input type="text" class="card-form-i" value="{{ old('skill_name', $skill->skill_name) }}" name="skill_name">

    <label for="" class="card-form-l">Descripción</label>
    <textarea name="skill_description" id="" class="card-form-ta" cols="30" rows="10">{{ old('skill_description', $skill->skill_description) }}</textarea>
</div> 

<div class="content_card_inputs">
    <a href="{{ route('skills.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>