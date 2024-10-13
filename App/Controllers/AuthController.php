<?php
namespace App\Controllers;

use App\Helpers\View;

class AuthController 
{
    public function __construct()
    {
        layout("loginMain");
    }

    public static function loginPage()
    {
        return view("Login/login", "Login");
    
    }

    public static function registrPage()
    {
        return view("Login/registr", "Registration");
    }
}
?>  