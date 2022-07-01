-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 04:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasarbauntung`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `idAbsen` varchar(20) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jumlahHariKerja` int(2) NOT NULL,
  `tanggalInputAbsen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`idAbsen`, `bulan`, `tahun`, `jumlahHariKerja`, `tanggalInputAbsen`) VALUES
('62b5e1d217e2a', 'Juni', 2022, 22, '2022-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `absen_detail`
--

CREATE TABLE `absen_detail` (
  `idAbsenDetail` int(11) NOT NULL,
  `idAbsen` varchar(20) NOT NULL,
  `idPegawai` varchar(20) NOT NULL,
  `hadir` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `tanpaKeterangan` int(11) NOT NULL,
  `tanggalInput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen_detail`
--

INSERT INTO `absen_detail` (`idAbsenDetail`, `idAbsen`, `idPegawai`, `hadir`, `izin`, `sakit`, `tanpaKeterangan`, `tanggalInput`) VALUES
(16, '62ab1b4ba9e8a', '62ab35501f1d9', 22, 0, 0, 0, '2022-06-17'),
(17, '62ab1b4ba9e8a', '62ab378a26745', 22, 0, 0, 0, '2022-06-17'),
(18, '62b58befa5ef6', '62ab35501f1d9', 30, 0, 0, 0, '2022-06-24'),
(19, '62b58befa5ef6', '62ab378a26745', 30, 0, 0, 0, '2022-06-24'),
(20, '62b5e1d217e2a', '62b5e03e3a6e9', 22, 0, 0, 0, '2022-06-24'),
(21, '62b5e1d217e2a', '62b5e10690225', 20, 1, 1, 0, '2022-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `idCuti` varchar(20) NOT NULL,
  `idPegawai` varchar(20) NOT NULL,
  `ns` varchar(3) NOT NULL,
  `br` varchar(6) NOT NULL,
  `ts` int(4) NOT NULL,
  `verify` int(1) NOT NULL,
  `dariTanggal` date NOT NULL,
  `sampaiTanggal` date NOT NULL,
  `alasanCuti` varchar(192) NOT NULL,
  `tanggalPengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`idCuti`, `idPegawai`, `ns`, `br`, `ts`, `verify`, `dariTanggal`, `sampaiTanggal`, `alasanCuti`, `tanggalPengajuan`) VALUES
('62b5e2f7535df', '62b5e03e3a6e9', '002', 'VI', 2022, 4, '2022-06-25', '2022-06-26', 'Pulang Kampung', '2022-06-24'),
('62bdd4057fc9d', '62b5e03e3a6e9', '003', 'VI', 2022, 4, '2022-07-01', '2022-07-08', 'Sakit', '2022-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `idDepartemen` int(11) NOT NULL,
  `namaDepartemen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`idDepartemen`, `namaDepartemen`) VALUES
(7, 'Keuangan'),
(8, 'Kepegawaian'),
(9, 'Pranata Kearsipan'),
(10, 'Juru Pungut Retribusi'),
(11, 'Kasubbag Tata Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `devisi`
--

CREATE TABLE `devisi` (
  `idDevisi` int(11) NOT NULL,
  `idDepartemen` int(11) NOT NULL,
  `namaDevisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devisi`
--

INSERT INTO `devisi` (`idDevisi`, `idDepartemen`, `namaDevisi`) VALUES
(8, 11, 'Pengawas Kebersihan Pasar'),
(9, 11, 'Pengawas Ketertiban Pasar');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `idGaji` varchar(20) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`idGaji`, `bulan`, `tahun`) VALUES
('62b5e4a21bf39', 'Juni', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `gaji_detail`
--

CREATE TABLE `gaji_detail` (
  `idGajiDetail` int(11) NOT NULL,
  `idGaji` varchar(20) NOT NULL,
  `idPegawai` varchar(20) NOT NULL,
  `nominalGaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gaji_rincian`
--

CREATE TABLE `gaji_rincian` (
  `idGajiRincian` int(11) NOT NULL,
  `idGajiDetail` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `nominalRincian` varchar(11) NOT NULL,
  `ket` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji_rincian`
--

INSERT INTO `gaji_rincian` (`idGajiRincian`, `idGajiDetail`, `deskripsi`, `nominalRincian`, `ket`) VALUES
(1, 1, 'a', '1000', '+'),
(2, 1, 'b', '500', '-');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `idGolongan` int(11) NOT NULL,
  `namaGolongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`idGolongan`, `namaGolongan`) VALUES
(1, 'I A'),
(2, 'I B'),
(3, 'I C'),
(4, 'I D'),
(5, 'II A'),
(6, 'II B'),
(7, 'II C'),
(8, 'II D'),
(9, 'III A'),
(10, 'III B'),
(11, 'III C'),
(12, 'III D'),
(13, 'IV A'),
(14, 'IV B'),
(15, 'IV C'),
(16, 'IV D');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idJabatan` int(11) NOT NULL,
  `namaJabatan` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`idJabatan`, `namaJabatan`) VALUES
(1, 'Kepala Sub Bagian Keuangan'),
(2, 'Kepala Sub Bagian Umum Kepegawaian'),
(3, 'Kepala Bidang Perindustrian'),
(4, 'Kepala Bidang Peningkatan Sarana Distribusi Perdagangan dan Pasar');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `idMutasi` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `ns` varchar(3) NOT NULL,
  `br` varchar(6) NOT NULL,
  `ts` int(4) NOT NULL,
  `devisiTujuan` int(11) NOT NULL,
  `tanggalMutasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`idMutasi`, `nik`, `ns`, `br`, `ts`, `devisiTujuan`, `tanggalMutasi`) VALUES
('6209cec15d6eb', '6309020407097001', '001', 'II', 2022, 4, '2022-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `naikpangkat`
--

CREATE TABLE `naikpangkat` (
  `idNaikPangkat` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `ns` varchar(3) NOT NULL,
  `br` varchar(6) NOT NULL,
  `ts` int(4) NOT NULL,
  `tanggalDitetapkan` date NOT NULL,
  `pangkatDitetapkan` int(11) NOT NULL,
  `golonganDitetapkan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naikpangkat`
--

INSERT INTO `naikpangkat` (`idNaikPangkat`, `nik`, `ns`, `br`, `ts`, `tanggalDitetapkan`, `pangkatDitetapkan`, `golonganDitetapkan`) VALUES
('62b5e23ea98e7', '6309020407097001', '001', 'VI', 2022, '2022-06-25', 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `naikpegawai`
--

CREATE TABLE `naikpegawai` (
  `idNaikPegawai` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `ns` varchar(3) NOT NULL,
  `br` varchar(6) NOT NULL,
  `ts` int(4) NOT NULL,
  `tanggalDitetapkan` date NOT NULL,
  `statusKepegawaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naikpegawai`
--

INSERT INTO `naikpegawai` (`idNaikPegawai`, `nik`, `ns`, `br`, `ts`, `tanggalDitetapkan`, `statusKepegawaian`) VALUES
('62b06567b35db', '6309020407097001', '001', 'VI', 2022, '2022-06-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `idPangkat` int(11) NOT NULL,
  `namaPangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`idPangkat`, `namaPangkat`) VALUES
(2, 'Juru Muda Tingkat 1'),
(3, 'Juru Muda'),
(4, 'Juru');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` varchar(20) NOT NULL,
  `namaPegawai` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `noIndukKepegawaian` varchar(16) NOT NULL,
  `tanggalMulaiBekerja` date NOT NULL,
  `tanggalSelesai` date DEFAULT NULL,
  `jk` int(11) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `statusKepegawaian` int(11) NOT NULL,
  `idDevisi` int(11) NOT NULL,
  `idPangkat` int(11) NOT NULL,
  `idGolongan` int(11) NOT NULL,
  `idJabatan` varchar(30) NOT NULL,
  `noWa` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `roleId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL,
  `helpNumber` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `namaPegawai`, `nik`, `noIndukKepegawaian`, `tanggalMulaiBekerja`, `tanggalSelesai`, `jk`, `tanggalLahir`, `tempatLahir`, `statusKepegawaian`, `idDevisi`, `idPangkat`, `idGolongan`, `idJabatan`, `noWa`, `alamat`, `roleId`, `isActive`, `username`, `password`, `foto`, `helpNumber`) VALUES
('62b5e03e3a6e9', 'Muhammad Syaifullah, S.Kom', '6309020407097001', '2163240622001', '2022-06-25', '2023-06-25', 1, '1998-05-31', 'Banjarmasin', 2, 8, 2, 9, '2', '085156362232', 'Jl. Bakti Utama No 1', 3, 1, 'syaiful123', '$2y$10$4F224Wo3yDBNfBZU0wrYF.sXsqkTmZ/DPPzzdauBSlM/Znv14VLba', '63224e95fb803683776e251afdad97bf.jpg', '001'),
('62b5e10690225', 'Aulia Febby, S.M', '6309020407097002', '2163240622002', '2022-06-25', '0000-00-00', 2, '1997-06-20', 'Banjarbaru', 1, 9, 2, 10, '1', '085156362232', 'Jl. Cemara Raya Komp. Tanjung', 3, 1, 'febby123', '$2y$10$69zzoT/kHcKrMSDUezsZIuwQzyDczyjQrB.4PXE2gLAvuhPbwByEi', '279860932_407170168081950_6545682480426208850_n3.jpg', '002');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `idPrestasi` varchar(20) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`idPrestasi`, `bulan`, `tahun`) VALUES
('62b5e270dc119', 'Juni', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_detail`
--

CREATE TABLE `prestasi_detail` (
  `idPrestasiDetail` int(11) NOT NULL,
  `idPrestasi` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `prestasiDiraih` varchar(100) NOT NULL,
  `kerajinan` int(11) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `perilaku` int(11) NOT NULL,
  `profesional` int(11) NOT NULL,
  `tanggungJawab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi_detail`
--

INSERT INTO `prestasi_detail` (`idPrestasiDetail`, `idPrestasi`, `nik`, `prestasiDiraih`, `kerajinan`, `kehadiran`, `perilaku`, `profesional`, `tanggungJawab`) VALUES
(3, '6209b82b41549', '6309020407097001', 'Juara 1', 10, 9, 9, 9, 9),
(4, '6209b82b41549', '6309020407097002', 'Juara Olimpiade', 9, 9, 9, 9, 9),
(5, '62ab222d9cf5a', '6309020407097001', 'Mengembangan Pasar Modern', 9, 9, 9, 9, 9),
(6, '62b5e270dc119', '6309020407097001', 'Mengembangkan Pasar Modern', 9, 9, 9, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `teguran`
--

CREATE TABLE `teguran` (
  `idTeguran` varchar(20) NOT NULL,
  `ns` varchar(3) NOT NULL,
  `br` varchar(6) NOT NULL,
  `ts` int(4) NOT NULL,
  `blok` varchar(128) NOT NULL,
  `tanggalTeguran` date NOT NULL,
  `kesalahan` text NOT NULL,
  `hukuman` text NOT NULL,
  `biaya` varchar(128) NOT NULL,
  `terbilang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teguran`
--

INSERT INTO `teguran` (`idTeguran`, `ns`, `br`, `ts`, `blok`, `tanggalTeguran`, `kesalahan`, `hukuman`, `biaya`, `terbilang`) VALUES
('62bd81b51d394', '001', 'VI', 2022, 'Blok A', '2022-06-30', 'Melunasi Tunggakan', 'Segera melakukan pembayaran retribusi', '50000000', 'Lima Puluh Juta Rupiah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUsers` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `roleId` int(11) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noWa` varchar(20) NOT NULL,
  `isActive` int(11) NOT NULL,
  `foto` text NOT NULL,
  `dateCreated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUsers`, `username`, `password`, `roleId`, `namaLengkap`, `email`, `noWa`, `isActive`, `foto`, `dateCreated`) VALUES
('5f269419c1055', 'admin', '$2y$10$xNJGSXyRhe6A/fhm3qw8LeDQtO.wn/H59XXpZ3ad81xfxuvBw6UTG', 1, 'Raden M. Naufal', 'radenmnaufalrms@gmail.com', '081223231212', 1, '', 0),
('62acb3e03bbbe', 'ahim123', '$2y$10$Ey2JU6q6wI1KDBVK7BTPMegL6ejKpX0E/PoNjYy.nuNU2zAAIh3ym', 2, 'Abdur Rohim', 'ahimahim123@gmail.com', '0851-5636-2232', 1, '', 1655485408);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`idAbsen`);

--
-- Indexes for table `absen_detail`
--
ALTER TABLE `absen_detail`
  ADD PRIMARY KEY (`idAbsenDetail`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`idCuti`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`idDepartemen`);

--
-- Indexes for table `devisi`
--
ALTER TABLE `devisi`
  ADD PRIMARY KEY (`idDevisi`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`idGaji`);

--
-- Indexes for table `gaji_detail`
--
ALTER TABLE `gaji_detail`
  ADD PRIMARY KEY (`idGajiDetail`);

--
-- Indexes for table `gaji_rincian`
--
ALTER TABLE `gaji_rincian`
  ADD PRIMARY KEY (`idGajiRincian`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`idGolongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`idMutasi`);

--
-- Indexes for table `naikpangkat`
--
ALTER TABLE `naikpangkat`
  ADD PRIMARY KEY (`idNaikPangkat`);

--
-- Indexes for table `naikpegawai`
--
ALTER TABLE `naikpegawai`
  ADD PRIMARY KEY (`idNaikPegawai`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`idPangkat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`idPrestasi`);

--
-- Indexes for table `prestasi_detail`
--
ALTER TABLE `prestasi_detail`
  ADD PRIMARY KEY (`idPrestasiDetail`);

--
-- Indexes for table `teguran`
--
ALTER TABLE `teguran`
  ADD PRIMARY KEY (`idTeguran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_detail`
--
ALTER TABLE `absen_detail`
  MODIFY `idAbsenDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `idDepartemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `devisi`
--
ALTER TABLE `devisi`
  MODIFY `idDevisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gaji_detail`
--
ALTER TABLE `gaji_detail`
  MODIFY `idGajiDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gaji_rincian`
--
ALTER TABLE `gaji_rincian`
  MODIFY `idGajiRincian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `idGolongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `idPangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prestasi_detail`
--
ALTER TABLE `prestasi_detail`
  MODIFY `idPrestasiDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
