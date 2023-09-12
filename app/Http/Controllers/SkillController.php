<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::get(); 
        return view('skills.skills', ['skills' => $skills]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(Skill $skill){
        return view('skills.create', ['skill' => $skill]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'skill_name' => 'required',
            'skill_description' => 'required',
        ]);

        $skill = $request->all();
        Skill::create($skill);
        return redirect()->route('skills.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(Skill $skill){
        return view('skills.edit', ['skill' => $skill]);
    }

    public function update(Request $request, Skill $skill){
        $skill->update([
            'skill_name' =>$request->skill_name,
            'skill_description' =>$request->skill_description,
        ]);
        return redirect()->route('skills.edit', ['skill' => $skill]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(Skill $skill){
        return view('skills.show',  ['skill' => $skill]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(Skill $skill){
        $skill -> delete(); 
        return back();
    }
}
