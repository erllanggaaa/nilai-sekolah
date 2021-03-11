-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2020 pada 13.31
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sims2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`artikel_id` int(11) NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_isi` text NOT NULL,
  `artikel_tgl` datetime NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_judul`, `artikel_isi`, `artikel_tgl`, `kategori_id`, `id`) VALUES
(1, 'COBA GRATIS BULAN AGUSTUS!', '<div>Yuks, ikut rasakan Pengalaman belajar di KUMON selama 4x GRATISSS!!!<br>kalian hanya cukup datang ke kelas untuk melakukan Tes Penempatan.<br>Kami buka dari Selasa sd Sabtu pukul 17.00-17.00</div>', '2020-07-27 13:59:21', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbel`
--

CREATE TABLE IF NOT EXISTS `bimbel` (
`bimbel_id` int(11) NOT NULL,
  `bimbel_nama` varchar(100) DEFAULT NULL,
  `bimbel_alamat` text,
  `bimbel_telp` varchar(16) DEFAULT NULL,
  `bimbel_visi` text,
  `bimbel_misi` text,
  `id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `bimbel`
--

INSERT INTO `bimbel` (`bimbel_id`, `bimbel_nama`, `bimbel_alamat`, `bimbel_telp`, `bimbel_visi`, `bimbel_misi`, `id`) VALUES
(1, 'Kumon Buaran Permai Puspitek', 'Jl. Puspitek Raya No. 80A Serpong  Tanggerang Selatan', '0811882931', 'Kami berharap agar orang-orang diberbagai negara dan wilayah di seluruh dunia memiliki kesempatan untuk belajar dengan metode Kumon, dan setiap siswa belajar secara mandiri dengan antusias untuk mewujudkan impian dan targetnya.&nbsp;&nbsp;', 'Dengam menggali potensi yang ada&nbsp; pada setiap individu dan mengembangkan kemampuan semaksimal mungkin, kami bertujuan untuk membentuk manusia yang sehat dan cakap sehingga dapat memberikan kontribusi kepada masyarakat global.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL,
  `kategori_deskripsi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_deskripsi`) VALUES
(1, 'Hot News', 'Berisikan Berita Terpanas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`level_id` int(11) NOT NULL,
  `nm_level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`level_id`, `nm_level`) VALUES
(1, '6A'),
(2, '5A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`nilai_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `pelajaran_id` int(11) DEFAULT NULL,
  `level_id` int(11) NOT NULL,
  `tahun_id` int(11) DEFAULT NULL,
  `nilai_poin` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nilai_id`, `id`, `pelajaran_id`, `level_id`, `tahun_id`, `nilai_poin`) VALUES
(1, 3, 1, 1, 1, 70),
(2, 3, 2, 1, 1, 65),
(3, 3, 2, 2, 2, 80),
(4, 3, 1, 2, 2, 77),
(5, 4, 1, 1, 2, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
`pelajaran_id` int(11) NOT NULL,
  `pelajaran_nama` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`pelajaran_id`, `pelajaran_nama`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
`tahun_id` int(11) NOT NULL,
  `tahun_nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`tahun_id`, `tahun_nama`) VALUES
(1, '2018/2019'),
(2, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `telp` varchar(16) DEFAULT NULL,
  `alamat` text,
  `status` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `access` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `access`) VALUES
(1, 'Administrator', 'admin', 'admin', '085761167894', 'Tangerang', 'Belum Menikah', 'Laki-Laki', 'admin'),
(2, 'Pembimbing', 'pembimbing', 'pembimbing', '0895347399956', 'Jl. H. jaman', 'Menikah', 'Laki-Laki', 'pembimbing'),
(3, 'Siswa', 'siswa', 'siswa', '085761167894', 'Jalan Jalan', 'Belum Menikah', 'Laki-Laki', 'siswa'),
(4, 'Diah Ayu', 'ayu', 'ayu', '089531232131', 'Jl. Salak 5', 'Belum Menikah', 'Laki-laki', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`artikel_id`), ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `bimbel`
--
ALTER TABLE `bimbel`
 ADD PRIMARY KEY (`bimbel_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`nilai_id`), ADD KEY `siswa_id` (`id`), ADD KEY `pelajaran_id` (`pelajaran_id`), ADD KEY `tahunajaran_id` (`tahun_id`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
 ADD PRIMARY KEY (`pelajaran_id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
 ADD PRIMARY KEY (`tahun_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bimbel`
--
ALTER TABLE `bimbel`
MODIFY `bimbel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
MODIFY `pelajaran_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
MODIFY `tahun_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
