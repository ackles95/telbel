<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{


public function getProfile() {

    return view('/profile');

}

public function logout() {
    Auth::logout();
}

}
