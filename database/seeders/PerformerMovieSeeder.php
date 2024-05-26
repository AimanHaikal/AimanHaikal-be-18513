<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PerformerMovie;

class PerformerMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $performermovies = [
            [
                "performer_movie_id" => 1,
                'performer_id' => 1,
                'movie_id' => 10,
            ]
        ];

        // Insert data into the theaters table
        foreach ($performermovies as $performermovie) {
            PerformerMovie::create([
                'performer_id' => $performermovie['performer_id'],
                'movie_id' => $performermovie['movie_id'],
            ]);
        }
    }
}
