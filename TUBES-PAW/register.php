<?php
include 'koneksi.php';

$email    = $_POST['email'];
$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

$query = "INSERT INTO users (email, nama, username, password) VALUES ('$email', '$nama', '$username', '$password')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>alert('Registrasi berhasil! Silakan login'); window.location='login.php';</script>";
} else {
    echo "Gagal register: " . mysqli_error($koneksi);
}
?>
