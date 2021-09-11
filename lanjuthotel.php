<?php
if(isset($_POST['simpan'])){
    echo "<h2>Pendataan Program Kamar Hotel</h2><hr>";
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $no = $_POST['no'];
    $tipe = $_POST['tipe'];
    $durasi = $_POST['durasi'];

    echo "Tanggal Menginap: $tanggal <br>";
    echo "Nama Tamu: $nama <br>";
    echo "No Identitas: $no <br>";
    echo "Tipe Kamar<br>";
    if($tipe == 'superior'){
        $superior = 850000;
        $total =$superior * $durasi;
        echo "Tipe Kamar Superior: <br>";
        echo "Harga : Rp. $superior<br>";
        echo "Durasi Menginap: $durasi<br>";
        echo "Total Harga: Rp. $total<br>";
    if($total >= 2500000){
        $diskon = $total * (25/100);
        $diskon1 = $total - $diskon;
        echo "Anda Mendapatkan Diskon Sebesar 25%<br>";
        echo "Total Bayar: Rp. $diskon1 <br>";
    }elseif($total >= 1700000){
        $diskon = $total * (15/100);
        $diskon2 = $total - $diskon;
        echo "Anda Mendapatkan Diskon Sebesar 15%<br>";
        echo "Total Bayar: Rp. $diskon2 <br>";
    }else{
        echo "Tidak ada diskon";
    }
}
    if($tipe == 'deluxe'){
        $deluxe = 950000;
        $total =$deluxe * $durasi;
        echo "Tipe Kamar Deluxe: <br>";
        echo "Harga : Rp. $deluxe<br>";
        echo "Durasi Menginap: $durasi<br>";
        echo "Total Harga: Rp. $total<br>";
    if($total >= 2500000){
        $diskon = $total * (25/100);
        $diskon1 = $total - $diskon;
        echo "Anda Mendapatkan Diskon Sebesar 25%<br>";
        echo "Total Bayar: Rp. $diskon1 <br>";
    }elseif($total >= 1700000){
        $diskon = $total * (15/100);
        $diskon2 = $total - $diskon;
        echo "Anda Mendapatkan Diskon Sebesar 15%<br>";
        echo "Total Bayar: Rp. $diskon2 <br>";
    }else{
        echo "Tidak ada diskon";
    }
}
if($tipe == 'junior'){
    $junior = 1400000;
    $total =$junior * $durasi;
    echo "Tipe Kamar Junior Suite: <br>";
    echo "Harga : Rp. $junior<br>";
    echo "Durasi Menginap: $durasi<br>";
    echo "Total Harga: Rp. $total<br>";
if($total >= 2500000){
    $diskon = $total * (25/100);
    $diskon1 = $total - $diskon;
    echo "Anda Mendapatkan Diskon Sebesar 25%<br>";
    echo "Total Bayar: Rp. $diskon1 <br>";
}elseif($total >= 1700000){
    $diskon = $total * (15/100);
    $diskon2 = $total - $diskon;
    echo "Anda Mendapatkan Diskon Sebesar 15%<br>";
    echo "Total Bayar: Rp. $diskon2 <br>";
}else{
    echo "Tidak ada diskon";
}
}
    }
    ?>