<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("location: error.php");
    exit;
}

require 'functions.php';

//ambil data
$id =$_GET["id"];

//query data
$swa = query("SELECT * FROM tb_siswa WHERE id = $id")[0];

    //cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    

    //notifikasi berhasil/gagal
    if( edit($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil di edit!');
            document.location.href = 'satu.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('data gagal di edit!');
        document.location.href = 'satu.php';
    </script>";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .container {
            background: white;
            width: 40%;
            margin-top:90px;
            border: 3px solid black;
            padding: 30px;
            
        }
        h1{
            text-align: center;
        }
        ul li {
            list-style: none;
            line-height: 30px;
            text-align: center;
            
        }
        button {
            background-color: #1674c7;
            color: white;
            width: 70%;
            text-align:center;
            align-items: center;
            border: 1px solid #1674c7;
            transition: 0.2s;
        }
        button:hover {
            background-color: #1a8cf0;
            color: white;
            box-shadow: 0px 0px 10px #1a8cf0;

        }
        input {
            width: 50%;
            text-align: center;
            align-items: center;
        }
        .merah {
            text-decoration: none;
            width: 70%;
        }
        .merah:hover {
            background-color: #d62929;
            color: white;
            box-shadow: 0px 0px 10px #d62929;
        }
        img {
            width: 30%;
            height: 30%;
            display: flex;
            margin: 0 auto;
        }
    </style>
</head>
<body>



<div class="container">

<h1> Edit Data Siswa </h1>
<br><br>
<img src="user.png" alt="">
<br>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $swa["id"];?>">
    <ul>
        <li>
            <input type="text" name="nama" id="nama" placeholder="Nama" required 
            value="<?= $swa["nama"];?>">
        </li>
        <br>
        <li>
            <input type="text" name="kelas" id="kelas" placeholder="Kelas"
            value="<?= $swa["kelas"];?>">
        </li>
        <br>
        <li>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat"
            value="<?= $swa["alamat"];?>">
        </li>
        <br>
        <li>
            <button class = "btn btn-primary" type="submit" name="submit">
                Update   <i class="bi bi-cloud-arrow-up-fill"></i>
            </button>
        </li>
        <br>
        <li>
        <a class="merah btn btn-danger" href="satu.php">batal  <i class="bi bi-x-circle"></i></a>
        </li>
    </ul>
</form>
    </div>
</body>
</html>