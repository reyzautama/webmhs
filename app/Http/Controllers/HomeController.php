<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // Atau ganti dengan view yang sesuai dengan halaman utama Anda
    }
}
