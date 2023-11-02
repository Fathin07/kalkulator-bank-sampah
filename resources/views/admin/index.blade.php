<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
        }

        .content {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .logout-button {
            text-align: center;
        }
        .menu {
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama Admin</title>
</head>
<body>
    <div class="container">
        <h1>Selamat datang, Admin!</h1>
        <div class="content">
            <p>Ini adalah halaman utama admin Anda. Di sini Anda dapat mengelola konten dan fitur admin.</p>
        </div>
        <div class="menu">
        <ul>
            <li><a href="/jenis">Jenis Sampah</a></li>
        </ul>
    </div>
        <div class="logout-button">
            <button onclick="logoutAdmin()">Logout</button>
        </div>
    </div>


    <script>
        function logoutAdmin() {
            // Redirect kembali ke halaman login admin
            window.location.href = '/admin-login';
        }
    </script>
</body>
</html>
