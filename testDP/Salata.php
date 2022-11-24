<?php
require_once("OrderElement.php");

class Salata implements OrderElement{ 
    
    private $nume;
    private $pret;

    public function __construct($nume, $pret) {
        $this->nume = $nume;
        $this->pret = $pret;
    }

    function getPret() {
        return $this->pret;
    }

    function accept($visitor) {
        $visitor->visitSalata($this);
    }
}



?>