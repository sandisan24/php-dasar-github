<?php
echo "Program Kompresi Waktu<br>";
$waktu = 1;
$pemilihan = "hari";
$hari = 86400 * $waktu;
$jam = 3600 * $waktu;
$menit = 60 * $waktu;

if ($pemilihan == "hari"){
    echo "$hari Detik Adalah $waktu Hari<br> $jam Detik Adalah
     $waktu Jam <br> $menit Detik Adalah $waktu Menit";
}elseif ($pemilihan == "jam"){
    echo "$jam Detik Adalah $waktu Jam <br> $jam Detik Adalah $menit Menit";
}elseif ($pemilihan == "menit"){
    echo "$menit Detik Adalah $waktu Menit";
}else{
    echo "Tidak Ada Waktu";
}
?>