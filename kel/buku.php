<?php

class perpustakaan {
    
    public static $buku = ['matematika','sejarah','fisika','biologi','komik']

    public static function tampildatabuku(){
        echo "<h1> data buku<h1>"
        foreach(self :: $buku as $key => $data ){
            $n=$key+1;
            echo "$n. $data<br/>";
        }
    }
}
perpustakaan ::tampildatabuku();