<?php
echo "Perogram Lampu Lalulintas <br>";
$lampu = "kuning";
switch ($lampu) {
    case "merah":
        echo "Anda Harus Berhenti";
        break;
        case "kuning":
            echo "Anda Harus Bersiap Siap";
            break;
            case "hijau":
            echo "Anda Harus Maju";
            break;
            default;
            echo "lampu lalu lintas eror";
}
?>