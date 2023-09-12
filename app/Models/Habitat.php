<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    protected $fillable = [
        'habitat_name',
    ];

    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }
    
    use HasFactory;
}
