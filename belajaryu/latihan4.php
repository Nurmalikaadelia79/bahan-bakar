<?php
class toko {
    protected function beli(){
        return "yey beli baru";
    }
    public function getbeli(){
        return $this->beli();
    }
}
class laptop extends toko {
    public function beli_laptop(){
        return $this->beli();
    }
}

class komputer extends laptop {
    public function beli_komputer(){
        return $this->beli_laptop();
    }
}
$laptop_baru = new laptop();
$toko = new toko ();
$komputer = new komputer ();
echo $laptop_baru->beli_laptop();
echo "<br>";
echo $toko->getbeli();