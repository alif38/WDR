-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2019 at 02:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `world_data_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_data`
--

CREATE TABLE `home_data` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `author_photo` varchar(255) DEFAULT NULL,
  `author_link` varchar(255) DEFAULT NULL,
  `region` enum('India','Bangladesh','Pakistan','Nepal','Sri Lanka','Afghanistan','Bhutan','Maldives') DEFAULT NULL,
  `topic` enum('Digital Economy','Agriculture','Poverty','Education','Energy','Environmant','Demographics','Economy and Growth','Foreign Trade','Environment','Food Security','Health','Land Use','National Defense','Research and Development','Telecommunication','Transportation','Water','Companies','World Rankings') DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `photo` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `region_link` varchar(255) DEFAULT NULL,
  `topic_link` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` enum('latest','dontmiss','popular') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_data`
--

INSERT INTO `home_data` (`id`, `title`, `author`, `author_photo`, `author_link`, `region`, `topic`, `date`, `photo`, `text`, `region_link`, `topic_link`, `link`, `status`) VALUES
(1, 'How the digital economy grow', 'Azaz Jaman', 'Azaz_Zaman.jpg', 'azaz_zaman.php', 'Bangladesh', 'Digital Economy', '2019-10-30 07:08:52', 'm1.jpg', 'With the advent of rapid digitalization, many developing countries like Bangladesh are focusing on the digital economy: a global market for digital outsourcing. e range of new opportunities for people in emerging markets that did not previously exist. Asia has become the number-one region for providing outsourcing services to the rest of the world.', 'Bangladesh.php', 'digital_economy.php', 'digital_economy.php', 'latest'),
(2, 'Bangladesh’s ICT Sector: A new driver of economic growth', 'Azaz Zaman', 'Azaz_Zaman.jpg', 'azaz_zaman.php', 'Bangladesh', 'Economy and Growth', '2019-11-04 13:56:54', 'article.png', 'Bangladesh is one of the fastest-growing economies in South Asia. According to the World Bank 2019 report, Bangladesh is among the five fastest-growing economies in the world. Furthermore, the International Monetary Fund (IMF) has indicated that the economy of Bangladesh should grow at a rate of 7.3 percent this year, which is the second-highest in the world after Rwanda.', 'Bangladesh.php', 'economy_growth.php', 'bangladesh_ICT_sector.php', 'latest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_data`
--
ALTER TABLE `home_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_data`
--
ALTER TABLE `home_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
