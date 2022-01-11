<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/home", "HomeController@index")->name("home");
Route::get("/admin", "HomeController@admin")->name("admin");
Route::get("/deliverer", "HomeController@deliverer")->name("deliverer");

Route::get("/about", "AboutController@index")->name("about us");

Route::get("/restaurants", "RestaurantController@index")->name("restaurants");

Route::get("/contact", "ContactController@index")->name("contact");

Route::view("/login", "pages.login")->name("log in");

Route::view("/register", "pages.register")->name("register");

Route::view("/forgotPassword", "pages.forgotPassword")->name("forgotPassword");

Route::post("/recoverPassword", "AuthController@recoverPassword")->name("recoverPassword");

Route::post("/registerUser", "AuthController@registerUser")->name("registerUser");

Route::post("/loginUser", "AuthController@loginUser")->name("loginUser");

Route::get('/', function () {
    return view('pages.home');
});


