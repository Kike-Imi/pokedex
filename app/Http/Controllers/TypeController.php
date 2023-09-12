<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index(){
        $types = Type::get(); 
        return view('types.types', ['types' => $types]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(Type $type){
        return view('types.create', ['type' => $type]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'type_name' => 'required',
        ]);

        $type = $request->all();
        Type::create($type);
        return redirect()->route('types.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(Type $type){
        return view('types.edit', ['type' => $type]);
    }

    public function update(Request $request, Type $type){
        $type->update([
            'type_name' =>$request->type_name,
        ]);
        return redirect()->route('types.edit', ['type' => $type]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(Type $type){
        return view('types.show',  ['type' => $type]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(Type $type){
        $type -> delete(); 
        return back();
    }
}
