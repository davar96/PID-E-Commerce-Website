
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `pid_e_commerce_website`
--

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy Flip 3', 1046.00, './assets/Samsung-Galaxy-Z-Flip3.jpg', NOW()), 
(2, 'Redmi', 'Redmi Note 7', 122.00, './assets/audi_rs6.jpg', NOW()),
(3, 'Redmi', 'Redmi Note 6', 122.00, './assets/audi_rs6.jpg', NOW()),
(4, 'Redmi', 'Redmi Note 5', 122.00, './assets/audi_rs6.jpg', NOW()),
(5, 'Redmi', 'Redmi Note 4', 122.00, './assets/audi_rs6.jpg', NOW()),
(6, 'Redmi', 'Redmi Note 8', 122.00, './assets/audi_rs6.jpg', NOW()),
(7, 'Redmi', 'Redmi Note 9', 122.00, './assets/audi_rs6.jpg', NOW()),
(8, 'Redmi', 'Redmi Note', 122.00, './assets/audi_rs6.jpg', NOW()),
(9, 'Samsung', 'Samsung Galaxy S6', 152.00, './assets/audi_rs6.jpg', NOW()),
(10, 'Samsung', 'Samsung Galaxy S7', 152.00, './assets/audi_rs6.jpg', NOW()),
(11, 'Apple', 'Apple iPhone 5', 152.00, './assets/audi_rs6.jpg', NOW()),
(12, 'Apple', 'Apple iPhone 6', 152.00, './assets/audi_rs6.jpg', NOW()),
(13, 'Apple', 'Apple iPhone 7', 152.00, './assets/audi_rs6.jpg', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'PID', 'ECommerce', NOW()),
(2, 'Arustamyan', 'David', NOW());

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
