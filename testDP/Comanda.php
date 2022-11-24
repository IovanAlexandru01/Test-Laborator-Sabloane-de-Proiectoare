<?php
require_once("Pizza.php");
require_once("Paste.php");
require_once("Salata.php");

class Comanda implements OrderElement{ 

    private $orderList=[];
    private $restaurant;
    private $pretTotal;

    function __construct($restaurant) {
        $this->restaurant = $restaurant;    
    }

    public function add($orderElement) {
       array_push($this->orderList, $orderElement);
    }

    public function getPret() {
        foreach ($this->orderList as $orderItem) {
            $this->pretTotal = $this->pretTotal + $orderItem->getPret();
        }
        return $this->pretTotal;
    }

    public function accept($visitor) {
        foreach ($this->orderList as $element) {
            $element->accept($visitor);
        }
    }

}


?>