<?php

class Product{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getInfo(){
        echo "Product Name Master : $this->name" . PHP_EOL;
        echo "Product Price Master : $this->price" . PHP_EOL;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

class ProductDummy extends Product{
    public function getInfo(){
        echo "Product Name Dummy : $this->name" . PHP_EOL;
        echo "Product Price Dummy : $this->price" . PHP_EOL;
    }
    public function getParentInfo(){
        echo parent::getInfo();
    }
}