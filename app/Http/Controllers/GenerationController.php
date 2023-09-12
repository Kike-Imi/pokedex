<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Generation;

class GenerationController extends Controller
{
    public function index(){
        $generations = Generation::get(); 
        return view('generations.generations', ['generations' => $generations]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(Generation $generation){
        return view('generations.create', ['generation' => $generation]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'generation_name' => 'required',
        ]);

        $generation = $request->all();
        Generation::create($generation);
        return redirect()->route('generations.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(Generation $generation){
        return view('generations.edit', ['generation' => $generation]);
    }

    public function update(Request $request, Generation $generation){
        $generation->update([
            'generation_name' =>$request->generation_name,
        ]);
        return redirect()->route('generations.edit', ['generation' => $generation]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(Generation $generation){
        return view('generations.show',  ['generation' => $generation]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(Generation $generation){
        $generation -> delete(); 
        return back();
    }
}
