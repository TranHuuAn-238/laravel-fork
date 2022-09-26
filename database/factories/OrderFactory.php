<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\ListUser;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('vi_VN');
        $faker->addProvider(new \Faker\Provider\Youtube($faker));
        return [
            // 'user_id' => ListUser::factory()->create()->id,
            'name_song' => fake()->name(),
            'link_song' => $faker->youtubeUri(),
            'message' => $faker->text(),
            'approved_at' => now(),
            'banned' => rand(0,1),
            'status' => rand(0,1),
        ];
    }
}
