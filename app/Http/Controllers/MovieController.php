<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Movie::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return $movie;
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return 204;
    }

    // GET GENRE
    public function getMoviesByGenre($genre)
    {
        // Query the database for movies with the specified genre
        $movies = Movie::where('genre', $genre)->get();

        // Return the response
        return response()->json($movies);
    }

    //GET TimeSlot
    public function getMoviesByTimeslot(Request $request)
    {
        // Remove quotes from the input data
        $theaterName = trim($request->input('theater_name'), '"');
        $timeStart = trim($request->input('time_start'), '"');
        $timeEnd = trim($request->input('time_end'), '"');

        $request->merge([
            'theater_name' => $theaterName,
            'time_start' => $timeStart,
            'time_end' => $timeEnd,
        ]);

        $request->validate([
            'theater_name' => 'required|string',
            'time_start' => 'required|date_format:Y-m-d H:i:s',
            'time_end' => 'required|date_format:Y-m-d H:i:s',
        ]);

        $theaterName = $request->input('theater_name');
        $timeStart = $request->input('time_start');
        $timeEnd = $request->input('time_end');

        $movies = Movie::select(
            'Movie.movie_list.movie_id',
            'title',
            'duration',
            'views',
            'genre',
            'poster',
            'overall_rating',
            'theater_name',
            'start_time',
            'end_time',
            'description',
            'theater_room_no'
        )
            ->join('Movie.screenings', 'Movie.movie_list.movie_id', '=', 'Movie.screenings.movie_id')
            ->join('Movie.theaters', 'Movie.screenings.theater_id', '=', 'Movie.theaters.theater_id')
            ->where('Movie.theaters.theater_name', $theaterName)
            ->where(function ($query) use ($timeStart, $timeEnd) {
                $query->where('screenings.start_time', '>=', $timeStart)
                    ->where('screenings.end_time', '<=', $timeEnd);
            })
            ->orderBy('Movie.movie_list.movie_id')
            ->get();

        return response()->json($movies);
    }
}
