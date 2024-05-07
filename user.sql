-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2024 at 03:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `ip` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `auth` text NOT NULL,
  `password` text NOT NULL,
  `ip` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `fname`, `lname`, `email`, `auth`, `password`, `ip`, `date`) VALUES
(1, 'sagar', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$hbSFOyHKXGvw5lVcXPBy7.1BfbWEk7qrdZrInj/BuKVEV6hABHGD.', 'aaaasss', '::1', '2024-04-29 17:58:48'),
(2, 'sagar', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$xW5k7.XJs7BSpjxOux/Nlu/ZCk1M2Wd8g7pYwCSMApTnJmOHVWrSa', '$2y$10$q3YO7U4HG5/8/WEYQfqnWeW0uQxyE.ScSG9y2nUG0Tn3s3n7Jyqhq', '::1', '2024-04-29 17:59:46'),
(3, 'sagar', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$32OMpGJ79SMjz7kZso6IxOyxujohZ62H0/AEAOz8oITiqUTn7FJHe', '$2y$10$Rjsa3G9SWX5iA4ZT1BgDse4/mj3TOLOi8yTwsmBfzNsGOvCqqU2J6', '::1', '2024-04-30 07:52:31'),
(4, 'fsfsd', 'dsf', 'fkasdf@gmail.com', '$2y$10$x/BecwiHTcXodQqXERJxEu3DQSFtyv8hKbhc4n9ybMau/8C7P/KhO', '$2y$10$mWi2nsvAVFl/JJfAm9XnQOFnay4vUxzjES0gKxy4u12K7xN0FykN.', '::1', '2024-05-01 15:20:58'),
(5, 'sagar', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$WjTkKFXBSXqauKLLPjtgdu8AeLRQ8bEAWXBuVcpBn083SBEpS7Ly6', '$2y$10$MEl/GUC4I1Bkr5ehk6Mn6efZEPOSeRScdt0SXDF1cDYfqIIMoCvAq', '::1', '2024-05-01 15:25:13'),
(6, 'dsd', 'dsd', 'wwwghimiresagar88@gmail.com', '$2y$10$7JovdO9ZeJ6iFACqWiy3l.FtRBjoKET/pcYXZoVAdh6jrdu3Ko8MG', '$2y$10$WIqUjlz24eFnXVvK5Ca3nusa8LPM5uv.y3zpeyxLYyByxW2MQnLPa', '::1', '2024-05-01 15:29:34'),
(7, 'sagar', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$LyiqlNGDizR6b6YBrtknaOmsmBVbYiuYyr3rKfN2CMwY8tDFKmZ0S', '$2y$10$rDuei1FyJXkEn98aKF0Pvut/D1Pxh8orGVKROku4x3gDgBmphSVmu', '::1', '2024-05-01 15:30:03'),
(8, 'fs4fsd', 'dsf', 'fkasdf@gmail.com', '$2y$10$uGtxfY1YzBkdkzelyu3cWewr.BvjHpitP2q1Se6i5lFkFejy4a1ES', '$2y$10$pj0mNQh9VFBdO5KKIdcLXeXuvSrGfbWVDYPFBJ4mNZjJdPSHLyllm', '::1', '2024-05-01 16:47:21'),
(9, '43rfte', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$lILv.0HR3bBDJIppqw9.q.pqOsiYTt1rAxZKRpJbxUgHUAh3/AkD6', '$2y$10$AYfNd7ansN4ZImWOGCYsKeY6pmAzJ/cYI7Oh5VGosEOlTV1llfrWG', '::1', '2024-05-01 16:47:38'),
(10, '#$', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$g8J9rK82q9CXIDCkSNqp2.zzGYZqp7WAg6EayzbZT/tx1ejjCQI2y', '$2y$10$Bf/5qH3QfBGFa5pwi1dHFeRAoWDIbwbs.zISufZgMQt0pzThhY7ZW', '::1', '2024-05-01 16:48:51'),
(11, 'e4re43', 'ghimire', 'wwwghimiresagar88@gmail.com', '$2y$10$uKO6izZekvha8Vfu0iLuc.UiAuf/rEjef9CqMzKSqgplVX65y22ca', '$2y$10$3QhNFeC9yrgyEnavFlcDJucTB31MAJ0Qn6dIPbkWMiIfPLiGdKCvW', '::1', '2024-05-01 16:50:18'),
(12, 'fs4fsd', 'dsf', 'fkasdf@gmail.com', '$2y$10$HPcYdeVUg7OxhE8/l5xJVe7z8.XaK0nEvaFHH2MTXbEXxz4HQ/iuq', '$2y$10$ypi9R4Ajix73G6OJtuJBCOf/FKjSS4trddiSzm18z8KBAnWSUH0Se', '::1', '2024-05-01 16:52:12'),
(13, 'uho', '55hgvj', 'hg@gmail.com', '$2y$10$8CFxInJUpFNyBOkQ8Hgkaej2VZPRJYhXjCZZUjaozB53KXHD6v1fu', '$2y$10$cEpmjCwJ9CvNJGdsTPsWderW5HHKwCJhjLb6OZnOVDrQ74UUUZcdS', '::1', '2024-05-01 17:12:30'),
(14, 'ds', 'ew', 'wwwghimiresagasr88@gmail.com', '', '$2y$10$SZpEa90gwUvMbv2N4ZSR3O7GOJ3XDJGxLPAtcNaoYRCdV1Wv1Xtp6', '::1', '2024-05-04 05:06:55'),
(15, 'ds', 'ew', 'wwwghimiresadgasr88@gmail.com', '', '$2y$10$KiTc9gJJuCzdJOEFBH5Ry.9o5KlduuOzgJ.wKkosWqs18IudJhzJS', '::1', '2024-05-04 05:07:28'),
(16, 'ds', 'ew', 'wwwghimiresaddgasr88@gmail.com', '$2y$10$1hppi7CfQ1shqJNC5mSQZur7BCBfA6supeoCffLX.eWQbgG2Zrpzm', '$2y$10$CXmt9JGFtGUuSdN6ATlef.x3cXmJOwxDqPr0bwmrNhM4BdXFyHLPy', '::1', '2024-05-04 05:10:37'),
(17, 'ggg', 'ghhh', 'wwwghimiresaggar88@gmail.com', '$2y$10$rjvQ808sdfWjudMGSHhfSulQ3IXJpLsIuyPfSs178dnUEos61SD0W', '$2y$10$w387vo6uEGoVJfA0sLfPvuu7gEsn3XwshlpZtRI8fSy8ffBFCj2X2', '::1', '2024-05-04 08:27:35'),
(18, 'ggg', 'ghhh', 'wwwghimiresadggar88@gmail.com', '$2y$10$qRszGB/3hgz5C2huTiUNK.4gD2PIlwKTkjYnDu4P8s3MAGnBortHy', '$2y$10$MdGhEnRqgic/69s3.oRTQOn8RnSp/6v5cHMOfk60Q.VwVF5EbkwQi', '::1', '2024-05-04 08:28:27'),
(19, 'ggg', 'ghhh', 'wwwghimiresadggsar88@gmail.com', '$2y$10$xPYT03PhnSVcD6904s.PK.ocGka2f0toEmJ5pqI5IufeehVQibQ72', '$2y$10$ZucYeuscuwg5UUxYkz.c.u5ZA1IfQ6HXhSNQ7tit6QszBBLR4thSO', '::1', '2024-05-04 08:29:28'),
(20, 'ggg', 'ghhh', 'fwwwghimiresadggsar88@gmail.com', '$2y$10$qH.XrE/kIaV.3jw5R2eNQ.7hsw3zOcyOhipLKUQA3XxXTatBVoema', '$2y$10$Y2HJwBkpPoY/3j/QxsuFSOxtPyhvYCVC/aDdEx3XLCuYYP7igK57y', '::1', '2024-05-04 08:30:04'),
(21, 'ggg', 'ghhh', 'fwwwghimiresddadggsar88@gmail.com', '$2y$10$0OLr73x3rNT7RDA2poOnXOKuCU6loBr4PF97P8a59FITOkAKR/ECm', '$2y$10$knIJa1D/TJmgEWIW1vuvhuL8MbjbncZovO3ftnH7x3AGGf8zoIbLa', '::1', '2024-05-04 08:33:28'),
(22, 'fdsfda', 'dsf', 'wwwghimiresagadr88@gmail.com', '$2y$10$0myrtSltal8BWP8qa.mzuuFr6namn8JhUBS4ARK3lzjaekRvt6Y8i', '$2y$10$xukzRepw0W8UUax6xYb/buQwWLUyCNFfA9QR2ynIPk/xX2ycFk0BO', '::1', '2024-05-04 08:43:58'),
(23, 'fdsfda', 'dsfd', 'wwwghimirddesagadr88@gmail.com', '$2y$10$PM6bCsSPM3S26q9T/u.li.rrhz2aJd4gVE.UTuGBKeBUi8kPjBU/S', '$2y$10$ivDDzCtc7zvBE1D4z5vYqesKZPqxLgOfHAg1fkpR9rVENhdokz.jW', '::1', '2024-05-04 08:44:18'),
(24, 'fdsfda', 'dsfd', 'wwwghimggirddesagadr88@gmail.com', '$2y$10$pc7nM4fSp6AoEdQAHByHLemSyr3XqIUmmPFWYES/9jO5hhKjXoMJG', '$2y$10$aB2Nkgs70BSMYXDBC0G.tOlbmmb9gWk90JpWfbCWgYVPDf1asD5he', '::1', '2024-05-04 08:56:35'),
(25, 'sagar', 'fdsf', 'sagar@gmail.com', '$2y$10$qWJgAQtvDL5M7qnnVuTjvOpmu8Gtd2m5JTCmqs.QHPtDOjLiWEkye', '$2y$10$Snhh31WvYM57PZ8acKU1..p/PADJDOt1OZ0J8ZH2EZyvssuZdG7pW', '::1', '2024-05-04 09:11:47'),
(26, 'gg', 'gg', 'jwwwghimiresagar88@gmail.com', '$2y$10$4vkZwFPvZEQKoYSqZFSjLu8TglEE.fBPqy1WnuidUnaS6bqGrrGCO', '$2y$10$0Qsu8QLOlGUSenSs83oBMeQ80f8ARn/R7zl9xx3g5lRDLVNBEZm8S', '::1', '2024-05-04 09:22:57'),
(27, 'sagar', 'ghimire', 'wwwghimiresaddgar88@gmail.com', '$2y$10$Jd6sJepsVR5krWoUDvpgAuFFVbSBWCAuHsHDC3A8b8nJKauB5zo5W', '$2y$10$0ZPGE/zW5pHQdIExIVFUdePMggSinfwPs9U5FEm0QXqGBc.RTMxmS', '::1', '2024-05-04 11:50:59'),
(28, 'sagar', 'ghimire', 'wwwghimiressagar88@gmail.com', '$2y$10$i4GiGU0pPblyO88QxVH8ieHIlOR1IzqXGT9KZGrf4GO/DvcgGg4m6', '$2y$10$KXRLJ4NwyIoYwCEzxcGHnuAqSX9aRNhqeFfTsZc/lsz2rIC8qvMMG', '::1', '2024-05-04 12:06:54'),
(29, 'sagar', 'sagar', 'sagar1@gmail.com', '$2y$10$8q3sP5vgAZxjuYUr6wzzkOwkSFED.0uFHz9QsZ6E/yR/LxmCFsdMm', '$2y$10$7roE3FPL57IXDAylM24GXud3DK4dfiOUsEc3Gu4V3Hf9nnvVyGwj2', '127.0.0.1', '2024-05-04 12:38:27'),
(30, 'sagar', 'sagar', 'ssd@gmail.com', '$2y$10$mWeCyaQizEIu0WB.p/lW9erLzES2nw3bqYrX.jT9DFOgJ0SERyNYO', '$2y$10$bxSQmbOcVLz0g2cvVK9//umrm6tfhaMFvBclV./ZSz3vRz/wYOSi6', '127.0.0.1', '2024-05-04 14:54:55'),
(31, 'fdsfs45f', 'dsd', 'sagssar@gmail.com', '$2y$10$HtDJY7PagtLVeA7DtAplJuQ3/6HnIkIhgU0QpR9GDjbHf6eiNdDWm', '$2y$10$WmLxAZKa2V8hoF0lafVqtO/Io.7b.pF/iXWt.54nh8KrCL5VUTA.O', '127.0.0.1', '2024-05-05 06:37:29'),
(32, 'fd$%#sfs45f', '%$T', 'retwet@gmail.com', '$2y$10$vLmBEiOMjXqr7CuEctNNsuFdV4pXLeuLURAFJd4qozXdR.pK3UVUe', '$2y$10$p3MvCUA0gbn4IW.icrVIMeY2H2PiRHTGRANqEsn2p2K5DT4KlYVXC', '127.0.0.1', '2024-05-05 06:39:17'),
(33, 'fdsfs45f', 'fdsf', 'sagddar@gmail.com', '$2y$10$vtBLlj10P75/Ytel0H2sBOVf/J0skhZIcHhNDhX1TTSbssg/jwi66', '$2y$10$Cqy/LTvuJeWNOBOiHSUHleEMwJG7qqyGcMew1PAbR6SLMtcqAgmnW', '127.0.0.1', '2024-05-05 06:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `quote` text NOT NULL,
  `mention` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
