<!DOCTYPE html>
<html>
<head>
<title> Program Kamar Hotel </title>
</head>
<body>
<h2> Pendataan tamu hotel dengan kebutuhan data </h2>
<form method = "POST" action= "lanjuthotel.php"><table>
<tr>
<td>Tanggal Menginap</td>
<td>:</td>
<td><input type='date' name='tanggal' required></td>
</tr>

<tr>
<td>Nama Tamu</td>
<td>:</td>
<td><input type='text' name='nama'required></td>
</tr>

<tr>
<td>No Identitas</td>
<td>:</td>
<td><input type='number' name='no' required></td>
</tr>

<tr>
<td>Tipe Kamar</td>
<td>:</td>
<td>
<select name="tipe">
<option value="superior">Superior </option>
<option value="deluxe">Deluxe </option>
<option value="junior">Junior Suite </option>
</select>
</td>
</tr>
<tr>
<td>Durasi Menginap</td>
<td>:</td>
<td><input type='text' name='durasi' required></td>
</tr>

<td></td>
<td></td>
<td><input type="submit" name="simpan" value='Tampil'>
<input type="reset" name="reset" value='Batal'></td>
</tr>


</table>
</form>
</body>
</html>