<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stud extends Model
{
    protected $fillable = [
        'first_name','last_name', 'address'
    ];
}
