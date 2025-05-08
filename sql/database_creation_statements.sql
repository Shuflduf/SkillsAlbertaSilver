-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2025 at 12:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `hik_hikes`
--

CREATE TABLE `hik_hikes` (
  `HIK_ID` int(11) NOT NULL,
  `HIK_Name` varchar(50) NOT NULL,
  `HIK_Description` varchar(500) NOT NULL,
  `HIK_LengthKilometers` double NOT NULL,
  `HIK_DifficultyLevel` varchar(10) NOT NULL,
  `HIK_TimeLengthMinutes` int(11) NOT NULL,
  `HIK_NumberOfInjuries` int(11) NOT NULL,
  `HIK_ElevationGainMeters` int(11) DEFAULT 0,
  `HIK_GradePercent` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hik_hikes`
--

INSERT INTO `hik_hikes` (`HIK_ID`, `HIK_Name`, `HIK_Description`, `HIK_LengthKilometers`, `HIK_DifficultyLevel`, `HIK_TimeLengthMinutes`, `HIK_NumberOfInjuries`, `HIK_ElevationGainMeters`, `HIK_GradePercent`) VALUES
(1, 'Lake Louise Loop', 'A scenic trail around Lake Louise, offering panoramic views of the surrounding mountains.', 5.6, 'Easy', 90, 20, 1762, 0),
(2, 'Mount Temple Summit', 'A challenging hike leading to the summit of Mount Temple, known for stunning vistas.', 11.5, 'Hard', 240, 16, 948, 0),
(3, 'Bow River Falls Trail', 'A short trail that follows the Bow River, ending at the iconic Bow River Falls.', 2.3, 'Easy', 40, 23, 2733, 0),
(4, 'Sulphur Mountain Summit', 'A hike leading to the top of Sulphur Mountain, with views of Banff and surrounding peaks.', 5, 'Medium', 120, 22, 1190, 0),
(5, 'Cascade Mountain Trail', 'A difficult trail leading up Cascade Mountain, offering stunning views of the valley below.', 7.3, 'Hard', 180, 28, 1427, 0),
(6, 'Johnston Canyon to Ink Pots', 'A popular trail following Johnston Creek, leading to the tranquil Ink Pots.', 6.9, 'Medium', 150, 28, 3076, 0),
(7, 'Lake Agnes Trail', 'A moderate trail leading to Lake Agnes, with beautiful views of the surrounding mountains.', 3.8, 'Medium', 90, 3, 1823, 0),
(8, 'Mount Rundle Trail', 'A strenuous hike that takes you up Mount Rundle, offering sweeping views of Banff and the surrounding peaks.', 8.5, 'Hard', 180, 19, 1326, 0),
(9, 'Sunshine Meadows Loop', 'An easy hike around the Sunshine Meadows, offering panoramic views of Banff\'s wildflower-filled meadows.', 5, 'Easy', 100, 44, 2175, 0),
(10, 'Big Beehive', 'A challenging trail that offers breathtaking views of Lake Louise and the surrounding mountains.', 8, 'Hard', 210, 4, 1642, 0),
(11, 'Larch Valley', 'A moderate trail that leads to Larch Valley, a beautiful area surrounded by larch trees.', 6, 'Medium', 150, 12, 2759, 0),
(12, 'Takakkaw Falls to Yoho Lake', 'A challenging hike leading to Yoho Lake with great views of Takakkaw Falls.', 13.5, 'Hard', 300, 14, 3411, 0),
(13, 'Bourgeau Lake', 'A moderately difficult hike that leads to Bourgeau Lake, surrounded by towering peaks.', 9.4, 'Medium', 220, 43, 861, 0),
(14, 'Snowbowl Lake', 'A moderate hike that takes you to the serene Snowbowl Lake, nestled in the mountains.', 7.3, 'Medium', 180, 44, 2320, 0),
(15, 'Moraine Lake to Consolation Lakes', 'A short and easy hike offering amazing views of Moraine Lake and nearby glaciers.', 3.5, 'Easy', 70, 42, 1534, 0),
(16, 'Cory Pass Trail', 'A difficult trail with challenging terrain that provides spectacular views of the Banff area.', 12, 'Hard', 270, 23, 1987, 0),
(17, 'Sunshine Meadows', 'A moderate hike offering expansive views of alpine meadows and distant peaks.', 7, 'Medium', 160, 5, 2438, 0),
(18, 'Glen Eden', 'A moderately easy trail offering views of the Bow River and distant mountain ranges.', 4.3, 'Easy', 80, 3, 1369, 0),
(19, 'Mount Norquay', 'A difficult and steep trail leading up Mount Norquay, offering panoramic mountain views.', 9, 'Hard', 210, 35, 3202, 0),
(20, 'Parker Ridge Trail', 'A moderate hike with scenic views of the Saskatchewan Glacier and surrounding peaks.', 5, 'Medium', 120, 12, 1182, 0),
(21, 'Hidden Lake', 'A short but steep hike leading to a secluded alpine lake surrounded by mountains.', 3.5, 'Hard', 75, 18, 2010, 0),
(22, 'Iceline Trail', 'A difficult trail that offers spectacular views of glaciers and Yoho National Park.', 8.5, 'Hard', 210, 6, 2965, 0),
(23, 'Healy Pass', 'A challenging hike that rewards with incredible views of wildflower-filled meadows.', 9, 'Hard', 240, 16, 1677, 0),
(24, 'Peyto Lake Trail', 'An easy trail leading to Peyto Lake, known for its unique wolf-head shape and beautiful views.', 1.8, 'Easy', 40, 9, 1234, 0),
(25, 'Larch Valley to Sentinel Pass', 'A challenging trail leading to Sentinel Pass, known for its stunning views of Lake Louise.', 8.5, 'Hard', 180, 14, 3400, 0),
(26, 'Tangled Falls', 'A moderate trail leading to the beautiful and secluded Tangled Falls.', 4, 'Medium', 90, 10, 3011, 0),
(27, 'Mount Assiniboine', 'A difficult and long trail leading up Mount Assiniboine, one of the iconic peaks in the area.', 14, 'Hard', 300, 5, 1344, 0),
(28, 'Canoe Meadows', 'An easy hike along the shores of a pristine mountain lake with great wildlife viewing opportunities.', 3, 'Easy', 60, 7, 895, 0),
(29, 'Glacier Trail', 'A challenging trail that takes hikers up close to a massive glacier with breathtaking views.', 10, 'Hard', 240, 29, 2601, 0),
(30, 'Skoki Lake', 'A moderate hike leading to the serene Skoki Lake, nestled between mountain ridges.', 7.4, 'Medium', 150, 15, 3177, 0),
(31, 'Mount Lefroy', 'A strenuous hike leading to the summit of Mount Lefroy, offering breathtaking views of the Banff area.', 8.5, 'Hard', 210, 21, 1570, 0),
(32, 'The Crypt Lake', 'A difficult trail to Crypt Lake, known for its dramatic mountain landscape and hidden caves.', 12.2, 'Hard', 280, 3, 3060, 0),
(33, 'Bald Hills', 'A moderate hike with great views of Jasper and the surrounding mountains.', 6, 'Medium', 150, 6, 1714, 0),
(34, 'Saddleback Pass', 'A strenuous trail leading up to the spectacular Saddleback Pass with panoramic views.', 10, 'Hard', 240, 11, 2272, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prdtyp_producttypes`
--

CREATE TABLE `prdtyp_producttypes` (
  `PRDTYP_ID` int(11) NOT NULL,
  `PRDTYP_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prdtyp_producttypes`
--

INSERT INTO `prdtyp_producttypes` (`PRDTYP_ID`, `PRDTYP_Name`) VALUES
(1, 'Drinkware & Kitchen Items'),
(2, 'Apparel & Accessories'),
(3, 'Outdoor & Adventure Gear'),
(4, 'Home & Décor'),
(5, 'Gifts & Collectibles');

-- --------------------------------------------------------

--
-- Table structure for table `prd_products`
--

CREATE TABLE `prd_products` (
  `PRD_ID` int(11) NOT NULL,
  `PRDTYP_ID` int(11) NOT NULL,
  `PRD_ImagePath` varchar(100) DEFAULT NULL,
  `PRD_Description` varchar(500) DEFAULT NULL,
  `PRD_Name` varchar(50) NOT NULL,
  `PRD_Price` decimal(10,2) NOT NULL,
  `PRD_ShowOnSite` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prd_products`
--

INSERT INTO `prd_products` (`PRD_ID`, `PRDTYP_ID`, `PRD_ImagePath`, `PRD_Description`, `PRD_Name`, `PRD_Price`, `PRD_ShowOnSite`) VALUES
(49, 1, '/images/products/mug_mountain.png', 'Ceramic mug with a scenic mountain print', 'Mountain Mug', 14.99, b'1'),
(50, 2, '/images/products/tshirt_hiker.png', 'Soft cotton t-shirt with a hiking design', 'Hiking T-Shirt', 19.99, b'1'),
(51, 3, '/images/products/water_bottle.png', 'Insulated stainless steel water bottle', 'Insulated Water Bottle', 24.99, b'1'),
(52, 3, '/images/products/keychain_compass.png', 'Mini compass keychain for adventurers', 'Compass Keychain', 9.99, b'1'),
(53, 5, '/images/products/wooden_postcard.png', 'Handcrafted wooden postcard with mountain scene', 'Wooden Postcard', 7.99, b'1'),
(54, 4, '/images/products/mountain_blanket.png', 'Warm fleece blanket with mountain embroidery', 'Mountain Fleece Blanket', 39.99, b'1'),
(55, 4, '/images/products/candle_pine.png', 'Scented candle with pine forest aroma', 'Pine Scented Candle', 14.99, b'1'),
(56, 2, '/images/products/socks_hiker.png', 'Cozy hiking socks with trail patterns', 'Hiking Socks', 12.99, b'1'),
(57, 4, '/images/products/map_poster.png', 'Vintage-style national park map poster', 'National Park Map', 19.99, b'1'),
(58, 5, '/images/products/handmade_soap.png', 'Handmade natural soap with alpine herbs', 'Alpine Herb Soap', 8.99, b'1'),
(59, 5, '/images/products/hiking_journal.png', 'Leather-bound hiking adventure journal', 'Hiking Journal', 29.99, b'1'),
(60, 5, '/images/products/backpack_pins.png', 'Set of enamel pins with mountain designs', 'Mountain Enamel Pins', 14.99, b'1'),
(61, 3, '/images/products/walking_stick.png', 'Handcrafted wooden walking stick', 'Wooden Walking Stick', 34.99, b'1'),
(62, 2, '/images/products/beanie_mountain.png', 'Knit beanie with mountain embroidery', 'Mountain Beanie', 19.99, b'1'),
(63, 1, '/images/products/mountain_chocolate.png', 'Gourmet chocolate bar inspired by mountain flavors', 'Mountain Chocolate Bar', 6.99, b'1'),
(64, 0, '/images/products/hiking_trailbook.png', 'Guidebook featuring best mountain hiking trails', 'Mountain Trail Guidebook', 24.99, b'1'),
(65, 5, '/images/products/mountain_puzzle.png', '1000-piece puzzle featuring a mountain landscape', 'Mountain Puzzle', 22.99, b'1'),
(66, 1, '/images/products/thermos_mountain.png', 'Stainless steel thermos with mountain design', 'Mountain Thermos', 29.99, b'1'),
(67, 2, '/images/products/gloves_winter.png', 'Warm knitted gloves with mountain pattern', 'Mountain Knit Gloves', 17.99, b'1'),
(68, 3, '/images/products/backpack_small.png', 'Compact hiking daypack for short adventures', 'Hiking Daypack', 49.99, b'1'),
(69, 5, '/images/products/bear_plush.png', 'Soft plush bear with a hiking outfit', 'Mountain Bear Plush', 19.99, b'1'),
(70, 4, '/images/products/mountain_painting.png', 'Framed artwork of a breathtaking mountain view', 'Mountain Painting', 59.99, b'1'),
(71, 1, '/images/products/camping_mug.png', 'Durable enamel camping mug with a mountain logo', 'Camping Mug', 14.99, b'1'),
(72, 4, '/images/products/trail_sign_decor.png', 'Wooden sign inspired by trail markers', 'Trail Sign Décor', 34.99, b'1'),
(73, 4, '/images/products/wooden_ornament.png', 'Hand-carved wooden Christmas ornament', 'Wooden Mountain Ornament', 12.99, b'1'),
(74, 0, '/images/products/mountain_patch.png', 'Embroidered patch with a mountain landscape', 'Mountain Patch', 6.99, b'1'),
(75, 0, '/images/products/alpine_tea.png', 'Loose-leaf herbal tea blend from alpine herbs', 'Alpine Herbal Tea', 9.99, b'1'),
(76, 0, '/images/products/wool_scarf.png', 'Handwoven wool scarf with a mountain motif', 'Mountain Wool Scarf', 29.99, b'1'),
(77, 0, '/images/products/hiking_sticker_pack.png', 'Pack of waterproof hiking and mountain stickers', 'Hiking Sticker Pack', 8.99, b'1'),
(78, 0, '/images/products/firestarter_kit.png', 'Compact firestarter kit for outdoor trips', 'Firestarter Kit', 14.99, b'1'),
(79, 0, '/images/products/camping_lantern.png', 'Rechargeable LED lantern for camping', 'Camping Lantern', 39.99, b'1'),
(80, 0, '/images/products/wilderness_guide.png', 'Pocket-sized survival and wilderness guide', 'Wilderness Survival Guide', 18.99, b'1'),
(81, 0, '/images/products/mountain_throw_pillow.png', 'Decorative throw pillow with a mountain scene', 'Mountain Throw Pillow', 24.99, b'1'),
(82, 0, '/images/products/wood_bottle_opener.png', 'Rustic wooden bottle opener with mountain engraving', 'Mountain Bottle Opener', 14.99, b'1'),
(83, 0, '/images/products/nature_field_notes.png', 'Nature field notes notebook for outdoor observations', 'Field Notes Notebook', 12.99, b'1'),
(84, 0, '/images/products/sunglasses_polarized.png', 'Polarized sunglasses for hiking adventures', 'Hiking Sunglasses', 49.99, b'1'),
(85, 0, '/images/products/bamboo_utensils.png', 'Eco-friendly bamboo utensils for camping', 'Bamboo Camping Utensils', 14.99, b'1'),
(86, 0, '/images/products/bear_coasters.png', 'Set of four wooden coasters with bear and mountain designs', 'Bear & Mountain Coasters', 19.99, b'1'),
(87, 0, '/images/products/mountain_hoodie.png', 'Soft hoodie with a scenic mountain graphic', 'Mountain Hoodie', 39.99, b'1'),
(88, 0, '/images/products/adventure_poster.png', 'Inspirational poster with a mountain adventure quote', 'Adventure Quote Poster', 16.99, b'1'),
(89, 0, '/images/products/travel_cutlery_set.png', 'Compact stainless steel travel cutlery set', 'Travel Cutlery Set', 19.99, b'1'),
(90, 0, '/images/products/tin_mint_box.png', 'Mountain-themed tin box filled with fresh mints', 'Mountain Mint Tin', 7.99, b'1'),
(91, 0, '/images/products/hiking_socks_wool.png', 'Warm wool hiking socks for outdoor adventures', 'Wool Hiking Socks', 16.99, b'1'),
(92, 0, '/images/products/wood_journal.png', 'Journal with a wooden cover engraved with mountain peaks', 'Wooden Cover Journal', 24.99, b'1'),
(93, 0, '/images/products/mountain_travel_poster.png', 'Retro-style mountain travel poster', 'Mountain Travel Poster', 22.99, b'1'),
(94, 0, '/images/products/survival_multitool.png', 'Pocket-sized survival multitool', 'Survival Multitool', 34.99, b'1'),
(95, 0, '/images/products/alpine_honey.png', 'Organic honey sourced from mountain flowers', 'Alpine Wildflower Honey', 14.99, b'1'),
(96, 0, '/images/products/adventure_locket.png', 'Mountain-themed adventure locket necklace', 'Adventure Locket Necklace', 29.99, b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hik_hikes`
--
ALTER TABLE `hik_hikes`
  ADD PRIMARY KEY (`HIK_ID`);

--
-- Indexes for table `prdtyp_producttypes`
--
ALTER TABLE `prdtyp_producttypes`
  ADD PRIMARY KEY (`PRDTYP_ID`);

--
-- Indexes for table `prd_products`
--
ALTER TABLE `prd_products`
  ADD PRIMARY KEY (`PRD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hik_hikes`
--
ALTER TABLE `hik_hikes`
  MODIFY `HIK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `prdtyp_producttypes`
--
ALTER TABLE `prdtyp_producttypes`
  MODIFY `PRDTYP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prd_products`
--
ALTER TABLE `prd_products`
  MODIFY `PRD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- REVIEWS
-- 

CREATE TABLE prd_reviews (
  STARS int NOT NULL,
  EXTRA varchar(255),
  PRD_ID int(11),
  TIME int,
  FOREIGN KEY (PRD_ID) references prd_products(PRD_ID)
);

-- 
-- INJURIES 
-- 
CREATE TABLE INJ_Injuries (
  HIK_ID int(11),
  INJ_Year int,
  Inj_InjuryCount int,
  FOREIGN KEY (HIK_ID) references hik_hikes(HIK_ID)
);
