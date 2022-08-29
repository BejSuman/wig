<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('pages.products');
    }
    public function productDetail()
    {
        return view('pages.product-detail');
    }
}
