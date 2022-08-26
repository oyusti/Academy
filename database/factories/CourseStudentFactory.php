<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseStudent>
 */
class CourseStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id'    =>  $this->faker->randomElement($array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'course_id'     =>  $this->faker->randomElement($array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        ];
    }
}
