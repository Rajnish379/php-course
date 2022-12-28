<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="assocarr.php" method="post">
<input type="text" name="student">
<input type="submit">
</form>

<?php
error_reporting(E_ERROR | E_PARSE);
$grades = array("Jim"=>"A+","Siraj"=>"B+","Mary"=>"C+");
$grades["Jim"] = "F";
// echo $grades["Jim"]
// echo count($grades)
echo $grades[$_POST["student"]]


?>
    
</body>
</html>
