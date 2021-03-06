<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'image', 
        'price', 
        'sale_date', 
        'series',
        'slug',
    ];
}
