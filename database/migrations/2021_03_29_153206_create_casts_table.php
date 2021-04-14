<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //Cast, director and writer table
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->id();
            $table->integer('movies_id');
            $table->integer('actors_id');
            $table->text('character')->nullable();
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
        Schema::dropIfExists('casts');
    }
}
