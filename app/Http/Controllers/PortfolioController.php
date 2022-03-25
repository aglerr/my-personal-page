<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller{
    
    public function index($name){

        if($name == "player-cosmetics"){
            return view('portfolio.playercosmetics');
        }

    }

}
