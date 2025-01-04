<?php
// Password admin (dapat diganti dengan password yang lebih aman)
$admin_password = "admin123";

// Periksa password yang dimasukkan
if ($_POST['password'] === $admin_password) {
    header("Location: admin.html");
} else {
    echo "Password salah. <a href='admin_login.html'>Coba lagi</a>";
}
?>
