<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>CRUD PHP dan MySQLi - Praktikum Modul 6</title>
	</head>
	<body>
	<h2>CRUD DATA MAHASISWA</h2>
	    <br/>
	    <a href="index.php">KEMBALI</a>
	    <br/>
	    <br/>
	    <h3>EDIT DATA MAHASISWA</h3>

	    <?php 
	    include 'koneksi.php';
	    $id = $_GET['id'];
	    $datamhs = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
	    while($mhs = mysqli_fetch_array($datamhs)){
	    	?>
	    	<form method="post" action="updatemhs.php">
		        <table>
		            <tr>
		                <td>Nama</td>
		                <td>
		                	<input type="hidden" name="id" value="<?php echo $mhs['id']; ?>">
		                	<input type="text" name="namamhs" value="<?php echo $mhs['namamhs']; ?>">
		                </td>
		            </tr>
		            <tr>
		                <td>NRP</td>
		                <td><input type="number" name="nrp" value="<?php echo $mhs['nrp']; ?>"></td>
		            </tr>
		            <tr>
		                <td>Alamat</td>
		                <td><input type="text" name="alamatmhs" value="<?php echo $mhs['alamatmhs']; ?>"></td>
		            </tr>
		            <tr>
		                <td></td>
		                <td><input type="submit" value="SIMPAN"></td>
		            </tr>
		        </table>
		    </form>
	    	<?php
	    }
	    ?>  
	</body>
</html>