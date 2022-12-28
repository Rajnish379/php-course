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
$isMale = 1;
$isTall = 0;
if ($isMale && $isTall){
    echo "You are male and tall";
}
elseif($isMale && !$isTall){
    echo "You are male and not tall";

}
elseif(!$isMale && $isTall){
    echo "You are not male and tall";
}
else{
    echo "You are not male and short";
}
?>
    
</body>
</html>
