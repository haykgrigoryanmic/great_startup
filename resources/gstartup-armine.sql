-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 09:29 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstartup-armine`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sights`
--

CREATE TABLE `sights` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sights`
--

INSERT INTO `sights` (`id`, `name`, `description`, `website`, `address`, `map`, `picture`) VALUES
(4, 'Goshavank', 'Goshavank (Armenian: Գոշավանք; meaning \"Monastery of Gosh\"; previously known as Nor Getik) is a 12th- or 13th-century Armenian monastery located in the village of Gosh in the Tavush Province of Armenia. Today the monastery is not a functioning religious complex, although it remains a popular tourist destination and has recently undergone some light restoration. These restorations are being financed by an Islamic individual from the United Arab Emirates for reasons not fully understood. The impressive monastery which has remained in relatively good condition also houses one of the world\'s finest examples of a khachkar.', 'https://hy.wikipedia.org/wiki/%D4%B3%D5%B8%D5%B7%D5%A1%D5%BE%D5%A1%D5%B6%D6%84', 'Gosh, 3904, Armenia', 'https://goo.gl/maps/MoDJs2zZ5nL2', 'Goshavanq.jpg'),
(5, 'Mother See of Holy Etchmiadzin', 'Mother See of Holy Etchmiadzin (Armenian: Մայր Աթոռ Սուրբ Էջմիածին, Mayr At\'oř Surb Ēĵmiatsin), is the administrative headquarters of the Armenian Apostolic Church and the Pontifical Residence of the Supreme Patriarch and Catholicos of All Armenians.\r\n\r\nCovering an area of around 150,000 m², the complex includes the Etchmiadzin Cathedral, the vestry, residences, museums, Gevorkian Seminary, V. and T. Manoukian Library and many other amenities.', 'http://www.armenianchurch.org/index.jsp?&lng=en/', '1101 VAGHARSHAPAT REPUBLIC OF ARMENIA', 'https://goo.gl/maps/e8wntbAerZN2', 'Etchmiadzin.jpg'),
(6, 'Temple of Garni', 'The Temple of Garni (Armenian: Գառնիի հեթանոսական տաճար Gařnii het’anosakan tačar, lit. \"pagan temple of Garni\")[A] is a classical Hellenistic temple in Garni, Armenia. It is perhaps the best-known structure and symbol of pre-Christian Armenia.[B] It is the only standing Greco-Roman colonnaded building in Armenia and the former Soviet Union.[C]\r\n\r\nThe structure was probably built by king Tiridates I in the first century AD as a temple to the sun god Mihr. After Armenia\'s conversion to Christianity in the early fourth century, it was converted into a royal summer house of Khosrovidukht, the sister of Tiridates III. According to some scholars it was not a temple but a tomb and thus survived the universal destruction of pagan structures. It collapsed in a 1679 earthquake. Renewed interest in the 19th century led to excavations at the site in early and mid-20th century and its eventual reconstruction between 1969 and 1975. It is one of the main tourist attractions in Armenia and the central shrine of Armenian neopaganism.', 'https://en.wikipedia.org/wiki/Temple_of_Garni', 'Geghard Monastery Road H3, Garni, Armenia', 'https://goo.gl/maps/tuVdA72mzSk', 'Garni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passconf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `passconf`, `email`) VALUES
(16, 'jjj', 'hh', '', 'email@gmail.com'),
(17, 'aaaaaa', 'aaaaaa', '', 'aaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sights`
--
ALTER TABLE `sights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sights`
--
ALTER TABLE `sights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
