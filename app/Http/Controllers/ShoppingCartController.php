<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('pages.shopping-cart');
    }
}
