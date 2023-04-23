<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $lesson_name = fake()->word() . " " . rand(1, 50);

        return [
            'name' => $lesson_name,
            'slug' => \Str::slug($lesson_name),
            'description' => fake()->text(100),
            'parent_id' => rand(14, 18),
            'course_id' => rand(1, 3),
            'is_free' => fake()->boolean,
            'is_visible' => fake()->boolean,
            'position' =>   fake()->randomDigitNotNull(),
            'embed' => fake()->randomElement(["vBB2FegbEgQ", "rXbtUOKZNoA"])
        ];

    }
}
