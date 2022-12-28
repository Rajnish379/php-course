<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
        What was your grade?
        <br>
        <input type="text" name="grade"><br>
        <input type="submit">
    </form>

<?php
error_reporting(E_ERROR | E_PARSE);
$grade = $_POST["grade"];
switch($grade){
    case "A":
        echo "Amazing!!";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Poor";
        break;
    case "D":
        echo "Bad";
        break;
    case "F":
        echo "Fail";
        break;
    default:
        echo "Invalid Grade";

}


?>
    
</body>
</html>
