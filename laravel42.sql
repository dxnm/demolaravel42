-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2015 at 04:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel42`
--

-- --------------------------------------------------------

--
-- Table structure for table `l42_users`
--

CREATE TABLE IF NOT EXISTS `l42_users` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `l42_users`
--

INSERT INTO `l42_users` (`id`, `username`, `password`, `email`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'admin', '$2y$10$FZTxeNCawjGnSCRSspZSJeuJ9I6BFgxwUd2SrTa8vsiFpeuW49R3.', 'admin@abc.com', '2015-10-28 15:20:11', '0000-00-00 00:00:00', 'qwifi1nclTIJ3ljlTS0OiqzKlLsm91WYC56EUFqYb0s8BWzzCOlkHR3qPUls'),
(2, 'user2', '$2y$10$FZTxeNCawjGnSCRSspZSJeuJ9I6BFgxwUd2SrTa8vsiFpeuW49R3.', 'user2@abc.com', '2015-10-28 09:45:46', '0000-00-00 00:00:00', ''),
(4, 'user4', '$2y$10$FZTxeNCawjGnSCRSspZSJeuJ9I6BFgxwUd2SrTa8vsiFpeuW49R3.', 'user4@abc.com', '2015-10-28 09:41:37', '2015-10-28 09:32:03', ''),
(5, 'user12', '$2y$10$rA13XavDjK4ObcPX1Y9MuOLE.gf2v9/Jv5p/ZAplTakBey9lraxsC', 'user12@abc.com', '2015-10-28 13:22:01', '2015-10-28 09:42:10', ''),
(7, 'user21', '$2y$10$iB20ZgXR7T.z3th4hinHFeEjAiitLwbm65O5.zCH3dkSYI1rsxU/W', 'user21@gmail.com', '2015-10-28 13:25:10', '2015-10-28 13:22:28', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `l42_users`
--
ALTER TABLE `l42_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `l42_users`
--
ALTER TABLE `l42_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
