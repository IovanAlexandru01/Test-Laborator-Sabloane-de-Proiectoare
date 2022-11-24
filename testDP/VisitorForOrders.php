<?php
require_once("Visitor.php");


class VisitorForOrders implements Visitor{ 

    private $pretPizza;
    private $pretSalata;
    private $pretPaste;

    public function visitPizza($pizza) {
        $this->pretPizza = $this->pretPizza + $pizza->getPret();
    }

    public function visitSalata($salata) {
        $this->pretSalta = $this->pretSalata + $salata->getPret();
    }

    public function visitPaste($paste) {  // interfata unui fel de mancare poate sa aiba getPret
        $this->pretPaste = $this->pretPaste + $paste->getPret();
    }   

    public function printPretComenzi() {
       echo "Pret total comenzi: " . $this->pretPizza + $this->pretSalata + $this->pretPaste;
    }

    public function printPretComenziPerItem() {
        echo "Pret pizza: " . $this->pretPizza;
        echo nl2br("\n");
        echo "Pret paste: " . $this->pretPaste;
        echo nl2br("\n");
        echo "Pret salata: " . $this->pretSalata;
        echo nl2br("\n"); 
    }

}


?>