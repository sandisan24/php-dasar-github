<!DOCTYPE html>
<html>
<head>
<title> Program Segitiga Siku Siku </title>
</head>
<body>
<form method = "POST" action= ""><table>
<tr>
<td>Masukan Bintang</td>
<td>:</td>
<td><input type='text' name='star' required></td>
<td><input type="submit" name="simpan" value='submit'></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['simpan'])) {
    $star =$_POST['star'];

for ($a = $star; $a >= 0; $a--){
for ($i = $star; $i > $a; $i--){
        echo "*";
    }
    echo "<br>";
}
echo "Program Ganjil Genap dengan Menggunakan For<br>";
echo "Bilangan Genap<br>";
for ($san = 1; $san <= $star; $san++){
    if($san % 2 == 0){
        echo "$san <br>";
    }else{
        echo "";
    }
}
}
?>