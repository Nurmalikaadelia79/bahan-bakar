<?php
class hewan {
    private $hewan = "kelinci";

    public function sethewan($hewan) {
        $this -> hewan = $hewan ;
    }

    public function gethewan (){
        return " hewan peliharaan saya adalah  " . $this -> hewan;
    }
}

$hewan =  new hewan ();
$hewan -> sethewan('embe'); 
echo $hewan->gethewan();
$hewan -> sethewan('embe'); 