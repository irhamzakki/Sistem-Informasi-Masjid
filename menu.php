
<? include"config/koneksi.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Masjid At-Taqwa Muhammadiyah Jateng</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="tema/img/logo-1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="tema/lib/animate/animate.min.css" rel="stylesheet">
    <link href="tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="tema/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="tema/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="tema/css/style.css" rel="stylesheet">
</head>
<style>
    .navbar-custom {
        background: linear-gradient(to right, #27ae60, #2c3e50);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .custom-logo {
        width: 60px;
        height: auto;
        margin-right: 15px;
        border-radius: 10px;
    }

    .text-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .custom-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 22px;
        color: #fff;
        margin-bottom: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .custom-subtitle {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #ecf0f1;
        letter-spacing: 0.5px;
    }

    .navbar-custom .nav-link {
        color: #ecf0f1 !important;
        font-weight: 500;
        margin-left: 10px;
        transition: all 0.3s ease-in-out;
        position: relative;
    }

    .navbar-custom .nav-link::after {
        content: "";
        display: block;
        width: 0;
        height: 2px;
        background: #f1c40f;
        transition: width 0.3s;
        position: absolute;
        bottom: -5px;
        left: 0;
    }

    .navbar-custom .nav-link:hover::after {
        width: 100%;
    }

    .navbar-custom .nav-link:hover {
        color: #f1c40f !important;
    }

    .navbar-custom .dropdown-menu {
        background-color: #16a085;
        border: none;
        border-radius: 8px;
        margin-top: 10px;
    }

    .navbar-custom .dropdown-item {
        color: #fff !important;
        transition: background 0.3s;
    }

    .navbar-custom .dropdown-item:hover {
        background-color: #1abc9c;
    }

    .navbar-toggler {
        border: none;
        background-color: transparent;
        color: white;
        font-size: 1.2rem;
    }

    .navbar-toggler:focus {
        outline: none;
        box-shadow: none;
    }

    @media (max-width: 991.98px) {
        .navbar-brand {
            flex-direction: row;
            align-items: center;
        }

        .custom-title {
            font-size: 18px;
        }

        .custom-subtitle {
            font-size: 12px;
        }

        .navbar-nav {
            background-color: #16a085;
            border-radius: 10px;
            padding: 10px;
        }

        .navbar-nav .nav-link {
            margin: 5px 0;
        }
    }
</style>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top px-4 px-lg-5">
    <a href="index.php" class="navbar-brand">
        <img src="tema/img/logo-1.png" alt="Logo Masjid" class="custom-logo">
        <div class="text-container">
            <span class="custom-title">MASJID AT-TAQWA</span>
            <span class="custom-subtitle">Muhammadiyah Jawa Tengah</span>
        </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <i class="fas fa-bars text-white"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu">
                    <a href="tentang.php" class="dropdown-item">Tentang Kami</a>
                    <a href="jadwal.php" class="dropdown-item">Jadwal Sholat</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lazizmu</a>
                <div class="dropdown-menu">
                    <a href="zakat.php" class="dropdown-item">Zakat</a>
                    <a href="infaq.php" class="dropdown-item">Infaq</a>
                    <a href="#" class="dropdown-item">Sedekah</a>
                    <a href="#" class="dropdown-item">Wakaf</a>
                </div>
            </div>

            <a href="galeri.php" class="nav-item nav-link">Galeri</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a>
                <div class="dropdown-menu">
                    <a href="Pharian.php" class="dropdown-item">Program Harian</a>
                    <a href="Pmingguan.php" class="dropdown-item">Program Mingguan</a>
                    <a href="Pbulanan.php" class="dropdown-item">Program Bulanan</a>
                    <a href="Ptahunan.php" class="dropdown-item">Program Tahunan</a>
                </div>
            </div>

            <a href="login.php" class="nav-item nav-link"><i class="fas fa-user"></i> Login</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

