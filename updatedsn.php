<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$id            = $_POST['id'];
$namadsn       = $_POST['namadsn'];
$nip           = $_POST['nip'];
$alamatdsn     = $_POST['alamatdsn'];
$jk            = $_POST['jk'];
$thn_masuk     = $_POST['thn_masuk'];
$agama         = $_POST['agama'];
$pend_akhir    = $_POST['pend_akhir'];
 
// query SQL untuk update data ke dalam Mysql
$query="UPDATE dosen SET namadsn='$namadsn',nip='$nip',alamatdsn='$alamatdsn',jk='$jk',thn_masuk='$thn_masuk',agama='$agama', pend_akhir='$pend_akhir' where id='$id'";
mysqli_query($koneksi, $query);

// mengalihkan ke halaman index.php
echo "<script>alert('Update Berhasil!');window.location='index.php'</script>";
?>