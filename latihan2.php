<?php
echo "Program Menentukan Bilangan Ganjil Genap<br>";
$nilai = -3;
if($nilai % 2 == 0){
    echo "Nilai Genap<br>";
    if($nilai >= 0) {
    echo "Nilai Positif<br>";
    }elseif ($nilai <= 0){
        echo "Nilai Negatif<br>";
    }

} elseif ($nilai % 3 == 0 ) {
    echo "Nilai Ganjil<br>";
    if($nilai >= 0){
        echo "Nilai Positif<br>";
    } elseif($nilai <= 0){
        echo "Nilai Negatif<br>";
    } else 
        echo "Nilai Tidak Ada";
    {
  }
}
?>    