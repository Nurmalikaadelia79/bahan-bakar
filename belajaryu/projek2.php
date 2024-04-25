<?php

class RentalMotor {
    private $namaPelanggan;
    private $jenisMotor;
    private $lamaWaktuRental;
    private $hargaRentalPerHari;
    private $diskon;
    private $pajak;

    public function __construct($namaPelanggan, $jenisMotor, $lamaWaktuRental, $hargaRentalPerHari) {
        $this->namaPelanggan = $namaPelanggan;
        $this->jenisMotor = $jenisMotor;
        $this->lamaWaktuRental = $lamaWaktuRental;
        $this->hargaRentalPerHari = $hargaRentalPerHari;
        $this->diskon = 0;
        $this->pajak = 10000;
    }

    public function hitungHargaRental() {
        $hargaRental = $this->lamaWaktuRental * $this->hargaRentalPerHari;
        if (in_array($this->namaPelanggan, $this->getNamaMember())) {
            $this->diskon = 0.05;
        }
        $hargaRental -= $hargaRental * $this->diskon;
        $hargaRental += $this->pajak;
        return $hargaRental;
    }

    private function getNamaMember() {
        // assume this is an array of member names
        return array('ana', 'budi', 'cici', 'didi');
    }

    public function getNamaPelanggan() {
        return $this->namaPelanggan;
    }

    public function getJenisMotor() {
        return $this->jenisMotor;
    }

    public function getHargaRentalPerHari() {
        return $this->hargaRentalPerHari;
    }

    public function getLamaWaktuRental() {
        return $this->lamaWaktuRental;
    }
}

// generate random member name and motor type
$memberNames = array('ana', 'budi', 'cici', 'didi');
$motorTypes = array('Scooter', 'Matic', 'Bebek', 'Sport');

$randomMemberName = $memberNames[array_rand($memberNames)];
$randomMotorType = $motorTypes[array_rand($motorTypes)];

$randomLamaWaktuRental = rand(1, 7);

// set random harga rental per hari
$hargaRentalPerHari = rand(50000, 150000);

// create new rental motor object
$rentalMotor = new RentalMotor($randomMemberName, $randomMotorType, $randomLamaWaktuRental, $hargaRentalPerHari);

// display output
echo 'Nama Pelanggan: ' . $rentalMotor->getNamaPelanggan() . '<br>';
echo 'Jenis Motor: ' . $rentalMotor->getJenisMotor() . '<br>';
echo 'Lama Waktu Rental (per hari): ' . $rentalMotor->getLamaWaktuRental() . '<br>';
echo 'Harga Rental Per Hari: Rp. ' . number_format($rentalMotor->getHargaRentalPerHari(), 0, ',', '.') . '<br>';
echo 'Besar yang harus dibayarkan adalah Rp. ' . number_format($rentalMotor->hitungHargaRental(), 0, ',', '.') . '<br>';

?>