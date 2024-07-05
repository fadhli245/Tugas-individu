<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaGedung = $_POST['nama-gedung'];
    $namaLantai = $_POST['nama-lantai'];
    $kodeRuang = $_POST['kode-ruang'];
    $namaRuang = $_POST['nama-ruang'];
    $kapasitas = $_POST['kapasitas'];
    $keterangan = $_POST['keterangan'];

    echo "Nama Gedung: " . htmlspecialchars($namaGedung) . "<br>";
    echo "Nama Lantai: " . htmlspecialchars($namaLantai) . "<br>";
    echo "Kode Ruang: " . htmlspecialchars($kodeRuang) . "<br>";
    echo "Nama Ruang: " . htmlspecialchars($namaRuang) . "<br>";
    echo "Kapasitas: " . htmlspecialchars($kapasitas) . "<br>";
    echo "Keterangan: " . htmlspecialchars($keterangan) . "<br>";
}
?>
   
</body>
</html>