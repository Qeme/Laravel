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
    // lets create an array of 2 items
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => "1"],
        ["name" => "luigi", "skill" => 45, "id" => "2"],
    ];

    return view('ninjas.index', ["greeting" => "hello", "ninjas" => $ninjas]); //we can pass index value inside the index page
    // to enter the file name inside another directory, simply use .
});

// impliment route wildcards for id by using {id}
Route::get('/ninjas/{id}',function($id){

    return view('ninjas.show', ["id" => $id]); //we grab the id from the argument passed by the user
    // to enter the file name inside another directory, simply use ., which in this one, we want to forward it to show file
});
