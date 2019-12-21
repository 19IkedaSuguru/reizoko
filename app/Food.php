<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'name' => 'required',
        'limit_date' => 'required',
        'purchase_date' => 'required',
        
        'body' => 'required',
        );
}
