<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Habitat;

class HabitatController extends Controller
{
    public function index(){
        $habitats = Habitat::get(); 
        return view('habitats.habitats', ['habitats' => $habitats]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(Habitat $habitat){
        return view('habitats.create', ['habitat' => $habitat]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'habitat_name' => 'required',
        ]);

        $habitat = $request->all();
        Habitat::create($habitat);
        return redirect()->route('habitats.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(Habitat $habitat){
        return view('habitats.edit', ['habitat' => $habitat]);
    }

    public function update(Request $request, Habitat $habitat){
        $habitat->update([
            'habitat_name' =>$request->habitat_name,
        ]);
        return redirect()->route('habitats.edit', ['habitat' => $habitat]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(Habitat $habitat){
        return view('habitats.show',  ['habitat' => $habitat]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(Habitat $habitat){
        $habitat -> delete(); 
        return back();
    }
}
