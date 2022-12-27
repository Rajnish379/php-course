<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="postvget.php" method="post">
Password: <input type="password" name="password">
<input type="submit">
</form>
<br><br> 

<?php
error_reporting(E_ERROR | E_PARSE);
echo $_POST["password"]


?>
    
</body>
</html>
