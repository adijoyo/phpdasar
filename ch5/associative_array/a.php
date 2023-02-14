<?php

$data = [ 
    [
        "nama" => "joni susanto",
        "kelas" => "XII TKR 2",
        "alamat" => "jakarta"
    ], 
    [
        "nama" => "intan ayu",
        "kelas" => "XII TB 1",
        "alamat" => "brebes"
    ],
    [
        "nama" => "salma karima",
        "kelas" => "XI RPL 3",
        "alamat" => "batang"
    ],
];
$nom =1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative array</title>
</head>
<body>
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <tr>
            <td>no</td>
            <td>nama</td>
            <td>kelas</td>
            <td>alamat</td>
        </tr>
        <?php foreach ($data as $dt) : ?>
        <tr>
            <td><?=$nom++?></td>
            <td><?= $dt["nama"]?> </td>
            <td><?= $dt["kelas"]?> </td>
            <td><?= $dt["alamat"]?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>