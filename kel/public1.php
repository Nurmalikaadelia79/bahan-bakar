<?php
class hewan {
    public $hewan = "kelinci";
    
    public function gethewan (){
        return "hewan peliharaan saya adalah " . $this -> hewan;
    }
}

$hewan =  new hewan ();
echo $hewan->gethewan();