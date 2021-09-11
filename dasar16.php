<!DOCTYPE html>
<html lang="en">
<head>
<title>Program Lingkaran</title>
</head>
<body>
<fieldset>
        <legend align=""><h2>Program Menghitung Luas dan Keliling Lingkaran</h2></legend>
		<table>
<form action="" method="post">
<input type="angka" name="jari" required><br>
<input type="submit" name="submit" required>
<input type="reset" name="reset"><br>
</form>
</fieldset>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
function luaslingkaran($jari, $phi=3.14) {
$keliling = $jari * $phi * $jari;
return $keliling;
}
function keliling($jari, $phi=3.14) {
$keliling = ($jari * $phi) * 2;
return $keliling;
}
echo"Jari - Jari :";
echo $_POST['jari'];
echo"<br>";
echo"Luas Lingkaran : ";
echo luaslingkaran($_POST['jari']);
echo"<br>";
echo"Luas Keliling :";
echo keliling($_POST['jari']);
}
?>
