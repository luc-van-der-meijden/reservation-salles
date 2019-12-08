{\rtf1\ansi\ansicpg1252\cocoartf2511
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.9.0.1\
-- https://www.phpmyadmin.net/\
--\
-- Host: localhost:8889\
-- Generation Time: Dec 08, 2019 at 09:21 PM\
-- Server version: 5.7.26\
-- PHP Version: 7.3.8\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `reservationsalles`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `reservations`\
--\
\
CREATE TABLE `reservations` (\
  `id` int(11) NOT NULL,\
  `titre` varchar(255) NOT NULL,\
  `description` text NOT NULL,\
  `salles` varchar(255) NOT NULL,\
  `debut` datetime NOT NULL,\
  `fin` datetime NOT NULL,\
  `id_utilisateur` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `reservations`\
--\
\
INSERT INTO `reservations` (`id`, `titre`, `description`, `salles`, `debut`, `fin`, `id_utilisateur`) VALUES\
(14, 'fqfgs', 'fqgse', 'vid\'e9o', '2019-12-11 08:00:00', '2019-12-11 09:00:00', 1),\
(16, 'test2', 'ceznkclnz', 'vid\'e9o', '2019-12-09 13:00:00', '2019-12-09 14:00:00', 1),\
(17, 'test3', 'ceczcezc', 'audio', '2019-12-14 10:00:00', '2019-12-14 11:00:00', 2),\
(18, 'vgjkg', 'bhkvl', 'audio', '2019-12-11 18:00:00', '2019-12-11 19:00:00', 1),\
(19, 'fdfs', 'fsfds', 'vid\'e9o', '2019-12-08 10:00:00', '2019-12-08 11:00:00', 2),\
(21, 'test', 'cqcdcqs', 'audio', '2019-12-13 15:00:00', '2019-12-13 16:00:00', 1),\
(22, 'cccqds', 'cdscqdscd', 'audio', '2019-12-12 12:00:00', '2019-12-12 13:00:00', 2),\
(23, 'cdcs', 'cdss', 'vid\'e9o', '2019-12-10 11:00:00', '2019-12-10 12:00:00', 2),\
(25, 'Test 6', 'Je teste les r\'e9glages', 'vid\'e9o', '2019-12-10 15:00:00', '2019-12-10 16:00:00', 1);\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `utilisateurs`\
--\
\
CREATE TABLE `utilisateurs` (\
  `id` int(11) NOT NULL,\
  `login` varchar(255) NOT NULL,\
  `password` varchar(255) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `utilisateurs`\
--\
\
INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES\
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),\
(2, 'vanderluc', '02426066bb2a8a6c02d534dcc3fb119fffb28a48');\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `reservations`\
--\
ALTER TABLE `reservations`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- Indexes for table `utilisateurs`\
--\
ALTER TABLE `utilisateurs`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- AUTO_INCREMENT for dumped tables\
--\
\
--\
-- AUTO_INCREMENT for table `reservations`\
--\
ALTER TABLE `reservations`\
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;\
\
--\
-- AUTO_INCREMENT for table `utilisateurs`\
--\
ALTER TABLE `utilisateurs`\
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;\
}