<?php
require_once "data/person.php";
define ("APPLICATION", "Aplikasi saya");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;

$person = new Person("Bayu", "gg Rahayu");
$person->konstanta();