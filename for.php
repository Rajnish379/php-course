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
$luckyNumbers = array(4, 8, 16, 17, 23, 45);

for ($i = 0; $i < count($luckyNumbers);$i++){
    echo "$luckyNumbers[$i] <br>";

}

?>
    
</body>
</html>
