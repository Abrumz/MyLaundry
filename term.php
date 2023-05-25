<?php

session_start();
include 'connect-db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card-content {
        display: grid;
        grid-template-rows: auto 1fr;
        align-items: center;
        justify-items: center;
        text-align: center;
        font-weight: 500;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'headtags.html'; ?>
    <title>Term and Condition</title>
</head>
<body>
    
    <!-- header -->
    <?php include 'header.php'; ?>
    <!-- end header -->


    <!-- body -->
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
            <div class="card-content" style="text-align: center;">
                <img src="img/MyLaundry1.png" alt="MyLaundry" width="50%" style="margin-bottom: 20px;" />
                <span class="card-title black-text" style="text-align: justify; font-weight: 500;">Syarat dan Ketentuan :</span>
                <p style="text-align: justify;">
                1. Memiliki lokasi usaha laundry yang strategis dan teridentifikasi oleh google map<br />
                2. Agen memiliki nama usaha serta logo perusahaan agar dapat diposting di website laundryKU<br />
                3. Mampu memberikan layanan Laundry dengan kualitas prima dan harga yang bersaing<br />
                4. Memiliki driver yang bersedia untuk melakukan penjemputan dan pengantaran terhadap laundry pelanggan<br />
                5. Harga dari jenis laundry ditentukan berdasarkan berat per kilo (kg) ditambah dengan biaya ongkos kirim<br />
                6. Bersedia untuk memberikan informasi kepada pelanggan mengenai harga Laundry Kiloan<br />
                7. Bersedia untuk menerapkan sistem poin kepada pelanggan<br />
                8. Bersedia memberikan kompensasi untuk setiap kemungkinan terjadinya seperti kehilangan pakaian atau kerusakan pakaian pada saat proses Laundry dilakukan<br />
                9. Agen tidak diperkenankan untuk melakukan kerjasama dengan pihak Laundry lainnya<br />
                10. Sebagai kompensasi atas kerjasama adalah sistem bagi hasil sebesar 5%, yang diperhitungkan dari setiap 7 hari<br />
                11. Status agen secara otomatis dicabut apabila melanggar kesepakatan yang telah ditetapkan dalam surat perjanjian kerjasama ataupun agen ingin mengundurkan diri
                </p>
            </div>
            <div class="card-action">
                <a href="index.php">HOME - MyLaundry</a>
            </div>
            </div>
        </div>
    </div>

    <!-- end body -->


    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end footer -->
</body>
</html>