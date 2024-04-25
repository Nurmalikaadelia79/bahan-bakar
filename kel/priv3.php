<?php

//buat class laptop
class Laptop{

    //buat private property
    private $pemilik = "Eden";
    
    // Metode untuk mengatur (set) pemilik
    public function setPemilik($nama) {
        $this->pemilik = $nama;
    }
    
    // Metode untuk mendapatkan (get) pemilik
    public function getPemilik() {
        return $this->pemilik;
    }
    
    // Metode untuk menghidupkan laptop
    private function hidupkanLaptop(){
        return "Hidupkan Laptop";
    }
    
    // Metode untuk memaksa hidup laptop
    public function paksaHidup(){
        return $this->hidupkanLaptop();
    }
}

//buat objek dari class laptop (instansiasi)
$laptopEden = new Laptop();

// Set pemilik baru
$laptopEden->setPemilik("Ende ");

// Dapatkan pemilik yang baru diatur
echo $laptopEden->getPemilik(); // Output: "John"

// Jalankan method paksa_hidup()
echo $laptopEden->paksaHidup(); // Output: "Hidupkan Laptop"
?>