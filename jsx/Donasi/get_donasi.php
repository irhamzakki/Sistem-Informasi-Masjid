<?php
include '../header.php';
include '../../config/koneksi.php';

$conn = $koneksi; // langsung pakai koneksi
if (isset($_POST['simpan'])) {
    $nama_donatur = $_POST['nama_donatur'];
    $jenis_donasi = $_POST['jenis_donasi'];
    $jumlah       = $_POST['jumlah'];
    $created_at   = date("Y-m-d H:i:s");

    // File upload bukti kwitansi
    $file_kwitansi = $_FILES['bukti_kwitansi']['name'];
    $tmp_file      = $_FILES['bukti_kwitansi']['tmp_name'];
    $folder        = "uploads/kwitansi/";

    $nama_baru = "";
    if (!empty($file_kwitansi)) {
        $ext = strtolower(pathinfo($file_kwitansi, PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','pdf'];

        if (in_array($ext, $allowed)) {
            $nama_baru = "kwitansi_" . time() . "." . $ext;
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }
            move_uploaded_file($tmp_file, $folder . $nama_baru);
        } else {
            echo "<script>alert('Hanya file JPG, PNG, atau PDF yang diizinkan');</script>";
        }
    }

    // Insert data
    $stmt = $koneksi->prepare("INSERT INTO donasi (nama_donatur, jenis_donasi, jumlah, bukti_kwitansi, created_at) 
                               VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $nama_donatur, $jenis_donasi, $jumlah, $nama_baru, $created_at);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data donasi berhasil disimpan');
            window.location='index.php?page=data_donasi';
        </script>";
    } else {
        echo "<script>alert('Data gagal disimpan: " . $stmt->error . "');</script>";
    }
}
?>

<section class="content-header">
    <h1 class="text-center mb-4" style="font-family: 'Noto Serif', serif;">
        <i class="fa fa-hand-holding-heart text-primary"></i> Tambah Donasi
    </h1>
</section>

<section class="content">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Tambah Donasi</h5>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label>Nama Donatur</label>
                    <input type="text" name="nama_donatur" class="form-control" placeholder="Masukkan nama donatur" required>
                </div>
                <div class="form-group mb-3">
                    <label>Jenis Donasi</label>
                    <select name="jenis_donasi" class="form-control" required>
                        <option value="">-- Pilih Jenis Donasi --</option>
                        <option value="Uang">Uang</option>
                        <option value="Barang">Barang</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label>Jumlah (Rp)</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="Masukkan jumlah donasi" required>
                </div>
                <div class="form-group mb-3">
                    <label>Upload Bukti Kwitansi (JPG/PNG/PDF)</label>
                    <input type="file" name="bukti_kwitansi" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">
                    <i class="fa fa-check"></i> Simpan
                </button>
                <a href="index.php?page=data_donasi" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
