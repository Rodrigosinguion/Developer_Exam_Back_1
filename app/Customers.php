<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $fillable = [
        'Name',
        'Last_Name',
        'Mail',
        'Code'      
    ];
}
