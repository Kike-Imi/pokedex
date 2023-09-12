<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Models\Category;
use App\Models\Generation;
use App\Models\GroupEgg;
use App\Models\Habitat;
use App\Models\HiddenHability;
use App\Models\Region;
use App\Models\Skill;
use App\Models\Type;

class PokemonController extends Controller
{
    public function index(){
        $pokemons = Pokemon::get(); 
        return view('pokemons.pokemons', ['pokemons' => $pokemons]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(Pokemon $pokemon){
        $categories = Category::get(); 
        $generations = Generation::get(); 
        $groupeggs = GroupEgg::get(); 
        $habitats = Habitat::get(); 
        $hiddenhabilities = HiddenHability::get(); 
        $regions = Region::get(); 
        $skills = Skill::get(); 
        $types = Type::get(); 

        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }

        return view('pokemons.create', ['pokemon' => $pokemon , 'categories' => $categories, 
        'skills' => $skills, 'generations' => $generations, 'groupeggs' => $groupeggs,
        'habitats' => $habitats, 'hiddenhabilities' => $hiddenhabilities, 'regions' => $regions,
        'types' => $types]);
        
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'pokemon_name' => 'required|unique:pokemons,pokemon_name',
            'pokemon_weight' => 'required',
            'pokemon_height' => 'required',
            'pokemon_sex' => 'required',
            'pokemon_description' => 'required',
            'pokemon_typeA' => 'required',
            'pokemon_typeB',
            'generationId' => 'required',
            'hiddenHabilityId' => 'required',
            'habitatId' => 'required',
            'groupEggId' => 'required',
            'skillId' => 'required',
            'regionId' => 'required',
        ]);

        $pokemon = $request->all();
        Pokemon::create($pokemon);
        return redirect()->route('pokemons.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(Pokemon $pokemon){
        $categories = Category::get(); 
        $generations = Generation::get(); 
        $groupeggs = GroupEgg::get(); 
        $habitats = Habitat::get(); 
        $hiddenhabilities = HiddenHability::get(); 
        $regions = Region::get(); 
        $skills = Skill::get(); 
        $types = Type::get(); 


        return view('pokemons.edit', ['pokemon' => $pokemon , 'categories' => $categories, 
        'skills' => $skills, 'generations' => $generations, 'groupeggs' => $groupeggs,
        'habitats' => $habitats, 'hiddenhabilities' => $hiddenhabilities, 'regions' => $regions,
        'types' => $types]);
    }

    public function update(Request $request, Pokemon $pokemon){
        $pokemon->update([
            'pokemon_name' =>$request->pokemon_name,
            'pokemon_weight' =>$request->pokemon_weight,
            'pokemon_height' =>$request->pokemon_height,
            'pokemon_sex' =>$request->pokemon_sex,
            'pokemon_description' =>$request->pokemon_description,
            'pokemon_typeA' =>$request->pokemon_typeA,
            'pokemon_typeB' =>$request->pokemon_typeB,
            'generationId' =>$request->generationId,
            'hiddenHabilityId' =>$request->hiddenHabilityId,
            'habitatId' =>$request->habitatId,
            'groupEggId' =>$request->groupEggId,
            'categoryId' =>$request->categoryId,
            'skillId' =>$request->skillId,
            'regionId' =>$request->regionId,
        ]);
        return redirect()->route('pokemons.edit', ['pokemon' => $pokemon]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(Pokemon $pokemon){
        return view('pokemons.show',  ['pokemon' => $pokemon]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(Pokemon $pokemon){
        $pokemon -> delete(); 
        return back();
    }
}
