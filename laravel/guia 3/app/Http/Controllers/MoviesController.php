<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::all();
      return view("movies.index")->with(compact("movies"));
    }

    public function show($id)
    {
        $movie= Movie::find($id);
        return view("movies.show")->with(compact("movie"));
    }

}
