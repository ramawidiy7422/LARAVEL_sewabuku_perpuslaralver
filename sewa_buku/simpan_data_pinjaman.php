<?php
    include('config.php');
    $koneksi = new database();
    $koneksi->tambah_data_pinjaman($_POST['kode_pinjaman'],$_POST['nama_pinjaman'],
            $_POST['jenis_kelamin'],$_POST['tanggal_lahir'],$_POST['alamat'],$_POST['pekerjaan']);
    header('location:tampilkan_data_pinjaman.php');
?>