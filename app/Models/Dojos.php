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
}
