<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('example');
    }

    // Salin "public function ..." di atas dalam "class NamaController ...",
    // kemudian ubah "index" dengan nama fungsi sesuka hati dan ubah "example"
    // sesuai nama file .blade.php (tanpa .blade.php)
}
