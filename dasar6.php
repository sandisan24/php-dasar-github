<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perogram Pencetakan Nilai</title>
    <style type="text/css"> 
body{
    background-image: url("japan.jpg");
    background-size: cover;
}
table{
    background-color: Lavender;
}
</style>
</head>
<body>
<fieldset align="center">
    <h2>Form Cetak Nilai Siswa</h2>
    <h2>SMK ASSALAAM BANDUNG</h2>
    <h2>Tahun Ajaran 2021/2022</h2>
    <br>
    <form action="contoh1.php" method="post">
        <table border="2" cellpadding="2" align="center">
            <tr>
                <th colspan="3" align="left">
                    Nama :
                    <input type="text" name="nama[]"><br>
                    Nis :
                    <input type="number" name="nis[]">
                </th>
            </tr>
            <tr>
                <th>NO</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
            </tr>
            <tr>
                <td>1</td>
                <td align="left">Pendidikan Agama Islam</td>
                <td>
                    <input type="text" name="pai[]">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td align="left">PPKN</td>
                <td>
                    <input type="text" name="ppkn[]">
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td align="left">B.indonesia</td>
                <td>
                    <input type="text" name="indo[]">
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td align="left">Matematika</td>
                <td>
                    <input type="text" name="mtk[]">
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td align="left">B.Inggris</td>
                <td>
                    <input type="text" name="inggris[]">
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td align="left">Produk Kreatif dan Kewirausahaan</td>
                <td>
                    <input type="text" name="kwu[]">
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td align="left">Al-Quran</td>
                <td>
                    <input type="text" name="quran[]">
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td align="left">Bimbingan Konseling</td>
                <td>
                    <input type="text" name="bk[]">
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td align="left">Produktif RPL</td>
                <td>
                    <input type="text" name="rpl[]">
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td align="left">Produktif TKJ</td>
                <td>
                    <input type="text" name="tkj[]">
                </td>
            </tr>
                <td align="center" colspan="3">
                    <input type="submit" name="submit" value="Cetak Nilai">
                </td>
        </table>


    </form>

</fieldset>

</body>
</html>