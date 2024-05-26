<?php
// Controllers/MovieController.php
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

    // GET Specific Movie Theater
    public function getMoviesByTheaterAndDate(Request $request)
    {
        $request->validate([
            'theater_name' => 'required|string',
            'd_date' => 'required|date_format:Y-m-d',
        ]);

        $theaterName = $request->input('theater_name');
        $dDate = $request->input('d_date');

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
            ->whereDate('Movie.screenings.start_time', $dDate)
            ->orderBy('Movie.movie_list.movie_id')
            ->get();

        return response()->json($movies);
    }

    //GET Search Performer
    public function getMoviesByPerformer(Request $request)
    {
        // Validate request parameters
        $request->validate([
            'performer_name' => 'required|string',
        ]);

        // Retrieve performer by name
        $performerName = $request->input('performer_name');

        // Retrieve movies performed by the performer
        $movies = Movie::select(
            'Movie.movie_list.movie_id',
            'overall_rating',
            'title',
            'description',
            'duration',
            'views',
            'genre',
            'poster',
        )
            ->join('Movie.performer_movie', 'Movie.movie_list.movie_id', '=', 'Movie.performer_movie.movie_id')
            ->join('Movie.performers', 'Movie.performers.performer_id', '=', 'Movie.performer_movie.performer_id')
            ->where('Movie.performers.performer_name', $performerName)
            ->orderBy('Movie.movie_list.movie_id')
            ->get();

        return response()->json($movies);
    }
}
