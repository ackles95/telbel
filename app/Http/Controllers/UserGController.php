<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_G;


class UserGController extends Controller 
{
    public static function storeUser($user)
    {
        $g_user = new User_G;
        $g_user['Name'] = $user['name']['givenName'];
        $g_user['Surname'] = $user['name']['familyName'];
        $g_user['Address'] = "0";
        $g_user['HouseNumber'] = "0";
        $g_user['Province'] = "0";
        $g_user['City'] = "0";
        $g_user['CAP'] = "0";
        $g_user['Email'] = $user->getEmail();
        $g_user['G_ID'] = $user->getId();
        $g_user['Picture'] = "https://pikmail.herokuapp.com/" . $user->getId() . "?size=1024";

        if (isset($g_user['Birthday'])) {

        } else {
            $g_user['Birthday'] = "0000-00-00";
        }

        $g_user['Password'] = bcrypt("pelo");

        $g_user->save();
        return($g_user);
    }

    public static function checkAndInsert($user) {
        if(User_G::whereEmail($user->getEmail()) != null) {
            $f_user = User_G::whereEmail($user->getEmail())->first();
            return $f_user;
        } else {
            self::storeUser($user);
            return $user;
        }


    }



}
