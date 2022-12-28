<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
error_reporting(E_ERROR | E_PARSE);
// echo max(3, 6);
function getMax($num1,$num2,$num3){
    if($num1>$num2){
        if ($num1 > $num3) {
            return $num1;
        }
        else{
            return $num3;
        }
    } else {
        if ($num2 > $num3) {
            return $num2;
        }
        else {
            return $num3;
        }
    }
}
echo getMax(3000,3000,400);
?>
    
</body>
</html>
