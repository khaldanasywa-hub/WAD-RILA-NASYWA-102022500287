<?php
// koneksi ke database(Laragon menggunakan user 'root' dan password kosong)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_farmasi"; 

$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ambil data dari tabel obat
$query = "SELECT * FROM obat";
$result = mysqli_query($conn, $query);
?>

 