<?php

//koneksi database
include 'koneksi.php';

//menangkap data id yan di kirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

//mengalihkan halaman kembali ke index.php
echo "<script>alert('Hapus Data Berhasil!');window.location='index.php'</script>";
?>