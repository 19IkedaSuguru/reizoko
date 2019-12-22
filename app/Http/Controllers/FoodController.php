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
    //12/22実装
    public function exist(Request $request)
    {
        //FoodはFoodsになるかも？
        $cond_name = $request->cond_name;
        if($cond_name !='') {
            $posts = Food::where('name', $cond_name)->get();
        } else {
            $posts = Food::all();
        }
        
        return view('food.exist',['posts' =>$posts, 'cond_name' => $cond_name]);
    }
}
