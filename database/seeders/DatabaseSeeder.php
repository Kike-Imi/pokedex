<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Category::factory(10)->create();
        \App\Models\Generation::factory(10)->create();
        \App\Models\GroupEgg::factory(10)->create();
        \App\Models\Habitat::factory(10)->create();
        \App\Models\HiddenHability::factory(10)->create();
        \App\Models\Region::factory(10)->create();
        \App\Models\Skill::factory(10)->create();
        \App\Models\Type::factory(10)->create();
        \App\Models\Pokemon::factory(10)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
