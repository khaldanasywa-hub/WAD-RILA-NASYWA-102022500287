<?php
include 'koneksi.php';

$query  = "SELECT * FROM obat";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Katalog Farmasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="square"> 
            <h1>Katalog Farmasi<br>Klinik Rawat Jalan</h1>
        </div>
    </header>

    <div class="search-section">
        <input type="text" id="searchInput" placeholder="Cari obat...">
            <button class="button">Cari</button>

    </div>

    <div class="add-section">
        <a href="Tambah.php">
            <button>+Tambah Obat</button>
        </a>
    </div>

    
    <table>
        <thead> <!-- bagian kepala tabel -->
            <tr> <!-- baris pertama tabel -->
                <th>Nama Obat</th> <!-- th judul kolom -->
                <th>Kategori Obat</th>
                <th>Sediaan</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Pabrikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // untuk menampilkan data obat dari database ke dalam tabel secara berulang
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['nama_obat']); ?></td>
                    <td><?php echo htmlspecialchars($row['kategori']); ?></td>
                    <td><?php echo htmlspecialchars($row['sediaan']); ?></td>
                    <td><?php echo htmlspecialchars($row['stok']); ?></td>
                    <td><?php echo htmlspecialchars($row['harga']); ?></td>
                    <td><?php echo htmlspecialchars($row['pabrikan']); ?></td>
                    <td> 
                        <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit-button">Edit</button></a> 
                        <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Hapus data?')"><button class="edit-button">Hapus</button></a>
                    </td>
                </tr>
            <?php 
                }
            } else {
                echo "<tr><td colspan='7' style='text-align:center;'>Belum ada data obat.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>