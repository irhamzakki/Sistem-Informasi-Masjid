<?php
include '../header.php';
include '../../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $jabatan    = $_POST['jabatan'];
    $email      = $_POST['email'];
    $no_hp      = $_POST['no_hp'];
    $tanggal_bergabung = $_POST['tanggal_bergabung'];
    $status     = $_POST['status'];

    // Simpan ke database pakai prepared statement
    $stmt = $koneksi->prepare("INSERT INTO pengurus 
        (id, nama, jabatan, email, no_hp, tanggal_bergabung, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $id, $nama, $jabatan, $email, $no_hp, $tanggal_bergabung, $status);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data berhasil disimpan');
            window.location='index.php?page=MyApp/data_pengurus';
        </script>";
    } else {
        echo "<script>alert('Data gagal disimpan: {$stmt->error}');</script>";
    }
}
?>

<section class="content-header">
    <h1 class="text-center mb-4" style="font-family: 'Noto Serif', serif;">
        <i class="fa fa-plus text-success"></i> Tambah Data Pengurus
    </h1>
</section>

<section class="content">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Form Tambah Pengurus</h5>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group mb-3">
                    <label>ID</label>
                    <input type="text" name="id" class="form-control" 
                           placeholder="Masukkan ID unik" maxlength="20" required>
                </div>
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" 
                           placeholder="Masukkan nama" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" 
                           placeholder="Masukkan jabatan" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" 
                           placeholder="Masukkan email" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" 
                           placeholder="Masukkan nomor HP" maxlength="20" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tanggal Bergabung</label>
                    <!-- diperbaiki name agar sama dengan variabel POST -->
                    <input type="date" name="tanggal_bergabung" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Tidak Aktif</option>
                    </select>
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
