<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Screening extends Model
{
    use HasFactory;

    protected $table = 'Movie.screenings';
    protected $primaryKey = 'screenings_id';

    protected $fillable = [
        'movie_id',
        'theater_id',
        'start_time',
        'end_time',
        'theater_room_no',
    ];

    // Define the relationship with the Movie model
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    // Define the relationship with the Theater model
    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }
}
