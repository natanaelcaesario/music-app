<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }
    public function index()
    {
        return view('_admin/dashboard');
    }
}
