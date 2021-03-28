<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['name', 'year_of_birth', 'email', 'spouse'];
}
