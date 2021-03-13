-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2021 pada 02.55
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
`id` int(11) NOT NULL,
`id_employee` int(11) NOT NULL,
`employee_name` varchar(128) NOT NULL,
`employee_salary` double NOT NULL,
`employee_age` double NOT NULL,
`profile_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `id_employee`, `employee_name`, `employee_salary`, `employee_age`, `profile_image`) VALUES
(1, 1, 'Tiger Nixon', 320800, 61, ''),
(2, 2, 'Garrett Winters', 170750, 63, ''),
(3, 3, 'Ashton Cox', 86000, 66, ''),
(4, 4, 'Cedric Kelly', 433060, 22, ''),
(5, 5, 'Airi Satou', 162700, 33, ''),
(6, 6, 'Brielle Williamson', 372000, 61, ''),
(7, 7, 'Herrod Chandler', 137500, 59, ''),
(8, 8, 'Rhona Davidson', 327900, 55, ''),
(9, 9, 'Colleen Hurst', 205500, 39, ''),
(10, 10, 'Sonya Frost', 103600, 23, ''),
(11, 11, 'Jena Gaines', 90560, 30, ''),
(12, 12, 'Quinn Flynn', 342000, 22, ''),
(13, 13, 'Charde Marshall', 470600, 36, ''),
(14, 14, 'Haley Kennedy', 313500, 43, ''),
(15, 15, 'Tatyana Fitzpatrick', 385750, 19, ''),
(16, 16, 'Michael Silva', 198500, 66, ''),
(17, 17, 'Paul Byrd', 725000, 64, ''),
(18, 18, 'Gloria Little', 237500, 59, ''),
(19, 19, 'Bradley Greer', 132000, 41, ''),
(20, 20, 'Dai Rios', 217500, 35, ''),
(21, 21, 'Jenette Caldwell', 345000, 30, ''),
(22, 22, 'Yuri Berry', 675000, 40, ''),
(23, 23, 'Caesar Vance', 106450, 21, ''),
(24, 24, 'Doris Wilder', 85600, 23, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;