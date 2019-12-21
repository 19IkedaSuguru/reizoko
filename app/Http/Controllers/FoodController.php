<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Food;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    //
    public function add()
    {
        return view('food.save');
    }
    
    //?
    public function create(Request $request)
    { 
        $this->validate($request, Food::$rules);
        $food = new Food;
        $form = $request->all();
        
        $food->user_id = Auth::id();
        
        $food->fill($form);
        $food->save();
        
        return redirect('food/exist');
    }
    public function exist()
    {
        return view('food.exist');
    }
}
