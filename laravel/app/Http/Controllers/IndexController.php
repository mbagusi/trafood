<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodBanten;
use App\FoodJabar;
use App\FoodJateng;
use App\FoodJatim;
use App\Rekomendasi;

class IndexController extends Controller
{
    public function show(){
        $food_bantens = FoodBanten::all();
        $food_jabars = FoodJabar::all();
        $food_jatengs = FoodJateng::all();
        $food_jatims = FoodJatim:: all();
        $rekomendasis = Rekomendasi:: all(); //tambahan
        return view('index.index', ['food_banten' => $food_bantens, 'food_jabar' => $food_jabars,
    'food_jateng' => $food_jatengs, 'food_jatim' => $food_jatims, 'rekomendasi' => $rekomendasis]); //tambahan
    }
}
