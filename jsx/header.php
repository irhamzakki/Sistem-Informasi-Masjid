<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Masjid At-Taqwa Muhammadiyah Jateng</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="tema/img/logo-1.png">
    <link rel="shortcut icon" href="tema/img/logo-1.png" type="image/png">
<head>
    <meta charset="utf-8">
    <title>Masjid At-Taqwa Muhammadiyah Jateng</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="tema/img/logo-1.png">
    <link rel="shortcut icon" href="tema/img/logo-1.png" type="image/png">

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="tema/lib/animate/animate.min.css" rel="stylesheet">
    <link href="tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="tema/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <style>
        body {
            margin: 0;
            background: linear-gradient(to right, #e3f2fd, #90caf9);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 260px;
            background: linear-gradient(180deg, #1976d2, #0d47a1);
            color: white;
            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.2);
            padding-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .sidebar .logo h5 {
            margin: 0;
            font-weight: bold;
        }

        .sidebar a {
            width: 90%;
            padding: 12px 20px;
            margin: 5px 0;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.2s ease;
            display: flex;
            align-items: center;
        }

        .sidebar a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .content {
            margin-left: 270px;
            padding: 20px;
        }

        footer {
            background: linear-gradient(to right, #01579b, #0288d1);
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
                padding: 10px 0;
                position: relative;
            }

            .content {
                margin-left: 0;
                margin-top: 80px;
            }

            .sidebar a {
                width: auto;
                padding: 10px 15px;
                font-size: 14px;
            }

            .sidebar .logo {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <img src="tema/img/logomasjid.png" alt="Logo">
            <h5>Masjid At-Taqwa</h5>
        </div>
        <a href="../index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="../Donasi/Ziswaf.php"><i class="fas fa-hand-holding-heart"></i> Ziswaf</a>
        <a href="../Pengurus/pengurus.php"><i class="fas fa-users-gear"></i> Data Pengurus</a>
        <a href="../Jamaah/jamaah.php"><i class="fas fa-user-group"></i> Data Jama'ah</a>
        <a href="../Perpustakaan/perpustakaan1.php"><i class="fas fa-file-invoice"></i> Perpustakaan</a>
        <a href="../logout.php"><i class="fas fa-right-from-bracket"></i> Logout</a>
    </div>

    <div class="content">
        <!-- Konten utama di sini -->
        <h1 style="font-family: 'Noto Serif', serif;">
            Selamat Datang di Dashboard Masjid At-Taqwa</h1>
    </div>


</body>

</html>
