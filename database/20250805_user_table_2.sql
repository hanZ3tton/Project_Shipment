-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2025 at 01:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shipment`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `item_name` varchar(500) DEFAULT NULL,
  `sender_full_name` varchar(500) DEFAULT NULL,
  `sender_email` varchar(500) DEFAULT NULL,
  `sender_address` varchar(500) DEFAULT NULL,
  `sender_country_from` varchar(500) DEFAULT NULL,
  `sender_postal_code` int(11) DEFAULT NULL,
  `receiver_full_name` varchar(500) DEFAULT NULL,
  `receiver_email` varchar(500) DEFAULT NULL,
  `receiver_address` varchar(500) DEFAULT NULL,
  `receiver_country` varchar(500) DEFAULT NULL,
  `receiver_postal_code` int(11) DEFAULT NULL,
  `shipment_price` varchar(11) DEFAULT NULL,
  `receipt_code` varchar(500) DEFAULT NULL,
  `receiver_phone_number` varchar(128) DEFAULT NULL,
  `weight` varchar(128) DEFAULT NULL,
  `lenght` varchar(128) NOT NULL,
  `widht` varchar(128) NOT NULL,
  `height` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `item_name`, `sender_full_name`, `sender_email`, `sender_address`, `sender_country_from`, `sender_postal_code`, `receiver_full_name`, `receiver_email`, `receiver_address`, `receiver_country`, `receiver_postal_code`, `shipment_price`, `receipt_code`, `receiver_phone_number`, `weight`, `lenght`, `widht`, `height`, `created_at`, `user_id`, `service_id`) VALUES
(1, 'Glock 18', 'Jokowi', 'HidupJokowi@gmail.com', 'Istana Presiden', 'Indonesia', 123412, 'Joe Biden', 'JoeBiden@gmail.com', 'White House', 'Usa', 123456, '3500000', 'Niga', '6783412911', '2', '', '', '', '2025-08-05 11:35:14', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_service`
--

CREATE TABLE `shipment_service` (
  `id` int(11) NOT NULL,
  `service` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment_service`
--

INSERT INTO `shipment_service` (`id`, `service`) VALUES
(1, 'Express'),
(2, 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_status`
--

CREATE TABLE `shipment_status` (
  `id` bigint(20) NOT NULL,
  `current_location` varchar(500) DEFAULT NULL,
  `shipment_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_description`) VALUES
(1, 'Processing'),
(2, 'In Routes'),
(3, 'Package Arrived');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `full_name` varchar(500) DEFAULT NULL,
  `phone_number` varchar(128) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `image`, `full_name`, `phone_number`, `address`, `city`, `postal_code`, `email`, `password`, `created_at`) VALUES
(1, 'RajaGeming', 'default.jpg', 'M Raja', '6583472934', 'Mars', 'Jawa', 12412, 'jawa@gmail.com', 'RajaGeming123', '2025-08-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_service`
--
ALTER TABLE `shipment_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_status`
--
ALTER TABLE `shipment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipment_service`
--
ALTER TABLE `shipment_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipment_status`
--
ALTER TABLE `shipment_status`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
