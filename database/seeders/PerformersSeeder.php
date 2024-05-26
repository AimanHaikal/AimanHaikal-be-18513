<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Performer;

class PerformersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $performers = [
            [
                "performer_id" => 1,
                "performer_name" => "Al Pacino"
            ]
        ];

        // Insert data into the theaters table
        foreach ($performers as $performer) {
            Performer::create([
                'performer_name' =>  $performer['performer_name'],
            ]);
        }
    }
}
