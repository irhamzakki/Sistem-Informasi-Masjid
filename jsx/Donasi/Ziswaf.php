<?php
include '../header.php';
include '../../config/koneksi.php';

$conn = $koneksi; // langsung pakai koneksi
?>
<section class="content-header py-3 mb-4 border-bottom">
  <div class="d-flex justify-content-between align-items-center flex-wrap">
    
    <!-- Judul -->
    <h1 class="h3 text-primary mb-0">
      <i class="fa fa-book me-2"></i> Data Donasi
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
                        <h5 class="mb-0"><i class="fa fa-database"></i> Daftar Donasi</h5>
                        <a href="get_donasi.php" class="btn btn-light btn-sm">
                                <i class="fa fa-plus"></i> Tambah Donasi
                        </a>
                </div>
                <div class="card-body">
                        <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover table-striped">
                                        <thead class="bg-light text-center">
                                                <tr>
                                                        <th>No</th>
                                                        <th>Nama Donatur</th>
                                                        <th>Jenis Donasi</th>
                                                        <th>Jumlah</th>
                                                        <th>Tanggal</th>
                                                        <th>Bukti Kwitansi</th>
                                                        <th>Aksi</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                $no = 1;
                                                $sql = $conn->query("SELECT * FROM Donasi ORDER BY created_at DESC");
                                                while ($data = $sql->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                        <td class="text-center"><?php echo $no++; ?></td>
                                                        <td><?php echo htmlspecialchars($data['nama_donatur']); ?></td>
                                                        <td><?php echo htmlspecialchars($data['jenis_donasi']); ?></td>
                                                        <td class="text-end"><?php echo number_format($data['jumlah'], 0, ',', '.'); ?></td>
                                                        <td class="text-center"><?php echo date('d-m-Y H:i', strtotime($data['created_at'])); ?></td>
                                                        <td class="text-center">
                                                                <?php if (!empty($data['bukti_kwitansi'])) { ?>
                                                                        <a href="uploads/kwitansi/<?php echo urlencode($data['bukti_kwitansi']); ?>" target="_blank" class="btn btn-info btn-sm">
                                                                                <i class="fa fa-download"></i> Download
                                                                        </a>
                                                                <?php } else { ?>
                                                                        <span class="badge bg-secondary">Belum ada file</span>
                                                                <?php } ?>
                                                        </td>
                                                        <td class="text-center">
                                                                <a href="?page=MyApp/edit_ziswaf&kode=<?php echo $data['id']; ?>" 
                                                                     class="btn btn-success btn-sm" title="Ubah">
                                                                        <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a href="?page=jsx/hapus_ziswaf&kode=<?php echo $data['id']; ?>" 
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
