<?php

$data = [
    ["joni sussanto", "XII TKR 2", "Pemalang"],
    ["intan ayu", "XII TB 1", "Brebes"],
    ["salma karima", "XI RPL 3", "Batang"]
];

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>

<table border="1" cellpadding= "10" cellspacing= "0">
    <tr>
        <td>no</td>
        <td>nama</td>
        <td>kelas</td>
        <td>alamat</td>
    </tr>

    <?php foreach ($data as $dt) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $dt [0] ?></td>
            <td><?= $dt [1] ?></td>
            <td><?= $dt [2] ?></td>
        </tr>

<?php endforeach; ?>

</table>
    
</body>
</html>