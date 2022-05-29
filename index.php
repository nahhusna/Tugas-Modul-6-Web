<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum Modul 5</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <a href="tambahmhs.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $datamhs = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
        while($mhs = mysqli_fetch_array($datamhs))
        {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $mhs['namamhs'];?></td>
                <td><?php echo $mhs['nrp'];?></td>
                <td><?php echo $mhs['alamatmhs'];?></td>
                <td>
                    <a href="editmhs.php?id=<?php echo $mhs['id']; ?>">EDIT</a>
                    <a href="hapusmhs.php?id=<?php echo $mhs['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h2>CRUD DATA DOSEN</h2>
    <br/>
    <a href="tambahdsn.php">+ TAMBAH DOSEN</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tahun Masuk</th>
            <th>Agama</th>
            <th>Pendidikan Terakhir</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $nomor = 1;
        $datadsn = mysqli_query($koneksi,"SELECT * FROM dosen");
        while($dsn = mysqli_fetch_array($datadsn))
        {
            ?>
            <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $dsn['namadsn'];?></td>
                <td><?php echo $dsn['nip'];?></td>
                <td><?php echo $dsn['alamatdsn'];?></td>
                <td><?php echo $dsn['jk'];?></td>
                <td><?php echo $dsn['thn_masuk'];?></td>
                <td><?php echo $dsn['agama'];?></td>
                <td><?php echo $dsn['pend_akhir'];?></td>
                <td>
                    <a href="editdsn.php?id=<?php echo $dsn['id']; ?>">EDIT</a>
                    <a href="hapusdsn.php?id=<?php echo $dsn['id']; ?>">HAPUS</a>
                </td>
            <?php
        }
        ?>
    </table>

</body>
</html>