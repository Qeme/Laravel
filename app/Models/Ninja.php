<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    // create a protected fillable ~ avoid mass assignment attack 
    protected $fillable = ['name','skill','bio'];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    // now we can use the dojos data which we can use somthing like this $ninja->dojo->name to grab the name of the dojo from that ninja
    public function dojo(){
        // belongsTo() means this ninja belong to one and only one dojo
        return $this->belongsTo(Dojos::class);
    }
}

// MVC : Model(setup), View(response), Controller(intermediate) which basically keeps all the function handler in one place far from API routes
