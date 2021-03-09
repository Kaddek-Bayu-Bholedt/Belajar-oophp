<?php

class Manager{
    public string $name;
    public string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function sayHello(string $name){
        echo "Hi $name, my name is $this->name , my title is $this->title" . PHP_EOL;
    }
}

class vicePresident extends Manager{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }
}