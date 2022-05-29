<?php
    $koneksi = mysqli_connect("localhost","root","","akademik1932");

    if (mysqli_connect_error())
    {
        echo "Koneksi database gagal :". mysqli_connect_error();
    }
?>