-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2025 at 03:40 PM
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
-- Database: `cawf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_banner`
--

CREATE TABLE `add_banner` (
  `id` int(11) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_banner`
--

INSERT INTO `add_banner` (`id`, `type`, `title`, `details`, `image_path`) VALUES
(10, 'Banner', 'Clean Energy for a <span> Better Future! </span>										', '', 'banner_uploads/3.jpg'),
(11, 'Banner', '<span data-animate=\"bottom\" class=\"animeslide-heading d-block\">The Smart Choice for a								</span> 										<span data-animate=\"bottom\" class=\"animeslide-heading2 d-block\"> Brighter Future. 							', '', 'banner_uploads/1.jpg'),
(12, 'Banner', '<span data-animate=\"bottom\" class=\"animeslide-heading d-block\">Switch to Solar											</span><span data-animate=\"bottom\" class=\"animeslide-heading2 d-block\">Switch to Savings. ', '', 'banner_uploads/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_testimonial`
--

CREATE TABLE `add_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_testimonial`
--

INSERT INTO `add_testimonial` (`id`, `name`, `image_path`, `review`, `designation`, `created_at`) VALUES
(2, 'Rajesh M.', 'testimonial_uploads/external-user-networking-tanah-basah-glyph-tanah-basah.png', '\"Huge Savings on Electricity Bills!\"                                     \"Switching to solar has been the best decision for my home. Our electricity bill has                                     dropped by nearly 80%, and the system has been running flawlessly. The installation                                     was quick, and the team was very professional. Highly recommended!\"', '', '2025-01-28'),
(3, ' Abhishek Y.', 'testimonial_uploads/external-user-networking-tanah-basah-glyph-tanah-basah.png', ' \"Excellent Customer Service & Quality Panels!\"                                     \"From consultation to installation, everything was smooth. The company provided a                                     detailed energy savings report and explained everything clearly. The panels are of                                     top quality, and I already see the benefits!\"', '', '2025-01-28'),
(7, 'Amit P.', 'testimonial_uploads/external-user-networking-tanah-basah-glyph-tanah-basah.png', '\"Reliable Power Even in Cloudy Weather!\"                                     \"I was skeptical about how solar panels would perform during cloudy days, but the                                     energy storage system works perfectly. My home stays powered even during grid                                     outages. Very satisfied!\"', '', '2025-02-20'),
(9, 'Ankit kumar', 'testimonial_uploads/external-user-networking-tanah-basah-glyph-tanah-basah.png', '\"Not only am I saving money, but I feel great knowing that                                     my household is using clean energy. My solar system is running smoothly, and I                                     appreciate the environmental impact. My home stays powered even during grid                                     outages.\" ', '', '2025-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `suggestion` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL,
  `task_wallet` int(100) DEFAULT 0,
  `game_wallet` int(100) DEFAULT 0,
  `BANK_NAME` varchar(100) NOT NULL,
  `IFSC_CODE` varchar(100) NOT NULL,
  `ACC_HOLDER_NM` varchar(100) NOT NULL,
  `ACC_NUMBERS` int(100) NOT NULL,
  `ACC_TYPE` varchar(100) NOT NULL,
  `LAST_LOGIN` varchar(100) NOT NULL,
  `ACC_STATUS` varchar(100) NOT NULL DEFAULT 'active',
  `TYPE` varchar(50) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `user_id`, `firstname`, `lastname`, `username`, `email`, `register`, `suggestion`, `mobile_no`, `password`, `confirm_password`, `resettoken`, `resettokenexpire`, `task_wallet`, `game_wallet`, `BANK_NAME`, `IFSC_CODE`, `ACC_HOLDER_NM`, `ACC_NUMBERS`, `ACC_TYPE`, `LAST_LOGIN`, `ACC_STATUS`, `TYPE`) VALUES
(1, '9067706', 'Super', 'Admin', 'shahbaz@123', 'testadmin@demo.com', 'advertiser', '', '7355742333', '123456', '123456', NULL, NULL, 0, 400, '', '', '', 0, '', '', 'active', 'ADMIN'),
(2, '786', 'Zaid', 'Rizvi', 'zaid', 'admin@gmail.com', 'test', '', '9335438189', '1234', '1234', NULL, NULL, 0, 999, '', '', '', 0, '', '', 'active', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `blog_heading` varchar(255) NOT NULL,
  `blog_desc_first` longtext DEFAULT NULL,
  `blog_desc_second` text DEFAULT NULL,
  `blog_point_one` longtext DEFAULT NULL,
  `blog_point_two` longtext DEFAULT NULL,
  `blog_desc_two` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_url`, `blog_heading`, `blog_desc_first`, `blog_desc_second`, `blog_point_one`, `blog_point_two`, `blog_desc_two`, `created_at`) VALUES
(2, 'The-Future-of-Solar-Power-Solutions', 'The Future of Solar Power Solutions', 'The Future of Solar Power Solutions', 'Discover how our cutting-edge solar power solutions are transforming the energy industry. From design and installation to maintenance, we provide end-to-end renewable energy solutions for residential, commercial, and industrial clients. Join the solar revolution today!', 'solar energy, renewable energy, solar power solutions, sustainable energy, solar panel installation, clean energy, green technology, solar system maintenance, energy efficiency, eco-friendly power', 'Blog imag1', '<p>The demand for sustainable and renewable energy solutions has never been greater. As the world shifts towards cleaner alternatives, solar power has emerged as a game-changer in the energy sector. At our firm, we are dedicated to revolutionizing the industry through cutting-edge solar solutions that cater to residential, commercial, and industrial clients. Our expertise spans the entire processâ€”from system design and seamless installation to ongoing maintenanceâ€”ensuring that our customers experience maximum efficiency and long-term energy savings.</p><p>Harnessing solar energy not only reduces dependency on traditional fossil fuels but also plays a crucial role in minimizing carbon footprints and promoting environmental conservation. By utilizing the latest advancements in photovoltaic technology and energy storage systems, we provide customized solutions that align with our clients\' energy needs. Our team of skilled professionals combines deep industry knowledge with innovative engineering practices to develop solar systems that optimize performance while maintaining affordability.</p>', '2025-03-15 09:47:27'),
(3, 'How-Businesses-Can-Benefit-from-Commercial-Solar-Power', 'How Businesses Can Benefit from Commercial Solar Power', 'How Businesses Can Benefit from Commercial Solar Power', 'How Businesses Can Benefit from Commercial Solar Power', 'How Businesses Can Benefit from Commercial Solar Power', 'Blog imag2', '<p>Businesses worldwide are increasingly embracing solar power not just as a means of achieving sustainability but also as a strategic move toward long-term profitability and operational efficiency. With rising electricity costs and growing environmental concerns, solar energy presents an innovative solution that allows companies to reduce overhead expenses while contributing to a greener planet. Whether you operate a small business, a medium-sized enterprise, or a large corporation, integrating solar power into your energy strategy can lead to significant financial benefits, enhanced brand reputation, and greater energy independence.</p><p>One of the most compelling reasons businesses are transitioning to solar energy is the substantial reduction in electricity costs. Traditional energy sources are subject to fluctuating prices and increasing tariffs, making utility bills unpredictable. By installing solar panels, companies can generate their own electricity, thereby stabilizing expenses and achieving significant long-term savings. Many businesses experience a return on investment (ROI) within just a few years, as the initial installation costs are offset by lower monthly utility bills. Additionally, surplus energy generated by solar panels can often be sold back to the grid, creating an additional revenue stream through net metering programs.</p><ul data-start=\"2447\" data-end=\"2745\">\r\n</ul><h3 data-start=\"2747\" data-end=\"2767\"><br></h3>', '2025-03-15 09:50:56'),
(4, 'Is-It-Worth-the-Investment', 'Is It Worth the Investment?', 'Is It Worth the Investment', 'Is It Worth the Investment', 'Is It Worth the Investment', 'blog 2', '<p>Homeowners across the world are increasingly turning to solar power to reduce their energy costs, increase their homeâ€™s value, and contribute to a more sustainable environment. With electricity prices continuing to rise and environmental concerns becoming more pressing, solar energy has emerged as a reliable and cost-effective solution. But is switching to solar really worth the investment? What are the financial, environmental, and practical benefits of installing a residential solar system? In this article, weâ€™ll break down the advantages, costs, and considerations homeowners should keep in mind when deciding whether to invest in solar power.</p>', '2025-03-15 09:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_images`
--

CREATE TABLE `blogs_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs_images`
--

INSERT INTO `blogs_images` (`id`, `blog_id`, `image`, `logos`) VALUES
(1, 1, 'solar2.png', ''),
(2, 1, '', 'solar1.png'),
(3, 1, '', 'solar.png'),
(4, 2, '1742032047_servicesnewimg_imresizer.jpg', ''),
(5, 2, '', '1742032047_services4_imresizer.jpg'),
(6, 2, '', '1742032047_services5_imresizer.jpg'),
(7, 3, '1742032256_servicesnewimg_imresizer.jpg', ''),
(8, 3, '', '1742032256_1.jpg'),
(9, 3, '', '1742032256_2.jpg'),
(13, 4, '3.jpg', 'WhatsApp Image 2025-03-15 at 2.50.16 PM.jpeg'),
(14, 4, '3.jpg', 'WhatsApp Image 2025-03-15 at 2.50.15 PM (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `added_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_path`) VALUES
(1, 'gallery_uploads/WhatsApp Image 2025-03-15 at 2.50.15 PM.jpeg'),
(2, 'gallery_uploads/WhatsApp Image 2025-03-15 at 2.50.15 PM (1).jpeg'),
(3, 'gallery_uploads/WhatsApp Image 2025-03-15 at 2.50.16 PM.jpeg'),
(4, 'gallery_uploads/img_67d54b0d7d37e.jpeg'),
(5, 'gallery_uploads/img_67d54b0d7d8aa.jpeg'),
(6, 'gallery_uploads/img_67d54b0d7ddf6.jpeg'),
(7, 'gallery_uploads/img_67d54b0d7e264.jpeg'),
(8, 'gallery_uploads/img_67d54b0d7e6fb.jpeg'),
(9, 'gallery_uploads/img_67d54b0d7eb73.jpeg'),
(10, 'gallery_uploads/img_67d54b0d7f066.jpeg'),
(11, 'gallery_uploads/img_67d54b0d7f573.jpeg'),
(12, 'gallery_uploads/img_67d54b4ac8304.jpeg'),
(13, 'gallery_uploads/img_67d54b4ac887e.jpeg'),
(14, 'gallery_uploads/img_67d54b4ac8cfc.jpeg'),
(15, 'gallery_uploads/img_67d54b4ac9137.jpeg'),
(16, 'gallery_uploads/img_67d54b4ac95b1.jpeg'),
(17, 'gallery_uploads/img_67d54b4ac9a3b.jpeg'),
(18, 'gallery_uploads/img_67d54b4ac9ea2.jpeg'),
(19, 'gallery_uploads/img_67d54b4aca3a2.jpeg'),
(20, 'gallery_uploads/img_67d54b4aca870.jpeg'),
(21, 'gallery_uploads/img_67d54b4acad7a.jpeg'),
(22, 'gallery_uploads/img_67d54b4acb1a4.jpeg'),
(23, 'gallery_uploads/img_67d54b4acb60c.jpeg'),
(24, 'gallery_uploads/img_67d54b4acba13.jpeg'),
(25, 'gallery_uploads/img_67d54b4acbea5.jpeg'),
(26, 'gallery_uploads/img_67d54b4acc376.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `aadhaar` varchar(15) DEFAULT NULL,
  `program_type` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `qr_image` varchar(255) DEFAULT NULL,
  `form_number` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `first_name`, `phone`, `email`, `dob`, `gender`, `aadhaar`, `program_type`, `address`, `image_path`, `qr_image`, `form_number`, `status`, `created_at`) VALUES
(1, 'Ratna Bind', '7380873691', 'ratnaauctech@gmail.com', '2025-05-24', 'Female', '123456789009', 'photography', 'Lucknow', 'uploads/6831ca779c2ea_shirazkalra-270x367.png', 'uploads/qrimage/6831caa8a90b8_logo-white.webp', 'REG398427', 'Approved', '2025-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_banner`
--
ALTER TABLE `add_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_banner`
--
ALTER TABLE `add_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs_images`
--
ALTER TABLE `blogs_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
