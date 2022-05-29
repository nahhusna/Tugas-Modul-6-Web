<?php
include 'koneksi.php';
 
$id         = $_GET['id'];
$datadsn    = mysqli_query($koneksi, "SELECT * FROM dosen WHERE id='$id'");
$dsn        = mysqli_fetch_array($datadsn);
 
// membuat data pendidikan akhir dan agama menjadi dinamis dalam bentuk array
$pend_akhir = array('S1','S2','S3');
$agama      = array('Islam','Protestan','Katolik','Hindu','Buddha','Konghucu','Atheis'); 
 
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP dan MySQLi - Praktikum Modul 6</title>
    </head>
    <body>
        <h2>CRUD DATA DOSEN</h2>
        <br/>
        <a href="index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>EDIT DATA DOSEN</h3>

        <form method="post" action="updatedsn.php">
            <table>
                    <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $dsn['id']; ?>">
                        <input type="text" name="namadsn" value="<?php echo $dsn['namadsn']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td><input type="number" name="nip" value="<?php echo $dsn['nip']; ?>" required></td>
                </tr>
                    <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamatdsn" value="<?php echo $dsn['alamatdsn']; ?>" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                    <input type="radio" name="jk" value="Laki-Laki" <?php echo active_radio_button("Laki-Laki", $dsn['jk'])?>>Laki-Laki
                    <input type="radio" name="jk" value="Perempuan" <?php echo active_radio_button("Perempuan", $dsn['jk'])?>>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tahun Masuk</td>
                    <td><select name="thn_masuk" size="1" id="thn_masuk" value="<?php echo $dsn['thn_masuk']; ?>" required>
                    <?php
                        for ($i=1960;$i<=2022;$i++)
                             {
                               echo '<option value=' . $i . ($dsn['thn_masuk']==$i?' selected':'') . '>' . $i . '</option>';
                             }
                        ?>
                    </td>
                </tr>
                <tr>
                <td>Agama</td>
                <td>
                    <select name="agama" value="<?php echo $dsn['agama']; ?>"required>
                        <?php 
                            foreach ($agama as $religion){
                                echo "<option value='$religion' ";
                                echo $dsn['agama']==$religion?'selected="selected"':'';
                                echo ">$religion</option>";
                            }
                        ?>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>
                        <select name="pend_akhir" value="<?php echo $dsn['pend_akhir']; ?>"required>
                            <?php 
                            foreach ($pend_akhir as $s1s2s3){
                                echo "<option value='$s1s2s3' ";
                                echo $dsn['pend_akhir']==$s1s2s3?'selected="selected"':'';
                                echo ">$s1s2s3</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="UPDATE"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
﻿