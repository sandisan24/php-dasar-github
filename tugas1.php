<?php
$gajih_ahmad = 2000000;
$potong_pajak = 10 * $gajih_ahmad / 100;
$gajih_pajak = $gajih_ahmad - $potong_pajak;

echo "Gajih ahmad sebesar <b>$gajih_ahmad</b> di potong pajak sebesar <b>$potong_pajak</b></br>"; 
echo "jadi total gajih yang di terima ahmad adalah <b>$gajih_pajak</b>";
?>