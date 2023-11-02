<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisSampah; // Pastikan Anda telah membuat model JenisSampah

class JenisSampahController extends Controller
{
    public function index()
    {
        $jenisSampah = JenisSampah::all();
        return view('kalkulator', ['jenisSampah' => $jenisSampah]);
    }

    public function hitungHarga(Request $request)
    {
        $jenisSampah = JenisSampah::find($request->input('jenis-sampah'));
        $jumlahSampah = $request->input('jumlah-sampah');

        if ($jenisSampah && is_numeric($jumlahSampah) && $jumlahSampah >= 0) {
            $hargaPerKilogram = $jenisSampah->harga_per_kilogram;
            $totalHarga = $hargaPerKilogram * $jumlahSampah;
            return response()->json(['total_harga' => $totalHarga]);
        } else {
            return response()->json(['total_harga' => 0]);
        }
    }
}
