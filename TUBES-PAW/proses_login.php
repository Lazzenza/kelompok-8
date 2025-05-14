<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['nama']     = $user['nama'];
    header("Location: index.php");
} else {
    echo "<script>alert('Username atau Password salah!'); window.location='login.php';</script>";
}
?>
