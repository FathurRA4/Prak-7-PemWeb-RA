<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Prak 7</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>
<form action="tambahdata.php" method="post">
        <label for="nim">Nim:</label>
        <input type="text" name="nim" required>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <label for="prodi">Prodi:</label>
        <input type="text" name="prodi" required>
        <label for="anime_favorit">Anime Favorit:</label>
        <input type="text" name="anime_favorit" required>
        <label for="waifu">Waifu:</label>
        <input type="text" name="waifu" required>
        <input type="submit" value="Tambahkan">
    </form>
    <h2>Hapus Data Mahasiswa</h2>
    <form action="hapusdata.php" method="get">
        <label for="del">Nim mahasiswa :</label>
        <input type="text" name="del" required>
        <input type="submit" value="Hapus">
    </form>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post" action="editdata.php">
        NIM lama: <input type="text" name="nimlama" required>
        NIM baru: <input type="text" name="nim" required>
        Nama: <input type="text" name="nama" required>
        Prodi: <input type="text" name="prodi" required> 
        Anime Favorit: <input type="text" name="anime_favorit" required>
        Waifu: <input type="text" name="waifu" required>
        <input type="submit" value="Update Data">
    </form>
    
    <h2>Pencarian Data</h2>
    <form method="post" action="caridata.php">
        <label for="prodi">Pilih Program Studi:</label>
        <select name="prodi" id="prodi" class="styled-select">
            <option value="Teknik Kimia">Teknik Kimia</option>
            <option value="Teknik informatika">Teknik informatika</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Matematika">Matematika</option>
            <option value="Sains Aktuaria">Sains Aktuaria</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Farmasi">Farmasi</option>
            <option value="Teknik Kelautan">Teknik Kelautan</option>
            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
            <option value="Biologi">Biologi</option>
            <option value="Teknologi Pangan">Teknologi Pangan</option>
            <input type="submit" value="Cari">
            </form>


<?php
include("koneksi.php");
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data baris per baris
    echo
    "Daftar Tabel Mahasiswa
    <table border='1'>
    <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Prodi</th>
    <th>Anime Favorit</th>
    <th>Waifu</th>
    </tr>";
    // Tampilkan setiap baris data
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nim"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["prodi"] . "</td><td>" . $row["anime_favorit"] . "</td><td>" . $row["waifu"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data dalam tabel.";
}
?>

</body>
</html>
