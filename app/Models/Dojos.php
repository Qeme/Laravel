<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojos extends Model
{
    // similar to Ninja, we only want certain attributes only to be filled in
    protected $fillable = ['name', 'location', 'description'];

    /** @use HasFactory<\Database\Factories\DojosFactory> */
    use HasFactory;

    // now the relation between dojo with its ninjas also can happen
    public function ninjas(){
        // here instead of using belongsTo, we use hasMany as one dojo might has one or many ninjas under it
        return $this->hasMany(Ninja::class);
    }
}
