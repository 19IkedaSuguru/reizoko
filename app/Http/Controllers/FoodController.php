<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function add()
    {
        return view('food.save');
    }
}
