<!DOCTYPE html>
<html>
<head>
<title> Konsep Amal Assalaam </title>
</head>
<body>
<h2> Konser Amal Assalaam <br>Bahagia </h2>
<form method = "POST" action= "lanjutmateri2.php"><table>
<tr>
<td>Nama Pemesan</td>
<td>:</td>
<td><input type='text' name='nama' required></td>
</tr>

<tr>
<td>Kode Studio</td>
<td>:</td>
<td>
<select name="kode">
<option value="studio1">Studio 1 </option>
<option value="studio2">Studio 2 </option>
</select>
</td>
</tr>

<tr>
<td>Jenis Kelas</td>
<td>:</td>
<td><input type='radio' name='jenis' value='vip'>VIP  </input>
<input type='radio' name='jenis' value='festival'>FESTIVAL</input></td>
</tr>

<tr>
<td>Jumlah Tiket</td>
<td>:</td>
<td><input type='text' name='jumlah' required></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value='Tampil'>
<input type="reset" name="reset" value='Batal'></td>
</tr>

</table>
</form>
</body>
</html>