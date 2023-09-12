@csrf
<div class="content_card_form">
    <label for="" class="card-form-l">Nombre de categoría:</label>
    <input type="text" class="card-form-i" value="{{ old('category_name', $category->category_name) }}" name="category_name">
</div> 

<div class="content_card_inputs">
    <a href="{{ route('categories.index') }}" class="card-buttons-links">Volver</a>
    <input type="submit" value="Enviar" class="card-buttons-links">
</div>