<?php
// Cek apakah session sudah dimulai sebelum memanggil session_start()
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function timer() {
    $time = 1000;
    $_SESSION['timeout'] = time() + $time; // ✅ Tambahkan tanda kutip pada array key
}

function cek_login() {
    if (isset($_SESSION['timeout'])) { // ✅ Periksa apakah session timeout ada
        if (time() < $_SESSION['timeout']) {
            timer();
            return true;
        } else {
            unset($_SESSION['timeout']);
            return false;
        }
    } else {
        return false;
    }
}
?>
