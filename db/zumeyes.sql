-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 01:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zumeyes`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(225) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `page_title` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `page_title`, `status`) VALUES
(5, '<div class=\"col-sm-6 contentBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; float: left; width: 585px; color: rgb(51, 51, 51);\"><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.8em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">Our Story</h2><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">Founded in 2018, By an ex-Microsoft \'techie\' with no money but truckloads of relentless passion to make a difference in this world, Lenskart is India\'s fastest growing eyewear business today.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">With a rapidly growing business reaching out to over 1,00,000 customers a month via a unique combination of a strong online business as www.zumeyes.com, uniquely designed physical stores, as well as a first of its kind \'home eye check up\' service, Zumeyes is revolutionizing the eyewear industry in india.</p></div><div class=\"col-sm-6 imgBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; float: left; width: 585px; color: rgb(51, 51, 51);\"><div', '', ''),
(6, '<div class=\"col-sm-6 imgBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; float: left; width: 585px; color: rgb(51, 51, 51);\"><div class=\"img clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><img src=\"http://[::1]/CI/assets/images/blog_1.jpg\" alt=\"Image\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; height: auto; max-width: 100%;\"></div></div><div class=\"col-sm-6 contentBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; float: left; width: 585px; color: rgb(51, 51, 51);\"><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.8em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">Our Vision</h2><ul class=\"list clearfix\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 20px 30px 0px; border: 0px; font: inherit; vertical-align: baseline; list-style: square;\"><li style=\"margin: 0px; padding: 5px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.1em; line-height: inherit; font-family: inherit; vertical-align: baseline;\">15 million people in India are blind, which is 50% of the blind people of the world.</li><li style=\"margin: 0px; padding: 5px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.1em; line-height: inherit; font-family: i', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `user_image` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `designation` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `email`, `password`, `name`, `user_image`, `phone`, `designation`, `address`, `status`) VALUES
(1, 'admin@gmail.com', 'admin@12', 'Admin', 'logo.png', '1234567890', 'Owner', 'gfxcfgv nb ghvhg ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `axis`
--

CREATE TABLE `axis` (
  `id` int(225) NOT NULL,
  `axis` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axis`
--

INSERT INTO `axis` (`id`, `axis`) VALUES
(1, '1'),
(2, '1.25'),
(3, '1.50'),
(4, '1.75');

-- --------------------------------------------------------

--
-- Table structure for table `bannerimage`
--

CREATE TABLE `bannerimage` (
  `id` int(225) NOT NULL,
  `bannerimage` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bannerimage`
--

INSERT INTO `bannerimage` (`id`, `bannerimage`, `status`) VALUES
(1, 'offer3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date` varchar(225) NOT NULL,
  `title` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `description`, `date`, `title`) VALUES
(5, 'blog1.jpg', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14.882px; letter-spacing: 1.2px;\">If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you.</span><br></p>', 'Jan 09 2019 11:04', '5 WAYS TO ACCESORIZE WITH EYEGLASSES'),
(6, 'blog1.jpg', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14.882px; letter-spacing: 1.2px;\">If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you</span><br></p>', '2019-01-08 07:57', 'SPREADTHEVISION - THE GIFT OF CLEAR EYESIGHT'),
(7, 'blog1.jpg', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14.882px; letter-spacing: 1.2px;\">If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you.</span><br></p>', '2019-01-08 07:57', '5 WAYS TO ACCESORIZE WITH EYEGLASSES');

-- --------------------------------------------------------

--
-- Table structure for table `blog_header_image`
--

CREATE TABLE `blog_header_image` (
  `id` int(225) NOT NULL,
  `header_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_header_image`
--

INSERT INTO `blog_header_image` (`id`, `header_image`) VALUES
(1, 'michael-baron-472374-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(225) NOT NULL,
  `brand_name` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `status`) VALUES
(6, 'Oakley', 1),
(7, 'Ray-Ban', 1),
(8, 'Tory Burch', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(250) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `status`) VALUES
(13, 'EYEGLASSES', 1),
(14, 'SUNGLASSES', 1),
(15, 'CONTACT LENSES', 1),
(16, 'Location', 1);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(225) NOT NULL,
  `color_name` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color_name`, `status`) VALUES
(5, 'Black', 1),
(6, 'TORTOISE ', 1),
(7, 'SILVER', 1),
(8, 'GREY', 1),
(9, 'BLUE', 1),
(10, 'PURPLE', 1),
(11, 'TWO-TONE', 1),
(12, 'BROWN', 1),
(13, 'GOLD', 1),
(14, 'CRYSTAL ', 1),
(15, 'GREEN ', 1),
(16, 'PINK', 1),
(17, 'RED', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cylinder`
--

CREATE TABLE `cylinder` (
  `cylinder` varchar(225) NOT NULL,
  `id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cylinder`
--

INSERT INTO `cylinder` (`cylinder`, `id`) VALUES
('1', 1),
('1.25', 2),
('1.50', 3),
('1.75', 4);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(225) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `description`, `status`) VALUES
(1, '<div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: I’m not sure about the size and fit of the frames.</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong> At Zumeyes, we offer glasses in 3 sizes – small, medium, and large. Click the ‘Frame Size’ link at the bottom of the page to know your size. ~80-90% of our customers find a medium size frame to be the best fit.</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: What if I buy glasses & they don’t fit me? What if the lenses aren’t right ?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong> Don’t worry! It is our responsibility to get the perfect pair of glasses. In the rare circumstance that your glasses don’t fit properly, we make it extremely easy for you to exchange or return the frames, with lenses. If you face any difficulty, just write to us on support@zumeyes.com We have a 14 day, no-questions asked return policy and provide instant money back or store credit on return. *Please refer to T&C of Return Policy for the same https://www.zumeyes.com/terms-and-conditions</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: Will the glasses have my prescription?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong> You can buy glasses fitted with your prescription or even the frames standalone. We custom-make glasses with single vision, bifocal, or progressive prescriptions across all powers. Our glasses are ~50% cheaper than market average, since we bypass intermediaries – and best of all, we charge the same price, regardless of your power!</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fit`
--

CREATE TABLE `fit` (
  `id` int(225) NOT NULL,
  `fit_name` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fit`
--

INSERT INTO `fit` (`id`, `fit_name`, `status`) VALUES
(3, 'NARROW', 1),
(4, 'MEDIUM', 1),
(5, 'WIDE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guestuser`
--

CREATE TABLE `guestuser` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pincode` varchar(225) NOT NULL,
  `locality` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `landmark` varchar(225) NOT NULL,
  `alternatephone` varchar(225) NOT NULL,
  `addresstype` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestuser`
--

INSERT INTO `guestuser` (`id`, `email`, `name`, `phone`, `address`, `pincode`, `locality`, `city`, `state`, `landmark`, `alternatephone`, `addresstype`, `status`) VALUES
(1, 'admin@gmail.com', 'Gajendra', '1234567890', 'D Block 201, Ground Floor, Gali No.1\r\n\r\nWest Dawarka,\r\n\r\nNew Delhi', '24510', 'Hapur', 'Hapur', 'Uttar Pradesh', 'Uttar Pradesh', '4225356467', 'Home (All day delivery)', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lensebrand`
--

CREATE TABLE `lensebrand` (
  `id` int(225) NOT NULL,
  `lense_brand` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lensebrand`
--

INSERT INTO `lensebrand` (`id`, `lense_brand`, `status`) VALUES
(2, 'Brand1', 0),
(3, 'Brand4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lensecolor`
--

CREATE TABLE `lensecolor` (
  `id` int(225) NOT NULL,
  `lense_color` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lensecolor`
--

INSERT INTO `lensecolor` (`id`, `lense_color`, `status`) VALUES
(2, 'White', 0),
(3, 'Red', 0),
(4, 'Pink', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lensepackages`
--

CREATE TABLE `lensepackages` (
  `id` int(225) NOT NULL,
  `prescription_type` varchar(225) NOT NULL,
  `lense_name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lensepackages`
--

INSERT INTO `lensepackages` (`id`, `prescription_type`, `lense_name`, `price`, `description`, `status`) VALUES
(2, 'Single Vision', 'None Anti Glare', '80', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(3, 'Single Vision', 'None Anti Glare2', '79', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(4, 'Single Vision', 'None Anti Glare3', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(5, 'Single Vision', 'None Anti Glare4', '85', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(6, 'Single Vision', 'None Anti Glare5', '70', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(7, 'Bifocal', 'None Anti Glare', '85', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(8, 'Bifocal', 'None Anti Glare3', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(9, 'Bifocal', 'hgghhgvhn', '80', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(10, 'Frame Only', '', '', '', 0),
(11, 'Zero Power', 'None Anti Glare', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0),
(12, 'Zero Power', 'None Anti Glare5', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lensetype`
--

CREATE TABLE `lensetype` (
  `id` int(225) NOT NULL,
  `lense_type` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lenseuses`
--

CREATE TABLE `lenseuses` (
  `id` int(225) NOT NULL,
  `uses` varchar(250) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lenseuses`
--

INSERT INTO `lenseuses` (`id`, `uses`, `status`) VALUES
(4, 'DAILY', 1),
(5, 'WEEKLY', 1),
(6, 'TWO WEEKS', 1),
(7, 'MONTHLY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lense_product`
--

CREATE TABLE `lense_product` (
  `id` int(250) NOT NULL,
  `cat_id` int(250) NOT NULL,
  `sub_cat_id` int(250) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `pro_image` varchar(225) NOT NULL,
  `featuredimage` varchar(225) NOT NULL,
  `pro_description` varchar(1000) NOT NULL,
  `regular_price` varchar(250) NOT NULL,
  `sale_price` varchar(250) NOT NULL,
  `offer` varchar(250) NOT NULL,
  `dimension` varchar(225) NOT NULL,
  `weight` varchar(225) NOT NULL,
  `quantity` int(225) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `fit` varchar(255) DEFAULT NULL,
  `material` varchar(225) NOT NULL,
  `shape` varchar(225) NOT NULL,
  `style` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(225) NOT NULL,
  `material_name` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `material_name`, `status`) VALUES
(3, 'ACETATE', 1),
(4, 'METAL', 1),
(5, 'MIXED MATERIAL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nearaddition`
--

CREATE TABLE `nearaddition` (
  `id` int(225) NOT NULL,
  `nearaddition` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nearaddition`
--

INSERT INTO `nearaddition` (`id`, `nearaddition`) VALUES
(1, '1'),
(2, '1.25'),
(3, '1.50'),
(4, '1.75');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `status`) VALUES
(1, 'admin@gmail.com', '1'),
(2, 'gajendray100@gmail.com', '1'),
(3, 'gajendray9', '1'),
(4, 'sdgsd', '1'),
(5, 'admin1@gmail.com', '1'),
(6, 'ghs@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `offerimage`
--

CREATE TABLE `offerimage` (
  `id` int(225) NOT NULL,
  `offerimage` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offerimage`
--

INSERT INTO `offerimage` (`id`, `offerimage`, `status`) VALUES
(1, 'offer1.jpg|offer2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(225) NOT NULL,
  `prescription_type` varchar(2000) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `prescription_type`, `status`) VALUES
(1, 'Single Vision', 0),
(2, 'Bifocal', 0),
(3, 'Frame Only', 0),
(4, 'Zero Power', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(250) NOT NULL,
  `cat_id` int(250) NOT NULL,
  `sub_cat_id` int(250) NOT NULL,
  `sub_sub_catid` int(10) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `pro_image` varchar(225) NOT NULL,
  `featuredimage` varchar(225) NOT NULL,
  `pro_description` varchar(1000) NOT NULL,
  `regular_price` varchar(250) NOT NULL,
  `sale_price` varchar(250) NOT NULL,
  `offer` varchar(250) NOT NULL,
  `frame_width` varchar(225) NOT NULL,
  `weight` varchar(225) NOT NULL,
  `quantity` int(225) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `purpose` varchar(225) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `fit` varchar(255) NOT NULL,
  `material` varchar(225) NOT NULL,
  `shape` varchar(225) NOT NULL,
  `uses` varchar(225) NOT NULL,
  `status` int(2) NOT NULL,
  `lense_type` varchar(225) NOT NULL,
  `lense_width` varchar(225) NOT NULL,
  `bridge` varchar(225) NOT NULL,
  `temple_length` varchar(225) NOT NULL,
  `lense_height` varchar(225) NOT NULL,
  `water_content` varchar(225) NOT NULL,
  `uses_duration` varchar(225) NOT NULL,
  `packaging` varchar(500) NOT NULL,
  `features` varchar(225) NOT NULL,
  `tags` varchar(225) NOT NULL,
  `frame_style` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `sub_cat_id`, `sub_sub_catid`, `product_name`, `pro_image`, `featuredimage`, `pro_description`, `regular_price`, `sale_price`, `offer`, `frame_width`, `weight`, `quantity`, `brand`, `purpose`, `color`, `fit`, `material`, `shape`, `uses`, `status`, `lense_type`, `lense_width`, `bridge`, `temple_length`, `lense_height`, `water_content`, `uses_duration`, `packaging`, `features`, `tags`, `frame_style`) VALUES
(73, 13, 9, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.53 PM (1).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.53 PM (1).jpeg|WhatsApp Image 2018-02-13 at 12.43.53 PM (2).jpeg|WhatsApp Image 2018-02-13 at 12.43.53 PM.jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (1).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '400', '20', '', '20gm', 10, 'Oakley|Ray-Ban', 'WORK |FASION', 'Black|TORTOISE |SILVER|GREEN ', 'NARROW', 'ACETATE|MIXED MATERIAL', 'SQUARE |ROUND|CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(74, 13, 9, 0, 'Weikely', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (3).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (4).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (5).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '400', '360', '10', '', '12gm', 5, 'Ray-Ban', 'FASION', 'GREY|TWO-TONE|BROWN', 'MEDIUM|WIDE', 'METAL', 'ROUND|CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(75, 13, 9, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (8).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (9).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '800', '640', '20', '', '20gm', 20, 'Ray-Ban|Tory Burch', 'WORK |SPORT', 'TORTOISE |GREY|BLUE|TWO-TONE|BROWN|PINK', 'NARROW|MEDIUM|WIDE', 'ACETATE|METAL', 'SQUARE |RECTANGLE ', '', 1, '', '', '', '', '35mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(76, 14, 12, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (13).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (12).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (13).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (14).jpeg|WhatsApp Image 2018-0', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '400', '20', '', '12gm', 5, 'Ray-Ban|Tory Burch', 'WORK |FASION', 'Black|TWO-TONE|BROWN|GOLD', 'MEDIUM|WIDE', 'METAL|MIXED MATERIAL', 'SQUARE |RECTANGLE ', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(77, 13, 10, 0, 'SuccessTest', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (14).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (12).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (13).jpeg|WhatsApp Image 2018-0', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '450', '10', '', '12gm', 5, 'Ray-Ban|Tory Burch', 'FASION|SPORT', 'TORTOISE |BLUE|BROWN', 'NARROW|MEDIUM', 'METAL|MIXED MATERIAL', 'RECTANGLE |ROUND', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(78, 13, 10, 0, 'New Product', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (21).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (18).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (19).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (20).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (21).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '400', '360', '10', '', '25gm', 10, 'Oakley|Tory Burch', 'FASION', 'BROWN|GOLD', 'MEDIUM|WIDE', 'MIXED MATERIAL', 'RECTANGLE |CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(79, 14, 11, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (15).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (15).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (16).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (17).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '425', '15', '', '20gm', 10, 'Oakley|Ray-Ban', 'FASION|SPORT', 'Black|TORTOISE |BLUE|GOLD', 'NARROW|MEDIUM|WIDE', 'ACETATE|METAL', 'RECTANGLE |ROUND', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(80, 14, 11, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (5).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (5).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (6).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (8).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '123', '92.25', '25', '', '20gm', 10, 'Ray-Ban', 'WORK |FASION|SPORT', 'BLUE|BROWN|GOLD|GREEN ', 'NARROW|MEDIUM|WIDE', 'ACETATE|METAL|MIXED MATERIAL', 'RECTANGLE ', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(81, 14, 12, 0, 'Test', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (20).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (17).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (18).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (19).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (20).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '800', '720', '10', '', '20gm', 5, 'Oakley|Tory Burch', 'WORK |FASION', 'GREY|PURPLE|TWO-TONE|BROWN', 'NARROW|MEDIUM', 'METAL|MIXED MATERIAL', 'RECTANGLE |ROUND|CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(82, 14, 11, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (3).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (4).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '400', '20', '', '20gm', 10, 'Oakley|Ray-Ban', 'FASION', 'TORTOISE |BLUE|TWO-TONE|BROWN', 'MEDIUM|WIDE', 'ACETATE|METAL', 'SQUARE |ROUND', '', 1, '', '', '', '', '35mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(83, 14, 11, 3, 'Success', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (9).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (12).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '375', '25', '134mm', '12gm', 10, 'Ray-Ban', 'FASION', 'TORTOISE |BLUE', 'MEDIUM', 'ACETATE', 'SQUARE |RECTANGLE ', '', 1, '', '34mm', '20mm', '142mm', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(84, 15, 28, 0, 'Chamberlain', 'lens_4.png', 'lens_4.png|lens_7.png|lens_Img1.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '700', '630', '10', '', '12gm', 10, 'Oakley|Ray-Ban', '', 'TORTOISE |BROWN|GREEN ', '', 'ACETATE', '', 'Monthly', 1, 'WEEKLY|TWO WEEKS', '', '', '', '', '50%', '', '6', '', '', ''),
(85, 15, 28, 0, 'Wilkie', 'lens_6.png', 'lens_Img2.jpg|lens_Img3.jpg|lens_Img4.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '600', '480', '20', '', '20gm', 5, 'Ray-Ban', '', 'TORTOISE |BLUE|GREEN |PINK', '', 'METAL|MIXED MATERIAL', '', 'Monthly', 1, 'TWO WEEKS', '', '', '', '', '50%', '', '6', '', '', ''),
(86, 15, 29, 0, 'Chamberlain', 'lens_Img4.jpg', 'lens_1.jpg|lens_1.png|lens_Img3.jpg|lens_Img4.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '450', '10', '', '20gm', 5, 'Oakley|Ray-Ban', '', 'TORTOISE |BLUE|TWO-TONE', '', 'METAL', '', 'Monthly', 1, 'DAILY|WEEKLY', '', '', '', '', '50%', '', '6', '', '', ''),
(87, 15, 30, 0, 'Wilkie', 'lenses_accessories.jpg', 'lens_6.png|lens_7.png|lenses_accessories.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '450', '10', '', '5', 10, 'Ray-Ban|Tory Burch', '', 'TORTOISE |SILVER|PURPLE|GOLD', '', 'ACETATE', '', 'Monthly', 1, 'WEEKLY|TWO WEEKS', '', '', '', '', '50%', '', '6', '', '', ''),
(88, 13, 9, 0, 'Chamberlain', 'frame_3.png', 'frame_2.png|frame_3.png|frame_5.png', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.</p>', '700', '630', '10', '134mm', '20gm', 10, 'Oakley|Ray-Ban', 'FASION|SPORT', 'Black|TORTOISE |SILVER', 'NARROW|MEDIUM|WIDE', 'METAL', 'SQUARE |RECTANGLE ', '', 1, '', '44mm', '20mm', '142mm', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim'),
(90, 15, 28, 0, 'Chamberlain', 'lens_6.png', 'lens_2.png|lens_3.png|lens_6.png', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '700', '665', '5', '', '10gm', 10, 'Oakley|Ray-Ban', '', 'TORTOISE |BROWN', '', 'MIXED MATERIAL', '', 'WEEKLY', 1, 'DAILY|WEEKLY', '', '', '', '', '50%', 'Monthly', '6', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `id` int(225) NOT NULL,
  `purpose_name` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`id`, `purpose_name`, `status`) VALUES
(3, 'WORK ', 1),
(4, 'FASION', 1),
(5, 'SPORT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shape`
--

CREATE TABLE `shape` (
  `id` int(225) NOT NULL,
  `shape_type` varchar(225) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shape`
--

INSERT INTO `shape` (`id`, `shape_type`, `status`) VALUES
(2, 'SQUARE ', 1),
(3, 'RECTANGLE ', 1),
(4, 'ROUND', 1),
(5, 'CAT-EYE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

CREATE TABLE `sliderimage` (
  `id` int(225) NOT NULL,
  `sliderimage` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `sliderimage`) VALUES
(1, 'banner1.jpg|banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sphere`
--

CREATE TABLE `sphere` (
  `id` int(225) NOT NULL,
  `sphere` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sphere`
--

INSERT INTO `sphere` (`id`, `sphere`) VALUES
(1, '1'),
(2, '1.25'),
(3, '1.50'),
(4, '1.75'),
(5, '2');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(250) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `sub_cat_name` varchar(250) NOT NULL,
  `bg_image` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cat_name`, `sub_cat_name`, `bg_image`, `status`) VALUES
(9, '13', 'SHOP MEN', 'men_eyeglasses4.jpg', 0),
(10, '13', 'SHOP WOMEN', 'women_eyeglasses.jpg', 0),
(11, '14', 'SHOP MEN', 'men_sunglasses.jpg', 0),
(12, '14', 'SHOP WOMEN', 'women_sunglasses.jpg', 0),
(28, '15', 'CONTACT LENSES', 'lenses_img.jpg', 0),
(31, '15', 'ACCESSORIES', 'lenses_accessories3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_subcategory`
--

CREATE TABLE `sub_subcategory` (
  `id` int(250) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `sub_cat_name` varchar(250) NOT NULL,
  `bg_image` varchar(100) NOT NULL,
  `sub_sub_cat` varchar(225) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_subcategory`
--

INSERT INTO `sub_subcategory` (`id`, `cat_name`, `sub_cat_name`, `bg_image`, `sub_sub_cat`, `status`) VALUES
(1, '15', '25', 'lensSolutions_Img6.jpg', 'Lens Solutions', 1),
(2, '15', '25', 'lensCases_Img3.jpg', 'LensCases', 1),
(3, '14', '11', 'sunglass_menSub.jpg', 'Sunglasses', 1),
(4, '14', '12', 'sunglass_womenSub.jpg', 'Sunglasses', 1),
(5, '14', '11', 'sunglassPresc_menSub.jpg', 'Prescription Sunglasses', 1),
(6, '14', '12', 'sunglassPresc_womenSub.jpg', 'Prescription Sunglasses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `term_and_condition`
--

CREATE TABLE `term_and_condition` (
  `id` int(225) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term_and_condition`
--

INSERT INTO `term_and_condition` (`id`, `description`, `status`) VALUES
(1, '<section class=\"termsSection clearfix\" style=\"margin: 0px; padding: 40px 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"container\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 15px; border: 0px; font: inherit; vertical-align: baseline; width: 1200px;\"><div class=\"content clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><section class=\"termsSection clearfix\" style=\"margin: 0px; padding: 40px 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"container\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 15px; border: 0px; font: inherit; vertical-align: baseline; width: 1200px;\"><div class=\"content clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">Hello, and thanks for visiting! Which does business as Zumeyes, operates and provides services through www.zumeyes.com (the “Site”), the Zumeyes mobile app (the “App”), and our retail locations. We’ll go by “Zumeyes”, “we”, or “us” to keep it simple. We know these types of documents can get pretty dense, but we want you to read this, so we’ll do our best to keep it easy to read. We will also refer to the Site, the App, our retail locations, and the services available through them as the “Services.” These Terms of Use do not apply to your use of our Prescription Check mobile application or our in-store Prescription Check service. You can find the Terms of Use that apply to Prescription Check here.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">Before using any of the Services, please read these Terms of Use (these “Terms”), our Privacy Policy, and any other policies and notices on the Site, on the App, or in any of our retail locations. Collectively, these materials contain terms, rules, and other guidelines related to your use of the Services. As a condition to your access to or use of the Services, you consent to be bound by these Terms, so please do not use the Services if you do not agree with all of these Terms. Some parts of the Services may have other terms, guidelines, or rules, and if you use those parts, those additional terms will also apply. Your use of the Services, and our provision of the Services to you, constitutes an agreement between you and Warby Parker to be bound by each of the terms, guidelines, and rules incorporated into these Terms. Because these Terms are legally binding, we want to make sure you understand them (like really understand them), so if you have any questions, contact us at legal@zumeyes.com.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 15px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">1. We Reserve the Right to Update and Revise These Terms of Use at Any Time</h3><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">Things happen quickly, both inside and outside of Zumeyes, so we will sometimes review these Terms to make sure they accurately reflect developments in current law and our business operations. We reserve the right to update and revise these Terms at any time upon 7 days’ notice. We’ll provide notice by changing the “Effective Date” at the top of this page so you can tell if these Terms have changed since your last visit. Please review these Terms regularly because 7 days after we post any changes, your continued use of the Services constitutes your acceptance of the revised Terms.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 15px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">2. Eligibility</h3><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">We only permit individuals who are at least 18 years old and can form legally binding contracts to use the Services. However, even non-adults deserve fantastic eyewear. You can use the Services if you are under 18, but only if you are at least 13 years old and only if a parent or legal guardian who is at least 18 years old supervises you. In all cases, the adult will be the user and is responsible for any and all activity. If you are younger than 13 years old, you may not use the Services (although your parents can still buy glasses for you.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">Your use of the Services means you represent and warrant that you meet all eligibility requirements we outline in these Terms. However, we may refuse to let certain people access or use the Services. We may also change our eligibility criteria.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">We offer the Services only for personal, noncommercial use, and not for the use or benefit of any third party (unless you are a parent or legal guardian using the Services for your minor child).</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 15px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">3. Privacy</h3><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">Our Privacy Policy details how we collect and use your information. Please review it if you would like to know more about how we collect and use your information.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 15px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">4. Your Account</h3><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">You may be able to navigate some of the Services without creating a user account (”Account”); but certain Services (like making a purchase or ordering a Home Try-On) will require you to create an Account. If you create an Account, you are solely responsible for any activity that occurs through your Account. In order for us to provide you the best possible service, you agree to provide us with complete, accurate, and updated information for your Account at all times. If any information is incorrect or outdated, it can lead to errors or delays, for which we will not be responsible.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">You can share a good book, a nice walk, or even a pair of (non-prescription) glasses. You should not, however, share your Account information. And you shouldn’t use another person’s Account or registration information for the Services without permission. Similarly, no one else should be able to use your Account without permission. You are solely responsible for keeping your Account and Account password secure and for any consequence resulting from your failure to do so. You should never publish, distribute, or post login information for your Account.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">You can always delete the personal information from your Account by emailing us at privacy@zumeyes.com.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 15px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">5.Right to Use the Services</h3><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">After all of the restrictions above, we don’t want it to sound like you can’t even use the Services, so we’ll give you permission right here: subject to your complete and ongoing compliance with these Terms, you have the right to access and use the Services solely for your personal, non-commercial use. This right will allow you to use and enjoy the benefit of the Services as we provide them, in the manner we permit through these Terms. We don’t think you would need to do much else.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">Subject to your complete and ongoing compliance with these Terms, you also have the right to use one copy of the App downloaded directly from Warby Parker or from a legitimate marketplace (such as Apple’s iTunes store), solely in object code format, for your personal, non-commercial use on a single compatible mobile device that you own or control, for the purpose of accessing and using the Services in accordance with these Terms. The term App, as used in these Terms, includes any update or modification to the App that we make available to you (unless we provide you with separate terms when making the update or modification available).</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\">If you are prohibited under applicable law from using the App or the Services, you may not use them.</p></div></div></section></div></div></section>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(1) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `dob` varchar(225) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `status`, `fname`, `lname`, `phone`, `gender`, `dob`, `token`) VALUES
(1, 'admin@gmail.com', 'Admin@123', 1, 'Gajendra', 'yadav', '8755024556', 'on', '15/08/1993', ''),
(2, 'gaj@gmail.com', 'admin', 0, 'gajendra', 'Yadav', '', '', '', ''),
(10, 'Dileep@gmail.com', 'admin', 0, 'gajendra', 'Yadav', '', '', '', ''),
(11, 'mahesh@gmail.com', 'Admin@123', 1, 'gajendra', 'Yadav', '', '', '', ''),
(12, 'test@gmail.com', 'Admin@123', 1, 'gajendra', 'Yadav', '', '', '', ''),
(13, 'testing@gmail.com', 'Admin@123', 1, 'gajendra', 'Yadav', '', '', '', ''),
(14, 'yadavg@gmail.com', 'Admin@123', 1, 'gajendra', 'Yadav', '', '', '', ''),
(15, 'vikas@gmail.com', 'Admin@123', 1, 'vikas', 'chaudhary', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pincode` varchar(225) NOT NULL,
  `locality` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `landmark` varchar(225) NOT NULL,
  `alternatephone` varchar(225) NOT NULL,
  `addresstype` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`id`, `email`, `name`, `phone`, `address`, `pincode`, `locality`, `city`, `state`, `landmark`, `alternatephone`, `addresstype`, `status`) VALUES
(2, 'admin@gmail.com', 'Rajat', '04225356467', 'D Block 201, Ground Floor, Gali No.1West Dawarka,', '245101', 'Delhi', 'Delhi', 'Delhi', 'Delhi', '04225356467', 'Home (All day delivery)', '1'),
(3, 'admin@gmail.com', 'Gajendra', '04225356467', 'njhyfhnjgkihkih', '245101', 'Hapur', 'Hapur', 'Uttar Pradesh', 'Uttar Pradesh', '04225356467', 'Home (All day delivery)', '1');

-- --------------------------------------------------------

--
-- Table structure for table `usercart`
--

CREATE TABLE `usercart` (
  `pro_id` int(225) NOT NULL,
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `pro_image` varchar(225) NOT NULL,
  `prescription_type` varchar(225) NOT NULL,
  `lense_name` varchar(225) NOT NULL,
  `lense_price` varchar(225) NOT NULL,
  `lsphere` varchar(225) NOT NULL,
  `rsphere` varchar(225) NOT NULL,
  `lcylinder` varchar(225) NOT NULL,
  `rcylinder` varchar(225) NOT NULL,
  `laxis` varchar(225) NOT NULL,
  `raxis` varchar(225) NOT NULL,
  `nearpdsphere` varchar(225) NOT NULL,
  `pdsphere` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `prescription_name` varchar(225) NOT NULL,
  `rbox` varchar(10) NOT NULL,
  `lbox` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercart`
--

INSERT INTO `usercart` (`pro_id`, `id`, `email`, `name`, `price`, `pro_image`, `prescription_type`, `lense_name`, `lense_price`, `lsphere`, `rsphere`, `lcylinder`, `rcylinder`, `laxis`, `raxis`, `nearpdsphere`, `pdsphere`, `description`, `prescription_name`, `rbox`, `lbox`, `qty`) VALUES
(106, 75, 'admin@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercomments`
--

CREATE TABLE `usercomments` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `pro_id` int(225) NOT NULL,
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `pro_image` varchar(225) NOT NULL,
  `prescription_type` varchar(225) NOT NULL,
  `lense_name` varchar(225) NOT NULL,
  `lense_price` varchar(225) NOT NULL,
  `lsphere` varchar(225) NOT NULL,
  `rsphere` varchar(225) NOT NULL,
  `lcylinder` varchar(225) NOT NULL,
  `rcylinder` varchar(225) NOT NULL,
  `laxis` varchar(225) NOT NULL,
  `raxis` varchar(225) NOT NULL,
  `nearpdsphere` varchar(225) NOT NULL,
  `pdsphere` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `prescription_name` varchar(225) NOT NULL,
  `rbox` varchar(10) NOT NULL,
  `lbox` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`pro_id`, `id`, `email`, `name`, `price`, `pro_image`, `prescription_type`, `lense_name`, `lense_price`, `lsphere`, `rsphere`, `lcylinder`, `rcylinder`, `laxis`, `raxis`, `nearpdsphere`, `pdsphere`, `description`, `prescription_name`, `rbox`, `lbox`, `qty`) VALUES
(6, 86, 'admin@gmail.com', 'Chamberlain', '450', 'lens_Img4.jpg', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(8, 74, 'admin@gmail.com', 'Weikely', '360', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(9, 73, 'admin@gmail.com', 'Chamberlain', '400', 'WhatsApp Image 2018-02-13 at 12.43.53 PM (1).jpeg', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(10, 75, 'admin@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(11, 75, 'admin@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(12, 75, 'admin@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axis`
--
ALTER TABLE `axis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerimage`
--
ALTER TABLE `bannerimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_header_image`
--
ALTER TABLE `blog_header_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cylinder`
--
ALTER TABLE `cylinder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fit`
--
ALTER TABLE `fit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestuser`
--
ALTER TABLE `guestuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensebrand`
--
ALTER TABLE `lensebrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensecolor`
--
ALTER TABLE `lensecolor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensepackages`
--
ALTER TABLE `lensepackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lensetype`
--
ALTER TABLE `lensetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lenseuses`
--
ALTER TABLE `lenseuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lense_product`
--
ALTER TABLE `lense_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearaddition`
--
ALTER TABLE `nearaddition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerimage`
--
ALTER TABLE `offerimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shape`
--
ALTER TABLE `shape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimage`
--
ALTER TABLE `sliderimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sphere`
--
ALTER TABLE `sphere`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_and_condition`
--
ALTER TABLE `term_and_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercart`
--
ALTER TABLE `usercart`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `usercomments`
--
ALTER TABLE `usercomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `axis`
--
ALTER TABLE `axis`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bannerimage`
--
ALTER TABLE `bannerimage`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_header_image`
--
ALTER TABLE `blog_header_image`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cylinder`
--
ALTER TABLE `cylinder`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fit`
--
ALTER TABLE `fit`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guestuser`
--
ALTER TABLE `guestuser`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lensebrand`
--
ALTER TABLE `lensebrand`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lensecolor`
--
ALTER TABLE `lensecolor`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lensepackages`
--
ALTER TABLE `lensepackages`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lensetype`
--
ALTER TABLE `lensetype`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lenseuses`
--
ALTER TABLE `lenseuses`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lense_product`
--
ALTER TABLE `lense_product`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nearaddition`
--
ALTER TABLE `nearaddition`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offerimage`
--
ALTER TABLE `offerimage`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shape`
--
ALTER TABLE `shape`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliderimage`
--
ALTER TABLE `sliderimage`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sphere`
--
ALTER TABLE `sphere`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `term_and_condition`
--
ALTER TABLE `term_and_condition`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usercart`
--
ALTER TABLE `usercart`
  MODIFY `pro_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `usercomments`
--
ALTER TABLE `usercomments`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `pro_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
