<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User_FB extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'Name', 'Surname', 'Address', 'HouseNumber', 'Province', 'CAP', 'Birthday', 'Email', 'FB_ID', 'Picture'
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];

}
