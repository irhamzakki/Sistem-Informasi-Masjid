<?php
include '../header.php';
include '../../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $koneksi->query("SELECT * FROM tb_buku WHERE id_buku='$id'");
    $data = $query->fetch_assoc();
}

if (isset($_POST['update'])) {
    $judul = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['th_terbit'];

    $sql = $koneksi->query("UPDATE tb_buku 
                            SET judul_buku='$judul', 
                                pengarang='$pengarang', 
                                penerbit='$penerbit', 
                                th_terbit='$tahun'
                            WHERE id_buku='$id'");

    if ($sql) {
        echo "<script>alert('Data berhasil diubah'); window.location='buku.php';</script>";
    }
}
?>

<section class="content-header py-3 mb-4 border-bottom">
  <h1 class="h3 text-primary"><i class="fa fa-edit"></i> Edit Buku</h1>
</section>

<section class="content">
    <div class="card shadow-lg">
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" value="<?php echo $data['judul_buku']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" value="<?php echo $data['pengarang']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?php echo $data['penerbit']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Tahun Terbit</label>
                    <input type="number" name="th_terbit" class="form-control" value="<?php echo $data['th_terbit']; ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
                <a href="perpustakaan1.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
