<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $anime_favorit = $_POST['anime_favorit'];
    $waifu = $_POST['waifu'];
    $updatenim = $_POST['nimlama'];

    $sql = "UPDATE mahasiswa SET nim=$nim, nama='$nama', prodi='$prodi', anime_favorit='$anime_favorit', waifu='$waifu' WHERE nim='$updatenim'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}