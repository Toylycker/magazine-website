<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;
use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{


    public function configure()
    {
        return $this->afterMaking(function (Blog $blog) {
            //
        })->afterCreating(function (Blog $blog) {
            $blog->subjects()->sync(Subject::inRandomOrder()->take(rand(1, 3))->pluck('id'));
        });
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $createdAt = $this->faker->dateTimeBetween($startDate = '-3 days', $endDate = 'now');
        return [
            'slug' =>  $this->faker->word(),
            'name' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'description_ru' => $this->faker->paragraph(),
            'random' => rand(0, 999999),
            'created_at' => $createdAt,
        ];
    }
}
