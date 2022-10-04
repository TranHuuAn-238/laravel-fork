<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RadioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'content' => fake()->realText(),
            'link_drive' => 'https://drive.google.com/file/d/' . Str::random(33) . '/view?usp=sharing',
            'radio_time' => now(),
            'status' => rand(0,1),
        ];
    }
}
