<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Form Pengajuan Pembelian</h2>

<form method="post" action="submit_purchase_requisition.php">
    <label for="request_number">Nomor Permintaan:</label><br>
    <input type="text" id="request_number" name="request_number"><br><br>
    
    <label for="date">Tanggal:</label><br>
    <input type="date" id="date" name="date"><br><br>
    
    <label for="supplier">Pemasok:</label><br>
    <input type="text" id="supplier" name="supplier"><br><br>
    
    <label for="requester">Pengaju:</label><br>
    <input type="text" id="requester" name="requester"><br><br>
    
    <input type="submit" value="Submit">
</form>
</body>
</html>