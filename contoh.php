<?php
echo "1. Pengulangan For <br>";
echo "<br>";

for ($i=0; $i < 10; $i++) {
    echo "Ini perulangan ke - $i <br>";
}
echo "<br>";
echo "2. Pengulangan while <br>";
echo "<br>";
$ulangi = 0;
while($ulangi < 10) {
    echo "ini pengulangan ke - $ulangi <br>";
    $ulangi++;
}
echo "<br>";
echo "3. Pengulangan Do-while <br>";
echo "<br>";
$ulangi = 0;
do {
    echo "Ini pengulangan ke - $ulangi <br>";
    $ulangi++;
} while($ulangi < 10);
echo "<br>";
echo "4. Pengulangan Foreach <br>";
echo "<br>";
$books = [
    "Panduan belajar java untuk pemula",
    "Membangun aplikasi java dengan netbeans",
    "Tutorial Java dan Mysql",
    "Membuat Penggajian Dekstop dengan Java",
 ];
 echo "<h5>Judul Buku Java </h5>";
 echo "<ol>";
 foreach($books as $buku) {
     echo "<li>$buku</li>";
 }      
 echo "</ol>";
