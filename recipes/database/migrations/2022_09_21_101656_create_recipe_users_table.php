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
        Schema::create('recipe_users', function (Blueprint $table) {
          $table->unsignedBigInteger('recipe_id');
          $table->unsignedBigInteger('user_id');
          $table->foreign('recipe_id')->references('id')->on('recipes')
          ->onDelete('cascade');;
          $table->foreign('user_id')->references('id')->on('users')
          ->onDelete('cascade');
          $table->integer('is_like')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_users');
    }
};
