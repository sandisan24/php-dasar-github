<html>
<head>
<style type="text/css">
th {
    border: 1px solid;
    padding: 5px 15px;
}
table{
    width:50%;
}
</style>
</head>
<body>
<form method = "POST" action= "lanjuttabel.php"><table>
<center>
<h2 align=center> Menampilkan Data Siswa</h2>
<input type='submit' name='submit' value='Tambah Siswa'/></center>

<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
?>
<table align="center" border="1" cellpadding="5">
<tr>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Kelas</th>
<th>Alamat</th>
</tr>
<tr>
<td><?php echo $_POST['nama'];?></td>
<td><?php echo $_POST['jenis'];?></td>
<td><?php echo $_POST['kelas'];?></td>
<td><?php echo $_POST['alamat'];?></td>
</tr>
<?php
}
?>
</form>
</table>
</body>
</html>