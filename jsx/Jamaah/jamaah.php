<?php
include '../header.php';
include '../../config/koneksi.php';

$conn = $koneksi; // langsung pakai koneksi
?>
<section class="content">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fa fa-users"></i> Daftar Jamaah</h5>
            <a href="add_jamaah.php" class="btn btn-light btn-sm">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover table-striped">
                    <thead class="bg-light text-center">
                        <tr>
                            <th>id</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>email</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 001;
                        $sql = $koneksi->query("SELECT * FROM Jamaah");
                        while ($data = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['no_hp']; ?></td>
                            <td class="text-center">
                                <a href="?page=MyApp/edit_pengurus&kode=<?php echo $data['id']; ?>" 
                                   class="btn btn-success btn-sm" title="Ubah">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="?page=jsx/hapus_pengurus&kode=<?php echo $data['id']; ?>" 
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

<?php include '../footer.php';?>