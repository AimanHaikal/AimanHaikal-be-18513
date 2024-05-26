<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformerMovieTable extends Migration
{
    public function up()
    {
        Schema::create('Movie.performer_movie', function (Blueprint $table) {
            $table->id('performer_movie_id');
            $table->foreignId('performer_id')->constrained('Movie.performers', 'performer_id');
            $table->foreignId('movie_id')->constrained('Movie.movie_list', 'movie_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('performer_movie');
    }
}
