<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $listRoles = ['Admin', 'User'];

        $faker = \Faker\Factory::create();

        return [
            'name_role' => $listRoles[array_rand($listRoles)],
            'description' => $faker->text(),
            'status' => rand(0,1),
        ];
    }
}
