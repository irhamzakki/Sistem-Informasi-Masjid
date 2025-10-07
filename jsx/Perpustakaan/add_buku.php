<?php
include 'header.php';
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id_buku     = $_POST['id_buku'];
    $judul_buku  = $_POST['judul_buku'];
    $pengarang   = $_POST['pengarang'];
    $penerbit    = $_POST['penerbit'];
    $th_terbit   = $_POST['th_terbit'];

    // File upload
    $file_buku   = $_FILES['file_buku']['name'];
    $tmp_file    = $_FILES['file_buku']['tmp_name'];
    $folder      = "uploads/";

    $nama_baru = "";
    if (!empty($file_buku)) {
        $ext = strtolower(pathinfo($file_buku, PATHINFO_EXTENSION));
        $allowed = ['pdf'];

        if (in_array($ext, $allowed)) {
            $nama_baru = "buku_" . time() . "." . $ext;
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }
            move_uploaded_file($tmp_file, $folder . $nama_baru);
        } else {
            echo "<script>alert('Hanya file PDF yang diizinkan');</script>";
        }
    }

    // Simpan ke database pakai prepared statement
    $stmt = $koneksi->prepare("INSERT INTO tb_buku 
        (id_buku, judul_buku, pengarang, penerbit, th_terbit, file_buku) 
        VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $id_buku, $judul_buku, $pengarang, $penerbit, $th_terbit, $nama_baru);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data berhasil disimpan');
            window.location='index.php?page=MyApp/data_buku';
        </script>";
    } else {
        echo "<script>alert('Data gagal disimpan: " . $stmt->error . "');</script>";
    }
}
?>

<section class="content-header">
    <h1 class="text-center mb-4" style="font-family: 'Noto Serif', serif;">
        <i class="fa fa-plus text-success"></i> Tambah Data Buku
    </h1>
</section>

<section class="content">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Form Tambah Buku</h5>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label>ID Buku</label>
                    <input type="text" name="id_buku" class="form-control" 
                           placeholder="Masukkan ID unik buku" maxlength="20" required>
                </div>
                <div class="form-group mb-3">
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" 
                           placeholder="Masukkan judul buku" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" 
                           placeholder="Masukkan nama pengarang" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" 
                           placeholder="Masukkan penerbit" maxlength="255" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tahun Terbit</label>
                    <input type="number" name="th_terbit" class="form-control" 
                           placeholder="Contoh: 2025" min="1900" max="2099" required>
                </div>
                <div class="form-group mb-3">
                    <label>Upload File Buku (PDF)</label>
                    <input type="file" name="file_buku" class="form-control" accept="application/pdf">
                </div>
                <button type="submit" name="simpan" class="btn btn-success">
                    <i class="fa fa-check"></i> Simpan
                </button>
                <a href="index.php?page=MyApp/data_buku" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
