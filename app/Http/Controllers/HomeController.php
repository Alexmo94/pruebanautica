<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ranking;
use DB;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoPeliculas = null;
        
        $peliculas = DB::table('ranking')
            ->select(DB::raw('count(*) as votos, pelicula'))
            ->groupBy('pelicula')
            ->orderBy('votos', 'desc')
            ->get();
            

        /*for($i=0;$i<=2; $i++){
            $url = "http://www.omdbapi.com/?apikey=47bb9c8b&plot=full&i=".$peliculas[$i] -> pelicula;
            $json = file_get_contents($url);
            $decode = json_decode($json,true);
            $infoPeliculas[$i]= $decode;
        }*/

        $chart = Charts::database(ranking::all(), 'bar', 'highcharts')
            ->title('Ranking')
            ->elementLabel("Ranking")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupBy('title');

        return view("home", ["chart" => $chart]);   
    }
}
