<?php

session_start();
include 'connect-db.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "headtags.html"; ?>
    <title>Team MyLaundry</title>
</head>
<body>
    
    <!-- header -->
    <?php include "header.php"; ?>
    <!-- end header -->


    <!-- body -->
    <div class="row">
        <h3 class="header light center">Team MyLaundry</h3>
        <br>
        <div class="col s2 offset-s3">
            <div class="card">
                <div class="card-image center">
                    <img src="img/logo.png">
                    <h5 class="header light">Made Althaaf Naufal Gusendra</h5>
                </div>
                <div class="card-content">
                <p>Saya ganteng</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s2">
            <div class="card">
                <div class="card-image center">
                    <img src="img/logo.png">
                    <h5 class="header light">Muhamad Surya Fauzan</h5>
                </div>
                <div class="card-content">
                <p>Saya aneh.</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col s2">
            <div class="card">
                <div class="card-image center">
                    <img src="img/logo.png">
                    <h5 class="header light"> Jihan Febriharvianti Wirawan</h5>
                </div>
                <div class="card-content">
                <p>Saya cewe.</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end body -->



    <!-- footer -->
    <?php include "footer.php" ?>
    <!-- end footer -->




</body>
</html>