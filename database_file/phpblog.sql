-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 01:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Tutorials'),
(4, 'Misc'),
(5, 'Snippets');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 2, 'International PHP Conference May 2024', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum efficitur accumsan. Ut convallis risus dictum magna dictum, eu posuere mi cursus. Etiam tempor porttitor mi, vitae blandit risus euismod sed. Nulla aliquam ligula et convallis semper. Mauris et leo ligula. Nullam non orci placerat, consectetur urna a, venenatis mauris. Integer rutrum dui ac justo ornare tristique. Pellentesque posuere, quam eu dictum accumsan, quam lorem tempor sem, eu molestie justo diam id justo. Vivamus a nibh ut erat suscipit blandit. Cras quis quam metus. Vestibulum eget ornare libero. Vestibulum orci neque, volutpat in nisl quis, blandit scelerisque dolor. Curabitur a massa in tortor consectetur tempus. Phasellus volutpat, lorem sit amet efficitur auctor, leo arcu volutpat ante, in lacinia dui dolor eu nulla.</p>\r\n\r\n            <p>Morbi sed velit et leo rutrum dignissim. Maecenas dapibus ultrices diam, at lobortis turpis efficitur eget. Nam dignissim eros sit amet fermentum posuere. Vestibulum metus purus, feugiat vitae tempor bibendum, consequat in massa. Fusce sed ipsum enim. Donec ut aliquam diam. In luctus congue leo a volutpat. Mauris scelerisque pulvinar laoreet. Sed at aliquet augue. Aenean feugiat id purus a aliquam. Pellentesque non sollicitudin orci.</p>\r\n            \r\n            <p>Fusce posuere maximus ligula, ac aliquet justo ultricies ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed non nisl semper, maximus felis vitae, blandit nulla. Etiam congue ligula dui, eget mattis sapien rutrum vitae. Fusce justo lectus, fringilla a enim a, bibendum dictum eros. Cras quis sem vitae odio sollicitudin aliquam. Proin vitae accumsan erat. Sed odio felis, vehicula eget arcu et, tincidunt rutrum nisl.</p>', 'Mateusz Kiszczak', 'php news, php events', '2024-03-06 19:08:52'),
(2, 1, 'PHP got new release: 8.3.2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum efficitur accumsan. Ut convallis risus dictum magna dictum, eu posuere mi cursus. Etiam tempor porttitor mi, vitae blandit risus euismod sed. Nulla aliquam ligula et convallis semper. Mauris et leo ligula. Nullam non orci placerat, consectetur urna a, venenatis mauris. Integer rutrum dui ac justo ornare tristique. Pellentesque posuere, quam eu dictum accumsan, quam lorem tempor sem, eu molestie justo diam id justo. Vivamus a nibh ut erat suscipit blandit. Cras quis quam metus. Vestibulum eget ornare libero. Vestibulum orci neque, volutpat in nisl quis, blandit scelerisque dolor. Curabitur a massa in tortor consectetur tempus. Phasellus volutpat, lorem sit amet efficitur auctor, leo arcu volutpat ante, in lacinia dui dolor eu nulla.</p>\r\n\r\n            <p>Morbi sed velit et leo rutrum dignissim. Maecenas dapibus ultrices diam, at lobortis turpis efficitur eget. Nam dignissim eros sit amet fermentum posuere. Vestibulum metus purus, feugiat vitae tempor bibendum, consequat in massa. Fusce sed ipsum enim. Donec ut aliquam diam. In luctus congue leo a volutpat. Mauris scelerisque pulvinar laoreet. Sed at aliquet augue. Aenean feugiat id purus a aliquam. Pellentesque non sollicitudin orci.</p>', 'Mateusz Kiszczak', 'php, php release, php 8.3.2', '2024-03-06 19:08:52'),
(3, 1, 'New features', '<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n            <ul>\r\n              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n              <li>Donec id elit non mi porta gravida at eget metus.</li>\r\n              <li>Nulla vitae elit libero, a pharetra augue.</li>\r\n            </ul>\r\n            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>', 'Mateusz Kiszczak', 'php news, php features', '2024-03-06 20:09:26'),
(5, 3, 'PHP functions - Tutorial', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet vitae velit eget suscipit. Duis ac dapibus ligula, a facilisis libero. Vestibulum mattis ante ac felis suscipit elementum. Fusce sit amet volutpat ante. Nulla varius rhoncus nunc vitae tempus. Nulla tellus ligula, semper vel mi vitae, placerat tempor odio. Integer eget nunc lacinia, faucibus augue non, laoreet enim. Suspendisse sed aliquam quam.</p>\r\n\r\n<p>Mauris tempus ante non porta imperdiet. Phasellus volutpat sapien eget massa condimentum lobortis. Pellentesque condimentum feugiat mi nec posuere. Proin iaculis neque efficitur auctor scelerisque. Sed lacinia dolor cursus elit hendrerit, et aliquet lacus ullamcorper. Vivamus scelerisque lacus sit amet augue eleifend, nec finibus quam sagittis. Pellentesque at dui id ligula commodo volutpat in vitae dolor. Nulla pulvinar metus magna, tempor pellentesque velit maximus in. Nunc id lorem auctor, luctus odio nec, placerat ante. Suspendisse porttitor bibendum lorem sit amet accumsan. Aliquam sed velit sodales, feugiat turpis fringilla, lobortis augue. In ultrices nec nisi a maximus. Ut turpis augue, aliquam a efficitur et, egestas ut leo. Vestibulum porta mi a ligula suscipit vestibulum.</p>\r\n\r\n<p>Vivamus aliquam nulla quis leo rhoncus tempor. Fusce pulvinar, lectus ut molestie pharetra, libero magna ultricies quam, ut convallis enim mauris in mauris. Fusce commodo tellus a maximus viverra. Duis erat justo, lacinia molestie felis non, pulvinar cursus turpis. Mauris vel sapien ac massa feugiat tristique vitae vitae purus. Ut neque magna, accumsan non urna nec, laoreet vestibulum est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac pretium ipsum. Morbi nulla ligula, commodo quis fermentum et, euismod vel diam.</p>', 'Mateusz Kiszczak', 'php, functions, tutorial', '2024-03-08 20:09:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
