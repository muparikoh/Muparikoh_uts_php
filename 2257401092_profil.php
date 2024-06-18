<?php
/**
 * NIM  : 2257401092
 * Nama : Muparikoh
 * Keas " MI22A
 */
echo "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Profil Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        function displayData(event) {
            event.preventDefault(); // Mencegah halaman berpindah

            // Mengambil nilai dari input form
            var nim = document.getElementById('nim').value;
            var nama = document.getElementById('nama').value;
            var kelas = document.getElementById('kelas').value;
            var email = document.getElementById('email').value;
            var no_hp = document.getElementById('no_hp').value;

            // Menampilkan data di bawah form
            document.getElementById('result').innerHTML = `
                <p><strong>NIM:</strong> ${nim}</p>
                <p><strong>Nama:</strong> ${nama}</p>
                <p><strong>Kelas:</strong> ${kelas}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Nomor HP:</strong> ${no_hp}</p>
            `;
        }
    </script>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 20px;
}

.container {
    display: flex;
    justify-content: "";
    align-items: "";
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

h2 {
    text-align: "";
    color: #333;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="email"], input[type="tel"] {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #800080;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #800080;
}

#result {
    margin-top: 20px;
    background-color: #e9f7ef;
    padding: 10px;
    border-radius: 5px;
    text-align: "";
}

</style>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Form Profil Mahasiswa</h2>
            <form onsubmit="displayData(event)">
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" name="nim" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" id="kelas" name="kelas" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">Nomor HP:</label>
                    <input type="tel" id="no_hp" name="no_hp" required>
                </div>
                <input type="submit" value="Simpan">
            </form>
            <div id="result"></div>
        </div>
    </div>
</body>
</html>
