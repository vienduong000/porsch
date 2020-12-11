-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 02:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awesome`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE `tblpost` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpost`
--

INSERT INTO `tblpost` (`id`, `email`, `phone`) VALUES
(0, 'linhnga@gmail.com', '1234345244');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminEmail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adminUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Luu Pham', 'phamluu.cntt@gmail.com', 'LuuPV', 'bb5b7c76ed55739b0bf60cc68374a99d', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(1, 'SamSung'),
(2, 'TCL'),
(3, 'OPPO'),
(4, 'Xiaomi'),
(5, 'Huewei'),
(12, 'APPLE'),
(13, 'SONY'),
(15, 'PHILIPS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(1, 7, '0omn99jipm7namf6srjhj4kva2', 'Áo Sơ Mi Nút Polka Dot Đen Và Trắng Tao Nhã', '12000000', 3, '6deaf01c29.jpg'),
(2, 7, 'up8l6ff347ik19fsoa18qff452', 'Áo Thun Nút Màu Trơn Trắng Tao Nhã', '12000000', 1, '6deaf01c29.jpg'),
(3, 7, '9lmppj5kalib60o1s7soiiaqo4', 'Áo Thun Nút Màu Trơn Trắng Tao Nhã', '12000000', 1, '6deaf01c29.jpg'),
(4, 8, '9lmppj5kalib60o1s7soiiaqo4', 'Áo Thun Snakeskin In Xám Tao Nhã', '5000000', 1, 'd611667f13.jpg'),
(8, 6, 'c6o66m1rfnpfhqmdffk77pu083', 'Áo Thun Snakeskin In Xám Tao Nhã', '10000000', 1, 'dbb417a309.jpg'),
(9, 8, '3e1a29t1pgb3ock6s8hi8ho2d5', 'Bộ Thời Trang Nút Trắng Tao Nhã', '5000000', 1, 'd611667f13.jpg'),
(13, 17, 'grfc2bmmrmga6mn5q7484i87f2', 'Bộ Thời Trang Nút Trắng Tao Nhã', '1099000', 1, '785e8d373d.jpg'),
(14, 19, '39p4lauudimhcb91i8mhna4bf2', 'Bộ Thời Trang Nút Trắng Tao Nhã', '9700000', 3, '6d72eb58ae.jpg'),
(18, 18, '3eg83l0tcklmed91e5h8raqsa2', 'Váy Chia Màu Trơn Burgundy Tao Nhã', '2589900', 1000, '32942e9470.jpg'),
(19, 19, 'hlkksgphiqn70b37sjg3u89unu', 'Áo Sơ Mi Túi Trắng Casual', '9700000', 1, '6d72eb58ae.jpg'),
(22, 3, '9kbkjtq75knt0sjkj76eop5lts', 'Dầu hướng dương', '2250000', 1, 'dauhuongduonorganic.jpg'),
(23, 4, '9kbkjtq75knt0sjkj76eop5lts', 'Giá đỗ Vin-Eco', '850000', 1, 'giadol1vineco.jpg'),
(24, 1, '9kbkjtq75knt0sjkj76eop5lts', 'Bắp cải trái tim', '1250000', 1, 'bapcailovedalat.jpg'),
(25, 2, '7vi7u0d6t9de44dshdstjabs1c', 'Ba chỉ bò úc', '750000', 1, 'bachibouc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(1, 'Models'),
(2, 'Porsche Finder'),
(3, 'Discover Online'),
(4, 'Event & Racing'),
(5, 'Service & Accessories'),
(6, 'About Porsche');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(3, 'Pham Van Luu', '192 Le Trong Tan - Thanh Xuan', 'Ha Noi', 'Việt Nam', '100000', '099999123', 'luupv1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Pham Thi Nga', 'Linh Nam - Hoang Mai', 'Ha Noi', 'Viet Nam', '100000', '522525294', 'ngasugar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Nguyen Thi Huong', 'Linh Nam - Hoang Mai', 'Ha Noi', 'Viet Nam', '100000', '0522525294', 'huongnt22@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Linh Nga', 'Lĩnh Nam - Hoàng Mai - Hà Nội', 'UNETI', 'hn', '100000', '0773411984', 'linhnga@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(56, 22, 'Apple New For Mysql Server', 3, 5, '300000', '643929ce40.jpg', 2, '2019-07-17 00:54:42'),
(57, 22, 'Apple New For Mysql Server', 3, 4, '240000', '643929ce40.jpg', 1, '2019-07-17 00:56:49'),
(58, 22, 'Apple New For Mysql Server', 3, 5, '300000', '643929ce40.jpg', 1, '2019-07-17 00:57:49'),
(59, 20, 'Router Wifi 4G Huawei 300Mbps B593S-12', 3, 10, '12400000', '49b106217c.jpg', 1, '2019-07-17 01:51:22'),
(60, 2, 'Ba chỉ bò úc', 3, 1, '750000', 'bachibouc.jpg', 0, '2020-11-22 17:57:17'),
(61, 2, 'Ba chỉ bò úc', 3, 1, '750000', 'bachibouc.jpg', 0, '2020-11-22 17:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `productQuantity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_soldout` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `product_remain` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `product_code`, `productQuantity`, `product_soldout`, `product_remain`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(1, '718-MSRP', 'MH1122', '50', '0', '50', 21, 4, '<p>718-MSRP</p>', 0, '1250000', 'model1.png'),
(2, '911 MSRP', 'MH1122', '50', '0', '50', 23, 4, '<p>911 MSRP</p>', 1, '750000', 'Model2.png'),
(3, 'Taycan MSRP', 'MH1122', '50', '0', '50', 18, 4, '<p>911 MSRP</p>', 0, '2250000', 'model3.png'),
(4, '718-MSRP', 'MH1122', '50', '0', '50', 18, 4, '<p>718-MSRP</p>', 1, '850000', 'model4.png'),
(5, '911 MSRP', 'MH1122', '50', '0', '50', 18, 4, '<p>911 MSRP</p>', 0, '650000', 'model5.png'),
(6, 'Taycan MSRP', 'MH1122', '50', '0', '50', 18, 4, '<p>Taycan MSRP</p>', 0, '720000', 'model6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `slider_image`, `type`) VALUES
(1, 'slider1', 'slider1.jpg', 0),
(2, 'slider5', 'slider1.jpg', 0),
(3, 'slider3', 'slider1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warehouse`
--

CREATE TABLE `tbl_warehouse` (
  `id_warehouse` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `sl_nhap` varchar(50) NOT NULL,
  `sl_ngaynhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_warehouse`
--

INSERT INTO `tbl_warehouse` (`id_warehouse`, `id_sanpham`, `sl_nhap`, `sl_ngaynhap`) VALUES
(1, 22, '5', '2019-07-16 18:31:22'),
(2, 21, '10', '2019-07-16 18:32:03'),
(3, 21, '3', '2019-07-16 18:42:59'),
(4, 20, '5', '2019-07-16 18:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(3, 3, 6, 'MÃ¡y tÃ­nh Dell A503', '10000000', 'dbb417a309.jpg'),
(4, 3, 18, 'Laptop Dell G7 7588 N7588A Core i7-8750H/Win10 (15.6 inch)', '2589900', '32942e9470.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Indexes for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  ADD PRIMARY KEY (`id_warehouse`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  MODIFY `id_warehouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
