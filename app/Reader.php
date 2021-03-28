<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    protected $fillable = ['name', 'lastname', 'birth_date'];//Nella $fillable, dichiaro i campi che posso riempire.
}
