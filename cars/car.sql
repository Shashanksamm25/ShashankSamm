-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 08:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_image` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price_per_day` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `car_image`, `brand`, `price_per_day`) VALUES
(2, 'Mercedes Benz SL Class', 'car-1.png', 'Marcedes Benz', '15000.00'),
(3, 'MG HS', 'car-2.png', 'Morris Garage', '5000.00'),
(4, 'Honda City', 'car-6.png', 'Honda', '3000.00'),
(8, 'Audi Q8 EV', 'car-4.png', 'Audi', '10000.00'),
(9, 'Kia Seltos', 'car-7.png', 'Kia', '4000.00');

-- --------------------------------------------------------

--
-- Table structure for table `carsale`
--

CREATE TABLE `carsale` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_image` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carsale`
--

INSERT INTO `carsale` (`id`, `car_name`, `car_image`, `brand`, `price`) VALUES
(1, 'Audi Q8 EV', 'car-4.png', 'Audi', '1500000.00'),
(2, 'Kia Seltos', 'car-7.png', 'Kia', '1500000.00'),
(3, 'Mercedes Benz SL Class', 'car-1.png', 'Marcedes Benz', '5000000.00'),
(4, 'MG HS', 'car-2.png', 'Morris Garage', '2000000.00'),
(5, 'Honda City', 'car-6.png', 'Honda', '600000.00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_image`, `info`, `price`) VALUES
(1, 'Inspections & Checks', 'service1.jpeg', 'Maintain your car and increase its performance with regular servicing', '1000.00'),
(2, 'Car Repair Service', 'service2.jpeg', 'The use of genuine auto parts and transparent billing Professional integrity and the customer’s interests at heart', '10000.00'),
(3, 'Tyre Service', 'service3.webp', 'Tyre Puncture', '300.00'),
(4, 'Electronic Services', 'service4.jpeg', 'Battery Change Service', '8000.00'),
(5, 'Air Conditioning Service', 'service5.jpeg', 'AC Services', '15000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'sagar', 'sagarsmarty84@gmail.com', '$2y$10$ciB07JibFNk3iIogbLQ.O.k9Rk78Ap.SFoVbeKCuFcMSH0TG1fhB2'),
(2, 'rahul', 'rahul@gmail.com', '$2y$10$qew1.MVum8/borBxRpHexeCul5vGhyjIxjYFfQJh4Wysux4uT0Tt6'),
(3, 'varun', 'varun@gmail.com', '$2y$10$ck4vjy1PprVDFEgokTTHcuWxtRCO.TAoua77civjg9slX0b7Nd26W'),
(4, 'ravi', 'ravi@gmail.com', '$2y$10$b.lRkJBZ8OhE.90sU7yl3.ZPETpYDeNdrcV/K52QzdQPjgN13flrS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carsale`
--
ALTER TABLE `carsale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carsale`
--
ALTER TABLE `carsale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
