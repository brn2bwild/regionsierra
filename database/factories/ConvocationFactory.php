<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocation>
 */
class ConvocationFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence(5, true);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
        ];
    }
}
