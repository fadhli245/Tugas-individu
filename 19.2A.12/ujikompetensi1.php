<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Add Purchase Requisition</h2>
<form action="hasil.php" method="post">

<pre>
Request Number       :<input type="number" id="request number" name="RequestNumber">
    
Date                 :<input type="date" name="date" name="date">

<label for="Suppliers">
Suppliers            :</label><select id="Suppliers" name="supple">
    <option value=>Select a Suppliers </option>
    <option value="location1">IT</option>
    <option value="location2">MANAGER</option>
    <option value="location3">HRD</option>
  </select><br><br>

<label for="Requestor">
Requestor               :</label><select id="Requestor" name="req">
    <option value=>Select a Requestor</option>
    <option value="Requestor">Requestor1</option>
    <option value="Requestor">Requestor2</option>
    <option value="Requestor">Requestor3</option>
  </select><br><br>

<label for="QCcheck">
QCcheck             :<input type="radio" name="QCcheck" value="YES">YES <input type="radio" name="QCcheck" value="NO">NO

Note                 </label><br>
<textarea id="note" name="note" rows="4" cols="50"></textarea><br><br>
<input type='submit' value='submit'>
</form>
</body>
</html>