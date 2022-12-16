<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        // dd(compact('movies'));
        return view('home',compact('movies'));
    }
}
