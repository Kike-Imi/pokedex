<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GroupEgg;

class GroupEggController extends Controller
{
    public function index(){
        $groupEggs = GroupEgg::get(); 
        return view('groupEggs.groupEggs', ['groupEggs' => $groupEggs]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(GroupEgg $groupEgg){
        return view('groupEggs.create', ['groupEgg' => $groupEgg]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'groupEgg_name' => 'required',
        ]);

        $groupEgg = $request->all();
        GroupEgg::create($groupEgg);
        return redirect()->route('groupEggs.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(GroupEgg $groupEgg){
        return view('groupEggs.edit', ['groupEgg' => $groupEgg]);
    }

    public function update(Request $request, GroupEgg $groupEgg){
        $groupEgg->update([
            'groupEgg_name' =>$request->groupEgg_name,
        ]);
        return redirect()->route('groupEggs.edit', ['groupEgg' => $groupEgg]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(GroupEgg $groupEgg){
        return view('groupEggs.show',  ['groupEgg' => $groupEgg]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(GroupEgg $groupEgg){
        $groupEgg -> delete(); 
        return back();
    }
}
