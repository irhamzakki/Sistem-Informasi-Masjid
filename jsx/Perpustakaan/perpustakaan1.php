<?php
include '../header.php';
include '../../config/koneksi.php';

$conn = $koneksi; // langsung pakai koneksi
?>
<section class="content-header py-3 mb-4 border-bottom">
  <div class="d-flex justify-content-between align-items-center flex-wrap">
    
    <!-- Judul -->
    <h1 class="h3 text-primary mb-0">
      <i class="fa fa-book me-2"></i> Data Buku
    </h1>

    <!-- Breadcrumb -->
    <!-- <ol class="breadcrumb mb-0 bg-transparent p-0">
      <li class="breadcrumb-item">
        <a href="index.php" class="text-decoration-none">
          <i class="fa fa-home"></i> <b>Si Perpustakaan</b>
        </a>
      </li>
      <li class="breadcrumb-item active">Data Buku</li>
    </ol> -->
    
  </div>
</section>


<!-- Main content -->
<section class="content">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fa fa-database"></i> Daftar Buku</h5>
            <a href="add_buku.php" class="btn btn-light btn-sm">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover table-striped">
                    <thead class="bg-light text-center">
                        <tr>
                            <th>No</th>
                            <th>ID Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Buku</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $koneksi->query("SELECT * FROM tb_buku");
                        while ($data = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo $data['id_buku']; ?></td>
                            <td><?php echo $data['judul_buku']; ?></td>
                            <td><?php echo $data['pengarang']; ?></td>
                            <td><?php echo $data['penerbit']; ?></td>
                            <td class="text-center"><?php echo $data['th_terbit']; ?></td>
                            <td class="text-center">
                                <?php if (!empty($data['file_buku'])) { ?>
                                    <a href="uploads/<?php echo $data['file_buku']; ?>" target="_blank" class="btn btn-info btn-sm">
                                        <i class="fa fa-download"></i> Download
                                    </a>
                                <?php } else { ?>
                                    <span class="badge bg-secondary">Belum ada file</span>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <a href="edit_buku.php?id=<?php echo $data['id_buku']; ?>" 
                                class="btn btn-success btn-sm" title="Ubah">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="del_buku.php?id=<?php echo $data['id_buku']; ?>" 
                                class="btn btn-danger btn-sm" 
                                onclick="return confirm('Yakin ingin menghapus data ini?')" 
                                title="Hapus">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
