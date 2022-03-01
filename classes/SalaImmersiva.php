<?php
    require_once __DIR__.'/SalaNormale.php';

    class ImmersiveRoom extends NormalRoom {
        private $effect;
        
        public function __construct($_name, $_capacity, $_effect = []){
            parent::__construct($_name, $_capacity);
            $this->effect = $_effect;
        }

        public function getInfo(){
            return "Nome:{$this->name} Capienza:{$this->capacity} Effetti:".implode(',',$this->effect);
        }
    }