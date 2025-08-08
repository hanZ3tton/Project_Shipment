-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2025 at 05:23 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_number` varchar(500) NOT NULL,
  `vehicle` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbound`
--

CREATE TABLE `inbound` (
  `id` bigint(20) NOT NULL,
  `shipment_id` varchar(500) DEFAULT NULL,
  `goods_company` varchar(500) DEFAULT NULL,
  `domestic_courier_name` varchar(500) DEFAULT NULL,
  `domestic_airway_bill` varchar(500) DEFAULT NULL,
  `receiver_full_name` varchar(500) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `goods_category` varchar(500) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifests`
--

CREATE TABLE `manifests` (
  `id` bigint(20) NOT NULL,
  `manifest_code` varchar(255) DEFAULT NULL,
  `manifest_date` date DEFAULT NULL,
  `mawb` varchar(255) DEFAULT NULL,
  `flight_date` date DEFAULT NULL,
  `flight_number` varchar(255) DEFAULT NULL,
  `lastmile_vendor` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifest_details`
--

CREATE TABLE `manifest_details` (
  `id` bigint(20) NOT NULL,
  `manifest_id` bigint(20) DEFAULT NULL,
  `detail_number` varchar(255) DEFAULT NULL,
  `detail_code` varchar(255) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `height` decimal(10,0) DEFAULT NULL,
  `width` decimal(10,0) DEFAULT NULL,
  `length` decimal(10,0) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifest_detail_items`
--

CREATE TABLE `manifest_detail_items` (
  `id` bigint(20) NOT NULL,
  `manifest_detail_id` bigint(20) DEFAULT NULL,
  `airwaybill` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outbound`
--

CREATE TABLE `outbound` (
  `id` bigint(20) NOT NULL,
  `shipment_id` varchar(500) DEFAULT NULL,
  `courier_name` varchar(500) DEFAULT NULL,
  `outbound_date` date DEFAULT NULL,
  `departure_location` varchar(500) DEFAULT NULL,
  `destination_location` varchar(500) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` bigint(20) NOT NULL,
  `item_name` varchar(500) NOT NULL,
  `sender_full_name` varchar(500) NOT NULL,
  `sender_email` varchar(500) NOT NULL,
  `sender_address` varchar(500) NOT NULL,
  `sender_phone_number` varchar(500) NOT NULL,
  `sender_country` varchar(500) NOT NULL,
  `sender_city` varchar(500) NOT NULL,
  `sender_postal_code` varchar(500) NOT NULL,
  `receiver_full_name` varchar(500) NOT NULL,
  `receiver_phone_number` varchar(128) NOT NULL,
  `receiver_email` varchar(500) NOT NULL,
  `receiver_address` varchar(500) NOT NULL,
  `receiver_country` varchar(500) NOT NULL,
  `receiver_city` varchar(500) NOT NULL,
  `receiver_postal_code` varchar(500) NOT NULL,
  `shipment_price` varchar(128) NOT NULL,
  `receipt_code` varchar(500) NOT NULL,
  `weight` decimal(65,0) NOT NULL,
  `lenght` decimal(65,0) NOT NULL,
  `widht` decimal(65,0) NOT NULL,
  `height` decimal(65,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `transaction` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipment_service`
--

CREATE TABLE `shipment_service` (
  `id` int(11) NOT NULL,
  `service` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipment_status`
--

CREATE TABLE `shipment_status` (
  `id` bigint(20) NOT NULL,
  `receipt_code` varchar(500) NOT NULL,
  `current_location` varchar(500) NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `phone_number` varchar(128) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `postal_code` varchar(128) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `image`, `full_name`, `phone_number`, `address`, `city`, `postal_code`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nigga', 'nigger', 'Nigga', '41232', 'sefafasd', 'awdsdw', '1123123', 'wadaswd@gmail.com', 'Nigga1234', '2025-08-07', NULL),
(2, 'Nigga1234', '', 'NiggaNigga', '12345', 'Nigga', 'Nigga', '1234', 'Nigga@Nigga.com', '$2y$10$GHiqM1xbEREHUYlyNXfw1OkB1S7Em7Cv41YdjTRyMacTqYpCnDF86', '0000-00-00', NULL),
(3, 'Nigga1', '', 'MyNigga', '513123', 'Niggaa', 'wdawdasd', '4123', 'Nigga@gmail.com', 'Nigga12345', '2025-08-07', '2025-08-07'),
(4, 'Jokowi', '', 'Mulyono Jokowi Dodo', '5132124', 'Istana Presiden', 'Jakarta', '41232', 'HidupJokowi@gmail.com', '$2y$10$L9cLhdR0btgqGz.BYIuXd.TQSJKdL2hrOoVCIYR7q0guedulR6jsu', '2025-08-07', '2025-08-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbound`
--
ALTER TABLE `inbound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifests`
--
ALTER TABLE `manifests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifest_details`
--
ALTER TABLE `manifest_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifest_detail_items`
--
ALTER TABLE `manifest_detail_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbound`
--
ALTER TABLE `outbound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipment_category_id_fk` (`service_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbound`
--
ALTER TABLE `inbound`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outbound`
--
ALTER TABLE `outbound`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipment_service`
--
ALTER TABLE `shipment_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment_status`
--
ALTER TABLE `shipment_status`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_category_id_fk` FOREIGN KEY (`service_id`) REFERENCES `shipment_service` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
