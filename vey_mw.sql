-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 08:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vey_mw`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `donation_amount` decimal(10,0) NOT NULL,
  `donation_date` date NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `donor_name`, `email`, `password`, `phone_number`, `donation_amount`, `donation_date`, `message`, `status`) VALUES
(1, 'tep', 'sephrefil011@gmail.com', 'admin', '09949175415', 1500, '2024-11-10', 'pogi ako', 'complete'),
(2, 'Ahiezer', 'ahiezerocampo@gmail.com', '$2y$10$HJGwIzAwiblaIPSZQOynFeU.cc8VVbJ3TIDxYFMfAFBCGVg0YYWcu', '09949175415', 123123, '2024-11-23', 'rwe', 'complete'),
(3, 'Ahiezer', 'ahiezerocampo@gmail.com', '$2y$10$zoBH1tpJXtXpiGUk1mKnN.fHq0YSSBobIEAvDJQpXDbCRuLLOIZuu', '09949175415', 123123, '2024-11-23', 'rwe', 'complete'),
(4, 'Ahiezer', 'ahiezerocampo@gmail.com', '$2y$10$ywHVuCAblidrQYueCGlOHONvtaA2KPhg8Jm025ebsWh3MF1/3X34S', '09949175415', 123123, '2024-11-23', 'rwe', 'complete'),
(5, 'Ahiezer', 'ahiezerocampo@gmail.com', '$2y$10$O.28gQw5VDAor2rYZqYVUONgXtGGSTmZxpziNY0nsKtAYgZ3YMnf.', '09949175415', 123123, '2024-11-23', 'rwe', 'complete'),
(6, 'Ahiezer', 'ahiezerocampo@gmail.com', '$2y$10$lsiW6vXLlk/3HpFzeavWm.eRkUbjF/NJHC.afo.bFIaffqVb3GfVe', '09949175415', 123123, '2024-11-23', 'rwe', 'complete'),
(7, 'Pogi', 'ako@gmail.com', '$2y$10$RaR64rOXDYEXslq97..osObl.Wc2M31mQI9TuXbRDUJZ8Yafh7G16', '09168392047', 100000, '2024-11-07', 'Amen', 'Pending'),
(8, 'dddd', 'asd@gmail.com', '$2y$10$Cea54CUaYySHnD5SnUWhf.HtsfGF.89JKP8IrKA0LRhUk7czMhqgG', '123', 23421, '2024-11-29', 'freyruy', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
