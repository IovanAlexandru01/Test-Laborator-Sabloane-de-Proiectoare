<?php 
 require_once("Comanda.php");
 require_once("Paste.php");
 require_once("Salata.php");
 require_once("Pizza.php");
 require_once("VisitorForOrders.php");


 $comanda = new Comanda("Unic Restaurant"); // aici mai corect era sa am o clasa Restaurant, care sa contina mai multe comenzi
 // si mai exista o clasa care pastra toate comenzile clientului si trecea cu visitoru prin ele, da ma complic prea mult,
 // asa ca am considerat ca in Comanda specificam si restaurantul de la care se comanda
 $taraneasca = new Pizza("Pizza Taraneasca", 28);
 $carbonara = new Paste("Paste Carbonara", 35);
 $caesar = new Salata("Salata Caesar", 20);
$comanda->add($taraneasca);
$comanda->add($carbonara);
$comanda->add($caesar);

$comanda3 = new Comanda("Trilulilu Restaurant");
$diavola = new Pizza("Pizza Diavola", 27);
$bolognese = new Paste("Paste Bolognese", 35);
$salatadevara = new Salata("Salata de vara", 20);
$comanda3->add($diavola);
$comanda3->add($bolognese);
$comanda3->add($salatadevara);
$comanda->add($comanda);

$visitor = new VisitorForOrders();
$comanda->accept($visitor);
$visitor->printPretComenzi();





?>