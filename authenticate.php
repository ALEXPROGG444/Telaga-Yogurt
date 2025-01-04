<?php
// Contoh skrip autentikasi sederhana
$username = $_POST['username'];
$password = $_POST['password'];

// Kredensial dummy
$valid_username = "user";
$valid_password = "password";

if ($username === $valid_username && $password === $valid_password) {
    header("Location: account.html");
} else {
    echo "Nama pengguna atau kata sandi tidak valid.";
}
?>
