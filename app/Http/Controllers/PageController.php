<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;
use App\Models\Beer;
use App\Models\Flower;
use App\Models\StreetFood;
use App\Models\Pizza;

class PageController extends Controller
{
    public function home(){
        return inertia('Home');
    }
    public function cocktails(){
        $cocktails = Cocktail::get();
        return inertia('Cocktails',[
            'cocktails' => $cocktails
        ]); 
    }
    public function beers(){
        $beers = Beer::get();
        return inertia('Beers',[
            'beers' => $beers
        ]); 
    }
    public function pizza(){
        $pizzas = Pizza::get();
        return inertia('Pizza',[
            'pizzas' => $pizzas
        ]); 
    }
    public function flower(){
        $flowers = Flower::get();
        return inertia('Flowers',[
            'flowers' => $flowers
        ]); 
    }
    public function streetfood(){
        $streetfoods = StreetFood::get();
        return inertia('StreetFood',[
            'streetfoods' => $streetfoods
        ]); 
    }
    public function contactus(){
        return inertia('ContactUs'); 
    }
    public function aboutus(){
        return inertia('AboutUs');
    }
    public function heh(){
        return inertia('Heh');
    }
   
}
