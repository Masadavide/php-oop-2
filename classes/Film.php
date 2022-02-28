<?php
    class Movie {
        private $title;
        private $year;
        private $director;
        private $length;
        private $genre;
        public $actor = [];
    
        public function __construct($_title, $_year, $_director, $_length, $_genre){
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
            $this->length = $_length;
            $this->genre = $_genre;
        }
    }

    require_once __DIR__.'/Actor.php';

    
    $actorArray = [
        new Actor("Ewan", "McGregor", "31/03/1971", "Edward Bloom giovane"),
        new Actor("Albert", "Finney", "09/05/1936", "Edward Bloom anziano"),
        new Actor("Billy", "Crudup", "08/07/1968", "Will Bloom"),
    ];

    

    $actorArray1 = [
        new Actor("Choi", "Min-sik", "30/05/1962", "Oh Dae-Su"),
        new Actor("Yoo", "Ji-tae", "13/04/1976", "Lee Woo-Jin"),
        new Actor("Kang", "Hye-jeong", "04/01/1982", "Mi-Do"),
    ];


    $actorArray2 = [
        new Actor("Joaquin", "Phoenix", "28/10/1974", "Arthur Fleck / Jokere"),
        new Actor("Robert", "De Niro", "17/07/1943", "Murray Franklin"),
        new Actor("Zazie", "Beetz", "25/05/1991", "Sophie Dumond"),
    ];