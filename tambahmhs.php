<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>CRUD PHP dan MySQLi - Tugas Praktikum Modul 5</title>
	</head>
	<body>
	<h2>CRUD DATA MAHASISWA</h2>
	    <br/>
	    <a href="index.php">KEMBALI</a>
	    <br/>
	    <br/>
	    <h3>TAMBAH DATA MAHASISWA</h3>
	    <form method="POST" action="aksimhs.php">
	        <table>
	            <tr>
	                <td>Nama</td>
	                <td><input type="text" name="namamhs" required></td>
	            </tr>
	            <tr>
	                <td>NRP</td>
	                <td><input type="number" name="nrp" required></td>
	            </tr>
	            <tr>
	                <td>Alamat</td>
	                <td><input type="text" name="alamatmhs" required></td>
	            </tr>
	            <tr>
	                <td></td>
	                <td><input type="submit" value="SIMPAN"></td>
	            </tr>
	        </table>
	    </form>
	    <br>
	</body>
</html>