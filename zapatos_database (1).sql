-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 02:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zapatos_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `a_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kids_items`
--

CREATE TABLE `kids_items` (
  `article_no` varchar(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `cost` float NOT NULL,
  `photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids_items`
--

INSERT INTO `kids_items` (`article_no`, `product_name`, `type`, `colour`, `description`, `cost`, `photo`) VALUES
('k-1', 'NEON PINK HIGH BOOTS', 'kids', 'pink', 'With a comfortable padding, these boots will put the young kids toes cosy. Flexible fitment is made possible by the shoe straps.', 99, 'k-1.png'),
('k-10', 'FLOWERY LACED SHOE', 'kids', 'black', 'These brand-new black sneakers with a quirky sunflower design are available for kids! Comprised of an outsole with stability and a white leather top with distinctive branding.  ', 99, 'k-10.png'),
('k-2', 'YELLOW BASKETBALL SH', 'kids', 'yellow', 'These stylish elevated sneakers are ideal for wearing on the weekends. They feature comfortable twin rip tape fastenings for simple access and removal. \r\n\r\n ', 99, 'k-2.png'),
('k-3', 'TURQUISE CROCS', 'kids', 'blue', 'Crocs are trendy, so don\'t panic. Particularly with this kid\'s favourite turquoise blue Traditional Shoe. These truly stand out thanks to their timeless branding and convenient ankle band. ', 99, 'k-3.png'),
('k-4', 'DINO LACED SHOE', 'kids', 'black', 'Our premier character design specialist created our sports shoes. These sneakers have a cool dinosaur graphic on a black and grey background. ', 99, 'k-4.png'),
('k-5', 'SCHOOL LACED SHOE', 'kids', 'black', 'Your kid\'s school uniform would look great with these lace-up new shoes. Made with the best fabric to stop microorganisms that cause odours, so toes remain refreshing. ', 99, 'k-5.png'),
('k-6', 'BABY BLUE SHOES', 'kids', 'blue', 'Our latest baby blue children\'s sneaker is made where convenience and attractiveness converge. As kids explore the mysteries of life, gripping soles and ventilated liners keep feet refreshed and stabl', 99, 'k-6.png'),
('k-7', 'BEIGE WINTER BOOTS', 'kids', 'brown', 'This miniature version of our traditional beige winter boots was created using supple sandy brogues. Classic characteristics like brogue stitching and a simple lace-up closure are combined with outsta', 99, 'k-7.png'),
('k-8', 'GREEN LEAF FLIPFLOPS', 'kids', 'green', 'The adjustable bands on the green flip-flops guarantee a precisely moulded fit, and they are quick drying for immediate ease. These shoes will make the beach the ideal playroom, allowing you to run on', 99, 'k-8.png'),
('k-9', 'NAVY BLUE SNEAKER', 'kids', 'blue', 'These sneakers are sleek and useful option for weekend trips. They have double lace-up fastenings for simple access and removal. ', 99, 'k-9.png');

-- --------------------------------------------------------

--
-- Table structure for table `men_items`
--

CREATE TABLE `men_items` (
  `article_no` varchar(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `cost` float NOT NULL,
  `photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_items`
--

INSERT INTO `men_items` (`article_no`, `product_name`, `type`, `colour`, `description`, `cost`, `photo`) VALUES
('m-1', 'NEON BLUE CROCS', 'male', 'blue', 'Slide on and go with this water-friendly, personalised experience that has a vented front, a bottom that has been specially moulded to provide superior ankle support, and a collar band.', 99, 'm-1.png'),
('m-10', 'WHITE CASUAL SNEAKER', 'male', 'white', 'The familiar and beloved style, but with a striking platform sole. Double-layered  fabric highlights the raised forefoot further to draw attention to the contours. ', 99, 'm-10.png'),
('m-2', 'BLACK STRIPED SLIDES', 'male', 'black', 'A distinctive look for slippery surfaces. These quick-drying slides is embellished with 3-Stripes. The footbed\'s plush padding offers the highest level of comfort both inside and outside. ', 99, 'm-2.png'),
('m-3', 'BEIGE FORMAL SHOES ', 'male', 'brown', 'With a natural durable velvet outsole for solid grip both inside and out, these elegant men\'s velvet brogues may be worn up or down for any events. ', 99, 'm-3.png'),
('m-4', 'GREEN ANKLE BOOT ', 'male', 'green', 'They have a supple synthetic lining that makes them feel as nice as they look, and an inner zip makes access simple. ', 99, 'm-4.png'),
('m-5', 'MONTONE COMFORT SNEA', 'male', 'white', 'This season, get a tennis kick from your preferred retailer. These monotone comfort sneakers have a straightforward style and is made of perforated white and black fabric to keep you cool all day. ', 99, 'm-5.png'),
('m-6', 'BLACK AIR SNEAKER ', 'male', 'black', 'This premium Fabric men\'s sneaker\'s upper is created in a sustainable abattoir that has earned a silver rating for its environmental practises. ', 99, 'm-6.png'),
('m-7', 'BURGHANDY CANVAS SHO', 'male', 'red', 'These burgundy men\'s slip-on canvas shoes are fashionable and the perfect finishing touch for an ensemble because they are made for ease of wear and convenience. They feature rubber soles and detachab', 99, 'm-7.png'),
('m-8', 'BEIGE ANKLE BOOTS ', 'male', 'yellow', 'These classic ankle boots in beige are both fashionable and functional. Featuring low block pumps with a pull-on style. Antibacterial cushioning and blemish features to keep your feet pleasant and you', 99, 'm-8.png'),
('m-9', 'FORMAL BROWN BROGUES', 'male', 'brown', 'With these formal brown Brogue, your formal attire will be upgraded. With embroidered seams and a brown upper fabric, this shoe exudes luxury. A small heel raises, and a tulle closure fulfils the look', 99, 'm-9.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `article_no.` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `women_items`
--

CREATE TABLE `women_items` (
  `article_no` varchar(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `cost` float NOT NULL,
  `photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_items`
--

INSERT INTO `women_items` (`article_no`, `product_name`, `type`, `colour`, `description`, `cost`, `photo`) VALUES
('w-1', 'CASUAL STRIPED SNEAK', 'female', 'black', 'Want something classic? You\'ve discovered it when you walk outside wearing these adidas Casual Striped Sneakers.  It\'s hard to resist wearing them all the time when they have 3-Stripes. Don\'t pass up ', 99, 'w-1.png'),
('w-10', 'RED CANVAS SHOE ', 'female', 'red', 'This timeless shoe has a basic flat top, lace-up design with strong canvas uppers and distinctive rubber soled shoes.', 99, 'w-10.png'),
('w-2', 'RETRO SHINY BOOT ', 'female', 'black', 'Retro Shiny Boot ensures that your foot is properly positioned inside of your shoes and enhances the natural rotary motion of the heel of the foot, making walking in boots more pleasant. ', 99, 'w-2.png'),
('w-3', 'NUDE COMFORT TRAINER', 'female', 'brown', 'A moderate walking shoe with a soft-landing spot to reduce discomfort, a curved base shape, and a firm front to aid improve walking efficiency so you can go farther for more.', 99, 'w-3.png'),
('w-4', 'PINK STRIPED SLIDES', 'female', 'pink', 'A distinctive look for slippery surfaces. These pink quick-drying slides is embellished with 3-Stripes. The footbed\'s plush padding offers the highest level of comfort both inside and outside. ', 99, 'w-4.png'),
('w-5', 'LACED HIGH TOPS  ', 'female', 'white', 'Your shoe collection will be enhanced by the white Laced High Tops!  Featuring a white canvas top, traditional patched logo.  Finished with a robust outsole, this vintage high top looks great! ', 99, 'w-5.png'),
('w-6', 'GREY BASKETBALL SNEA', 'female', 'blue', 'These legendary shoes have a leather upper and Jordan Air padding for all-day comfort. With these Jordans, you can have an on-court appearance that matches your skill level. ', 99, 'w-6.png'),
('w-7', 'CLASSIC NUDE HEELS ', 'female', 'pink', 'With these heels, revamp your weekend outfit. Fall in love with these shoes, since they have a pointy toe and a dual sole base.', 99, 'w-7.png'),
('w-8', 'PINK ANKLE BOOT ', 'female', 'pink', 'A contemporary style with a crepe-effect and natural rubber sole for casual elegance. ', 99, 'w-8.png'),
('w-9', 'POINTED WHITE HEELS ', 'female', 'white', 'If you want the perfect weekend look or something for the workplace, get yourself these pointed white heels. This style comes with an upper composed of white material that has a sassy front and lots o', 99, 'w-9.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `kids_items`
--
ALTER TABLE `kids_items`
  ADD PRIMARY KEY (`article_no`);

--
-- Indexes for table `men_items`
--
ALTER TABLE `men_items`
  ADD PRIMARY KEY (`article_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `women_items`
--
ALTER TABLE `women_items`
  ADD PRIMARY KEY (`article_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
