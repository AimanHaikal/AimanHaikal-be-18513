<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movie.screenings', function (Blueprint $table) {
            $table->id('screenings_id');
            $table->foreignId('movie_id')->constrained('Movie.movie_list', 'movie_id');
            $table->foreignId('theater_id')->constrained('Movie.theaters', 'theater_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('theater_room_no');
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
        Schema::dropIfExists('screenings');
    }
}
