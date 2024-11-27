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

        // why not we sort them in desc first then we get all
        $ninjas = Ninja::orderBy('created_at', 'desc')->get();

        // checking first where is the file named index inside ninjas dir, then it pass ninjas value
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        //route --> /ninjas/{id} (in react we put it /:id)
        //fetch a single record & pass into show view
    }

    public function create() {
        //route --> /ninjas/create
        //render a create view (with web form) to users
    }

    public function store() {
        //route --> /ninjas/ (POST)
        //handle POST request to store a new ninja record in table
    }
}
