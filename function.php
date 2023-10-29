<?php
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