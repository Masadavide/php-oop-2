<?php
    require_once __DIR__.'/SalaNormale.php';

    class immersiveroom extends normalroom {
        private $effect;
        
        public function __costruct($_name, $_capacity){
            $this->name = $_name;
            $this->capacity = $_capacity;
            $this->effect = $_effect;
        }
    }