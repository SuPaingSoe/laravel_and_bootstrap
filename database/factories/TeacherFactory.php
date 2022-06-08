<?php

namespace Database\Factories;

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
    public function definition()
    {
        
        
        return [
            'teacher_name' => $this->faker->name(),
            'profile' => $this->faker->text(),
            'join_date' => $this->faker->date()
        ];
    }
}
