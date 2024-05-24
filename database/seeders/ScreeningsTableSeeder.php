<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Screening;

class ScreeningsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample screening data
        $screenings = [
            [
                "screenings_id" => 1,
                "movie_id" => 10,
                "theater_id" => 1,
                "start_time" => "2020-04-04 09:00:00",
                "end_time" => "2020-04-04 12:00:00",
                "theater_room_no" => 1
            ],
            [
                "screenings_id" => 2,
                "movie_id" => 2,
                "theater_id" => 1,
                "start_time" => "2020-04-04 10:00:00",
                "end_time" => "2020-04-04 13:00:00",
                "theater_room_no" => 2
            ],
            [
                "screenings_id" => 3,
                "movie_id" => 3,
                "theater_id" => 1,
                "start_time" => "2020-04-04 11:00:00",
                "end_time" => "2020-04-04 14:00:00",
                "theater_room_no" => 3
            ],
            [
                "screenings_id" => 4,
                "movie_id" => 4,
                "theater_id" => 1,
                "start_time" => "2020-04-04 12:00:00",
                "end_time" => "2020-04-04 15:00:00",
                "theater_room_no" => 4
            ],
            [
                "screenings_id" => 5,
                "movie_id" => 11,
                "theater_id" => 1,
                "start_time" => "2020-04-04 13:00:00",
                "end_time" => "2020-04-04 16:00:00",
                "theater_room_no" => 5
            ]
        ];

        // Insert data into the screenings table
        foreach ($screenings as $screening) {
            Screening::create([
                'movie_id' => $screening['movie_id'],
                'theater_id' => $screening['theater_id'],
                'start_time' => $screening['start_time'],
                'end_time' => $screening['end_time'],
                'theater_room_no' => $screening['theater_room_no'],
            ]);
        }
    }
}
