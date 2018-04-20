-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 07:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epartner`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `C_ID` int(11) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Link` varchar(50) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`C_ID`, `Category`, `Link`, `U_ID`, `Date`) VALUES
(1, 'ADVERTISING', 'Advertising logo.png', 1, '2018-01-16'),
(2, 'OFFICE', 'OFFICE-150x150.png', 1, '2018-01-16'),
(3, 'BEAUTY CULTURE', 'BEAUTY-CULTURE-150x150.png', 1, '2018-01-16'),
(4, 'VEHICLE', 'VEHICLE-150x150.png', 1, '2018-01-16'),
(5, 'FOOD', 'FOOD-150x150.png', 1, '2018-01-16'),
(6, 'MEDIA', 'MEDIA-150x150.png', 1, '2018-01-16'),
(7, 'TRANSPORT', 'TRANSPORT-150x150.png', 1, '2018-01-16'),
(8, 'REPAIR', 'REPAIR-150x150.png', 1, '2018-01-16'),
(9, 'HOTEL', 'HOTEL-150x150.png', 1, '2018-01-16'),
(10, 'TRAVEL', 'TRAVEL-150x150.png', 1, '2018-01-16'),
(11, 'FASHION', 'Fashion-Icon-150x150.png', 1, '2018-01-16'),
(12, 'ENTERTAINMENT', 'ENTERTAINMENT-150x150.png', 1, '2018-01-16'),
(13, 'PHARMACY', 'PHARMACY-150x150.png', 1, '2018-01-16'),
(14, 'COMPUTER', 'COMPUTER-150x150.png', 1, '2018-01-16'),
(15, 'PHONE', 'PHONE-150x150.png', 1, '2018-01-16'),
(16, 'HARDWARE', 'Hardware ICON.png', 1, '2018-01-16'),
(17, 'STATIONERY', 'STATIONERY.png', 1, '2018-01-16'),
(18, 'EDUCATION', 'EDUCATION-150x150.png', 1, '2018-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `categorygeo`
--

CREATE TABLE `categorygeo` (
  `Geo_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `Geo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorygeo`
--

INSERT INTO `categorygeo` (`Geo_ID`, `C_ID`, `Geo`) VALUES
(1, 1, 'https://www.google.com/maps/d/embed?mid=1hLkgq7ORq-2kt5Opx1QSuxfNgd_15qUt&hl=en'),
(2, 15, 'https://www.google.com/maps/d/embed?mid=1e1WxOs1-ZJF2cRC3RM7bO_2Rrdl961X2&hl=en'),
(3, 16, 'https://www.google.com/maps/d/embed?mid=12nYbbd-9fHCvmA_kh-qqyXezKD0GAnpW&hl=en'),
(4, 17, 'https://www.google.com/maps/d/embed?mid=1TwrTsSj-qYExCHrI7T3ghslG-IpsZL_k&hl=en'),
(5, 11, 'https://www.google.com/maps/d/embed?mid=1IE5KFiOgy88XF2Q5RbmwcjRgMH_Cef9b&hl=en'),
(6, 5, 'https://www.google.com/maps/d/embed?mid=1Rjyh2djRKCu0PfUbZXT6WT6NZhotv_-H&hl=en');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client_ID` int(11) NOT NULL,
  `C_Fname` varchar(10) NOT NULL,
  `C_Lname` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `C_Uname` varchar(10) NOT NULL,
  `Status` varchar(7) NOT NULL,
  `TP` int(13) NOT NULL,
  `Chat` int(1) NOT NULL,
  `Added_ID` int(11) NOT NULL,
  `Added_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_ID`, `C_Fname`, `C_Lname`, `Email`, `password`, `C_Uname`, `Status`, `TP`, `Chat`, `Added_ID`, `Added_Date`) VALUES
(1, 'B', 'KRISHAN', 'kishanthan007@gmail.com', '202cb962ac59075b964b07152d234b70', 'krishan', 'Online', 770527652, 0, 1, '2018-01-16'),
(2, 'Colour Mex', 'Studio', 'imthi77@gmail.com', '202cb962ac59075b964b07152d234b70', 'imthi', 'Online', 772060880, 0, 1, '2018-01-16'),
(3, 'Marina', 'International', 'marina_intel@sltnet.lk', '202cb962ac59075b964b07152d234b70', 'marina', 'Online', 777394315, 0, 1, '2018-01-16'),
(4, 'Mount', 'Grinding Mills', 'dilumsumanaweera@gmail.com', '202cb962ac59075b964b07152d234b70', 'dilum', 'Online', 716889419, 0, 1, '2018-01-16'),
(5, 'Sandakada ', 'Andum Madura', 'sadakadanileme@gmail.com', '202cb962ac59075b964b07152d234b70', 'sadakada', 'Online', 776998487, 0, 1, '2018-01-16'),
(6, 'Sign-X Neo', 'Advertising (Pv', 'info@signx.lk', '202cb962ac59075b964b07152d234b70', 'Sign', 'Online', 777430089, 0, 1, '2018-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feed_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `Feed_Name` varchar(25) NOT NULL,
  `Feed_Email` varchar(75) NOT NULL,
  `Feedback` text NOT NULL,
  `Added_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Img_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `Link` text NOT NULL,
  `Added_ID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Img_ID`, `P_ID`, `Link`, `Added_ID`, `Date`) VALUES
(1, 1, 'Best One Tech.jpg', 1, '2018-01-22'),
(2, 1, 'Best one Tech - 11.jpg', 1, '2018-01-22'),
(3, 1, 'Best One Tech - 13.jpg', 1, '2018-01-22'),
(4, 1, 'Best one Tech - 10.jpg', 1, '2018-01-22'),
(5, 1, 'Best one Tech - 4.jpg', 1, '2018-01-22'),
(6, 1, 'Best one Tech - 6.jpg', 1, '2018-01-22'),
(7, 2, 'Colour MEX.jpg', 1, '2018-01-22'),
(8, 2, 'Colour Mex - 2.jpg', 1, '2018-01-22'),
(9, 2, 'Color Mex 3 -.jpg', 1, '2018-01-22'),
(10, 2, 'Colour Mex - 5.jpg', 1, '2018-01-22'),
(11, 2, 'Colour Mex - 6.jpg', 1, '2018-01-22'),
(12, 2, 'Colour Mex 0.jpg', 1, '2018-01-22'),
(13, 2, 'Colour Mex - 1.jpg', 1, '2018-01-22'),
(14, 2, 'Color Mex - 4.jpg', 1, '2018-01-22'),
(15, 3, 'Marina International.jpg', 1, '2018-01-22'),
(16, 3, 'Marina International - 7.jpg', 1, '2018-01-22'),
(17, 3, 'Marina International - 9.jpg', 1, '2018-01-22'),
(18, 3, 'Marina International - 5.jpg', 1, '2018-01-22'),
(19, 3, 'Marina International - 6.jpg', 1, '2018-01-22'),
(20, 3, 'Marina International -1.jpg', 1, '2018-01-22'),
(21, 3, 'Marina International -8.jpg', 1, '2018-01-22'),
(22, 3, 'Marina international - 2.jpg', 1, '2018-01-22'),
(23, 3, 'Marina International - 3.jpg', 1, '2018-01-22'),
(24, 4, 'Mount Grind.jpg', 1, '2018-01-22'),
(25, 4, 'Mount Grinding 5.jpg', 1, '2018-01-22'),
(27, 4, 'Mount Grinding 2.jpg', 1, '2018-01-22'),
(28, 4, 'Mount Grinding 3.jpg', 1, '2018-01-22'),
(29, 4, 'Mount Grinding 6.jpg', 1, '2018-01-22'),
(30, 4, 'Mount Grinding 7.jpg', 1, '2018-01-22'),
(31, 4, 'Mount Grinding 8.jpg', 1, '2018-01-22'),
(32, 4, 'Mount Grinding 9.jpg', 1, '2018-01-22'),
(33, 5, 'Sadakada Nilame.jpg', 1, '2018-01-22'),
(34, 5, 'IMG20180105132101.jpg', 1, '2018-01-22'),
(35, 5, 'Sandakada Nilame - 9.jpg', 1, '2018-01-22'),
(36, 5, 'Sandakada Nilame - 6.jpg', 1, '2018-01-22'),
(37, 5, 'Sandakada Nilame - 10.jpg', 1, '2018-01-22'),
(38, 5, 'Sandakada Nilame - 15.jpg', 1, '2018-01-22'),
(39, 5, 'Sandakada Nilame - 16.jpg', 1, '2018-01-22'),
(40, 7, 'Sadakada Nilame.jpg', 1, '2018-01-22'),
(41, 7, 'Sandakada Nilame - 6.jpg', 1, '2018-01-22'),
(42, 7, 'IMG20180105132101.jpg', 1, '2018-01-22'),
(43, 7, 'Sandakada Nilame - 16.jpg', 1, '2018-01-22'),
(44, 7, 'Sandakada Nilame - 15.jpg', 1, '2018-01-22'),
(45, 7, 'Sandakada Nilame 17.jpg', 1, '2018-01-22'),
(46, 6, 'Sadakada Nilame.jpg', 1, '2018-01-22'),
(47, 6, 'Sandakada Nilame - 1.jpg', 1, '2018-01-22'),
(48, 6, 'Sandakada Nilame - 6.jpg', 1, '2018-01-22'),
(49, 6, 'IMG20180105132101.jpg', 1, '2018-01-22'),
(50, 6, 'Sandakada Nilame - 15.jpg', 1, '2018-01-22'),
(51, 6, 'Sandakada Nilame - 9.jpg', 1, '2018-01-22'),
(52, 8, 'Sign X.jpg', 1, '2018-01-22'),
(53, 8, 'Sign X neon - 6.jpg', 1, '2018-01-22'),
(54, 8, 'Sign X neon - 4.jpg', 1, '2018-01-22'),
(55, 8, 'Sign X Neon - 2.jpg', 1, '2018-01-22'),
(56, 8, 'Sign X Neon - 1.jpg', 1, '2018-01-22'),
(57, 8, 'Sign X neon - 7.jpg', 1, '2018-01-22'),
(58, 8, 'Sign X neon - 12.jpg', 1, '2018-01-22'),
(59, 8, 'Sign X neon - 11.jpg', 1, '2018-01-22'),
(62, 8, 'Sign X neon - 6.jpg', 6, '2018-01-23'),
(63, 8, 'Sign X neon - 4.jpg', 6, '2018-01-23'),
(65, 8, 'Sign X neon - 12.jpg', 6, '2018-01-23'),
(66, 8, 'Sign X neon - 7.jpg', 6, '2018-01-23'),
(68, 8, 'Sign X neon - 6.jpg', 6, '2018-01-23'),
(69, 8, 'Sign X neon - 7.jpg', 1, '2018-01-23'),
(70, 8, 'Sign X neon - 11.jpg', 1, '2018-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` int(11) NOT NULL,
  `Package_Name` varchar(10) NOT NULL,
  `Added_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `Package_Name`, `Added_ID`) VALUES
(1, 'Advance', 1),
(2, 'Elite', 1),
(3, 'Basic', 1),
(4, 'Entry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `P_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `Client` int(11) NOT NULL,
  `Package_ID` int(11) NOT NULL,
  `Post_Name` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Moto` varchar(75) NOT NULL,
  `Des` text NOT NULL,
  `Geo` text NOT NULL,
  `Opening` time NOT NULL,
  `Closing` time NOT NULL,
  `Opening1` time NOT NULL,
  `Closing1` time NOT NULL,
  `Opening_Day` int(1) NOT NULL,
  `Closing_Day` int(1) NOT NULL,
  `Opening_day1` int(1) NOT NULL,
  `Closing_day2` int(1) NOT NULL,
  `web` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Post_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`P_ID`, `C_ID`, `Client`, `Package_ID`, `Post_Name`, `City`, `Moto`, `Des`, `Geo`, `Opening`, `Closing`, `Opening1`, `Closing1`, `Opening_Day`, `Closing_Day`, `Opening_day1`, `Closing_day2`, `web`, `phone`, `U_ID`, `Post_Date`) VALUES
(1, 15, 1, 3, 'Best One Tech', 'COLOMBO', 'Oppo , Samsung, Iphone, Vivo, HTC', '<strong>Best One Tech</strong> is a Mobile Phone, Accessories and mobile solutions company. The company is one of the leading mobile phones solution established in Jampettah, Sri Lanka. We provide high quality pre-used and brand new mobile phones available in the market. Our store offers all kind of Mobile Accessories and Mobile Software and Hardware solution. We are in par with International Standards in providing you with the best service for our customer.\r\n<br><br>\r\n<strong>email â€“ kishanthan007@gmail.com</strong>\r\n<br>\r\n<strong>Contact Number â€“ 0770527652</strong>', 'https://www.google.com/maps/d/embed?mid=1e1WxOs1-ZJF2cRC3RM7bO_2Rrdl961X2&hl=en', '09:00:00', '21:00:00', '10:00:00', '20:00:00', 1, 5, 6, 7, '', '0770527652', 1, '2018-01-22'),
(2, 16, 2, 3, 'Colour Mexx Studio', 'MOUNT LAVINIA', '', '<strong>Email  </strong>:- imthi77@gmail.com\r\n<br><br>\r\n<strong>Address </strong>: â€“ No.1, old quarty rd, mount lavania\r\n<br><br>\r\n<strong>Phone Numbers </strong>\r\n:- 0772 060 880 | 0714177011 | 0112727500', 'https://www.google.com/maps/d/embed?mid=12nYbbd-9fHCvmA_kh-qqyXezKD0GAnpW&hl=en', '09:00:00', '21:00:00', '10:00:00', '20:00:00', 1, 5, 6, 7, '', '0112727500', 1, '2018-01-22'),
(3, 17, 3, 3, 'Marina International', 'COLOMBO', 'All kinds of school & office items', 'Dealers in paper & stationery, Specialist in computer ribbon, cartridge, photocopy tonners, polymer & normal rubber stamps, All kinds of school & office items.\r\n<br><br>\r\n<strong>Email </strong>:- marina_intel@sltnet.lk\r\n<br>\r\n<strong>Address </strong>:- No.1116/5, Maliban plaza, Maliban st, col-11\r\n<br>\r\n<strong>Phone Numbers</strong> :- 0112 320 574 | 0777 394 315', 'https://www.google.com/maps/d/embed?mid=1TwrTsSj-qYExCHrI7T3ghslG-IpsZL_k&hl=en', '09:00:00', '21:00:00', '10:00:00', '20:00:00', 1, 5, 6, 7, '', '0112320574', 1, '2018-01-22'),
(4, 5, 4, 3, 'Mount Grinding Mills', 'MOUNT LAVINIA', '', '<h2>Mount Grinding Mills</h2><br>\r\nMount Grinding Started in the year 2001. We have been here in the Grinding Market for the Past 17 Years.\r\n<br><br>\r\nWe are specialist for supply & grinding of all kinds of spices, we / Dry rice, Green Gram, Kurakkan, Ulundu, Coffee, Dhal , etc.\r\n<br><br>\r\n<strong>We have product such as</strong>\r\n<br>\r\n* Chili Powder   <br>                                * Chili Pieces\r\n<br>\r\n* Curry Powder  <br>                              * Roasted Curry\r\n<br>\r\n* Pepper Powder <br>                           * Turmeric Powder\r\n<br>\r\n* Curry Powder   <br>                             * Fish Curry Powder\r\n<br>\r\n* Jaffna Curry Powder     <br>              * Coriander Powder\r\n<br>\r\n* Maldive Fish Pieces     <br>                * Black Curry Powder\r\n<br>\r\n* Cumin Powder          <br>                    * Fennel  Powder\r\n<br>\r\n* Mustard Powder     <br>                     * Fenugreek Powder\r\n<br>\r\n* Cinnamon Powder    <br>                  * Biryani  Masala\r\n<br>\r\n* Garam  Masala        <br>                    * Roasted Chili  Powder\r\n<br>\r\n* Wet Rice Flour           <br>                   * Roasted rice flour\r\n<br>\r\n* Dry rice flour           <br>                      * Gram Flour\r\n<br>\r\n* Green gram flour    <br>                     * Barley Powder\r\n<br>\r\n* Whole Chili              <br>                        * Butter milk Chili\r\n<br>\r\n* Coffee Powder         <br>                    * Biscut Powder\r\n<br>\r\n* Those flour            <br>                         * Chili Paste\r\n<br>\r\n* Gamboge Powder    <br>                   * Tamarind\r\n<br>\r\n* Kurakkan Flour      <br>                        * Orid Flour\r\n<br><br>\r\n<strong>Email </strong>:- dilumsumanaweera@gmail.com\r\n<br>\r\n<strong>Address </strong>:- No. 507, Galle road, Mount Lavinia <br>\r\n<strong>Phone Numbers </strong> :- 0115 013 641 | 0716889419 | 0778 937 397 <br>', 'https://www.google.com/maps/d/embed?mid=1Rjyh2djRKCu0PfUbZXT6WT6NZhotv_-H&hl=en', '09:00:00', '18:00:00', '00:00:00', '00:00:00', 1, 6, 0, 0, '', '0115013641', 1, '2018-01-22'),
(5, 11, 5, 3, 'Sandakada Nilame Andum Madura', 'MOUNT LAVINIA', '', '\"Paramparika Mul Andum Kalawe Nuthana Peraliya â€œSandakada Nilame Andum Maduraâ€\r\n<br><br>\r\nWhen it comes to Sri Lankan weddings, Kandyan style wedding gives a majestic impression to the ceremony. Nowadays Nilame Anduma is a very popular dress of the Sri Lankan grooms and foreign grooms as well. Nilame Anduma (Nilame Dress) is known as an Udarata Mul Anduma. Nilame Anduma is a traditional dress for the groom in a Kandyan style wedding. Nilame Anduma consists of an attractive crown and a jacket with lots of ornaments such as knife, Peras Ring, and the necklace etc.\r\n<br><br>\r\nSandakada Nilame Andum Madura is a Nilame Andum provider in Mount Lavinia, Sri Lanka. Deshabandu Kalarupalavanya Visharada Mervin Priyadharshana is the owner of Sandakada Nilame Adum Madura. Mervin Priyadharshana has great experience over 12 years in the field. He always respects the Sinhala tradition.\r\n<br><br>\r\nSandakada Nilame Andum Madura has a vast collection of Nilame Andum with different colours and designs. We are using high quality cloth materials and other things for make Nilame Andum like beads, stones, gold threads, etc. We can design grooms jacket harmonize with the outfit of the retinue and the bride. Customers can select from its large stock of traditional suits.\r\n<br><br>\r\nThere is a proper way to wear the Nilame Anduma so you will need expert help with it. Mervin Priyadharshana and his trained staff provide you all assistance to wear Nilame Andum while maintaining the traditions and customs. With his immense experience helps you to make your wedding day beautiful.\r\n<br><br>\r\nDraping 36 yards long Thuppottiya around the waist is a difficult job. This is where the need of an expert who could drape the cloth in the right way. The final look attached with comfort and the groomâ€™s final look is very important. We will ensure our service provide on time with the fullest satisfaction of our customers.\r\n<br><br>\r\n<strong>Address </strong> No. 90/B/1/1, Galle rd, mount lavinia\r\n<strong>Email </strong>sadakadanileme@gmail.com\r\n<strong>Phone Numbers</strong>0776 998 487 | 071 5 614 274', 'https://www.google.com/maps/d/embed?mid=1IE5KFiOgy88XF2Q5RbmwcjRgMH_Cef9b&hl=en', '09:00:00', '21:00:00', '10:00:00', '20:00:00', 1, 5, 6, 7, 'www.sandakadamadura.com', '0776998487', 1, '2018-01-22'),
(6, 11, 5, 3, 'SANDAKADA NILAME ANDUM MADURA', 'MATHUGAMA', '', '\"Paramparika Mul Andum Kalawe Nuthana Peraliya â€œSandakada Nilame Andum Maduraâ€\r\n<br><br>\r\nWhen it comes to Sri Lankan weddings, Kandyan style wedding gives a majestic impression to the ceremony. Nowadays Nilame Anduma is a very popular dress of the Sri Lankan grooms and foreign grooms as well. Nilame Anduma (Nilame Dress) is known as an Udarata Mul Anduma. Nilame Anduma is a traditional dress for the groom in a Kandyan style wedding. Nilame Anduma consists of an attractive crown and a jacket with lots of ornaments such as knife, Peras Ring, and the necklace etc.\r\n<br><br>\r\nSandakada Nilame Andum Madura is a Nilame Andum provider in Mount Lavinia, Sri Lanka. Deshabandu Kalarupalavanya Visharada Mervin Priyadharshana is the owner of Sandakada Nilame Adum Madura. Mervin Priyadharshana has great experience over 12 years in the field. He always respects the Sinhala tradition.\r\n<br><br>\r\nSandakada Nilame Andum Madura has a vast collection of Nilame Andum with different colours and designs. We are using high quality cloth materials and other things for make Nilame Andum like beads, stones, gold threads, etc. We can design grooms jacket harmonize with the outfit of the retinue and the bride. Customers can select from its large stock of traditional suits.\r\n<br><br>\r\nThere is a proper way to wear the Nilame Anduma so you will need expert help with it. Mervin Priyadharshana and his trained staff provide you all assistance to wear Nilame Andum while maintaining the traditions and customs. With his immense experience helps you to make your wedding day beautiful.\r\n<br><br>\r\nDraping 36 yards long Thuppottiya around the waist is a difficult job. This is where the need of an expert who could drape the cloth in the right way. The final look attached with comfort and the groomâ€™s final look is very important. We will ensure our service provide on time with the fullest satisfaction of our customers.\r\n<br><br>\r\n<strong>Address </strong> No. 90/B/1/1, Galle rd, mount lavinia\r\n<strong>Email </strong>sadakadanileme@gmail.com\r\n<strong>Phone Numbers</strong>0776 998 487 | 071 5 614 274', 'https://www.google.com/maps/d/embed?mid=1IE5KFiOgy88XF2Q5RbmwcjRgMH_Cef9b&hl=en', '09:00:00', '21:00:00', '10:00:00', '20:00:00', 1, 5, 6, 7, 'www.sandakadamadura.com', '0776998487', 1, '2018-01-22'),
(7, 11, 5, 3, 'SANDAKADA NILAME ANDUM MADURA', 'AWISSAWELLA', '', '\"Paramparika Mul Andum Kalawe Nuthana Peraliya â€œSandakada Nilame Andum Maduraâ€\r\n<br><br>\r\nWhen it comes to Sri Lankan weddings, Kandyan style wedding gives a majestic impression to the ceremony. Nowadays Nilame Anduma is a very popular dress of the Sri Lankan grooms and foreign grooms as well. Nilame Anduma (Nilame Dress) is known as an Udarata Mul Anduma. Nilame Anduma is a traditional dress for the groom in a Kandyan style wedding. Nilame Anduma consists of an attractive crown and a jacket with lots of ornaments such as knife, Peras Ring, and the necklace etc.\r\n<br><br>\r\nSandakada Nilame Andum Madura is a Nilame Andum provider in Mount Lavinia, Sri Lanka. Deshabandu Kalarupalavanya Visharada Mervin Priyadharshana is the owner of Sandakada Nilame Adum Madura. Mervin Priyadharshana has great experience over 12 years in the field. He always respects the Sinhala tradition.\r\n<br><br>\r\nSandakada Nilame Andum Madura has a vast collection of Nilame Andum with different colours and designs. We are using high quality cloth materials and other things for make Nilame Andum like beads, stones, gold threads, etc. We can design grooms jacket harmonize with the outfit of the retinue and the bride. Customers can select from its large stock of traditional suits.\r\n<br><br>\r\nThere is a proper way to wear the Nilame Anduma so you will need expert help with it. Mervin Priyadharshana and his trained staff provide you all assistance to wear Nilame Andum while maintaining the traditions and customs. With his immense experience helps you to make your wedding day beautiful.\r\n<br><br>\r\nDraping 36 yards long Thuppottiya around the waist is a difficult job. This is where the need of an expert who could drape the cloth in the right way. The final look attached with comfort and the groomâ€™s final look is very important. We will ensure our service provide on time with the fullest satisfaction of our customers.\r\n<br><br>\r\n<strong>Address </strong> No. 90/B/1/1, Galle rd, mount lavinia\r\n<strong>Email </strong>sadakadanileme@gmail.com\r\n<strong>Phone Numbers</strong>0776 998 487 | 071 5 614 274', 'https://www.google.com/maps/d/embed?mid=1IE5KFiOgy88XF2Q5RbmwcjRgMH_Cef9b&hl=en', '09:00:00', '21:00:00', '10:00:00', '20:00:00', 1, 5, 6, 7, 'www.sandakadamadura.com', '0776998487', 1, '2018-01-22'),
(8, 1, 6, 3, 'Sign-X Neon Advertising (Pvt) Ltd', 'KOTTAWA', '', 'Sign-X Neon Advertising (Pvt) Ltd Become a large diversified advertising solution provider in Sri Lanka occupying a leading position.\r\n<br><br>\r\nProvide creatively refreshing, outstanding, ingeniously clever and effective solutions that will include creative approach, optimal price and mutually beneficial relationships with clients.\r\n<br>\r\n<strong>MANUFACTURES OF ALL KIND OF</strong><br>\r\n* SIGN AGE<br>\r\n* NEON<br>\r\n* LED<br>\r\n* PLASTIC<br>\r\n* CLADDING<br>\r\n* FLEX<br>\r\n* HOARDING<br>\r\n* ST/STEEL<br>\r\n* BRASS & ALUMINIUM<br>\r\n* EMBOSSED LETTERS, INTERIOR SIGN<br>\r\n<strong>Postal Address</strong>\r\n :-  Sign-X Neon Group of Company  No. 456/6  High level Road Kottawa Sri Lanka\r\n<br>\r\n<strong>Telphone </strong>\r\n:-  011 2 172 121 | 0777 430 089\r\n<br>\r\n<strong>E mail</strong>\r\n :- info@signx.lk', 'https://www.google.com/maps/d/embed?mid=1hLkgq7ORq-2kt5Opx1QSuxfNgd_15qUt&hl=en', '08:00:00', '17:00:00', '00:00:00', '00:00:00', 1, 7, 0, 0, 'www.signx.lk', '0112172121', 1, '2018-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(11) NOT NULL,
  `F_Name` varchar(10) NOT NULL,
  `L_Name` varchar(15) NOT NULL,
  `U_Name` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `TP` int(12) NOT NULL,
  `Status` varchar(7) NOT NULL,
  `Role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `F_Name`, `L_Name`, `U_Name`, `Email`, `password`, `TP`, `Status`, `Role`) VALUES
(1, 'sky', 'digital', 'abc', 'skydigitalweb@gmail.com', '202cb962ac59075b964b07152d234b70', 28222585, 'Online', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `U_ID` (`U_ID`);

--
-- Indexes for table `categorygeo`
--
ALTER TABLE `categorygeo`
  ADD PRIMARY KEY (`Geo_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feed_ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Img_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `Sc_ID` (`C_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categorygeo`
--
ALTER TABLE `categorygeo`
  MODIFY `Geo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feed_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Img_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Package_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
