<?php
namespace App\Controllers;

use App\Helpers\View;
use App\Models\User;
use App\Helpers\Auth;

class AuthController 
{
    public function __construct()
    {
        // dd(123);
        layout("Main/main");
    }

    public function loginPage()
    {
        return view("Login/login", "Login");
    
    }

    public function registrPage()
    {
        return view("Login/registr", "Registration");
    }

    public function login()
    {
        $data = [
            'login' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $user = Auth::attach($data);
        if($user){
            header("Location: /");
        }else{
            header("Location: /login");
        }

    }


    public function logout()
    {
        Auth::logout();
        header("Location: /login");
    }

    public function registr()
    {
        $data = [
            'login' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $user = Auth::attachReg($data);
        if($user){
            header("Location: /");
        }else{
            header("Location: /registr");
        }
    }
}
?>  