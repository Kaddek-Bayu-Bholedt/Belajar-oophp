<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Bayu";
$manager->sayHello("Kaddek");

$vp = new vicePresident();
$vp->name = "Bayu";
$vp->sayHello("joni");