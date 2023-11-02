<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{

    protected $table = 'jenis_sampah';
    protected $fillable = ['nama', 'deskripsi', 'harga_per_kg'];

    use HasFactory;
}
