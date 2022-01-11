<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends FrontController
{
    public function index(){
        return view('admin.admin', $this->data);
    } 
 
    public function admin(){
        return view('pages.admin', $this->data);
    } 

    public function deliverer(){
        return view('pages.deliverer', $this->data);
    }
}
