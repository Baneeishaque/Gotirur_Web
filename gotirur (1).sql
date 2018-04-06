-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2018 at 09:10 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gotirur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE IF NOT EXISTS `attribute` (
`id` int(11) NOT NULL,
  `attribute-name` varchar(50) NOT NULL,
  `attribute-value` varchar(50) NOT NULL,
  `product-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `best_products`
--

CREATE TABLE IF NOT EXISTS `best_products` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `best_products`
--

INSERT INTO `best_products` (`id`, `product_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `main_image` int(11) NOT NULL,
  `icon_image` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `keywords` varchar(50) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `counts` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE IF NOT EXISTS `child_categories` (
  `category_name` varchar(50) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`category_name`, `parent_category_id`, `id`) VALUES
('Laptops', 1, 1),
('Televisions', 1, 2),
('Audio&Video', 1, 3),
('Mobiles', 1, 4),
('Cameras&Accessories', 1, 5),
('Tablets', 1, 6),
('Desktop PCs', 1, 7),
('Gaming&Accessories', 1, 8),
('Printers & Monitors& More', 1, 9),
('Smartwatches & Wearable', 1, 10),
('Televisions', 2, 11),
('Airconditioners', 2, 12),
('Refrigerators', 2, 13),
('Washing Machines', 2, 14),
('Microwave Ovens', 2, 15),
('Men', 3, 16),
('Women', 3, 17),
('Kids & Baby', 3, 18),
('Beroom Furniture', 4, 19),
('Home Furnishing', 4, 20),
('Home Decore', 4, 21),
('Kitchen & Dinnerware', 4, 22),
('Sports & Nutrision', 5, 23),
('Books', 5, 24),
('Musical Instruments', 5, 25),
('Stationary', 5, 26),
('Automotive', 5, 27);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `author` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
`id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE IF NOT EXISTS `featured_products` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `product_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `grantchild_category`
--

CREATE TABLE IF NOT EXISTS `grantchild_category` (
  `category_name` varchar(50) NOT NULL,
  `child_category_id` int(11) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `grantchild_category`
--

INSERT INTO `grantchild_category` (`category_name`, `child_category_id`, `id`) VALUES
('Canon', 6, 1),
('Nikon', 6, 2),
('Canon', 7, 3),
('Sony', 7, 4),
('Fujifilm', 7, 5),
('Coolpix', 7, 6),
('Camera Lenses', 8, 7),
('Selfiestick', 8, 8),
('Tripode', 8, 9),
('HandiCam', 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `new_products`
--

CREATE TABLE IF NOT EXISTS `new_products` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `new_products`
--

INSERT INTO `new_products` (`id`, `product_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `on_sale_products`
--

CREATE TABLE IF NOT EXISTS `on_sale_products` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `on_sale_products`
--

INSERT INTO `on_sale_products` (`id`, `product_id`) VALUES
(1, 4),
(2, 5),
(3, 6),
(4, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `odate` datetime DEFAULT NULL,
  `expecteddate` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `model_id` int(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `odate`, `expecteddate`, `status`, `model_id`, `quantity`, `customer_id`, `amount`) VALUES
(1, '2018-03-28 14:43:34', '2018-03-28 14:43:34', NULL, 3, 2, 13, 57998),
(2, '2018-03-28 14:44:38', '2018-03-28 14:44:38', NULL, 1, 2, 14, 27998),
(3, '2018-03-28 15:45:39', '2018-03-28 15:45:39', NULL, 2, 2, 15, 17998),
(4, '2018-03-28 15:54:04', '2018-03-28 15:54:04', NULL, 1, 8, 16, 111992),
(5, '2018-03-29 10:44:28', '2018-03-29 10:44:28', NULL, 3, 2, 17, 57998),
(6, '2018-04-02 09:37:46', '2018-04-02 09:37:46', NULL, 2, 2, 20, 17998);

-- --------------------------------------------------------

--
-- Table structure for table `parent_categories`
--

CREATE TABLE IF NOT EXISTS `parent_categories` (
  `category_name` varchar(50) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `parent_categories`
--

INSERT INTO `parent_categories` (`category_name`, `id`) VALUES
('Electronics', 1),
('TVs&Appliances', 2),
('Fashion', 3),
('Home&Furniture', 4),
('Sports,Books,and More', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `real_amount` int(11) NOT NULL,
  `discounted_amount` int(11) NOT NULL,
  `image_1` varchar(11) NOT NULL,
  `image_2` varchar(11) NOT NULL,
  `image_3` varchar(11) NOT NULL,
  `image_4` varchar(11) NOT NULL,
  `image_5` varchar(11) NOT NULL,
  `image_6` varchar(11) NOT NULL,
`id` int(11) NOT NULL,
  `long_description` varchar(50) NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_name`, `company_name`, `real_amount`, `discounted_amount`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `id`, `long_description`, `short_description`, `stock`) VALUES
('Mi Note4', 'Mi', 14999, 13999, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 1, '---Long Description Demo---Mi', '----Short Description Demo----Mi', 0),
('J7', 'Samsung', 9999, 8999, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 2, '---Long Description Demo---J7', '----Short Description Demo----J7', 8),
('note8', 'Samsung', 29999, 28999, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 3, '---Long Description Demo---note8', '----Short Description Demo----note8', 0),
('Xperia Z3', 'Sony', 26999, 25999, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 4, '---Long Description Demo---z3', '----Short Description Demo----Z3', 0),
('Iphone x', 'Iphone', 100000, 999999, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 5, '---Long Description Demo---x', '----Short Description Demo----x', 0),
('D3200', 'Nikon', 25000, 22000, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 6, '---Long Description Demo--d3200', '----Short Description Demo----d3200', 0),
('EOS 800d', 'Canon', 12999, 11999, 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 7, '---Long Description Demo---800d', '----Short Description Demo----800d', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recent_view`
--

CREATE TABLE IF NOT EXISTS `recent_view` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `last_view` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `recent_view`
--

INSERT INTO `recent_view` (`id`, `product_id`, `last_view`, `user_id`) VALUES
(6, 1, '2018-01-10 10:00:00', 1),
(7, 1, '0000-00-00 00:00:00', 0),
(8, 2, '0000-00-00 00:00:00', 0),
(9, 3, '0000-00-00 00:00:00', 4),
(10, 4, '0000-00-00 00:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `author` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `post_date` date NOT NULL,
  `content` varchar(50) NOT NULL,
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`author`, `rating`, `post_date`, `content`, `id`, `product_id`) VALUES
('aflah', 3, '2018-01-01', 'dxcvjhbkml', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`id` int(11) NOT NULL,
  `tag_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(1, 'Mobile'),
(2, 'Computer'),
(3, 'Camera'),
(4, 'Accessories'),
(5, 'Sounds');

-- --------------------------------------------------------

--
-- Table structure for table `tag_relation`
--

CREATE TABLE IF NOT EXISTS `tag_relation` (
`id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tag_relation`
--

INSERT INTO `tag_relation` (`id`, `tag_id`, `product_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 3, 5),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `top_products`
--

CREATE TABLE IF NOT EXISTS `top_products` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `top_products`
--

INSERT INTO `top_products` (`id`, `product_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `top_rated_products`
--

CREATE TABLE IF NOT EXISTS `top_rated_products` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `top_rated_products`
--

INSERT INTO `top_rated_products` (`id`, `product_id`) VALUES
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `mobile`) VALUES
(6, 'guest', NULL, NULL, NULL),
(7, 'guest', NULL, NULL, NULL),
(8, 'guest', NULL, NULL, NULL),
(9, 'guest', NULL, NULL, NULL),
(10, 'guest', NULL, NULL, NULL),
(11, 'Banee Ishaque', 'Kuuufjjgfkj', 'baneeishaque@gmail.com', ''),
(12, 'Banee Ishaque', 'Kuuufjjgfkj', 'baneeishaque@gmail.com', '9446827218'),
(14, 'hhg jkjj', 'tgyht', 'baneeishaque@vivaldi.net', '56563'),
(15, 'assss asfd', 'jkkkjkj', 'baneeishaque@vivaldi.net', '56563'),
(16, 'jjjj hh', 'nm', 'baneeishaque@gmail.com', '556'),
(17, 'b k', 'm', 'baneeishaque@gmail.com', '9446827218'),
(18, 'guest', NULL, NULL, NULL),
(19, 'guest', NULL, NULL, NULL),
(20, 'Banee Ishaque K Ishaque', 'Kuttiyathil House, Tanalur', 'baneeishaque@gmail.com', '09446827218');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
`id` int(11) NOT NULL,
  `item_ID` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `item_ID`, `customer_id`) VALUES
(7, 1, 6),
(6, 1, 6),
(10, 3, 8),
(11, 1, 8),
(12, 1, 8),
(13, 1, 10),
(14, 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_products`
--
ALTER TABLE `best_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grantchild_category`
--
ALTER TABLE `grantchild_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_products`
--
ALTER TABLE `new_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `on_sale_products`
--
ALTER TABLE `on_sale_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_categories`
--
ALTER TABLE `parent_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_view`
--
ALTER TABLE `recent_view`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_relation`
--
ALTER TABLE `tag_relation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_products`
--
ALTER TABLE `top_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_rated_products`
--
ALTER TABLE `top_rated_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `best_products`
--
ALTER TABLE `best_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `grantchild_category`
--
ALTER TABLE `grantchild_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `new_products`
--
ALTER TABLE `new_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `on_sale_products`
--
ALTER TABLE `on_sale_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `parent_categories`
--
ALTER TABLE `parent_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `recent_view`
--
ALTER TABLE `recent_view`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tag_relation`
--
ALTER TABLE `tag_relation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `top_products`
--
ALTER TABLE `top_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `top_rated_products`
--
ALTER TABLE `top_rated_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
