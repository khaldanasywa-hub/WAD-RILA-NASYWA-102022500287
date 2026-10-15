<?php
include 'koneksi.php';

$id = (int) ($_GET['id'] ?? 0);

$query = "DELETE FROM obat WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: Sistem Informasi Klinik Rawat Jalan.php");
    exit;
} else {
    echo "Gagal menghapus data obat.";
}
?>