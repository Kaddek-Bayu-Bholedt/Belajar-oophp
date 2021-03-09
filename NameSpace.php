<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\Conflict;
use function helper\helpMe;
use const helper\APPLICATION;

$data1 = new Conflict();
$data2 = new \Data\two\Conflict();

echo APPLICATION . PHP_EOL;
helpMe();