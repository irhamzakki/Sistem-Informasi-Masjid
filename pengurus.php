<?php include 'menu.php'; ?>
<style>
    .team-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .team-member {
        text-align: center;
        margin: 10px;
    }
    .team-member img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: block;
        margin: 0 auto;
    }
    .team-member h4 {
        font-size: 14px;
        font-weight: bold;
        margin-top: 5px;
    }
    .team-member p {
        font-size: 12px;
        margin: 0;
    }
    @media (max-width: 768px) {
        .main-container {
            flex-direction: column;
            text-align: center;
        }
        .left-image, .right-content {
            width: 100%;
        }
        .team-section {
            flex-direction: column;
        }
    }
</style>
<!-- Bagian kanan untuk pengurus -->
<div class="right-content">
    <p class="section-title bg-white text-start text-primary pe-3">Tentang Pengurus</p>
    <div class="team-section">
        <!-- Pengurus 1 -->
        <div class="team-member">
            <img src="tema/img/nurohim.png" alt="Nama Pengurus">
            <h4>nurohim</h4>
            <p>Ketua</p>
        </div>
        <!-- Pengurus 2 -->
        <div class="team-member">
            <img src="tema/img/riski.png" alt="Nama Pengurus">
            <h4>Riski ramadhan</h4>
            <p>Sekertaris</p>
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
            <h4>nurohim</h4>
            <p>Koord Acara</p>
        </div>
        <!-- Pengurus 5 -->
        <div class="team-member">
            <img src="tema/img/riski.png" alt="Nama Pengurus">
            <h4>Riski ramadhan</h4>
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
            <h4>nurohim</h4>
            <p>Koord Perlengkapan</p>
        </div>
        <!-- Pengurus 8 -->
        <div class="team-member">
            <img src="tema/img/riski.png" alt="Nama Pengurus">
            <h4>Riski ramadhan</h4>
            <p>Koord</p>
        </div>
        <div style="text-align: center;">
            <a href="#">lihat selengkapnya</a>
        </div>
    </div>
</div>
<?php include 'bawah.php'; ?>