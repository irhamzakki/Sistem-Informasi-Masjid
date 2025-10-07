<?php 
if (file_exists('menu.php')) {
    include 'menu.php'; 
} 
?> <!-- Include Header -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Masjid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .content {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            padding: 20px;
            margin: 20px;
        }
        .content img {
            width: 250px;
            height: 250px;
            object-fit: cover;
        }
        .content .text {
            flex: 1;
            padding: 20px;
        }
        h2 {
            font-weight: bold;
            color: #343a40;
        }
        p {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        
        <div class="content flex-row-reverse">
            <img src="tema/img/dalammasjid.png" alt="gambar">
            <div class="text">
                <h2>Sejarah Masjid</h2>
                <p>Masjid adalah tempat ibadah umat Islam yang digunakan untuk melaksanakan salat, mengaji, serta berbagai kegiatan keagamaan lainnya. Kata "masjid" berasal dari bahasa Arab "sajada" yang berarti sujud, menunjukkan fungsinya sebagai tempat bersujud kepada Allah.</p>
            </div>
        </div>

        <div class="content">
            <img src="tema/img/sampingmasjid.jpg" alt="gambar">
            <div class="text">
                <h2>Profil Masjid</h2>
                <p>Masjid adalah tempat ibadah umat Islam yang digunakan untuk melaksanakan salat, mengaji, serta berbagai kegiatan keagamaan lainnya. Kata "masjid" berasal dari bahasa Arab "sajada" yang berarti sujud, menunjukkan fungsinya sebagai tempat bersujud kepada Allah.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corporis deleniti hic alias minima doloribus incidunt aut delectus a, mollitia perferendis fugiat doloremque voluptatibus repellendus deserunt nulla quaerat maiores quo pariatur assumenda harum asperiores. Optio, voluptates rem et delectus recusandae libero modi doloremque, necessitatibus reiciendis nobis saepe rerum blanditiis quibusdam enim molestias numquam error corporis accusantium mollitia consequatur ratione temporibus dolore quidem. Provident pariatur eaque doloribus veritatis fugit quia modi, optio debitis a assumenda accusamus expedita eius enim omnis libero fugiat quo laborum autem voluptatem consequuntur quam quibusdam deserunt. Sapiente sunt magni asperiores dolorem mollitia quia sit autem veniam dolores quisquam. Suscipit illum voluptatem amet blanditiis nesciunt numquam eos odit ratione consequuntur, voluptas ut debitis. Tenetur velit labore accusamus! Quos natus sunt omnis esse rerum? Quam voluptas ea architecto nihil. Nemo harum dolores libero blanditiis aliquid est perferendis excepturi odit nulla commodi labore, vitae totam quia molestias veniam debitis voluptates quam! Dolorem, ut mollitia itaque cumque sunt vitae repudiandae repellendus tempora. Autem, ex rerum? Necessitatibus reprehenderit molestias voluptas impedit magnam cum ut quisquam quaerat rem corporis consectetur asperiores eaque laborum, distinctio, itaque rerum deserunt optio officia ab vero quibusdam non ad voluptates. Perferendis ipsa beatae eveniet voluptates quis nesciunt iure.</p>
            </div>
        </div>

        <div class="content flex-row-reverse">
            <img src="tema/img/dalammasjid.png" alt="gambar">
            <div class="text">
                <h2>Sejarah Masjid</h2>
                <p>Masjid adalah tempat ibadah umat Islam yang digunakan untuk melaksanakan salat, mengaji, serta berbagai kegiatan keagamaan lainnya. Kata "masjid" berasal dari bahasa Arab "sajada" yang berarti sujud, menunjukkan fungsinya sebagai tempat bersujud kepada Allah.</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <?php include "bawah.php"; ?>