<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="madlibs.php" method="get">
    Color: <input type="text" name="color">
    Plural Noun: <input type="text" name="pluralNoun">
    Celebrity: <input type="text" name="celebrity">

<input type="submit">
</form>
<br><br>

<?php
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];
echo "Roses are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity";


?>
    
</body>
</html>
