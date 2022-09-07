-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(14, 'Realme', 'Realme GT Neo 2 5G', 35999, 'https://image01.realme.net/general/20211008/1633694227602.png' ),
(15, 'IQOO', 'IQOO 7 Legend 5G', 39999, 'https://5.imimg.com/data5/SELLER/Default/2021/12/ZX/ZM/YV/144079306/brand-new-iqoo-7-legend-5g-ram-8gb-128gb-6-62-48mp-camera-dual-sim-500x500.jpeg' ),
(16, 'OnePlus', 'OnePlus 9R 5G', 36999, 'https://m.media-amazon.com/images/I/61LvUvbZGlL._SX679_.jpg' ),
(17, 'Apple', 'Apple Iphone 13 Pro', 119900, 'https://www.gizmochina.com/wp-content/uploads/2021/09/1-4-500x500.jpg' ),
(18, 'Apple', 'Apple Iphone 13 Pro Max', 129900, 'https://www.gizmochina.com/wp-content/uploads/2021/09/2-1-500x500.jpg' ),
(19, 'Google', 'Google Pixel 6 Pro', 67490, 'https://m.media-amazon.com/images/I/71ee+5V4ZRL._AC_SL1500_.jpg' ),
(20, 'OnePlus', 'OnePlus 9 Pro', 59999, 'https://m.media-amazon.com/images/I/61LvUvbZGlL._SL1500_.jpg' ),
(21, 'Samsung', 'Samsung Galaxy S21', 55480, 'https://m.media-amazon.com/images/I/41rXapcwEbL.jpg' ),
(13, 'Realme', 'Realme GT Neo', 37999, 'https://image01.realme.net/general/20210811/1628679174740.png' ),
(12, 'OnePlus', 'OnePlus Nord 2', 34999, 'https://www.gizmochina.com/wp-content/uploads/2021/06/cats-8-500x500.jpg' ),
(11, 'Samsung', 'Samsung Note 20 Ultra', 99999, 'https://m.media-amazon.com/images/I/316NdiPCyES.jpg' ),
(10, 'IQOO', 'IQOO Z3', 17999, 'https://s3b.cashify.in/gpro/uploads/2021/03/08092954/iqoo-z3-5g-front.png' ),
(9, 'Samsung', 'Samsung M40', 16850, 'https://www.gizmochina.com/wp-content/uploads/2019/03/Samsung-Galaxy-A40-500x500.jpg' ),
(8, 'Realme', 'Realme X7 5G', 19999, 'https://image01.realme.net/general/20210128/1611837001222.png' ),
(7, 'Realme', 'Realme Narzo 30 Pro', 16999, 'https://www.gizmochina.com/wp-content/uploads/2020/09/Realme-Narzo-20-Pro-500x500.jpg' ),
(6, 'Realme', 'Realme 8s', 19999, 'https://image01.realme.net/general/20210909/1631183126059.jpg' ),
(5, 'Micromax', 'Micromax IN 2B', 8499, 'https://s3b.cashify.in/gpro/uploads/2021/06/30103104/micromax-in-2b-front-3.png' ),
(4, 'Poco', 'Poco C31', 7999, 'https://www.gizmochina.com/wp-content/uploads/2021/09/Xiaomi-POCO-C31-4-500x500.jpg' ),
(3, 'Micromax', 'Micromax IN 1', 9999, 'https://www.gizmochina.com/wp-content/uploads/2020/11/Micromax-In-note-1.jpeg' ),
(2, 'IQOO', 'IQOO U3X', 9990, 'https://www.infodeal.in/wp-content/uploads/2021/12/iQOO-U3x-1.png?x11501' ),
(1, 'Realme', 'Realme C20', 7499, 'https://static.digit.in/default/19a10a3299670e00b49a79ae3dd8d1f072626021.jpeg?tr=1200'),
(22, 'Apple', 'Apple Iphone 13 Mini', 69900, 'https://www.gizmochina.com/wp-content/uploads/2021/09/2-2-500x500.jpg' ),
(23,'Micromax','Micromax IN 1 Note',12499,'https://www.gizmochina.com/wp-content/uploads/2020/11/Micromax-In-note-1-500x500.jpeg'),
(24,'Poco', 'Poco C3', 8299, 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-poco-c3-1.jpg'),
(25,'Poco','Poco F3 GT',30000,'https://www.gizmochina.com/wp-content/uploads/2021/04/noname-500x500.png'),
(26,'Google','Google Pixel 5A',39310,'https://www.gizmochina.com/wp-content/uploads/2021/02/pixel-5a-500x500.jpg'),
(27,'Google','Google Pixel 6Pro',93700,'https://www.gizmochina.com/wp-content/uploads/2021/05/a-1-500x500.jpg');


-- --------------------------------------------------------




-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL ,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'Anupam', 'admin@gmail.com', '123');


-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

CREATE TABLE `specifications` (
                           `item_id` int(11) NOT NULL,
                           `product_processor` varchar(200) NOT NULL,
                           `product_display` varchar(255) NOT NULL,
                           `product_ram` int(1) NOT NULL,
                           `product_storage` int(2) NOT NULL,
                           `product_camera` varchar(255) NOT NULL,
                           `product_rating` int(1) NOT NULL,
                           `item_cat` varchar(200) NOT NULL ,
                           foreign key (`item_id`) references product(`item_id`) on delete cascade
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `specifications` (`item_id`, `product_processor`, `product_display`, `product_ram`, `product_storage`, `product_camera`, `product_rating`,`item_cat`) VALUES
(1,'Helio G35','6.5HD IPS LCD',2,32,'8MP rear,5MP front',4,'entry-level' ),
(2,'Snapdragon 480','6.58HD IPS LCD',4,64,'13MP rear,8MP front',2,'entry-level' ),
(3,'Helio G80','6.67HD IPS LCD',6,64,'48MP rear,8MP front',5,'entry-level' ),
(4,'Helio G35','6.5HD IPS LCD',3,32,'13MP rear,5MP front',3,'entry-level' ),
(5,'Unisoc T610','6.52HD IPS LCD',4,64,'13MP rear,5MP front',1,'entry-level' ),
(6,'dimensity 810','6.5HD IPS LCD 90HZ',8,128,'64MP rear,16MP front',4,'low-end' ),
(7,'dimensity 800U','6.5HD IPS LCD 120HZ',6,64,'8MP rear,16MP front',3,'low-end' ),
(8,'dimensity 800U','6.4HD IPS LCD',6,64,'64MP rear,16MP front',2,'low-end' ),
(9,'Snapdragon 675','6.3HD IPS LCD',4,64,'32MP rear,16MP front',4,'low-end' ),
(10,'Snapdragon 768G','6.58HD IPS LCD',6,256,'64MP rear,16MP front',5,'low-end' ),
(11,'Exynos 990','6.9FHD AMOLED 120HZ',12,128,'108MP rear,20MP front',4,'flag-ship' ),
(12,'dimensity 1200','6.44FHD AMOLED 90HZ',8,128,'50MP rear,32MP front',4,'mid-range' ),
(13,'Snapdragon 888','6.4FHD AMOLED 120HZ',8,128,'64MP rear,16MP front',3,'mid-range' ),
(14,'Snapdragon 870','6.62FHD AMOLED 120HZ',12,256,'64MP rear,16MP front',3,'mid-range' ),
(15,'Snapdragon 888','6.62FHD AMOLED 120HZ',8,128,'48MP rear,16MP front',3,'mid-range' ),
(16,'Snapdragon 870','6.55FHD AMOLED 120HZ',8,128,'48MP rear,16MP front',5,'mid-range' ),
(17,'A15 Bionic','6.1FHD OLED 120HZ',6,128,'12MP rear,12MP front',2,'flag-ship' ),
(18,'A15 Bionic','6.7FHD OLED 120HZ',6,128,'12MP rear,12MP front',4,'flag-ship' ),
(19,'Google Tensor','6.7FHD P-OLED 120HZ',12,128,'50MP rear,11.1MP front',5,'flag-ship' ),
(20,'Snapdragon 888','6.7FHD Fluid-AMOLED 120HZ',8,128,'50MP rear,16MP front',4,'flag-ship' ),
(21,'Exynos 2100','6.2FHD Dynamic-AMOLED 120HZ',8,128,'64MP rear,10MP front',3,'flag-ship' ),
(23,'Helio G85','6.67HD IPS LCD',4,64,'48MP rear,16MP front',3,'low-end'),
(22,'A15 Bionic','5.4FHD OLED ',4,64,'12MP rear,12MP front',3,'flag-ship' ),
(24,'Helio G80','6.67HD IPS LCD',4,64,'12MP rear,8MP front',3,'entry-level'),
(25,'dimensity 1200','6.67FHD IPS LCD',6,128,'64MP rear,16MP front',5,'mid-range'),
(26,'Snapdragon 765G','6.34FHD IPS LCD',6,128,'16MP rear,8MP front',4,'mid-range'),
(27,'Google Tensor','6.71FHD IPS LCD',12,128,'50MP rear,11.2MP front',5,'flag-ship');
--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


CREATE TABLE `newsletter` (
                                  `email_no` int(11) NOT NULL auto_increment primary key ,
                                  `name` varchar(255) NOT NULL ,
                                  `registered_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
