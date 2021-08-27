<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends FrontController
{
    public function index(){
        return view('pages.restaurants', $this->data);
    }   
}
