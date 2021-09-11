<?php
echo "1. Contoh program array numeric<br>";
$jurusan = [
    'Jurusan Teknik Informatika',
    'Jurusan Sistem Informasi',
    'Jurusan Teknik Komputer',
    'Jurusan Manajemen Informatika',
];
foreach ($jurusan as $key => $value) {
    echo $value . ':- ada di index ' . $key;
    echo '<br>';
}

echo "2. Contoh program array assosiatif<br>";
$nilai = [
    'jurusan1' => ' Teknik Informatika',
    'jurusan2' => ' Sistem informasi',
    'jurusan3' => ' Teknik Komputer',
    'jurusan4' => ' Manajemen Informatika',
  ];
   
  // get all values
  foreach ($nilai as $key => $value) {
    echo 'Kata kunci index '.$key.' nilai =' .$value;
    echo '<br>';
  }
?>