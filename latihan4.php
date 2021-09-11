<?php
echo "Perogram Memilih Jurusan <br>";
$jurusan = "tkj";
switch ($jurusan) {
    case "RPL":
        echo "Jurusan Anda Rekayasa Perangkat Lunak";
        break;
        case "TKR":
            echo "Jurusan Anda Teknik Kendaraan Ringan";
            break;
            case "TBSM":
            echo "Jurusan Anda Teknik Berbasis Sepeda Motor";
            break;
            default;
            echo "Jurusan Tidak Di Temukan";
}
?>