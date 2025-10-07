<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Mingguan Masjid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Program Mingguan Masjid</h2>
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                        <th>Pembimbing</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Senin</td>
                        <td>19:00</td>
                        <td>Pengajian Umum</td>
                        <td>Ustadz Ahmad</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>19:00</td>
                        <td>Belajar Tajwid</td>
                        <td>Ustadzah Siti</td>
                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>12:30</td>
                        <td>Khutbah Jumat</td>
                        <td>Ustadz Ali</td>
                    </tr>
                    <tr>
                        <td>Minggu</td>
                        <td>08:00</td>
                        <td>Senam Sehat</td>
                        <td>Bapak Hadi</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-3 text-center">
                <a href="tambah_program.php" class="btn btn-success">Tambah Program</a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'bawah.php'; ?>