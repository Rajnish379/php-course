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
    }

$book1 = new Book;
$book1->title = "Harry Potter";
$book1->author = "Rowling";
$book1->pages = 90;

$book2 = new Book;
$book2->title = "Lord of the rings";
$book2->author = "Rowli";
$book2->pages = 900;

echo $book2->author;

?>
    
</body>
</html>
