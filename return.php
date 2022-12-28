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
function cube($num){
    echo "Hello";
    return pow($num, 3);
    // return; Returns nothing i.e., used for breaking out of function
    echo "Jello";
}


echo cube(3)

?>
    
</body>
</html>
