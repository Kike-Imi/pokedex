<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupEgg extends Model
{
    protected $table = 'group_eggs';

    protected $fillable = [
        'groupEgg_name',
    ];
    
    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }
    
    use HasFactory;
}
