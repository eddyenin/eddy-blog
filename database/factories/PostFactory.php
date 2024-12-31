<?php

namespace Database\Factories;

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
        $slug = strtolower(str_replace(' ','-',$title));

        return [
            'category_id' => 1,
            'title' => $title,
            'slug' => $slug,
            'image' => fake()->image(public_path('/images/photos'), 400,300),
            'body' => fake()->paragraph(20)

        ];
    }
}
