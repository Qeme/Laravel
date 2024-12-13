<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        //route --> /ninjas/
        //fetch all records & pass into the index view

        //use ninjas like USE NINJAS and then grab ALL the values
        // $ninjas = Ninja::all();

        // instead of showing all the ninjas plus its corresponding dojo data [this is called eager loading], why not we limit them by using pagination
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

        // checking first where is the file named index inside ninjas dir, then it pass ninjas value
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        //route --> /ninjas/{id} (in react we put it /:id)
        //fetch a single record & pass into show view

        // get the ninja first plus its corresponding dojo data [this is called eager loading] by using findOrFail(), which will give an error if not found the data based on $id
        $ninja = Ninja::with('dojo')->findOrFail($id);

        return view('ninjas.show', ["ninja" => $ninja]); //we grab the id from the argument passed by the user
        // to enter the file name inside another directory, simply use ., which in this one, we want to forward it to show file
    }

    public function create() {
        //route --> /ninjas/create
        //render a create view (with web form) to users

        return view('ninjas.create');
    }

    public function store() {
        //route --> /ninjas/ (POST)
        //handle POST request to store a new ninja record in table
    }
}
