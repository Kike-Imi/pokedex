<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get(); 
        return view('users.users', ['users' => $users]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(User $user){
        return view('users.create', ['user' => $user]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'user_name' => 'required',
        ]);

        $user = $request->all();
        User::create($user);
        return redirect()->route('users.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user){
        $user->update([
            'user_name' =>$request->user_name,
        ]);
        return redirect()->route('users.edit', ['user' => $user]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(User $user){
        return view('users.show',  ['user' => $user]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(User $user){
        $user -> delete(); 
        return back();
    }
}
