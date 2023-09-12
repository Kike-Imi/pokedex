<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function index(){
        $regions = Region::get(); 
        return view('regions.regions', ['regions' => $regions]);
    }

    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(Region $region){
        return view('regions.create', ['region' => $region]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'region_name' => 'required',
        ]);

        $region = $request->all();
        Region::create($region);
        return redirect()->route('regions.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(Region $region){
        return view('regions.edit', ['region' => $region]);
    }

    public function update(Request $request, Region $region){
        $region->update([
            'region_name' =>$request->region_name,
        ]);
        return redirect()->route('regions.edit', ['region' => $region]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(Region $region){
        return view('regions.show',  ['region' => $region]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(Region $region){
        $region -> delete(); 
        return back();
    }
}
