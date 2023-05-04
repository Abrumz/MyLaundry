<?php

session_start();
include 'connect-db.php';
include 'functions/functions.php';

// validasi login
cekLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "headtags.html"; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./css/style2.css">
    <title>MyLaundry</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: "Open Sans";
            color: #fff;
        }
        section{
            background: url("./img/bg.png"), url("../coba/index.html");
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center center;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 380px;
            padding: 50px 30px;
            border-radius: 10px;
            background-color: rgba(53, 109, 101, 0.9);
            backdrop-filter: blur(5px);
        }


        h1{
            color: #ffffff;
            font-size: 2em;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2rem;
        }
        .control input{
            padding: 10px;
            font-size: 16px;
            display: block;
            width: 100%;
            color:#000;
            background: #ddd;
            outline: none;
            border: none;
            margin: 1em 0;

        }         
        .control .btn{
            color: #fff;
            text-transform: uppercase;
            background: crimson;
            opacity: .7;
            transition:opacity .3s ease;
        }
        .btn:focus{
            opacity: 1;
        }
        p{
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #fff;
            opacity: .7;
        }
        a:hover{
            opacity: 1;
        }

        li {
            text-align: center;
        }

        .center {
            display: flex;
            justify-content: center;
        }

        button {
            margin-top: 10px;
        }

        form {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        }

        li label span {
            color: white;
        }
        input[type="text"], input[type="password"] {
            color: white;
        }
        .input-field label, .input-field input, .input-field select, .input-field textarea {
            font-size: 1.2rem;
        }

        .button {
            font-size: 1.2rem;
        }
        li label span {
        font-size: 2rem;
        }

        li input[type="text"],
        li input[type="password"] {
        font-size: 2rem;
        }


    </style>
</head>
</head>

<body>
<section>
    
    <div class='canvas'>
    <?php
        for ($i = 0; $i < 50; $i++) {
            echo "<div class='bubble'></div>";
        }
    ?>
    </div>
    <div class="form-container">
        <h1>Login Form</h1>
        <form action="" method="post">
        <div class="input-field inline">
            <ul>
            <li>
                    <label><input name="akun" value="admin" type="radio"/><span>Admin</span> </label>
                    <label><input name="akun" value="agen" type="radio"/><span>Agen</span> </label>
                    <label><input name="akun" value="pelanggan" type="radio"/><span>Pelanggan</span></label>
                </li>
                <li>
                    <input type="text" id="email" name="email" placeholder="Email">
                </li>
                <li>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <p class="tes"></p>
                </li>

                <br>
                <li>
                    <div class="center">
                        <button class="waves-effect blue darken-2 btn" type="submit" name="login">Login</button>
                    </div>
                </li>
            </ul>
        </div>
    </form>
        <p><a href="registrasi.php">New Member?</a></p>
    </div>
</section>

</body>


    <!-- <div class="form-container">  
        <h3 class="header light center">Halaman Login</h3>
        <form action="" method="post">
            <div class="input-field inline">
                <ul>
                <li>
                        <label><input name="akun" value="admin" type="radio"/><span>Admin</span> </label>
                        <label><input name="akun" value="agen" type="radio"/><span>Agen</span> </label>
                        <label><input name="akun" value="pelanggan" type="radio"/><span>Pelanggan</span></label>
                    </li>
                    <li>
                        <input type="text" id="email" name="email" placeholder="Email">
                    </li>
                    <li>
                        <input type="password" id="password" name="password" placeholder="Password">
                        <p class="tes"></p>
                    </li>
                    <br>
                    <li>
                        <div class="center">
                            <button class="waves-effect blue darken-2 btn" type="submit" name="login">Login</button>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div> -->

   

</body>
</html>

<?php

if ( isset($_POST["login"]) ){

    if ($_POST["akun"] == 'agen'){
        // masukkan ke var
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        validasiEmail($email);

        // cari data di db
        $result = mysqli_query($connect, "SELECT * FROM agen WHERE email = '$email'");

        // kalau ada email
        if(mysqli_num_rows($result) == 1){
            // masukan ke array assoc
            $row = mysqli_fetch_assoc($result);
            // verif password
            if(password_verify($password, $row["password"])){
                $_SESSION["agen"] = $row["id_agen"];
                $_SESSION["login-agen"] = true;

                echo "
                    <script>
                        document.location.href = 'index1.php';
                    </script>
                ";
                exit;
            }else {
                echo "
                    <script>
                        Swal.fire('Gagal Login','Password Yang Anda Masukkan Salah','warning');
                    </script>
                ";
            }
        }else {
            echo "
                <script>
                    Swal.fire('Gagal Login','Email Belum Terdaftar','warning');
                </script>
            ";
        }
    }else if ($_POST["akun"] == 'pelanggan'){
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        validasiEmail($email);

        //cek apakah ada email atau tidak
        $result = mysqli_query($connect, "SELECT * FROM pelanggan WHERE email = '$email'");
        
        //jika ada username
        if ( mysqli_num_rows($result) === 1 ){   //fungsi menghitung jumlah baris di db
            
            //memasukkan data db ke array assosiative
            $data = mysqli_fetch_assoc($result);

            //cek apakah password sama
            if ( password_verify($password, $data["password"]) ){
                //session login 
                $_SESSION["pelanggan"] = $data["id_pelanggan"];
                $_SESSION["login-pelanggan"] = true;

                echo "
                    <script>
                        document.location.href = 'index1.php';
                    </script>
                ";
                
            }else {
                echo "
                    <script>
                        Swal.fire('Gagal Login','Password Yang Anda Masukkan Salah','warning');
                    </script>
                ";
            }
        }else {
            echo "
                <script>
                    Swal.fire('Gagal Login','Email Belum Terdaftar','warning');
                </script>
            ";
        }
    }else if ($_POST["akun"] == 'admin' ){
        $username = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        validasiUsername($username);
    
        // cek di db
        $data = mysqli_query($connect, "SELECT * FROM admin WHERE username = '$username'");
    
        // jika email ada
        if ( mysqli_num_rows($data) === 1 ){
    
            // jadikan array asosiatif
            $data = mysqli_fetch_assoc($data);
            $idAdmin = $data["id_admin"];
    
            // jika password benar
            if ( $password === $data["password"])   {
                //session login 
                $_SESSION["login-admin"] = true;
                $_SESSION["admin"] = $idAdmin;

                echo "
                    <script>
                        document.location.href = 'index1.php';
                    </script>
                ";
                
            }else {
                echo "
                    <script>
                        Swal.fire('Gagal Login','Password Yang Anda Masukkan Salah','warning');
                    </script>
                ";
            }
        }else {
            echo "
                <script>
                    Swal.fire('Gagal Login','Username Tidak Terdaftar Sebagai Admin','warning');
                </script>
            ";
        }
    }else {
        echo "
            <script>
                Swal.fire('Gagal Login','Pilih Jenis Akun Terlebih Dahulu','warning');
            </script>
        ";
    }
}

?>

