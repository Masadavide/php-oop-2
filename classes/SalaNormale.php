<?php
    class normalroom {
        private $name;
        private $capacity;
        public $schedule = [];

        public function __costruct($_name, $_capacity){
            $this->name = $_name;
            $this->capacity = $_capacity;
        }
    }