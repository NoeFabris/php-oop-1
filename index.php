<?php

class Movie {

    public $name;
    public $year;

    function __construct($name, $year)
    {
        $this->year = $year;
        $this->name = $name;
    }

    public function test(){
        return $this->name . '<br>' . $this->year;
    }

};
$getName = $_GET['name'];
$getYear = $_GET['year'];


$oop = new Movie($getName,$getYear);
$oop2 = new Movie($getName,$getYear);
// var_dump($oop);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <main>

        <h1>OOP Movies</h1>
        <?php
        echo $oop->test();
        echo $oop2->test();
        ?>        
    
    </main>
</body>
</html>