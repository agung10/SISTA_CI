-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2021 at 02:06 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nf_sista`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penilaian`
--

CREATE TABLE `detail_penilaian` (
  `id` int NOT NULL,
  `penilaian_id` int NOT NULL,
  `dosen_id` int NOT NULL,
  `seminar_id` int DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penilaian`
--

INSERT INTO `detail_penilaian` (`id`, `penilaian_id`, `dosen_id`, `seminar_id`, `nilai`) VALUES
(8, 1, 1, 4, 80);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int NOT NULL,
  `nidn` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama`) VALUES
(1, '084020211', 'AMALIA RAHMAH, S.T, S.T, M.T'),
(2, '084040200', 'BACHTIAR FIRDAUS, S.T, M.P'),
(3, '084151108', 'KURNIAWAN DWI PRASETYO, S.T, M.T'),
(4, '084201001', 'MUHAMMAD BINTANG, S.Kom'),
(5, '084310911', 'NUGROHO DWI SAPUTRA, S.Kom, M.Ti'),
(6, '084290607', 'REZA ALDIANSYAH, S.T, M.Ti'),
(7, '084230787', 'RUSMANTO, M.M., Drs'),
(8, '084260989', 'SAPTO WALUYO, S.Sos, M.Sc.'),
(9, '0860696', 'SUHENDI, M.M.S.I, S.T'),
(10, '084010195', 'WARSONO, S.Kom, M.Ti'),
(11, '084241010', 'YEKTI WIRANI, S.T, M.Ti'),
(12, '084080200', 'DEDY ACHMADI, S.T, M.T'),
(13, '084071314', 'MISNA ASQIA, S.Kom, M.Kom'),
(14, '084050315', 'NURUL JANAH, S.IIP, M.HUM'),
(15, '084300500', 'EDI WIBOWO, S.E, M.M'),
(16, '084131310', 'AHMAD RIO ADRIANSYAH, S.Si, M.Si'),
(17, '084260511', 'APRIL RUSTIANTO, S.Kom, M.T'),
(18, '084070998', 'HENRY SAPTONO, S.Si, M.Kom'),
(19, '084111208', 'HILMY ABIDZAR TAWAKAL, S.T, M.Kom'),
(20, '084211202', 'LUKMAN ROSYIDI, S.T, M.M., M.T'),
(21, '084270601', 'REZA PRIMARDIANSYAH, S.T, M.Kom'),
(22, '084240913', 'SALMAN EL FARISI, S.Kom, M.Kom'),
(23, '084290398', 'SIGIT PUSPITO WIGATI JAROT,PhD'),
(24, '084140495', 'SIROJUL MUNIR, S.Si, M.Kom'),
(25, '084100915', 'TUBAGUS RIZKY DHARMAWAN, S.T, M.Sc.'),
(26, '084260907', 'ZAKI IMADUDDIN, S.T, M.Kom'),
(27, '084281214', 'ADITYA PUTRA, S.T, M.T'),
(28, '084101104', 'NASRUL, S.Kom, M.Kom'),
(29, '084200914', 'TIFANI NABARIAN, S.Kom, M.T.I'),
(30, '084301213', 'PUDY PRIMA, S.T, M.Kom'),
(31, '084240795', 'EFRIZAL ZAIDA, S.KOM, M.M, M.KOM'),
(32, '0899902010', 'TEGUH RAHARJO, S.Kom, M.Kom'),
(33, '084290906', 'ISHOM MUHAMMAD DREHEM,S.Kom, M.Kom'),
(34, '084141310', 'IMAM HAROMAIN, S.Si, M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_seminar`
--

CREATE TABLE `kategori_seminar` (
  `id` int NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kategori_seminar`
--

INSERT INTO `kategori_seminar` (`id`, `nama`, `date_created`) VALUES
(1, 'Seminar Proposal', '2021-07-09 23:07:06'),
(2, 'Seminar Hasil', '2021-05-16 16:59:00'),
(3, 'Sidang Skripsi', '2021-07-18 23:23:16'),
(14, 'Sidang Akhir', '2021-07-16 14:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `nama`, `keterangan`) VALUES
(1, 'Presentasi', 'pembukaan, intonasi, kesopanan, kerapihan pakaian'),
(2, 'Penguasaan Materi', 'cukup jelas'),
(3, 'Penulisan Dokumen', 'cukup jelas');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_seminar`
--

CREATE TABLE `peserta_seminar` (
  `id` int NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `seminar_id` int NOT NULL,
  `kehadiran` smallint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `seminar_ta`
--

CREATE TABLE `seminar_ta` (
  `id` int NOT NULL,
  `semester` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `kategori_seminar_id` int NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama_mahasiswa` varchar(45) DEFAULT NULL,
  `prodi` enum('Sistem Informasi','Teknik Informatika') NOT NULL,
  `judul` text,
  `pembimbing_id` int NOT NULL,
  `penguji1_id` int DEFAULT NULL,
  `penguji2_id` int DEFAULT NULL,
  `nilai_pembimbing` double DEFAULT NULL,
  `nilai_penguji1` double DEFAULT NULL,
  `nilai_penguji2` double DEFAULT NULL,
  `lokasi` varchar(40) DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `seminar_ta`
--

INSERT INTO `seminar_ta` (`id`, `semester`, `tanggal`, `jam`, `kategori_seminar_id`, `nim`, `nama_mahasiswa`, `prodi`, `judul`, `pembimbing_id`, `penguji1_id`, `penguji2_id`, `nilai_pembimbing`, `nilai_penguji1`, `nilai_penguji2`, `lokasi`, `nilai_akhir`) VALUES
(4, 4, '2021-07-17', '01:23:00', 1, '121332', 'Ramdhani', 'Teknik Informatika', 'FRAMEWORK', 2, 3, 5, 100, 87, 89, 'Be-232', 92),
(5, 3, '2021-07-17', '14:32:00', 2, '0110120196', 'Agung Budiman', 'Teknik Informatika', 'Perkembangan Framework PHP', 3, 2, 5, 80, 90, 100, 'Online Zoom', 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profil` varchar(128) NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `profil`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, 'Joko', 'joko@gmail.com', 'Sukuna1.png', '$2y$10$Nx30/RaMsBDIpDkXxHOpguQi8K9rjKnvgxS4obwiy7CDWYpnIZhGa', 0, 1, 1624461874),
(16, 'Admin', 'admin@gmail.com', 'Sukuna2.png', '$2y$10$JG/aKrpdQz0Gxr.y2yemKOnem8fxkj2vyc2hpcnBuS.2uOrUvAvNi', 1, 1, 1626332481),
(19, 'andi', 'andi@gmail.com', 'default.png', '$2y$10$FLXQEJqP7Tv8Jkl4mKfH8.ntoqcEmGtGQVS99373RmwsHFn4Mki.C', 2, 1, 1626332977),
(20, 'Joko', 'joko@gmail.com', 'default.png', '$2y$10$5.qi66RGJcxkDdF6qSqIYOHjUfv3yW4ivDSpkIkSBakgVPGdfLwLG', 2, 1, 1626332989),
(23, 'Sugeng', 'sugeng@gmail.com', 'HD-MacOS.jpg', '$2y$10$jf/HFIY7/xXsTLMOAxbHNOTPGfd/DL./XBOYGAjWvfnKdFT9e/iYy', 2, 1, 1626451753),
(24, 'riyadi', 'riyadi@gmail.com', '2725441.jpg', '$2y$10$sevINNVTyXO.Pp3Ec.jDKudzkYlb3owGIdKiBnFS8KsRqi99b.SLK', 2, 1, 1626451792),
(25, 'jono', 'jono@gmail.com', 'default.png', '$2y$10$JJu71.kuezyQm9.MwVuUT.97XhJSTgQWDk4S1JsZRJ09QTLUGWqFO', 2, 1, 1626494633),
(26, 'Suryadi Kece', 'suryadi@gmail.com', 'aot.png', '$2y$10$HYMTKdNrvowl4kv5aqL/SeT56tyfIFxQEyUg8qO9TewWk80HrXb4S', 2, 1, 1626496362);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_penilaian_penilaian1_idx` (`penilaian_id`),
  ADD KEY `fk_detail_penilaian_dosen1_idx` (`dosen_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_seminar`
--
ALTER TABLE `kategori_seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta_seminar`
--
ALTER TABLE `peserta_seminar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peserta_seminar_mahasiswa_seminar1_idx` (`seminar_id`);

--
-- Indexes for table `seminar_ta`
--
ALTER TABLE `seminar_ta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mahasiswa_seminar_kategori_seminar_idx` (`kategori_seminar_id`),
  ADD KEY `fk_mahasiswa_seminar_dosen1_idx` (`pembimbing_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `kategori_seminar`
--
ALTER TABLE `kategori_seminar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peserta_seminar`
--
ALTER TABLE `peserta_seminar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seminar_ta`
--
ALTER TABLE `seminar_ta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penilaian`
--
ALTER TABLE `detail_penilaian`
  ADD CONSTRAINT `fk_detail_penilaian_dosen1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_detail_penilaian_penilaian1` FOREIGN KEY (`penilaian_id`) REFERENCES `penilaian` (`id`);

--
-- Constraints for table `peserta_seminar`
--
ALTER TABLE `peserta_seminar`
  ADD CONSTRAINT `fk_peserta_seminar_mahasiswa_seminar1` FOREIGN KEY (`seminar_id`) REFERENCES `seminar_ta` (`id`);

--
-- Constraints for table `seminar_ta`
--
ALTER TABLE `seminar_ta`
  ADD CONSTRAINT `fk_mahasiswa_seminar_dosen1` FOREIGN KEY (`pembimbing_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_mahasiswa_seminar_kategori_seminar` FOREIGN KEY (`kategori_seminar_id`) REFERENCES `kategori_seminar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
