<?php
session_start();

if (isset($_COOKIE['key'])) {
    header("Location: index.php"); // Redirect to the main page if the cookie exists.
    exit();
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek username
    if ($username === "admin" && $password === "admin123" || $username === "user" && $password = "user123") {
        // cek remember me
        if (isset($_POST['remember'])) {
            // buat cookie
            if ($username === "admin" && $password === "admin123") {
                setcookie('id', 'admin', time() + 60);
                setcookie('key', hash('sha256', 'admin123'), time() + 60);
            }

            if ($username === "user" && $password === "user123") {
                setcookie('id', 'user', time() + 60);
                setcookie('key', hash('sha256', 'user123'), time() + 60);
            }
        }

        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .login-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        width: 300px;
        margin: 100px auto;
        padding: 20px;
    }

    .login-container h2 {
        color: #333;
    }

    .login-container input,
    .login-container label {
        display: block;
        margin: 10px auto;
        padding: 10px;
        width: 100%;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #loginButton {
        background-color: #007BFF;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    #loginButton:hover {
        background-color: #0056b3;
    }
    </style>
    </shead>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="function.php" method="post">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="rememberMe">Remember Me</label>
            <input type="checkbox" name="remember" id="rememberMe">
            <button type="submit" name="login" id="loginButton">Login</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>

<sc