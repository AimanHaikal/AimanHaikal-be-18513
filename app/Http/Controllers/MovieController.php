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
        $request->validate([
            'theater_name' => 'required|string',
            'time_start' => 'required|date_format:H:i',
            'time_end' => 'required|date_format:H:i',
        ]);

        $theaterName = $request->input('theater_name');
        $timeStart = $request->input('time_start');
        $timeEnd = $request->input('time_end');

        $movies = Movie::where('theater_name', $theaterName)
            ->whereTime('showtime_start', '>=', $timeStart)
            ->whereTime('showtime_end', '<=', $timeEnd)
            ->get();

        return response()->json($movies);
    }
}
