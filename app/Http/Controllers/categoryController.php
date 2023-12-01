<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        return view('product_category');
    }
    
    public function product()
    {
        return view('product_category_2');
    }

    public function category()
    {
        return view('product_category_3');
    }
}
