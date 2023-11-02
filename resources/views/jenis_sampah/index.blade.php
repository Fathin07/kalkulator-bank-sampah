<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bank Sampah</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Kalkulator Bank Sampah</h1>
        <form id="calculator-form">
            <div class="form-group">
                <label for="jenis-sampah">Pilih Jenis Sampah:</label>
                <select id="jenis-sampah" name="jenis-sampah">
                    <option value="kertas">Kertas</option>
                    <option value="plastik">Plastik</option>
                    <option value="logam">Logam</option>
                    <!-- Tambahkan jenis sampah lain di sini -->
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah-sampah">Jumlah Sampah (kg):</label>
                <input type="number" id="jumlah-sampah" name="jumlah-sampah" min="0" step="0.01">
            </div>
            <button type="button" id="hitung-button">Hitung</button>
        </form>
        <div id="result">
            <p>Total Harga: <span id="total-harga">0</span> IDR</p>
        </div>
    </div>
    <script src="{{ asset('js/calculator.js') }}"></script>
</body>
</html>
