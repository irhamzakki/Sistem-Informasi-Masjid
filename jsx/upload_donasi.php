<?php
include 'config.php';

// Pastikan folder uploads ada
$uploadDir = "uploads/";
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $namaDonatur = $_POST['namaDonatur'];
    $jenisDonasi = $_POST['jenisDonasi'];
    $jumlah = $_POST['jumlah'];
    $buktiKwitansi = "";

    // Cek apakah file diupload
    if (isset($_FILES['buktiKwitansi']) && $_FILES['buktiKwitansi']['error'] === UPLOAD_ERR_OK) {
        $fileName = time() . "_" . basename($_FILES["buktiKwitansi"]["name"]);
        $filePath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES["buktiKwitansi"]["tmp_name"], $filePath)) {
            $buktiKwitansi = $filePath;
        }
    }

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO donasi (nama_donatur, jenis_donasi, jumlah, bukti_kwitansi) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $namaDonatur, $jenisDonasi, $jumlah, $buktiKwitansi);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Donasi berhasil ditambahkan!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Gagal menambahkan donasi!"]);
    }

    $stmt->close();
}

$conn->close();
?>
