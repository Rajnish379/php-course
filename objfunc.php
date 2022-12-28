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
    class Student{
    var $name;
    var $major;
    var $gpa;

    function __construct($aTitle,$aAuthor,$aPages){
        $this->name = $aTitle;
        $this->major = $aAuthor;
        $this->gpa = $aPages;

    }

    function hasHonors(){
        if($this->gpa >= 3.5){
            return "true";
        }
        return "false";
    }
    }

$book1 = new Student("Mike","Rowling",2.8);
$book2 = new Student("Lord of the Rings", "Rowli", 3.5);

echo $book2->hasHonors();

?>
    
</body>
</html>
