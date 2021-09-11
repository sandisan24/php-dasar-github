<?php
echo "1. buat grade penilaian dengan ketentuan :<br>";
$nilai = ;
if($nilai > 100){
    echo "Nilai Terlalu Tinggi";
} elseif ($nilai > 89) {
    echo "> 90 <= 100 = A";
} elseif ($nilai > 79) {
    echo  "> 80 = B";
} elseif ($nilai > 74) {
    echo "> 75 = C";
} elseif ($nilai > 60) {
    echo "> 60 = D";
} elseif ($nilai < 60 && $nilai > 0) {
    echo "< 60 = E";
} else {
    echo "Nilai Tidak Di Temukan";
}
?>