<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_FB;

class UserFBController extends Controller
{
    public static function storeUser($user) {

        $f_user = new User_FB;
        $f_user['Name'] = $user['first_name'];
        $f_user['Surname'] = $user['last_name'];
        $f_user['Address'] = "0";
        $f_user['HouseNumber'] = "0";
        $f_user['Province'] = "0";
        $f_user['City'] = "0";
        $f_user['CAP'] = "0";
        $f_user['Email'] = $user->getEmail();
        $f_user['FB_ID'] = $user->getId();
        $f_user['Picture'] = "https://graph.facebook.com/" . $user->getId() ."/picture?width=9999";

        if (isset($f_user['Birthday'])) {

            $f_user['Birthday'] = $user['birthday'];

        } else {
            $f_user['Birthday'] = "0000-00-00";
        }

        $f_user['Password'] = bcrypt("pelo");

        $f_user->save();
        return($f_user);

    }

    public static function checkAndInsert($user) {
        if(User_FB::whereEmail($user->getEmail()) != null) {
            $f_user = User_FB::whereEmail($user->getEmail())->first();
            return $f_user;
        } else {
            self::storeUser($user);
            return $user;
        }


    }


}
