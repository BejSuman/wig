<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('pages.login');
    }
}
