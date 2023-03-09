<?php 
class Movie {
    public $title;
    public $genre;
    public $year;
    public $duration;
    public $director;

    public function __construct(string $_title,string $_genre,int $_year,string $_duration,string $_director)
    {
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> year = $_year;
        $this -> duration = $_duration;
        $this -> director = $_director;
    }

    public function RightTitle ($_title) {
        if (strlen($_title) < 3) {
            $this -> title = null;
            echo '<h1>Titolo non valido</h1>';
        } 
    }
}
$pulpFiction = new Movie('PulpFiction', 'Action', 1990, '120min', 'Quentin Tarantino');
$pulpFiction -> RightTitle($pulpFiction -> title);
var_dump($pulpFiction);
$spidwerwick = new Movie('Spiderwick', 'Fantasy', 2008, '120min', 'Christian De Sica');
$spidwerwick -> RightTitle($spidwerwick -> title);
echo '<br>';
var_dump($spidwerwick);
?>


