<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    protected $fillable = [
        'generation_name',
    ];

    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }
    
    use HasFactory;
}
