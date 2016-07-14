-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jun 2016 pada 10.11
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `USERNAME` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `IDENTITAS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`USERNAME`, `NAMA`, `IDENTITAS`) VALUES
('admin', 'Vinda Vadilla', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `NAMA` varchar(50) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `ANGKATAN` int(11) NOT NULL,
  `PRODI` varchar(50) NOT NULL,
  `PEKERJAAN_PERTAMA` varchar(50) NOT NULL,
  `PEKERJAAN_SEKARANG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`NAMA`, `NIM`, `ANGKATAN`, `PRODI`, `PEKERJAAN_PERTAMA`, `PEKERJAAN_SEKARANG`) VALUES
('Rafli', '121311026', 2012, 'D3', 'Garuda Games', 'Garuda Games'),
('BAKA', '111224005', 2011, 'D4', 'Garuda Games', 'Ubisoft'),
('Caesario', '121311009', 2012, 'D3', 'PT KITA BERSAMA', 'PT KITA BERDUA'),
('Firman', '121324011', 2012, 'D4', 'PT TORABIKA', 'PT ABC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE IF NOT EXISTS `beasiswa` (
  `idbeasiswa` int(11) NOT NULL,
  `jenisbeasiswa` varchar(50) NOT NULL,
  `judulbeasiswa` varchar(50) NOT NULL,
  `kuotabeasiswa` int(11) NOT NULL,
  `isibeasiswa` text NOT NULL,
  `tglmulaibeasiswa` date NOT NULL,
  `tglakhirbeasiswa` date NOT NULL,
  `fotobeasiswa` varchar(255) NOT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` (`idbeasiswa`, `jenisbeasiswa`, `judulbeasiswa`, `kuotabeasiswa`, `isibeasiswa`, `tglmulaibeasiswa`, `tglakhirbeasiswa`, `fotobeasiswa`, `perusahaan`) VALUES
(1, 'Khusus D3', 'yang terbaik menjadi pemenang', 5, '<p>bayu ganteng</p>', '2016-06-28', '2016-06-30', '../industri/image/392690_620.jpg', 'PT GARUDA FOOD'),
(2, 'D4 dan D3', 'Beasiswa Unggulan untuk Mahasiswa Berprestasi', 50, 'Syarat dan Ketentuan Pendaftaran\r\n1. Mahasiswa Strata 1 atau Diploma Aktif\r\n2. Mengisi Formulir Pendaftaran\r\n3. Melampirkan\r\n   a. foto 3x4 1 lembar\r\n   b. foto copy kartu mahasiswa\r\n   c. Foto copy kartu Keluarga\r\n   d. Foto copy Kartu Hasil Studi terbaru 1 lembar\r\n   e. surat Keterangan tidak mampu dari Desa/Kelurahan\r\n4. Bersedia mengikuti pembinaan \r\n \r\nFasilitas:\r\n1. Beasiswa setiap bulan selama enam bulan, dan selanjtnya masih.\r\n2. Pelibatan dalam Program\r\n3. Pembinaan Rutin\r\n\r\nInformasi : 085765467878\r\n\r\n', '2016-06-16', '2016-12-20', '', 'Djarum Foundation'),
(3, 'D3 dan D4', 'Beasiswa Reguler Pergururan Tinggi', 30, 'Fasilitas:\r\nBandtuan Pendidikan sebesar 750.000 perbulan untuk jangka waktu satutahun ajaran atau 2 semester.\r\n\r\nPersyaratan Umum\r\nBerasal dari Keluarga Kurang Sejahtera\r\nSEdang menjalani Pendidikan di Tinggi\r\n\r\nPersyaratan Khuusus\r\nMelakukan pendaftaran dengan mengisi formulir pendaftaran\r\nMelampirkan fotocopy kartu keluarga tidak mampu dari Desa/Kelurahan\r\nFotocopy IPK terakhir\r\nFotocopy Kartu Keluarga\r\nFoto terbaru 3x4\r\nMengisi dan menandatangani Perjanjian Beasiswa', '2016-06-17', '2016-07-28', '', 'PT. Gudang Garam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`ID_BERITA` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `JUDUL_BERITA` varchar(100) NOT NULL,
  `BERITA` text NOT NULL,
  `TANGGAL` date NOT NULL,
  `PHOTO` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`ID_BERITA`, `USERNAME`, `JUDUL_BERITA`, `BERITA`, `TANGGAL`, `PHOTO`) VALUES
(1, '141511063', 'Dua Tim JTK Ikuti Final ACM-ICPC Multi-Provincial IdeaFuse 2', '<p>Dua tim dari JTK mengikuti babak final ACM-ICPC Multi-Provincial IdeaFuse 2016 yang diselenggarakan oleh STMIK Mikroskil, Medan, Sumatera Utara pada Sabtu (28/5) lalu. Tim &ldquo;Rumah Besar Cipali&rdquo; meraih peringkat 9, sedangkan tim &ldquo;Weekend&rdquo; berada pada peringkat 40 dari 45 tim.</p>\r\n<p>Kedua tim berangkat bersama Zulkifli Arsyad, S.Kom., M.T. selaku pembimbing. Rombongan berangkat ke Medan pada hari Jumat (27/5) dan kembali ke Bandung pada hari Minggu (29/5).</p>\r\n<p>Kedua tim mengikuti babak final setelah berhasil memasuki 50 besar pada babak penyisihan yang diselenggarakan secara <em>on-line</em> dan diikuti dari gedung JTK pada hari Minggu (17/4). Tim &ldquo;Rumah Besar Cipali&rdquo; berada pada peringkat 19, sementara &ldquo;Weekend&rdquo; berada pada peringkat 46. Pada babak penyisihan ini, JTK mengirimkan enam tim untuk bertanding.</p>\r\n<p>Tim &ldquo;Rumah Besar Cipali&rdquo; beranggotakan sebagai berikut:</p>\r\n<ol>\r\n<li>Imam Fauzan P. P. N. (141524012/D4-TI);</li>\r\n<li>Muhammad Saiful Islam (141524020/D4-TI);</li>\r\n<li>Muhammad Ridwan Fathin (151524022/D4-TI).</li>\r\n</ol>\r\n<p>Tim &ldquo;Weekend&rdquo; beranggotakan sebagai berikut:</p>\r\n<ol>\r\n<li>Fajar Garnadi (151511041/D3-TI);</li>\r\n<li>Lulu Luthfiyatul Azkiya (151511015/D3-TI);</li>\r\n<li>Muhammad Firizki Emsa (151511049/D3-TI).</li>\r\n</ol>\r\n<p>Dalam upaya persiapan untuk mengikuti babak final ini, JTK menyelenggarakan <em>bootcamp</em> selama dua minggu sebelum keberangkatan. Persiapan meliputi materi yang umum keluar di ACM-ICPC, <em>speed practice</em>, dan juga membiasakan diri dengan <em>environment</em> yang digunakan di area lomba.</p>\r\n<p>ACM-ICPC (International Collegiate Programming Contest) adalah kompetisi pemrograman tahunan antar perguruan tinggi di seluruh dunia yang diselenggarakan oleh Association for Computing Machinery (ACM) dan disponsori oleh IBM.</p>\r\n<p>ACM-ICPC Multi-Provincial IdeaFuse 2016 merupakan satu dari tiga kompetisi yang berlaku sebagai tiket masuk untuk mengikuti ACM-ICPC Regional Jakarta 2016 (dan ACM-ICPC World Finals 2017). Dua kompetisi lainnya adalah ACM-ICPC Indonesia National Contest yang diselenggarakan oleh Binus University dan Competitive Programming Contest yang diselenggarakan oleh Universitas Indonesia.</p>\r\n<p>Ini adalah keikutsertaan JTK yang kedua kalinya setelah pada Sabtu (23/5/2015) lalu tim &ldquo;jtkacm201502&rdquo; mengikuti babak final ACM-ICPC Multi-Provincial IdeaFuse 2015 bersama pembimbing, Lucky Adhie, S.Kom., M.T. Pada kegiatan tersebut, tim &ldquo;jtkacm201502&rdquo; berhasil meraih peringkat 19 dari 26 tim. Salah satu anggota tim &ldquo;Rumah Besar Cipali&rdquo;, Saiful, juga bergabung bersama tim &ldquo;jtkacm201501&rdquo; dan meraih peringkat 32 dari 100 tim pada babak penyisihan tahun 2015 lalu.</p>\r\n<p>Scoreboard dari babak final dapat diakses di:&nbsp;<a href="http://jtk.polban.ac.id/v2/wp-content/uploads/2016/06/scoreboard-final-icpc-sumatera-2016.png">http://jtk.polban.ac.id/v2/wp-content/uploads/2016/06/scoreboard-final-icpc-sumatera-2016.png</a></p>\r\n<p>Scoreboard dari babak penyisihan dapat diakses di:&nbsp;<a href="http://jtk.polban.ac.id/v2/wp-content/uploads/2016/06/scoreboard-penyisihan-icpc-sumatera-2016.png">http://jtk.polban.ac.id/v2/wp-content/uploads/2016/06/scoreboard-penyisihan-icpc-sumatera-2016.png</a></p>\r\n<p><em>Foto utama, dari kiri-kanan: Fathin (kedua kiri), Lulu, Saiful, Fajar, Imam, Zulkifli Arsyad, dan Firizki berfoto pada acara penutupan bersama panitia dan perwakilan juri, Suhendry Effendy (kanan).</em></p>', '2016-07-24', 'jtk-icpc-sumatera-2016_1366-560x300.jpg'),
(3, '141511063', 'Mahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest', 'Mahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestVVMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestV\r\nMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestVMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi CompfestMahasiswa Jurusan Teknik Komputer dan Informatika memenangi Compfest', '2016-06-01', 'b3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `NIP` varchar(30) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `IDENTITAS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`NIP`, `NAMA`, `IDENTITAS`) VALUES
('1234567890', 'Irawan Thamrin', 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `freshgraduate`
--

CREATE TABLE IF NOT EXISTS `freshgraduate` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `keahlian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `freshgraduate`
--

INSERT INTO `freshgraduate` (`nim`, `nama`, `angkatan`, `tanggal_lahir`, `tempat_lahir`, `telepon`, `tahun_lulus`, `prodi`, `keahlian`) VALUES
('14151133', 'Ade Fulki', 2014, '1996-06-06', 'Bandung', '822146778', 2017, 'D3 Teknik Informatika', 'Php, JAVA, Android, C++'),
('14151134', 'Arief Subagja', 2014, '1995-06-01', 'Bandung', '82516731', 2017, 'D3 Teknik Informatika', 'Design, HTML, Android'),
('14151135', 'Arie Firmansyah', 2014, '1996-02-09', 'Purwakarta', '081263571124', 2017, 'D3 Teknik Informatika', 'Presentation, Angular JS, Php'),
('14151136', 'Bagus Jatikusuma', 2014, '1996-04-30', 'Sumedang', '0816732537153', 2017, 'D3 Teknik Informatika', 'Web Programming, C++, JAVA, Angular JS'),
('14151137', 'Bayu Arafli Fauzi', 2014, '1996-04-22', 'Ujung Pandang', '082214677811', 2017, 'D3 Teknik Informatika', 'Php, HTML, Bootstrap, Documentation'),
('131124024', 'Sintia Rosanti', 2013, '1995-10-06', 'Ciamis', '085237615327', 2017, 'D4 Teknik Informatika', 'Documentation, Php, JAVA, Bootstrap, HTML, C++');

-- --------------------------------------------------------

--
-- Struktur dari tabel `industri`
--

CREATE TABLE IF NOT EXISTS `industri` (
  `NAMA` varchar(50) NOT NULL,
  `IDENTITAS` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `industri`
--

INSERT INTO `industri` (`NAMA`, `IDENTITAS`, `EMAIL`) VALUES
('BAKA', 'PT BAKA BERMARTABAT', 'BAKA@BAKA.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

CREATE TABLE IF NOT EXISTS `loker` (
  `NAMA` varchar(100) NOT NULL,
  `TANGGAL_MULAI` date NOT NULL,
  `TANGGAL_AKHIR` date NOT NULL,
  `POSISI` varchar(50) NOT NULL,
  `GAJI` int(11) NOT NULL,
  `TEMPAT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`NAMA`, `TANGGAL_MULAI`, `TANGGAL_AKHIR`, `POSISI`, `GAJI`, `TEMPAT`) VALUES
('PT DJARUM INDONESIA', '2016-06-25', '2016-06-30', 'Senior Programmer', 5000000, 'BANDUNG'),
('GARUDA GAMES', '2016-06-27', '2016-07-06', 'Design Charachter', 10000000, 'JAKARTA'),
('PT GARUDA FOOD', '2016-06-27', '2016-06-30', 'System Analis', 6000000, 'JAKARTA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `idlowongan` int(11) NOT NULL,
  `posisilowongan` varchar(50) NOT NULL,
  `gajilowongan` int(11) NOT NULL,
  `tempatlowongan` varchar(50) NOT NULL,
  `isilowongan` text NOT NULL,
  `tglmulailowongan` date NOT NULL,
  `tglakhirlowongan` date NOT NULL,
  `fotolowongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`idlowongan`, `posisilowongan`, `gajilowongan`, `tempatlowongan`, `isilowongan`, `tglmulailowongan`, `tglakhirlowongan`, `fotolowongan`) VALUES
(1, 'Kepala Divisi', 5000000, 'Bandung', '<p>asdfghjkl</p>', '2016-06-27', '2016-06-30', '../industri/image/392690_620.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NIM` varchar(15) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `identitas` varchar(10) NOT NULL,
  `PRODI` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA`, `identitas`, `PRODI`) VALUES
('141511058', 'Rony Natakusumah', 'mahasiswa', 'D3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `NIM` varchar(15) NOT NULL,
  `MATKUL` varchar(50) NOT NULL,
  `NILAI` char(2) NOT NULL,
  `SKS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`NIM`, `MATKUL`, `NILAI`, `SKS`) VALUES
('141511058', 'PENGANTAR PERANGKAT LUNAK', 'A', 4),
('141511058', 'SISTEM OPERASI DAN JARINGAN', 'A', 3),
('141511058', 'MATEMATIKA DISKRIT 1', 'B', 3),
('141511058', 'MATEMATIKA TERAPAN 1', 'AB', 2),
('141511058', 'MATEMATIKA DISKRIT 2', 'BC', 3),
('141511058', 'MATEMATIKA TERAPAN 2', 'B', 2),
('141511058', 'PROYEK 1', 'A', 3),
('141511058', 'PROYEK 2', 'A', 3),
('141511058', 'PROYEK 3', 'A', 3),
('141511058', 'PSIKOLOGI KOGNITIF', 'B', 3),
('141511058', 'PENDIDIKAN PANCASILA', 'B', 2),
('141511058', 'BAHASA INDONESIA', 'B', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
  `NIM` varchar(20) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `IDENTITAS` varchar(20) NOT NULL,
  `PERIHAL` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`NIM`, `NAMA`, `IDENTITAS`, `PERIHAL`, `tanggal`, `saran`) VALUES
('141511058', '', 'mahasiswa', 'perihal', '0000-00-00', '<p>waaaaa, nilai kapan keluaaaar :(</p>'),
('141511058', 'Rony Natakusumah', 'mahasiswa', 'perihal', '2016-06-25', '<p>waaaa, nilai kapan keluaaaar :(</p>'),
('141511058', 'Rony Natakusumah', 'mahasiswa', 'perihal', '2016-06-25', '<p>aweu</p>'),
('141511058', 'Rony Natakusumah', 'mahasiswa', 'perihal', '2016-06-25', '<p>astagfirullah</p>'),
('141511058', 'Rony Natakusumah', 'mahasiswa', 'perihal', '2016-06-25', '<p>asfa</p>'),
('1234567890', 'Irawan Thamrin', '1234567890', 'perihal', '2016-06-26', '<p>sdfag</p>'),
('1234567890', 'Irawan Thamrin', '1234567890', 'adsf', '2016-06-26', '<p>asdgfa</p>'),
('PT BAKA BERMARTABAT', 'BAKA', 'PT BAKA BERMARTABAT', 'sfs', '2016-06-26', '<p>fasf</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `IDENTITAS` varchar(20) NOT NULL,
  `ROLE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`, `IDENTITAS`, `ROLE`) VALUES
('1234567890', 'irawan', '1234567890', 'dosen'),
('141511058', 'bakabaka', 'mahasiswa', 'mahasiswa'),
('admin', 'adminadmin', 'admin', 'admin'),
('alumni', 'alumni', '123412412', 'alumni'),
('aweu', 'aweuaweu', '1122334455', 'dosen'),
('BAKA@BAKA.com', 'industribaka', 'industri', 'industri'),
('industri', 'industri', '1423534653', 'industri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`) VALUES
(1, 'BAKA', 'BAKA@BAKA.com', '$2y$10$Jo.lCqkdTkmrFLKlxD8XZO9PdwLUnESYKjE08g1.TO1k5L2d25vCa', '2016-06-24 02:50:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
 ADD PRIMARY KEY (`idbeasiswa`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`ID_BERITA`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`idlowongan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `ID_BERITA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
