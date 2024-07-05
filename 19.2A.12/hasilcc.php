<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<body>
<?php
$Namagedung =$_POST['Namagedung'];
$Namlan =$_POST['Namlan'];
$Kodrung =$_POST['Kodrung'];
$Namrung =$_POST['Namrung'];
$Kaljur =$_POST['Kaljur'];
$Keterangan =$_POST['Keterangan'];
?>
<table border=1>
<tr>
<td colspan=2 align="center"><b>Data Ruang</b></td>
</tr>
<tr>
<td>Nama Gedung</td><td><?php echo $Namagedung; ?></td>
</tr>
<td>Nama Lantai</td><td><?php echo $Namlan; ?></td>
</tr>
<td>Kode Ruang</td><td><?php echo $Kodrung; ?></td>
</tr>
<td>Nama ruang</td><td><?php echo $Namrung; ?></td>
</tr>
<td>Kapasitas(lajur)</td><td><?php echo $Kaljur?></td>
</tr>
<td>Keterangan</td><td><?php echo $Keterangan; ?></td>
</tr>
<a href='uji1.php'>INPUT DATA LAGI</a>
</body>
</html>
</body>
</html>