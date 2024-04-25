<?php

class Komputer {
    private $jenis_processor = "intel core i7-4790 3.6Ghz";

    public function getProcessor(){
        return $this->jenis_processor;
    }


    public function tampilkan_processor(){
        echo $this->jenis_processor;
    }
}

$komputer_baru = new Komputer();

echo $komputer_baru->tampilkan_processor();
echo "<br>";
echo $komputer_baru->getProcessor();
