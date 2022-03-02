<?php
    class Schedule {
        private $movie;
        private $date;
        private $hours;
        private $room;

        public function __construct($_movie, $_date, $_hours=[], $_room){
            $this->movie = $_movie;
            $this->date = $_date;
            $this->hours = $_hours;
            $this->room = $_room;
        }

        public function getDate() {
            return $this->date;
        }
        

        public function getHour() {
            return $this->hours;
        }
    }

