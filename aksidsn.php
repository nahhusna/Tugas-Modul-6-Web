 <?php
 	//koneksi database
    include 'koneksi.php';

    //menangkap data yang dikirim dari form
    $namadsn    = $_POST['namadsn'];
    $nip        = $_POST['nip'];
    $alamatdsn  = $_POST['alamatdsn'];
    $jk         = $_POST['jk'];
    $thn_masuk  = $_POST['thn_masuk'];
    $agama      = $_POST['agama'];
    $pend_akhir = $_POST['pend_akhir'];

    mysqli_query($koneksi,"INSERT INTO dosen VALUES('','$namadsn','$nip','$alamatdsn','$jk','$thn_masuk','$agama','$pend_akhir')");

    header("location:index.php");
?>