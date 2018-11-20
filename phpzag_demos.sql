  -- phpMyAdmin SQL Dump
  -- version 4.8.2
  -- https://www.phpmyadmin.net/
  --
  -- Host: 127.0.0.1
  -- Generation Time: Nov 20, 2018 at 11:36 AM
  -- Server version: 10.1.34-MariaDB
  -- PHP Version: 7.2.7

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  SET AUTOCOMMIT = 0;
  START TRANSACTION;
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Database: `phpzag_demos`
  --

  -- --------------------------------------------------------

  --
  -- Table structure for table `shop_order`
  --

  CREATE TABLE `shop_order` (
    `id` int(11) NOT NULL,
    `member_id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `address` varchar(100) NOT NULL,
    `mobile` int(11) NOT NULL,
    `email` varchar(100) NOT NULL,
    `order_status` varchar(255) NOT NULL,
    `order_at` datetime NOT NULL,
    `payment_type` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  -- --------------------------------------------------------

  --
  -- Table structure for table `shop_order_item`
  --

  CREATE TABLE `shop_order_item` (
    `id` int(11) NOT NULL,
    `order_id` int(11) NOT NULL,
    `product_id` int(11) NOT NULL,
    `item_price` double NOT NULL,
    `quantity` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  -- --------------------------------------------------------

  --
  -- Table structure for table `shop_payment`
  --

  CREATE TABLE `shop_payment` (
    `id` int(11) NOT NULL,
    `order_id` int(11) NOT NULL,
    `payment_status` varchar(255) NOT NULL,
    `payment_response` text NOT NULL,
    `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  -- --------------------------------------------------------

  --
  -- Table structure for table `shop_products`
  --

  CREATE TABLE `shop_products` (
    `id` int(11) NOT NULL,
    `product_name` varchar(60) NOT NULL,
    `product_desc` text NOT NULL,
    `product_code` varchar(60) NOT NULL,
    `product_image` varchar(60) NOT NULL,
    `product_price` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  --
  -- Dumping data for table `shop_products`
  --

  INSERT INTO `shop_products` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`) VALUES
  (1, 'Paneer Tikka Masala', 'Perfect blend of indian spices, tossed paneer, a complete delight to savour!!', 'ind03', 'apple-iphone-7.jpeg', 300),
  (2, 'Kaju Curry', 'Roasted Cashwewnut,cooked in rich,creamy,onion-tomato based gravy.', 'ind04', 'samsung-galaxy-on5.jpeg', 390),
  (3, 'Hara Bhara Kebab', 'Blend of health and taste', 'ind02', 'oppo-f3-plus.jpeg', 250),
  (4, 'Veg Hot n Sour Soup', 'Spicy, tangy and loaded with vegetables', 'ind01', 'asus-zenfone-3s-max.jpeg', 175),
  (5, 'Butter Kulcha', '', 'ind05', '', 40),
  (6, 'Cheese Garlic Naan', '', 'ind06', '', 80),
  (7, 'Jeera Rice', '', 'ind07', '', 80),
  (8, 'Dal Tadka', '', 'ind08', '', 200),
  (9, 'Paneer Chilly', '', 'chi01', '', 150),
  (10, 'Veg 65', '', 'chi02', '', 175),
  (11, 'Veg Lollipop', '', 'chi03', '', 200),
  (12, 'Wontons', '5 piece of deep fried lip smacking dish', 'chi04', '', 250),
  (13, 'Double Decker Cheesey Grilled Sandwich', '', 'san01', '', 150),
  (14, 'Veg Grilled Coleslaw Sandwich', '', 'san02', '', 175),
  (15, 'Cheesey Grill Paneer Sandwich', '', 'san03', '', 250),
  (16, 'Melting Cheese Grilled Sandwich', '', 'san04', '', 230),
  (17, 'French Ravioli', 'Dish prepared from spinach corn, herbs, white sauce and topped with cheese and backed', 'ita01', '', 450),
  (18, 'Italian Herb Chilly Toast', 'Preapred with chilly flackes,oregano, paprika powder,bell peppers and mouth watering cheese', 'ita02', '', 330),
  (19, 'Al Arrabiata', 'Spicy tomato sauce flavored pasta with basil', 'ita03', '', 475),
  (20, 'Creamy Pasta', 'Pasta with creamy sauce, olive, jalapenos,parsley.', 'ita04', '', 475);

  --
  -- Indexes for dumped tables
  --

  --
  -- Indexes for table `shop_products`
  --
  ALTER TABLE `shop_products`
    ADD PRIMARY KEY (`id`);
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
