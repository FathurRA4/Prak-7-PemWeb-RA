<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $anime_favorit = $_POST['anime_favorit'];
    $waifu = $_POST['waifu'];

    $query = "INSERT INTO mahasiswa (nim, nama, prodi, anime_favorit, waifu) VALUES ('$nim', '$nama', '$prodi', '$anime_favorit', '$waifu')";


    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
