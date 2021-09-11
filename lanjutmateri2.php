<?php
if(isset($_POST['simpan'])){
    echo "<h2>KONSER AMAL ASSALAAM BAHAGIA</h2><hr>";
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $kelas = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    
    $bt = $kode;
    echo "Nama Pemesan: $nama <br>";
    echo "Kode Studio: $kode <br>";
    if($bt == 'studio1'){
        echo "Bintang Tamu: Opick<br>";
    }elseif($bt == 'studio2'){
        echo "Bintang Tamu: Raihan<br>";
    }else{
        echo "Tidak Ada Studio";
    }
    echo "Jenis Kelas: $kelas <br>";
    if($kelas == 'vip'){
        $vip = 500000;
        $total =$vip * $jumlah;
        echo "Harga: $vip<br>";
        echo "Jumlah Beli: Rp. $jumlah<br>";
        echo "Total: $total<br>";
    }elseif($kelas == 'festival'){
        $festival = 250000;
        $total =$festival * $jumlah;
        echo "Harga: $festival<br>";
        echo "Jumlah Beli: Rp. $jumlah<br>";
        echo "Total: $total<br>";
    }else{
        echo "Tidak Ada Jenis Kelas";
    }
}
?>