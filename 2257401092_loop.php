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
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }
        input[type="text"], input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #800080;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #800080;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #FFFFFF;
            border: 1px solid #ccc;
            border-radius: 3px;
            text-align: left;
        }
    </style>
</head>
<body>
<div class="form-container">
        <h2>Form Perulangan</h2>
        <form action="" method="post">
            <input type="text" name="input_teks" placeholder="Teks" required>
            <input type="number" name="jumlah_perulangan" placeholder="Jumlah Perulangan" required>
            <input type="submit" value="Cetak">
        </form>

        <?php
        // PHP script untuk menangani form submission dan menampilkan hasil
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai inputan dari form
            $input_teks = $_POST['input_teks'];
            $jumlah_perulangan = intval($_POST['jumlah_perulangan']); // pastikan jumlah perulangan adalah bilangan bulat

            // Validasi bahwa jumlah perulangan harus lebih besar dari 0
            if ($jumlah_perulangan > 0) {
                // Tampilkan teks sebanyak jumlah perulangan yang diminta
                echo "<div class='result'>";
                for ($i = 0; $i < $jumlah_perulangan; $i++) {
                    echo "<p>$input_teks</p>";
                }
                echo "</div>";
            } else {
                // Jika jumlah perulangan tidak valid, tampilkan pesan error
                echo "<p style='color: red;'>Jumlah perulangan harus lebih dari 0.</p>";
            }
        }
        ?>
    </div>
</body>
</html>