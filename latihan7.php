<?php
echo "Pemrograman Konversi Suhu";
$suhu = 90;
$konversi = "farenheit";
$hasil_reamur = $suhu * (4/5) ;
$hasil_farenheit = ($suhu * (9/5)) + 32;
$hasil_kelvin = $suhu + 273;

echo "Suhu Celcius : $suhu <br>";
echo "Konversi ke : $konversi <br>";

if($konversi == "reamur") {
    echo "Hasil Konversi Celcius ke Reamur : $hasil_reamur Reamur";
}elseif($konversi == "farenheit"){
    echo "Hasil Konversi Celcius ke Farenheit : $hasil_farenheit Farenheit";
}elseif($konversi == "kelvin") {
    echo "Hasil Konversi Celcius Ke Kelvin : $hasil_kelvin Kelvin";
}else{
    echo "Tidak Ada Konversi";
}
?>