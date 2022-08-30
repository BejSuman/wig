<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Products;
class ProductsController extends Controller
{
    public function __construct()
    {
        $products = DB::table('products')->pluck('title','id');
        View::share('products', $products);
    }
    public function index()
    {
        $services = Products::all()->toArray();
        return view('pages.products', compact('services'));
    }
    public function productDetail($id, Request $request){
        $serviceDetails = Products::where('id', $id)->first();
        return view('pages.product-detail', compact('serviceDetails'));
    }
}
