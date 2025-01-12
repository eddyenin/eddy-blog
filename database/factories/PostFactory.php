<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);
        return [
            'users_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $title,
            'slug' => strtolower(str_replace(' ','-',$title)),
            'image' => fake()->image(public_path('/images/photos'), 400,300),
            'body' => fake()->paragraph(2)

        ];
    }
}
