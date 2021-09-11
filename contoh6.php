<?php
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }
    perkenalan("Muhardian", "Hi");
    
    echo "<hr>";

    $saya = "Indry";
    $ucapanSalam = "Selamat Pagi";
    perkenalan($saya);
?>