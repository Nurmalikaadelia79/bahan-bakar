<?php
class laptop {
    protected $pemilik = "Anto";

    public function akses_pemilik(){
        return $this->pemilik;
    }

    protected function hidupkan_laptop(){
        return "Hidupkan Laptop";
    }

    public function paksa_hidup(){
        return $this->hidupkan_laptop();
    }

    public function getakses(){
        echo $this->hidupkan_laptop();
    }

    public function getpemilik(){
        echo $this->pemilik;
    }
}
$laptopanto = new laptop();
echo $laptopanto->akses_pemilik();
echo "<br>";
echo $laptopanto->getpemilik();
echo "<br>";
echo $laptopanto->paksa_hidup();
echo "<br>";
echo $laptopanto->getakses();