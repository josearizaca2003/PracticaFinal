<?php

namespace Database\Factories;

use App\Models\Graduate;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Monitoring>
 */
class MonitoringFactory extends Factory
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
            'teacher_id' => Teacher::all()->random()->id,
            'graduate_id' => Graduate::all()->random()->id,
            'FechaMonitoreo' => $this->faker->date,
            'Resultado' => $this->faker->text,
        ];
    }
}
