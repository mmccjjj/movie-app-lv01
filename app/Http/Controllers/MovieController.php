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
        return dd($request);
    }
}
