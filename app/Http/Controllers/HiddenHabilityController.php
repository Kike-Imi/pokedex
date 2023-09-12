<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HiddenHability;

class HiddenHabilityController extends Controller
{
    public function index(){
        $hiddenHabilities = HiddenHability::get(); 
        return view('hiddenHabilities.hiddenHabilities', ['hiddenHabilities' => $hiddenHabilities]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(HiddenHability $hiddenHability){
        return view('hiddenHabilities.create', ['hiddenHability' => $hiddenHability]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'hiddenHability_name' => 'required',
            'hiddenHability_description' => 'required',
        ]);

        $hiddenHability = $request->all();
        HiddenHability::create($hiddenHability);
        return redirect()->route('hiddenHabilities.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(HiddenHability $hiddenHability){
        return view('hiddenhabilities.edit', ['hiddenHability' => $hiddenHability]);
    }

    public function update(Request $request, HiddenHability $hiddenHability){
        $hiddenHability->update([
            'hiddenHability_name' =>$request->hiddenHability_name,
            'hiddenHability_description' =>$request->hiddenHability_description,
        ]);
        return redirect()->route('hiddenHabilities.edit', ['hiddenHability' => $hiddenHability]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(HiddenHability $hiddenHability){
        return view('hiddenhabilities.show',  ['hiddenHability' => $hiddenHability]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(HiddenHability $hiddenHability){
        $hiddenHability -> delete(); 
        return back();
    }
}
