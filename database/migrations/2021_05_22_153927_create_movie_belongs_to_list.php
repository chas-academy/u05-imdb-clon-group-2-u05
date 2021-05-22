<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieBelongsToList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_belongs_to_list', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('watchlist_id')->constrained();
            $table->foreignId('movie_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_belongs_to_list');
    }
}
