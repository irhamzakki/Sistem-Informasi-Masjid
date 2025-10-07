<?php
include '../header.php';
include '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id     = $_POST['id'] ?? '';
    $nama   = $_POST['nama'] ?? '';
    $no_hp  = $_POST['no_hp'] ?? '';
    $email  = $_POST['email'] ?? '';
    $alamat = $_POST['alamat'] ?? '';

    // Simpan ke database pakai prepared statement
    $stmt = $koneksi->prepare("INSERT INTO jamaah (id, nama, no_hp, email, alamat) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $id, $nama, $no_hp, $email, $alamat);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data Jama'ah berhasil disimpan');
            window.location='index.php?page=MyApp/data_jamaah';
        </script>";
    } else {
        echo "<script>alert('Data gagal disimpan: {$stmt->error}');</script>";
    }
}
?>

<section class="content-header">
    <h1 class="text-center mb-4" style="font-family: 'Noto Serif', serif;">
        <i class="fa fa-plus text-success"></i> Tambah Data jamaah
    </h1>
</section>

<section class="content">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Form Tambah jamaah</h5>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group mb-3">
                    <label>ID</label>
                    <input type="text" name="id" class="form-control" 
                           placeholder="Masukkan ID unik" maxlength="20" required>
                </div>
                <div class="form-group mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" 
                           placeholder="Masukkan nama" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <input type="alamat" name="alamat" class="form-control" 
                           placeholder="Masukkan alamat" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>email</label>
                    <input type="text" name="email" class="form-control" 
                           placeholder="Masukkan email" maxlength="20" required>
                </div>
                <div class="form-group mb-3">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" 
                           placeholder="Masukkan nomor HP" maxlength="20" required>
                </div>
                <button type="submit" name="simpan" class="btn btn-success">
                    <i class="fa fa-check"></i> Simpan
                </button>
                <a href="index.php?page=MyApp/data_pengurus" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
