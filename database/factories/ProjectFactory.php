<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name' => fake() -> unique() -> words(3, true),
            'description' => fake() -> boolean()
                                    ? fake() -> paragraph()
                                    : '',
            'main_image' => fake() -> unique() -> word(),
            'release_date' => fake() -> date(),
            'repo_link' => fake() -> unique() -> word() 
        ];
    }
}
