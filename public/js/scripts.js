function tipo1(pokemon) {
    var select = document.getElementById('types1');
    select.value = pokemon.pokemon_typeA;
}

function tipo2(pokemon) {
    var select = document.getElementById('types2');
    select.value = pokemon.pokemon_typeB;
}

function generations(pokemon) {
    var select = document.getElementById('generations');
    select.value = pokemon.generationId;
}

function skills(pokemon) {
    var select = document.getElementById('skills');
    select.value = pokemon.skillId;
}

function hiddenhabilities(pokemon) {
    var select = document.getElementById('hiddenhabilities');
    select.value = pokemon.hiddenHabilityId;
}

function habitats(pokemon) {
    var select = document.getElementById('habitats');
    select.value = pokemon.habitatId;
}

function groupeggs(pokemon) {
    var select = document.getElementById('groupeggs');
    select.value = pokemon.groupEggId;
}

function regions(pokemon) {
    var select = document.getElementById('regions');
    select.value = pokemon.regionId;
}

function categories(pokemon) {
    var select = document.getElementById('categories');
    select.value = pokemon.pokemon_typeA;


}

function sex(pokemon) {
    var sex = document.getElementById('pokem_sex');
    if (pokemon.pokemon_sex == 'M') {
        sex.value = 'M';
    }else{
        sex.value = 'H';
    }    
}

tipo1(pokemon);
tipo2(pokemon);
generations(pokemon);
skills(pokemon);
hiddenhabilities(pokemon);
habitats(pokemon);
groupeggs(pokemon);
regions(pokemon);
categories(pokemon);
sex(pokemon);