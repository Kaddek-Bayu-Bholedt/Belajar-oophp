<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as Conflict1, Sample, Dummy};
use Data\two\{Conflict as Conflict2};
use function helper\{helpMe as help};
use const helper\{APPLICATION as APP};

$data1 = new Conflict1();
$sample = new Sample();
$dummy = new Dummy();
$data2 = new Conflict2();

echo APP . PHP_EOL;
help();