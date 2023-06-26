<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Tampil data Pinjaman</title>
    </head>
    <body>
            <?php
                include 'config.php';
                $db = new database();
            ?>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Kode Pinjaman</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal lahir</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                </tr>
                <?php
                $no = 1;
                foreach($db->tampil_data() as $x){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?> </td>
                        <td><?php echo $x['kode_pinjaman'] ?> </td>
                        <td><?php echo $x['nama_pinjaman'] ?> </td>
                        <td><?php echo $x['keterangan_jk'] ?> </td>
                        <td><?php
                            $tanggal_lahir = $x['tanggal_lahir'];
                            $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
                            echo $tanggal_lahir_ganti_format;
                            ?>
                        </td>
                        <td><?php echo $x['alamat']; ?></td>
                        <td><?php echo $x['pekerjaan']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
    </body>
</html>