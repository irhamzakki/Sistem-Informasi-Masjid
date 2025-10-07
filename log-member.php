<?php
include "config/koneksi.php";

// Hindari SQL Injection
$username = mysqli_real_escape_string($koneksi, $_POST['user']);
$pass     = md5($_POST['pass']);

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE BINARY username='$username' AND password='$pass'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

// Jika username dan password ditemukan
if ($ketemu > 0) {
    // Pastikan session hanya dimulai jika belum aktif
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include "config/timeout.php";

    // Periksa apakah kunci (key) tersedia sebelum mengaksesnya untuk menghindari error
    $_SESSION['anggota'] = isset($r['id_agt']) ? $r['id_agt'] : null;
    $_SESSION['user']    = isset($r['username']) ? $r['username'] : null;
    $_SESSION['nama']    = isset($r['nama_lengkap']) ? $r['nama_lengkap'] : null;
    $_SESSION['pass']    = isset($r['password']) ? $r['password'] : null;

    // Set session timeout
    $_SESSION['login'] = 1;
    timer();

    // Regenerasi session ID untuk keamanan
    $sid_lama = session_id();
    session_regenerate_id();
    $sid_baru = session_id();

    // Catat waktu login
    $tgl = date('Y-m-d'); // Format tanggal lebih standar (YYYY-MM-DD)
    $dt  = date('H:i:s'); // Format waktu lebih akurat (24 jam)

    // Update sesi pengguna di database
    mysqli_query($koneksi, "UPDATE users SET id_session='$sid_baru', tgl_log='$tgl', jam_log='$dt' WHERE username='$username'");

    // Redirect ke halaman utama
    header("Location: jsx/index.php?aksi=home");
    exit();
} else {
    // Redirect kembali ke halaman login dengan parameter kesalahan
    header("Location: login.php?salah=salah");
    exit();
}
?>
