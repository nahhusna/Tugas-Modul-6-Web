 <?php
 	//koneksi database
    include 'koneksi.php';

    //menangkap data yang dikirim dari form
    $id        = $_POST['id'];
    $namamhs   = $_POST['namamhs'];
    $nrp       = $_POST['nrp'];
    $alamatmhs = $_POST['alamatmhs'];

    //update data ke database
    mysqli_query($koneksi,"UPDATE mahasiswa SET namamhs='$namamhs', nrp='$nrp', alamatmhs='$alamatmhs' WHERE id='$id'");

    //mengalihkan halaman kembali ke index.php
    echo "<script>alert('Update Berhasil!');window.location='index.php'</script>";
?>