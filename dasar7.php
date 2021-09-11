<?php
$perusahaan = [
        'Nama' => 'Sandi Suryadi Putra',
        'Umur' => '18 tahun',
        'Alamat' => 'Graha Rancamanyar',
        'Hobi' => ['Bermain Game', 'Berenang'],
        'Media Sosial' => ['Instagram' => 'SandiSuryadi',
        'Facebook' => 'Sandisanz']
];

echo  "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Pemanggilan Array 2 Dimensi" . "<br>";
echo $perusahaan['Hobi'][1], "<br>";
echo $perusahaan['Media Sosial']['Instagram'];
