-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 06:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velvet`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(20) NOT NULL,
  `id_transaksi` int(20) NOT NULL,
  `metodepembayaran` varchar(20) NOT NULL,
  `totalharga` int(20) NOT NULL,
  `alamat_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` varchar(20) NOT NULL,
  `nama_katalog` varchar(20) NOT NULL,
  `harga_katalog` int(20) NOT NULL,
  `gambar_katalog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `nama_katalog`, `harga_katalog`, `gambar_katalog`) VALUES
('1', 'Blue Denim Jacket', 250000, './Welcome to Otong.com_files/katalog1(1).jpg'),
('2', 'Denim long jacket', 300000, './Welcome to Otong.com_files/katalog2(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `kometar` text NOT NULL,
  `id_katalog` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `username`, `kometar`, `id_katalog`) VALUES
(1, 'panjibgskr', 'sdbfjhsbdjh', '1'),
(2, 'panjibgskr', 'sdbfjhsbdjh', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id_katalog` varchar(20) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `statuspembayaran` varchar(10) NOT NULL,
  `totalharga` int(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `id_katalog`, `jumlahbarang`, `statuspembayaran`, `totalharga`) VALUES
(34, 'panjibgskr', '1', 12, 'unpaid', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(20) NOT NULL,
  `alamatuser` varchar(20) NOT NULL,
  `notelpuser` varchar(20) NOT NULL,
  `emailuser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `userpassword`, `alamatuser`, `notelpuser`, `emailuser`) VALUES
('panjibgskr', 'smartfre', 'bandung', '525234', 'panjibagaskara89@gma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_katalog` (`id_katalog`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_katalog` (`id_katalog`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_katalog` FOREIGN KEY (`id_katalog`) REFERENCES `katalog` (`id_katalog`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_katalog`) REFERENCES `katalog` (`id_katalog`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
