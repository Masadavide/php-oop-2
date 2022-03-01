<?php
    class NormalRoom {
        protected $name;
        protected $capacity;

        public function __construct($_name, $_capacity){
            $this->name = $_name;
            $this->capacity = $_capacity;
        }

        public function getInfo(){
            return "Nome:{$this->name} Capienza:{$this->capacity}";
        }

        public function getCapacity(){
            return "{$this->capacity}";
        }
    }