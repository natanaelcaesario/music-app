<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('_core/login');
    }
    public function register()
    {
        return view('_core/register');
    }
    public function profil()
    {
        return view('_core/profil');
    }
}
