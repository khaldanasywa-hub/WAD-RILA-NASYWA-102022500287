<?php
include 'koneksi.php';

$id = (int) ($_GET['id'] ?? 0); // Digunakan untuk mengambil nilai ID yang dikirim melalui URL

$query  = "SELECT * FROM obat WHERE id = $id"; // perintah
$result = mysqli_query($conn, $query); // hasil dari eksekusi perintah
$row    = mysqli_fetch_assoc($result);

if (!$row) {
    die("Data obat tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Obat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="square">
        <h1>Edit Katalog Obat</h1>
    </div>

    <div class="form-section">
        
        <form action="update.php" method="POST">
        
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="nama_obat">Nama Obat:</label><br>
            <input type="text" id="nama_obat" name="nama_obat" value="<?php echo $row['nama_obat']; ?>" required><br><br>

            <label for="kategori">Kategori Obat:</label><br>
            <input type="text" id="kategori" name="kategori" value="<?php echo $row['kategori']; ?>" required><br><br>

            <label for="sediaan">Sediaan:</label><br>
            <select id="sediaan" name="sediaan" required>
                <option value="Sirup" <?php if($row['sediaan'] == 'Sirup') echo 'selected'; ?>>Sirup</option>
                <option value="Tablet" <?php if($row['sediaan'] == 'Tablet') echo 'selected'; ?>>Tablet</option>
                <option value="Kapsul" <?php if($row['sediaan'] == 'Kapsul') echo 'selected'; ?>>Kapsul</option>
            </select><br><br>

            <label for="stok">Stok:</label><br>
            <input type="number" id="stok" name="stok" value="<?php echo $row['stok']; ?>" required><br><br>

            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" value="<?php echo $row['harga']; ?>" required><br><br>

            <label for="pabrikan">Pabrikan:</label><br>
            <input type="text" id="pabrikan" name="pabrikan" value="<?php echo $row['pabrikan']; ?>" required><br><br>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>