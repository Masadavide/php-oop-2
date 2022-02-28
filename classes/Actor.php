<?php
    class Actor {
        private $name;
        private $surname;
        private $born;
        private $character;

        public function __construct($_name, $_surname, $_born, $_character){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->born = $_born;
            $this->character = $_character;
        }
    }