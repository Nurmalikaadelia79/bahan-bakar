<?php

class Laptop
{
    public $name;
    public $brand;

    public function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }

    public function show()
    {
        echo "laptop <b>$this->brand</b> milik : <b>$this->name</b> <br>";
    }
}

$lap1 = new Laptop('Anto', '1');
echo $lap1->show();

$lap2 = new Laptop('Andi', '2');
echo $lap2->show();

$lap3 = new Laptop('Dina', '3');
echo $lap3->show();
