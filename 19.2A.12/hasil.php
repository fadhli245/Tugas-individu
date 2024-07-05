<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $req = $_POST['RequestNumber'];
    $date= $_POST['date'];
    $Suppliers= $_POST['supple'];
    $Requestor= $_POST['req'];
    $QCcheck= $_POST['QCcheck'];
    $note= $_POST['note'];
?>
<table border=1>
<tr><td colspan='2'>Data Product</td></tr>
<tr><td>request number</td><td><?php echo $req?></td></tr>
<tr><td>date</td><td><?php echo $date?></td></tr>
<tr><td>supple </td><td><?php echo $supple?></td></tr>
<tr><td>Requestor</td></td><?php echo $req?></td></tr>
<tr><td>QCcheck</td></td><?php echo $QCcheck?></td></tr>
<tr><td>note</td></td><?php echo $note?></td></tr>
<a href='ujikompetensi1.php'>INPUT DATA LAGI</a>
</body>
</html>