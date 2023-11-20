<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari data</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prodi = $_POST['prodi'];

    $sql = "SELECT * FROM mahasiswa WHERE prodi = '$prodi'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Data Ditemukan: ";
        echo "<table border='1'>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Anime Favorit</th>
                <th>Waifu</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["nim"] . "</td>
                <td>" . $row["nama"] . "</td>
                <td>" . $row["prodi"] . "</td>
                <td>" . $row["anime_favorit"] . "</td>
                <td>" . $row["waifu"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "Data dengan Prodi '$prodi' tidak ditemukan.";
    }
}

$conn->close();
?>

</body>
</html>

