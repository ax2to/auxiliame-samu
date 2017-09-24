<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            // minimal for user
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            // personal information
            $table->string('dni')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            // history
            $table->string('blood')->nullable();
            $table->string('hiv_positive')->nullable();
            $table->text('allergies')->nullable();
            $table->text('background')->nullable();
            // location
            $table->string('address')->nullable();
            $table->float('lat', 10, 7)->nullable();
            $table->float('lng', 10, 7)->nullable();
            // others
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
