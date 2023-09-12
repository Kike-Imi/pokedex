<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'region_name',
    ];

    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }
    
    use HasFactory;
}
