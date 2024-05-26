<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformerMovie extends Model
{
    use HasFactory;

    protected $table = 'Movie.performer_movie';
    protected $primaryKey = 'performer_movie_id';
    protected $fillable = ['performer_id', 'movie_id'];

    public function performer()
    {
        return $this->belongsTo(Performer::class, 'performer_id', 'performer_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'movie_id');
    }
}
