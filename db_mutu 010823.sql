-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 10:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mutu`
--

-- --------------------------------------------------------

--
-- Table structure for table `capaian`
--

CREATE TABLE `capaian` (
  `id_capaian` int(11) NOT NULL,
  `id_kamus` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `num` float NOT NULL,
  `denum` float NOT NULL,
  `plan` text NOT NULL,
  `do` text NOT NULL,
  `study` text NOT NULL,
  `action` text NOT NULL,
  `status` int(11) NOT NULL,
  `isdeleted` int(11) NOT NULL,
  `capaian` float NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capaian`
--

INSERT INTO `capaian` (`id_capaian`, `id_kamus`, `bulan`, `num`, `denum`, `plan`, `do`, `study`, `action`, `status`, `isdeleted`, `capaian`, `tgl_input`) VALUES
(1, 4, 'Juni', 90, 100, 'plan ', 'doo ', 'sstudy ', 'action', 0, 0, 90, '2023-07-01'),
(2, 4, 'Juli', 115, 115, 'plan ', 'doo ', 'sstudy ', 'action', 0, 0, 100, '2023-08-01'),
(3, 5, 'Juni', 5, 5, 'plan ', 'doo ', 'sstudy ', 'action', 0, 0, 100, '2023-07-01'),
(4, 5, 'Juli', 3, 5, 'plan ', 'doo ', 'sstudy ', 'action', 0, 0, 60, '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Administrator'),
(3, 'PIC', 'PIC Mutu'),
(4, 'PJ', 'Penanggung Jawab dan Validator Mutu');

-- --------------------------------------------------------

--
-- Table structure for table `kamus`
--

CREATE TABLE `kamus` (
  `id_kamus` int(11) NOT NULL,
  `nama_indikator` varchar(255) NOT NULL,
  `perspektif` varchar(100) NOT NULL,
  `sasaran_strategis` varchar(255) NOT NULL,
  `bobot_kpi` varchar(4) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `definisi` text NOT NULL,
  `numerator` varchar(255) NOT NULL,
  `denumerator` varchar(255) NOT NULL,
  `formula` text NOT NULL,
  `inklusi` text NOT NULL,
  `eksklusi` text NOT NULL,
  `tipe_indikator` varchar(20) NOT NULL,
  `sumber_data` varchar(255) NOT NULL,
  `sampel` varchar(5) NOT NULL,
  `rencana_analisis` varchar(100) NOT NULL,
  `wilayah_pengamatan` varchar(255) NOT NULL,
  `metode_pengumpulan` varchar(100) NOT NULL,
  `penanggung_jawab` varchar(100) NOT NULL,
  `pengumpul_data` varchar(100) NOT NULL,
  `frekuensi` varchar(10) NOT NULL,
  `periode_pelaporan` varchar(20) NOT NULL,
  `rencana_penyebaran` text NOT NULL,
  `formulir_pengumpulan` varchar(255) NOT NULL,
  `target_ke_n` int(11) NOT NULL,
  `target_ke_n1` int(11) NOT NULL,
  `target_ke_n2` int(11) NOT NULL,
  `target_ke_n3` int(11) NOT NULL,
  `target_ke_n4` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamus`
--

INSERT INTO `kamus` (`id_kamus`, `nama_indikator`, `perspektif`, `sasaran_strategis`, `bobot_kpi`, `alasan`, `definisi`, `numerator`, `denumerator`, `formula`, `inklusi`, `eksklusi`, `tipe_indikator`, `sumber_data`, `sampel`, `rencana_analisis`, `wilayah_pengamatan`, `metode_pengumpulan`, `penanggung_jawab`, `pengumpul_data`, `frekuensi`, `periode_pelaporan`, `rencana_penyebaran`, `formulir_pengumpulan`, `target_ke_n`, `target_ke_n1`, `target_ke_n2`, `target_ke_n3`, `target_ke_n4`, `id_user`, `id_jenis`) VALUES
(1, 'Persentase Tindak Lanjut Penyelesaian Permasalahan Lingkup Bidang Medik Yang Ditindaklanjuti < 3 X 24 Jam (100%)', 'Pengembangan Personil & Organisasi', 'Terselenggaranya pelayanan di Bidang Medik yang cepat tanggap dan responsif', '100%', 'High Risk, High cost, High Volume', 'Persentase tindak lanjut penyelesaian permasalahan lingkup Bidang Medik yang ditindaklanjuti < 3 x 24 jam adalah persentase dari jumlah permasalahan di lingkup Bidang Medik yang  telah ditindaklanjuti dalam waktu kurang dari 72 jam ( <3 x 24 jam ) terhadap seluruh permasalahan di lingkup Bidang Medik yang harus ditindaklanjuti. \r\nPemasalahan lingkup Bidang Medik dapat berupa permasalahan layanan, usulan kebutuhan, usulan perbaikan, termasuk surat masuk yang perlu ditindaklanjuti segera dan lain sebagainya yang terkait dengan upaya pemenuhan kualitas pelayanan di lingkup Bidang Medik. \r\nTindaklanjut dalam hal ini baik berupa koordinasi, kolaborasi, usulan pengadaan, usulan perbaikan, jawaban nota dinas, atau lainnya sesuai dengan kategori penyelesaiannya.\r\nKategori penyelesaian masalah : Jangka Pendek, Jangka Menengah dan Jangka Panjang\r\n', 'jumlah permasalahan di lingkup Bidang Medik yang telah ditindaklanjuti dalam waktu kurang dari 72 jam ( <3 x 24 jam )', 'Jumlah seluruh permasalahan di Lingkup Bidang Medik yang harus ditindaklanjuti', '(Jumlah permasalahan di lingkup Bidang Medik yang telah ditindaklanjuti dalam waktu kurang dari 72 jam ( <3 x 24 jam) ÷ Jumlah seluruh permasalahan di Lingkup Bidang Medik yang harus ditindaklanjuti) x 100%', 'Pemasalahan lingkup Bidang Medik dapat berupa permasalahan layanan, usulan kebutuhan, usulan perbaikan, termasuk surat masuk yang perlu ditindaklanjuti segera dan lain sebagainya yang terkait dengan upaya pemenuhan kualitas pelayanan di lingkup Bidang Medik.', 'Surat masuk yang tidak harus ditindaklanjuti atau permasalahan di luar Unit lingkup Bidang Medik.', ' ', 'Rekapitulasi Surat Masuk, Rekapitulasi Usulan Kebutuhan, Rekapitulasi Usulan Perbaikan, Rekapitulasi Pengaduan/Komplain', 'Tidak', 'Diagram Garis', ' ', 'Concurrent', 'Kepala Bidang Medik', 'PIC Mutu Bidang Medik', 'Bulanan', 'Setiap Bulan', 'Internal            : Performance board/Laporan Jaga/Rapat internal/Morning Briefing/Lainnya........., setiap rapat ruangan\r\nPimpinan RS   :                                             /setiap bulan\r\nPihak Terkait   : Komite Mutu                   /setiap Tgl 5\r\nPublik              :                                            /setiap...\r\n', ' ', 100, 100, 100, 100, 100, 0, 3),
(2, 'Pengisian Dokumentasi Asuhan Keperawatan Terisi Lengkap (100%)', 'Proses Bisnis Internal', '-', '-', 'Bad Performance', '-	Dokumentasi keperawatan adalah dokumentasi proses asuhan keperawatan mulai dari, pengkajian, perumusan diagnosa, pembuatan intervensi, implementasi dan evaluasi asuhan keperawatan.\r\n-	Dokumentasi askep lengkap adalah dokumentasi askep yang terisi semua sesuai dengan aturan atau kebijakan yang berlaku di RSJ Prov. Jabar\r\n', 'Jumlah dokumentasi askep yang terisi lengkap', 'Jumlah seluruh dokumentasi askep', '(Jumlah dokumentasi askep yang terisi lengkap ÷ Jumlah seluruh dokumentasi askep ) x 100%', 'Dokumentasi asuhan keperawatan pasien', 'Dokumentasi asuhan keperawatan rawat jalan', 'Outcome', 'Rekam medik pasien', 'Ya', 'Diagram Garis, Diagram Batang', 'Ruang perawatan rawat inap', 'Concurrent', 'Pengumpul data Bidang Keperawatan', 'Pengumpul data Bidang Keperawatan', 'Bulanan', 'Bulanan', 'Internal : laporan ke Komite Mutu dan Direktur', '-', 100, 100, 100, 100, 100, 0, 4),
(3, 'Persentase tindak lanjut penyelesaian permasalahan lingkup Bidang Penunjang yang ditindaklanjuti < 3 x 24 jam (100%)', 'Proses Bisnis Internal', 'Persentase waktu penyelesaian permasalahan pada Unit di bawah Bidang Penunjang ?3x24 jam sebesar 100%', '100%', 'Bad Performance', 'Persentase waktu penyelesaian permasalahan pada Unit di bawah Bidang Penunjang ?3x24 jam adalah persentase waktu penyelesaian permasalahan dari unit – unit di bawah Bidang Penunjang baik berupa usulan kebutuhan, permohonan perbaikan, dan permasalahan lainnya yang terkait dengan upaya pemenuhan kualitas pelayanan unit-unit di bawah Bidang Penunjang yang disampaikan ke Bidang Penunjang baik secara langsung daru Unit - Unit di bawah Bidang Penunjang maupun melalui Unit lainnya, baik secara tertulis maupun lisan, yang ditelah ditindaklanjuti dan dilakukan penyelesaian oleh Bidang Penunjang dalam rentang waktu kurang dari atau sama dengan tiga kali dua puluh empat jam. Langkah tindaklanjut dan/ atau penyelesaian dalam hal ini baik berupa koordinasi, nota dinas tindaklanjut, usulan pengadaan, penyusunan SOP/ Pedoman, atau lainnya sesuai dengan kategori permasalahan yang ada.', 'Jumlah permasalahan pada Unit di bawah Bidang Penunjang yang ditindaklanjuti dan diselesaikan dalam waktu kurang dari/ sama dengan tiga kali dua puluh empat (?3x24) jam', 'Jumlah seluruh permasalahan pada Unit di bawah Bidang Penunjang', '(Jumlah permasalahan pada Unit di bawah Bidang Penunjang yang ditindaklanjuti dan diselesaikan dalam waktu kurang dari/ sama dengan tiga kali dua puluh empat (?3x24) jam  ÷ Jumlah seluruh permasalahan pada Unit di bawah Bidang Penunjang) x 100%', 'Permasalahan terkait dengan Unit - Unit pada Bidang Penunjang', 'Permasalahan yang tidak terkait dengan Unit - Unit pada Bidand Penunjang', 'Proses & Outcome', '-', 'Ya', 'Diagram Garis', 'Bidang Penunjang dan Unit - Unit terkait', 'Restrospektif', 'Kepala Bidang Penunjang', 'PIC Mutu Bidang Penunjang', 'Bulanan', 'Bulanan', 'Internal            : Performance board/ Rapat internal/ Morning Briefing/Lainnya......... Pimpinan RS   :                                        /setiap bulan Pihak Terkait  : Komite Mutu            /setiap Tgl 5 Publik                :                                       /setiap... Lainnya             ', '1. Logbook; 2. Buku ekspedisi;', 100, 100, 100, 100, 100, 5, 4),
(4, '1.	Persentase Ketepatan Waktu Penyelesaian Permohonan Pelepasan Informasi Medis ? 14 Hari Kerja sejak Berkas Lengkap (100%)', 'stakeholder', '-', '-', 'Bad Performance', 'Ketepatan waktu penyelesaian permohonan pelepasan informasi medis adalah ketepatan waktu untuk menyelesaikan permohonan berupa surat keterangan dirawat, VeRP, dan surat keterangan medis.', 'Jumlah permohonan informasi medis yang selesai', 'Jumlah permohonan informasi medis yang akan diselesaikan', '(Jumlah permohonan informasi medis yang selesai ÷ Jumlah permohonan informasi medis yang akan diselesaikan) x 100%', 'Waktu yang diperlukan sampai disposisi diterima', 'Kelengkapan berkas yang diserahkan pemohon', 'Proses & Outcome', 'Disposisi, Kelengkapan berkas pemohon', 'Tidak', 'Diagram Batang', '-', 'Restrospektif', 'Kepala Bagian Perencanaan dan Hukum', 'PIC Mutu Hukum', 'Bulanan', 'Bulanan', 'Internal           : Performance board/Laporan Jaga/Rapat internal/Morning Briefing/Lainnya........., setiap rapat ruangan Pimpinan RS  :                                             /setiap bulan Pihak Terkait  : Komite Mutu                   /setiap bulan Publik              :                                            /setiap... Lainnya           :', '-', 100, 100, 100, 100, 100, 4, 4),
(5, '2.	Persentase Pelaporan Monev Scorecard yang Tepat Waktu < Tanggal 5 (100%)', 'stakeholder', 'Tergambarnya informasi kinerja rumah sakit', '-', 'High Volume', 'Pelaporan Monev Scorecard adalah suatu bentuk penyampaian informasi dari hasil kegiatan, dibuat secara tertulis atau elektronik yang terdiri dari : 1) laporan kinerja pelayanan RS; 2) Laporan Kinerja keuangan berupa penyerapan anggaran dan pendapatan; 3) Laporan Mutu. Tepat waktu yaitu laporan dapat disampaikan dengan waktu yang ditetapkan pada unit terkait sesuai aturan.', 'Jenis laporan yang tepat waktu', 'Semua Laporan yang harus dibuat', '(Jumlah Jenis laporan yang tepat waktu ÷ Jumlah semua Laporan yang harus dibuat) x 100%', '-', '-', 'Struktur', 'Sub. Bagian Perencanaan, Evaluasi dan Pelaporan', 'Tidak', 'Diagram Garis', '-', 'Restrospektif', 'Kepala Bagian Perencanaan dan Hukum', 'PIC Mutu Perencanaan, Evaluasi dan Pelaporan', 'Bulanan', '3 Bulan', 'Internal : Rapat internal/Morning Briefing setiap hari  Pimpinan RS : melalui komite mutu per triwulan  Pihak Terkait : Laporan ke Komite mutu per Bulan Laporan ke Ka.Bagian Perencanaan dan Hukum per Bulan  Eksternal : Website, Kementrian Kesehatan dan Dinas Kesehatan', '-', 100, 100, 100, 100, 100, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_indikator`
--

CREATE TABLE `m_indikator` (
  `id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `urut` int(11) NOT NULL,
  `nama` text NOT NULL,
  `dimensi` text,
  `tujuan` text,
  `definisi` text,
  `inklusi` text,
  `eksklusi` text,
  `frekuensi` varchar(45) NOT NULL,
  `tipe_id` int(11) DEFAULT NULL,
  `periode_analisa` int(11) DEFAULT NULL,
  `num` text,
  `denum` text,
  `sumber_data` varchar(200) DEFAULT NULL,
  `standar` varchar(100) NOT NULL,
  `nama_pj` varchar(200) DEFAULT NULL,
  `stat` enum('Aktif','Tidak') NOT NULL DEFAULT 'Aktif',
  `formula` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_indikator`
--

INSERT INTO `m_indikator` (`id`, `unit_id`, `jenis_id`, `urut`, `nama`, `dimensi`, `tujuan`, `definisi`, `inklusi`, `eksklusi`, `frekuensi`, `tipe_id`, `periode_analisa`, `num`, `denum`, `sumber_data`, `standar`, `nama_pj`, `stat`, `formula`) VALUES
(1, 1, 1, 1, 'Kelengkapan Assessment Medis', NULL, 'Tergambarnya pemahaman dan kedisiplinan tenaga medis dalam melakukan pengkajian atau asessment medis pasien sebelum tindakan', 'Assessment medis pasien adalah proses terus menerus yang dinamis yang digunakan untyk mengumpulkan informasi dari keadaan fisik pasien, psikologis, sosial, dan riwayat kesehatan pasien sebagai bahan analisis informasi dan data untuk mengidentifikasi dan merencanakan kebutuhan pelayanan medis yang dilakukan saat pasien akan dilakukan tindakan', '', '', 'Harian', 1, 1, 'Jumlah assesment medis pasien IGD yang lengkap dalam waktu 24 jam', 'Jumlah seluruh pasien IGD', 'Rekam Medis', '100%', 'Ka.Instalasi IGD', 'Aktif', NULL),
(3, 1, 2, 2, 'Emergency Response Time ', NULL, 'Terselenggaranya pelayanan cepat, responsif dan mampu menyelamatkan pasien gawat darurat', 'kecepatan pelayanan dokter gawat darurat adalah kecepatan pasien dilayani sejak pasien datang sampai mendapatkan pelayanan dokter IGD', '', '', 'Harian', 1, 1, 'jumlah kumulatif waktu yang diperlukan sejak kedatangan pasien sampai dilayani dokter ( < 5 menit)', 'jumlah seluruh pasien IGD', 'Rekam Medis', '100%', 'Ka. Instalasi IGD', 'Aktif', NULL),
(5, 1, 2, 4, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(13, 2, 1, 5, 'Jumlah kunjungan perawatan saluran akar ganda sesuai dengan PPK', NULL, 'Terselenggaranya pelayanan yang tepat dan efektif sesuai prosedur bagi pasien dengan perawatan saluran akar ganda', 'Jumlah kunjungan sesuai dengan PPK Perawatan saluran akar ganda adalah jumlah kunjungan pasien untuk melakukan serangkaian tahapan PSA ganda mulai dari open akses, devitalisasi, dressing dan tumpat yang sesuai dengan prosedur yang telah dicantumkan pada PPK', '', '', 'Harian', 1, 1, 'Jumlah pasien yang perawatan saluran akar ganda yang kunjungannya sesuai dengan PPK (3 kali kunjungan) perawatan saluran akar ganda dalam satu bulan', 'Jumlah seluruh kunjungan pasien perawatan saluran akar ganda dalam satu bulan', 'rekam medis', '100%', 'ka.unit Konservasi', 'Aktif', NULL),
(15, 2, 2, 2, 'Waktu Tunggu Rawat Jalan', NULL, '', '', '', '', 'Harian', 1, 1, '< 60 menit', '', 'survey', '100%', 'Ka. Konservasi', 'Aktif', NULL),
(17, 2, 2, 4, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(19, 2, 2, 6, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(24, 3, 1, 4, 'Kepatuhan Pemakaian Alat Pelindung Diri', NULL, 'Perlindungan diri untuk mencegah penularan infeksi saat kontak dengan pasien', 'Alat pelindung diri adalah kelengkapan yang wajib digunakan saat bekerja sesuai bahaya dan risiko kerja untuk menjaga keselamatan petugas itu sendiri dan orang di sekelilingnya', '', '', 'Harian', 1, 1, 'Jumlah tindakan pada pasien petugas menggunakan APD lengkap dalam satu bulan', 'Jumlah tindakan pada pasien dalam satu bulan', 'Survey Pelayanan Bedah Mulut', '100%', 'Komite PPI', 'Aktif', NULL),
(26, 3, 2, 2, 'Waktu Tunggu Rawat Jalan', NULL, '', '', '', '', 'Harian', 1, 6, '< 60 menit', '', 'survey', '100%', 'Ka. bedah mulut', 'Aktif', NULL),
(31, 3, 2, 7, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(33, 3, 2, 9, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(60, 4, 1, 2, 'Waktu pelayanan rawat jalan poliklinik kedokteran gigi anak pasien anak', NULL, 'Meningkatkan efektifitas dan efisiensi dalam pelayanan pasien di poliklinik spesialis kedokteran gigi anak ', 'Poliklinik spesialis kedokteran gigi anak  adalah poliklinik pelayanan rawat jalan di rumah sakit yang dilayani oleh dokter spesialis kedokteran gigi anak', '', '', 'Harian', 1, 1, 'Jumlah pasien anak dengan pelayanan < 45 menit dalam satu bulan', 'Jumlah pasien anak dalam satu bulan', 'Rekam Medis', '90%', 'Ka.Unit KGA', 'Aktif', NULL),
(64, 4, 2, 2, 'Waktu Tunggu Rawat Jalan', NULL, '', '', '', '', 'Harian', 1, 1, '< 60 menit', '', 'survey', '100%', 'Ka. Kedokteran Gigi Anak', 'Aktif', NULL),
(67, 4, 2, 5, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(69, 4, 2, 7, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(72, 5, 1, 2, 'Ketersediaan alat (Alat Cetak dan MMR) dan bahan (Bahan Cetak)', NULL, 'Memperlancar proses tindakan pada pelayanan prosthodonsia', 'Alat medis adalah alat yang dipergunakan dalam bidang kedokteran dan medis. Fungsinya mulai dari pemeriksaan, pemeliharaan dan pengobatan. ', '', '', 'Harian', 1, 1, 'Jumlah tindakan unit pelayanan prosthodonsia dengan menggunakan alat MMR dalam satu bulan', 'Jumlah tindakan unit pelayanan prosthodonsia dalam satu bulan', 'unit pelayanan prostodonsia', '100%', 'Ka. Unit Prostodonsia', 'Aktif', NULL),
(75, 5, 2, 2, 'Waktu Tunggu Rawat Jalan', NULL, '', '', '', '', 'Harian', 1, 1, '< 60 menit', '', 'survey', '100%', 'Ka. Prostodonsia', 'Aktif', NULL),
(78, 5, 2, 5, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(80, 5, 2, 7, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(82, 6, 1, 1, 'Kepatuhan pemakaian Alat Pelindung Diri ', NULL, 'Perlindungan diri untuk mencegah penularan infeksi saat kontak dengan pasien', 'Alat pelindung diri adalah kelengkapan yang wajib digunakan saat bekerja sesuai bahaya dan risiko kerja untuk menjaga keselamatan petugas itu sendiri dan orang di sekelilingnya', '', '', 'Harian', 1, 1, 'Jumlah tindakan pada pasien petugas menggunakan APD lengkap dalam satu bulan', 'Jumlah tindakan pada pasien dalam satu bulan', 'Survey Pelayanan Penyakit Mulut', '100%', 'Komite PPI', 'Aktif', NULL),
(86, 6, 2, 2, 'Waktu Tunggu Rawat Jalan', NULL, '', '', '', '', 'Harian', 1, 1, '< 60 menit', '', 'survey', '100%', 'Ka. Penyakit Mulut', 'Aktif', NULL),
(89, 6, 2, 5, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(91, 6, 2, 7, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(95, 7, 1, 3, 'Ketersediaan alat medis tindakan scalling', NULL, 'Mengurangi angka penularan infeksi dari pasien – alat – pasien ', 'Alat medis adalah alat yang dipergunakan dalam bidang kedokteran dan medis. Fungsinya mulai dari pemeriksaan, pemeliharaan dan pengobatan. ', '', '', 'Harian', 1, 1, 'Jumlah tindakan scalling dengan menggunakan satu tip steril per pasien dalam satu bulan', 'Jumlah tindakan scalling pelayanan periodonsia dalam satu bulan', 'pelayanan periodonsia', '100%', 'ka. unit periodonsia', 'Aktif', NULL),
(97, 7, 2, 2, 'Waktu Tunggu Rawat Jalan', NULL, '', '', '', '', 'Harian', 1, 1, '< 60 menit', '', 'survey', '100%', 'Ka. Periodonsia', 'Aktif', NULL),
(102, 7, 2, 7, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(104, 8, 1, 1, 'Kepatuhan Pemakaian Alat Pelindung Diri', NULL, 'Perlindungan diri untuk mencegah penularan infeksi saat kontak dengan pasien', 'Alat pelindung diri adalah kelengkapan yang wajib digunakan saat bekerja sesuai bahaya dan risiko kerja untuk menjaga keselamatan petugas itu sendiri dan orang di sekelilingnya', '', '', 'Harian', 1, 1, 'Jumlah tindakan pada pasien petugas menggunakan APD lengkap dalam satu bulan', 'Jumlah tindakan pada pasien dalam satu bulan', 'Survey', '100%', 'Komite PPI', 'Aktif', NULL),
(107, 8, 2, 2, 'Waktu Tunggu Rawat Jalan', NULL, '', '', '', '', 'Harian', 1, 1, '< 60 menit', '', 'survey', '100%', 'Ka. Ortodonsia', 'Aktif', NULL),
(109, 8, 2, 4, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(111, 8, 2, 6, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(114, 9, 1, 2, 'Kepatuhan komunikasi efektif : Pemahaman staf terhadap read back process', NULL, 'Mengurangi terjadinya kesalahan dalam menerima dan melaksanakan pesan / perintah ', 'Pemahaman Read back adalah pemahaman tentang proses menulis dan membaca ulang kembali instruksi yang diberikan baik dari dokter gigi kepada staf ataupun kepada dokter gigi muda kepada staf.    ', '', '', 'Harian', 1, 1, 'Jumlah seluruh staf yang paham read back proses', 'Jumlah seluruh staf pada klinik integrasi', 'Survey', '100%', 'ka. Unit Klinik Integrasi', 'Aktif', NULL),
(115, 9, 1, 3, 'Peningkatan keamanan obat high alert : Kejadian tidak adanya label high alert pada obat high alert di unit kerja', NULL, 'Mencegah terjadinya penggunaan obat (high alert) yang tidak sesuai dengan prosedur', 'Obat high alert atau obat dengan kewaspadaan tinggi adalah obat-obat yang secara signifikan berisiko membahayakan pasien bila digunakan dengan salah satu pengelolaan yang kurang tepat', '', '', 'Harian', 1, 1, 'Jumlah kumulatif obat high alert yang diberi label', 'Jumlah seluruh obat high alert', 'Survey', '100%', 'Ka. Instalasi Farmasi', 'Aktif', NULL),
(121, 9, 5, 1, 'Kepatuhan Identifikasi Pasien', NULL, '', '', '', '', 'Harian', 1, 1, '', '', 'Rekam Medis', '100%', 'Ka. Unit Integrasi', 'Aktif', NULL),
(125, 9, 5, 5, 'Kepatuhan Cuci Tangan', NULL, '', '', '', '', 'Harian', 1, 1, '', '', 'Survey', '80%', 'Ka. Unit Integrasi', 'Aktif', NULL),
(127, 9, 2, 7, 'Kepuasan Pasien dan Keluarga', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(130, 10, 1, 2, 'Keberhasilan pelayanan rontgen', NULL, 'Tergambarnya efektifitas dan efisiensi pelayanan rontgen', 'Keberhasilan pelayanan rontgen adalah hasil foto radiografik yang dapat dibaca', '', '', 'Harian', 1, 1, 'Jumlah foto yang dapat dibaca dalam 1 bulan', 'Jumlah seluruh foto radiografik pada bulan tersebut', 'Hasil Rontgen', '100%', 'ka. Unit Radiologi', 'Aktif', NULL),
(131, 10, 2, 1, 'Kepatuhan Identifikasi Pasien', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '100%', NULL, 'Aktif', NULL),
(132, 10, 2, 2, 'Waktu Tunggu Pelayanan', NULL, '', '', '', '', 'Harian', 1, 1, '< 15 menit', '', 'Survey', '80%', 'ka. Unit Radiologi', 'Aktif', NULL),
(136, 11, 1, 1, 'Pelaksaan ekspertisi oleh Sp.PK', NULL, 'Pembacaan dan verifikasi hasil pemeriksaan lab klinik dilakukan oleh tenaga ahli untuk memastikan ketepatan diagnosis ', 'Pelaksanaan ekspertisi lap klinik adalah dokter spesialis patologi klinik yang mempunyai kewenangan untuk melakukan pembacaan hasil pemeriksaan lab klinik. ', '', '', 'Harian', 1, 1, 'Jumlah hasil lab klinik yang diekspertisi oleh Sp.PK', 'Jumlah seluruh hasil lab klinik', 'Hasil Pemeriksaan Laboratorium Klinik', '100%', 'Ka. Unit Lab Klinik', 'Aktif', NULL),
(138, 11, 2, 1, 'Kepatuhan Identifikasi Pasien', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '100%', NULL, 'Aktif', NULL),
(139, 11, 2, 2, 'Waktu Tunggu hasil pemeriksaan darah rutin', NULL, '', '', '', '', 'Harian', 1, 1, '< 4 jam', '', 'Hasil Pemeriksaan Lab', '100%', 'Ka. Laboratorium Klinik', 'Aktif', NULL),
(144, 12, 1, 1, 'Kelengkapan asesmen keperawatan', NULL, 'Tergambarnya kelengkapan pengisiann asesmen perawat', 'Asesmen Keperawatan  adalah tahapan dari proses dimana perawat mengevaluasi data pasien baik subjektif maupun objektif dalam usaha memperbaiki ataupun memelihara derajat kesehatan yang optimal.', '', '', 'Harian', 1, 1, 'Jumlah asesmen keperawatan yang lengkap dalam 24 jam', 'Jumlah seluruh pasien  ', 'rekam medis', '100%', 'Ka. Unit Oral Screening / Ka. Instalasi Rekam Medis', 'Aktif', NULL),
(145, 12, 1, 2, 'Kelengkapan Assessment Awal Medis', NULL, 'Tergambarnya tanggung jawab dokter dalam kelengkapan pengisian asesmen pasien di rekam rekam medis', 'Asesmen medis adalah suatu proses yang dilakukan secara sengaja, sistematis dan terencana untuk mendapatkan informasi, menganalisis, mengidentifikasi dan menatalaksana keadaan yang membawa seorang pasien datang untuk berobat ke rumah sakit. ', '', '', 'Harian', 1, 1, 'Jumlah asesmen medis lengkap dalam satu bulan', 'Jumlah total semua asesmen medis dalam satu bulan', 'Rekam Medis', '100%', 'Ka. Unit Oral Screening / Ka. instalasi Rekam Medis', 'Aktif', NULL),
(153, 13, 1, 1, 'Penulisan resep sesuai telaah resep', NULL, 'Tergambarnya efisiensi pelayanan obat kepada pasien', 'Telaah resep adalah cara mengkaji resep meliputi kejelasan tulisan resep, tepat obat, tepat dosis, tepat rute, tepat waktu, duplikasi, alergi, interaksi obat, berat badan pasien untuk pasien anak dan kontra indikasi lainnya ', '', '', 'Harian', 1, 1, 'Jumlah resep yang diambil sebagai sample yang sesuai telaah resep dalam satu bulan', 'Jumlah seluruh resep yang diambil sebagai sampel dalam satu bulan (n minimal: 50)', 'Resep', '100%', 'Ka. Instalasi Farmasi', 'Aktif', NULL),
(157, 13, 2, 3, 'Kepatuhan penggunaan formularium', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '95%', NULL, 'Aktif', NULL),
(162, 14, 1, 1, 'Kelengkapan catatan rekam medik 24 jam setelah pelayanan', NULL, 'Tergambarnya tanggung jawab dokter dalam kelengkapan informasi rekam medik.', 'Rekam medik yang lengkap adalah, rekam medik yang telah diisi lengkap oleh dokter dalam waktu < 24 jam setelah selesai pelayanan rawat jalan atau setelah pasien rawat diputuskan untuk pulang, yang meliputi identitas pasien, anamnesis, rencana asuhan, pelaksanaan asuhan, tindak lanjut dan resume\r\n', '', '', 'Harian', 1, 1, 'Jumlah rekam medik yang disurvey dalam 1 bulan yang diisi lengkap', 'Jumlah rekam medik yang disurvey dalam 1 bulan.', 'rekam medis', '100%', 'Ka. Instalasi Rekam Medis', 'Aktif', NULL),
(166, 14, 1, 5, 'Penyimpanan RM sesuai penjajaran', NULL, 'Tergambarnya penyimpanan Rekam Medis yang rapi dan sesuai urutan nomor RM atau penjajaran', 'Penyimpanan Rekam medis adalah tempat penyimpanan rekam medis yang tersusun sesuai dengan penjajaran yang disusun dan di atur oleh petugas Rekam Medis', '', '', 'Harian', 1, 1, 'Jumlah kejadian penyimpanan RM sesuai penjajaran', 'Jumlah hari dalam 1 bulan (n=30)', 'rekam medis', '100%', 'Ka. Instalasi Rekam Medis', 'Aktif', NULL),
(167, 14, 2, 1, 'Kepatuhan identifikasi pasien', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '100%', NULL, 'Aktif', NULL),
(170, 15, 1, 1, 'Baku mutu limbah cair', NULL, 'tergambarnya kepadulian rumah sakit terhadap keamanan limbah cair rumah sakit', 'Baku mutu adalah standar minimal pada limbah cair yang dianggap aman bagi kesehatan, yang merupakan abang batas yang di tolerir dan diatur dengan indikatar :\r\nBOD ( Biological oxygen Demand ) : 30 mg/ liter\r\nCOD (chenical oxygen Demand ) : 80 mg/liter\r\nTSS (total suspended Solid ) 30 mg/liter\r\nPH :6-9', '', '', 'Harian', 4, 1, 'hasil laborattorium pemeriksaan limbah cair rumah sakit yang sesuai dengan baku mutu dalam 1 bulan\r\nBOD < 30 mg/l , COD < 80 mg/l , TSS < 30 mg/l ,  PH 6-9 ', 'jumlah pemeriksaan limbah cair dalam  waktu 3 bulan', 'hasil pemeriksaan loboratorium', '90%', 'kepala IPRS', 'Aktif', NULL),
(173, 16, 1, 2, 'Ketepatan waktu pengembalian linen dari Instalasi Laundry RISA ', NULL, 'Tergambarnya pengendalian dan mutu pelayanan laundry ', 'Ketepatan waktu pengembalian linen adalah ketepatan penyediaan linen sesuai dengan ketentuan waktu yang ditetapkan ', '', '', 'Harian', 1, 1, 'Jumlah hari dalam satu bulan dengan penyediaan linen tepat waktu (< 4 hari)', 'Jumlah hari dalam satu bulan ', 'Buku register linen CSSD', '100%', 'Ka. CSSD', 'Aktif', NULL),
(178, 18, 1, 2, 'Kecepatan Waktu Menanggapi Kerusakan Alat', NULL, 'Tergambarnya Kecepatan dan ketanggapan dalam pemeliharaan alat', 'Kecepatan waktu menanggapi alat yang rusak adalah waktu yang dibutuhkan mulai laporan alat rusak diterima sampai dengan petugas melakukan pemeriksaan terhadap alat yang rusak untuk tindak lanjut perbaikan, maksimal dalam waktu 15 menit harus sudah ditanggapi', '', '', 'Harian', 1, 1, 'Jumlah laporan kerusakan alat yang ditanggapi kurang atau sama dengan 15 menit dalam satu bulan', 'Jumlah seluruh laporan kerusakan alat dalam satu bulan', 'Catatan Laporan Kerusakan Alat', '80%', 'Kepala IPRS', 'Aktif', NULL),
(181, 19, 1, 2, 'Kelengkapan laporan akuntabilitas kinerja', NULL, 'Tergambarnya kepedulian administrasi rumah sakit dalam menunjukkan akuntabilitas kinerja pelayanan. ', 'Akuntabilitas kinerja adalah perwujudan kewajiban rumah sakit untuk \r\nmempertanggungjawabkan keberhasilan/kegagalan pelaksanaan misi organisasi dalam mencapai tujuan dan sasaran yang telah ditetapkan melalui pertanggungjawaban secara periodik. Laporan akuntabilitas kinerja yang lengkap adalah laporan kinerja yang memuat pencapaian indikator-indikator yang ada pada SPM (Standar Pelayanan Minimal), indikator-indikator kinerja pada rencana strategik bisnis rumah sakit dan indikator-indikator kinerja yang lain yang dipersyaratkan oleh pemilik. Laporan akuntabilitas kinerja minimal 3 bulan sekali. \r\n', '', '', 'Harian', 1, 1, 'Laporan akuntabilitas kinerja yang lengkap dan dilakukan minimal 3 bulan dalam satu tahun ', 'Jumlah laporan akuntabilitas yang seharusnya disusun dalam satu tahun ', 'laporan ', '100%', 'Direktur RSIGM-SA', 'Aktif', NULL),
(184, 20, 1, 2, 'Kepatuhan proses dalam sterilisasi', NULL, 'terselenggaranya pelayanan sterilisasi oleh unit CSSD secara paripurna', 'sterilisasi adalah proses penghilangan semua jenis organisme hidup, dalam hal ini adalah mikroorganisme (protozoa, fungsi, bakteri, mycoplasma, virus) yang terdapat dalam suatu benda, dengan tahapan : 1. penerimaan alat kotor. 2. perendaman. 3. pencucian. 4. packing. 5. sterilisasi. 6. penyimpanan. 7. distribusi alat steril.', '', '', 'Harian', 1, 1, 'jumlah proses sterilisasi yang patuh sesuai prosedur selama 1 bulan', 'jumlah proses sterilisasi yang dilakukan selama 1 bulan', 'unit CSSD', '100%', 'Ka. CSSD', 'Aktif', NULL),
(185, 20, 1, 3, 'Re-circulation instrumen', NULL, 'tidak terjadi lagi kejadian kekurangan instrument steril karena alasan keterlambatan distribusi alat steril dari CSSD', 're-circulation instrument adalah proses sirkulasi alat kotor dari masing - masing unit ke CSSD kemudian kembali lagi ke unit dalam dalam keadaan steril', '', '', 'Harian', 1, 1, 'jumlah pengiriman alat steril dari CSSD ke unit 3 jam setelah alat penyerahan alat kotor dalam 1 bulan', 'jumlah total pengiriman alat steril dari CSSD ke unit dalam 1 bulan', 'unit CSSD', '100%', 'Ka. CSSD', 'Aktif', NULL),
(187, 20, 1, 5, 'Kepatuhan pengiriman alat kotor dari unit ke CSSD', NULL, 'mengurangi kejadian keterlambatan ketersediaan instrument steril di masing - masing unit', 'alat kotor adalah alat / instrument yang telah digunakan untuk melakukan tindakan', '', '', 'Harian', 1, 1, 'jumlah pengiriman alat kotor dari unit ke CSSD yang sesuai SOP dalam 1 hari\r\nPagi : 08:30 s/d 09:00 & Siang : 13:00 s/d 13.30', 'jumlah pengiriman alat kotor dari unit ke CSSD dalam 1 hari', 'unit cssd', '100%', 'Ka. CSSD', 'Aktif', NULL),
(190, 21, 1, 1, 'Kepatuhan pemasangan gelang/pita kuning', NULL, 'Mencegah terjadinya kesalahan dalam melakukan identifikasi pasien serta meningkatkan ketelitian dan kecocokan layanan dengan individu yang medapatkan layanan (Geriatri = Lansia)', 'Gelang identitas (pita kuning) adalah suatu penanda yang diberikan kepada pasien lansia (Geriatri) sebagai identifikasi pasien', '', '', 'Harian', 1, 1, 'Jumlah pasien geriatri yang terpasang gelang / pita kuning dalam satu  bulan', 'Jumlah semua pasien geriatric yang datang ke RSIGM', 'unit geriatri', '100%', 'ka. unit geriatri', 'Aktif', NULL),
(194, 21, 2, 3, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(199, 22, 1, 2, 'Kelengkapan informed concern bedah', NULL, 'Tergambarnya tanggungjawab staf professional pemberi asuhan kepada  pasien dalam kelengkapan pengisian informasi dalam catatan medis', 'Informed Concent adalah persetujuan yang diberikan pasien/keluarga  pasien  atas  dasar  penjelasan  mengenai  tindakan medik yang akan dilakukan terhadap pasien tersebut', '', '', 'Harian', 1, 1, 'Jumlah  pasien  yang  mendapat  tindakan  bedah  yang  disurvei  yang mendapat   informasi   lengkap   sebelum   memberikan   persetujuan tindakan bedah dalam 1 bulan', 'Jumlah seluruh pasien yang mendapat tindakan bedah yang disurvei dalam 1 bulan', 'Rekam Medis', '100%', 'ka. Instalasi Bedah / Ka. Rekam Medis', 'Aktif', NULL),
(200, 22, 1, 3, 'Kelengkapan informed concern anastesi', NULL, 'Tergambarnya tanggungjawab staf professional pemberi asuhan kepada  pasien dalam kelengkapan pengisian informasi dalam catatan medis', 'Informed Concent adalah persetujuan yang diberikan pasien/keluarga  pasien  atas  dasar  penjelasan  mengenai  tindakan medik yang akan dilakukan terhadap pasien tersebut', '', '', 'Harian', 1, 1, 'Jumlah  pasien  yang  mendapat  tindakan  bedah  yang  disurvei  yang mendapat   informasi   lengkap   sebelum   memberikan   persetujuan tindakan anesthesi dalam 1 bulan', 'Jumlah seluruh pasien yang mendapat tindakan anesthesi yang disurvei dalam 1 bulan', 'Rekam Medis', '100%', 'ka. Instalasi Bedah / Ka. Rekam Medis', 'Aktif', NULL),
(204, 22, 2, 3, 'Penundaan Operasi elektif Mayor', NULL, '', '', '', '', 'Harian', 1, 1, '2X24 jam', '', 'survey', '100%', 'Ka.Instalasi Bedah', 'Aktif', NULL),
(205, 22, 2, 4, 'Penundaan Operasi elektif Minor', NULL, '', '', '', '', 'Harian', 1, 1, '1X24 jam', '', 'Survey', '100%', 'Ka.Instalasi Bedah', 'Aktif', NULL),
(208, 22, 2, 7, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(212, 23, 1, 1, 'Kepatuhan pemakaian Alat Pelindung Diri', NULL, 'Perlindungan diri untuk mencegah penularan infeksi saat kontak dengan pasien', 'Alat pelindung diri adalah kelengkapan yang wajib digunakan saat bekerja sesuai bahaya dan risiko kerja untuk menjaga keselamatan petugas itu sendiri dan orang di sekelilingnya', '', '', 'Harian', 1, 1, 'Jumlah tindakan pada pasien petugas menggunakan APD lengkap dalam satu bulan', 'Jumlah tindakan pada pasien dalam satu bulan', 'Survey', '100%', 'Ka.Instalasi HIV/AIDS / PPI', 'Aktif', NULL),
(219, 23, 2, 5, 'Kepatuhan Cuci Tangan', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '80%', NULL, 'Aktif', NULL),
(224, 25, 1, 1, 'Waktu pengerjaan Plat Aktif', NULL, 'Terselenggaranya pelayanan pengerjaan plat aktif pada lab teknik gigi yang tepat waktu', 'Waktu pengerjaan plat aktif adalah waktu yang diperlukan untuk menyelesaikan pekerjaan plat aktif yang diberikan oleh dokter gigi / dokter gigi muda di lab teknik gigi RSIGM SA', '', '', 'Harian', 1, 1, 'Waktu pengerjaan Plat Aktif selesai 5 hari kerja', 'Total Waktu pengerjaan Plat Aktif di lab teknik gigi ', 'buku register lab teknik gigi', '100%', 'ka. laboratorium teknik gigi', 'Aktif', NULL),
(228, 25, 1, 2, 'Waktu pengerjaan Gigi Tiruan Lengkap', NULL, 'Terselenggaranya pelayanan pengerjaan gigi tiruan lengkap pada lab teknik gigi yang tepat waktu', 'Waktu pengerjaan gigi tiruan lengkap adalah waktu yang diperlukan untuk menyelesaikan pekerjaan gigi tiruan lengkap yang diberikan oleh dokter gigi / dokter gigi muda di lab teknik gigi RSIGM SA', '', '', 'Harian', 1, 1, 'Waktu pengerjaan gigi tiruan lengkap selesai 7 hari kerja', 'Total Waktu pengerjaan gigi tiruan lengkap di lab teknik gigi ', 'buku register lab teknik gigi', '100%', 'Ka.Lab Teknik Gigi', 'Aktif', NULL),
(229, 25, 1, 3, 'Waktu Pengerjaan Gigi Tiruan Cekat/GTC', NULL, 'Terselenggaranya pelayanan pengerjaan GTC pada lab teknik gigi yang tepat waktu', 'Waktu pengerjaan GTC adalah waktu yang diperlukan untuk menyelesaikan pekerjaan GTC yang diberikan oleh dokter gigi / dokter gigi muda di lab teknik gigi RSIGM SA', '', '', 'Harian', 1, 1, 'Waktu pengerjaan GTC selesai 7 hari kerja', 'Total Waktu pengerjaan GTC di lab teknik gigi ', 'buku register lab teknik gigi', '100%', 'Ka.Lab Teknik Gigi', 'Aktif', NULL),
(231, 26, 1, 1, 'Waktu lamanya transit jenazah', NULL, 'Tergambarnya  kepedulian  rumah  sakit  terhadap  kebutuhan  pasien  akan pemulasaraan jenazah.\r\n', 'Waktu tanggap pelayanan pemulasaraan jenazah adalah waktu yang dibutuhkan mulai pasien dinyatakan meninggal sampai dengan jenazah mulai ditangani oleh petugas.', '', '', 'Harian', 1, 1, 'Total kumulatif waktu pelayanan pemulasaraan jenazah pasien (< 2 Jam) yang diamati dalam satu bulan\r\n', 'Total pasien yang diamati dalam satu bulan', 'buku register kamar transit jenazah', '100%', 'Ka. Transit Jenazah', 'Aktif', NULL),
(232, 27, 1, 1, 'Ketepatan waktu pemberian makanan kepada pasien', NULL, 'Tergambarnya efektifitas pelayanan instalasi gizi', 'Ketepatan  waktu  pemberian  makanan  kepada  pasien  adalah  ketepatan penyediaan makanan, pada pasien sesuai dengan jadwal yang telah ditentukan.\r\n', '', '', 'Harian', 1, 1, 'Jumlah pasien rawat inap yang disurvei yang mendapat makanan tepat waktu dalam satu bulan ', 'Jumlah seluruh pasien rawat inap yang disurvei', 'survey', '90%', 'Kepala Instalasi Rawat Inap', 'Aktif', NULL),
(241, 19, 1, 5, 'Kecepatan waktu pemberian informasi tentang tagihan pasien rawat inap', NULL, 'Tergambarnya kecepatan pelayanan informasi pembayaran pasien rawat inap', 'Informasi tagihan pasien rawat inap meliputi semua tagihan pelayanan yang telah diberikan. Kecepatan waktu pemberian informasi tagihan pasien rawat inap adalah waktu mulai pasien dinyatakan boleh pulang oleh dokter sampai dengan informasi tagihan diterima oleh pasien.', '', '', 'Harian', 1, 1, 'Jumlah kumulatif waktu pemberian informasi tagihan pasien rawat inap yang (2 jam)\r\ndiamati dalam satu bulan\r\n', 'Jumlah total pasien rawat inap yang diamati dalam satu bulan', 'Unit administrasi dan keuangan', '100%', 'Unit Administrsi dan Keuangan', 'Aktif', NULL),
(243, 24, 1, 1, 'Kecepatan memberikan pelayanan ambulance di Rumah Sakit', NULL, 'Tergambarnya ketanggapan rumah sakit dalam menyediakan kebutuhan pasien akan ambulance\r\n', 'Kecepatan memberikan pelayanan ambulance/kereta jenazah adalah waktu yang\r\ndibutuhkan  mulai  permintaan  ambulance/kereta  jenazah  diajukan  oleh pasien/keluarga pasien di rumah sakit sampai tersedianya ambulance/kereta jenazah. Maksimal 30 menit\r\n', '', '', 'Bulanan', 1, 1, 'Jumlah penyediaan ambulance/kereta jenazah yang tepat waktu (maksimal: 30 menit) dalam 1 bulan', 'Jumlah seluruh permintaan ambulance/kereta jenazah dalam satu bulan', 'Buku register ambulance', '100%', 'Ka Unit Ambulance', 'Aktif', NULL),
(244, 7, 3, 1, 'Angka kelengkapan assessmen medis pasien bedah perio sebelum tindakan', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(245, 7, 3, 2, 'Angka Kelengkapan laporan operasi bedah perio', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(246, 7, 3, 3, 'Angka Kelengkapan Asesmen pre anastesi untuk tindakan bedah perio', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(247, 7, 3, 4, 'Angka kepatuhan cuci tangan dokter gigi ', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '80%', 'SMF Periodonsia', 'Aktif', NULL),
(248, 7, 4, 1, 'Kepatuhan dokter gigi dalam pemakaian alat pelindung diri (APD)', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'Surveilance', '100%', 'Komite PPI', 'Aktif', NULL),
(250, 7, 4, 3, 'Survei kepuasan pelanggan di unit periodonsia ', NULL, '', '', '', '', 'Bulanan', 1, 3, '', '', 'Laporan kepuasan pasien', '>80%', 'Ka Unit Pelayanan', 'Aktif', NULL),
(251, 7, 4, 4, 'Survei kepuasan kerja seluruh staff di unit periodonsia ', NULL, '', '', '', '', 'Bulanan', 1, 3, '', '', 'Laporan kepuasan staff', '> 80%', 'Administrasi dan keuangan', 'Aktif', NULL),
(252, 7, 4, 5, 'Pola pemahaman dokter gigi dalam melaksanakan cara cuci tangan yang benar ', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'Surveilance', '> 80%', 'Komite PPI', 'Aktif', NULL),
(253, 7, 4, 2, 'Demografi pasien periodonsia (10 penyakit terbesar, wilayah, pendidikan, jenis kelamin, umur)', NULL, '', '', '', '', 'Harian', 1, 1, 'Ada', '', 'Laporan Rekam Medis', '100%', 'Instalasi Rekam Medis', 'Aktif', NULL),
(254, 7, 5, 1, 'Kepatuhan pelaksanaan identifikasi sebelum tindakan periodonsia ', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(255, 7, 5, 2, 'Verbal Order di tanda tangani dokter spesialis dalam 24 jam ', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'Rekam Medis', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(256, 7, 5, 3, 'Ketepatan label pada obat LASA di semua unit yang melayani periodonsia', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'Farmasi', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(257, 7, 5, 4, 'Angka kelengkapan surgical safety checklist ', NULL, '', '', '', '', 'Bulanan', 1, 3, '', '', 'Rekam Medis', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(258, 7, 5, 5, 'Kepatuhan cuci tangan oleh Dokter Gigi Muda (DGM) dan perawat', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'Surveilance', '80%', 'Komite PPI', 'Aktif', NULL),
(259, 7, 5, 6, 'Terpasangnya pita kuning pada pasien periodonsia dengan risiko jatuh ', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'Unit Periodonsia', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(260, 7, 6, 1, 'ANUG', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(261, 7, 6, 2, 'Perikoronitis ', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(262, 7, 6, 3, 'Gingivitis Akibat Plak Mikrobial', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(263, 7, 6, 4, 'Abses Periodontal', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(264, 7, 6, 5, 'Periodontitis Kronis dengan Kehilangan Jaringan Periodontal Ringan - Sedang', NULL, '', '', '', '', 'Harian', 1, 3, '', '', 'SIM RS dan RM', '100%', 'SMF Periodonsia', 'Aktif', NULL),
(266, 9, 5, 1, 'Kepastian Tepat Lokasi dan Prosedur: Kelengkapan Penandaan Lokasi Foto Radiografi', NULL, '', '', '', '', 'Harian', 1, 1, '', '', 'Hasil Foto Radiografi', '100%', 'Ka. Unit Integrasi', 'Aktif', NULL),
(267, 9, 5, 2, 'Kepatuhan Upaya Pencegahan Risiko Cedera Akibat Pasien Jatuh : Pemakaian pita kuning pasien resiko jatuh', NULL, '', '', '', '', 'Harian', 1, 1, '', '', 'Rekam Medis', '100%', 'Ka. Unit Integrasi', 'Aktif', NULL),
(268, 14, 1, 2, 'Keterbacaan Catatan Rekam Medis', NULL, 'Tergambarnya catatan rekam medis pasien yang jelas, terbaca, dan mudah untuk dipahami', 'Rekam medis adalah berkas yang berisi catatan dan dokumen tentang identitas pasien, pemeriksaan, pengobatan, tindakan dan pelayanan lain yang telah diberikan kepada pasien.', '', '', 'Harian', 1, 1, 'Jumlah rekam medis yang terbaca dalam tindakan per bulan', 'Jumlah seluruh rekam medis dalam tindakan per bulan', 'Rekam Medis', '100%', 'Ka. Instalasi Rekam Medis', 'Aktif', NULL),
(269, 28, 1, 1, 'Kepatuhan Pemakaian Alat Pelindung Diri', NULL, 'Perlindungan diri untuk mencegah penularan infeksi saat kontak dengan pasien', 'Alat pelindung diri adalah kelengkapan yang wajib digunakan saat bekerja sesuai bahaya dan risiko kerja untuk menjaga keselamatan petugas itu sendiri dan orang di sekelilingnya', '', '', 'Harian', 1, 1, 'Jumlah tindakan pada pasien petugas menggunakan APD lengkap dalam satu bulan', 'Jumlah tindakan pada pasien dalam satu bulan', 'Survey', '100%', 'Ka. Unit Pelayanan Gigi Umum', 'Aktif', NULL),
(271, 12, 2, 1, 'Kepatuhan Identifikasi Pasien', NULL, '', '', '', '', 'Harian', 1, 1, '', '', 'rekam medis', '100%', 'Ka. Unit Oral Screening / Ka. unit Rekam Medis', 'Aktif', NULL),
(273, 29, 1, 1, 'kelengkapan Assesmen Medis Rawat Inap', NULL, '', '', '', '', 'Harian', 1, 1, '', '', 'Rekam Medis', '100%', 'Ka. rawat inap / ka. Rekam Medis', 'Aktif', NULL),
(274, 29, 2, 1, 'Jam Visit Dokter ', NULL, 'Tergambarnya kepedulian tenaga medis terhadap ketepatan waktu pemberian pelayanan', 'Visit Dokter adalah kunjungan dokter setiap hari kerja sesuai dengan ketentuan waktu kepada setiap pasien yang menjadi tanggungjawabnya, yaitu jam 08.00-jam 18.00', '', '', 'Harian', 1, 1, 'Jumlah visit dokter antara jam 08.00-jam 18.00', 'Jumlah keseluruhan visit dokter dalam 1 bulan', 'Rekam Medis', '100%', 'Ka. Rawat Inap', 'Aktif', NULL),
(275, 29, 2, 2, 'Kepatuhan Upaya Pencegahan Risiko Cedera Akibat Pasien Jatuh pada Pasien Rawat Inap', NULL, 'Terselenggaranya budaya keselamatan pasien melalui upaya pencegahan pasien jatuh', 'Kepatuhan seluruh staf RS dalam melakukan upaya pencegahan pasien jatuh dengan:\r\n1.	memberikan edukasi pada pasien\r\n2.	pemberian tanda beresiko pada bed pasien\r\n3.	pemberian gelang pada pasien resiko jatuh\r\n4.	terpasangnya bedrail pada bed pasien resiko jatuh.\r\n', '', '', 'Harian', 1, 1, 'Jumlah ketepatan upaya staf dalam melakukan pencegahan risiko pasien jatuh meliputi 1 s/d 4.', 'Jumlah seluruh pasien resiko jatuh', 'Survey', '100%', 'Ka. Rawat Inap', 'Aktif', NULL),
(276, 17, 1, 1, 'Tidak adanya kejadian IDO Odontektomi', NULL, 'Monitoring Kejadian IDO Odontektomi', 'Kejadian infeksi setelah pasca operasi', '', '', 'Harian', 1, 30, 'Jumlah terjadinya IDO Odontektomi', 'Jumlah Tindakan Odontektomi perbulan', 'Rekam Medis', '100%', 'Komite PPI, IPCN, IPCLN', 'Aktif', NULL),
(277, 17, 2, 1, 'Kepatuhan Hand Hygiene', NULL, 'Keselamatan Pasien', 'Kepatuahn Bersiahan Tangan dengan 6 gerakan dalam 5 moment sebagaimana telah ditetapkan oleh WHO sebagai salah satu faktor penentu keselamatan pasien', '', '', 'Bulanan', 1, 3, 'jumlah kepatuahan dan ketepatan satf dalam melakukan hand hygiene 6 langkah dalam 5 moment Hand Hygiene', 'jumlah staf dalam melakukan Hand Hygiene 6 langkah dalam 5 moment Hand Hygiene dalam bulan yang sama', 'Laporan tertulis IPCLN, IPCN', '80%', 'Komite PPI, IPCN, IPCLN', 'Aktif', NULL),
(278, 17, 2, 2, 'Kepatuhan Pemakaian APD (alat Pelindung Diri)', NULL, 'Keselamatan', 'Kelengkapan yang wajib digunakan saat bekerja sesuai bahaya dan resiko kerja untuk menjaga keselamatan petugas itu sendiri dan orang di sekelilingnya', '', '', 'Harian', 1, 30, 'Jumlah tindakan pada pasien petugas menggunakan APD lengkap dalam satu bulan', 'Jumlah tindakan pada pasien dalam satu bulan', 'Laporan tertulis dari IPCLN, IPCN', '100%', 'Komite PPI, IPCN, IPCLN', 'Aktif', NULL),
(279, 30, 4, 1, 'Respon Time Permintaan Layanan Teknologi Informasi < 30 Menit (100%)', NULL, '-', '-', '-', '-', 'Harian', 1, 12, 'Respon Time Permintaan Layanan Teknologi Informasi < 30 Menit', 'Jumlah Laporan Permintaan Layanan Teknologi Informasi Yang Masuk', 'internal', '100%', 'TIRS', 'Aktif', '(Respon Time Permintaan Layanan Teknologi Informasi < 30 Menit ÷ Jumlah Laporan Permintaan Layanan Teknologi Informasi Yang Masuk) x 100%'),
(280, 18, 4, 1, 'Persentase Kalibrasi Alat Medis (100%)', NULL, '-', 'Kalibrasi adalah kegiatan peneraam untuk menentukan kebenaran nilai penunjukkan alat ukur dan/atau bahan ukur', 'Alat medis yang wajib kalibrasi yang sudah terjadwal', 'Alat medis yang discontinue, recall, rusak dan afkir', 'Bulanan', 4, 1, 'Jumlah alat medis yang telah dilakukan kalibrasi sesuai jadwal satu tahun sekali', 'Jumlah alat medis yang wajib dilakukan kalibrasi terjadwal satu tahun sekali', '-', '100%', 'Kepala IPSRS', 'Aktif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_jenis`
--

CREATE TABLE `m_jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_jenis`
--

INSERT INTO `m_jenis` (`id`, `nama`) VALUES
(1, 'Mutu Unit'),
(2, 'Mutu Nasional'),
(3, 'Mutu Area Klinis'),
(4, 'Mutu Area Manajemen'),
(5, 'Mutu Area Sasaran Keselamatan Pasien'),
(6, 'Kepatuhan Protokol Klinis');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nama_status`) VALUES
(1, 'aktif'),
(2, 'tidak_aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `nama_pic` varchar(100) NOT NULL,
  `kontak_pic` varchar(12) NOT NULL,
  `status` varchar(2) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `create_at` date NOT NULL,
  `modified_at` date NOT NULL,
  `delete_at` date NOT NULL,
  `isdeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `id_grup`, `nama_pic`, `kontak_pic`, `status`, `password`, `username`, `id_jenis`, `parent`, `email`, `create_at`, `modified_at`, `delete_at`, `isdeleted`) VALUES
(1, 'Komite Mutu ', 1, 'dr.Hilda Puspa Indah, Sp.KJ', '', '1', '827ccb0eea8a706c4c34a16891f84e7b', 'komitemutu', 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
(2, 'Instalasi TIRS', 3, 'Rizki Egi Purnama, S.Pd', '', '1', '827ccb0eea8a706c4c34a16891f84e7b', 'instalasitirs', 0, 3, '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
(3, 'Sub Mutu Area Manajemen', 4, 'Drs. Isak Solihin, M.M', '', '1', '827ccb0eea8a706c4c34a16891f84e7b', 'Manajemen', 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
(4, 'Bagian Perencanaan dan Hukum', 2, 'PEP dan Hukum', '-', '1', '827ccb0eea8a706c4c34a16891f84e7b', 'bagianph', 2, 0, 'ph@rsj.go.id', '2023-07-18', '0000-00-00', '0000-00-00', 0),
(5, 'Bidang Penunjang', 3, '-', '-', '', '827ccb0eea8a706c4c34a16891f84e7b', 'bidangpenunjang', 4, 0, 'bidangpenunjang@rsj.go.id', '2023-07-18', '2023-07-18', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capaian`
--
ALTER TABLE `capaian`
  ADD PRIMARY KEY (`id_capaian`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamus`
--
ALTER TABLE `kamus`
  ADD PRIMARY KEY (`id_kamus`);

--
-- Indexes for table `m_indikator`
--
ALTER TABLE `m_indikator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_indikator_m_unit_fk` (`unit_id`),
  ADD KEY `m_indikator_m_jenis_fk` (`jenis_id`);

--
-- Indexes for table `m_jenis`
--
ALTER TABLE `m_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capaian`
--
ALTER TABLE `capaian`
  MODIFY `id_capaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kamus`
--
ALTER TABLE `kamus`
  MODIFY `id_kamus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `m_indikator`
--
ALTER TABLE `m_indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;
--
-- AUTO_INCREMENT for table `m_jenis`
--
ALTER TABLE `m_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
