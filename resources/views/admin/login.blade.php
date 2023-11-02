<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
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
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
    <div class="container">
        <h1>Login Admin</h1>
        <form id="admin-login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    
    const loginForm = document.getElementById("admin-login-form");
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah form submit bawaan

        const usernameInput = document.getElementById("username");
        const passwordInput = document.getElementById("password");

        // Username dan password yang benar
        const correctUsername = "admin";
        const correctPassword = "admin123";

        if (usernameInput.value === correctUsername && passwordInput.value === correctPassword) {
            // Redirect ke halaman utama admin jika benar
            window.location.href = '/admin';
        } else {
            // Tampilkan pesan kesalahan jika salah
            alert("Username atau password salah. Silakan coba lagi.");
        }
    });
});
</script>


</body>
</html>
