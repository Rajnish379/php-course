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
    class Book{
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle,$aAuthor,$aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;

    }
    }

$book1 = new Book("Mike","Rowling",90);
$book1->author = "JK";
$book2 = new Book("Lord of the Rings", "Rowli", 900);


echo $book1->author

?>
    
</body>
</html>
