<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController; //we call the controller from NinjaController

Route::get('/', function () {
    return view('welcome');
});

/* 
routes differ depends on the url
yourdomain.com/contact will bring user to contact page

in laravel, after METHOD and the path, next is function to handle the request
above cases, after the user get the /, it will return the page of "welcome" by using view() function built in inside laravel
The laravel finds the name of the file inside views file, which one has the welcome name in it and execute the page
*/

// using NinjaController::class is a way to simplified the long path that you need to write it on
// write it reference (function) after it
Route::get('/ninjas',[NinjaController::class, 'index'])->name('ninjas.index'); //now we naming the route

// previously there an error where id - create (argument), means we need to specify specific API not dynamic one
// it must be above the wildcare {id} as laravel see the API from top to bottom
Route::get('/ninjas/create',[NinjaController::class, 'create'])->name('ninjas.create'); //now we naming the route

// impliment route wildcards for id by using {id}
Route::get('/ninjas/{id}',[NinjaController::class, 'show'])->name('ninjas.show'); //now we naming the route

// handle the post request 
Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');
