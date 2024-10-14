<?php
namespace App\Helpers;

use App\Models\User;

class Auth
{
    public static function check()
    {
        if(isset($_SESSION['Auth'])){
            return true;
        }else{
            return false;
        }
    }

    public static function user()
    {
        if(self::check()){
            return $_SESSION['Auth'];
        }else{
            return false;
        }
    }

    public static function attach($data)
    {
        $user = User::attach($data);
        if($user){
            $_SESSION['Auth'] = $user;
            return true;  
        }else{
            return false;
        }
    }

    public static function logout()
    {
        unset($_SESSION['Auth']);
    }

    
    public static function attachReg($data)
    {
        $user = User::attachReg($data);
        if($user){
            $_SESSION['Auth'] = $user;
            return true;  
        }else{
            return false;
        }
    }
}
?> 