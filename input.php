<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="input.php" method="get">
    Name: <br><input type="text" name="username">
    <br>
    Age: <br><input type="number" name="age">
    <br><input type="submit">
</form>

<br>

Your name is <?php 
error_reporting(E_ERROR | E_PARSE);
echo $_GET["username"]?>
<br>
Your age is <?php echo $_GET["age"]?>




    
</body>
</html>
