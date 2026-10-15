<!DOCTYPE html>
<html>
<head>
    <title>Tambah Obat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="square">
        <h1>Tambah Obat</h1>
    </div>

    <div class="form-section">
        <form action="proses_tambah_obat.php" method="POST">
            <label for="nama_obat">Nama Obat:</label><br>
            <input type="text" id="nama_obat" name="nama_obat" required><br><br>

            <label for="kategori">Kategori:</label><br>
            <input type="text" id="kategori" name="kategori" placeholder="Contoh: Analgesik" required><br><br>

            <label for="sediaan">Sediaan:</label><br>
            <select id="sediaan" name="sediaan" required>
                    <option value="">Pilih Sediaan</option>
                    <option value="Sirup">Sirup</option>
                    <option value="Tablet">Tablet</option>
                    <option value="Kapsul">Kapsul</option>
            </select><br><br>

            <label for="stok">Stok:</label><br>
            <input type="number" id="stok" name="stok" required><br><br>

            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" required><br><br>

            <label for="pabrikan">Pabrikan:</label><br>
            <input type="text" id="pabrikan" name="pabrikan" placeholder="Contoh: PT. Kimia Farma" required><br><br>

            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>
