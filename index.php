<?php
/**
 * NIM  : 2257401092
 * Nama : Muparikoh
 * Keas " MI22A
 */
echo "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Navigasi dengan Kotak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #800080; /* Warna putih */
            padding: 10px;
            border: 1px solid #800080;
            border-radius: 4px;
            margin: 20px auto;
            width: fit-content;
        }
        .navbar a {
            display: block;
            color: #000000; /* Warna hitam */
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            border: 1px solid #f3e5f5;
            margin: 0 5px;
            border-radius: 4px;
            background-color: #f3e5f5; /* Warna abu-abu */
        }
        .navbar a:hover {
            background-color: #e6e6e6; /* Warna abu-abu lebih gelap saat hover */
            color: #000000; /* Warna hitam */
            border-color: #c8c8c8; /* Warna abu-abu lebih gelap untuk border saat hover */
        }
        .content, .form-container {
            display: none;
            padding: 16px;
            text-align: center;
        }
        .form-box {
            background-color: #ffffff; /* Warna putih */
            padding: 20px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            width: 300px;
            margin: 0 auto;
        }
        .form-box input[type="text"],
        .form-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }
        .form-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #000000; /* Warna hitam */
            color: #ffffff; /* Warna putih */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-box input[type="submit"]:hover {
            background-color: #333333; /* Warna hitam lebih gelap saat hover */
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            width: 300px;
            margin: 0 auto;
            display: none;
        }
    </style>
    <script>
        function showPage(pageId) {
            // Sembunyikan semua halaman
            document.querySelectorAll('.content, .form-container').forEach(page => page.style.display = 'none');
            // Tampilkan halaman yang dipilih
            document.getElementById(pageId).style.display = 'block';
        }

        function showResult() {
            var form = document.getElementById('loginForm');
            var username = form.elements['username'].value;
            var password = form.elements['password'].value;
            var resultDiv = document.getElementById('result');

            // Tampilkan hasil
            resultDiv.innerHTML = `Username: ${username}<br>Password: ${password}`;
            resultDiv.style.display = 'block';
        }
    </script>
</head>
<body>

<div class="navbar">
    <a href="#" onclick="showPage('beranda')">Beranda</a>
    <a href="2257401092_login.php" onclick="showPage('login')">Login</a>
    <a href="2257401092_loop.php" onclick="showPage('loop')">Loop</a>
    <a href="2257401092_profil.php" onclick="showPage('profil')">Profil</a>
</div>

<div id="beranda" class="content">
    <h1>Selamat Datang di Beranda</h1>
</div>

<div id="login" class="form-container">
</div>

<div id="loop" class="content">
</div>

<div id="profil" class="content">
</div>

<div id="result" class="result"></div>

<script>
    // Tampilkan halaman beranda secara default
    showPage('beranda');
</script>

</body>
</html>
