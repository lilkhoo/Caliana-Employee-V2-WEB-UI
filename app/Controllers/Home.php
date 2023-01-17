<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            "title" => "Caliana Employee | Dashboard",
            "active" => "dashboard",
        ];

        return view('/dashboard', $data);
    }
}
