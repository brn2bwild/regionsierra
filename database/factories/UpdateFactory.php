<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Update>
 */
class UpdateFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->sentence(5, true);
        return [
            'name' => $name,
            'content' => fake()->text(),
            'slug' => Str::slug($name),
        ];
    }
}
