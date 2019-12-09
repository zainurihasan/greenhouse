-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2019 pada 09.56
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrolnode`
--

CREATE TABLE `kontrolnode` (
  `id` int(10) NOT NULL,
  `selenoid1` varchar(10) NOT NULL,
  `selenoid2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontrolnode`
--

INSERT INTO `kontrolnode` (`id`, `selenoid1`, `selenoid2`) VALUES
(1, 'off', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrolpupuk`
--

CREATE TABLE `kontrolpupuk` (
  `id` int(11) NOT NULL,
  `selenoid1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontrolpupuk`
--

INSERT INTO `kontrolpupuk` (`id`, `selenoid1`) VALUES
(1, 'off');

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitortandon`
--

CREATE TABLE `monitortandon` (
  `id` int(11) NOT NULL,
  `ppm` varchar(10) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `monitortandon`
--

INSERT INTO `monitortandon` (`id`, `ppm`, `suhu`, `waktu`) VALUES
(1, '100', '30', '2019-12-09 07:37:35'),
(2, '200', '36', '2019-12-09 08:36:08'),
(3, '76', '29', '2019-12-09 08:36:34'),
(4, '1000', '45', '2019-12-09 08:46:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor`
--

CREATE TABLE `sensor` (
  `id_no` int(10) NOT NULL,
  `sensor1` varchar(10) NOT NULL,
  `sensor2` varchar(10) NOT NULL,
  `sensor3` varchar(10) NOT NULL,
  `sensor4` varchar(10) NOT NULL,
  `sensor5` varchar(10) NOT NULL,
  `sensor6` varchar(10) NOT NULL,
  `ph1` varchar(20) NOT NULL,
  `ph2` varchar(20) NOT NULL,
  `ph3` varchar(20) NOT NULL,
  `ph4` varchar(20) NOT NULL,
  `ph5` varchar(20) NOT NULL,
  `ph6` varchar(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor`
--

INSERT INTO `sensor` (`id_no`, `sensor1`, `sensor2`, `sensor3`, `sensor4`, `sensor5`, `sensor6`, `ph1`, `ph2`, `ph3`, `ph4`, `ph5`, `ph6`, `waktu`) VALUES
(2438, '100', '155', '3', '5', '4', '2', '2.3', '5.4', '7.4', '7.00', '2.9', '7.8', '2019-12-01 16:26:51'),
(2439, '10', '12', '16', '13', '16', '20', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-01 17:17:43'),
(2440, '7', '8', '8', '12', '13', '13', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-01 18:17:44'),
(2441, '30', '37', '41', '36', '41', '44', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-01 19:17:44'),
(2442, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-01 20:17:45'),
(2443, '4', '5', '6', '3', '3', '4', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-01 21:17:46'),
(2444, '14', '17', '17', '20', '22', '22', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-01 22:17:46'),
(2445, '16', '20', '25', '21', '26', '31', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-01 23:17:47'),
(2446, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 00:17:47'),
(2447, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 01:17:48'),
(2448, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 02:17:48'),
(2449, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 03:17:49'),
(2450, '29', '38', '43', '37', '44', '48', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 04:17:49'),
(2451, '10', '12', '15', '13', '15', '18', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 05:17:50'),
(2452, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 06:17:51'),
(2453, '2', '1', '0', '5', '5', '5', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 07:17:52'),
(2454, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 08:17:52'),
(2455, '24', '31', '36', '31', '36', '41', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 09:17:53'),
(2456, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 10:17:53'),
(2457, '21', '27', '32', '28', '33', '38', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 11:17:54'),
(2458, '26', '32', '35', '33', '38', '41', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 12:17:54'),
(2459, '23', '28', '33', '28', '34', '38', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 13:17:55'),
(2460, '15', '20', '23', '21', '25', '28', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 14:17:56'),
(2461, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 15:17:57'),
(2462, '16', '20', '24', '21', '24', '28', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 16:17:58'),
(2463, '15', '18', '22', '20', '22', '26', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 17:17:58'),
(2464, '15', '19', '25', '22', '27', '31', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 18:17:59'),
(2465, '0', '0', '0', '1', '1', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 19:17:59'),
(2466, '17', '21', '26', '22', '26', '30', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 20:18:00'),
(2467, '18', '23', '25', '25', '30', '31', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 21:18:00'),
(2468, '17', '21', '22', '23', '26', '27', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 22:18:01'),
(2469, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-02 23:18:01'),
(2470, '23', '29', '35', '30', '35', '41', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 00:18:02'),
(2471, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 01:18:02'),
(2472, '1', '0', '0', '3', '3', '2', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 02:18:03'),
(2473, '29', '37', '41', '37', '42', '43', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 03:18:03'),
(2474, '25', '32', '35', '32', '38', '40', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 04:18:04'),
(2475, '19', '24', '29', '25', '30', '34', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 05:18:04'),
(2476, '21', '27', '31', '27', '32', '37', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 06:18:05'),
(2477, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 07:18:06'),
(2478, '27', '34', '37', '32', '38', '41', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 09:18:14'),
(2479, '0', '0', '0', '0', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 10:18:15'),
(2480, '10', '14', '16', '13', '15', '16', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 11:18:15'),
(2481, '23', '29', '33', '29', '34', '39', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2019-12-03 12:18:16'),
(2482, '21', '21', '21', '21', '21', '21', '0.0', '7.0', '0.0', '7.0', '0.0', '7.0', '2019-12-03 21:15:13'),
(2483, '21', '21', '21', '21', '21', '21', '0.0', '7.0', '0.0', '7.0', '0.0', '7.0', '2019-12-03 21:31:00'),
(2484, '21', '21', '21', '21', '21', '21', '0.0', '7.0', '0.0', '7.0', '0.0', '7.0', '2019-12-03 21:38:34'),
(2485, '21', '21', '21', '21', '21', '21', '0.0', '7.0', '0.0', '7.0', '0.0', '7.0', '2019-12-03 21:39:19'),
(2486, '21', '21', '21', '21', '21', '21', '0.0', '7.0', '0.0', '7.0', '0.0', '7.0', '2019-12-03 21:54:00'),
(2487, '21', '21', '21', '21', '21', '21', '0.0', '7.0', '0.0', '7.0', '0.0', '7.0', '2019-12-03 22:05:28'),
(2488, '21', '21', '21', '21', '21', '21', '0.0', '7.0', '0.0', '7.0', '0.0', '7.0', '2019-12-03 22:08:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `durasij` varchar(10) NOT NULL,
  `durasim` varchar(10) NOT NULL,
  `jadwalj` varchar(10) NOT NULL,
  `jadwalm` varchar(10) NOT NULL,
  `mink` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `durasij`, `durasim`, `jadwalj`, `jadwalm`, `mink`) VALUES
(1, '0', '30', '12', '30', '50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontrolnode`
--
ALTER TABLE `kontrolnode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontrolpupuk`
--
ALTER TABLE `kontrolpupuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `monitortandon`
--
ALTER TABLE `monitortandon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id_no`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontrolnode`
--
ALTER TABLE `kontrolnode`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontrolpupuk`
--
ALTER TABLE `kontrolpupuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `monitortandon`
--
ALTER TABLE `monitortandon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2489;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
