-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 30, 2022 at 11:38 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_photos`
--
CREATE DATABASE IF NOT EXISTS db_photos;

-- --------------------------------------------------------

--
-- Table structure for table `tb_photos`
--

CREATE TABLE `tb_photos` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `alt_text` varchar(150) NOT NULL,
  `desc_text` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_photos`
--

INSERT INTO `tb_photos` (`id`, `file_name`, `alt_text`, `desc_text`) VALUES
(1, 'imgs/photography/port_reflection_h.JPG', 'Darian', 'Darian\'s reflection'),
(3, 'imgs/photography/port_blurrypisa_h.jpg', 'Pisa', 'Pisa, 2018'),
(4, 'imgs/photography/port_lights_h.JPG', 'Neon', NULL),
(5, 'imgs/photography/port_walkingbiddahs_h.JPG', 'Buddha', NULL),
(6, 'imgs/photography/port_dnn1.jpg', 'Window', 'Darian and Nicholas'),
(7, 'imgs/photography/port_brodi_v.jpg', 'Brodi', 'Siena Italy, 2018'),
(9, 'imgs/photography/port_be_kind.png', 'BeKind', '\"Be Kind\" St.Thomas ON, 2020 Covid-19'),
(10, 'imgs/photography/port_concert_h.jpg', 'MilkyChance', 'Milky Chance, Guelph ON 2022'),
(11, 'imgs/photography/port_italy_film.png', 'Church', ''),
(12, 'imgs/photography/port_boat_bw_h.jpg', 'Boat', ''),
(13, 'imgs/photography/portt_beach1.png', 'Lifeguard', 'Black and White, Port Stanley ON 2022'),
(14, 'imgs/photography/port_maki_bw_h.png', 'Maki', ''),
(15, 'imgs/photography/port_nino_v.jpg', 'Nino', 'Office Politik Live in London ON 2022'),
(16, 'imgs/photography/port_house_v.jpg', 'House', ''),
(17, 'imgs/photography/port_italy_film2.png', 'Festival', 'Italy caught on film, Avellino'),
(18, 'imgs/photography/port_field_h.jpg', 'Field', ''),
(19, 'imgs/photography/port_beach_bw_h.jpg', 'Beach', ''),
(20, 'imgs/photography/port_figs.jpg', 'Figs', ''),
(21, 'imgs/photography/port_fast_h.JPG', 'Fast', ''),
(22, 'imgs/photography/port_alley_v.jpg', 'Alley', 'Roma, Trastevere, 2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_photos`
--
ALTER TABLE `tb_photos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
