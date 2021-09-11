<?php
echo "2. Output array dengan menggunakan perintah PRINT_R<br>";
$array = [];
$array[] = 'Indonesia';
$array[] = 'Makaysia';
$array[] = 'Singapura';
$array[] = 'Brunei Darusslam';
$array[] = 'Filipina';
echo '<pre>';
print_r($array);

echo "2. Output array assosiatif<br>";
$kota = [
    'indonesia' => ' Jakarta',
    'malaysia' => ' Kuala lumpur',
    'singapura' => ' Singapura',
    'thailand' => ' Bangkok',
    'filipina' => ' Manila',
  ];
   
  // get all values
  foreach ($kota as $key => $value) {
      echo '<ul>';
      echo '<br>';
      echo '<li>';
    echo 'ibu kota '.$key.' adalah =' .$value;
    echo '</li>';
    echo '</br>';
    echo '</ul>';
  }
?>