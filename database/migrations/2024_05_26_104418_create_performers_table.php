<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformersTable extends Migration
{
    public function up()
    {
        Schema::create('Movie.performers', function (Blueprint $table) {
            $table->id('performer_id');
            $table->string('performer_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Movie.performers');
    }
}
