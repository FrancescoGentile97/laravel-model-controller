<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    function home(){
        // $movies = Movie::where("title", "original_title", "date", "vote")
        //     ->get();
        $movies = Movie::all();
        dump($movies);
        return view("home",[
        "movies" => $movies
        ]);
    }
}
function movie(){
    $movie = new Movie();
    $movie->save();
}
