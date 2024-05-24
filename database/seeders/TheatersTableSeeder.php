<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Theater;

class TheatersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theaters = [
            [
                "theater_id" => 1,
                "theater_name" => "abc movies"
            ]
        ];

        // Insert data into the theaters table
        foreach ($theaters as $theater) {
            Theater::create([
                'theater_name' => $theater['theater_name'],
            ]);
        }
    }
}