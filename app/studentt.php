<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentt extends Model
{
    protected $fillable = [
        'first_name','last_name', 'address'
    ];
}
