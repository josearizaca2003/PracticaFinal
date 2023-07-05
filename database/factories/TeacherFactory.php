<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'person_id' => Person::all()->random()->id,
            'AreaEspecializacion' => $this->faker->jobTitle,
            'Experiencia' => $this->faker->paragraph,
        ];
    }
}
