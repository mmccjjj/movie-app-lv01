<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $person = Person::all();

        dd($person);
    }

    function show($id)
    {
        $person = Person::find($id);

        if ($person) {
            return response()->json($person);
        } else {
            return response()->json(['message' => 'Person not found'], 404);
        }
    }
}
