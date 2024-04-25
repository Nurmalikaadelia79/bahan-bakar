<?php
class hewan {
    public $nama = 'kucing';
    public $kaki;
    public $mamalia;
    public $jenis_makanan;
    
    public function __construct(){
    $nama = $this ->nama;
    }

    public function shownama(){
        retrun $this->nama;
    }

    public function berjalan (){
        retrun true;
    }
}
$kucing = new hewan;

echo "memanggil properti/atribut": . $kucing->nama.
"<br> memanggil method/fungsi". $kucinh->shownama(); 
?>