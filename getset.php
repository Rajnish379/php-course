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
    class Movie{
    public $title;
    private $rating;


    function __construct($aTitle,$aAuthor){
        $this->title = $aTitle;
        $this->setRating($aAuthor);

    }

    function getRating(){
        return $this->rating;
    }

    function setRating($rating){
       if($rating == "G" || $rating == "PG"){
            $this->rating = $rating;
       }
       else{
            $this->rating = "NR";
       }

    }

    }

$book1 = new Movie("Mike","Dog");
echo $book1->getRating();

?>
    
</body>
</html>
