<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          =>  $name   =   $this->faker->name(),
            'slug'          =>  Str::slug($name),
            'hour_theo'     =>  $this->faker->numberBetween(0, 20),
            'description'   =>  $this->faker->text(1000),
            'teacher_id'    =>  $this->faker->randomElement($array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'school_id'     =>  $this->faker->randomElement($array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        ];
    }
}
