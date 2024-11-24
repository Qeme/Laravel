<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/ninjas',function(){
    return view('ninjas.index');
    // to enter the file name inside another directory, simply use .
});
