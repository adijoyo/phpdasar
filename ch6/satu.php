<?php 
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: error.php");
    exit;
}

require 'functions.php';
$siswa = query("SELECT * FROM tb_siswa");


if(isset($_POST["cari"])){
    $siswa = cari ($_POST["search"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="satu.css">
    <style>
        button {
            box-shadow: 0 4px black;
            transition: 0.2s;
        }
        button:active {
            background-color: #14db71;
            box-shadow: 0 0px 10px #14db71;
            transform: translateY(2px);
        }
        input {
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="container">

        <br><br>
        <a class="btn btn-outline-danger float-end" href="logout.php">Logout  <i class="bi bi-door-open-fill"></i></a>
        <br><br><br>
        <h1 class="text-center">Daftar Data Siswa</h1>
    <br><br>
        <form action="" method="post">
            <input type="text" name="search" size="40" autofocus
            placeholder="cari data siswa..." autocomplete="off">
            <button class="rounded-circle" type="submit" name="cari"><i class="bi bi-search"></i></button>
        </form>
    
        <br>
    
        <table class="table table caption-top" border="1" cellpadding="10" cellspacing="0">
            <tr class="bg bg-dark text-white">
                <th>Aksi</th>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                
            </tr>  
            <?php $i = 1; ?>
            <?php foreach( $siswa as $row ):?>
            <tr>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>"><i class="bi bi-pencil-square"></i></a>  //
                    <a href="hapus.php?id=<?= $row["id"]; ?>"
                    onclick="return confirm ('data ini akan dihapus, anda yakin?');"><i class="bi bi-person-x-fill text-danger"></i></a>
                </td>
                <td><?= $i; ?></td>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
            <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
    <br><br>
        <a class="btn btn-outline-primary" href="tambah.php">Tambahkan data      <i class="bi bi-person-plus-fill"></i></a>
    </div>


</body>
</html>