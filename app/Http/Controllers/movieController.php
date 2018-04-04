<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ranking;
use Auth;
use Alert;

class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this -> middleware('auth');

    } 

    public function index()
    {
        $url = "http://www.omdbapi.com/?apikey=47bb9c8b&s=all";
        $json = file_get_contents($url);
        $decode = json_decode($json);
        return view("movies", ["movies" => $decode->Search]);        
    }

    public function search(Request $request){
        $search = str_replace(' ', '+', $request->s);
        $url = "http://www.omdbapi.com/?apikey=47bb9c8b&s=".$search;
        $json = file_get_contents($url);
        $decode = json_decode($json);
        return view("movies", ["movies" => $decode->Search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idMovie = $request -> Id;
        $url = "http://www.omdbapi.com/?apikey=47bb9c8b&plot=full&i=".$idMovie;
        $json = file_get_contents($url);
        $decode = json_decode($json,true);
        $ranking = new ranking();
        $ranking -> pelicula = $idMovie;
        $ranking -> title = $decode['Title'];
        $ranking -> id_user = Auth::user() -> id;
        $ranking -> save();
        return redirect()->route('home')->with('success','Voto realizado. Gracias por participar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $url = "http://www.omdbapi.com/?apikey=47bb9c8b&plot=full&i=".$request -> id;
        $json = file_get_contents($url);
        $decode = json_decode($json,true);
        return view("details", ["movies" => $decode]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
