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
        echo "laptop <b>$this->brand</b> adalah milik : <b>$this->name</b> <br>";
    }
}

$lap1 = new Laptop('Dini', 'Samsung');
echo $lap1->show();

$lap2 = new Laptop('Adel', 'Asus');
echo $lap2->show();

$lap3 = new Laptop('Rahma', 'Toyota');
echo $lap3->show();