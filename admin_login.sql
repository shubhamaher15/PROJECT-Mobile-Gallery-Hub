

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin login`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(34) DEFAULT NULL,
  `message` varchar(78) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`) VALUES
(1, 'aher shree', 'ahershree123@gmail.com', 'mobile quality very good...!!');
-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(34) DEFAULT NULL,
  `email` varchar(56) DEFAULT NULL,
  `mobile` int(43) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `email`, `mobile`, `password`) VALUES
('shubham', 'shubhamaher15@gmail.com', 8698330021, '123'),
('rushikesh', 'rushikeshvahdane@gmail.com@gmail.com', 7499907875, '123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(45) DEFAULT NULL,
  `phoneno` int(34) DEFAULT NULL,
  `email` varchar(67) DEFAULT NULL,
  `address` varchar(78) DEFAULT NULL,
  `pin` int(67) DEFAULT NULL,
  `payment` varchar(74) DEFAULT NULL,
  `total` int(78) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `phoneno`, `email`, `address`, `pin`, `payment`, `total` ) VALUES
('sai', 2147483647, 'sai123@gmail.com', 'Shrirampur', 423333, 'Cash On Delivery', 36999);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) UNSIGNED NOT NULL,
  `pname` varchar(45) DEFAULT NULL,
  `pdesc` varchar(500) DEFAULT NULL,
  `price` int(34) DEFAULT NULL,
  `quantity` int(67) DEFAULT NULL,
  `pimage` varchar(78) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdesc`, `price`, `quantity`, `pimage`) VALUES
(1, 'samsung A55 5g','SAMSUNG Galaxy A55 5G 8 GB RAM | 256 GB ROM | Expandable Upto 1 TB
16.76 cm (6.6 inch) Full HD+ Display
50MP + 12MP + 5MP | 32MP Front Camera 5000 mAh Battery
Exynos 1480 Processor.', 36999, NULL, 'img/samsung A55 5g.WEBP'),

(2, 'samsung s22 5g', 'SAMSUNG Galaxy S22 5G 8 GB RAM | 128 GB ROM | Expandable Upto 1 TB
15.49 cm (6.1 inch) Full HD+ Display
50MP + 12MP + 10MP | 10MP Front Camera
3700 mAh Battery
Snapdragon 8 gen 1 Processor', 72999, NULL, 'img/samsung s22 5g.WEBP'),

(3, 'samsung s23 5g', ' SAMSUNG Galaxy S23 5G , 8 GB RAM, 256 GB ROM | Expandable Upto 1 TB
15.49 cm (6.1 inch) Full HD+ Display
50MP + 10MP + 12MP | 12MP Front Camera
3900 mAh Battery
Qualcomm Snapdragon 8 Gen 2 Processor.', 42999, NULL, 'img/samsung s23 5g.WEBP'),

(4,'samsung s24 5g','SAMSUNG Galaxy S24 Ultra 5G 12GB RAM | 256GB ROM
17.27 cm (6.8 inch) full HD+ Display
200MP + 50MP + 12MP + 10MP | 12MP Front Camera
5000 mAh Battery
Snapdragon 8 Gen 3 Processor.', 121999, NULL, 'img/samsung s24 5g.WEBP'),

(5, 'realme gt 7 pro', 'realme GT 7 Pro 12 GB RAM | 256 GB ROM
17.22 cm (6.78 inch) Display
50MP Rear Camera
5800 mAh Battery Indias First Snapdragon 8 Elite Processor | 3X Periscope Flagship Camera| RealWorld Eco² OLED Plus Display.', 59999, NULL, 'img/realme gt 7 pro.WEBP'),

(6, 'realme narso 70 turbo 5g', 'realme 70 TURBO 5G 12 GB RAM | 256 GB ROM | Expandable Upto 1 TB
16.94 cm (6.67 inch) Full HD+ Display
50MP Rear Camera
5000 mAh Battery
Segments Fastest Dimensity 7300 Energy 5G Chipset Processor.', 19999, NULL, 'img/realme narso 70 turbo 5g.WEBP'),

(7, 'realme P2 Pro 5g', 'realme P2 Pro 5G | 8 GB RAM | 128 GB ROM |
 Expandable Upto 1 TB
17.02 cm (6.7 inch) Full HD+ Display
50MP + 8MP + 2 | 80W  fast  charging |
32 MP Front Camera |
5200 Power Battery
7s Gen 2 Processor', 21999, NULL, 'img/realme P2 Pro 5g.WEBP'),

(8, 'realme gt 6 5g', 'realme GT 6 16 GB RAM | 512 GB ROM | 
Expandable Upto 1 TB
17.22 cm (6.78 inch) Full HD+ Display
50MP + 8MP + 50MP | 
32MP Front Camera
5500 mAh Battery
8s Gen 3 Mobile Platform Processor. ', 38999, NULL, 'img/realme gt 6 5g.WEBP'),

(9, 'redmi 13 5g', 'redmi 13 5g 8 GB RAM | 128 GB ROM | Expandable Upto 1 TB
17.25 cm (6.79 inch) Full HD+ Display
108 MP Rear Camera | 32MP Front Camera
5030 mAh Battery
Qualcomm SM4450 Snapdragon 4 Gen 2 AE (4 nm) Processor. ', 13999, NULL, 'img/redmi 13 5g.WEBP'),

(10, 'redmi note 12 pro', ' redmi note 12 pro 12 GB RAM | 256 GB ROM
16.94 cm (6.67 inch) Full HD+ AMOLED Display
50MP (OIS) + 8MP + 2MP | 16MP Front Camera
5000 mAh Lithium Polymer Battery
Mediatek Dimensity 1080 Processor. ', 20999, NULL, 'img/redmi note 12 pro.WEBP'),

(11, 'redmi note 13 5g', 'redmi note 13 5g 12 GB RAM | 256 GB ROM | Expandable Upto 1 TB
16.94 cm (6.67 inch) Full HD+ Display
108 MP + 2MP | 16MP Front Camera
5000 mAh Battery
Mediatek Dimensity 6080 6nm Octa-core 5G processor for high performance. ', 17499, NULL, 'img/redmi note 13 5g.WEBP'),

(12, 'redmi note 14 5g', 'redmi note 14 5g 8 GB RAM | 128 GB ROM | Expandable Upto 1 TB
16.94 cm (6.67 inch) Display
50MP Rear Camera | 32 MP Front Camera
5110 mAh Battery
Global Debut MTK Dimensity 7025 Ultra. ', 20499, NULL, 'img/redmi note 14 5g.WEBP'),

(13, 'vivo t3 5g', 'vivo t3 5g 8 GB RAM | 128 GB ROM
16.94 cm (6.67 inch) Full HD+ Display
50MP + 2MP | 16MP Front Camera
5000 mAh Battery
Dimensity 7200 Processor. ', 18499, NULL, 'img/vivo t3 5g.WEBP'),

(14, 'vivoo t3 pro', '8 GB RAM | 128 GB ROM
17.2 cm (6.77 inch) Full HD+ AMOLED Display
50MP + 8MP | 16MP Front Camera
5500 mAh Battery
Snapdragon 7 Gen 3 Processor. ', 20499, NULL, 'img/vivoo t3 pro.WEBP'),

(15, 'vivo t3 ultra', 'vivo t3 ultra 12 GB RAM | 256 GB ROM
17.22 cm (6.78 inch) Display
50MP + 8MP | 50MP Front Camera
5500 mAh Battery
Dimensity 9200+ Processor. ', 33999, NULL, 'img/vivo t3 ultra.WEBP'),

(16, 'vivo x200 5g', '16 GB RAM | 512 GB ROM
17.22 cm (6.78 inch) Display
50MP + 50MP + 200MP | 32MP Front Camera
6000 mAh Battery
Dimensity 9400 Processor. ', 92999, NULL, 'img/vivo x200 5g.WEBP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
