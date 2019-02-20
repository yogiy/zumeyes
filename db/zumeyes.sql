-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 04:24 AM
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
-- Database: `zum_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(225) NOT NULL,
  `description` varchar(65000) NOT NULL,
  `page_title` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `page_title`, `status`) VALUES
(5, '<h1 style=\"margin: 20px 0px 10px; padding: 0px 0px 30px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 2.5em; line-height: 1.1; font-family: robotobold; vertical-align: baseline; text-align: center;\"><br></h1><div class=\"aboutContent clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><div class=\"col-sm-6 contentBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font: inherit; vertical-align: baseline; float: left; width: 585px;\"><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.8em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">Our Story</h2><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">Founded in 2018, By an ex-Microsoft \'techie\' with no money but truckloads of relentless passion to make a difference in this world, Lenskart is India\'s fastest growing eyewear business today.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">With a rapidly growing business reaching out to over 1,00,000 customers a month via a unique combination of a strong online business as www.zumeyes.com, uniquely designed physical stores, as well as a first of its kind \'home eye check up\' service, Zumeyes is revolutionizing the eyewear industry in india.</p></div><div class=\"col-sm-6 imgBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font: inherit; vertical-align: baseline; float: left; width: 585px;\"><div class=\"img clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><img src=\"http://[::1]/CI_Z/assets/images/blog_2.jpg\" alt=\"Image\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; height: auto; max-width: 100%;\"></div></div></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><div class=\"col-sm-6 imgBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font: inherit; vertical-align: baseline; float: left; width: 585px;\"></div></div></div>', '', '1'),
(6, '<div><br></div><div><section class=\"aboutSection clearfix\" style=\"margin: 0px; padding: 40px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><div class=\"container\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 15px; border: 0px; font: inherit; vertical-align: baseline; width: 1200px;\"><div class=\"aboutContent clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"col-sm-6 imgBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font: inherit; vertical-align: baseline; float: left; width: 585px;\"><div class=\"img clearfix\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><img src=\"http://[::1]/CI_Z/assets/images/blog_1.jpg\" alt=\"Image\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; height: auto; max-width: 100%;\"></div></div><div class=\"col-sm-6 contentBox clearfix\" style=\"margin: 0px; padding: 40px 20px; border: 0px; font: inherit; vertical-align: baseline; float: left; width: 585px;\"><h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.8em; line-height: 1.1; font-family: robotomedium; vertical-align: baseline;\">Our Vision</h2><ul class=\"list clearfix\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 20px 30px 0px; border: 0px; font: inherit; vertical-align: baseline; list-style: square;\"><li style=\"margin: 0px; padding: 5px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.1em; line-height: inherit; font-family: inherit; vertical-align: baseline;\">15 million people in India are blind, which is 50% of the blind people of the world.</li><li style=\"margin: 0px; padding: 5px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.1em; line-height: inherit; font-family: inherit; vertical-align: baseline;\">75% of these are cases of avoidable blindness. Thanks to the country\'s acute shortage of optometrists and donated eyes for the treatment of corneal blindness.</li><li style=\"margin: 0px; padding: 5px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.1em; line-height: inherit; font-family: inherit; vertical-align: baseline;\">153 million people in the country need reading glasses but do not have access to them.</li><li style=\"margin: 0px; padding: 5px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.1em; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Our country needs 40,000 optometrists. Unfortunately we only have 8,000.</li></ul><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.063em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">Zumeyes\'s aim is to help drop this number marginally in the coming years, which can be achieved by providing high quality eyewear to millions of Indians at affordable prices, giving free eye check ups at home and by extending our services to the remote corners of India.</p></div></div></div></div></section></div>', '', '1');

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
(1, 'admin@gmail.com', 'admin@12', 'Admin', 'logo.png', '422535646723', 'Owner', 'Add', 1);

-- --------------------------------------------------------

--
-- Table structure for table `axis`
--

CREATE TABLE `axis` (
  `id` int(225) NOT NULL,
  `axis` varchar(225) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axis`
--

INSERT INTO `axis` (`id`, `axis`, `status`) VALUES
(1, '1', 1),
(2, '1.25', 1),
(3, '1.50', 1),
(4, '1.75', 1);

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
(1, 'offer3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(225) NOT NULL,
  `title` varchar(500) NOT NULL,
  `status` int(10) NOT NULL,
  `shortdescription` varchar(500) NOT NULL,
  `username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `description`, `date`, `title`, `status`, `shortdescription`, `username`) VALUES
(5, 'blog1.jpg', '<section class=\"blogDetailsSection clearfix\" style=\"margin: 0px; padding: 40px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><div class=\"container\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 15px; border: 0px; font: inherit; vertical-align: baseline; width: 1200px;\"><div class=\"blogContent clearfix\" style=\"margin: 10px 0px 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.125em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">We’re definitely enjoying summer but after another great school year with Pupils Project, we’re looking forward to the next one. Pupils Project has come a long way but first, to bring you up to speed</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.125em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">A few years ago, as part of our Buy a Pair, Give a Pair program, we created Pupils Project, our program with a number of organizations and local government agencies in New York City and Baltimore that provides free vision screenings, eye exams, and glasses to kids who need them the most. The American Optometric Association estimates that 80% of childhood learning occurs visually so it’s crucial to address vision problems as early as possible.</p><p style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.125em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\">Pupils Project works to eliminate any financial and logistical hurdles that get in the way of obtaining vision care. Our partners administer vision screenings and eye exams in the children’s classrooms (where vision issues are often first spotted by teachers) and we provide the glasses, which each student handpicks in trunk show setup at school. For many kids, this is their first pair of glasses.</p><p imgbar=\"\" clearfix\"=\"\" style=\"margin: 15px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.125em; line-height: 27px; font-family: robotolight; vertical-align: baseline;\"><img src=\"http://[::1]/CI_Z/assets/images/blog_1_1.jpg\" alt=\"Image 1\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; height: auto; max-width: 100%;\"></p></div><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">In 2016, we kicked off Vision for Baltimore, a three-year partnership with the City of Baltimore, Baltimore City Health Department, and Vision to Learn, that reaches all students in 150 elementary and middle public schools throughout the city. (This part is especially cool: Johns Hopkins University is conducting a longitudinal study to better understand the correlation between the intervention of vision treatment and reading scores and the benefits of ensuring access to glasses for children in urban settings. Johns Hopkins will publish their findings with the hopes of influencing public policy at a federal level, and to ensure that glasses are within reach of any child who needs them.)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Since starting Pupils Project, we’ve seen firsthand how big this issue is to solve. But in the 2018–2019 school year, Pupils Project will be in over 250 (!) schools in New York City and we estimate that over 30,000 (!) pairs of glasses will be given out in both New York City and Baltimore. Onward!</p></div></section><section class=\"commentSection clearfix\" style=\"margin: 0px; padding: 20px 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><div class=\"container\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 15px; border: 0px; font: inherit; vertical-align: baseline; width: 1200px;\"></div></section>', 'Feb 04 2019 04:47', '5 WAYS TO ACCESORIZE WITH EYEGLASSES', 1, 'If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you.', 'Admin'),
(6, 'blog1.jpg', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14.882px; letter-spacing: 1.2px;\">If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you</span><br></p>', 'Feb 04 2019 04:34', 'SPREADTHEVISION - THE GIFT OF CLEAR EYESIGHT', 1, 'If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you.', 'Admin'),
(7, 'blog1.jpg', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14.882px; letter-spacing: 1.2px;\">If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you.</span><br></p>', 'Feb 04 2019 04:34', 'BEST WAYS TO ACCESORIZE WITH EYEGLASSES', 1, 'If you are a woman, matching is more than likely necessary to you. If you are a businessman, matching is more than likely important to you.', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(20) NOT NULL,
  `blog_title` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `date` varchar(225) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `blog_title`, `name`, `email`, `comment`, `date`, `status`) VALUES
(1, '5 WAYS TO ACCESORIZE WITH EYEGLASSES', 'Gajendra', 'bchg@hf.com', 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'Feb 08 2019', '1'),
(2, '5 WAYS TO ACCESORIZE WITH EYEGLASSES', 'e fj', 'bchg@hf.com', 'kjwndf', 'Feb 08 2019', '1'),
(3, '5 WAYS TO ACCESORIZE WITH EYEGLASSES', 'test', 'bchg@hf.com', 'test', 'Feb 08 2019', '1'),
(4, '5 WAYS TO ACCESORIZE WITH EYEGLASSES', 'rootleonard', 'bchg@hf.com', 'Test', 'Feb 10 2019', '1');

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
-- Table structure for table `cardinfo`
--

CREATE TABLE `cardinfo` (
  `id` int(225) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `card1` int(225) NOT NULL,
  `card2` int(225) NOT NULL,
  `card3` int(225) NOT NULL,
  `card4` int(225) NOT NULL,
  `cardtype` varchar(225) NOT NULL,
  `exp_month` varchar(225) NOT NULL,
  `exp_year` varchar(225) NOT NULL,
  `name_oncard` varchar(225) NOT NULL,
  `status` int(10) NOT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardinfo`
--

INSERT INTO `cardinfo` (`id`, `user_email`, `card1`, `card2`, `card3`, `card4`, `cardtype`, `exp_month`, `exp_year`, `name_oncard`, `status`, `date`) VALUES
(1, 'admin@gmail.com', 4111, 1111, 1111, 1111, 'Visa', '2', '2020', 'sfdsfsdf', 0, 'Feb 14 201');

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
  `id` int(225) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cylinder`
--

INSERT INTO `cylinder` (`cylinder`, `id`, `status`) VALUES
('1', 1, 1),
('1.25', 2, 1),
('1.50', 3, 1),
('1.75', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(225) NOT NULL,
  `discount` varchar(225) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `discount`, `status`) VALUES
(1, '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE `facebook` (
  `id` int(225) NOT NULL,
  `facebook_page` varchar(225) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `facebook_page`, `status`) VALUES
(1, 'http://facebook.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(225) NOT NULL,
  `description` varchar(65000) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `description`, `status`) VALUES
(2, '<div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: I’m not sure about the size and fit of the frames.</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong>&nbsp;At Zumeyes, we offer glasses in 3 sizes – small, medium, and large. Click the ‘Frame Size’ link at the bottom of the page to know your size. ~80-90% of our customers find a medium size frame to be the best fit.</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: What if I buy glasses &amp; they don’t fit me? What if the lenses aren’t right ?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong>&nbsp;Don’t worry! It is our responsibility to get the perfect pair of glasses. In the rare circumstance that your glasses don’t fit properly, we make it extremely easy for you to exchange or return the frames, with lenses. If you face any difficulty, just write to us on support@zumeyes.com We have a 14 day, no-questions asked return policy and provide instant money back or store credit on return. *Please refer to T&amp;C of Return Policy for the same https://www.zumeyes.com/terms-and-conditions</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: Will the glasses have my prescription?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong>&nbsp;You can buy glasses fitted with your prescription or even the frames standalone. We custom-make glasses with single vision, bifocal, or progressive prescriptions across all powers. Our glasses are ~50% cheaper than market average, since we bypass intermediaries – and best of all, we charge the same price, regardless of your power!</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: Will Zumeyes be able to make my complex power?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong>&nbsp;At Zumeyes, we stock all powers – simple and complex. The unique robotic technology used in our lab ensures that the most complex powers are fitted perfectly, ensuring 100% error-free glasses. Our 10 lakh+ customers can vouch for the precision with which we make the eyeglasses!</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: Where do I submit my eye power details?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong>&nbsp;You can submit your power details after you complete your purchase. We offer multiple options to provide your prescription to us – upload a picture, enter it online, email us (power@zumeyes.com) or write to us on support@zumeyes.com</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: I don’t have my prescription handy. Is it important to give it right away?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong>&nbsp;It’s ok if you don’t have your prescription handy while placing the order. Simply place the order for the frame and provide your power using the links provided in the SMS and email that we send you, post order completion. It’s that simple!</p></div><div class=\"bar clearfix\" style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: inherit; font-family: robotomedium; vertical-align: baseline; display: block;\">Ques: I don’t know what my prescription is. Can Zumeyes help?</span><p style=\"margin: 10px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 1.25em; line-height: 27px; font-family: robotolight; vertical-align: baseline; color: rgb(88, 88, 88);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Ans:</strong>&nbsp;Zumeyes offers OPTO, a Home Eye Check-up service to help you ascertain your eye power. Select the ’Home Eye Check-up ‘option after check-out or on our homepage, pick a time that is convenient and our trained optometrists will be there to assist you! [Note: Available in metro cities only]</p></div>', 0);

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
(3, 'NARRO', 1),
(4, 'MEDIUM', 1),
(5, 'WIDE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `googleplus`
--

CREATE TABLE `googleplus` (
  `id` int(10) NOT NULL,
  `googleplus_page` varchar(225) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googleplus`
--

INSERT INTO `googleplus` (`id`, `googleplus_page`, `status`) VALUES
(1, 'PLus', 1);

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
(2, 'Single Vision', 'None Anti Glare', '100', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd </li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(3, 'Single Vision', 'None Anti Glare2', '79', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(4, 'Single Vision', 'None Anti Glare3', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(5, 'Single Vision', 'None Anti Glare4', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd </li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(6, 'Single Vision', 'None Anti Glare5', '70', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(7, 'Bifocal', 'None Anti Glare', '85', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(8, 'Bifocal', 'None Anti Glare3', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(10, 'Frame Only', '', '', '', 1),
(11, 'Zero Power', 'None Anti Glare', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1),
(12, 'Zero Power', 'None Anti Glare5', '90', '<ul><li>ashjfgashf hdas</li><li>hjdashjfsahj hjsgfas</li><li>ahsdvhgasd&nbsp;</li><li>ashjdgash had as</li><li>shdahsd jhsagdas</li><li>hjsgdshf</li></ul>', 1);

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
  `nearaddition` varchar(225) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nearaddition`
--

INSERT INTO `nearaddition` (`id`, `nearaddition`, `status`) VALUES
(1, '1', 1),
(2, '1.25', 1),
(3, '1.50', 1),
(4, '1.75', 1);

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
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(225) NOT NULL,
  `offer` varchar(225) NOT NULL,
  `status` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `offer`, `status`) VALUES
(1, '5', 1),
(2, '10', 1);

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
(1, 'offer1.jpg', 1),
(3, 'offer2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_status_type`
--

CREATE TABLE `order_status_type` (
  `id` int(11) NOT NULL,
  `status_type` varchar(225) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status_type`
--

INSERT INTO `order_status_type` (`id`, `status_type`, `status`) VALUES
(1, 'On Hold', 1),
(2, 'Pending', 1),
(3, 'Closed', 1),
(4, 'Open', 1);

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
(1, 'Single Vision', 1),
(2, 'Bifocal', 1),
(3, 'Frame Only', 1),
(4, 'Zero Power', 1);

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
  `frame_style` varchar(225) NOT NULL,
  `tax` varchar(225) NOT NULL,
  `prescription_id` varchar(225) NOT NULL,
  `discount` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `sub_cat_id`, `sub_sub_catid`, `product_name`, `pro_image`, `featuredimage`, `pro_description`, `regular_price`, `sale_price`, `offer`, `frame_width`, `weight`, `quantity`, `brand`, `purpose`, `color`, `fit`, `material`, `shape`, `uses`, `status`, `lense_type`, `lense_width`, `bridge`, `temple_length`, `lense_height`, `water_content`, `uses_duration`, `packaging`, `features`, `tags`, `frame_style`, `tax`, `prescription_id`, `discount`) VALUES
(73, 13, 9, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.53 PM (1).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.53 PM (1).jpeg|WhatsApp Image 2018-02-13 at 12.43.53 PM (2).jpeg|WhatsApp Image 2018-02-13 at 12.43.53 PM.jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (1).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '400', '20', '', '20gm', 10, 'Oakley|Ray-Ban', 'WORK |FASION', 'Black|TORTOISE |SILVER|GREEN ', 'NARROW', 'ACETATE|MIXED MATERIAL', 'SQUARE |ROUND|CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(74, 13, 9, 0, 'Weikely', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (3).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (4).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (5).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '400', '360', '10', '', '12gm', 5, 'Ray-Ban', 'FASION', 'GREY|TWO-TONE|BROWN', 'MEDIUM|WIDE', 'METAL', 'ROUND|CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(75, 13, 9, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (8).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (9).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '800', '640', '20', '', '20gm', 20, 'Ray-Ban|Tory Burch', 'WORK |SPORT', 'TORTOISE |GREY|BLUE|TWO-TONE|BROWN|PINK', 'NARROW|MEDIUM|WIDE', 'ACETATE|METAL', 'SQUARE |RECTANGLE ', '', 1, '', '', '', '', '35mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(76, 14, 12, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (13).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (12).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (13).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (14).jpeg|WhatsApp Image 2018-0', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '400', '20', '', '12gm', 5, 'Ray-Ban|Tory Burch', 'WORK |FASION', 'Black|TWO-TONE|BROWN|GOLD', 'MEDIUM|WIDE', 'METAL|MIXED MATERIAL', 'SQUARE |RECTANGLE ', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(77, 13, 10, 0, 'SuccessTest', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (14).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (12).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (13).jpeg|WhatsApp Image 2018-0', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '450', '10', '', '12gm', 5, 'Ray-Ban|Tory Burch', 'FASION|SPORT', 'TORTOISE |BLUE|BROWN', 'NARROW|MEDIUM', 'METAL|MIXED MATERIAL', 'RECTANGLE |ROUND', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(78, 13, 10, 0, 'New Product', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (21).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (18).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (19).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (20).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (21).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '400', '360', '10', '', '25gm', 10, 'Oakley|Tory Burch', 'FASION', 'BROWN|GOLD', 'MEDIUM|WIDE', 'MIXED MATERIAL', 'RECTANGLE |CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(79, 14, 11, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (15).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (15).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (16).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (17).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '425', '15', '', '20gm', 10, 'Oakley|Ray-Ban', 'FASION|SPORT', 'Black|TORTOISE |BLUE|GOLD', 'NARROW|MEDIUM|WIDE', 'ACETATE|METAL', 'RECTANGLE |ROUND', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(80, 14, 11, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (5).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (5).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (6).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (8).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '123', '92.25', '25', '', '20gm', 10, 'Ray-Ban', 'WORK |FASION|SPORT', 'BLUE|BROWN|GOLD|GREEN ', 'NARROW|MEDIUM|WIDE', 'ACETATE|METAL|MIXED MATERIAL', 'RECTANGLE ', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(81, 14, 12, 0, 'Test', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (20).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (17).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (18).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (19).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (20).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '800', '720', '10', '', '20gm', 5, 'Oakley|Tory Burch', 'WORK |FASION', 'GREY|PURPLE|TWO-TONE|BROWN', 'NARROW|MEDIUM', 'METAL|MIXED MATERIAL', 'RECTANGLE |ROUND|CAT-EYE', '', 1, '', '', '', '', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(82, 14, 11, 0, 'Chamberlain', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (3).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (4).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '400', '20', '', '20gm', 10, 'Oakley|Ray-Ban', 'FASION', 'TORTOISE |BLUE|TWO-TONE|BROWN', 'MEDIUM|WIDE', 'ACETATE|METAL', 'SQUARE |ROUND', '', 1, '', '', '', '', '35mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(83, 14, 11, 3, 'Success', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (9).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (11).jpeg|WhatsApp Image 2018-02-13 at 12.43.54 PM (12).jpeg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '375', '25', '134mm', '12gm', 10, 'Ray-Ban', 'FASION', 'TORTOISE |BLUE', 'MEDIUM', 'ACETATE', 'SQUARE |RECTANGLE ', '', 1, '', '34mm', '20mm', '142mm', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(84, 15, 28, 0, 'Chamberlain', 'lens_4.png', 'lens_4.png|lens_7.png|lens_Img1.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '700', '630', '10', '', '12gm', 10, 'Oakley|Ray-Ban', '', 'TORTOISE |BROWN|GREEN ', '', 'ACETATE', '', 'Monthly', 1, 'WEEKLY|TWO WEEKS', '', '', '', '', '50%', '', '6', '', '', '', '5', '', ''),
(85, 15, 28, 0, 'Wilkie', 'lens_6.png', 'lens_Img2.jpg|lens_Img3.jpg|lens_Img4.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '600', '480', '20', '', '20gm', 5, 'Ray-Ban', '', 'TORTOISE |BLUE|GREEN |PINK', '', 'METAL|MIXED MATERIAL', '', 'Monthly', 1, 'TWO WEEKS', '', '', '', '', '50%', '', '6', '', '', '', '5', '', ''),
(86, 15, 29, 0, 'Chamberlain', 'lens_Img4.jpg', 'lens_1.jpg|lens_1.png|lens_Img3.jpg|lens_Img4.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '450', '10', '', '20gm', 5, 'Oakley|Ray-Ban', '', 'TORTOISE |BLUE|TWO-TONE', '', 'METAL', '', 'Monthly', 1, 'DAILY|WEEKLY', '', '', '', '', '50%', '', '6', '', '', '', '5', '', ''),
(87, 15, 30, 0, 'Wilkie', 'lenses_accessories.jpg', 'lens_6.png|lens_7.png|lenses_accessories.jpg', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '500', '450', '10', '', '5', 10, 'Ray-Ban|Tory Burch', '', 'TORTOISE |SILVER|PURPLE|GOLD', '', 'ACETATE', '', 'Monthly', 1, 'WEEKLY|TWO WEEKS', '', '', '', '', '50%', '', '6', '', '', '', '5', '', ''),
(88, 13, 9, 0, 'Chamberlain', 'frame_3.png', 'frame_2.png|frame_3.png|frame_5.png', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.</p>', '700', '630', '10', '134mm', '20gm', 10, 'Oakley|Ray-Ban', 'FASION|SPORT', 'Black|TORTOISE |SILVER', 'NARROW|MEDIUM|WIDE', 'METAL', 'SQUARE |RECTANGLE ', '', 1, '', '44mm', '20mm', '142mm', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '5', '', ''),
(90, 15, 28, 0, 'Chamberlain', 'lens_6.png', 'lens_2.png|lens_3.png|lens_6.png', '<p>Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.<br></p>', '700', '665', '5', '', '10gm', 10, 'Oakley|Ray-Ban', '', 'TORTOISE |BROWN', '', 'MIXED MATERIAL', '', 'WEEKLY', 1, 'DAILY|WEEKLY', '', '', '', '', '50%', 'Monthly', '6', '', '', '', '5', '', ''),
(91, 14, 12, 0, 'Chamberlain', 'frame_4.png', 'frame_2.png|frame_3.png|frame_4.png', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16.8px; letter-spacing: 1.3px; text-align: center; background-color: rgb(247, 247, 247);\">Bausch &amp; Lomb Soflens 59 (6 Lenses/box) delivers the ultimate clarity in vision with a very comfortable experience throughout the day. These lenses are made from a protein resistant material - Hilafilcon B polymer, which leads to the unique combination of visual acuity, excellent performance and comfort.</span><br></p>', '700', '665', '5', '134mm', '20gm', 5, 'Oakley|Ray-Ban|Tory Burch', 'WORK|FASION', 'TORTOISE |SILVER|BLUE|PURPLE', 'MEDIUM|WIDE', 'METAL|MIXED MATERIAL', 'SQUARE|RECTANGLE |CAT-EYE', '', 1, '', '44mm', '20mm', '142mm', '38mm', '', '', '', 'Spring Hinges , Custom engraving', 'Neutral Glasses', 'Full Rim', '0', '2|3', '');

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
(3, 'WORK', 1),
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
(2, 'SQUARE', 1),
(3, 'RECTANGLE ', 1),
(4, 'ROUND', 1),
(5, 'CAT-EYE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

CREATE TABLE `sliderimage` (
  `id` int(225) NOT NULL,
  `sliderimage` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `sliderimage`, `status`) VALUES
(1, 'banner1.jpg', 1),
(2, 'banner2.jpg', 1),
(3, 'banner1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sphere`
--

CREATE TABLE `sphere` (
  `id` int(225) NOT NULL,
  `sphere` varchar(225) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sphere`
--

INSERT INTO `sphere` (`id`, `sphere`, `status`) VALUES
(1, '1', 1),
(2, '1.25', 1),
(3, '1.50', 1),
(4, '1.75', 1),
(5, '2', 1);

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
(9, '13', 'SHOP MEN', 'men_eyeglasses7.jpg', 1),
(10, '13', 'SHOP WOMEN', 'women_eyeglasses.jpg', 1),
(11, '14', 'SHOP MEN', 'men_sunglasses.jpg', 1),
(12, '14', 'SHOP WOMEN', 'women_sunglasses.jpg', 1),
(28, '15', 'CONTACT LENSES', 'lenses_img.jpg', 1),
(31, '15', 'ACCESSORIES', 'lenses_accessories3.jpg', 1);

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
(1, '15', '31', 'lensSolutions_Img51.jpg', 'Lens Solutions', 1),
(2, '15', '31', 'lensCases_Img3.jpg', 'LensCases', 1),
(3, '14', '11', 'sunglass_menSub.jpg', 'Sunglasses', 1),
(4, '14', '12', 'sunglass_womenSub.jpg', 'Sunglasses', 1),
(5, '14', '11', 'sunglassPresc_menSub.jpg', 'Prescription Sunglasses', 1),
(6, '14', '12', 'sunglassPresc_womenSub.jpg', 'Prescription Sunglasses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taxslab`
--

CREATE TABLE `taxslab` (
  `id` int(225) NOT NULL,
  `tax_slab` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxslab`
--

INSERT INTO `taxslab` (`id`, `tax_slab`, `status`) VALUES
(2, '5', '1'),
(3, '10', '1'),
(4, '15', '1'),
(5, '20', '1');

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
-- Table structure for table `twitter`
--

CREATE TABLE `twitter` (
  `id` int(11) NOT NULL,
  `twitter_page` varchar(225) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twitter`
--

INSERT INTO `twitter` (`id`, `twitter_page`, `status`) VALUES
(1, 'twitter', 1);

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
(1, 'admin@gmail.com', 'Admin@123', 1, 'Gajendra', 'yadav', '8755024556', 'Male', '15/08/1993', ''),
(21, 'ravi@gmail.com', 'Nadeem@1234', 1, 'Ravi', 'Kumar', '', '', '', ''),
(22, 'yogesh21india@gmail.com', 'Yogesh@12', 1, 'yogesh', 'yadav', '', '', '', ''),
(23, 'gajendray9@gmail.com', 'Admin@1234', 1, 'szx', 'asdfs', '', '', '', ''),
(27, 'gajendray100@gmail.com', 'Admin@123', 1, 'Gajendra', 'yadav', '2134567890', 'Male', '15/08/1993', '');

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `user_email` varchar(225) NOT NULL,
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
  `usertype` varchar(100) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`id`, `email`, `user_email`, `name`, `phone`, `address`, `pincode`, `locality`, `city`, `state`, `landmark`, `alternatephone`, `addresstype`, `usertype`, `status`) VALUES
(3, 'admin@gmail.com', 'admin@gmail.com', 'Gajendra', '04225356467', 'B Block 205, Ground Floor, Gali No.1West Dawarka', '245101', 'Hapur', 'Hapur', 'Uttar Pradesh', 'Uttar Pradesh', '04225356467', 'Home (All day delivery)', '', '1'),
(4, 'ravi@gmail.com', 'admin@gmail.com', 'Ravi', '9875642153', 'laxmi nagar', '110095', 'metro station', 'delhi', 'delhi', 'pilor no 43', '7854697123', 'Home (All day delivery)', '', '1'),
(7, 'gajendray9@gmail.com', '', 'Gajendra', '4225356467', 'njhyfhnjgkihkih', '245101', 'Hapur', 'Hapur', 'Uttar Pradesh', 'Uttar Pradesh', '4225356467', 'Home (All day delivery)', '', '1'),
(9, 'gajendray100@gmail.com', '', 'Gajendra', '8755024556', 'njhyfhnjgkihkih', '245101', 'Hapur', 'Hapur', 'Uttar Pradesh', 'Uttar Pradesh', '4225356467', 'Home (All day delivery)', '', '1'),
(10, 'rajatsharma@gmail.com', '', 'Rajat', '4225356467', 'njhyfhnjgkihkih', '245101', 'Hapur', 'Hapur', 'Uttar Pradesh', 'Uttar Pradesh', '4225356467', 'Home (All day delivery)', 'guest', '1');

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
  `leftlnearAddi` varchar(225) NOT NULL,
  `rightlnearAddi` varchar(225) NOT NULL,
  `qty` int(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `tax` varchar(225) NOT NULL,
  `discount` varchar(225) NOT NULL,
  `order_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercart`
--

INSERT INTO `usercart` (`pro_id`, `id`, `email`, `name`, `price`, `pro_image`, `prescription_type`, `lense_name`, `lense_price`, `lsphere`, `rsphere`, `lcylinder`, `rcylinder`, `laxis`, `raxis`, `nearpdsphere`, `pdsphere`, `description`, `prescription_name`, `rbox`, `lbox`, `leftlnearAddi`, `rightlnearAddi`, `qty`, `color`, `tax`, `discount`, `order_status`) VALUES
(113, 82, 'ravi@gmail.com', 'Chamberlain', '400', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4, '', '', '', 1),
(143, 91, 'gajendray9@gmail.com', 'Chamberlain', '665', 'frame_4.png', 'Single Vision', 'None Anti Glare4', '90', '1.25', '1.25', '1.50', '1.25', '1.25', '1.50', '', '', '', 'dfch', '', '', '', '', 1, 'PURPLE', '0', '', 1),
(144, 75, 'admin@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 'PINK', '5', '', 0),
(146, 83, 'gajendray9@gmail.com', 'Success', '375', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (10).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'BLUE', '5', '', 1),
(147, 73, 'gajendray9@gmail.com', 'Chamberlain', '400', 'WhatsApp Image 2018-02-13 at 12.43.53 PM (1).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'TORTOISE ', '5', '', 1),
(148, 73, 'admin@gmail.com', 'Chamberlain', '400', 'WhatsApp Image 2018-02-13 at 12.43.53 PM (1).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'GREEN ', '5', '', 0),
(149, 75, 'admin@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'Single Vision', 'None Anti Glare2', '79', '1.25', '1.25', '1.25', '1.50', '1', '1', '', '', '', 'Test', '', '', '', '', 1, 'PINK', '5', '', 1),
(150, 75, 'gajendray100@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'PINK', '5', '', 0),
(151, 75, 'gajendray100@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'TWO-TONE', '5', '', 0),
(152, 74, 'gajendray100@gmail.com', 'Weikely', '360', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (2).jpeg', 'Frame Only', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 'TWO-TONE', '5', '', 0),
(153, 75, 'gajendray100@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'Single Vision', 'None Anti Glare4', '90', '1.75', '1', '1.75', '1.25', '1.50', '1.25', '', '', '', 'Test', '', '', '', '', 1, 'PINK', '5', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercomments_onproduct`
--

CREATE TABLE `usercomments_onproduct` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `pro_id` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(225) NOT NULL,
  `order_id` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `address_type` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `altphone` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `locality` varchar(225) NOT NULL,
  `landmark` varchar(225) NOT NULL,
  `pincode` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `cart_id` varchar(225) NOT NULL,
  `txnid` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `deliverydate` varchar(100) NOT NULL,
  `order_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `order_id`, `email`, `address`, `address_type`, `phone`, `altphone`, `city`, `state`, `locality`, `landmark`, `pincode`, `username`, `status`, `cart_id`, `txnid`, `amount`, `deliverydate`, `order_date`) VALUES
(7, '402-20190219-615B', 'gajendray100@gmail.com', 'njhyfhnjgkihkih', '', '8755024556', '4225356467', 'Hapur', 'Uttar Pradesh', 'Hapur', 'Uttar Pradesh', '245101', 'Gajendra', 0, '150', '169549bd0f1f788d39bc', '672.00', 'Feb 26 2019', 'Feb 19 2019'),
(8, '402-20190220-615B', 'gajendray100@gmail.com', 'njhyfhnjgkihkih', '', '8755024556', '4225356467', 'Hapur', 'Uttar Pradesh', 'Hapur', 'Uttar Pradesh', '245101', 'Gajendra', 0, '150', '169549bd0f1f788d39bc', '672.00', 'Feb 26 2019', 'Feb 19 2019'),
(22, '402-20190219-7E24', 'gajendray100@gmail.com', 'njhyfhnjgkihkih', 'Home (All day delivery)', '8755024556', '4225356467', 'Hapur', 'Uttar Pradesh', 'Hapur', 'Uttar Pradesh', '245101', 'Gajendra', 0, '152', 'a77f23d4cd2160e0340d', '756.00', 'Feb 26 2019', 'Feb 19 2019');

-- --------------------------------------------------------

--
-- Table structure for table `userreview`
--

CREATE TABLE `userreview` (
  `id` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `pro_id` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreview`
--

INSERT INTO `userreview` (`id`, `name`, `email`, `title`, `pro_id`, `message`, `date`, `status`) VALUES
(1, 'Test', 'bchg@hf.com', 'Test', '75', 'Test', 'Feb 07 2019', 0),
(2, 'Gajendra', 'bchg@hf.com', 'Test', '75', 'Test', 'Feb 07 2019', 0),
(3, 'Gajendra', 'bchg@hf.com', 'Test', '75', 'Twes1', 'Feb 07 2019', 0);

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
(15, 90, 'yogesh21india@gmail.com', 'Chamberlain', '665', 'lens_6.png', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(16, 90, 'yogesh21india@gmail.com', 'Chamberlain', '665', 'lens_6.png', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(17, 75, 'admin@gmail.com', 'Chamberlain', '640', 'WhatsApp Image 2018-02-13 at 12.43.54 PM (7).jpeg', 'prescription_type', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

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
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
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
-- Indexes for table `cardinfo`
--
ALTER TABLE `cardinfo`
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
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook`
--
ALTER TABLE `facebook`
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
-- Indexes for table `googleplus`
--
ALTER TABLE `googleplus`
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
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerimage`
--
ALTER TABLE `offerimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status_type`
--
ALTER TABLE `order_status_type`
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
-- Indexes for table `taxslab`
--
ALTER TABLE `taxslab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_and_condition`
--
ALTER TABLE `term_and_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter`
--
ALTER TABLE `twitter`
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
-- Indexes for table `usercomments_onproduct`
--
ALTER TABLE `usercomments_onproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreview`
--
ALTER TABLE `userreview`
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
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `cardinfo`
--
ALTER TABLE `cardinfo`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facebook`
--
ALTER TABLE `facebook`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fit`
--
ALTER TABLE `fit`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `googleplus`
--
ALTER TABLE `googleplus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offerimage`
--
ALTER TABLE `offerimage`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_status_type`
--
ALTER TABLE `order_status_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

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
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `taxslab`
--
ALTER TABLE `taxslab`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `term_and_condition`
--
ALTER TABLE `term_and_condition`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `twitter`
--
ALTER TABLE `twitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usercart`
--
ALTER TABLE `usercart`
  MODIFY `pro_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `usercomments_onproduct`
--
ALTER TABLE `usercomments_onproduct`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userreview`
--
ALTER TABLE `userreview`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `pro_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
