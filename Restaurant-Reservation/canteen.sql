-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 08:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen (1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ac_id` int(10) NOT NULL,
  `ac_name` varchar(25) NOT NULL,
  `acc_phone` varchar(15) NOT NULL,
  `acc_department` varchar(20) NOT NULL,
  `ac_mail` varchar(25) NOT NULL,
  `ac_preference` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ac_id`, `ac_name`, `acc_phone`, `acc_department`, `ac_mail`, `ac_preference`) VALUES
(1, 'ABIJITH SHAJI', '7760602476', 'MSC COMPUTER', 'abi@gmail.com', 'NO'),
(2, 'Abisha TK', '07733267891', 'Computer Science', 'abisha@gmail.com', 'NON-VEG'),
(3, 'Jinu', '07896523791', 'Civil department', 'jinu34@gmail.com', 'VEG'),
(4, 'Zayn', '07523149873', 'Computer Science', 'Zayn123@gmail.com', 'VEGAN'),
(5, 'Sagar', '07863245897', 'Fashion Diploma', 'SA_783@GMAIL.COM', 'NON-VEG'),
(6, 'Jackie', '07853146921', 'Bacelor of Arts', 'jackrock@gmail.com', 'VEG'),
(7, 'Neenisha', '07231988993', 'Computer Science', 'neenu678@outlook.com', 'NON-VEG'),
(8, 'Sharraf', '07123698498', 'Civil department', 'shrrff@gmail.com', 'VEG'),
(8, 'Alex', '07563789521', 'Bachelor of Electron', 'alexh@gmail.com', 'VEG');

-- --------------------------------------------------------

--
-- Table structure for table `logincred`
--

CREATE TABLE `logincred` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `starts_date` date DEFAULT NULL,
  `allergy` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `food_name`, `starts_date`, `allergy`, `price`, `comment`) VALUES
(13, 'Chicken Nuggets Meal', '2021-03-03', 'Gluten', 10, '6 chicken nuggets, regular fries and soft drink 330ml or 500ml water.'),
(14, 'Tandoori Chicken', '2021-09-01', 'Gluten', 6, '1/4 chicken marinated and grilled.'),
(16, 'Roast Aromatic Duck', '2021-01-02', 'Egg', 23, 'Delicious shredded duck deep fried with crispy skin.Served with pancake, spring onion, cucumber and hosin sauce.'),
(17, 'Cheese Burger', '2020-07-15', 'Milk, Wheat', 8, 'A classic 100% beef patty, and cheese; with onions , pickles,mustard, and a dollop of tomato ketchup, in a soft buns'),
(18, 'Lamp Chops', '2021-05-06', 'Gluten', 11, '4 pieces of Lamp Chops, marinated and grilled to perfection. '),
(20, 'Pilau Rice Vegetarian', '2021-01-20', 'wheat', 4, 'Rice served with mixed Indian dishes'),
(22, 'Paneer Tikka Roll', '2021-08-18', 'Milk', 5, 'Served with naan,salad & chutney'),
(23, 'Vegetable Spring Rolls', '2021-11-04', 'Soy', 6, 'Crispy rolls stuffed with julienne veggies with sweet chilli sauce.'),
(25, 'Filet-O-Fish', '2021-07-06', 'Gluten,Fish', 4, 'Delicious white or Pollock fish in crispy breadcrumbs, with cheese  and tartare sauce, in a steamed bun.'),
(27, 'Large Fries', '2020-12-31', 'None', 1, 'Fluffy inside and crispy on outside potato fries.'),
(28, 'Flat White', '2021-04-12', 'Milk', 2, 'Adouble shot of espresso blended with steamed and slightly frothed organic milk.'),
(29, 'Mixed Grill', '2021-06-01', 'Egg, Wheat', 16, '2 lamp chops, 1 chicken leg, 2 wings & 1 chicken seekh kebab served with mushroom Sauce.'),
(30, 'Regular Coffee', '2021-07-07', 'Milk', 3, 'Arabica bean espresso blended with organic semi-skimmed milk and hot water.'),
(33, 'Chicken', NULL, 'None', 4, 'Traditional south Indian ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `cust_name` varchar(25) NOT NULL,
  `order_num` varchar(10) NOT NULL,
  `notes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_name`, `order_num`, `notes`) VALUES
(1, 'Tanveer', '#200', 'Make it extra spicy'),
(2, 'Chris', '#201', 'Add extra fried onions'),
(3, 'Ajith', '#202', 'Add extra cheese'),
(4, 'Jackie', '#203', 'Extra lettuce'),
(5, 'Sagar', '#204', 'Extra onion ,Extra tomato'),
(6, 'Jinu', '#205', 'Extra spicy'),
(7, 'Neenisha', '#206', 'Less spicy'),
(8, 'Alex', '#207', 'Alex'),
(9, 'Sharraf', '#207', 'Add extra cheese'),
(9, 'Abisha', '#208', 'Extra spicy');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserv_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `num_guests` int(11) NOT NULL,
  `num_tables` int(11) NOT NULL,
  `rdate` date NOT NULL,
  `time_zone` text NOT NULL,
  `telephone` text NOT NULL,
  `comment` mediumtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserv_id`, `f_name`, `l_name`, `num_guests`, `num_tables`, `rdate`, `time_zone`, `telephone`, `comment`, `reg_date`, `user_fk`) VALUES
(77, 'ABIJITH', 'SHAJI', 4, 1, '2021-12-06', '12:00 - 16:00', '07760243976', 'Gluten Allergy', '2021-12-02 17:32:47', 35),
(78, 'Krishnakumar', 'Nair', 3, 1, '2021-12-09', '12:00 - 16:00', '07760243976', '', '2021-12-02 18:55:01', 28),
(79, 'Oliveira', 'Muicin', 8, 2, '2021-10-14', '12:00-16:00', '07896423741', 'None', '2021-08-03 13:25:10', 28),
(84, 'Roisin', 'Murphy', 7, 2, '2021-11-25', '16:00-17:00', '07561493241', 'None', '2021-12-02 14:28:24', 28),
(91, 'John', 'Whyte', 2, 1, '2021-12-19', '12:00-16:00', '07453219640', 'None', '2021-12-10 14:30:21', 28),
(92, 'Christopher', 'Creaney', 3, 1, '2021-12-02', '17:00-19:00', '07421396412', 'None', '2021-12-02 14:32:00', 28),
(93, 'Mariana', 'James', 5, 2, '2021-11-29', '12:00-16:00', '07854123641', 'None', '2021-11-24 14:36:47', 28),
(95, 'Alberta', 'Francis', 3, 1, '2022-01-01', '12:00-16:00', '074563124591', 'None', '2021-12-30 14:38:32', 28),
(101, 'Kate', 'Mark', 10, 3, '2022-01-05', '12:00-16:00', '07854123546', 'None', '2021-12-04 14:53:39', 28),
(104, 'Hazel', 'Innaay', 2, 1, '2021-12-16', 'None', '074569123546', 'None', '2021-12-02 14:55:40', 28);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `open_time` time NOT NULL DEFAULT '12:00:00',
  `close_time` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `date`, `open_time`, `close_time`) VALUES
(6, '2019-05-15', '03:11:00', '11:11:00'),
(7, '2019-05-16', '01:00:00', '01:00:00'),
(8, '2019-05-18', '02:01:00', '15:00:00'),
(9, '2021-12-15', '12:18:00', '13:17:00'),
(10, '2021-12-06', '10:00:00', '17:00:00'),
(11, '2021-12-31', '05:37:00', '17:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `tables_id` int(11) NOT NULL,
  `t_date` date NOT NULL,
  `t_tables` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`tables_id`, `t_date`, `t_tables`) VALUES
(6, '2019-05-17', 5),
(7, '2019-05-15', 10),
(9, '2021-12-15', 25),
(10, '2021-12-31', 50);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tid` int(11) NOT NULL,
  `order_num` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `cust_name` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tid`, `order_num`, `order_date`, `cust_name`, `amount`) VALUES
(1, 200, '2021-11-10', 'Abi', 30),
(2, 201, '2021-11-10', 'Abisha', 28),
(3, 203, '2021-11-10', 'Gigina', 30),
(4, 25, '2021-11-12', 'Tanvi', 47),
(5, 6, '2021-11-13', 'Joseph', 12),
(6, 8, '2021-12-15', 'Jinu', 17),
(7, 2, '2021-11-14', 'Zayn', 20),
(8, 9, '2021-11-12', 'Sagar', 7),
(9, 10, '2021-11-13', 'Jackie', 8),
(10, 11, '2021-11-13', 'Veena', 5),
(11, 8, '2021-11-15', 'Seemans', 45),
(12, 19, '2021-11-15', 'Prabhas', 15),
(13, 14, '2021-11-30', 'Rebecca', 10),
(14, 8, '2021-11-24', 'Marian', 18),
(15, 9, '2021-11-25', 'Petrick', 25),
(16, 11, '2021-12-27', 'Mathew', 12),
(17, 15, '2021-12-30', 'Ilana', 13),
(18, 13, '2021-11-28', 'Amar', 16),
(19, 7, '2021-11-16', 'Ajith', 20),
(20, 9, '2021-11-16', 'Sunil', 25),
(22, 14, '2021-12-02', 'Chris', 15),
(23, 16, '2021-12-02', 'Alex', 12),
(24, 17, '2021-12-03', 'Sisily', 8),
(25, 19, '2021-12-03', 'Max', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `uidUsers`, `emailUsers`, `pwdUsers`, `reg_date`, `role_id`) VALUES
(28, 'Manager', 'manager@hotmail.com', '987654', '2019-04-30 20:46:20', 2),
(35, 'Abijith', 'abijithshaji1994@gmail.com', '123456', '2021-12-02 15:27:10', 1),
(36, 'cook', 'cook@gmail.com', '$2y$10$7Jj/V9kw88/kTAjJ7ecyNOTT1aJgaiVV7btNxqt8i6I6a9fyGHlNm', '2021-12-02 15:29:37', 1),
(37, 'gigi', 'gigi@gmail.com', '$2y$10$FL1TIO43ECAGifeL4oFhKepITxXuIsN8CpsB2VX3Yk4ep0RlJDroG', '2021-12-03 19:23:54', 3),
(38, 'uelChef', 'uelChef@gmail.com', '$2y$10$6dZyelhw9gK6Bq4po0niyuJVuemjcm.ceL71qGPQYyLJTRyYa1Wsa', '2021-12-06 14:41:22', 3),
(39, 'tanveer', 'tanvi@gmail.com', '$2y$10$eRKm6RUljOB0r2Sxp7ht9.L/oNvmVf7xnJnF3Pw6.TdoQDb/vR32a', '2021-12-06 15:29:11', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logincred`
--
ALTER TABLE `logincred`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserv_id`),
  ADD KEY `users_fk` (`user_fk`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`tables_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logincred`
--
ALTER TABLE `logincred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `tables_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `idusers` FOREIGN KEY (`user_fk`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
