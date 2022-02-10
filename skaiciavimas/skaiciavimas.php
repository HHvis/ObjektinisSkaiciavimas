<?php

class Skaiciavimas {
    private $amzius;

public function __construct(array $amzius) {
     $this->amzius=$amzius;
    }
        public function getAmzius() {
        return $this->amzius;
    }
    //A uzduotis
    public function toBinary($masyvoNr) {
        if ($masyvoNr>=0 && $masyvoNr<=2){
            echo decbin($this->amzius[$masyvoNr]);
        } else {
            echo "Please enter a valid number";            
        }
    }
    //B uzduotis
        public function toOctal($masyvoNr) {
        if ($masyvoNr>=0 && $masyvoNr<=2){
            echo decoct($this->amzius[$masyvoNr]);
        } else {
            echo "Please enter a valid number";            
        }
    }
    //C uzduotis
            public function toHex($masyvoNr) {
        if ($masyvoNr>=0 && $masyvoNr<count($this->amzius)){
            echo dechex($this->amzius[$masyvoNr]);
        } else {
            echo "Please enter a valid number";            
        }
    }
    
}