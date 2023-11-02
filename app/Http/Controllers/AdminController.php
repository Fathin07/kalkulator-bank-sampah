<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Logika dan tampilan untuk halaman utama admin di sini
        return view('admin.index'); // Sesuaikan dengan nama view Anda
    }
}

