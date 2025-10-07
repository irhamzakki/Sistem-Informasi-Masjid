<style>
    /* Pastikan body memiliki tinggi minimal 100vh agar footer tetap di bawah */
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    /* Konten utama agar fleksibel */
    .content {
        flex: 1;
    }

    /* Footer dengan gradasi */
    .footer-custom {
        background: linear-gradient(to right, #27ae60, #2c3e50); /* Hijau ke biru tua */
        color: white;
        padding: 20px 0;
        width: 100%;
    }
    
    .footer-custom a {
        color: whitesmoke; /* Warna putih asap untuk link */
        text-decoration: none;
        font-weight: 500;
    }
    
    .footer-custom a:hover {
        text-decoration: underline;
    }
</style>
    <!-- Footer Start -->
    <div class="container-fluid footer-custom text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Masjid At-Taqwa</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span>Powered by <a href="#">Kembali KeMasjid</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->