<?php 
class laptop {
    private $owner = "Andi";
    private $merk = "Lenovo";

    public function __construct(){
        echo "Ini berasal dari constructor Laptop";
    }

    public function hidupkanlaptop(){
        return "Hidupkan Laptop $this->merk punya $this->owner";
    }

    public function __destruct(){
        echo "Ini berasal dari Destructor Laptop";
    }
}
$laptop_milik_Andi = new laptop();

echo "<br/>";
echo $laptop_milik_Andi->hidupkanlaptop();
echo "<br/>";