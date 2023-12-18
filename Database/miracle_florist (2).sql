-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 10:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miracle_florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `number` varchar(13) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'Budi', 'budi123@gmail.com', '089910111213', 'Good Quality'),
(2, 'anggita', 'anggita@gmail.com', '085898761234', 'really like a beautiful flower'),
(3, 'citra andini', 'citraandini@gmail.com', '089843218765', 'love the flower bouquet'),
(4, 'Mike Tasya', 'miket@gmail.com', '081238501112', 'Cool!'),
(5, 'Dabi', 'dabi@gmail.com', '081276530912', 'Nice!'),
(6, 'Anjelika', 'anjel@gmail.com', '081234098765', 'Very nice!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `image`) VALUES
(1, 'Flower Bouquet 1', 375, 100, 'bunga1.jpg'),
(2, 'Flower Bouquet 2', 375, 100, 'bunga2.jpg'),
(3, 'Flower Bouquet 3', 375, 100, 'bunga3.jpg'),
(4, 'Flower Pot 1', 300, 100, 'bunga4.jpg'),
(5, 'Flower Pot 2', 300, 100, 'bunga5.jpg'),
(6, 'Flower Pot 3', 300, 100, 'bunga6.jpg'),
(7, 'Flower Basket 1', 275, 100, 'bunga7.jpg'),
(8, 'Flower Basket 2', 275, 100, 'bunga8.jpg'),
(9, 'Flower Basket 3', 275000, 100, 'bunga9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('PROCESS','SHIPPING','SUCCESS','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `product_id`, `user_id`, `address`, `quantity`, `total`, `status`) VALUES
(1, 1, 1, 'ciomas', 2, 550000, 'SHIPPING'),
(2, 1, 1, 'kreteg', 3, 825000, 'PROCESS'),
(3, 5, 2, 'jakarta', 2, 600, 'SHIPPING'),
(4, 3, 2, 'sukabumi', 1, 375, 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `role_id`) VALUES
(1, 'Asparagus Jayadi', 'gus@gmail.com', '089911223378', 'Jalan Ciomas 1', '123456', 1),
(2, 'David Eko Octavian', 'davidoktavian@gmail.com', '085697120910', 'Jalan jalak harupat', '$2y$10$mUfk0jhKJUqyffAy0J5VHems7JNxfQ8uzL5rU6muIiJldfk2UVmy2', 1),
(3, 'Debi Alivia', 'debi@gmail.com', '081267091254', 'Jalan CImanggu', '$2y$10$L8C5shlniC8F//YOWarL8ezPPmwshRePU5lWEIjr/6mcBzkTQwwn.', 2),
(4, 'Citra Andini', 'citraandini@gmail.com', '089843218765', 'jakarta', '98765', 2),
(6, 'admin', 'admin@gmail.com', '111111111111', 'admin', '$2y$10$qYe.LU9ypVQgU3BonkmSfOBPWa8ITIFgCrR.vGK56jh9sWktva/jS', 1),
(7, 'customer', 'customer@gmail.com', '222222222222', 'customer', '$2y$10$DCzdEY68LA.Fh6KTgk93yeVmavWRfc1noWnylkKCghmjlz2N.BBtC', 2),
(8, '', '', '', '', '$2y$10$zvaet/Bj0cFSI./x2f6eZ.uo/t2t22/2rj/EWpLQ9YoUhzUucbm5q', 0),
(9, 'Mike Tasya', 'miket@gmail.com', '084709094783', 'Jalan Budiarto', '$2y$10$gYvTj91AEPu7mUDBVQMcueYgks7fVhWSO2R6gGYWQU5B2WEgybci2', 2),
(11, 'Anjelika', 'anjel@gmail.com', '089164531209', 'Cilebut Raya No. 39', '$2y$10$u.73IFlqAk/gJsi9bSiF/eptfH0hQ.Py1U9x41dQcVejkZZgXBeZ6', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
