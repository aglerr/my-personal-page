<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller{
    
    public function index($name){

        if($name == "cosmetics"){
            return view('partials.portfolio.cosmetics.details');
        }

        return redirect('/');
    }

}
