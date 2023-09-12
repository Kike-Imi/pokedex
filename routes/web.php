<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\GroupEggController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\HiddenHabilityController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\PokemonController;

Route::resource('categories', CategoryController::class);
Route::resource('generations', GenerationController::class);
Route::resource('groupEggs', GroupEggController::class);
Route::resource('habitats', HabitatController::class);
Route::resource('hiddenHabilities', HiddenHabilityController::class);
Route::resource('regions', RegionController::class);
Route::resource('skills', SkillController::class);
Route::resource('types', TypeController::class);
Route::resource('pokemons', PokemonController::class);

Route::get('/', function () {
    return view('template');
});
