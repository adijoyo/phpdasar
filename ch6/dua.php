<?php 
//koneksi ke database 
$db = mysqli_connect("localhost", "root", "", "db_siswa");
//ambil data dari tabel
$result = mysqli_query($db, "SELECT * FROM tb_siswa");
// while ( $s = mysqli_fetch_assoc($result) ){
//         var_dump($s["nama"]);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar Data Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>aksi</th>
            <th>no</th>
            <th>id</th>
            <th>nama</th>
            <th>kelas</th>
            <th>alamat</th>
            
        </tr>  
        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td>
                <a href="">ubah</a>//
                <a href="">hapus</a>
            </td>
            <td><?= $i; ?></td>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["kelas"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
        <?php $i++; ?>
        <?php endwhile ?>
        </tr>
    </table>
</body>
</html>