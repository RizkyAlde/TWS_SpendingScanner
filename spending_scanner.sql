-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 01:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spending_scanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(50) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
('1', 'Electronics'),
('2', 'Clothing'),
('3', 'Books'),
('4', 'Furniture'),
('5', 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date_id` varchar(50) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`date_id`, `date`) VALUES
('1', '2024-04-01'),
('10', '2024-04-10'),
('11', '2024-03-26'),
('12', '2024-03-28'),
('13', '2024-03-27'),
('14', '2024-03-30'),
('15', '2024-03-29'),
('2', '2024-04-02'),
('3', '2024-04-03'),
('4', '2024-04-04'),
('5', '2024-04-05'),
('6', '2024-04-06'),
('7', '2024-04-07'),
('8', '2024-04-08'),
('9', '2024-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `receipt_id` varchar(50) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `date_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`receipt_id`, `user_id`, `date_id`) VALUES
('1', '1', '1'),
('10', '10', '10'),
('11', '11', '11'),
('12', '12', '12'),
('13', '13', '13'),
('14', '14', '14'),
('15', '15', '15'),
('2', '2', '2'),
('3', '3', '3'),
('4', '4', '4'),
('5', '5', '5'),
('6', '6', '6'),
('7', '7', '7'),
('8', '8', '8'),
('9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `faktur_detail`
--

CREATE TABLE `faktur_detail` (
  `detail_id` varchar(50) NOT NULL,
  `receipt_id` varchar(50) DEFAULT NULL,
  `category_id` varchar(50) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faktur_detail`
--

INSERT INTO `faktur_detail` (`detail_id`, `receipt_id`, `category_id`, `product_name`, `product_price`) VALUES
('1', '1', '1', 'Smartphone', 5000000.00),
('10', '5', '5', 'Doll', 120000.00),
('11', '6', '1', 'Laptop', 8000000.00),
('12', '6', '2', 'Dress', 400000.00),
('13', '7', '3', 'Comic Book', 80000.00),
('14', '7', '4', 'Sofa', 2000000.00),
('15', '8', '5', 'LEGO', 200000.00),
('16', '8', '1', 'Tablet', 3000000.00),
('17', '9', '2', 'Hoodie', 250000.00),
('18', '9', '3', 'Magazine', 50000.00),
('19', '10', '4', 'Desk', 1200000.00),
('2', '1', '2', 'T-Shirt', 200000.00),
('20', '10', '5', 'Remote Control Car', 300000.00),
('21', '11', '1', 'Smartwatch', 1500000.00),
('22', '11', '2', 'Skirt', 350000.00),
('23', '12', '3', 'Self-help Book', 120000.00),
('24', '12', '4', 'Bookshelf', 800000.00),
('25', '13', '5', 'Puzzle', 150000.00),
('26', '13', '1', 'Camera', 2000000.00),
('27', '14', '2', 'Jacket', 450000.00),
('28', '14', '3', 'Poetry Book', 180000.00),
('29', '15', '4', 'Couch', 2500000.00),
('3', '2', '3', 'Novel', 150000.00),
('30', '15', '5', 'Board Game', 250000.00),
('4', '2', '4', 'Chair', 1000000.00),
('5', '3', '5', 'Action Figure', 100000.00),
('6', '3', '1', 'Headphones', 500000.00),
('7', '4', '2', 'Jeans', 300000.00),
('8', '4', '3', 'Cookbook', 250000.00),
('9', '5', '4', 'Table', 1500000.00);

-- --------------------------------------------------------

--
-- Stand-in structure for view `report`
-- (See below for the actual view)
--
CREATE TABLE `report` (
`receipt_id` varchar(50)
,`user_name` varchar(255)
,`category_name` varchar(255)
,`product_name` varchar(255)
,`product_price` decimal(10,2)
,`date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
('1', 'Agus Santoso', 'agussantoso@gmail.com', 'password123'),
('10', 'Joko Susilo', 'jokosusilo@gmail.com', 'testpass123'),
('11', 'Kurnia Sari', 'kurniasari@gmail.com', 'securepass456'),
('12', 'Lia Fitriani', 'liafitriani@gmail.com', 'password123'),
('13', 'Mira Wati', 'mirawati@gmail.com', 'testpass789'),
('14', 'Nita Puspita', 'nitapuspita@gmail.com', 'securepass789'),
('15', 'Oscar Putra', 'oscarputra@gmail.com', 'password123'),
('2', 'Budi Cahyono', 'budicahyono@gmail.com', 'securepass'),
('3', 'Citra Dewi', 'citradewi@gmail.com', 'pass123'),
('4', 'Dewi Lestari', 'dewilestari@gmail.com', 'password456'),
('5', 'Eko Prasetyo', 'ekoprasetyo@gmail.com', 'testpass'),
('6', 'Fita Rahmawati', 'fitarahmawati@gmail.com', 'password789'),
('7', 'Galih Wijaya', 'galihwijaya@gmail.com', 'securepass123'),
('8', 'Hana Sari', 'hanasari@gmail.com', 'testpass456'),
('9', 'Indra Setiawan', 'indrasetiawan@gmail.com', 'password789');

-- --------------------------------------------------------

--
-- Structure for view `report`
--
DROP TABLE IF EXISTS `report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report`  AS SELECT `f`.`receipt_id` AS `receipt_id`, `u`.`user_name` AS `user_name`, `c`.`category_name` AS `category_name`, `fd`.`product_name` AS `product_name`, `fd`.`product_price` AS `product_price`, `d`.`date` AS `date` FROM ((((`faktur` `f` join `user` `u` on(`f`.`user_id` = `u`.`user_id`)) join `faktur_detail` `fd` on(`f`.`receipt_id` = `fd`.`receipt_id`)) join `category` `c` on(`fd`.`category_id` = `c`.`category_id`)) join `date` `d` on(`f`.`date_id` = `d`.`date_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date_id` (`date_id`);

--
-- Indexes for table `faktur_detail`
--
ALTER TABLE `faktur_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `receipt_id` (`receipt_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faktur`
--
ALTER TABLE `faktur`
  ADD CONSTRAINT `faktur_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `faktur_ibfk_2` FOREIGN KEY (`date_id`) REFERENCES `date` (`date_id`);

--
-- Constraints for table `faktur_detail`
--
ALTER TABLE `faktur_detail`
  ADD CONSTRAINT `faktur_detail_ibfk_1` FOREIGN KEY (`receipt_id`) REFERENCES `faktur` (`receipt_id`),
  ADD CONSTRAINT `faktur_detail_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
