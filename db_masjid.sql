-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2025 at 11:22 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int NOT NULL,
  `nama_donatur` varchar(255) NOT NULL,
  `jenis_donasi` varchar(100) NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `bukti_kwitansi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama_donatur`, `jenis_donasi`, `jumlah`, `bukti_kwitansi`, `created_at`) VALUES
(1, 'zakki', 'zakat', '1000000.00', NULL, '2025-03-13 05:55:21'),
(2, 'ghofar', 'infaq', '1000000.00', NULL, '2025-03-13 05:56:41'),
(3, 'aa', 'Zakat', '500000.00', '1741849647_Cuplikan layar 2025-01-20 103737.png', '2025-03-13 00:07:27'),
(4, 'mas', 'Wakaf', '100000.00', '1742220858_Cuplikan layar 2025-01-24 190921.png', '2025-03-17 07:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `jamaah`
--

CREATE TABLE `jamaah` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `tanggal_pemasukan` date NOT NULL,
  `jumlah_pemasukan` decimal(15,2) NOT NULL,
  `jumlah_pengeluaran` decimal(15,2) NOT NULL,
  `total_kas` decimal(15,2) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_admin`, `tanggal_pemasukan`, `jumlah_pemasukan`, `jumlah_pengeluaran`, `total_kas`, `detail`) VALUES
(1, 'zakki', '2025-02-01', '1000000.00', '100000.00', '900000.00', 'zakat fitra');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tanggal_bergabung` date DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alias` text NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `peta` text NOT NULL,
  `status_profil` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `peta`, `status_profil`) VALUES
(1, '0823232724274', 'MASJID JAMIâ€™ ADDAâ€™WAH ', 'admin@gmail.com', 'Jl. Bandung Baru, Adi Luwih, Pringsewu Regency, Lampung 35674', '<p>Masjid Jama&#39;i Addawah Bandung Baru yang terletak di Jl. Bandung Baru, Adi Luwih, Pringsewu Regency, Lampung 35674 adalah salah satu masjid penting dan pusat kegiatan keagamaan di wilayah tersebut. Berikut adalah profil singkat tentang Masjid Jama&#39;i Addawah Bandung Baru, Masjid Jama&#39;i Addawah Bandung Baru merupakan tempat ibadah yang penting dan memiliki peran yang signifikan dalam kehidupan umat Muslim di wilayah Pringsewu. Dengan kegiatan keagamaan dan sosial yang diadakan, masjid ini menjadi pusat spiritual dan sarana pemberdayaan masyarakat setempat.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7945.932424215545!2d104.94688063859942!3d-5.267944273792061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e47343955555555%3A0x772d143110688807!2sMasjid%20Ad%20Da%2Cwah!5e0!3m2!1sen!2sid!4v1687593172065!5m2!1sen!2sid\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'pro'),
(7, '', 'BESARAN ZAKAT MAL', 'ZAKAT MAL', '', '<p>Cara Hitung Zakat Mal Cara menghitung zakat mal bisa dilakukan dengan menggunakan rumus 2,5% x jumlah harta yang tersimpan selama 1 tahun. Contohnya, di 1 Januari 2022, Anda memiliki emas sebanyak 200 g. Maka nisab harta kekayaan berupa Zakat mal = 200 g x 2,5% = 5 g Jadi, zakat mal yang harus Anda keluarkan yaitu sebesar 5 g atau setara dengan uang Rp4.690.495 (harga 1 g emas = Rp938.099). Selain menghitung sendiri, saat ini BAZNAS juga memiliki kalkulator zakat yang bisa membantu menghitung zakat mal secara online. Kalkulator zakat tersebut bisa diakses lewat tautan https://baznas.go.id/kalkulatorzakat.<br />\r\n&nbsp;</p>\r\n', '', 'hal'),
(8, '', 'Besaran Zakat Fitrah', 'ZAKAT FITRAH', '', '<p>Zakat fitrah wajib ditunaikan bagi setiap jiwa, dengan syarat beragama Islam, hidup pada saat bulan Ramadhan, dan memiliki kelebihan rezeki atau kebutuhan pokok untuk malam dan Hari Raya Idul Fitri. Besarannya adalah beras atau makanan pokok seberat 2,5 kg atau 3,5 liter per jiwa.</p>\r\n\r\n<p>Para ulama, diantaranya Shaikh Yusuf Qardawi telah membolehkan zakat fitrah ditunaikan dalam bentuk uang yang setara dengan 1 sha&rsquo; gandum, kurma atau beras. Nominal zakat fitrah yang ditunaikan dalam bentuk uang, menyesuaikan dengan harga beras yang dikonsumsi.</p>\r\n\r\n<p>Berdasarkan SK Ketua BAZNAS No. 07 Tahun 2023 tentang Zakat Fitrah dan Fidyah untuk wilayah Ibukota DKI Jakarta Raya dan Sekitarnya, ditetapkan bahwa nilai zakat fitrah setara dengan uang sebesar Rp45.000,-/hari/jiwa</p>\r\n', '', 'hal'),
(9, '', 'Sedakah Melalui Kami', 'Sedekah', '', '<p>Masjid Jama&#39;i Addawah Bandung Baru dengan senang hati mengumumkan bahwa kami sekarang menerima donasi melalui QRIS (Quick Response Code Indonesian Standard). QRIS adalah metode pembayaran digital yang mudah dan aman, memungkinkan Anda untuk berdonasi secara praktis dan efisien.</p>\r\n\r\n<p>QRIS memungkinkan para jamaah dan masyarakat luas untuk berdonasi langsung menggunakan ponsel pintar mereka. Caranya sangat sederhana. Cukup ikuti langkah-langkah di bawah ini:</p>\r\n\r\n<ol>\r\n	<li>Buka aplikasi pembayaran digital (seperti GoPay, OVO, DANA, LinkAja, dll.) di ponsel Anda.</li>\r\n	<li>Pilih menu &quot;Scan QR&quot; atau &quot;Bayar dengan QRIS&quot;.</li>\r\n	<li>Arahkan kamera ponsel Anda ke QR Code yang tersedia di Masjid Jama&#39;i Addawah Bandung Baru.</li>\r\n	<li>Verifikasi jumlah donasi yang ingin Anda berikan dan ikuti petunjuk di aplikasi pembayaran digital untuk menyelesaikan pembayaran.</li>\r\n</ol>\r\n\r\n<p>Dengan menggunakan QRIS, Anda dapat berdonasi dengan cepat dan efisien. Setiap donasi Anda akan digunakan untuk mendukung berbagai kegiatan keagamaan, pemeliharaan fasilitas, dan pengembangan masjid kami.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/simasjid/1.jpg\" style=\"height:857px; width:650px\" /></p>\r\n\r\n<p><strong>Berdonasi melalui Nomor Kontak 081279258145</strong></p>\r\n\r\n<p>Selain melalui QRIS, Anda juga dapat berdonasi dengan mengirimkan dana ke nomor kontak berikut: 081279258145. Nomor ini telah disediakan secara khusus untuk menerima donasi dari para jamaah dan pihak yang ingin memberikan kontribusi kepada Masjid Jama&#39;i Addawah Bandung Baru.</p>\r\n\r\n<p>Anda dapat menggunakan aplikasi pembayaran digital atau metode transfer bank untuk mengirimkan donasi Anda ke nomor kontak tersebut. Pastikan untuk mencantumkan tujuan donasi dengan jelas saat melakukan transfer.</p>\r\n\r\n<p>Masjid Jama&#39;i Addawah Bandung Baru sangat menghargai setiap kontribusi dan donasi yang diberikan. Semua donasi akan digunakan dengan penuh tanggung jawab dan akan membantu kami dalam menjalankan kegiatan keagamaan dan pengembangan masjid.</p>\r\n\r\n<p>Terima kasih atas dukungan dan partisipasi Anda dalam memajukan Masjid Jama&#39;i Addawah Bandung Baru. Semoga Allah SWT membalas kebaikan Anda dengan berlipat ganda. Jazakumullah khairan katsiran.</p>\r\n\r\n<p>Jika Anda memiliki pertanyaan lebih lanjut tentang donasi atau ingin mengetahui lebih lanjut tentang Masjid Jama&#39;i Addawah Bandung Baru, jangan ragu untuk menghubungi kami melalui nomor kontak yang telah disebutkan di atas.</p>\r\n', '', 'hal'),
(10, '', 'Struktur Organisasi', 'struktru organisasi', '', '<p>agagag</p>\r\n', '', 'halpro');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `th_terbit` year NOT NULL,
  `file_buku` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `th_terbit`, `file_buku`) VALUES
('B001', 'minhajul muslim', 'ustad', 'attaqwa', 2000, NULL),
('B001', 'minhajul muslim', 'ustad', 'attaqwa', 2000, NULL),
('B002', 'minhajul muslim', 'ustad', 'attaqwa', 2000, NULL),
('B003', 'minhajul muslim', 'ustad', 'attaqwa', 2000, NULL),
('B003', 'minhajul muslim', 'ustad', 'attaqwa', 2000, 'buku_1759203484.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_log` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jam_log` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `id_session`, `tgl_log`, `jam_log`) VALUES
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@yahoo.com', '8npkhmdrie3q9togu773oa4qrs', '2025-09-30', '05:37:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
