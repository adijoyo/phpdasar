<?php
    //koneksi ke database 
$db = mysqli_connect("localhost", "root", "", "db_siswa");


function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $kotak = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $kotak[] = $row;
    }
    return $kotak;

}




function tambah($data) {
    global $db;
    $id = $data["id"];
    $nama = htmlspecialchars ($data["nama"]);
    $kelas = htmlspecialchars ($data["kelas"]);
    $alamat = htmlspecialchars ($data["alamat"]);

    $query = "INSERT INTO tb_siswa
                    VALUES
                ('', '$nama', '$kelas', '$alamat')
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM tb_siswa WHERE id = $id");
    return mysqli_affected_rows($db);
}

function edit($data) {
    global $db;
    $id = $data["id"];
    $nama = htmlspecialchars ($data["nama"]);
    $kelas = htmlspecialchars ($data["kelas"]);
    $alamat = htmlspecialchars ($data["alamat"]);

    $query = "UPDATE tb_siswa SET
                nama = '$nama',
                kelas = '$kelas',
                alamat = '$alamat'
                WHERE id = $id
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function cari($search) {
    $query = "SELECT * FROM tb_siswa
                WHERE
                nama LIKE '%$search%' OR
                kelas LIKE '%$search%' OR
                alamat LIKE '%$search%' OR
                id LIKE '%$search%' 
                ";
    return query($query);

}


function registrasi($data) {
    global $db;

    $username = strtolower (stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);


   $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");


    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah digunakan')
              </scrpt>";
        return false;
    }


    if( $password !== $password2 ) {
        echo "<script>
            alert('mohon untuk menkonfirmasi password dengan benar');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($db, "INSERT INTO user VALUES('', '$username', '$password') ");

    return mysqli_affected_rows($db); 
}
?>