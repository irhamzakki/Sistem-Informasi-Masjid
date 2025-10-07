<?php include "menu.php"; ?>
<style>
    body {
        background: linear-gradient(120deg, #43cea2 0%, #185a9d 100%);
        color: #fff;
        font-family: 'Poppins', 'Open Sans', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }
    .program-section {
        padding: 60px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .program-container {
        background: rgba(255,255,255,0.12);
        padding: 50px 40px;
        border-radius: 25px;
        box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
        backdrop-filter: blur(6px);
        border: 1px solid rgba(255,255,255,0.18);
        max-width: 900px;
        width: 100%;
        text-align: center;
    }
    .program-container h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        letter-spacing: 2px;
        color: #fff;
        text-shadow: 0 2px 8px rgba(0,0,0,0.18);
    }
    .program-description {
        margin: 20px auto 40px auto;
        font-size: 1.15rem;
        max-width: 700px;
        color: #e0f7fa;
        background: rgba(0,0,0,0.08);
        padding: 18px 24px;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .table-container {
        margin-top: 30px;
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        color: #fff;
        font-size: 1rem;
        background: rgba(255,255,255,0.08);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .table thead {
        background: linear-gradient(90deg, #43cea2 0%, #185a9d 100%);
        color: #fff;
        font-size: 1.1rem;
        letter-spacing: 1px;
    }
    .table th, .table td {
        padding: 14px 10px;
        text-align: center;
        border-bottom: 1px solid rgba(255,255,255,0.18);
    }
    .table tbody tr {
        transition: background 0.2s;
    }
    .table tbody tr:nth-child(even) {
        background: rgba(255,255,255,0.06);
    }
    .table tbody tr:hover {
        background: rgba(67,206,162,0.18);
    }
    .table th {
        border-right: 1px solid rgba(255,255,255,0.18);
    }
    .table th:last-child, .table td:last-child {
        border-right: none;
    }
    @media (max-width: 700px) {
        .program-container {
            padding: 30px 10px;
        }
        .program-description {
            padding: 12px 8px;
        }
        table th, table td {
            padding: 10px 5px;
            font-size: 0.95rem;
        }
    }
</style>

<body>
    <div class="program-section">
        <div class="program-container">
            <h2>Program Harian Masjid</h2>
            <p class="program-description">
                Program harian masjid merupakan kegiatan rutin yang bertujuan untuk meningkatkan keimanan dan kebersamaan umat.
                Dengan adanya shalat berjamaah, kajian, serta kegiatan sosial lainnya, diharapkan masjid menjadi pusat aktivitas keagamaan
                yang bermanfaat bagi seluruh jamaah.
            </p>
            <h3 style="margin-top:40px;font-weight:600;color:#e0f7fa;">Jadwal Kegiatan Harian</h3>
            <div class="table-container">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Kegiatan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>04:30 - 05:00</td><td>Shalat Subuh Berjamaah</td><td>Shalat subuh berjamaah diikuti dengan dzikir dan doa.</td></tr>
                        <tr><td>05:15 - 06:00</td><td>Mengaji Bersama</td><td>Kajian Al-Quran dan tafsir untuk meningkatkan pemahaman agama.</td></tr>
                        <tr><td>12:00 - 12:30</td><td>Shalat Dzuhur Berjamaah</td><td>Shalat berjamaah dilanjutkan dengan kultum singkat.</td></tr>
                        <tr><td>15:30 - 16:00</td><td>Shalat Ashar Berjamaah</td><td>Shalat berjamaah dan tadarus Al-Quran.</td></tr>
                        <tr><td>17:30 - 18:00</td><td>Shalat Maghrib Berjamaah</td><td>Shalat berjamaah dan doa bersama.</td></tr>
                        <tr><td>19:00 - 20:00</td><td>Kajian Islam</td><td>Kajian rutin dengan tema keislaman yang dibimbing oleh ustadz.</td></tr>
                        <tr><td>20:30 - 21:00</td><td>Shalat Isya dan Dzikir</td><td>Shalat berjamaah dan dzikir sebelum pulang.</td></tr>
                        <tr><td>21:30 - 22:00</td><td>Gotong Royong Kebersihan</td><td>Membersihkan area masjid untuk kenyamanan jamaah.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include "bawah.php"; ?>
