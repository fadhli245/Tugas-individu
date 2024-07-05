<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="tugas_ganjil.php" method='post'>
<center>
<?php
$tipe=$_POST['tipe'];
$produk=$_POST['produk'];
$code=$_POST['code'];
$qty=$_POST['qty'];
$unit=$_POST['unit'];
$harga=$_POST['harga'];
?>
<table border=1>
<tr><td colspan='2'><b><center>Data Product<b></td></tr>
<tr><td>Tipe Product</td><td><center><?php echo $tipe?></td></tr>
<tr><td>Product</td><td><center><?php echo $produk?></td></tr>
<tr><td>Customer Code</td><td><center><?php echo $code?></td></tr>
<tr><td>Quantity</td><td><center><?php echo $qty?></td></tr>
<tr><td>Unit</td><td><center><?php echo $unit?></td></tr>
<tr><td>Price</td><td><center><?php echo $harga?></td></tr>
</table><br>
<input type='submit' value='input lagi'>
</center>
</body>
</html>