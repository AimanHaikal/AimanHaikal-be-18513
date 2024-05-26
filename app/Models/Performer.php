<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use HasFactory;

    protected $table = 'Movie.performers';
    protected $primaryKey = 'performer_id';
    protected $fillable = ['performer_name'];
}
