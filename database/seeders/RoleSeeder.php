<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\ListUser;
use DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('roles')->truncate();

        // Role::factory(2)->create();
        $roles = [
            ['Admin', 'this is admin', 0, now(), now()],
            ['User', 'this is user', 1, now(), now()],
        ];

        //$res = Role::create($roles);
        foreach ($roles as $role) {
            Role::create([
                'name_role' => $role[0],
                'description' => $role[1],
                'status' => $role[2],
                'created_at' => $role[3],
                'updated_at' => $role[4],
            ]);
            // ->listUsers()->attach(ListUser::all()->random()->id, ['created_at' => now(), 'updated_at' => now()])
        }
        //$res->listUsers()->sync();

        Schema::enableForeignKeyConstraints();
    }
}
