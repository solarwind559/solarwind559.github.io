-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `img` varchar(256) DEFAULT NULL,
  `extra-img` varchar(256) DEFAULT NULL,
  `video` varchar(256) NOT NULL,
  `button` varchar(256) NOT NULL DEFAULT 'Read More',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `img`, `extra-img`, `video`, `button`, `created_at`, `updated_at`) VALUES
(1, 'SuperM unveils a performance video starring Taemin, Kai and Ten', '&ensp; With less than a week remaining until their debut, SM Entertainment’s new boy group SuperM has released an intense new performance video! <br> <br>\r\n&ensp; On September 29 KST, SuperM continued to gear up for their debut by dropping an exciting new dance video starring Taemin, Kai, and Ten. The new clip highlights the talent and unique style of each member through solo dance routines, and it also provides a glimpse of the chemistry between the members as they dramatically face off between dance numbers.', 'https://i.pinimg.com/originals/ff/79/b9/ff79b9d45534293a8167dd67119e221f.jpg', NULL, '<iframe width=\"560\" height=\"355\" src=\"https://www.youtube.com/embed/kSZLzjJFkOw\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Read More', '2021-01-25 23:04:31', '2021-02-06 11:20:50'),
(2, 'Hyunjin posts a new dance choreography for \"When The Party\'s Over\" by Billie Eilish', '&ensp; Kids’ Hyunjin has surprised fans with an emotional new dance video!\r\n<br><br>\r\n&ensp; On May 10, Stray Kids released the latest installment in their “SKZ-PLAYER” series—a powerful video of Hyunjin dancing alone to Billie Eilish’s “When the Party’s Over.”\r\n<br><br>\r\n&ensp;Hyunjin also revealed that he had personally choreographed the dance in the video, writing, “I thought back to the hardest time in my life while creating the choreography for this song.\r\n“First, the reason I chose this song was because—while searching for a song that was best-suited to the three themes of emptiness, despair, and longing—I thought that the emptiness that comes when the party’s over is the same feeling as the loneliness you feel returning home after performing on a huge stage, already missing that [stage]. I tried to express that feeling to the best of my ability, and I hope that it was conveyed [through the video].”\r\n<br><br>\r\n&ensp;Check out Hyunjin’s expressive new dance video set to “When the Party’s Over” below!\r\n<br><br>\r\n', 'https://www.picsarea.com/wp-content/uploads/2020/10/Things-to-Know-About-Hyunjin-Stray-Kids.jpg', NULL, '<iframe width=\"560\" height=\"355\" src=\"https://www.youtube.com/embed/bY_TqcsMyHM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Read More', '2021-01-26 09:16:26', '2021-02-06 11:14:03'),
(3, 'A new choreography video for Kai\'s performance of \"I See You\" is released!', '&ensp; See the \'movement of awakening\' which penetrates through\r\nthe EXO\'s worldview of the EℓyXiOn. Film in collaboration with director Jae Shim.', 'https://pbs.twimg.com/media/En19IDFUwAE9IHW.jpg', NULL, '<iframe width=\"560\" height=\"355\" src=\"https://www.youtube.com/embed/8dcJ-CpxTNg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Read More', '2021-01-26 09:34:22', '2021-02-06 11:22:58'),
(4, 'Ten and Shownu surprise fans with a collaboration stage at MBC Music Festival', '&ensp; As the top dancers in WayV and MONSTA X, Ten and Shownu collaborated for a dance stage that left fans impressed by their flawless dancing. If they were amazing on their own, together they were next level.', 'https://i.pinimg.com/originals/8a/0c/2d/8a0c2dae22f9546141ed07c78e020085.png', NULL, '<iframe width=\"560\" height=\"355\" src=\"https://www.youtube.com/embed/jlyC2-T-KiY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Read More', '2021-01-25 23:08:29', '2021-02-06 11:19:18'),
(7, 'BTS Jimin presents all the flexibility and elegance of a dancer for Esquire magazine', '&ensp; BTS Jimin presented all the flexibility and elegance of a dancer in a black and white photo shoot for Esquire magazine.\r\n\r\n', 'https://cdn.shopify.com/s/files/1/2282/8555/products/cokodive-pre-order-esquire-bts-cover-16840629616720_590x.jpg?v=1606213648', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2-1605727303.jpg', '', 'Read More', '2021-01-25 15:47:58', '2021-02-06 11:19:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
