<?php
    $listmahasiswaJSON = '[
        { "nama": "Nurul Huda" },
        { "nama": "Renza Ilhami Risqi" },
        { "nama": "Taufan Aji" },
        { "nama": "Rahmad Dwi Oktanto" }
        ]';

    $listmahasiswa = json_decode($listmahasiswaJSON);

        foreach ($listmahasiswa as $key => $mahasiswa) {
            echo "{$key}. Nama: {$mahasiswa -> nama} <br>";
        }