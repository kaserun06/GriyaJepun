-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jepun`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_password_change`
--

CREATE TABLE `log_password_change` (
  `log_id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password_lama` varchar(50) NOT NULL,
  `password_baru` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_password_change`
--

INSERT INTO `log_password_change` (`log_id`, `username`, `password_lama`, `password_baru`, `waktu`) VALUES
(1, 'admin', 'admin123', 'admin12', '2022-06-09 17:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `nip` int(25) NOT NULL,
  `nama_karyawan` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `level` int(25) NOT NULL DEFAULT 1,
  `flag` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`nip`, `nama_karyawan`, `username`, `password`, `jabatan`, `alamat`, `no_tlp`, `level`, `flag`) VALUES
(2006785444, 'Dedik Setiawan', 'dedik', 'dedik', 'admin', 'Malang', '08563354556', 1, 1),
(2007876222, 'Agus juliarta', 'agus', 'agus', 'HRD', 'Jimbaran', '085424555636', 1, 1),
(2008561037, 'Nanda Nikola', 'admin', 'admin12', 'Admin', 'Banyuwangi Kota', '082233456', 1, 1),
(2008561299, 'Loid Forger', 'loid', 'forger', 'Manager', 'Westalis', '0333876222', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batal`
--

CREATE TABLE `tbl_batal` (
  `id_batal` int(25) NOT NULL,
  `id_reservasi` int(25) NOT NULL,
  `nama_tamu` varchar(25) NOT NULL,
  `kode_kamar` varchar(25) NOT NULL,
  `id_fasilitas` varchar(25) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  `lama_inap` int(25) NOT NULL,
  `total_biaya` int(25) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batal`
--

INSERT INTO `tbl_batal` (`id_batal`, `id_reservasi`, `nama_tamu`, `kode_kamar`, `id_fasilitas`, `tgl_check_in`, `tgl_check_out`, `lama_inap`, `total_biaya`, `status`) VALUES
(10, 56, 'Miftahul Liana', '009', '001', '2022-01-02', '2022-01-03', 1, 1350000, 'Batal'),
(11, 56, 'Miftahul Liana', '009', '001', '2022-01-02', '2022-01-03', 1, 1350000, 'Batal'),
(12, 58, 'Miftahul Liana', '001', '001', '2021-12-02', '2022-01-29', 58, 34800000, 'Batal'),
(13, 62, 'Miftahul Liana', '010', '001', '2022-06-09', '2022-06-10', 1, 500000, 'Batal'),
(14, 59, 'Miftahul Liana', '009', '001', '2021-12-02', '2021-12-03', 1, 1350000, 'Batal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` varchar(25) NOT NULL,
  `tipe_fasilitas` varchar(25) NOT NULL,
  `fasilitas` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `tipe_fasilitas`, `fasilitas`, `status`, `flag`) VALUES
('001', 'Paket 1 - Paket Reguler', 'Kamar Mandi Dalam', 'Tersedia', 1),
('002', 'Paket 2 - Paket Menengah', 'Kamar Mandi Dalam, Free W', 'Tersedia', 1),
('003', 'Paket 3 - Paket Komplit', 'Kamar Mandi Dalam, Free W', 'Tersedia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kos`
--

CREATE TABLE `tbl_kos` (
  `kode_kamar` varchar(25) NOT NULL,
  `nama_kamar` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `tarif` int(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kos`
--

INSERT INTO `tbl_kos` (`kode_kamar`, `nama_kamar`, `kelas`, `gambar`, `tarif`, `status`, `flag`) VALUES
('001', 'Elite 01', 'Reguler', 'kamar1.jpg', 600000, 'Available', 1),
('002', 'Special 01', 'Menengah', 'kamar2.jpg', 800000, 'Available', 1),
('003', 'Epic 01', 'Komplit', 'kamar3.jpg', 1000000, 'Available', 1),
('004', 'Elite 02', 'Reguler', 'kamar4.jpg', 550000, 'Available', 1),
('005', 'Special 02', 'Menengah', 'kamar5.jpg', 900000, 'Available', 1),
('006', 'Epic 02', 'Komplit', 'kamar6.jpg', 1200000, 'Available', 1),
('007', 'Elite 03', 'Reguler', 'kamar7.jpg', 700000, 'Available', 1),
('008', 'Special 03', 'Menengah', 'kamar8.png', 760000, 'Available', 1),
('009', 'Epic 03', 'Komplit', 'kamar9.png', 1350000, 'Available', 1),
('010', 'Elite 04', 'Reguler', 'kamar10.jpg', 500000, 'Available', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(37, 'Nanda Nikola', 'admin', 'admin12', 1),
(38, 'Nanda Nikola', '', '', 0),
(39, 'Arik Yuanda', 'arik', 'yuanda', 0),
(40, 'Agus juliarta', 'agus', 'agus', 1),
(41, 'Dedik Setiawan', 'dedik', 'dedik', 1),
(42, 'Loid Forger', 'loid', 'forger', 1),
(43, 'Miftahul Liana', 'liana', 'liana', 0),
(44, 'Ezra Walian', 'ezra', 'walian', 0);

--
-- Triggers `tbl_login`
--
DELIMITER $$
CREATE TRIGGER `after_password_update` AFTER UPDATE ON `tbl_login` FOR EACH ROW BEGIN
    INSERT INTO log_password_change (username, password_baru, password_lama, waktu) VALUES
    (OLD.username, NEW.password, OLD.password, NOW()); 
END$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_tamu` int(25) NOT NULL,
  `level` int(25) NOT NULL DEFAULT 0,
  `nama_tamu` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `flag` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_tamu`, `level`, `nama_tamu`, `username`, `password`, `jk`, `alamat`, `no_tlp`, `email`, `flag`) VALUES
(14, 0, 'Nanda Nikola', '', '', 'L', 'Legian, jl srirama no 12', '0827778990', 'nandanikola033@gmail.com', 1),
(15, 0, 'Arik Yuanda', 'arik', 'yuanda', 'L', 'Blokagung, jl ponpes daru', '087654333444', 'arikyuanda@gmail.com', 1),
(16, 0, 'Miftahul Liana', 'liana', 'liana', 'P', 'Balokan', '085234544789', 'liana@gmail.com', 1),
(17, 0, 'Ezra Walian', 'ezra', 'walian', 'L', 'sumber pakis', '123456789', 'ezra@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(25) NOT NULL,
  `id_reservasi` varchar(25) NOT NULL,
  `nama_tamu` varchar(25) NOT NULL,
  `kode_kamar` varchar(25) NOT NULL,
  `id_fasilitas` varchar(25) NOT NULL,
  `total_bayar` int(25) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `id_reservasi`, `nama_tamu`, `kode_kamar`, `id_fasilitas`, `total_bayar`, `status`) VALUES
(9, '61', 'Arik Yuanda', '001', '001', 600000, 'Terbayar'),
(10, '60', 'Arik Yuanda', '003', '001', 1000000, 'Terbayar'),
(11, '62', 'Miftahul Liana', '010', '001', 500000, 'Terbayar'),
(12, '59', 'Miftahul Liana', '009', '001', 1350000, 'Terbayar'),
(13, '63', 'Miftahul Liana', '006', '001', 1200000, 'Terbayar'),
(14, '64', 'Ezra Walian', '003', '001', 8000000, 'Terbayar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` int(25) NOT NULL,
  `nama_tamu` varchar(25) NOT NULL,
  `kode_kamar` varchar(25) NOT NULL,
  `id_fasilitas` varchar(25) NOT NULL,
  `tanggal_check_in` date NOT NULL,
  `tanggal_check_out` date NOT NULL,
  `lama_inap` int(25) NOT NULL,
  `total_biaya` int(25) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 1,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id_reservasi`, `nama_tamu`, `kode_kamar`, `id_fasilitas`, `tanggal_check_in`, `tanggal_check_out`, `lama_inap`, `total_biaya`, `flag`, `alamat`) VALUES
(56, 'Miftahul Liana', '009', '001', '2022-01-02', '2022-01-03', 1, 1350000, 0, 'Balokan'),
(57, 'Miftahul Liana', '002', '001', '2022-03-08', '2022-04-29', 52, 41600000, 1, 'Balokan'),
(58, 'Miftahul Liana', '001', '001', '2021-12-02', '2022-01-29', 58, 34800000, 0, 'blokagung'),
(59, 'Miftahul Liana', '009', '001', '2021-12-02', '2021-12-03', 1, 1350000, 0, 'Balokan'),
(60, 'Arik Yuanda', '003', '001', '2022-06-01', '2022-06-02', 1, 1000000, 1, 'blokagung'),
(61, 'Arik Yuanda', '001', '001', '2022-06-05', '2022-06-06', 1, 600000, 1, 'blokagung'),
(62, 'Miftahul Liana', '010', '001', '2022-06-09', '2022-06-10', 1, 500000, 0, 'blokagung'),
(63, 'Miftahul Liana', '006', '001', '2022-06-05', '2022-06-06', 1, 1200000, 1, 'blokagung'),
(64, 'Ezra Walian', '003', '001', '2022-06-09', '2022-06-17', 8, 8000000, 1, 'sumber pakis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_password_change`
--
ALTER TABLE `log_password_change`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_batal`
--
ALTER TABLE `tbl_batal`
  ADD PRIMARY KEY (`id_batal`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tbl_kos`
--
ALTER TABLE `tbl_kos`
  ADD PRIMARY KEY (`kode_kamar`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_tamu` (`nama_tamu`),
  ADD KEY `kode_kamar` (`kode_kamar`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_password_change`
--
ALTER TABLE `log_password_change`
  MODIFY `log_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_batal`
--
ALTER TABLE `tbl_batal`
  MODIFY `id_batal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_tamu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id_reservasi` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD CONSTRAINT `tbl_reservasi_ibfk_2` FOREIGN KEY (`kode_kamar`) REFERENCES `tbl_kos` (`kode_kamar`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reservasi_ibfk_3` FOREIGN KEY (`id_fasilitas`) REFERENCES `tbl_fasilitas` (`id_fasilitas`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
