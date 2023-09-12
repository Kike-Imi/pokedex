<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'skill_name',
        'skill_description',
    ];

    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }
    
    use HasFactory;
}
