-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2020 at 08:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'Asif Khan', 'asifkhan@gmail.com', 'asifkhan', 6289685674);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'Asif Khan', 'ak123@gmail.com', 'How can I be a member of this website.!!'),
(2, 'Xyz', 'xyz@gmail.com', 'Hey, How can I be the member of your website???\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profile_imagepath` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `preference` varchar(100) NOT NULL,
  `contact_number` bigint(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `profile_imagepath`, `email`, `preference`, `contact_number`, `password`) VALUES
(1, 'Asif khan', 'uploads/2020_06_27_12_59_32_McLaren-P1-wallpaper-6.jpg', 'ak123@gmail.com', 'non-veg', 7245637689, '123456'),
(2, 'Ak', 'uploads/2020_06_27_13_26_05_non-veg_pizza.jpg', 'ak143@gmail.com', 'veg', 6285469324, '987654'),
(3, 'abcd', 'uploads/2020_07_07_18_01_04_veg_salad.jpg', 'abc@gmail.com', 'veg', 9087654345, 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `cust_cart`
--

CREATE TABLE `cust_cart` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_cart`
--

INSERT INTO `cust_cart` (`id`, `cust_id`, `res_id`, `item_id`, `item_name`, `item_quantity`, `item_price`, `total_price`) VALUES
(25, 2, 1, 2, 'Burger', 2, 90, 180),
(27, 2, 1, 4, 'Salad', 1, 151, 151),
(28, 2, 2, 6, 'Pasta', 1, 111, 111),
(32, 3, 1, 3, 'Role', 1, 121, 121);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `item_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_imagepath` varchar(255) NOT NULL,
  `item_price` int(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `item_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`item_id`, `res_id`, `item_name`, `item_imagepath`, `item_price`, `item_type`, `item_desc`) VALUES
(1, 1, 'Pizza', 'uploads/2020_06_27_13_01_58_non-veg_pizza.jpg', 110, 'non-veg', 'Non-Veg Pizza with cheese and tasty.'),
(2, 1, 'Burger', 'uploads/2020_06_27_13_12_37_veg_burger.jpg', 90, 'veg', 'Testy and Cheessy.'),
(3, 1, 'Role', 'uploads/2020_06_27_13_13_37_non-veg_role.jpg', 121, 'non-veg', 'Non-Veg Role with cheese.'),
(4, 1, 'Salad', 'uploads/2020_06_27_13_14_54_veg_salad.jpg', 151, 'veg', 'Green Salad healthy and testy.'),
(5, 1, 'Momos', 'uploads/2020_06_29_17_55_54_non-veg_momos.jpg', 199, 'non-veg', 'Non-veg momos fried tasty momos.'),
(6, 2, 'Pasta', 'uploads/2020_06_29_20_34_18_veg_pasta.jpg', 111, 'veg', 'White Pasta with cheese flavour.'),
(7, 2, 'Pizza', 'uploads/2020_06_29_21_52_06_non-veg_pizza.jpg', 188, 'non-veg', 'Non-veg pizza.'),
(8, 2, 'Role', 'uploads/2020_06_29_21_53_11_non-veg_role.jpg', 177, 'non-veg', 'Non-veg role fried and tasty.'),
(9, 3, 'Burger', 'uploads/2020_06_30_10_52_14_cheesy-burger.jpg', 88, 'veg', 'Tasty and healthy..'),
(10, 2, 'Momos', 'uploads/2020_07_07_16_18_59_veg_momo.jpg', 49, 'veg', 'veg momos'),
(11, 2, 'Pizza', 'uploads/2020_07_07_17_38_21_vej_pizza.jpg', 99, 'veg', 'Veg Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `res_names` text NOT NULL,
  `item_names` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `total_price` int(11) NOT NULL,
  `mobile_number` bigint(12) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Yet to be delivered.!!'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cust_id`, `res_id`, `res_names`, `item_names`, `address`, `date`, `payment_type`, `total_price`, `mobile_number`, `status`) VALUES
(4, 2, 2, 'Res Names= Akboss, Akboss, Shoacusine, ', 'All items= Burger 2, Salad 1, Pasta 1, ', 'Vill- Yha Wha, City- Pbh', '2020-07-07', 'Cash on Delivery', 442, 8899776655, 'cancelled by Customer'),
(5, 1, 2, 'Res Names= Shoacusine, ', 'All items= Pasta 1, ', 'Vill- Yha Wha, City- Pbh', '2020-07-07', 'Cash On Delivery', 111, 8899776655, 'cancelled by Customer'),
(6, 1, 2, 'Res Names= Shoa, Shoa, ', 'All items= Pasta 1, Momos 1, ', 'Vill- Yha Wha, City- Pbh', '2020-07-07', 'Cash On Delivery', 160, 889977665544, 'Yet to be delivered.!!'),
(7, 1, 1, 'Res Names= Akboss, ', 'All items= Burger 1, ', 'Vill- Yha Wha, City- Pbh', '2020-07-07', 'Cash On Delivery', 90, 8899776655, 'Yet to be delivered.!!');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `profile_imagepath` varchar(255) NOT NULL,
  `res_email` varchar(100) NOT NULL,
  `res_number` bigint(100) NOT NULL,
  `res_city` varchar(100) NOT NULL,
  `res_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `res_name`, `profile_imagepath`, `res_email`, `res_number`, `res_city`, `res_password`) VALUES
(1, 'Akboss', 'uploads/2020_06_27_13_01_18_r2.png', 'akboss@gmail.com', 919876543210, 'Lucknow', '123456'),
(2, 'Shoacusine', 'uploads/2020_06_29_19_35_29_r3.jpg', 'shoacusine@gmail.com', 8765983456, 'Delhi', 'shoa'),
(3, 'Zeeshan The Dhaba', 'uploads/2020_06_30_10_49_33_r1.jpeg', 'zeeshan@gmail.com', 9777556736, 'Pratapgarh', 'zeeshan'),
(4, 'ak', 'uploads/2020_07_07_17_56_23_r4.jpg', 'ak143@gmail.com', 9876543234, 'pbh', 'ak143');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_cart`
--
ALTER TABLE `cust_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
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
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cust_cart`
--
ALTER TABLE `cust_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
