<?php

require_once "data/Person.php";

$person = new Person("Bayu", "gg Rahayu");
$person->name = "Bayu";
$person->address = "Rahayu";

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Bayu", "gg Rahayu");

$person->sayHello("Bayu");
$person->sayHello(null);