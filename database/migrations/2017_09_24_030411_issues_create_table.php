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
            $table->integer('user_id');
            $table->text('description');
            $table->string('status');
            $table->text('search');
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
