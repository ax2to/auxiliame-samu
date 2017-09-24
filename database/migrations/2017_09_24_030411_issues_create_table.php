<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IssuesCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dni')->nullable();
            $table->text('description');
            $table->string('status')->default('new');
            $table->text('search');
            $table->string('address')->nullable();
            $table->float('lat', 10, 7)->nullable();
            $table->float('lng', 10, 7)->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE issues ADD FULLTEXT search(search)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('issues', function ($table) {
            $table->dropIndex('search');
        });
        Schema::dropIfExists('issues');
    }
}
