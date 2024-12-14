<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojos;
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

        // we want to fetch all the dojos data when the user go to create page
        $dojos = Dojos::all();

        // then we pass the dojos as argument for view()
        return view('ninjas.create', ["dojos" => $dojos]);
    }

    // we grab the request data by using Request
    public function store(Request $request) {
        //route --> /ninjas/ (POST)
        //handle POST request to store a new ninja record in table

        // we validate the data(s) to check its format or type
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id' //the dojo_id must existed inside the dojos table
        ]);

        // as the data is passed, we then create the new ninja and store it inside database
        Ninja::create($validate);

        // as it finish, we then redirect user back to main menu
        return redirect()->route('ninjas.index')->with('success', 'Ninja Created!'); //we use with() to pass the function with the respective message
    }

    // destroy aka delete function which remove the specific ninja  by id
    public function destroy($id){
        // first find that specific id 
        $ninja = Ninja::findOrFail($id);

        // then delete
        $ninja->delete();

        // redirect this function to index page back
        return redirect()->route('ninjas.index')->with('success', 'Ninja Deleted!'); //we use with() to pass the function with the respective message
    }
}
