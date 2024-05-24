<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movie.movie_list', function (Blueprint $table) {
            $table->id('movie_id');
            $table->string('title');
            $table->string('genre');
            $table->string('duration');
            $table->integer('views');
            $table->string('poster');
            $table->decimal('overall_rating', 3, 1);
            $table->text('description');
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
        Schema::dropIfExists('Movie.movie_list');
    }
}
