-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2021 at 03:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsispenban`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataalternatif`
--

CREATE TABLE `dataalternatif` (
  `IdAlternatif` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `NoKK` varchar(30) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `IdJenisBantuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataalternatif`
--

INSERT INTO `dataalternatif` (`IdAlternatif`, `NIK`, `NoKK`, `Nama`, `IdJenisBantuan`) VALUES
('A001', '14045', '170030091', 'Farrel Arrahman', 'J001'),
('A002', '14046', '170030017', 'Alif Darmawan', 'J001'),
('A003', '14047', '170030060', 'Oksa Candra', 'J001'),
('A004', '14048', '170030300', 'Satya Prasetyo', 'J001');

-- --------------------------------------------------------

--
-- Table structure for table `dataanalisa`
--

CREATE TABLE `dataanalisa` (
  `IdAnalisa` varchar(30) NOT NULL,
  `IdAlternatif` varchar(30) NOT NULL,
  `StatusPenerima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataanalisa`
--

INSERT INTO `dataanalisa` (`IdAnalisa`, `IdAlternatif`, `StatusPenerima`) VALUES
('AN001', 'A001', 'Berhak'),
('AN002', 'A002', 'Berhak'),
('AN003', 'A003', 'Berhak'),
('AN004', 'A004', 'Tidak Berhak');

-- --------------------------------------------------------

--
-- Table structure for table `datadetailanalisa`
--

CREATE TABLE `datadetailanalisa` (
  `IdDetailAnalisa` varchar(30) NOT NULL,
  `IdAnalisa` varchar(30) NOT NULL,
  `IdDetailKriteria` varchar(30) NOT NULL,
  `Nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datadetailanalisa`
--

INSERT INTO `datadetailanalisa` (`IdDetailAnalisa`, `IdAnalisa`, `IdDetailKriteria`, `Nilai`) VALUES
('DA001', 'AN001', 'DK001', 5),
('DA002', 'AN001', 'DK002', 4),
('DA003', 'AN001', 'DK003', 3),
('DA004', 'AN001', 'DK004', 4),
('DA005', 'AN001', 'DK005', 5),
('DA006', 'AN001', 'DK006', 4),
('DA007', 'AN001', 'DK007', 3),
('DA008', 'AN001', 'DK008', 4),
('DA009', 'AN001', 'DK009', 5),
('DA010', 'AN001', 'DK010', 4),
('DA011', 'AN002', 'DK001', 4),
('DA012', 'AN002', 'DK002', 3),
('DA013', 'AN002', 'DK003', 2),
('DA014', 'AN002', 'DK004', 3),
('DA015', 'AN002', 'DK005', 4),
('DA016', 'AN002', 'DK006', 3),
('DA017', 'AN002', 'DK007', 2),
('DA018', 'AN002', 'DK008', 3),
('DA019', 'AN002', 'DK009', 4),
('DA020', 'AN002', 'DK010', 3),
('DA021', 'AN003', 'DK001', 5),
('DA022', 'AN003', 'DK002', 3),
('DA023', 'AN003', 'DK003', 3),
('DA024', 'AN003', 'DK004', 3),
('DA025', 'AN003', 'DK005', 5),
('DA026', 'AN003', 'DK006', 3),
('DA027', 'AN003', 'DK007', 3),
('DA028', 'AN003', 'DK008', 3),
('DA029', 'AN003', 'DK009', 5),
('DA030', 'AN003', 'DK010', 3),
('DA031', 'AN004', 'DK001', 3),
('DA032', 'AN004', 'DK002', 4),
('DA033', 'AN004', 'DK003', 5),
('DA034', 'AN004', 'DK004', 4),
('DA035', 'AN004', 'DK005', 3),
('DA036', 'AN004', 'DK006', 2),
('DA037', 'AN004', 'DK007', 3),
('DA038', 'AN004', 'DK008', 4),
('DA039', 'AN004', 'DK009', 5),
('DA040', 'AN004', 'DK010', 4);

-- --------------------------------------------------------

--
-- Table structure for table `datadetailkriteria`
--

CREATE TABLE `datadetailkriteria` (
  `IdDetailKriteria` varchar(30) NOT NULL,
  `IdJenisBantuan` varchar(30) NOT NULL,
  `IdKriteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datadetailkriteria`
--

INSERT INTO `datadetailkriteria` (`IdDetailKriteria`, `IdJenisBantuan`, `IdKriteria`) VALUES
('DK001', 'J001', 'K006'),
('DK002', 'J001', 'K007'),
('DK003', 'J001', 'K008'),
('DK004', 'J001', 'K009'),
('DK005', 'J001', 'K010'),
('DK006', 'J001', 'K011'),
('DK007', 'J001', 'K012'),
('DK008', 'J001', 'K013'),
('DK009', 'J001', 'K014'),
('DK010', 'J001', 'K015');

-- --------------------------------------------------------

--
-- Table structure for table `datajenisbantuan`
--

CREATE TABLE `datajenisbantuan` (
  `IdJenisBantuan` varchar(30) NOT NULL,
  `NamaJenisBantuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datajenisbantuan`
--

INSERT INTO `datajenisbantuan` (`IdJenisBantuan`, `NamaJenisBantuan`) VALUES
('J001', 'PKH (Program Keluarga Harapan)'),
('J002', 'Bantuan Sembako'),
('J003', 'BST (Bantuan Sosial Tunai)'),
('J004', 'Bantuan Bedah Rumah');

-- --------------------------------------------------------

--
-- Table structure for table `datakriteria`
--

CREATE TABLE `datakriteria` (
  `IdKriteria` varchar(30) NOT NULL,
  `NamaKriteria` varchar(500) NOT NULL,
  `BobotKriteria` int(5) NOT NULL,
  `JenisKriteria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakriteria`
--

INSERT INTO `datakriteria` (`IdKriteria`, `NamaKriteria`, `BobotKriteria`, `JenisKriteria`) VALUES
('K001', 'Luas lantai bangunan tempat tinggal', 4, 'COST'),
('K002', 'Jenis lantai tempat tinggal', 4, 'COST'),
('K003', 'Jenis dinding tempat tinggal', 4, 'COST'),
('K004', 'Tidak memiliki kamar mandi yang memadai', 3, 'BENEFIT'),
('K005', 'Sumber penerangan rumah tangga tidak menggunakan listrik', 3, 'COST'),
('K006', 'Sumber air minum berasal dari sumur atau mata air yang tidak terlindungi', 4, 'COST'),
('K007', 'Hanya mengkonsumsi daging/susu/ayam dalam satu kali seminggu', 3, 'COST'),
('K008', 'Hanya membeli satu setel pakaian baru dalam setahun', 3, 'COST'),
('K009', 'Hanya sanggup makan sebanyak satu atau dua kali dalam sehari', 5, 'COST'),
('K010', 'Tidak sanggup membayar biaya pengobatan di puskesmas atau poliklinik', 5, 'BENEFIT'),
('K011', 'Sumber penghasilan kepala rumah tangga dibawah Rp. 600.000 per bulan', 5, 'COST'),
('K012', 'Pendidikan tertinggi kepala rumah tangga', 4, 'COST'),
('K013', 'Tidak memiliki tabungan atau barang yang mudah dijual dengan minimal lainnya Rp. 600.000', 4, 'BENEFIT'),
('K014', 'Tidak sanggup membayar biaya pendidikan anak', 5, 'BENEFIT'),
('K015', 'Jumlah anak yang berstatus masih sekolah', 4, 'BENEFIT');

-- --------------------------------------------------------

--
-- Table structure for table `datalogin`
--

CREATE TABLE `datalogin` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `LevelUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datalogin`
--

INSERT INTO `datalogin` (`Username`, `Password`, `LevelUser`) VALUES
('admin', 'admin', 'Admin'),
('kepdes', 'kepdes', 'Decision Maker');

-- --------------------------------------------------------

--
-- Table structure for table `datasubkriteria`
--

CREATE TABLE `datasubkriteria` (
  `IdSubKriteria` varchar(30) NOT NULL,
  `IdKriteria` varchar(30) NOT NULL,
  `NamaSubKriteria` varchar(500) NOT NULL,
  `BobotSubKriteria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasubkriteria`
--

INSERT INTO `datasubkriteria` (`IdSubKriteria`, `IdKriteria`, `NamaSubKriteria`, `BobotSubKriteria`) VALUES
('SK001', 'K006', 'Air hujan', 5),
('SK002', 'K006', 'Air sungai', 4),
('SK003', 'K006', 'Sumur atau mata air tidak bersih', 3),
('SK004', 'K006', 'Sumur bersih', 2),
('SK005', 'K006', 'PDAM', 1),
('SK006', 'K007', 'Makan daging hanya sekali dalam seminggu', 5),
('SK007', 'K007', 'Makan daging 2x dalam seminggu', 4),
('SK008', 'K007', 'Makan daging 3x dalam seminggu', 3),
('SK009', 'K007', 'Makan daging 4x dalam seminggu', 2),
('SK010', 'K007', 'Makan daging setiap hari', 1),
('SK011', 'K008', 'Tidak dapat membeli pakaian baru dalam setahun', 5),
('SK012', 'K008', 'Hanya membeli 1 set pakaian dalam setahun', 4),
('SK013', 'K008', 'Membeli lebih dari 1 set pakaian dalam setahun', 3),
('SK014', 'K008', 'Membeli lebih dari 2 set pakaian dalam setahun', 2),
('SK015', 'K008', 'Membeli lebih dari 3 set pakaian dalam setahun', 1),
('SK016', 'K009', 'Tidak sanggup makan', 5),
('SK017', 'K009', 'Makan 1x sehari', 4),
('SK018', 'K009', 'Makan 2x sehari', 3),
('SK019', 'K009', 'Makan 3x sehari', 2),
('SK020', 'K009', 'Makan lebih dari 3x sehari', 1),
('SK021', 'K010', 'Tidak sanggup membayar', 5),
('SK022', 'K010', 'Hanya sanggup membayar seperempat', 4),
('SK023', 'K010', 'Sanggup membayar setengah', 3),
('SK024', 'K010', 'Sanggup membayar lunas', 2),
('SK025', 'K010', 'Sanggup membayar berobat kapanpun', 1),
('SK026', 'K011', '100.000 - 500.000', 5),
('SK027', 'K011', '500.000 - 1.000.000', 4),
('SK028', 'K011', '1.000.000 - 1.500.000', 3),
('SK029', 'K011', '1.500.000 - 2.000.000', 2),
('SK030', 'K011', '2.500.000 - 3.000.000', 1),
('SK031', 'K012', 'Tidak sekolah', 5),
('SK032', 'K012', 'Tidak tamat SD', 4),
('SK033', 'K012', 'Tamatan SD', 3),
('SK034', 'K012', 'Tamatan SMP', 2),
('SK035', 'K012', 'Tamatan SMA', 1),
('SK036', 'K013', 'Tidak memiliki ', 5),
('SK037', 'K013', 'Hanya memiliki ternak', 4),
('SK038', 'K013', 'Memiliki sepeda motor atau emas', 3),
('SK039', 'K013', 'Memiliki asset lainnya', 2),
('SK040', 'K013', 'Memiliki banyak asset', 1),
('SK041', 'K014', 'Tidak sanggup membayar biaya pendidikan', 5),
('SK042', 'K014', 'Hanya sanggup membayar seperempat dari biaya pendidikan anak', 4),
('SK043', 'K014', 'Sanggup membayar setengah dari biaya pendidikan anak', 3),
('SK044', 'K014', 'Sanggup membayar lunas dari pendidikan anak', 2),
('SK045', 'K014', 'Sanggup membayar biaya pendidikan kapanpun', 1),
('SK046', 'K015', 'Memiliki anak lebih dari 3', 5),
('SK047', 'K015', 'Memiliki 3 anak', 4),
('SK048', 'K015', 'Memiliki 2 anak', 3),
('SK049', 'K015', 'Hanya memiliki 1 anak', 2),
('SK050', 'K015', 'Tidak memiliki anak', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataalternatif`
--
ALTER TABLE `dataalternatif`
  ADD PRIMARY KEY (`IdAlternatif`);

--
-- Indexes for table `dataanalisa`
--
ALTER TABLE `dataanalisa`
  ADD PRIMARY KEY (`IdAnalisa`);

--
-- Indexes for table `datadetailanalisa`
--
ALTER TABLE `datadetailanalisa`
  ADD PRIMARY KEY (`IdDetailAnalisa`);

--
-- Indexes for table `datadetailkriteria`
--
ALTER TABLE `datadetailkriteria`
  ADD PRIMARY KEY (`IdDetailKriteria`);

--
-- Indexes for table `datajenisbantuan`
--
ALTER TABLE `datajenisbantuan`
  ADD PRIMARY KEY (`IdJenisBantuan`);

--
-- Indexes for table `datakriteria`
--
ALTER TABLE `datakriteria`
  ADD PRIMARY KEY (`IdKriteria`);

--
-- Indexes for table `datalogin`
--
ALTER TABLE `datalogin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `datasubkriteria`
--
ALTER TABLE `datasubkriteria`
  ADD PRIMARY KEY (`IdSubKriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
