<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('pokemon_name',50);
            $table->decimal('pokemon_weight');
            $table->decimal('pokemon_height');
            $table->string('pokemon_sex',1);
            $table->string('pokemon_description',300);
            $table->unsignedBigInteger('pokemon_typeA');
            $table->unsignedBigInteger('pokemon_typeB');

            $table->unsignedBigInteger('generationId');
            $table->unsignedBigInteger('hiddenHabilityId');
            $table->unsignedBigInteger('habitatId');

            $table->unsignedBigInteger('groupEggId');
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('skillId');
            $table->unsignedBigInteger('regionId');

            $table->timestamps();

            $table->foreign('pokemon_typeA')->references('id')->on('types');
            $table->foreign('pokemon_typeB')->references('id')->on('types');
            
            $table->foreign('generationId')->references('id')->on('generations');
            $table->foreign('hiddenHabilityId')->references('id')->on('hidden_habilities');
            $table->foreign('habitatId')->references('id')->on('habitats');
            $table->foreign('groupEggId')->references('id')->on('group_eggs');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('skillId')->references('id')->on('skills');
            $table->foreign('regionId')->references('id')->on('regions');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
