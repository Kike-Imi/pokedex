<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get(); 
        return view('categories.categories', ['categories' => $categories]);
    }

    public function cList(){
        return $categories = Category::get();
    }
    /**
     * Funcion que muestra el formulario para crear un registro
     */
    public function create(Category $category){
        return view('categories.create', ['category' => $category]);
    }

    /**
     * Funcion que guarda un registro en la base de datos
     */
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = $request->all();
        Category::create($category);
        return redirect()->route('categories.index');
    }

    /**
     * Funcion que edita un registro de la base de datos
     */
    public function edit(Category $category){
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category){
        $category->update([
            'category_name' =>$request->category_name,
        ]);
        return redirect()->route('categories.edit', ['category' => $category]);
    }

    /**
     * Funcion que muestra un registro de la base de datos
     */
    public function show(Category $category){
        return view('categories.show',  ['category' => $category]);
    }
    
    /**
     * Funcion que elimina un registro de la base de datos
     */
    public function destroy(Category $category){
        $category -> delete(); 
        return back();
    }
}
