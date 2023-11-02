<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JenisSampahController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar jenis sampah
        // Misalnya, Anda dapat mengambil data dari database dan mengirimkannya ke tampilan.
        return view('admin.jenis'); // Sesuaikan dengan tampilan yang ingin Anda gunakan
    }
}
