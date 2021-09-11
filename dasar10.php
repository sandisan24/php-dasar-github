<?php
    $datajson = "[5, 3, 2, 1]";
    $data = json_decode($datajson);
    echo implode(" - ", $data);
?>