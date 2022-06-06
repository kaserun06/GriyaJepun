-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 06:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbl_login` (
  `id` int(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_admin` (
  `nip` int(25) NOT NULL,
  `nama_karyawan` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `level` int(25) NOT NULL DEFAULT '1',
  `flag` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_admin` (`nip`, `nama_karyawan`, `username`, `password`, `jabatan`, `alamat`, `no_tlp`, `level`, `flag`) VALUES
(2008561037, 'Nanda Nikola', 'admin', 'admin123', 'Admin', 'Banyuwangi Kota', '082233456', 1, 1);

CREATE TABLE `tbl_kos` (
  `kode_kamar` varchar(25) NOT NULL,
  `nama_kamar` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `tarif` int(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` varchar(25) NOT NULL,
  `tipe_fasilitas` varchar(25) NOT NULL,
  `fasilitas` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(25) NOT NULL,
  `id_reservasi` varchar(25) NOT NULL,
  `nama_tamu` varchar(25) NOT NULL,
  `kode_kamar` varchar(25) NOT NULL,
  `id_fasilitas` varchar(25) NOT NULL,
  `total_bayar` int(25) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` int(25) NOT NULL,
  `nama_tamu` varchar(25) NOT NULL,
  `kode_kamar` varchar(25) NOT NULL,
  `id_fasilitas` varchar(25) NOT NULL,
  `tanggal_check_in` date NOT NULL,
  `tanggal_check_out` date NOT NULL,
  `lama_inap` int(25) NOT NULL,
  `total_biaya` int(25) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tbl_pelanggan` (
  `id_tamu` int(25) NOT NULL,
  `level` int(25) NOT NULL DEFAULT '0',
  `nama_tamu` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `flag` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tbl_batal`
  ADD PRIMARY KEY (`id_batal`);

ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

ALTER TABLE `tbl_kos`
  ADD PRIMARY KEY (`kode_kamar`);

ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`nip`);

ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_tamu` (`nama_tamu`),
  ADD KEY `kode_kamar` (`kode_kamar`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_tamu`);

ALTER TABLE `tbl_batal`
  MODIFY `id_batal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `tbl_login`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `tbl_reservasi`
  MODIFY `id_reservasi` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

ALTER TABLE `tbl_pelanggan`
  MODIFY `id_tamu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `tbl_reservasi`
  ADD CONSTRAINT `tbl_reservasi_ibfk_2` FOREIGN KEY (`kode_kamar`) REFERENCES `tbl_kos` (`kode_kamar`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reservasi_ibfk_3` FOREIGN KEY (`id_fasilitas`) REFERENCES `tbl_fasilitas` (`id_fasilitas`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

