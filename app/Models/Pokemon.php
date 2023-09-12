<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    protected $fillable = [
        'pokemon_name',
        'pokemon_weight',
        'pokemon_height',
        'pokemon_sex',
        'pokemon_description',
        'pokemon_typeA',
        'pokemon_typeB',
        'generationId',
        'hiddenHabilityId',
        'habitatId',
        'groupEggId',
        'categoryId',
        'skillId',
        'regionId',

    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function generation(){
        return $this->belongsTo(Generation::class);
    }

    public function groupEgg(){
        return $this->belongsTo(GroupEgg::class);
    }

    public function habitat(){
        return $this->belongsTo(Habitat::class);
    }

    public function hiddenHability(){
        return $this->belongsTo(HiddenHability::class);
    }
    
    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function skill(){
        return $this->belongsTo(Skill::class);
    }
    
    public function type(){
        return $this->belongsTo(Type::class);
    }
    use HasFactory;
}
