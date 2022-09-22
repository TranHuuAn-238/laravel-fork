<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListUser>
 */
class ListUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('vi_VN');

        return [
            'username' => $faker->name(),
            'google_id' => fake()->sha1(),
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->md5(),
            'avatar' => fake()->imageUrl($width = 640, $height = 480),
        ];
    }
}
