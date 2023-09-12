<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pokemon_name' => fake()->name,
            'pokemon_weight' => fake()->numberBetween(1,100),
            'pokemon_height' => fake()->numberBetween(1,100),
            'pokemon_sex' => fake()->randomElement(['M','F']),
            'pokemon_description' => fake()->paragraph(1,100),

            'pokemon_typeA' => fake()->numberBetween(1,10),
            'pokemon_typeB' => fake()->numberBetween(1,10),

            'generationId' => fake()->numberBetween(1,10),
            'hiddenHabilityId' => fake()->numberBetween(1,10),
            'habitatId' => fake()->numberBetween(1,10),
            'typeId' => fake()->numberBetween(1,10),
            'groupEggId' => fake()->numberBetween(1,10),
            'categoryId' => fake()->numberBetween(1,10),
            'skillId' => fake()->numberBetween(1,10),
            'regionId' => fake()->numberBetween(1,10),
        ];
    }
}
