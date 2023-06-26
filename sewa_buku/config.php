<?php
    class database{
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "sewa_buku";
        var $koneksi = "";
        function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
            if (mysqli_connect_errno()){
                echo "koneksi database gagal : " . mysqli_connect_error();
            }
        }
        function tampil_data()
        {
            $data = mysqli_query($this->koneksi,"select a.*, b.* from data_pinjaman a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function tampil_data_jenis_kelamin(){
            $data_jenis_kelamin = mysqli_query($this->koneksi,"select * from jenis_kelamin");
            while($row_jenis_kelamin = mysqli_fetch_array($data_jenis_kelamin)){
                $hasil_jenis_kelamin[] = $row_jenis_kelamin;
            }
            return $hasil_jenis_kelamin;
        }
        function tambah_data_pinjaman($kode_pinjaman,$nama_pinjaman,$jenis_kelamin,$tanggal_lahir,$alamat,$pekerjaan)
        {
            mysqli_query($this->koneksi,"insert into data_pinjaman values ('','$kode_pinjaman', '$nama_pinjaman',
                                        '$jenis_kelamin','$tanggal_lahir','$alamat','$pekerjaan')");
        }
    }
?>