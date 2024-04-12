<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagiaire>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'nom' => fake()->name(),
                'prenom' => fake()->name(),
                'etablissement' => fake()->text(20),
                'email' => fake()->unique()->safeEmail(),
                'tel' => fake()->numberBetween(),
                'service' => fake()->text(20),
                'responsable' => fake()->text(20),
                'date_debut' => fake()->date(),
                'date_fin' => fake()->date(),
        
        
        ];
    }
}
