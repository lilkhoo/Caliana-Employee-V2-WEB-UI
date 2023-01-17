<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {

        $data = [
            "title" => "Caliana Employee | Login",
            "active" => "login",
        ];

        return view('Login/login', $data);
    }
    public function fake()
    {

        $data = [
            "title" => "Caliana Employee | Login",
            "active" => "log",
        ];

        return view('Login/log', $data);
    }

    public function dummy()
    {
        $data = [
            "title" => "Caliana Employee | Dashboard",
            "active" => "dashboard",
        ];

        return view("dashboard", $data);
    }

    public function forgot()
    {
        $data = [
            "title" => "Caliana Employee | Lupa Password",
            "active" => "lupaPassword",
        ];

        return view("Login/forgot_pass", $data);
    }
}
