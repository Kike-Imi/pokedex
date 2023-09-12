<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiddenHability extends Model
{
    protected $fillable = [
        'hiddenHability_name',
        'hiddenHability_description',
    ];

    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }
    
    use HasFactory;
}
