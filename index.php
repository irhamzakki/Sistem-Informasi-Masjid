<? include"config/koneksi.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Favicon -->
    <link href="tema/img/logo-1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fo nts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

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
    <link href="tema/css/coba.css" rel="stylesheet">
</head>

<?php include "menu.php";?>


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="tema/img/masjid-5.JPG" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                                <p class="fs-2 text-white"><b></b></p>
                                <h4 class="fs-2 text-white mb-5 animated slideInRight">
                                <!-- <a href="xxx.php?module=tentang&id_profil=9" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">BERAMAL</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100" src="tema/img/sampingmasjid.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                                <!-- <p class="fs-2 text-white">Welcome to Masjid At-Taqwa</p>
                                <h1 class="fs-2 text-white mb-5 animated slideInRight">
                                    "Barangsiapa membangun masjid karena Allah, maka Allah akan membangunkan untuknya rumah di surga."
                                </h1> -->
                                <!-- <a href="xxx.php?module=tentang&id_profil=10" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">DONASI SEKARANG</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="w-100" src="tema/img/dalammasjid.png" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                                <!-- <p class="fs-2 text-white">Welcome to Masjid At-Taqwa</p>
                                <h1 class="fs-2 text-white mb-5 animated slideInRight">
                                    "Sedekah tidak akan mengurangi hartamu, tetapi justru akan melipatgandakannya."
                                </h1> -->
                                <!-- <a href="xxx.php?module=tentang&id_profil=11" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">SEDEKAH</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

    <!-- Carousel End -->


    <!-- About Pengurus -->
    <style>
        .main-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }
        .left-image {
            background-image: url('tema/img/masjid-6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            flex: 1 1 50%;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .right-content {
            flex: 1 1 50%;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .team-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .team-member {
            text-align: center;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .team-member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 10px;
        }
        .team-member h4 {
            font-size: 16px;
            font-weight: bold;
            margin: 5px 0;
        }
        .team-member p {
            font-size: 14px;
            color: #555;
            margin: 0;
        }
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }
            .left-image, .right-content {
                flex: 1 1 100%;
            }
        }
    </style>

    <div class="container">
        <div class="main-container">
            <!-- Bagian kiri untuk gambar besar -->
            <div class="left-image"></div>

            <!-- Bagian kanan untuk pengurus -->
            <div class="right-content">
                <p class="section-title bg-white text-start text-primary pe-3">Tentang Pengurus</p>
                <div class="team-section">
                    <!-- Pengurus 1 -->
                    <div class="team-member">
                        <img src="tema/img/nurohim.png" alt="Nama Pengurus">
                        <h4>Nurohim</h4>
                        <p>Ketua</p>
                    </div>
                    <!-- Pengurus 2 -->
                    <div class="team-member">
                        <img src="tema/img/riski.png" alt="Nama Pengurus">
                        <h4>Riski Ramadhan</h4>
                        <p>Sekretaris</p>
                    </div>
                    <!-- Pengurus 3 -->
                    <div class="team-member">
                        <img src="tema/img/muzakki.jpg" alt="Nama Pengurus">
                        <h4>Irham Ghoffar</h4>
                        <p>Bendahara</p>
                    </div>
                    <!-- Pengurus 4 -->
                    <div class="team-member">
                        <img src="tema/img/nurohim.png" alt="Nama Pengurus">
                        <h4>Nurohim</h4>
                        <p>Koord Acara</p>
                    </div>
                    <!-- Pengurus 5 -->
                    <div class="team-member">
                        <img src="tema/img/riski.png" alt="Nama Pengurus">
                        <h4>Riski Ramadhan</h4>
                        <p>Koord Konsumsi</p>
                    </div>
                    <!-- Pengurus 6 -->
                    <div class="team-member">
                        <img src="tema/img/muzakki.jpg" alt="Nama Pengurus">
                        <h4>Irham Ghoffar</h4>
                        <p>Koord Media</p>
                    </div>
                    <!-- Pengurus 7 -->
                    <div class="team-member">
                        <img src="tema/img/nurohim.png" alt="Nama Pengurus">
                        <h4>Nurohim</h4>
                        <p>Koord Perlengkapan</p>
                    </div>
                    <!-- Pengurus 8 -->
                    <div class="team-member">
                        <img src="tema/img/riski.png" alt="Nama Pengurus">
                        <h4>Riski Ramadhan</h4>
                        <p>Koord</p>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="pengurus.php" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>


    <!-- vidio masjid unggulan  -->
    <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Masjid Attaqwa</p>
                    <h1 class="mb-5">Profil Masjid</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="video-container">
                            <video controls class="w-100 rounded shadow">
                                <source src="tema/img/tabligh.mp4" type="video/mp4">
                            </video>
                            <h3>Tabgligh Akbar & Peresmian Masjid Unggulan Nasional | 29 januari 2024</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- kegiatan harian -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Masjid Attaqwa</p>
                <h1 class="mb-5">Kegiatan Harian</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded text-center p-4 animated slideInLeft">
                        <i class="fa fa-praying-hands fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Sholat Berjamaah</h4>
                        <p>Sholat lima waktu berjamaah setiap hari.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded text-center p-4">
                        <i class="fa fa-book-open fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Kajian Rutin</h4>
                        <p>Kajian rutin setiap hari setelah sholat Maghrib.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded text-center p-4">
                        <i class="fa fa-child fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Kajian Ulumul Quran & Ulumul Hadist</h4>
                        <p>Setiap hari selasa dan hari jum'at di Pagi Hari</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="Pharian.php" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- masjid unggulan -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Masjid Attaqwa</p>
                <h1 class="mb-5">Masjid Unggulan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded text-center p-4">
                        <i class="fa fa-mosque fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Arsitektur Megah</h4>
                        <p>Desain arsitektur yang megah dan modern.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded text-center p-4">
                        <i class="fa fa-users fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Komunitas Aktif</h4>
                        <p>Komunitas yang aktif dalam berbagai kegiatan sosial dan keagamaan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded text-center p-4">
                        <i class="fa fa-hand-holding-heart fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Program Sosial</h4>
                        <p>Berbagai program sosial untuk membantu masyarakat sekitar.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded text-center p-4">
                        <i class="fa fa-users fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Komunitas Aktif</h4>
                        <p>Komunitas yang aktif dalam berbagai kegiatan sosial dan keagamaan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded text-center p-4">
                        <i class="fa fa-hand-holding-heart fa-3x text-primary mb-3"></i>
                        <h4 class="mb-3">Program Sosial</h4>
                        <p>Berbagai program sosial untuk membantu masyarakat sekitar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

    <!-- informasi -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">
                Masjid Attaqwa
            </p>
            <h1 class="mb-5">Informasi</h1>
            <?php
            $total_infaq = 1000000; 
            $total_zakat = 500000;
            $total_sedekah = 750000;            
            ?>
        </div>

        <!-- Tambahan: Kolom Total Infaq, Zakat, Sedekah -->
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light p-4 text-center rounded shadow">
                    <i class="fa fa-hand-holding-usd fa-3x text-primary mb-3"></i>
                    <h4 class="mb-3">Total Infaq</h4>
                    <h2 class="text-success">Rp <?= number_format($total_infaq, 0, ',', '.'); ?></h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light p-4 text-center rounded shadow">
                    <i class="fa fa-hand-holding-heart fa-3x text-primary mb-3"></i>
                    <h4 class="mb-3">Total Zakat</h4>
                    <h2 class="text-success">Rp <?= number_format($total_zakat, 0, ',', '.'); ?></h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light p-4 text-center rounded shadow">
                    <i class="fa fa-donate fa-3x text-primary mb-3"></i>
                    <h4 class="mb-3">Total Sedekah</h4>
                    <h2 class="text-success">Rp <?= number_format($total_sedekah, 0, ',', '.'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- menampilkan buku online -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <p class="section-title bg-light text-center text-primary px-3 rounded-pill shadow-sm d-inline-block">
        📚 Masjid Attaqwa
      </p>
      <h1 class="mb-4 fw-bold">Koleksi Buku Online</h1>
      <p class="text-muted">Nikmati berbagai bacaan Islami dan umum secara online. Klik tombol <b>Baca Buku</b> untuk membuka file PDF.</p>
    </div>

    <div class="row g-4">
      <?php
      include 'config/koneksi.php';
      $sql = $koneksi->query("SELECT * FROM tb_buku WHERE file_buku IS NOT NULL AND file_buku != '' ORDER BY id_buku DESC");
      while ($data = $sql->fetch_assoc()) {
      ?>
      <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
        <div class="card shadow-sm border-0 h-100 hover-card">
          <div class="card-body d-flex flex-column p-4">
            <h5 class="card-title text-primary fw-bold mb-2">
              <i class="fa fa-book me-2"></i><?php echo $data['judul_buku']; ?>
            </h5>
            <p class="card-text text-muted small mb-3">
              <i class="fa fa-user text-secondary"></i> <?php echo $data['pengarang']; ?><br>
              <i class="fa fa-building text-secondary"></i> <?php echo $data['penerbit']; ?><br>
              <i class="fa fa-calendar text-secondary"></i> <?php echo $data['th_terbit']; ?>
            </p>
            <a href="uploads/<?php echo $data['file_buku']; ?>" target="_blank" 
               class="btn btn-primary mt-auto rounded-pill">
              <i class="fa fa-book-open"></i> Baca Buku
            </a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<!-- CSS tambahan -->
<style>
  .hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .hover-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
  }
  .section-title {
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 1px;
  }
</style>


    <!-- jadwal sholat-->
    <div class="container-xxl py-5">
        <div class="container"></div>
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-primary px-3">
                    Masjid Attaqwa
                </p>
                <h1 class="mb-5">Jadwal Sholat</h1>
            </div>

            <div class="table-container mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <div class="text-center mb-4">
                    <p><strong><span class="tanggal-hari"></span></strong></p>
                    <p><span class="tanggal-hijriah"></span></p>
                </div>

                <table class="table table-striped table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Kota</th>
                            <th>Subuh</th>
                            <th>Matahari Terbit</th>
                            <th>Dzuhur</th>
                            <th>Ashar</th>
                            <th>Maghrib</th>
                            <th>Isya</th>
                            <th>Qiamulail</th>
                        </tr>
                    </thead>
                    <tbody id="jadwal-sholat">
                        <!-- Data akan dimasukkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function getNamaHari(indeks) {
            const hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            return hari[indeks];
        }

        // Mendapatkan tanggal hari ini
        const today = new Date();
        const namaHari = getNamaHari(today.getDay());
        const tanggalMasehi = today.toLocaleDateString("id-ID", {
            day: "numeric",
            month: "long",
            year: "numeric"
        });

        document.querySelector(".tanggal-hari").innerHTML = `${namaHari}, ${tanggalMasehi}`;

        fetch("https://api.aladhan.com/v1/gToH?date=" + today.getDate() + "-" + (today.getMonth() + 1) + "-" + today.getFullYear())
            .then(response => response.json())
            .then(data => {
                const hijriDate = `${data.data.hijri.day} ${data.data.hijri.month.en}, ${data.data.hijri.year} Hijriah`;
                document.querySelector(".tanggal-hijriah").innerHTML = hijriDate;
            })
            .catch(error => console.error("Gagal mengambil tanggal Hijriah:", error));

        const jadwal = [
            { kota: "Semarang", subuh: "04:38", terbit: "05:47", dzuhur: "11:56", ashar: "15:03", maghrib: "18:06", isya: "19:16", qiamulail: "01:09" }
        ];

        const tbody = document.getElementById('jadwal-sholat');
        jadwal.forEach((item) => {
            let row = `<tr>
                <td><a href="#" class="text-primary text-decoration-none">${item.kota}</a></td>
                <td>${item.subuh}</td>
                <td>${item.terbit}</td>
                <td>${item.dzuhur}</td>
                <td>${item.ashar}</td>
                <td>${item.maghrib}</td>
                <td>${item.isya}</td>
                <td>${item.qiamulail}</td>
            </tr>`;
            tbody.innerHTML += row;
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include "bawah.php"; ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="tema/lib/wow/wow.min.js"></script>
    <script src="tema/lib/easing/easing.min.js"></script>
    <script src="tema/lib/waypoints/waypoints.min.js"></script>
    <script src="tema/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="tema/lib/counterup/counterup.min.js"></script>
    <script src="tema/lib/parallax/parallax.min.js"></script>
    <script src="tema/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="tema/js/main.js"></script>
</body>

</html>
