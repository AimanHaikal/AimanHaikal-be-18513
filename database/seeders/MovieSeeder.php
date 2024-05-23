<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                "movie_id" => 1,
                "title" => "The Ring's Lord",
                "genre" => "fantasy",
                "duration" => "1 hour 24 minutes",
                "views" => 21300,
                "poster" => "https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg",
                "overall_rating" => 8.9,
                "description" => "A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.",
                "created_at" => "2001-12-19T09:18:19.000Z"
            ],
            [
                "movie_id" => 2,
                "title" => "Parasite",
                "genre" => "comedy",
                "duration" => "1 hour 20 minutes",
                "views" => 21100,
                "poster" => "https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg",
                "overall_rating" => 7.2,
                "description" => "A poor family, the Kims, con their way into becoming the servants of a rich family, the Parks. But their easy life gets complicated when their deception is threatened with exposure.",
                "created_at" => "2019-11-08T09:18:19.000Z"
            ],
            [
                "movie_id" => 3,
                "title" => "The Favourite",
                "genre" => "comedy",
                "duration" => "1 hour 20 minutes",
                "views" => 21100,
                "poster" => "https://m.media-amazon.com/images/M/MV5BMTg1NzQwMDQxNV5BMl5BanBnXkFtZTgwNDg2NDYyNjM@._V1_.jpg",
                "overall_rating" => 7.0,
                "description" => "In early 18th century England, a frail Queen Anne occupies the throne and her close friend, Lady Sarah, governs the country in her stead. When a new servant, Abigail, arrives, her charm endears her to Sarah.",
                "created_at" => "2018-12-21T09:18:19.000Z"
            ],
            [
                "movie_id" => 4,
                "title" => "The Farewell I",
                "genre" => "comedy",
                "duration" => "1 hour 20 minutes",
                "views" => 21100,
                "poster" => "https://m.media-amazon.com/images/M/MV5BMWE3MjViNWUtY2VjYS00ZDBjLTllMzYtN2FkY2QwYmRiMDhjXkEyXkFqcGdeQXVyODQzNTE3ODc@._V1_.jpg",
                "overall_rating" => 6.9,
                "description" => "A Chinese family discovers their grandmother has only a short while left to live and decide to keep her in the dark, scheduling a wedding to gather before she dies.",
                "created_at" => "2019-08-09T09:18:19.000Z"
            ],
            [
                "movie_id" => 5,
                "title" => "Interspace",
                "genre" => "fantasy",
                "duration" => "1 hour 24 minutes",
                "views" => 21300,
                "poster" => "https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg",
                "overall_rating" => 8.7,
                "description" => "When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.",
                "created_at" => "2014-11-07T09:18:19.000Z"
            ],
            [
                "movie_id" => 6,
                "title" => "Her & Him",
                "genre" => "fantasy",
                "duration" => "1 hour 24 minutes",
                "views" => 21300,
                "poster" => "https://m.media-amazon.com/images/M/MV5BNWVlMDUzMDUtYjUyNy00OTk2LWE2OGUtYjEwMWYzYTIxY2RiXkEyXkFqcGdeQXVyMTMzMzUyMTgz._V1_.jpg",
                "overall_rating" => 3.2,
                "description" => "A sexually explicit reimagining of Shakespeare's Romeo & Juliet.",
                "created_at" => "2019-09-13T09:18:19.000Z"
            ],
            [
                "movie_id" => 7,
                "title" => "Lo Lo Land",
                "genre" => "fantasy",
                "duration" => "1 hour 24 minutes",
                "views" => 21300,
                "poster" => "https://m.media-amazon.com/images/M/MV5BMzUzNDM2NzM2MV5BMl5BanBnXkFtZTgwNTM3NTg4OTE@._V1_.jpg",
                "overall_rating" => 8.0,
                "description" => "While navigating their careers in Los Angeles, a pianist and an actress fall in love while attempting to reconcile their aspirations for the future.",
                "created_at" => "2016-12-25T09:18:19.000Z"
            ],
            [
                "movie_id" => 8,
                "title" => "Marriage Story",
                "genre" => "comedy",
                "duration" => "1 hour 20 minutes",
                "views" => 21100,
                "poster" => "https://m.media-amazon.com/images/M/MV5BZGVmY2RjNDgtMTc3Yy00YmY0LTgwODItYzBjNWJhNTRlYjdkXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg",
                "overall_rating" => 8.8,
                "description" => "Noah Baumbach's incisive and compassionate look at a marriage breaking up and a family staying together.",
                "created_at" => "2019-12-06T09:18:19.000Z"
            ],
            [
                "movie_id" => 9,
                "title" => "Booksmart",
                "genre" => "comedy",
                "duration" => "1 hour 20 minutes",
                "views" => 21100,
                "poster" => "https://m.media-amazon.com/images/M/MV5BYzE0ZTY1NGUtOTYxMS00NWYzLWE1NGMtMDU3YzViZDZjZTZkXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg",
                "overall_rating" => 8.2,
                "description" => "On the eve of their high school graduation, two academic superstars and best friends realize they should have worked less and played more. Determined not to fall short of their peers, the girls try to cram four years of fun into one night.",
                "created_at" => "2019-05-24T09:18:19.000Z"
            ]
        ];

        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'genre' => $movie['genre'],
                'duration' => $movie['duration'],
                'views' => $movie['views'],
                'poster' => $movie['poster'],
                'overall_rating' => $movie['overall_rating'],
                'description' => $movie['description'],
                'created_at' => $movie['created_at'],
            ]);
        }
    }
}
