<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Routing for home and login page using Controller.
Route::get('/home',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'login']);

//Routing for posting form data to database
Route::post('/upload',[HomeController::class,'upload']);

//Routing for viewing data from database.
Route::get('/view',[HomeController::class,'view']);

//Routing for deleting data.
Route::get('/delete/{id}',[HomeController::class,'delete']);

//Route for updating data.
Route::get('/update_view/{id}',[HomeController::class,'update_view']);

//Route for updating shoes.
Route::post('/update/{id}',[HomeController::class,'update']);



// Routing for home page.
// Route::get('/home', function () {
//     return view('home');
// });

//Routing for login page.
// Route::get('/login', function () {
//     return view('login');
// });