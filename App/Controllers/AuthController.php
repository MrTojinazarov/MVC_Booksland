<?php
namespace App\Controllers;

use App\Helpers\View;
use App\Models\User;

class AuthController 
{
    public function __construct()
    {
        layout("loginMain");
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
        $user = User::attach($data);
        if($user){
            $_SESSION['Auth'] = $user;
            header("Location: /");  
        }else{
            $_SESSION['message'] = 'User not found';
            header("Location: /login");
        }
    }


    public function logout()
    {
        session_destroy();
        header("Location: /login");
    }
}
?>  