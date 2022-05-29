<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>CRUD PHP dan MySQLi - Tugas Praktikum Modul 5</title>
	</head>
	<body>
	<h2>CRUD DATA DOSEN</h2>
	    <br/>
	    <a href="index.php">KEMBALI</a>
	    <br/>
	    <br/>
	    <h3>TAMBAH DATA DOSEN</h3>
	    <form method="POST" action="aksidsn.php">
	        <table>
	            <tr>
	                <td>Nama</td>
	                <td><input type="text" name="namadsn" required></td>
	            </tr>
	            <tr>
	                <td>NIP</td>
	                <td><input type="number" name="nip" required></td>
	            </tr>
	            <tr>
	                <td>Alamat</td>
	                <td><input type="text" name="alamatdsn" required></td>
	            </tr>
	            <tr>
	                <td>Jenis Kelamin</td>
	                <td>
	                	<input type="radio" name="jk" value="Laki-Laki" required>Laki-Laki
                        <input type="radio" name="jk" value="Perempuan" required>Perempuan
                    </td>
	            </tr>
	            <tr>
	                <td>Tahun Masuk</td>
	                <td><select name="thn_masuk" size="1" id="thn_masuk" required>
			            <?php
			             for ($i=1960;$i<=2022;$i++)
			             {
			               echo "<option value=".$i.">".$i."</option>";
			             }
			            ?>
		        	</td>
	            </tr>
	            <tr>
	                <td>Agama</td>
	                <td>
	                	<select name="agama" required>
							<option value="Islam">Islam</option>
					        <option value="Protestan">Protestan</option>
					        <option value="Katolik">Katolik</option>
					        <option value="Hindu">Hindu</option>
					        <option value="Buddha">Buddha</option>
					        <option value="Konghucu">Konghucu</option>
					        <option value="Atheis">Atheis</option>
					    </select>
	                </td>
	            </tr>
	            <tr>
	                <td>Pendidikan Terakhir</td>
	                <td>
	                	<select name="pend_akhir" required>
							<option value="S1">S1</option>
					        <option value="S2">S2</option>
					        <option value="S3">S3</option>
					    </select>
	                </td>
	            </tr>
	            <tr>
	                <td></td>
	                <td><input type="submit" value="SIMPAN"></td>
	            </tr>
	        </table>
	    </form>
	    
	</body>
</html>