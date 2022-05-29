 <?php
 	//koneksi database
    include 'koneksi.php';

    //menangkap data yang dikirim dari form
    $namamhs   = $_POST['namamhs'];
    $nrp       = $_POST['nrp'];
    $alamatmhs = $_POST['alamatmhs'];

    mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('','$namamhs','$nrp','$alamatmhs')");

    header("location:index.php");
?>