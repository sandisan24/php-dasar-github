<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai</title>
</head>
<body>
    <form method="POST" action ="">
    <h3>Input Bilangan</h3>
    <table>
<td>
    <tr>Masukkan Banyaknya Bilangann </tr>
    <tr><input type="number" name="input" required></tr>
    <tr><input type="submit" name="submit" value="submit">
</td>
</table>
</form>
<br>

<?php 
if (isset($_POST['submit'])){
    $san = $_POST['input'];
    echo "<form method='post' action=''>";
      for ($i=1; $i <= $san; $i++){
            echo "Bilangan Ke - $i  ";
            echo "<input type='number' name='bilangan".$i."'>";
            echo "<br><br>";
        }
    echo "<input type='hidden' name='jumlah' value='$san'>";
    echo "<br>";
    echo "<button type='submit' name='sandi'>Hitung</>";
    echo "</form>";
}

if (isset($_POST['sandi'])){
    $jumlah = $_POST['jumlah'];
    $total = 0;
    for ($i=1; $i <= $jumlah; $i++){
        $bil[$i] = $_POST['bilangan'.$i];
    }
    for ($i=1; $i <= $jumlah; $i++){
        $total += $bil[$i];
    }
    $total_jumlah = $total/$jumlah;
    echo "<br>";
    echo "Jumlah rata-rata = ".$total_jumlah;
}



   
?> 
  </tr>
</body>
</html>