-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Nov 2019 pada 03.13
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakadsma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `uname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`uname`, `pwd`, `level`) VALUES
('196708271980032000', '0b51fce9a882cb2f68f36f4633a49310', 1),
('197001271992032006', '55df42cac25e4ad1d7bfe2c143e5bf36', 1),
('9980596712', '82354ffabf9dac55f32c20f080e5acb7', 2),
('9980683922', 'bc5e019ae9e9d25f8e8898cdf63edbc3', 2),
('admin', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jk`, `alamat`, `foto`, `kode_jurusan`, `kode_mp`) VALUES
('196407271987032009', 'Mukhlis Koiriyati', 'P', 'Jl.Empu Kanwa No.5', '', 'IPA', 'BIO'),
('196708271980032000', 'Ahmadi Krisna', 'L', 'Jombang', '', 'IPS', 'GEO'),
('197001271992032006', 'Chusniati', 'L', 'Jl.Gubernur Suryo Gg.7 No.3', '', 'IPA', 'KIM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `kode_mp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kelas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_semester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`kode_mp`, `kode_kelas`, `kode_semester`, `kode_ta`, `hari`, `waktu`) VALUES
('BIO', 'IPA1', 'S001', 'TA0001', 'Senin', '07.00 - 09.00'),
('FIS', 'IPA1', 'S001', 'TA0001', 'Senin', '10.00 - 12.00'),
('EKO', 'IPS1', 'S001', 'TA0001', 'Senin', '07.00 - 09.00'),
('GEO', 'IPS1', 'S001', 'TA0001', 'Senin', '10.00 - 12.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `kode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`kode`, `nama`) VALUES
('IPA', 'Ilmu Pengetahuan Alam'),
('IPS', 'Ilmu Pengetahuan Sosial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_wali` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode`, `nama`, `kode_jurusan`, `nip_wali`) VALUES
('IPA1', 'IPA 1', 'IPA', '197001271992032006'),
('IPS1', 'IPS 1', 'IPS', '196708271980032000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kode`, `nama`, `kode_jurusan`) VALUES
('BIO', 'Biologi', 'IPA'),
('EKO', 'Ekonomi', 'IPS'),
('FIS', 'Fisika', 'IPA'),
('GEO', 'Geografi', 'IPS'),
('KIM', 'Kimia', 'IPA'),
('MAT', 'Matematika', 'IPA'),
('MTK', 'Matematika', 'IPS'),
('SOS', 'Sosiologi', 'IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `nisn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kelas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`nisn`, `nama`, `jk`, `alamat`, `foto`, `kode_kelas`) VALUES
('9980596712', 'Anggi Akbar', 'L', 'Lamongan', '', 'IPS1'),
('9980683922', 'Shinta Ulan', 'P', 'Jl.Semangka No.7', '', 'IPA1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `alpha` int(11) NOT NULL,
  `ijin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `kode_semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ta` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`kode`, `kode_mp`, `pertemuan`, `tanggal`, `alpha`, `ijin`, `sakit`, `kode_semester`, `kode_ta`, `nisn`) VALUES
('P0001', 'BIO', 1, '2019-11-11', 1, 0, 0, 'S001', 'TA0001', '9980683922'),
('P0002', 'EKO', 1, '2019-11-11', 0, 1, 0, 'S001', 'TA0001', '9980596712');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapot`
--

CREATE TABLE `rapot` (
  `nisn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_semester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rapot`
--

INSERT INTO `rapot` (`nisn`, `kode_mp`, `kode_semester`, `kode_ta`, `nilai`) VALUES
('9980683922', 'KIM', 'S001', 'TA0001', 0),
('9980683922', 'BIO', 'S001', 'TA0001', 95),
('9980683922', 'FIS', 'S001', 'TA0001', 97),
('9980596712', 'GEO', 'S001', 'TA0001', 97),
('9980596712', 'SOS', 'S001', 'TA0001', 96),
('9980596712', 'EKO', 'S001', 'TA0001', 95);

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `kode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`kode`, `nama`, `status`) VALUES
('S001', 'Ganjil', 1),
('S002', 'Genap', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `kode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`kode`, `nama`) VALUES
('TA0001', '2019/2020'),
('TA0002', '2020/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kode_mp` (`kode_mp`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD KEY `kode_mp` (`kode_mp`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_semester` (`kode_semester`),
  ADD KEY `kode_ta` (`kode_ta`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode_jurusan` (`kode_jurusan`),
  ADD KEY `nip_wali` (`nip_wali`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `kode_kelas` (`kode_kelas`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `kode_semester` (`kode_semester`),
  ADD KEY `kode_ta` (`kode_ta`),
  ADD KEY `kode_mp` (`kode_mp`);

--
-- Indexes for table `rapot`
--
ALTER TABLE `rapot`
  ADD KEY `nisn` (`nisn`),
  ADD KEY `kode_mp` (`kode_mp`),
  ADD KEY `kode_semester` (`kode_semester`),
  ADD KEY `kode_ta` (`kode_ta`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`kode`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode`),
  ADD CONSTRAINT `guru_ibfk_2` FOREIGN KEY (`kode_mp`) REFERENCES `mapel` (`kode`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kode_ta`) REFERENCES `tahun_ajaran` (`kode`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`kode_mp`) REFERENCES `mapel` (`kode`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`kode_semester`) REFERENCES `semester` (`kode`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`nip_wali`) REFERENCES `guru` (`nip`);

--
-- Ketidakleluasaan untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `mapel_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode`);

--
-- Ketidakleluasaan untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode`);

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `murid` (`nisn`),
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`kode_ta`) REFERENCES `tahun_ajaran` (`kode`),
  ADD CONSTRAINT `presensi_ibfk_3` FOREIGN KEY (`kode_semester`) REFERENCES `semester` (`kode`),
  ADD CONSTRAINT `presensi_ibfk_4` FOREIGN KEY (`kode_mp`) REFERENCES `mapel` (`kode`);

--
-- Ketidakleluasaan untuk tabel `rapot`
--
ALTER TABLE `rapot`
  ADD CONSTRAINT `rapot_ibfk_1` FOREIGN KEY (`kode_semester`) REFERENCES `semester` (`kode`),
  ADD CONSTRAINT `rapot_ibfk_2` FOREIGN KEY (`kode_ta`) REFERENCES `tahun_ajaran` (`kode`),
  ADD CONSTRAINT `rapot_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `murid` (`nisn`),
  ADD CONSTRAINT `rapot_ibfk_4` FOREIGN KEY (`kode_mp`) REFERENCES `mapel` (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
