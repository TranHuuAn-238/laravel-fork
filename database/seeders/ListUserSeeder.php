<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListUser;
use App\Models\Role;
use App\Models\Order;

class ListUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListUser::factory()->count(5)
        // ->hasAttached(
        //     Role::factory()->count(1)

        // )
        ->hasAttached(
            Order::factory()->count(3),
            [
                'created_at' => now(),
                'updated_at' => now()
            ]
        )
        ->create();

        // Get all the roles attaching up to 2 random roles to each user
        $roles = Role::all();

        // Populate the pivot table
        ListUser::all()->each(function ($user) use ($roles) { 
            $user->roles()->attach(
                // $roles->random(rand(1, 2))->pluck('id')->toArray()
                $roles->random()->id, ['created_at' => now(), 'updated_at' => now()]
            ); 
        });
    }
}
