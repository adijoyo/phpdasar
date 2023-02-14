<?php
session_start();
require 'functions.php';

//cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

//ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT username FROM user 
                            WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if( $key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }

    }


if( isset($_SESSION["login"])) {
    header("Location: satu.php");
    exit;
}


if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username ='$username'");
    
    if( mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"])) {

            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if( isset($_POST['remember'])){
                //buat cookienya
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }
            
            header("location: satu.php");
            exit;
        }

    }

    $error = true;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <style>

        h1{
            text-align: center;
        }
        .container {
            background: white;
            width: 40%;
            margin-top:90px;
            margin-bottom:138px;
            border: 3px solid black;
            padding: 30px;
            box-shadow: 10px 10px 8px #313133;
            
        }
        body {
            font-family: arial;
            background-image: linear-gradient(white, #239ec9);
            
        }
        label {
            display: block;
        }
        ul li {
            list-style: none;
            line-height: 30px;
            text-align: center;
        }
        input {
            width: 70%;
            text-align: center;
            align-items: center;
        }
        button {
            width: 50%;
        }
        img {
            display: flex;
            width: 30%;
            height: 30%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
    



    <div class="container">

    <img src="tutwuri.png" alt="">

    <h1>Halaman Login</h1>

<br><br>
<?php if(isset ($error) ) : ?>
        <p style="color:red; font-style: italic; text-align: center;">username / password salah</p>
    <?php endif;?>
<form action="" method="post">
    
    <!-- <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input class="text-center"type="text" id="username" placeholder="username">
    </div>    -->

    <ul>
        <li>
            
            <input type="text" name="username" id="username" placeholder="masukkan username">
        </li>
        <br>
        <li>
            
            <input class="text-center" type="password" name="password" id="password" placeholder="masukkan password">
        </li>
        <br>
        <li>
        <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" id="remember">
        </li>
        <li>
            <button class="btn btn-primary" type="submit" name="login">Login </button>
        </li>
    </ul>

</form>
</div>
</body>
</html>