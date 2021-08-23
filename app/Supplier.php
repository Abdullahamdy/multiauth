<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supplier extends Authenticatable
{
    protected $fillable =['name','email','password','api_token'];
    protected $hidden = [
        'password','api_token'
    ];

}
