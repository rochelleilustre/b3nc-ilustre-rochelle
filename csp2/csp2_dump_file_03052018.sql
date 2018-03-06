-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 02:17 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Acqua Di Gio'),
(2, 'Burberry'),
(3, 'Bvlgari'),
(4, 'Calvin Klein'),
(5, 'Carolina Herrera'),
(6, 'Chanel'),
(7, 'Christian Dior'),
(8, 'Clinique'),
(9, 'Dior'),
(10, 'Dolce & Gabbana'),
(11, 'Donna Karan'),
(12, 'Elizabeth Arden'),
(13, 'Escada'),
(14, 'Estee Lauder'),
(15, 'Giorgio Armani'),
(16, 'Gucci'),
(17, 'Hermes'),
(18, 'Hugo Boss'),
(19, 'Issey Miyake'),
(20, 'Jo Malone'),
(21, 'Katy Perry'),
(22, 'Kenzo'),
(23, 'Lacoste'),
(24, 'Lancome'),
(25, 'Lanvin'),
(26, 'Louis Vuitton'),
(27, 'Marc Jacobs'),
(28, 'Mont Blanc'),
(29, 'Paris Hilton'),
(30, 'Ralph Lauren'),
(31, 'Salvatore Ferragamo'),
(32, 'Tommy Hilfiger'),
(33, 'Versace'),
(34, 'Yves Saint Laurent');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'unisex');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` tinytext NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `address`, `contact`, `image`) VALUES
(1, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'user@domain.com', 'user firstname', 'user lastname', 'user address here', '09161234567', '');

-- --------------------------------------------------------

--
-- Table structure for table `my_cart`
--

CREATE TABLE `my_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

CREATE TABLE `packaging` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`id`, `name`) VALUES
(1, 'tester box'),
(2, 'original box');

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE `place_order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `reference_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `volume_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `stocks_id` int(11) NOT NULL,
  `packaging_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `volume_id`, `categories_id`, `brand_id`, `stocks_id`, `packaging_id`, `image`) VALUES
(1, '212 Men 100ml TB', '550.00', 1, 1, 5, 1, 2, 'assets/images/212men.jpg'),
(2, '212 Men 100ml OB', '750.00', 1, 1, 5, 1, 1, 'assets/images/212men.jpg'),
(3, '212 Sexy Men 100ml OB', '750.00', 1, 1, 5, 1, 1, 'assets/images/212sexymen.jpg'),
(4, 'Acqua Di Gio 100ml TB', '550.00', 1, 1, 1, 1, 2, 'assets/images/212men.jpg'),
(5, 'Acqua Di Gio 100ml OB', '750.00', 1, 1, 1, 1, 1, 'assets/images/212men.jpg'),
(6, 'Bvlgari Aqva Marine 100ml TB', '550.00', 1, 1, 3, 1, 2, 'assets/images/bvlgari-omnia-amethyste.jpg'),
(7, 'Bvlgari Aqva 100ml TB', '550.00', 1, 1, 3, 1, 2, 'assets/images/bvlgari-omnia-amethyste.jpg'),
(8, 'Bvlgari Blv 100ml TB', '550.00', 1, 1, 3, 1, 2, 'assets/images/bvlgari-omnia-amethyste.jpg'),
(9, 'Bvlgari Extreme 100ml OB', '750.00', 1, 1, 3, 1, 1, 'assets/images/bvlgari-omnia-amethyste.jpg'),
(10, 'Bvlgari Man 100ml OB', '750.00', 1, 1, 3, 1, 1, 'assets/images/bvlgari-omnia-amethyste.jpg'),
(11, 'Bvlgari Man Extreme 100ml OB', '750.00', 1, 1, 3, 1, 1, 'assets/images/bvlgari-omnia-amethyste.jpg'),
(12, 'Bvlgari Man in Black 100ml OB', '750.00', 1, 1, 3, 1, 1, 'assets/images/bvlgari-omnia-amethyste.jpg'),
(13, 'Chanel Allure Sports 100ml TB', '550.00', 1, 1, 6, 1, 2, 'assets/images/chanelallure.jpg'),
(14, 'Chanel Allure Sports 100ML OB', '750.00', 1, 1, 6, 1, 1, 'assets/images/chanelallure.jpg'),
(15, 'Chanel Bleu De Chanel 100ml OB', '750.00', 1, 1, 6, 1, 1, 'assets/images/chanelbleu.jpg'),
(16, 'Chanel Bleu De Chanel 100ml TB', '550.00', 1, 1, 6, 1, 2, 'assets/images/chanelbleu.jpg'),
(17, 'CK Eternity 100ml TB', '550.00', 1, 1, 4, 1, 2, 'assets/images/cketernity.jpg'),
(18, 'CK Eternity Now 100ml TB', '550.00', 1, 1, 4, 1, 2, 'assets/images/cketernitynowmen.jpg'),
(19, 'CK Eternity Now 100ml OB', '750.00', 1, 1, 4, 1, 1, 'assets/images/cketernitynowmen.jpg'),
(20, 'CK Free 100ml OB', '750.00', 1, 1, 4, 1, 1, 'assets/images/ckfree.jpg'),
(21, 'CK In2U Him 100ml OB', '750.00', 1, 1, 4, 1, 1, 'assets/images/ckin2u.jpg'),
(22, 'Clinique Happy 100ml TB', '550.00', 1, 2, 8, 1, 1, 'assets/images/cliniquehappy.jpg'),
(23, 'Clinique Happy 100ml OB', '750.00', 1, 2, 8, 1, 1, 'assets/images/cliniquehappy.jpg'),
(24, 'D&G Light Blue 125ml TB', '650.00', 2, 1, 10, 1, 2, 'assets/images/DGlightblue.jpg'),
(25, 'D&G Light Blue 125ml OB', '750.00', 2, 1, 10, 1, 1, 'assets/images/DGlightblue.jpg'),
(26, 'D&G The One 100ml OB', '750.00', 1, 1, 10, 1, 1, 'assets/images/dolcetheonemen.jpg'),
(27, 'Dior Fahrenheit 100ml TB', '550.00', 1, 1, 7, 1, 2, 'assets/images/dolcefahrenheitmen.jpg'),
(28, 'Dior Fahrenheit 100ml OB', '750.00', 1, 1, 7, 1, 1, 'assets/images/dolcefahrenheitmen.jpg'),
(29, 'Dior Sauvage 100ml OB', '750.00', 1, 1, 7, 1, 1, 'assets/images/dolcesauvagemen.jpg'),
(30, 'Hugo Boss Bottled Night 100ml OB', '750.00', 1, 1, 18, 1, 1, 'assets/images/HugoBossBottledNight.jpg'),
(31, 'Hugo Boss Bottled 100ml OB', '750.00', 1, 1, 18, 1, 1, 'assets/images/HugoBossBottledNight.jpg'),
(32, 'Hugo Boss Just Different 150ml TB', '750.00', 3, 1, 18, 1, 2, 'assets/images/hugojustdiff.jpg'),
(33, 'Hugo Boss Just Different 150ml OB', '850.00', 3, 1, 18, 1, 1, 'assets/images/hugojustdiff.jpg'),
(34, 'Hugo Boss Man 150ml OB', '850.00', 3, 1, 18, 1, 1, 'assets/images/hugobossman.jpg'),
(35, 'Issey Miyake L\'eau D\'issey 125ml TB', '650.00', 2, 1, 19, 1, 2, 'assets/images/issey-men.jpg'),
(36, 'Issey Miyake L\'eau D\'issey 125ml OB', '750.00', 2, 1, 19, 1, 1, 'assets/images/issey-men.jpg'),
(37, 'Kenzo Blue 100ml TB ?(Out of Stock)', '550.00', 1, 1, 22, 2, 2, 'assets/images/kenzoleauparmen.jpg'),
(38, 'Lacoste Cool Play Blue 125ml TB(Out of Stock)', '650.00', 2, 1, 23, 2, 2, 'assets/images/LacosteCoolPlayBlue.jpg'),
(39, 'Lacoste Essential 125ml TB', '650.00', 2, 1, 23, 1, 2, 'assets/images/Lacoste Essential.jpg'),
(40, 'Lacoste Essential 125ml OB', '750.00', 2, 1, 23, 1, 1, 'assets/images/Lacoste Essential.jpg'),
(41, 'Jo Malone Blackberry & Bay Edp 100ml OB (unisex)', '750.00', 1, 3, 20, 1, 1, 'assets/images/JoMaloneBlackberryBay.jpg'),
(42, 'Jo Malone Carrot Blossom & Fennel Edp 100ml (unisex)', '750.00', 1, 3, 20, 1, 1, 'assets/images/JoMaloneCarrotBlossom.jpg'),
(43, 'Jo Malone Dark Amber & Ginger Lily Edp 100ml OB (unisex)', '750.00', 1, 3, 20, 1, 1, 'assets/images/JoMaloneDarkAmber.jpg'),
(44, 'Jo Malone Jade Leaf Tea Edp 100ml OB (unisex)', '750.00', 1, 3, 20, 1, 1, 'assets/images/JoMaloneJadeLeafTea.jpg'),
(45, 'Jo Malone Lavender & Coriander Edp 100ml OB (unisex)', '750.00', 1, 3, 20, 1, 1, 'assets/images/Jo-Malone-Lavender-Coriander.jpg'),
(46, 'Jo Malone Lime Basil & Mandarin Edp 100ml OB (unisex)', '750.00', 1, 3, 20, 1, 1, 'assets/images/JoMaloneLimeBasilMandarin.jpg'),
(47, 'TEST', '10.00', 1, 1, 1, 1, 1, ''),
(48, 'test 212 men', '750.00', 2, 3, 5, 1, 2, '212men.png');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `reference_number` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `shipping_status_id` int(11) NOT NULL,
  `customer_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_status`
--

CREATE TABLE `shipping_status` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `name`) VALUES
(1, 'In stock'),
(2, 'Out of stock');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volume`
--

CREATE TABLE `volume` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volume`
--

INSERT INTO `volume` (`id`, `name`) VALUES
(1, '100 ml'),
(2, '125 ml'),
(3, '150 ml'),
(4, '200 ml'),
(5, '50 ml'),
(6, '65 ml'),
(7, '75 ml'),
(8, '80 ml'),
(9, '90 ml');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `my_cart_fk0` (`product_id`);

--
-- Indexes for table `packaging`
--
ALTER TABLE `packaging`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_order`
--
ALTER TABLE `place_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_order_fk0` (`product_id`),
  ADD KEY `place_order_fk1` (`buyer_id`),
  ADD KEY `place_order_fk2` (`reference_number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_fk0` (`volume_id`),
  ADD KEY `product_fk1` (`categories_id`),
  ADD KEY `product_fk2` (`brand_id`),
  ADD KEY `product_fk3` (`stocks_id`),
  ADD KEY `product_fk4` (`packaging_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reference_number` (`reference_number`),
  ADD KEY `purchase_fk0` (`shipping_status_id`);

--
-- Indexes for table `shipping_status`
--
ALTER TABLE `shipping_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `description` (`description`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `volume`
--
ALTER TABLE `volume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `my_cart`
--
ALTER TABLE `my_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packaging`
--
ALTER TABLE `packaging`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `place_order`
--
ALTER TABLE `place_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_status`
--
ALTER TABLE `shipping_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volume`
--
ALTER TABLE `volume`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD CONSTRAINT `my_cart_fk0` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `place_order`
--
ALTER TABLE `place_order`
  ADD CONSTRAINT `place_order_fk0` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `place_order_fk1` FOREIGN KEY (`buyer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `place_order_fk2` FOREIGN KEY (`reference_number`) REFERENCES `purchase` (`reference_number`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_fk0` FOREIGN KEY (`volume_id`) REFERENCES `volume` (`id`),
  ADD CONSTRAINT `product_fk2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `product_fk3` FOREIGN KEY (`stocks_id`) REFERENCES `stocks` (`id`),
  ADD CONSTRAINT `product_fk4` FOREIGN KEY (`packaging_id`) REFERENCES `packaging` (`id`),
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_fk0` FOREIGN KEY (`shipping_status_id`) REFERENCES `shipping_status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
