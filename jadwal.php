<?php include "menu.php"; ?>
    <style>
         * {
            font-family: Arial, sans-serif;
        }

        /* Background dengan overlay */
        body {
            background: url('tema/img/masjid-5.JPG') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Overlay gelap */
            z-index: -1;
        }


        .container {
            max-width: 900px;
            margin: auto;
            padding-top: 20px;
        }

        .header {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #37422A;
            margin-bottom: 10px;
        }

        .table thead {
            background-color: #247ba0;
            color: white;
            text-align: center;
        }

        .table tbody tr {
            text-align: center;
        }

        .location-icon {
            font-size: 18px;
            margin-right: 5px;
            color: #555;
        }

        .btn-back {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000; /* Agar tombol tidak tertutup elemen lain */
        }

        .btn-back button {
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Jadwal Sholat di Indonesia</h2>
    </div>

    <div class="table-container">
        <h5><span class="location-icon">📍</span>Jadwal Sholat - Kota Teratas di Indonesia</h5>
        <p><strong><span class="tanggal-hari"></span></strong></p>
        <p><span class="tanggal-hijriah"></span></p>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>KOTA</th>
                    <th>SUBUH</th>
                    <th>MATAHARI TERBIT</th>
                    <th>DZUHUR</th>
                    <th>ASHAR</th>
                    <th>MAGHRIB</th>
                    <th>ISYA</th>
                    <th>QIAMULAIL</th>
                </tr>
            </thead>
            <tbody id="jadwal-sholat">
                <!-- Data akan dimasukkan di sini -->
            </tbody>
        </table>
    </div>
</div>

<script>
    // Fungsi untuk mendapatkan nama hari dalam bahasa Indonesia
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

    // Menampilkan tanggal Masehi di halaman
    document.querySelector(".tanggal-hari").innerHTML = `${namaHari}, ${tanggalMasehi}`;

    // Mendapatkan tanggal Hijriah dari API Aladhan
    fetch("https://api.aladhan.com/v1/gToH?date=" + today.getDate() + "-" + (today.getMonth() + 1) + "-" + today.getFullYear())
        .then(response => response.json())
        .then(data => {
            const hijriDate = data.data.hijri.day + " " + data.data.hijri.month.en + ", " + data.data.hijri.year + " Hijriah";
            document.querySelector(".tanggal-hijriah").innerHTML = hijriDate;
        })
        .catch(error => console.log("Gagal mengambil tanggal Hijriah:", error));

    // Menampilkan data ke dalam tabel
    const jadwal = [
        { kota: "Jakarta", subuh: "04:49", terbit: "05:58", dzuhur: "12:06", ashar: "15:14", maghrib: "18:14", isya: "19:24", qiamulail: "01:16" },
        { kota: "Bandung", subuh: "04:45", terbit: "05:54", dzuhur: "12:03", ashar: "15:09", maghrib: "18:11", isya: "19:21", qiamulail: "01:13" },
        { kota: "Surabaya", subuh: "04:30", terbit: "05:39", dzuhur: "11:49", ashar: "14:54", maghrib: "17:58", isya: "19:08", qiamulail: "01:00" },
        { kota: "Medan", subuh: "05:28", terbit: "06:37", dzuhur: "12:39", ashar: "15:56", maghrib: "18:40", isya: "19:50", qiamulail: "01:32" },
        { kota: "Semarang", subuh: "04:38", terbit: "05:47", dzuhur: "11:56", ashar: "15:03", maghrib: "18:06", isya: "19:16", qiamulail: "01:09" },
        { kota: "Yogyakarta", subuh: "04:41", terbit: "05:50", dzuhur: "11:59", ashar: "15:06", maghrib: "18:09", isya: "19:19", qiamulail: "01:12" },
        { kota: "Denpasar", subuh: "05:43", terbit: "06:52", dzuhur: "12:00", ashar: "15:07", maghrib: "18:10", isya: "19:20", qiamulail: "01:13" },
        { kota: "Makassar", subuh: "04:17", terbit: "05:26", dzuhur: "11:36", ashar: "14:41", maghrib: "17:45", isya: "18:55", qiamulail: "00:47" },
        { kota: "Palembang", subuh: "05:00", terbit: "06:09", dzuhur: "12:17", ashar: "15:24", maghrib: "18:24", isya: "19:34", qiamulail: "01:26" },
        { kota: "Balikpapan", subuh: "04:06", terbit: "05:15", dzuhur: "11:25", ashar: "14:30", maghrib: "17:34", isya: "18:44", qiamulail: "00:36" }
    ];

    const tbody = document.getElementById('jadwal-sholat');
    jadwal.forEach((item) => {
        let row = `<tr>
            <td><a href="#">${item.kota}</a></td>
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
