<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navbar extends Controller
{
    public function index() {
        $title = "glammer";
        return view('navbar', ['title' => $title]);
    }
}
