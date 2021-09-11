<?php
echo "Programan Menentukan Diskon PPDB";
$biaya = 8000000;
$bulan = "Juli";

$diskon1 = $biaya - (30/100));
$diskon2 = $biaya - (20/100));
$diskon3 = $biaya - (10/100));

if($bulan == "Mei"){
    echo "Anda Daftar di Bulan $bulan <br>";
    echo "harga Biaya Pendaftaran : <b> Rp.$biaya </b><br>";
    echo "Biaya Pendaftaran Anda di Diskon Sebesar 30% <br>";
    echo "Total Biaya <b> Rp.$diskon1</b>";
} elseif ($bulan == "Juni"){
    echo "Anda Daftar di Bulan $bulan <br>";
    echo "harga Biaya Pendaftaran : <b> Rp.$biaya </b><br>";
    echo "Biaya Pendaftaran Anda di Diskon Sebesar 20% <br>";
    echo "Total Biaya <b> Rp.$diskon2</b>";
} elseif ($bulan == "Juli"){
    echo "Anda Daftar di Bulan $bulan <br>";
    echo "harga Biaya Pendaftaran : <b> Rp.$biaya </b><br>";
    echo "Biaya Pendaftaran Anda di Diskon Sebesar 10% <br>";
    echo "Total Biaya <b> Rp.$diskon3</b>";
}else{
    echo "Pendaftaran di Tutup";
}
?>