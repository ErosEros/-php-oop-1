<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

class Movie {

    public $title;
    public $director;
    public $year;


    // funzione di costruzione
    function __construct($_title, $_director, $_year){
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    // funzione per stampare
    function printDisplay(){
        echo '<h2>'.$this->title.'</h2>';
        echo '<h3>'.$this->director.'</h3>';
        echo '<p>'.$this->year.'</p>';
        
    }
    

}

$onePiece = new Movie('Red','Gorō Taniguchi','2022');
// var_dump($onePiece) 
$demonSlayer = new Movie('Il treno Mugen','Haruo Sotozaki','2020');
$myHeroAcademia = new Movie("World Heroes' Mission",'Kenji Nagasaki','2021');

$onePiece->printDisplay();
$demonSlayer->printDisplay();
$myHeroAcademia->printDisplay();


?>