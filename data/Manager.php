<?php

class Manager{
    var string $name;

    function sayHello(string $name){
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class vicePresident extends Manager{

}