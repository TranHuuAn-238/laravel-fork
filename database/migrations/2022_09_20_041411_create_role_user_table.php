<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->smallInteger('role_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('list_users');
            $table->foreign('role_id')->references('id')->on('roles');
            
        });

        // Schema::table('role_user', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('list_users');
        //     $table->foreign('roll_id')->references('id')->on('roles');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
};
