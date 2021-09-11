<?php
if(isset($_POST['submit'])){
    $nama =$_POST['nama'];
    $nis =$_POST['nis'];
    $pai =$_POST['pai'];
    $ppkn =$_POST['ppkn'];
    $indo =$_POST['indo'];
    $mtk =$_POST['mtk'];
    $inggris =$_POST['inggris'];
    $kwu =$_POST['kwu'];
    $quran =$_POST['quran'];
    $bk =$_POST['bk'];
    $rpl =$_POST['rpl'];
    $tkj =$_POST['tkj'];
}
?>

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
                <table border="2" cellpadding="2" align="center">
                    <?php
                    $no = 1; 
                    for($i = 0; $i <  count($nama); $i++){
                    ?>
                    <tr>
                        <th colspan="3" align="left">
                            Nama :
                            <?php echo $nama[$i]; ?>
                            <br>
                            Nis :
                            <?php echo $nis[$i]; ?>
                        </th>
                    </tr>
                    <tr>
                        <th>NO</th>
                        <th>Mata Pelajaran</th>
                        <th>Grade</th>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">Pendidikan Agama Islam</td>
                        <td>
                            <?php 
                            if($pai[$i] > 85 && $pai[$i] <= 100){
                                echo "A";
                                $bobot_pai[$i] = 4;
                            } elseif($pai[$i] > 70 && $pai[$i] <= 85){
                                echo "B";
                                $bobot_pai[$i] = 3;
                            }elseif($pai[$i] > 60 && $pai[$i] <= 70){
                                echo "C";
                                $bobot_pai[$i] = 2;
                            }elseif($pai[$i] > 40 && $pai[$i] <= 60){
                                echo "D";
                                $bobot_pai[$i] = 1;
                            }elseif($pai[$i] < 40){
                                echo "E";
                                $bobot_pai[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">PPKN</td>
                        <td>
                            <?php 
                            if($ppkn[$i] > 85 && $ppkn[$i] <= 100){
                                echo "A";
                                $bobot_ppkn[$i] = 4;
                            } elseif($ppkn[$i] > 70 && $ppkn[$i] <= 85){
                                echo "B";
                                $bobot_ppkn[$i] = 3;
                            }elseif($ppkn[$i] > 60 && $ppkn[$i] <= 70){
                                echo "C";
                                $bobot_ppkn[$i] = 2;
                            }elseif($ppkn[$i] > 40 && $ppkn[$i] <= 60){
                                echo "D";
                                $bobot_ppkn[$i] = 1;
                            }elseif($ppkn[$i] < 40){
                                echo "E";
                                $bobot_ppkn[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">B.indonesia</td>
                        <td>
                            <?php 
                            if($indo[$i] > 85 && $indo[$i] <= 100){
                                echo "A";
                                $bobot_indo[$i] = 4;
                            } elseif($indo[$i] > 70 && $indo[$i] <= 85){
                                echo "B";
                                $bobot_indo[$i] = 3;
                            }elseif($indo[$i] > 60 && $indo[$i] <= 70){
                                echo "C";
                                $bobot_indo[$i] = 2;
                            }elseif($indo[$i] > 40 && $indo[$i] <= 60){
                                echo "D";
                                $bobot_indo[$i] = 1;
                            }elseif($indo[$i] < 40){
                                echo "E";
                                $bobot_indo[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">Matematika</td>
                        <td>
                            <?php 
                            if($mtk[$i] > 85 && $mtk[$i] <= 100){
                                echo "A";
                                $bobot_mtk[$i] = 4;
                            } elseif($mtk[$i] > 70 && $mtk[$i] <= 85){
                                echo "B";
                                $bobot_mtk[$i] = 3;
                            }elseif($mtk[$i] > 60 && $mtk[$i] <= 70){
                                echo "C";
                                $bobot_mtk[$i] = 2;
                            }elseif($mtk[$i] > 40 && $mtk[$i] <= 60){
                                echo "D";
                                $bobot_mtk[$i] = 1;
                            }elseif($mtk[$i] < 40){
                                echo "E";
                                $bobot_mtk[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">B.inggris</td>
                        <td>
                            <?php 
                            if($inggris[$i] > 85 && $inggris[$i] <= 100){
                                echo "A";
                                $bobot_inggris[$i] = 4;
                            } elseif($inggris[$i] > 70 && $inggris[$i] <= 85){
                                echo "B";
                                $bobot_inggris[$i] = 3;
                            }elseif($inggris[$i] > 60 && $inggris[$i] <= 70){
                                echo "C";
                                $bobot_inggris[$i] = 2;
                            }elseif($inggris[$i] > 40 && $inggris[$i] <= 60){
                                echo "D";
                                $bobot_inggris[$i] = 1;
                            }elseif($inggris[$i] < 40){
                                echo "E";
                                $bobot_inggris[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">Produk Kreatif dan Kewirausahaan</td>
                        <td>
                            <?php 
                            if($kwu[$i] > 85 && $kwu[$i] <= 100){
                                echo "A";
                                $bobot_kwu[$i] = 4;
                            } elseif($kwu[$i] > 70 && $kwu[$i] <= 85){
                                echo "B";
                                $bobot_kwu[$i] = 3;
                            }elseif($kwu[$i] > 60 && $kwu[$i] <= 70){
                                echo "C";
                                $bobot_kwu[$i] = 2;
                            }elseif($kwu[$i] > 40 && $kwu[$i] <= 60){
                                echo "D";
                                $bobot_kwu[$i] = 1;
                            }elseif($kwu[$i] < 40){
                                echo "E";
                                $bobot_kwu[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">Al-Quran</td>
                        <td>
                            <?php 
                            if($quran[$i] > 85 && $quran[$i] <= 100){
                                echo "A";
                                $bobot_quran[$i] = 4;
                            } elseif($quran[$i] > 70 && $quran[$i] <= 85){
                                echo "B";
                                $bobot_quran[$i] = 3;
                            }elseif($quran[$i] > 60 && $quran[$i] <= 70){
                                echo "C";
                                $bobot_quran[$i] = 2;
                            }elseif($quran[$i] > 40 && $quran[$i] <= 60){
                                echo "D";
                                $bobot_quran[$i] = 1;
                            }elseif($quran[$i] <= 40){
                                echo "E";
                                $bobot_quran[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">Bimbingan Konseling</td>
                        <td>
                            <?php 
                            if($bk[$i] > 85 && $bk[$i] <= 100){
                                echo "A";
                                $bobot_bk[$i] = 4;
                            } elseif($bk[$i] > 70 && $bk[$i] <= 85){
                                echo "B";
                                $bobot_bk[$i] = 3;
                            }elseif($bk[$i] > 60 && $bk[$i] <= 70){
                                echo "C";
                                $bobot_bk[$i] = 2;
                            }elseif($bk[$i] > 40 && $bk[$i] <= 60){
                                echo "D";
                                $bobot_bk[$i] = 1;
                            }elseif($bk[$i] < 40){
                                echo "E";
                                $bobot_bk[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">Produktif RPL</td>
                        <td>
                            <?php 
                            if($rpl[$i] > 85 && $rpl[$i] <= 100){
                                echo "A";
                                $bobot_rpl[$i] = 4;
                            } elseif($rpl[$i] > 70 && $rpl[$i] <= 85){
                                echo "B";
                                $bobot_rpl[$i] = 3;
                            }elseif($rpl[$i] > 60 && $rpl[$i] <= 70){
                                echo "C";
                                $bobot_rpl[$i] = 2;
                            }elseif($rpl[$i] > 40 && $rpl[$i] <= 60){
                                echo "D";
                                $bobot_rpl[$i] = 1;
                            }elseif($rpl[$i] < 40){
                                echo "E";
                                $bobot_rpl[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td align="left">Produktif TKJ</td>
                        <td>
                            <?php 
                            if($tkj[$i] > 85 && $tkj[$i] <= 100){
                                echo "A";
                                $bobot_tkj[$i] = 4;
                            } elseif($tkj[$i] > 70 && $tkj[$i] <= 85){
                                echo "B";
                                $bobot_tkj[$i] = 3;
                            }elseif($tkj[$i] > 60 && $tkj[$i] <= 70){
                                echo "C";
                                $bobot_tkj[$i] = 2;
                            }elseif($tkj[$i] > 40 && $tkj[$i] <= 60){
                                echo "D";
                                $bobot_tkj[$i] = 1;
                            }elseif($tkj[$i] < 40){
                                echo "E";
                                $bobot_tkj[$i] = 0;
                            }

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center" cellpadding="4">
                            <?php
                            $rata = ($bobot_pai[$i] + $bobot_ppkn[$i] + $bobot_indo[$i] + $bobot_mtk[$i] + $bobot_inggris[$i] + $bobot_kwu[$i] + $bobot_quran[$i] + $bobot_bk[$i] + $bobot_rpl[$i] + $bobot_tkj[$i]) / 10;
                            echo "Nilai Rata-Ratanya Adalah = $rata"; 
                            ?>
                        </td>
                    </tr>   

                        <?php
                    }
                        ?>
                </table>
            </form>
        </fieldset>
    </body>
</html>