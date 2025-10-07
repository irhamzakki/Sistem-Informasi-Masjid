<?php
include '../../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $koneksi->query("DELETE FROM tb_buku WHERE id_buku='$id'");

    if ($sql) {
        echo "<script>alert('Data berhasil dihapus'); window.location='perpustakaan1.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='perpustakaan1.php';</script>";
    }
}
?>
