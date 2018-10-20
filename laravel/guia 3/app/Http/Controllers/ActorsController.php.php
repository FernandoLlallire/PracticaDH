<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $actors = Actor::all();
      return view("actors.index")->with(compact("actors"));
    }
    public function search(){
      return view("actors.search");
    }
    public function result(Request $request){
      $queryString = $request->lastNameActor;
      $results = Actor::where("last_name","LIKE","%$queryString%")->orWhere("first_name","LIKE","%$queryString%")->get();
      return view("actors.result")->with(compact("results"));
    }

}
