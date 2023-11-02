<!-- resources/views/admin/jenis-sampah/create.blade.php -->
@extends('admin.layouts.app')

@section('content')
    <h1>Tambah Jenis Sampah</h1>
    <form action="{{ route('jenis-sampah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Jenis Sampah:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label for="harga_per_kilogram">Harga per Kilogram:</label>
            <input type="number" name="harga_per_kilogram" id="harga_per_kilogram" step="0.01" required>
        </div>
        <!-- Tambahkan input untuk unggah foto -->
        <button type="submit">Simpan</button>
    </form>
</div>
