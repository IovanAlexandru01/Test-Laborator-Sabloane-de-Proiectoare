<?php


interface OrderElement {

    public function getPret();
    public function accept($visitor);

}

?>