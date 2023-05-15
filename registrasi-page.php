<?php

// mulai session
session_start();
include 'connect-db.php';
include 'functions/functions.php';

cekLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyLaundry</title>
  <link rel="shortcut icon" href="img/MyLaundry1.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- <include headtags.html> -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/regis-page.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
</head>

<body>
  <main>
    <header id="header" style="background-color:#f7ecdf;">
      <div class="container">
        <div class="overlay overlay-lg">
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
          <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="./img/MyLaundry1.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/points1.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="logo">
            <a href="index.php"><img src="img/MyLaundry1.png" style="top: 0; left: 0; width: 170px; height: 60px;">
                </a>
            </div>
            <div class="nav-title">
                <h1>Registrasi</h1>
            <div class="links">
              <ul>
                <!-- <li>
                  <a href="#header">Home</a>
                </li>
                <li>
                  <a href="#about">Tentang Kami</a>
                </li>
                <li>
                  <a href="#contact">Hubungi Kami</a>
                </li>
                <li>
                  <a href="#testimoni">Testimoni</a>
                </li>
                <li>
                  <a href="term.php">Syarat dan Ketentuan</a>
                </li> -->
                <li>
                <a href="login.php" class="active">Login</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
          <div class="column-1 image">
              <img src="./img/shapes/points2.png" class="points points3" alt="" />
              <img src="./img/image.png" class="img-element z-index" alt="" />
            </div>

            <div class="column-2">
              <h1 class="header-title">Registrasi <span style="color:#356D65; font-weight:bold; text-decoration:underline;"> atau</span> Login<span style="color:#356D65; font-weight:bold; text-decoration:underline;"></span></h1>
              <p class="text">
                Kalian dapat mendaftar menjadi agen atau pelanggan kami, <span style="color:#356D65; font-weight:bold;">hanya dengan</span> menekan salah satu tombol <b>dibawah ini,</b> atau kalian dapat melakukan login!
              </p>
              <a href="registrasi-agen.php" class="btn" style="background-color:transparent; color:#356D65; border: solid 1px #356D65;">Agen</a>
              <a href="registrasi-pelanggan.php" class="btn">Pelanggan</a>
            </div>

          </div>
        </div>
    <!-- <section class="services section" id="services"> -->

