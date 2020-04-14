-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 03:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040071`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(5) NOT NULL,
  `nama_laptop` varchar(50) NOT NULL,
  `foto_laptop` varchar(20) DEFAULT NULL,
  `harga_laptop` int(10) NOT NULL,
  `stock_laptop` int(5) NOT NULL,
  `monitor` varchar(250) NOT NULL,
  `processor` varchar(250) NOT NULL,
  `graphic_card` varchar(250) NOT NULL,
  `ram` varchar(250) NOT NULL,
  `storage` varchar(250) NOT NULL,
  `konektivitas` varchar(250) NOT NULL,
  `port` varchar(250) NOT NULL,
  `baterai` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `nama_laptop`, `foto_laptop`, `harga_laptop`, `stock_laptop`, `monitor`, `processor`, `graphic_card`, `ram`, `storage`, `konektivitas`, `port`, `baterai`) VALUES
(1, 'Asus Zenbook UM431DA Ryzen 3500U', 'laptop1.webp', 9250000, 100, '14.0″ FHD (1920×1080)', 'AMD Ryzen R5-3500U', 'AMD Radeon Vega 8', '8 GB DDR4', '512 GB SSD', 'WiFi 802.11 ac, Bluetooth', '1x USB 2.0, 1x USB3.1 Type A (Gen1), 1x USB3.1 Type C (Gen 1), 1x Headphone-out & Audio-in Combo Jack, 1x HDMI', '2 Cell 47 WHrs'),
(2, 'Acer Aspire 5 A514 i7 10510', 'laptop2.webp', 9450000, 50, '14.0″ display with IPS (In-Plane Switching) technology, Full HD 1920×1080', 'Intel Core™ i7-10510U processor (8 MB Smart Cache, up to 4.9 GHz)', 'NVIDIA GeForce MX250', '8 GB DDR4', '1 TB HDD', 'Bluetooth® 5.0, Intel Wireless Wi-Fi 6 AX201,Dual Band (2.4 GHz and 5 GHz), 2×2 MU-MIMO technology', 'USB Type-C™ port: USB 3.1 Gen 1 (up to 5 Gbps), Two USB 3.1 Gen1', '2 Cell Lithium Ion (Li-Ion) 4319 mAh'),
(3, 'Dell Inspiron 3593 i5 1035G1', 'laptop3.webp', 8999999, 32, '15.6-inch FHD (1920 x1080) Anti-Glare LED-Backlit Display', 'Intel Core i5-1035G1 (6MB Cache, up to 3.6 GHz)', 'NVIDIA GeForce MX230 with 2GB GDDR5', '4 GB DDR4 2666 MHz', '1 TB HDD', 'Wi-Fi 802.11ac + Bluetooth 4.1', 'HDMI v1.4b (1), USB 3.1 (2), USB 2.0 (1), SD Card Reader (SD, SDHC, SDXC), USB 3.1 Gen 1 Type-C with Data Transition Only, RJ45, Wedge-shaped lock', '3-Cell 42WHr (Integrated)'),
(4, 'Lenovo Flex 6 14IKB i7 8550U', 'laptop4.webp', 9500000, 25, '14″ IPS 1920 x 1080 (Full HD), touchscreen', 'Intel Core i7-8550U-2.7 Ghz up to 3.5 Ghz', 'NVidia MX130-2GB', '8 GB', '256 GB SSD', 'Bluetooth 4.1, IEEE 802.11a, IEEE 802.11ac, IEEE 802.11b, IEEE 802.11g, IEEE 802.11n', 'USB-C 3.0, USB 3.0, USB 3.0 (Always On), HDMI, Headphone/microphone combo jack, mc reader', '4-cell Li-ion 45 Wh'),
(5, 'Acer A514 51G 74VX i7 8565U', 'laptop5.webp', 9459000, 19, '14,0″ HD Acer ComfyView LCD (1366X768)', 'Intel Core i7-8565U CPU 1.80 Ghz', 'Intel HD Graphics 620 + NVIDIA GeForce MX230 (2 GB GDDR5)', '4 GB DDR4 Pc4-19200', '1 TB HDD', 'WiFi dan Bluetooth', 'Card Reader, 2 Port USB 3.0, 1 Port USB 3.1 Type C, HDMI, Realtek PCIe GBE Family Controller (RJ45)', '3-Cell Li-ion'),
(6, 'Dell Inspiron 3476 i7', 'laptop6.webp', 10500000, 42, '14.0-inch HD (1366 x 768) Anti-Glare LED-Backlit Display', 'Intel® Core™ i7-8550U Processor (1.80 GHz up to 4.00 GHz, 8M Cache)', 'AMD Radeon 520 Graphics with 2GB GDDR5', '8 GB DDR4', '1 TB HDD', 'Dell Wireless Card (802.11ac + Bluetooth 4.1; Dual Band 2.4&5Ghz 1×1)', '1x HDMI™ 1.4a; 2x USB 3.1 gen 1 1x USB 2.0; 1x 10/100 RJ-45 Ethernet network 1x SD Card Reader (SD; SDHC; SDXC)', '40 WHr (4 Cell)'),
(7, 'Acer Nitro 5 AN515 52 51T2 i5 8300H', 'laptop7.webp', 9499000, 24, '15,6 inci Full HD IPS', 'Intel® Core™ i5-8300H processor (8MB cache, up to 4.00Ghz)', 'NVIDIA® GeForce® GTX 1050 with 4 GB of GDDR5', '8 GB DDR4', '1 TB HDD', 'Intel® Dual Band Wireless-AC, 802.11ac/a/b/g/n wireless LAN with Acer Nplify™, Bluetooth® 4.0', 'USB 3.1 Type C, USB 3.1 Gen 1 (up to 5 Gbps), 3x USB 3.0, Ethernet (RJ-45) port. HDMI® 2.0 port with HDCP support, DisplayPortTM, SD™ Card reader, 3.5mm headphone/speake jack', '48 Wh 3220 mAh 15.2 V 4-cell Li-ion'),
(8, 'HP Gaming 15 EC0001AX Ryzen 5 3550H', 'laptop8.webp', 9750000, 18, '15.6″ diagonal FHD IPS anti-glare micro-edge WLED-backlit, 250 nits, 45% NTSC (1920 x 1080)', 'AMD Ryzen™ 5 3550H (2.1 GHz base clock, up to 3.7 GHz max boost clock, 6 MB cache, 4 cores)', 'NVIDIA® GeForce® GTX 1050 (3 GB GDDR5 dedicated)', '8 GB DDR4-2400 SDRAM (1 x 8 GB)', '512 GB PCIe® NVMe™ M.2 SSD', 'Realtek Wi-Fi 5 (2×2) and Bluetooth® 5 combo', '1 USB 3.1 Gen 1 Type-C™ (Data Transfer Only, 5 Gb/s signaling rate); 1 USB 3.1 Gen 1 Type-A (Data Transfer Only); 1 USB 2.0 Type-A (HP Sleep and Charge); 1 AC smart pin; 1 HDMI 2.0; 1 headphone/microphone combo; 1 RJ-45', '3-cell, 52.5 Wh Li-ion'),
(9, 'Asus TUF Gaming FX505DD R5597T R5', 'laptop9.webp', 9870000, 9, '15.6″ FHD Slim IPS 120Hz 1920×1080 16:9', 'AMD Ryzen™ 5-3550H Processor 2.1GHz (6M cache, up to 3.7GHz)', 'NVIDIA GeForce GTX 1050 3GB GDDR5', '8 GB DDR4', '1 TB HDD', 'Integrated 802.11 AC (2×2), Built-in Bluetooth V4.2', '1 x COMBO audio jack, 1 x Type-A USB2.0, 2 x Type-A USB 3.1 (Gen 1), 1 x RJ45 LAN jack for LAN insert, 1 x HDMI', '3 Cells 48 Whrs'),
(10, 'Acer Nitro 5 AN515 Ryzen 5 3550H', 'laptop10.webp', 9850000, 14, '15.6″ FHD LED IPS', 'AMD Ryzen™ 5 3550H, up to 3.70Ghz', 'AMD Radeon™ RX 560X with 4GB of GDDR5', '8 GB DDR4', '1 TB HDD', 'WiFi, Bluetooth', '1x USB 2.0 Ports, 2x USB 3.1 Gen 1 Type-A Ports, 1x USB 3.1 Gen 1 Type-C Ports, 4x USB Ports, 1x HDMI, 1x RJ45', '48 Wh 3220 mAh 15.2 V 4-cell Li-ion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
