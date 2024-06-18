<?php

/**
 * NIM  : 2257401092
 * Nama : Muparikoh
 * Kelas : MI22A
 */
function checkLogin($username, $password)
{
    // Hardcoded username and password for the example
    $valid_username = 'admin';
    $valid_password = 'admin';

    // Check if the provided username and password match the expected values
    if ($username === $valid_username && $password === $valid_password) {
        return true;
    } else {
        return false;
    }
}

// Initialize the error and success message variables
$error = '';
$success = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Call the function to check login
    if (checkLogin($username, $password)) {
        // If login is successful, set the success message
        $success = "Login Berhasil.";
    } else {
        // If login fails, set the error message
        $error = "Username/Password tidak sesuai";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #800080;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-color: #800080;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <?php if (!empty($success)) : ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>