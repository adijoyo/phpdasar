<?php 
require 'functions.php';
    //cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    

    //notifikasi berhasil/gagal
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'satu.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('data berhasil ditambahkan!');
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
    <title>Tambahkan Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <style>
        body {
            font-family:arial;
            margin-top: 50px;
        }
        h1{
            text-align: center;
        }
        .container {
            background: white;
            width: 40%;
            margin-top:90px;
            border: 3px solid black;
            padding: 30px;
            
        }
        
        label {
            line-height: 50px;
        }
        input {
            width: 50%;
            text-align: center;
            align-items: center;
        }
        ul li {
            list-style: none;
            line-height: 30px;
            text-align: center;
            
        }
        .biru {
            background-color: #1674c7;
            color: white;
            width: 70%;
            text-align:center;
            align-items: center;
            border: 1px solid #1674c7;
            transition: 0.2s;
        }
        .biru:hover {
            background-color: #1a8cf0;
            color: white;
            box-shadow: 0px 0px 10px #1a8cf0;

        }
        /* .merah {
            text-decoration:none;
            display: block;
            background-color: #ad1717;
            color: white;
            width: 70%;
            border: 1px solid #ad1717;
            transition: 0.2s;
        } */
        .merah {
            text-decoration: none;
            width: 70%;
            border-radius: 0;
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


<h1> Tambahkan Data Siswa </h1>
<br><br>
<img src="user.png" alt="">
<br>
<form action="" method="post">
    <ul>
        <li>
            <input type="text" name="nama" id="nama" placeholder="Nama"required >
        </li>
        <br>
        <li>
            <input type="text" name="kelas" id="kelas" placeholder="Kelas">
        </li>
        <br>
        <li>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat">
        </li>
        <br> 
        <li>
        <button class="biru" type="submit" name="submit">
                Tambah Sekarang   <i class="bi bi-person-plus-fill"></i>
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