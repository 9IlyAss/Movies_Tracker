<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable=['title','description','genre','release_date','rating','duration','poster_image'];

}
