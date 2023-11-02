<!DOCTYPE html>
<html lang="en">
<head>
    <style>body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    background-color: #f4f4f4;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
}

select,
input[type="number"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

#result {
    margin-top: 20px;
}

#total-harga {
    font-weight: bold;
    font-size: 24px;
}
.admin-login-button {
        display: inline-block;
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 10px;
        margin-right: 10px;
        float: right;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bank Sampah</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<a href="{{ route('admin.login') }}" class="admin-login-button">Login Admin</a>  
    <div class="container">
   
        <h1>Kalkulator Bank Sampah</h1>
        <form id="calculator-form">
            <div class="form-group">
                <label for="jenis-sampah">Pilih Jenis Sampah:</label>
                <select id="jenis-sampah" name="jenis-sampah">
                    <option value="kertas">Kertas</option>
                    <option value="plastik">Plastik</option>
                    <option value="logam">Logam</option>
                    <option value="kaca">Kaca</option>
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
