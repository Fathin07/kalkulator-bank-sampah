<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    protected $table = 'jenis_sampah'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['nama', 'deskripsi', 'harga_per_kilogram', 'foto'];
}
