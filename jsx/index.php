<?php
    include 'header.php';
?>
<div class="content">
    <h2>Dashboard Masjid At-Taqwa</h2>
    <p>Ringkasan informasi dan aktivitas terbaru.</p>

    <!-- Row untuk Card Statistik -->
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users"></i> Data Pengurus</h5>
                    <p class="card-text">Total: <strong id="">80</strong> Orang</p>
                </div>
            </div>
        </div> 

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-friends"></i> Data Jama'ah</h5>
                    <p class="card-text">Total: <strong id="totalJamaah">1200</strong> Orang</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-donate"></i> Total Donasi</h5>
                    <p class="card-text">Rp <strong id="totalDonasi">30.000.000</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row untuk Grafik & Tombol Aksi -->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Grafik Donasi Bulanan</h5>
                    <canvas id="donasiChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aksi Cepat</h5>
                    <button class="btn btn-primary w-100 mb-2" onclick="tambahPengurus()">
                        <i class="fas fa-plus"></i> Tambah Pengurus
                    </button>
                    <button class="btn btn-success w-100 mb-2" onclick="tambahJamaah()">
                        <i class="fas fa-user-plus"></i> Tambah Jama'ah
                    </button>
                    <button class="btn btn-warning w-100" onclick="bukaFormDonasi()">
                        <i class="fas fa-hand-holding-usd"></i> Tambah Donasi
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script JavaScript -->
<script>
    // Ambil data dari localStorage saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        if (localStorage.getItem("totalPengurus")) {
            document.getElementById("totalPengurus").innerText = localStorage.getItem("totalPengurus");
        }
        if (localStorage.getItem("totalJamaah")) {
            document.getElementById("totalJamaah").innerText = localStorage.getItem("totalJamaah");
        }
        if (localStorage.getItem("totalDonasi")) {
            document.getElementById("totalDonasi").innerText = formatRupiah(localStorage.getItem("totalDonasi"));
        }
    });

    // Fungsi Tambah Pengurus
    function tambahPengurus() {
        let totalPengurus = parseInt(localStorage.getItem("totalPengurus") || "15");
        totalPengurus += 1;
        localStorage.setItem("totalPengurus", totalPengurus);
        document.getElementById("totalPengurus").innerText = totalPengurus;
    }

    // Fungsi Tambah Jamaah
    function tambahJamaah() {
        let totalJamaah = parseInt(localStorage.getItem("totalJamaah") || "120");
        totalJamaah += 1;
        localStorage.setItem("totalJamaah", totalJamaah);
        document.getElementById("totalJamaah").innerText = totalJamaah;
    }

    // Fungsi Buka Form Tambah Donasi
    function bukaFormDonasi() {
        let namaDonatur = prompt("Masukkan Nama Donatur:");
        if (!namaDonatur) return;

        let jumlah = prompt("Masukkan Jumlah Donasi (Rp):");
        if (!jumlah || isNaN(jumlah) || jumlah <= 0) {
            alert("Masukkan jumlah yang valid!");
            return;
        }

        jumlah = parseInt(jumlah);
        let totalDonasi = parseInt(localStorage.getItem("totalDonasi") || "10000000");
        totalDonasi += jumlah;

        localStorage.setItem("totalDonasi", totalDonasi);
        document.getElementById("totalDonasi").innerText = formatRupiah(totalDonasi);

        alert(`Donasi sebesar Rp ${formatRupiah(jumlah)} telah ditambahkan!`);
    }

    // Fungsi untuk Format Rupiah
    function formatRupiah(angka) {
        return parseInt(angka).toLocaleString("id-ID");
    }
</script>

<?php
    include 'footer.php';
?>
