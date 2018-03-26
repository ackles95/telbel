<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_G extends Authenticatable
{

    protected $fillable = [
        'Name', 'Surname', 'Address', 'HouseNumber', 'Province', 'CAP', 'Birthday', 'Email', 'G_ID', 'Picture'
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];
}
