-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Okt 2016 pada 12.05
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `photo_storage_location` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `people`
--

INSERT INTO `people` (`id`, `photo_storage_location`, `name`, `slug`, `description`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, '../media/images/shared/57f4d3ed89b27.jpg', 'Tan Siddharta', 'tan-siddharta', 'Managing partner and founder,with more than 20 years experience in auditing corporate finance,human resources and equity restructuring. He used to work with coopers & Lybrand International and as Chief Financial Officer with one major paper mills company in Indonesia. His credential includies in public and private company. Multi national,regional and national company,with various type of business from financial services to plantations, from general trading to integrated manufacturing company', 1, '2016-09-29 09:41:10', 1, '2016-10-05 17:22:06', 1),
(3, '../media/images/shared/people/thumbs/57ec7b9e87b61.PNG', 'Test', 'test', 'teadasd', 1, '2016-09-29 15:55:14', 1, '2016-09-29 15:57:25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
