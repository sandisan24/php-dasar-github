<?php
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Assalamualaikum"){
            echo $salam.", ";
            echo "Perkenalan, nama saya ".$nama. "<br/>";

            echo "Saya Berusia". hitungUmur(2003, 2021) ." tahun<br/>";
            echo "Senang Berkenalan dengan anda<br/>";
    }

    perkenalan("Ardianta");
?>