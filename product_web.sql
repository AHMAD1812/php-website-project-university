-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 25, 2021 at 04:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Ahmad Imran', 'ahmadimran1812@gmail.com', 'it is a very good website'),
(2, 'faizan', 'faizan@gmail.com', 'very well responded website'),
(3, 'Ahmad Imran', 'ahmadimran1812@gmail.com', 'sasaas'),
(6, 'huzaifa', 'huzaifa@gmail.com', 'huwaei mobile information is correct'),
(7, 'Ahmad Imran', 'ahmadimran1812@gmail.com', 'working '),
(8, 'faizan', 'faizan@gmail.com', 'search is not working'),
(9, 'asad', 'asad@gmail.com', 'very good responsive website');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `filter` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `table_type` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`Id`, `Name`, `filter`, `Image`, `table_type`, `company`) VALUES
(1, 'HP 15s DU2040TX', 'filter-hp', 'Laptop\\HP\\HP 15s DU2040TX\\HP 15s DU2040TX(1).jpg', 'laptop', 'hp'),
(2, 'Macbook pro', 'filter-apple', 'Laptop\\Macbook\\Macbook pro\\macbook pro.jpg', 'laptop', 'apple'),
(3, 'Hp probook 450 g7', 'filter-hp', 'Laptop\\HP\\hp probook 450 g7\\hp probook 450 g7(f).jpg', 'laptop', 'hp'),
(4, 'DELL XPS1', 'filter-dell', 'Laptop\\DELL\\Dell xps\\DELL XPS1.jpg', 'laptop', 'dell'),
(5, 'Samsung_galaxy_book_flex', 'filter-sumsung', 'Laptop\\samsung\\galaxybook_flex_15\\samsung_galaxy_book_flex.jpg', 'laptop', 'sumsung'),
(6, 'Macbook air 13', 'filter-apple', 'Laptop\\Macbook\\macbook air 13\\macbook air 13(b).jpg', 'laptop', 'apple'),
(7, 'Dell inspiron 5502', 'filter-dell', 'Laptop\\DELL\\dell inspiron 5502\\dell inspiron 5502 (b).jpg', 'laptop', 'dell'),
(8, 'Hp pavilion g7', 'filter-hp', 'Laptop\\HP\\Hp pavilion g7\\hp pavilion g7.webp', 'laptop', 'hp'),
(9, 'Dell latitude e6430', 'filter-dell', 'Laptop\\DELL\\dell latitude e6430\\dell latitude e6430.jpg', 'laptop', 'dell'),
(10, 'Samsung notebook 9pro', 'filter-sumsung', 'Laptop\\samsung\\Samsung notebook 9pro\\samsung-notebook-9-pro.webp', 'laptop', 'sumsung'),
(11, 'Samsung Odyssey Z Gaming Notebook', 'filter-sumsung', 'Laptop\\samsung\\Samsung Odyssey Z Gaming Notebook\\Samsung-Notebook-Odyssey-Z.jpg', 'laptop', 'sumsung'),
(12, 'Macbook air m1', 'filter-apple', 'Laptop\\Macbook\\macbook-air-m1\\macbook-air-m1.jpg', 'laptop', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_d`
--

CREATE TABLE `laptop_d` (
  `p_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `ram1` varchar(100) NOT NULL,
  `ram2` varchar(100) NOT NULL,
  `ram3` varchar(100) NOT NULL,
  `rom1` varchar(100) NOT NULL,
  `rom2` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `buy` varchar(100) NOT NULL,
  `d1` varchar(100) NOT NULL,
  `d2` varchar(100) NOT NULL,
  `d3` varchar(100) NOT NULL,
  `d4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop_d`
--

INSERT INTO `laptop_d` (`p_id`, `title`, `ram1`, `ram2`, `ram3`, `rom1`, `rom2`, `img1`, `img2`, `img3`, `buy`, `d1`, `d2`, `d3`, `d4`) VALUES
(1, 'HP 15-Du2040TX i7-1065G7-8GB, 15.6\" LED FHD,,Nvidia MX330 2GB DOS.', '4 GB', '6 GB', '8 GB', '180 GB SSD', '500 GB HDD', 'Laptop/hp151.jpeg', 'Laptop/hp152.jpeg', 'Laptop/hp153.png', 'https://rocket.pk/hp-15-du2040tx-i7-1065g7-8gb-1tb-15-6-led-fhd-nvidia-mx330-2gb-dos-natural-silver-', '10th Generation Intel® Core™ processor', 'NVIDIA® GeForce® MX 330', '1920 x 1020 (Full HD) 15.7\"', 'Intel UHD Graphics 620'),
(2, 'MacBook Pro - Space Gray2.3GHz 8‑core 9th‑generation Intel Core i9 processor', '4 GB', '6 GB', '8 GB', '240 GB SSD', '500 GB HDD', 'Laptop/macpro1.jpeg', 'Laptop/macpro2.jpeg', 'Laptop/macpro3.jpeg', 'https://www.apple.com/shop/buy-mac/macbook-pro/16-inch-space-gray-2.3ghz-8-core-processor-1tb', '9th‑generation Intel Core i9 processor,', 'AMD Radeon Pro 5500M ', '16-inch Retina display with True Tone Four Thunderbolt 3 ports', ' Apple Silicon chip will feature 12 cores'),
(3, 'HP Probook 450 G7 15.6\" Core i7 10th Gen, 15.6\"', '4 GB', '6 GB', '8 GB', '240 GB SSD', '500 GB HDD', 'Laptop/hp4501.jpeg', 'Laptop/hp4502.jpeg', 'Laptop/hp4503.png', 'https://alfamall.com/hp-probook-450-g7-15-6-core-i7-10th-gen-8gb-1tb-laptop-with-backpack-official-w', 'Intel Core i7-10510U 10th Gen', 'Intel UHD Graphics 620', '15.6in 1920 x 1080 Display', '12.5hour(s) Battery Life'),
(4, 'New XPS 15 Touch Laptop 10th Generation Intel® Core™ i7-10750H', '6 GB', '16 GB', '32 GB', '128GB SSD', '1TB HDD', 'Laptop/dellxp1.jpeg', 'Laptop/dellxp2.jpeg', 'Laptop/dellxp3.jpeg', 'dell.com/en-us/shop/dell-laptops/xps-15-laptop/spd/xps-15-9500-laptop', '10th Generation Intel® Core™ i7-10750H', 'NVIDIA® GeForce® GTX 1650 Ti 4GB GDDR6', '1920 x 1020 (Full HD) 15.6\"', 'Windows 10 Home English'),
(5, 'Samsung Galaxy Book Flex 5G with 11th-gen Intel Core processors ', '8 GB', '16 GB', '32 GB', '280 GB SSD', '1 TB HDD', 'Laptop/book1.jpeg', 'Laptop/book2.jpeg', 'Laptop/book3.jpeg', 'https://www.samsung.com/us/computing/galaxy-books/galaxy-book-flex/galaxy-book-flex-13-3-qled-512gb-', ' 11th Gen Intel Core processor with integrated Intel Iris X graphics', ' Sub 6GHz 5G and Wi-Fi 6 for connectivity and a fingerprint sensor for security', 'QLED Full HD (1920 x 1080px) 15.7\"', 'Intel UHD Graphics 620'),
(6, 'Apple M1 Chip with 8-Core CPU and 8-Core GPU', '8 GB', '16 GB', '32 GB', '128GB SSD', '1TB HDD', 'Laptop/macair1.jpeg', 'Laptop/macair2.jpeg', 'Laptop/macair3.jpeg', 'https://www.tejar.pk/apple-macbook-air-13-inch', 'Apple M1 chip with 8‑core CPU, 8‑core GPU, and 16‑core Neural Engine', 'Retina display with True Tone', '1920 x 1020 (Full HD) 15.7\"', 'Force Touch trackpadTwo Thunderbolt / USB 4 ports'),
(7, 'DELL Inspiron 5502 DDR4-SDRAM Noteboo', '4 GB', '6 GB', '8 GB', '128 GB SSD', '512 GB HDD', 'Laptop/dellins1.jpeg', 'Laptop/dellins2.jpeg', 'Laptop/dellins3.jpeg', 'https://laptopmart.pk/laptops/dell-inspiron-15-5502-ci7-nvidia/', '1th gen Intel® Core™ i5 processor', 'Nvidia MX330 2GB Graphics', '1920 x 1080 pixels 15.7\"', 'USB 3.2 Gen 1 (3.1 Gen 1) Type-A ports'),
(8, 'HP Pavilion g7-2240us 17.3in. Notebook/Laptop - Sparkling black ', '4 GB', '8 GB', '32GB', '256GB SSD', '1TB HDD', 'Laptop/hpg71.jpeg', 'Laptop/hpg72.jpeg', 'Laptop/hpg73.jpeg', 'https://rocket.pk/hp-15-du2040tx-i7-1065g7-8gb-1tb-15-6-led-fhd-nvidia-mx330-2gb-dos-natural-silver-', '(750GB, Intel Core i3 processor 2nd Gen., 2.4GHz ', 'AMD Radeon HD 6540G2', '1920 x 1020 (Full HD) 15.7\"', 'Intel UHD Graphics 620'),
(9, 'DELL LATITUDE E6430, CORE I5 3RD GEN,', '4 GB', '6 GB', '8 GB', '240 GB SSD', '512 GB HDD', 'Laptop/delllat1.jpeg', 'Laptop/delllat2.jpeg', 'Laptop/delllat3.jpeg', 'https://homeshopping.pk/products/Dell-Latitude-E6430-i5-3320M-4GB-320GB-Widescreen-Price-In-Pakistan', 'Intel Core i5 processor 3320m 3rd Generation ', '1366x768 HD Display', '1920 x 1020 (Full HD) 15.7\"', 'Graphics Coprocessor Intel HD Graphics 4000'),
(10, 'Samsung Notebook 9 Pro 13.3”', '8 GB', '16 GB', '32GB', '256GB SSD', '1TB HDD', 'Laptop/sumnote.jpeg', 'Laptop/sumnote2.jpeg', 'Laptop/sumnote3.jpeg', 'https://www.tejar.pk/samsung-notebook-9-pro-13-3', 'Intel Core i7 Processor', 'OS: Windows 10 Home', '13.3\", Type: FHD LED, Resolution: 1920 x 1080', 'Intel UHD Graphics 620'),
(11, 'Samsung launches Odyssey Z , first gaming laptop with Nvidia Max-P, 6-cores of i7', '8 GB', '16 GB', '32 GB', '256 GB SSD', '1 TB HDD', 'Laptop/sumz.jpeg', 'Laptop/sumz2.jpeg', 'Laptop/sumz3.jpeg', 'https://rocket.pk/hp-15-du2040tx-i7-1065g7-8gb-1tb-15-6-led-fhd-nvidia-mx330-2gb-dos-natural-silver-', ' 6-core eighth-generation  Core  i9 Intel CPU ', ' NVIDIA GeForce GTX 1060 Max-P GPU.', '1920 x 1020 (Full HD) 15.7\"', 'All your keys pop with the LED-backlit keyboard. Curved keycaps offer precision and comfort'),
(12, 'Apple. Macbook Air (2020) with 8-core CPU with 4 perform­ance cores and 4 efficiency cores', '6 GB', '12 GB', '24 GB', '512 GB SSD', '1 TB HDD', 'Laptop/macm1.jpeg', 'Laptop/macm2.jpeg', 'Laptop/macm3.jpeg', 'https://myshop.pk/apple-macbook-air-2020-13-m1-chip-512gb-with-touch-id-pakistan.html', 'M1 chip, 8 Core CPU, 8 Core GPU', 'Battery and Power Up to 15 hours wireless web', '2560 x 1600 (Full HD) 15.7\"', 'Intel UHD Graphics 620');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_review`
--

CREATE TABLE `laptop_review` (
  `p_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(200) NOT NULL,
  `value` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop_review`
--

INSERT INTO `laptop_review` (`p_id`, `customer_name`, `email`, `review`, `value`, `subject`) VALUES
(2, 'asad', 'asad23@gmaial.com', 'most unrated laptop', 4, 'very good laptop');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_specification`
--

CREATE TABLE `laptop_specification` (
  `p_id` int(11) NOT NULL,
  `generation` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `rom` varchar(100) NOT NULL,
  `graphics memory` varchar(100) NOT NULL,
  `backlight` varchar(100) NOT NULL,
  `screen size` varchar(100) NOT NULL,
  `screen surface` varchar(100) NOT NULL,
  `screen resolution` varchar(100) NOT NULL,
  `touch screen` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop_specification`
--

INSERT INTO `laptop_specification` (`p_id`, `generation`, `processor`, `ram`, `rom`, `graphics memory`, `backlight`, `screen size`, `screen surface`, `screen resolution`, `touch screen`, `camera`, `price`) VALUES
(1, '10th Generation', '10th Generation Core i3-1005G1 DualCore Processor (2 Cores - 4 Threads', '04 GB', '01 TeraByte HDD', 'Intel® UHD Graphics', 'LED', '15.6', 'diagonal HD SVA BrightView micro-edge WLED-backlit, 220 nits, 45% NTSC', '1366 X 768', 'No', 'Yes', 'Rs. 75,900'),
(2, '08th Generation', '08th Generation Intel Core i5 QuadCore Processor', '08 GB', '512 GB SSD', 'Intel Iris Plus Graphics 645', 'LED', '13.3‑inch', ' (diagonal) LED-backlit display with IPS technology; 2560‑by‑1600 native resolution at 227 pixels pe', '2560‑by‑1600', 'No', '720p FaceTime HD camera', 'Rs. 240,900'),
(3, '11th Generation ', 'Intel Core i5 1135G7 QuadCore (8-MB SmartCache)', '04 GB', '512 GB SSD', 'Intel Iris Xe Graphics', 'LED', '39.62 cm (15.6 in) ', 'diagonal FHD UWVA eDP anti-glare, narrow bezel bent, 250 nits, 45% NTSC ', '(1920 x 1080)', 'No', '720p HD camera', 'Rs. 122,500'),
(4, '10th Generation', '10th Generation Core i7-10510U QuadCore Processor (4 Cores - 8 Threads)', '08 GB', '01 TeraByte HDD', 'Intel UHD 620', 'LED', '15.6-inch ', 'FHD (1920 x 1080) IPS LED Backlight Touch Display', '1920 x 1080', 'Yes', 'Yes', 'Rs. 150,000'),
(5, '10th Generation', '10th Generation Core i3-1005G1 DualCore Processor (2 Cores - 4 Threads', '16GB DDR4', '01 TeraByte SSD', 'Nvidia GeForce MX250', 'LED', '15.6-inch ', 'Full HD (1,920 x 1,080) QLED, 60Hz', '1,920 x 1,080', 'No', 'Yes', 'PKR 317,870'),
(6, 'No Generation', ' 2.3GHz Intel Core i7-1065G7 (4-core, 8MB cache, up to 3.9GHz)', '04 GB', '01 TeraByte HDD', 'Intel® UHD Graphics', 'LED', '15.6', 'diagonal HD SVA BrightView micro-edge WLED-backlit, 220 nits, 45% NTSC', '1366 X 768', 'No', '720p FaceTime HD camera', 'Rs.176,999'),
(7, '11th Generation ', 'Intel Core i7-1165G7 Tiger Lake (12 MB L3 Cache)', '08 GB', '256 GB SSD', 'Intel(R) Iris(R) Xe Graphics with shared graphics memory', 'LED', '15.6 inches', 'Full HD 1080p Anti-glare LED Backlight Non-Touch Narrow Border WVA Display', '1920 x 1080', 'No', '720p at 30 fps HD camera', 'Rs. 131,400'),
(8, '2nd Generation', 'Intel Core i3 2350M / 2.3 GHz', '6 GB', '640 GB HDD', 'Intel HD Graphics 3000', 'LED', '15.6', 'diagonal HD SVA BrightView micro-edge WLED-backlit', '1366 X 768', 'No', 'Yes', ' Rs 20,000'),
(9, '3rd Generation', 'Intel Core i5 3210M', '04 GB', '320GB HDD', 'Intel® UHD Graphics', 'LED', '14.00-inch', ' HD SVA BrightView micro-edge WLED-backlit, 220 nits', '1366 x 768 pixels', 'No', 'Yes', 'Rs 28,000'),
(10, '8th Generation', 'Intel Core i7 8th Gen 1.8 / 4.6 Ghz Processor', '04 GB', '01 TeraByte HDD', 'Intel UHD Graphics 620 ', 'LED', '13.3 inches', '13.3” FHD LED Display Active Pen', ' 1920 x 1080', 'No', 'Yes', 'Rs. 144,999'),
(11, '9th Generation', 'Intel Core i7-9850H HexaCore Processor (6 Cores, 12 Threads)', '16 GB', '512 GB PCIe NVMe™ SSD', 'NVIDIA Quadro T1000 With 4 GB dedicated GDDR5 video memory', 'LED', '	15.6 inches', 'diagonal HD SVA BrightView micro-edge WLED-backlit, 220 nits, 45% NTSC', '1366 X 768', 'No', 'Yes', 'Rs. 230,000'),
(12, 'No Generation', 'Apple M1 Chip', '08 GB Unified Memory', '256 GB SSD', 'Intel', 'LED', '13.3 inches', '\" Retina Display With True Tone & IPS Technology', '2560-by-1600', 'No', '720p FaceTime HD camera', 'Rs. 176,999\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `filter` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `table_type` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`Id`, `Name`, `filter`, `image`, `table_type`, `company`) VALUES
(1, 'Huawei NOVA I7I', 'filter-huawei', 'Mobile\\Huawei7i.jpg', 'mobile', 'huawei'),
(2, 'SAMSUNG A71 WHITE', 'filter-sumsung', 'Mobile\\SAMSUNG A71 WHITE.jpg', 'mobile', 'sumsung'),
(3, 'Apple Iphone X', 'filter-apple', 'Mobile\\apple-iphone-x.jpg', 'mobile', 'apple'),
(4, 'XIAOMI MI 11', 'filter-redmi', 'Mobile\\XIAOMI MI 11.webp', 'mobile', 'redmi'),
(5, 'OPPO A12', 'filter-oppo', 'Mobile\\OPPO A12(BL).jpg', 'mobile', 'oppo'),
(6, 'Huawei Y9a', 'filter-huawei', 'Mobile\\Huaweiy9a.png', 'mobile', 'huawei'),
(7, 'Samsung M51', 'filter-sumsung', 'Mobile\\samsung-galaxy-m51(2color).jpg', 'mobile', 'sumsung'),
(8, 'Iphone 12', 'filter-apple', 'Mobile\\iphone-12.png', 'mobile', 'apple'),
(9, 'Xiaomi poco m3', 'filter-redmi', 'Mobile\\Xiaomi poco m3.webp', 'mobile', 'redmi'),
(10, 'Oppo f17', 'filter-oppo', 'Mobile\\oppo f17-a.jpg', 'mobile', 'oppo'),
(11, 'Huwaei p40 pro', 'filter-huawei', 'Mobile\\Huwaei p40 pro.png', 'mobile', 'huawei'),
(12, 'Samsung S21 Ultra', 'filter-sumsung', 'Mobile\\Samsung S21 Ultra.jpg', 'mobile', 'sumsung'),
(13, 'Apple Iphone XR', 'filter-apple', 'Mobile\\apple-iphone-xr.jpg', 'mobile', 'apple'),
(14, 'Redmi_Note-9-Pro', 'filter-redmi', 'Mobile\\Redmi_Note-9-Pro-Grey_grande.png', 'mobile', 'redmi'),
(15, 'Oppo reno 5', 'filter-oppo', 'Mobile\\renu.png', 'mobile', 'oppo'),
(16, 'Oppo A54', 'filter-oppo', 'Mobile\\download.jpeg', 'mobile', 'oppo');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_d`
--

CREATE TABLE `mobile_d` (
  `p_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `ram1` varchar(100) NOT NULL,
  `ram2` varchar(100) NOT NULL,
  `ram3` varchar(100) NOT NULL,
  `rom1` varchar(100) NOT NULL,
  `rom2` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `buy1` varchar(100) NOT NULL,
  `d1` varchar(100) NOT NULL,
  `d2` varchar(100) NOT NULL,
  `d3` varchar(100) NOT NULL,
  `d4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_d`
--

INSERT INTO `mobile_d` (`p_id`, `title`, `ram1`, `ram2`, `ram3`, `rom1`, `rom2`, `img1`, `img2`, `img3`, `buy1`, `d1`, `d2`, `d3`, `d4`) VALUES
(1, 'Huawei Nova 7i 183g, 8.7mm thickness 6.4\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/nova1.jpg', 'Mobile/nova2e.png', 'Mobile/nova3.png', 'https://shop.huawei.com/my/product/huawei-nova-7i', 'Released 2020, February 14', 'Android 10, EMUI 10, no Google Play Services', 'Kirin 810', '1080x2310 pixels Camera 48MP'),
(3, 'Apple Iphone X 174g, 7.7mm thickness 5.8\"', '3 GB', '4 GB', '5 GB', '64 GB', '256 GB', 'Mobile/x1.jpg', 'Mobile/x2.jpg', 'Mobile/x3.jpg', 'https://www.apple.com/shop/refurbished/iphone/iphone-x', 'Released 2017, November 03', 'iOS 11.1.1, up to iOS 14.4.2', '1125x2436 pixels Camera 12MP', 'Apple A11 Bionic 2716mAh Li-Ion Battery'),
(4, 'Xiaomi Mi 11 234g, 8.4mm thickness 6.81\"', '4 GB', '6 GB', '8 GB', '64 GB', '128GB', 'Mobile/mi111.jpg', 'Mobile/mi112.jpg', 'Mobile/mi113.jpg', 'https://www.telemart.pk/xiaomi-mi-11-lite-6gb-128gb-dual-sim-with-official-warranty-price-in-pakista', 'Released 2021, April 02', 'Android 11, MIUI 12.5', '1440x3200 pixels Camera 50MP', 'Snapdragon 888 5G 5000mAh Li-Po Battery'),
(5, 'Oppo A12 165g, 8.3mm thickness 6.22\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/a121.png', 'Mobile/a122.jpg', 'Mobile/a123.jpg', 'https://www.oppo.com/pk/bookonline/', 'Released 2020, April 20', 'Android 9.0, ColorOS 6.1', '720x1520 pixels Camera 13MP', 'Helio P35 4230mAh Li-Po Battery'),
(6, 'Huawei Y9a 197g, 9mm thickness 6.63\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/y9a1.webp', 'Mobile/y9a2.jpg', 'Mobile/y9a3.jpg', 'https://alfamall.com/huawei-y9a-128gb-8gb-ram-sakura-pink.html', 'Released 2020, September 12', 'Android 10, EMUI 10.1', '1080x2400 pixels Camera 64MP', 'Helio G80 4300mAh Li-Po Battery'),
(7, 'Samsung Galaxy M51 213g, 9.5mm thickness 6.7\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/m51.jpg', 'Mobile/m512.jpg', 'Mobile/m513.jpg', 'https://www.samsung.com/pk/search/?searchvalue=Samsung%20Galaxy%20M51', 'Released 2020, September 11', 'Android 10, up to Android 11, One UI 3.1', '1080x2400 pixels Camera 64MP', 'Snapdragon 730G 7000mAh Li-Po Battery'),
(8, 'Apple Iphone 12 pro 189g, 7.4mm thickness 6.1\"', '4 GB', '6 GB', '8 GB', '128 GB', '256 GB', 'Mobile/i121.jpg', 'Mobile/i122.jpg', 'Mobile/i123.png', 'https://www.apple.com/shop/buy-iphone/iphone-12-pro', 'Released 2020, October 23', 'iOS 14.1, up to iOS 14.4.2', '1170x2532 pixels Camera 12MP', 'Apple A11 Bionic 2716mAh Li-Ion Battery'),
(9, 'Xiamoi Poco m3 198g, 7.7mm thickness 6.53\"', '4 GB', '6 GB', '8 GB', '64 GB', '128GB', 'Mobile/poco1.jpg', 'Mobile/poco2.jpg', 'Mobile/poco3.jpg', 'https://mistore.pk/pages/poco-m3', 'Released 2020, 27 November', 'Android 10.0 OS MIUI 11', '1080 x 2340 Camera 48MP', 'Qualcomm SM6115 Snapdragon 662 4500mAh Li-Po Battery'),
(10, 'Oppo F17 163g, 7.5mm thickness 6.44\"', '4 GB', '6 GB', '8 GB', '64 GB', '128GB', 'Mobile/f171.jpg', 'Mobile/f172.jpeg', 'Mobile/f123.jpg', 'https://www.telemart.pk/oppo-f19-pro-8gb-128gb-dual-sim-with-official-warranty-price-in-pakistan.htm', 'Released 2020, September 24', 'Android 10, ColorOS 7.2', '1080x2400 pixels Camera 16MP', 'Snapdragon 662 4015mAh Li-Po Battery'),
(11, 'Huawei P40 Pro 209g, 9mm thickness 6.58\"', '4 GB', '6 GB', '8 GB', '64 GB', '128GB', 'Mobile/p401.jpg', 'Mobile/p402.png', 'Mobile/p403.jpg', 'https://consumer.huawei.com/en/phones/p4 0/', 'Released 2020, April 07', 'Android 10, EMUI 10.1', '1200x2640 pixels Camera 50MP', 'Kirin 990 5G 4200mAh Li-Po Battery'),
(12, 'Samsung Galaxy S21 Ultra 227g (Sub6), 229g (mmWave), 8.9mm thickness 6.8\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/s211.jpg', 'Mobile/s212.webp', 'Mobile/s213.jpg', 'https://www.telemart.pk/samsung-galaxy-a51-8gb-128gb-price-in-pakistan.html', 'Released 2021, January 29', 'Android 11, One UI 3.1', '1440x3200 pixels Camera 108MP', 'Exynos 2100 5000mAh Li-Ion Battery'),
(13, 'Apple iPhone XR 194g, 8.3mm thickness 6.1\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/xr1.jpg', 'Mobile/xr2.png', 'Mobile/xr3.jpg', 'https://www.apple.com/shop/buy-iphone/iphone-xr', 'Released 2018, October 26', 'iOS 12, up to iOS 14.4.2', '828x1792 pixels Camera 12MP', 'Apple A12 Bionic 2942mAh Li-Ion Battery'),
(14, 'Xiaomi Poco M3 199g, 8.9mm thickness 6.53\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/red91.jpg', 'Mobile/red92.webp', 'Mobile/red93.jpg', 'https://www.telemart.pk/xiaomi-redmi-9-4gb-64gb-price-in-pakistan.html', 'Released 2020, May 12', 'Android 10, MIUI 12', '1080x2340 pixels Camera 48MP', 'Helio G85 5020mAh Li-Po Battery'),
(15, 'Oppo Reno 5 172g or 180g, 7.9mm thickness 6.43\"', '4 GB', '6 GB', '8 GB', '64 GB', '128GB', 'Mobile/reno51.jpg', 'Mobile/reno52.webp', 'Mobile/reno53.jpg', 'https://www.oppo.com/pk/smartphones/series-reno/reno5/', 'Released 2021, January 07', 'Android 11, ColorOS 11.1', '1080x2400 pixels Camera 64MP', 'Snapdragon 765G 5G 4300mAh Li-Po Battery'),
(2, 'Samsung Galaxy A71 179g, 7.7mm thickness 6.7\"', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/a711.webp', 'Mobile/a712.webp', 'Mobile/a713.jpg', 'https://www.samsung.com/pk/smartphones/galaxy-a/galaxy-a71-blue-128gb-sm-a715fzbgpak/buy/', 'Released 2020, January 17', 'Android 10, up to Android 11, One UI 3.1', '1080x2400 pixels Camera 64MP', 'Snapdragon 730 4500mAh Li Ion Battery'),
(16, 'Oppo A54', '4 GB', '6 GB', '8 GB', '64 GB', '128 GB', 'Mobile/nova1.jpg', 'Mobile/mi113.jpg', 'Mobile/reno51.jpg', 'https://www.telemart.pk/mobile-and-tablets.html', 'Released 2020, September 24', 'Android 10, ColorOS 7.2', '(Li-Po Non removable), 4500 mAh', '64 MP');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_review`
--

CREATE TABLE `mobile_review` (
  `p_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(200) NOT NULL,
  `value` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_review`
--

INSERT INTO `mobile_review` (`p_id`, `customer_name`, `email`, `review`, `value`, `subject`) VALUES
(11, 'faizan', 'faizan@gmal.com', 't as hjjj', 5, 'brillank'),
(11, 'farhan', 'farhan@gmal.com', 'it is working for me', 2, 'Web Designer'),
(11, 'fhahana', 'farhan@gmail.com', 'it is as  good as i want', 5, 'most motivational'),
(2, 'huazaifa', 'huazafa@gmail.com', 'very good website', 5, 'awsome'),
(5, 'jameel', 'jameel@gmail.com', 'oppo a 12 is a good phone', 4, 'oppo camera phone'),
(5, 'hassan', 'hassan@gmail.com', 'its camera is outstanding', 5, 'oppo phone working good');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_specification`
--

CREATE TABLE `mobile_specification` (
  `p_id` int(11) NOT NULL,
  `os` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `sim` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `protection` varchar(100) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_specification`
--

INSERT INTO `mobile_specification` (`p_id`, `os`, `weight`, `sim`, `cpu`, `size`, `protection`, `memory`, `camera`, `battery`, `Price`) VALUES
(1, 'Android 10 OS', '183 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (2 x 2.27 GHz Cortex-A76 + 6 x 1.88 GHz Cortex-A55)  ', '6.4 Inches', 'Corning Gorilla Glass', '128GB Built-in ROM, 8GB RAM', 'Quad Camera: 48 MP, f/1.8, 26mm (wide), 1/2.0\", PDAF + 8 MP, f/2.4, (ultrawide) + 2 MP, f/2.4, 27mm ', '(Li-Po Non removable), 4200 mAh', 'RS 41,999'),
(2, 'Android 10 OS', '179 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (2 x 2.2 GHz Kryo 470 Gold + 6 x 1.8 GHz Kryo 470 Silver)', '6.7 Inches', 'Corning Gorilla Glass 37', '128GB Built-in, 8GB RAM', 'Quad Camera: 64 MP, f/1.8, 26mm (wide), 1/1.7\", PDAF + 12 MP, f/2.2, 13mm (ultrawide) + 5 MP, f/2.4,', '(Li-Po Non removable), 4500 mAh', 'Rs: 67,999'),
(3, 'IOS 11', '174 g', 'Single SIM (Nano-SIM)', 'Hexa Core (2 x Monsoon + 4 x Mistral)', '5.8 Inches', 'Scratch-resistant glass', '64GB Built-in, 3GB RAM', 'Dual 12 MP, autofocus, Quad-LED (dual tone) flash', '2716 mAh (Li-Ion Non removable) Talktime: up to 21 hrs', 'Rs: 144,999'),
(4, 'Android 11 OS', '194 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (1 x 2.84 GHz Kryo 680 + 3 x 2.42 GHz Kryo 680 + 4 x 1.80 GHz Kryo 680', '6.81 Inches', 'Corning Gorilla Glass Victus', '128/256GB Built-in, 8/12GB RAM, UFS 3.1', 'Triple Camera: 108 MP, f/1.9, 26mm (wide), 1/1.33\", PDAF, OIS + 13 MP, f/2.4, (ultrawide) + 5 MP, f/', '(Li-Po Non removable), 4600 mAh', 'Rs: 99,000'),
(5, 'Android 9.0 (Pie)', '165 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (4 x 2.35 GHz Cortex-A53 + 4 x 1.8 GHz Cortex-A53)', '6.22 Inches', 'Corning Gorilla Glass 3', '64GB Built-in, 4GB RAM ', 'Dual 13 MP, f/2.2, 1/3.1\", PDAF + 2 MP, f/2.4, (depth), LED Flash', '(Li-Po Non removable), 4230 mAh', ' 24,999'),
(6, 'Android 10.0 OS', '197 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (2 x 2.0 GHz Cortex-A75 + 6 x 1.8 GHz Cortex-A55)', '6.6 Inches', 'Corning Gorilla Glass 3', '128GB Built-in, 8GB RAM ', 'Quad Camera: 64 MP, f/1.8, 26mm (wide), PDAF + 8 MP, f/2.4, (ultrawide) + 2 MP, f/2.4, (macro) + 2 M', '(Li-Po Non removable), 4200 mAh', 'Rs: 43,999'),
(7, 'Android 10.0 OS', '213 g', 'Dual Sim, Dual Standby (Nano-SIM)', '	Octa-core (2 x 2.2 GHz Kryo 470 Gold + 6 x 1.8 GHz Kryo 470 Silver)', '6.7 Inches', 'Corning Gorilla Glass 3', '128GB Built-in, 8GB RAM', 'Quad Camera: 64 MP, f/1.8, 26mm (wide), 1/1.72\", PDAF + 12 MP, f/2.2, (ultrawide) + 5 MP, f/2.4, (ma', '(Li-Po Non removable), 7000 mAh ', 'Rs: 61,999'),
(8, 'iOS 14.1, upgradable to iOS 14.4.2', '164 g', 'Single SIM (Nano-SIM and/or eSIM)', 'Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm)', '6.1 inches', 'Scratch-resistant ceramic glass', '64GB 4GB RAM, 128GB 4GB RAM, 256GB 4GB RAM', '12 MP, f/2.2, 23mm (wide), 1/3.6', 'Li-Ion 2815 mAh, non-removable (10.78 Wh)', 'Rs. 176,499'),
(9, 'Android 10.0 OS', '198 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (4 x 2.0 GHz Kryo 260 Gold + 4 x 1.8 GHz Kryo 260 Silver)', '6.53 Inches', 'Corning Gorilla Glass 3', '128GB Built-in, 4GB RAM', 'Triple Camera: 48 MP, f/1.8, (wide), 1/2.0\", PDAF + 2 MP, f/2.4, (macro) + 2 MP, f/2.4, (depth), LED', '(Li-Po Non removable), 6000 mAh', 'Rs: 26,999'),
(10, 'Android 10.0 OS', '163 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (4 x 2.0 GHz Kryo 260 Gold + 4 x 1.8 GHz Kryo 260 Silver)', '6.4 Inches ', 'Corning Gorilla Glass 3', '128GB Built-in, 8GB RAM', 'Quad Camera: 16 MP, f/2.2, (wide), 1/3.06\", PDAF + 8 MP, f/2.2, (ultrawide), 1/4.0\" + 2 MP, f/2.4, (', '(Li-Po Non removable), 4015 mAh', 'Rs: 39,999'),
(11, 'Android 10 OS', '209 g', 'Hybrid Dual SIM, Dual Standby, (Nano-SIM)', 'Octa-core (2 x 2.86 GHz Cortex-A76 + 2 x 2.36 GHz Cortex-A76 + 4 x 1.95 GHz Cortex-A55)', '6.58 Inches', 'Corning Gorilla Glass 3', '256GB Built-in, 8GB RAM, UFS 3.0', 'Quad Camera: 50 MP, f/1.9, (wide), PDAF, OIS Periscope + 12 MP, f/3.4, 125mm (telephoto), PDAF, OIS,', '(Li-Po Non removable), 4200 mAh ', 'Rs: 179,999'),
(12, 'Android 11 OS', '227 g', 'Dual Sim, Dual Standby, eSIM (Nano-SIM)', 'Octa-core (1 x 2.9 GHz Cortex-X1 + 3 x 2.80 GHz Cortex-A78 + 4 x 2.2 GHz Cortex-A55) ', '6.8 Inches', 'Corning Gorilla Glass Victus', '256GB Built-in, 12GB RAM', '	Quad Camera: 108 MP (2nd gen), f/1.8, 26mm (wide), 1/1.33\", PDAF, Laser AF, OIS + 10 MP, f/4.9, 240', '(Li-Po Non removable), 5000 mAh', 'Rs: 229,999'),
(13, 'IOS 12', '194 g', 'Dual Sim, Dual Standby, Single SIM (Nano-SIM', 'Hexa Core', '6.1 Inches', 'Ion-strengthened glass, oleophobic coating', '64 Built-in, 3GB RAM', '12 MP, f/1.8, 28mm, OIS, PDAF, quad-LED (dual tone) flash', '(Li-ion Non removable), 2942 mAh ', 'Rs: 151,799'),
(14, 'Android 10 OS', '209 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (2 x 2.3 GHz Kryo 465 Gold + 6 x 1.8 GHz Kryo 465 Silver)', '6.67 Inches', 'Corning Gorilla Glass 5', '128GB Built-in, 6GB RAM', 'Quad Camera: 64 MP, f/1.9, 26mm (wide), 1/1.72\", PDAF + 8 MP, f/2.2, 119Â° (ultrawide), 1/4.0\" + 5 M', '(Li-Po Non removable), 5020 mAh', ' Rs: 43,999'),
(15, 'Android 11 OS', '171 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (2 x 2.3 GHz Kryo 465 Gold + 6 x 1.8 GHz Kryo 465 Silver)', '6.4 Inches', 'Corning Gorilla Glass 3', '128GB Built-in, 8GB RAM, UFS 2.1', 'Quad Camera: 64 MP, f/1.7, (wide), 1/1.73\", PDAF + 8 MP, f/2.2, (ultrawide), 1/4.0\" + 2 MP, f/2.4, (', '(Li-Po Non removable), 4310 mAh', 'Rs: 59,999'),
(16, '', '169 g', 'Dual Sim, Dual Standby (Nano-SIM)', 'Octa-core (2 x 2.27 GHz Cortex-A76 + 6 x 1.88 GHz ', '6.7 Inches', 'Corning Gorilla Glass 37', '4 and   64', '64 MP', '(Li-Po Non removable), 4500 mAh', 'Rs. 40,000');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`Email`) VALUES
('ahmadimran1812@gmail.com'),
('fa@gmail.com'),
('jawad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `password`, `status`) VALUES
(1, 'Ahmad Imran', 'ahmadimran1812@gmail.com', '2222', 'offline'),
(3, 'faizan', 'faizan@gmail.com', '3456', 'offline'),
(4, 'asad', 'asad@gmail.com', '222333', ''),
(6, 'jawad', 'jawad@gmail.com', '323232', 'offline'),
(8, 'asad', 'asad12@gmail.com', '12345', 'offline'),
(9, 'hassan', 'hassan@gmail.com', '5555', 'online'),
(10, 'admin', 'admin', 'admin', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `user_infromation`
--

CREATE TABLE `user_infromation` (
  `id` int(11) NOT NULL,
  `First Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `About` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_infromation`
--

INSERT INTO `user_infromation` (`id`, `First Name`, `Email`, `About`, `image`, `street`, `city`, `state`, `zip code`) VALUES
(1, 'Ahmad Imran', 'ahmadimran1812@gmail.com', 'Working on the project of web development', '3.jpg', 'st # 19-A ', 'lahore', 'sta', '54000'),
(6, 'fn', 'jawad@gmail.com', 'good programmer', 'ROOM STATUS.png', 'karachi', 'karachi', 'Pakistan', '54000'),
(9, 'fn', 'hassan@gmail.com', 'responsive', 'book.png', 'uyii', 'karachi', 'Pakistan', '540043');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`user_id`, `product_id`, `name`, `type`) VALUES
(1, 8, 'Hp pavilion g7', 'laptop'),
(3, 3, 'Apple Iphone X', 'mobile'),
(3, 5, 'Samsung_galaxy_book_flex', 'laptop'),
(3, 2, 'SAMSUNG A71 WHITE', 'mobile'),
(1, 11, 'Huwaei p40 pro', 'mobile'),
(1, 14, 'Redmi_Note-9-Pro', 'mobile'),
(6, 2, 'SAMSUNG A71 WHITE', 'mobile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
