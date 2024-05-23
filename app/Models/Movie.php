<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'Movie.movielist';
    protected $primaryKey = 'movie_id';

    protected $fillable = [
        'title', 'genre', 'duration', 'views', 'poster', 'overall_rating', 'description', 'created_at',
    ];
}

