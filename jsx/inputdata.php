<?php include 'header.php';?>
<main class="content">
    <h2>Himpunan Zakat, Wakaf, dan Infaq</h2>
    <p>Kelola donasi dari para jama'ah dengan baik.</p>

    <!-- Form Tambah Donasi -->
    <form id="formDonasi" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="namaDonatur" class="form-label">Nama Donatur</label>
        <input type="text" class="form-control" id="namaDonatur" name="namaDonatur" required>
    </div>
    <div class="mb-3">
        <label for="jenisDonasi" class="form-label">Jenis Donasi</label>
        <select class="form-control" id="jenisDonasi" name="jenisDonasi" required>
            <option value="Zakat">Zakat</option>
            <option value="Wakaf">Wakaf</option>
            <option value="Infaq">Infaq</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah (Rp)</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
    </div>
    <!-- <div class="mb-3">
        <label for="buktiKwitansi" class="form-label">Bukti Kwitansi (JPG/PNG)</label>
        <input type="file" class="form-control" id="buktiKwitansi" name="buktiKwitansi" accept="image/*" required>
    </div> -->
    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
    </form>


    <!-- Tabel Daftar Donasi dengan Filter -->
</main>

<!-- Script JavaScript -->
<script>
    document.getElementById('formDonasi').addEventListener('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);

        fetch("upload_donasi.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                fetchData(); // Ambil data terbaru
                document.getElementById('formDonasi').reset();
            } else {
                alert("Gagal menyimpan donasi!");
            }
        })
        .catch(error => console.error("Error:", error));
    });

    function fetchData() {
        fetch("get_donasi.php") // Buat file PHP untuk mengambil data donasi
            .then(response => response.json())
            .then(data => {
                let tableBody = document.getElementById("dataDonasi");
                tableBody.innerHTML = "";

                data.forEach((donasi, index) => {
                    let newRow = document.createElement("tr");
                    newRow.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${donasi.nama_donatur}</td>
                        <td>${donasi.jenis_donasi}</td>
                        <td>Rp ${parseInt(donasi.jumlah).toLocaleString()}</td>
                        <td>
                            <a href="${donasi.bukti_kwitansi}" target="_blank">
                                <img src="${donasi.bukti_kwitansi}" width="50" height="50" alt="Bukti Kwitansi">
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="hapusDonasi(${donasi.id})">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </td>
                    `;
                    tableBody.appendChild(newRow);
                });
            })
            .catch(error => console.error("Gagal mengambil data:", error));
    }

    document.addEventListener("DOMContentLoaded", fetchData);
</script>



<?php include 'footer.php';?>