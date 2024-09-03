<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::all();

        dd($movie);
    }


    function show($id)
    {
        $movie = Movie::find($id);


        return dd($movie);
    }

    function create()
    {

        return view('movie.create');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:350',
            'released_at' => 'required|date',
            'length_in_minutes' => 'required|integer|min:1',
            'budget' => 'required|numeric|min:0',
            'based_on_a_book' => 'boolean',
            'score' => 'required|numeric|min:0|max:10',
            'original_language' => 'required|string|max:255'
        ]);
        return dd($request->all());
    }
}
