<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$data1 = new \Data\one\Conflict();
$data2 = new \Data\two\Conflict();

echo helper\APPLICATION . PHP_EOL;
helper\helpMe();