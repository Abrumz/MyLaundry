<nav style="background-color:#f7ecdf";>
    <div class="container">
        <div class="nav-wrapper">
        <a href="index.php">
            <img src="img/MyLaundry1.png" style="top: 0; left: 0; width: 170px; height: 60px;">
        </a>
            <ul class="right hide-on-med-and-down">
                <li>
                <a href="index1.php" style="color:#356D65;"><b>Home</b></a>
                </li>
                <li> 
                <?php
                    global $connect;

                    if ( isset($_SESSION["login-pelanggan"]) && isset($_SESSION["pelanggan"])){
                        // mengambil email dari session
                        $idPelanggan = $_SESSION["pelanggan"];
                        // cari data di db sesuai $email
                        $data = mysqli_query($connect, "SELECT * FROM pelanggan WHERE id_pelanggan = '$idPelanggan'");
                        // memasukkan ke array asosiatif
                        $data = mysqli_fetch_assoc($data);
                        // mengambil data nama dari array
                        $nama = $data["nama"];

                        echo "<a href='pelanggan.php' style='color:#356D65;'><b>$nama</b> (Pelanggan)</a>";

                    }else if ( isset($_SESSION["login-agen"]) && isset($_SESSION["agen"])){
                        // mengambil email dari session
                        $id_agen = $_SESSION["agen"];
                        // cari data di db sesuai $id_agen
                        $data = mysqli_query($connect, "SELECT * FROM agen WHERE id_agen = '$id_agen'");
                        // memasukkan ke array asosiatif
                        $data = mysqli_fetch_assoc($data);
                        // mengambil data nama dari array
                        $nama = $data["nama_laundry"];

                        echo "<a href='agen.php' style='color:#356D65;'><b>$nama</b> (Agen)</a>";

                    }else if ( isset($_SESSION["login-admin"]) && isset($_SESSION["admin"])){
                        echo 
                            "<a href='admin.php' style='color:#356D65;'><b><b>Admin</b></a>";
                        }else {
                            echo 
                            "<a href='registrasi-page.php' style='color:#356D65;'><b><b>Registrasi</b></a>";
                        }
                ?>
                </li>
                <li>
                <?php
                    if ( isset($_SESSION["login-pelanggan"]) && isset($_SESSION["pelanggan"]) || isset($_SESSION["login-agen"]) && isset($_SESSION["agen"]) || isset($_SESSION["login-admin"]) && isset($_SESSION["admin"]) ){
                        echo 
                        "<a href='logout.php' style='color:#356D65;'><b><b>Logout</b></a>";
                    }else {
                        echo "<a href='login.php' style='color:#356D65;'><b><b>Login</b></a>";
                    }                    
                ?>                                      
                </li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li>
                    <a href="index1.php" style="color:#356D65;"><b>Home</b></a>
                    <?php
                        if ( isset($_SESSION["login-pelanggan"]) && isset($_SESSION["pelanggan"]) || isset($_SESSION["login-agen"]) && isset($_SESSION["agen"]) || isset($_SESSION["login-admin"]) && isset($_SESSION["admin"]) ){
                            echo 
                            "<a href='logout.php' style='color:#356D65;'><b><b>Logout</b></a>";
                        }else {
                            echo "<a href='login.php' style='color:#356D65;'><b><b>Login</b></a>";
                        }
                    ?>                                      
                </li>
                <li> 
                    <?php
                        global $connect;

                        if ( isset($_SESSION["login-pelanggan"]) && isset($_SESSION["pelanggan"])){
                            // mengambil email dari session
                            $idPelanggan = $_SESSION["pelanggan"];
                            // cari data di db sesuai $email
                            $data = mysqli_query($connect, "SELECT * FROM pelanggan WHERE id_pelanggan = '$idPelanggan'");
                            // memasukkan ke array asosiatif
                            $data = mysqli_fetch_assoc($data);
                            // mengambil data nama dari array
                            $nama = $data["nama"];

                            echo "<a href='pelanggan.php' style='color:#356D65;'><b>$nama</b> (Pelanggan)</a>";

                        }else if ( isset($_SESSION["login-agen"]) && isset($_SESSION["agen"])){
                            // mengambil email dari session
                            $id_agen = $_SESSION["agen"];
                            // cari data di db sesuai $id_agen
                            $data = mysqli_query($connect, "SELECT * FROM agen WHERE id_agen = '$id_agen'");
                            // memasukkan ke array asosiatif
                            $data = mysqli_fetch_assoc($data);
                            // mengambil data nama dari array
                            $nama = $data["nama_laundry"];

                            echo "<a href='agen.php' style='color:#356D65;'><b>$nama</b> (Agen)</a>";

                        }else if ( isset($_SESSION["login-admin"]) && isset($_SESSION["admin"])){
                            echo 
                            "<a href='admin.php' style='color:#356D65;'><b><b>Admin</b></a>";
                        }else {
                            echo 
                            "<a href='registrasi.php' style='color:#356D65;'><b><b>Registrasi</b></a>";
                        }
                    ?>
                </li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </div>
</nav>
<br/>