<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<form action="" method="POST">
    <fieldset>
        <legend align=""><h2>Fungsi - Input Biodata</h2></legend>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder= "Masukan Nama" required></td>
			</tr>

            <tr>             
                <td>Jenis Kelamin</td>
                <td>: </td>
                <td>
                <input type= "radio" name= "jkelamin" value="Laki-Laki" required>Laki-Laki
                <input type= "radio" name= "jkelamin" value="Perempuan" required>Perempuan
                </td>
            </tr>

            <tr>             
                <td>Tanggal Lahir</td>
                <td>: </td>
                <td><input type= "date" name= "tanggal" placeholder= "Masukan Tempat" required>
            </tr>

            <tr>             
                <td>Agama</td>
                <td>: </td>
                <td>
                <select name=agama>
                    <option name=agama>Agama
                    <option name=Islam>Islam
                    <option name=Kristen>Kristen
                    <option name=Budha>Budha
                    <option name=Hindu>Hindu
                    <option name=Hindu>Katholik
                    <option name=KongHuChu>Kong Hu Chu
                </select>
                </td>
            </tr>


            <tr>             
                <td>Alamat</td>
                <td>: </td>
                <td><textarea name="alamat" placeholder= "Masukan Alamat" required></textarea>
                </td>
            </tr>

            <tr>             
                <td>Hobi</td>
                <td>: </td>
                <td>
                <input type= "checkbox" name= "hobi[]" value="Main Game" >Main Game
                <input type= "checkbox" name= "hobi[]" value="Futsal">Futsal
                <input type= "checkbox" name= "hobi[]" value="Mendengarkan Musik">Mendengarkan Musik
                <input type= "checkbox" name= "hobi[]" value="Riding">Riding
                <input type= "checkbox" name= "hobi[]" value="Menggambar">Menggambar
                <input type= "checkbox" name= "hobi[]" value="Rebahan">Rebahan
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type = "Submit" name = "submit" value = "Submit">
                <input type="Reset" name="Reset" value="Reset"></td>
            </tr>

            <tr>
                <td colspan = 3>
                <hr>
                </td>
            </tr>

        <?php
            if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $jkelamin = $_POST['jkelamin'];
            $tanggal = $_POST['tanggal'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];
            $hobi = $_POST['hobi'];
            


        function biodata($nama="", $jkelamin="", $tanggal="", $agama="", $alamat="", $hobi=""){
            
           echo "<tr>";
           $san = "<td>Nama</td><td>:</td>" . "<td>$nama</td>" . "</tr>";
            echo "<tr>";
           $san .= "<td>Jenis Kelamin</td><td>:</td>" . "<td>$jkelamin</td>" . "</tr>";
           echo "<tr>";
           $san .= "<td>Tanggal Lahir</td><td>:</td>" . "<td>$tanggal</td>" . "</tr>";
           echo "<tr>";
           $san .= "<td>Alamat</td><td>:</td>" . "<td>$alamat</td>" . "</tr>";
           echo "<tr>";
           $san .= "<td>Hobi</td><td>:</td>" . "<td>" . implode(", ", $hobi) . "</td>" . "</tr>";
			return $san;
        }

        echo biodata($nama, $jkelamin, $tanggal, $agama, $alamat, $hobi);
        }
         ?>

		</table>
	</form>
    </fieldset>
</body>
</html>