<?php

namespace TynChristian\Belajar\PHP\MVC\Controller;

class HomeController
{
    function index(): void 
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat belajar PHP MVC"
        ];
        
        require __DIR__ . "/../View/Home/index.php";
    }

    function hello(): void 
    {
        echo "HomeController.hello()";
    }

    function world(): void 
    {
        echo "HomeController.world()";
    }

    function about(): void 
    {
        echo "Author: Christian";
    }

    function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "message" => "Login Sukses"
        ];
    }
}