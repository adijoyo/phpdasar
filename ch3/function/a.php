<?php
    function bio($nama, $kelas, $alamat) {
        return "nama saya $nama, kelas $kelas, alamat $alamat";
    }

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= bio("dsadasdsdas", "XII RPL1", "setono"); ?>
</body>
</html>