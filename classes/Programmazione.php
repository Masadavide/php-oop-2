<?php
    class Schedule {
        private $movie;
        private $date;
        private $hours;
        private $room;

        public function __costruct($_movie, $_date, $_hours, $_room){
            $this->movie = $_movie;
            $this->date = $_date;
            $this->hours = $_hours;
            $this->room = $_room;
        }
    }

    $programmazioneArray = [
        new Schedule("Big fish", "28/02/2022", "14.00", "1"),
        new Schedule("Old boy", "28/02/2022", "16.00", "2"),
        new Schedule("Joker", "28/02/2022", "21.00", "1"),
    ];