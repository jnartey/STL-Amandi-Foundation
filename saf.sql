-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 31, 2018 at 06:10 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saf`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) UNSIGNED DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(180, NULL, NULL, NULL, 'controllers', 1, 554),
(181, 180, NULL, NULL, 'Pages', 2, 53),
(183, 181, NULL, NULL, 'index', 3, 4),
(184, 181, NULL, NULL, 'getRole', 5, 6),
(185, 181, NULL, NULL, 'countRows', 7, 8),
(186, 180, NULL, NULL, 'Roles', 54, 89),
(187, 186, NULL, NULL, 'admin_index', 55, 56),
(188, 186, NULL, NULL, 'admin_view', 57, 58),
(189, 186, NULL, NULL, 'admin_add', 59, 60),
(190, 186, NULL, NULL, 'admin_edit', 61, 62),
(191, 186, NULL, NULL, 'admin_delete', 63, 64),
(192, 186, NULL, NULL, 'getRole', 65, 66),
(193, 186, NULL, NULL, 'countRows', 67, 68),
(194, 180, NULL, NULL, 'Users', 90, 135),
(195, 194, NULL, NULL, 'isAuthorized', 91, 92),
(196, 194, NULL, NULL, 'admin_index', 93, 94),
(197, 194, NULL, NULL, 'admin_login', 95, 96),
(198, 194, NULL, NULL, 'admin_logout', 97, 98),
(199, 194, NULL, NULL, 'admin_view', 99, 100),
(200, 194, NULL, NULL, 'admin_add', 101, 102),
(201, 194, NULL, NULL, 'admin_edit', 103, 104),
(202, 194, NULL, NULL, 'admin_delete', 105, 106),
(203, 194, NULL, NULL, 'getRole', 107, 108),
(204, 194, NULL, NULL, 'countRows', 109, 110),
(205, 180, NULL, NULL, 'Acl', 136, 263),
(206, 205, NULL, NULL, 'Acl', 137, 166),
(207, 206, NULL, NULL, 'index', 138, 139),
(208, 206, NULL, NULL, 'admin_index', 140, 141),
(209, 206, NULL, NULL, 'getRole', 142, 143),
(210, 206, NULL, NULL, 'countRows', 144, 145),
(211, 205, NULL, NULL, 'Acos', 167, 202),
(212, 211, NULL, NULL, 'admin_index', 168, 169),
(213, 211, NULL, NULL, 'admin_empty_acos', 170, 171),
(214, 211, NULL, NULL, 'admin_build_acl', 172, 173),
(215, 211, NULL, NULL, 'admin_prune_acos', 174, 175),
(216, 211, NULL, NULL, 'admin_synchronize', 176, 177),
(217, 211, NULL, NULL, 'getRole', 178, 179),
(218, 211, NULL, NULL, 'countRows', 180, 181),
(219, 205, NULL, NULL, 'Aros', 203, 262),
(220, 219, NULL, NULL, 'admin_index', 204, 205),
(221, 219, NULL, NULL, 'admin_check', 206, 207),
(222, 219, NULL, NULL, 'admin_users', 208, 209),
(223, 219, NULL, NULL, 'admin_update_user_role', 210, 211),
(224, 219, NULL, NULL, 'admin_ajax_role_permissions', 212, 213),
(225, 219, NULL, NULL, 'admin_role_permissions', 214, 215),
(226, 219, NULL, NULL, 'admin_user_permissions', 216, 217),
(227, 219, NULL, NULL, 'admin_empty_permissions', 218, 219),
(228, 219, NULL, NULL, 'admin_clear_user_specific_permissions', 220, 221),
(229, 219, NULL, NULL, 'admin_grant_all_controllers', 222, 223),
(230, 219, NULL, NULL, 'admin_deny_all_controllers', 224, 225),
(231, 219, NULL, NULL, 'admin_get_role_controller_permission', 226, 227),
(232, 219, NULL, NULL, 'admin_grant_role_permission', 228, 229),
(233, 219, NULL, NULL, 'admin_deny_role_permission', 230, 231),
(234, 219, NULL, NULL, 'admin_get_user_controller_permission', 232, 233),
(235, 219, NULL, NULL, 'admin_grant_user_permission', 234, 235),
(236, 219, NULL, NULL, 'admin_deny_user_permission', 236, 237),
(237, 219, NULL, NULL, 'getRole', 238, 239),
(238, 219, NULL, NULL, 'countRows', 240, 241),
(239, 180, NULL, NULL, 'Galleries', 264, 299),
(240, 239, NULL, NULL, 'admin_index', 265, 266),
(241, 239, NULL, NULL, 'admin_view', 267, 268),
(242, 239, NULL, NULL, 'admin_add', 269, 270),
(243, 239, NULL, NULL, 'admin_edit', 271, 272),
(244, 239, NULL, NULL, 'admin_delete', 273, 274),
(245, 239, NULL, NULL, 'getRole', 275, 276),
(246, 239, NULL, NULL, 'countRows', 277, 278),
(247, 180, NULL, NULL, 'Images', 300, 337),
(248, 247, NULL, NULL, 'getRole', 301, 302),
(249, 247, NULL, NULL, 'countRows', 303, 304),
(250, 247, NULL, NULL, 'admin_add', 305, 306),
(258, 247, NULL, NULL, 'admin_edit', 307, 308),
(259, 247, NULL, NULL, 'admin_ajax_edit', 309, 310),
(260, 247, NULL, NULL, 'admin_delete', 311, 312),
(261, 247, NULL, NULL, 'admin_view', 313, 314),
(262, 180, NULL, NULL, 'PageContents', 338, 375),
(263, 262, NULL, NULL, 'admin_index', 339, 340),
(264, 262, NULL, NULL, 'admin_view', 341, 342),
(265, 262, NULL, NULL, 'admin_add', 343, 344),
(266, 262, NULL, NULL, 'admin_edit', 345, 346),
(267, 262, NULL, NULL, 'admin_delete', 347, 348),
(268, 262, NULL, NULL, 'getRole', 349, 350),
(269, 262, NULL, NULL, 'countRows', 351, 352),
(270, 180, NULL, NULL, 'Banners', 376, 411),
(271, 270, NULL, NULL, 'admin_index', 377, 378),
(272, 270, NULL, NULL, 'admin_view', 379, 380),
(273, 270, NULL, NULL, 'admin_add', 381, 382),
(274, 270, NULL, NULL, 'admin_edit', 383, 384),
(275, 270, NULL, NULL, 'admin_delete', 385, 386),
(276, 270, NULL, NULL, 'getRole', 387, 388),
(277, 270, NULL, NULL, 'countRows', 389, 390),
(278, 270, NULL, NULL, 'getChildren', 391, 392),
(279, 239, NULL, NULL, 'getChildren', 279, 280),
(280, 247, NULL, NULL, 'getChildren', 315, 316),
(281, 262, NULL, NULL, 'getChildren', 353, 354),
(282, 181, NULL, NULL, 'getChildren', 9, 10),
(283, 186, NULL, NULL, 'getChildren', 69, 70),
(284, 194, NULL, NULL, 'getChildren', 111, 112),
(285, 206, NULL, NULL, 'getChildren', 146, 147),
(286, 211, NULL, NULL, 'getChildren', 182, 183),
(287, 219, NULL, NULL, 'getChildren', 242, 243),
(299, 180, NULL, NULL, 'Events', 412, 447),
(300, 299, NULL, NULL, 'admin_index', 413, 414),
(301, 299, NULL, NULL, 'admin_view', 415, 416),
(302, 299, NULL, NULL, 'admin_add', 417, 418),
(303, 299, NULL, NULL, 'admin_edit', 419, 420),
(304, 299, NULL, NULL, 'admin_delete', 421, 422),
(305, 299, NULL, NULL, 'getRole', 423, 424),
(306, 299, NULL, NULL, 'countRows', 425, 426),
(307, 299, NULL, NULL, 'getChildren', 427, 428),
(311, 270, NULL, NULL, 'checkGallery', 393, 394),
(312, 299, NULL, NULL, 'checkGallery', 429, 430),
(313, 239, NULL, NULL, 'checkGallery', 281, 282),
(314, 247, NULL, NULL, 'checkGallery', 317, 318),
(330, 262, NULL, NULL, 'checkGallery', 355, 356),
(337, 181, NULL, NULL, 'checkGallery', 11, 12),
(338, 186, NULL, NULL, 'checkGallery', 71, 72),
(339, 194, NULL, NULL, 'checkGallery', 113, 114),
(340, 206, NULL, NULL, 'checkGallery', 148, 149),
(341, 211, NULL, NULL, 'checkGallery', 184, 185),
(342, 219, NULL, NULL, 'checkGallery', 244, 245),
(343, 270, NULL, NULL, 'getChildrenId', 395, 396),
(344, 180, NULL, NULL, 'Dashboard', 448, 475),
(345, 344, NULL, NULL, 'admin_index', 449, 450),
(346, 344, NULL, NULL, 'getRole', 451, 452),
(347, 344, NULL, NULL, 'countRows', 453, 454),
(348, 344, NULL, NULL, 'getChildren', 455, 456),
(349, 344, NULL, NULL, 'getChildrenId', 457, 458),
(350, 344, NULL, NULL, 'checkGallery', 459, 460),
(351, 299, NULL, NULL, 'getChildrenId', 431, 432),
(352, 239, NULL, NULL, 'getChildrenId', 283, 284),
(353, 247, NULL, NULL, 'getChildrenId', 319, 320),
(355, 262, NULL, NULL, 'getChildrenId', 357, 358),
(356, 181, NULL, NULL, 'getChildrenId', 13, 14),
(357, 186, NULL, NULL, 'getChildrenId', 73, 74),
(358, 194, NULL, NULL, 'getChildrenId', 115, 116),
(359, 206, NULL, NULL, 'getChildrenId', 150, 151),
(360, 211, NULL, NULL, 'getChildrenId', 186, 187),
(361, 219, NULL, NULL, 'getChildrenId', 246, 247),
(399, 270, NULL, NULL, 'getFirstChild', 397, 398),
(400, 270, NULL, NULL, 'checkForGrandChildren', 399, 400),
(401, 344, NULL, NULL, 'getFirstChild', 461, 462),
(402, 344, NULL, NULL, 'checkForGrandChildren', 463, 464),
(403, 299, NULL, NULL, 'getFirstChild', 433, 434),
(404, 299, NULL, NULL, 'checkForGrandChildren', 435, 436),
(405, 239, NULL, NULL, 'getFirstChild', 285, 286),
(406, 239, NULL, NULL, 'checkForGrandChildren', 287, 288),
(407, 247, NULL, NULL, 'getFirstChild', 321, 322),
(408, 247, NULL, NULL, 'checkForGrandChildren', 323, 324),
(413, 262, NULL, NULL, 'getFirstChild', 359, 360),
(414, 262, NULL, NULL, 'checkForGrandChildren', 361, 362),
(427, 181, NULL, NULL, 'getFirstChild', 15, 16),
(428, 181, NULL, NULL, 'checkForGrandChildren', 17, 18),
(429, 186, NULL, NULL, 'getFirstChild', 75, 76),
(430, 186, NULL, NULL, 'checkForGrandChildren', 77, 78),
(444, 194, NULL, NULL, 'getFirstChild', 117, 118),
(445, 194, NULL, NULL, 'checkForGrandChildren', 119, 120),
(446, 206, NULL, NULL, 'getFirstChild', 152, 153),
(447, 206, NULL, NULL, 'checkForGrandChildren', 154, 155),
(448, 211, NULL, NULL, 'getFirstChild', 188, 189),
(449, 211, NULL, NULL, 'checkForGrandChildren', 190, 191),
(450, 219, NULL, NULL, 'getFirstChild', 248, 249),
(451, 219, NULL, NULL, 'checkForGrandChildren', 250, 251),
(470, 247, NULL, NULL, 'admin_set_default', 325, 326),
(474, 270, NULL, NULL, 'getFirstChildImage', 401, 402),
(476, 344, NULL, NULL, 'getFirstChildImage', 465, 466),
(477, 299, NULL, NULL, 'getFirstChildImage', 437, 438),
(492, 239, NULL, NULL, 'getFirstChildImage', 289, 290),
(493, 247, NULL, NULL, 'getFirstChildImage', 327, 328),
(495, 262, NULL, NULL, 'getFirstChildImage', 363, 364),
(505, 181, NULL, NULL, 'getFirstChildImage', 19, 20),
(506, 186, NULL, NULL, 'getFirstChildImage', 79, 80),
(507, 194, NULL, NULL, 'getFirstChildImage', 121, 122),
(508, 206, NULL, NULL, 'getFirstChildImage', 156, 157),
(509, 211, NULL, NULL, 'getFirstChildImage', 192, 193),
(510, 219, NULL, NULL, 'getFirstChildImage', 252, 253),
(511, 270, NULL, NULL, 'getCurrentChild', 403, 404),
(512, 270, NULL, NULL, 'getParent', 405, 406),
(513, 270, NULL, NULL, 'getData', 407, 408),
(517, 344, NULL, NULL, 'getCurrentChild', 467, 468),
(518, 344, NULL, NULL, 'getParent', 469, 470),
(519, 344, NULL, NULL, 'getData', 471, 472),
(520, 299, NULL, NULL, 'getCurrentChild', 439, 440),
(521, 299, NULL, NULL, 'getParent', 441, 442),
(522, 299, NULL, NULL, 'getData', 443, 444),
(526, 239, NULL, NULL, 'getCurrentChild', 291, 292),
(527, 239, NULL, NULL, 'getParent', 293, 294),
(528, 239, NULL, NULL, 'getData', 295, 296),
(529, 247, NULL, NULL, 'getCurrentChild', 329, 330),
(530, 247, NULL, NULL, 'getParent', 331, 332),
(531, 247, NULL, NULL, 'getData', 333, 334),
(535, 262, NULL, NULL, 'getCurrentChild', 365, 366),
(536, 262, NULL, NULL, 'getParent', 367, 368),
(537, 262, NULL, NULL, 'getData', 369, 370),
(540, 181, NULL, NULL, 'getCurrentChild', 21, 22),
(541, 181, NULL, NULL, 'getParent', 23, 24),
(542, 181, NULL, NULL, 'getData', 25, 26),
(543, 186, NULL, NULL, 'getCurrentChild', 81, 82),
(544, 186, NULL, NULL, 'getParent', 83, 84),
(545, 186, NULL, NULL, 'getData', 85, 86),
(546, 194, NULL, NULL, 'getCurrentChild', 123, 124),
(547, 194, NULL, NULL, 'getParent', 125, 126),
(548, 194, NULL, NULL, 'getData', 127, 128),
(549, 206, NULL, NULL, 'getCurrentChild', 158, 159),
(550, 206, NULL, NULL, 'getParent', 160, 161),
(551, 206, NULL, NULL, 'getData', 162, 163),
(552, 211, NULL, NULL, 'getCurrentChild', 194, 195),
(553, 211, NULL, NULL, 'getParent', 196, 197),
(554, 211, NULL, NULL, 'getData', 198, 199),
(555, 219, NULL, NULL, 'getCurrentChild', 254, 255),
(556, 219, NULL, NULL, 'getParent', 256, 257),
(557, 219, NULL, NULL, 'getData', 258, 259),
(569, 270, NULL, NULL, 'getSymbols', 409, 410),
(571, 344, NULL, NULL, 'getSymbols', 473, 474),
(572, 299, NULL, NULL, 'getSymbols', 445, 446),
(574, 239, NULL, NULL, 'getSymbols', 297, 298),
(575, 247, NULL, NULL, 'getSymbols', 335, 336),
(577, 262, NULL, NULL, 'getSymbols', 371, 372),
(579, 181, NULL, NULL, 'getSymbols', 27, 28),
(580, 186, NULL, NULL, 'getSymbols', 87, 88),
(581, 194, NULL, NULL, 'getSymbols', 129, 130),
(582, 206, NULL, NULL, 'getSymbols', 164, 165),
(583, 211, NULL, NULL, 'getSymbols', 200, 201),
(584, 219, NULL, NULL, 'getSymbols', 260, 261),
(741, 180, NULL, NULL, 'Sitemap', 476, 505),
(742, 741, NULL, NULL, 'Sitemaps', 477, 504),
(743, 742, NULL, NULL, 'display', 478, 479),
(744, 742, NULL, NULL, 'getRole', 480, 481),
(745, 742, NULL, NULL, 'countRows', 482, 483),
(746, 742, NULL, NULL, 'getChildren', 484, 485),
(747, 742, NULL, NULL, 'getSymbols', 486, 487),
(748, 742, NULL, NULL, 'getFirstChild', 488, 489),
(749, 742, NULL, NULL, 'getCurrentChild', 490, 491),
(750, 742, NULL, NULL, 'getParent', 492, 493),
(751, 742, NULL, NULL, 'getFirstChildImage', 494, 495),
(752, 742, NULL, NULL, 'checkForGrandChildren', 496, 497),
(753, 742, NULL, NULL, 'getChildrenId', 498, 499),
(754, 742, NULL, NULL, 'checkGallery', 500, 501),
(755, 742, NULL, NULL, 'getData', 502, 503),
(874, 262, NULL, NULL, 'admin_set_default', 373, 374),
(878, 181, NULL, NULL, 'projects', 29, 30),
(881, 181, NULL, NULL, 'contact_us', 31, 32),
(884, 181, NULL, NULL, 'process', 33, 34),
(885, 181, NULL, NULL, 'search', 35, 36),
(889, 194, NULL, NULL, 'client_login', 131, 132),
(890, 194, NULL, NULL, 'client_logout', 133, 134),
(891, 181, NULL, NULL, 'more_search', 37, 38),
(892, 181, NULL, NULL, 'ajax_search', 39, 40),
(893, 180, NULL, NULL, 'News', 506, 553),
(894, 893, NULL, NULL, 'admin_index', 507, 508),
(895, 893, NULL, NULL, 'admin_view', 509, 510),
(896, 893, NULL, NULL, 'admin_add', 511, 512),
(897, 893, NULL, NULL, 'admin_edit', 513, 514),
(898, 893, NULL, NULL, 'admin_delete', 515, 516),
(899, 893, NULL, NULL, 'admin_archive_news', 517, 518),
(900, 893, NULL, NULL, 'admin_unarchive_news', 519, 520),
(901, 893, NULL, NULL, 'admin_publish_news', 521, 522),
(902, 893, NULL, NULL, 'admin_unpublish_news', 523, 524),
(903, 893, NULL, NULL, 'admin_enable_comments', 525, 526),
(904, 893, NULL, NULL, 'admin_disable_comments', 527, 528),
(905, 893, NULL, NULL, 'getRole', 529, 530),
(906, 893, NULL, NULL, 'countRows', 531, 532),
(907, 893, NULL, NULL, 'getChildren', 533, 534),
(908, 893, NULL, NULL, 'getSymbols', 535, 536),
(909, 893, NULL, NULL, 'getFirstChild', 537, 538),
(910, 893, NULL, NULL, 'getCurrentChild', 539, 540),
(911, 893, NULL, NULL, 'getParent', 541, 542),
(912, 893, NULL, NULL, 'getFirstChildImage', 543, 544),
(913, 893, NULL, NULL, 'checkForGrandChildren', 545, 546),
(914, 893, NULL, NULL, 'getChildrenId', 547, 548),
(915, 893, NULL, NULL, 'checkGallery', 549, 550),
(916, 893, NULL, NULL, 'getData', 551, 552),
(917, 181, NULL, NULL, 'about_saf', 41, 42),
(919, 181, NULL, NULL, 'goal', 43, 44),
(920, 181, NULL, NULL, 'saf_news', 45, 46),
(921, 181, NULL, NULL, 'download', 47, 48),
(922, 181, NULL, NULL, 'community_projects', 49, 50),
(923, 181, NULL, NULL, 'goal_news', 51, 52);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) UNSIGNED DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Role', 1, '', 1, 14),
(2, 1, 'User', 1, '', 2, 3),
(4, NULL, 'Role', 2, '', 15, 18),
(5, 4, 'User', 3, '', 16, 17),
(6, 1, 'User', 2, '', 4, 5),
(7, 1, 'User', 2, '', 6, 7),
(8, NULL, 'Role', 3, '', 19, 20),
(9, 1, 'User', 2, '', 12, 13),
(10, 1, 'User', 3, '', 8, 9),
(11, 1, 'User', 2, '', 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) UNSIGNED NOT NULL,
  `aro_id` int(10) UNSIGNED NOT NULL,
  `aco_id` int(10) UNSIGNED NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(13, 1, 180, '1', '1', '1', '1'),
(15, 4, 197, '1', '1', '1', '1'),
(16, 4, 198, '1', '1', '1', '1'),
(17, 4, 274, '1', '1', '1', '1'),
(18, 4, 272, '1', '1', '1', '1'),
(19, 4, 271, '1', '1', '1', '1'),
(20, 4, 278, '1', '1', '1', '1'),
(21, 4, 277, '1', '1', '1', '1'),
(22, 4, 276, '1', '1', '1', '1'),
(23, 4, 242, '1', '1', '1', '1'),
(24, 4, 244, '1', '1', '1', '1'),
(25, 4, 243, '1', '1', '1', '1'),
(26, 4, 240, '1', '1', '1', '1'),
(27, 4, 241, '1', '1', '1', '1'),
(28, 4, 246, '1', '1', '1', '1'),
(29, 4, 279, '1', '1', '1', '1'),
(30, 4, 245, '1', '1', '1', '1'),
(31, 4, 250, '1', '1', '1', '1'),
(32, 4, 259, '1', '1', '1', '1'),
(33, 4, 260, '1', '1', '1', '1'),
(34, 4, 258, '1', '1', '1', '1'),
(35, 4, 261, '1', '1', '1', '1'),
(36, 4, 249, '1', '1', '1', '1'),
(37, 4, 280, '1', '1', '1', '1'),
(38, 4, 248, '1', '1', '1', '1'),
(40, 4, 266, '1', '1', '1', '1'),
(41, 4, 263, '1', '1', '1', '1'),
(42, 4, 264, '1', '1', '1', '1'),
(43, 4, 269, '1', '1', '1', '1'),
(44, 4, 281, '1', '1', '1', '1'),
(45, 4, 268, '1', '1', '1', '1'),
(46, 4, 185, '1', '1', '1', '1'),
(48, 4, 282, '1', '1', '1', '1'),
(49, 4, 184, '1', '1', '1', '1'),
(50, 4, 183, '1', '1', '1', '1'),
(51, 4, 187, '1', '1', '1', '1'),
(52, 4, 188, '1', '1', '1', '1'),
(53, 4, 193, '1', '1', '1', '1'),
(54, 4, 283, '1', '1', '1', '1'),
(55, 4, 192, '1', '1', '1', '1'),
(56, 4, 201, '1', '1', '1', '1'),
(57, 4, 196, '1', '1', '1', '1'),
(58, 4, 199, '1', '1', '1', '1'),
(59, 4, 204, '1', '1', '1', '1'),
(60, 4, 284, '1', '1', '1', '1'),
(61, 4, 203, '1', '1', '1', '1'),
(62, 4, 195, '1', '1', '1', '1'),
(63, 4, 209, '1', '1', '1', '1'),
(64, 4, 217, '1', '1', '1', '1'),
(65, 4, 237, '1', '1', '1', '1'),
(66, 4, 222, '1', '1', '1', '1'),
(69, 8, 881, '1', '1', '1', '1'),
(70, 8, 185, '1', '1', '1', '1'),
(72, 8, 183, '1', '1', '1', '1'),
(74, 8, 884, '1', '1', '1', '1'),
(76, 8, 885, '1', '1', '1', '1'),
(79, 8, 878, '1', '1', '1', '1'),
(80, 8, 889, '1', '1', '1', '1'),
(81, 8, 890, '1', '1', '1', '1'),
(82, 8, 579, '1', '1', '1', '1'),
(83, 8, 184, '1', '1', '1', '1'),
(84, 8, 541, '1', '1', '1', '1'),
(85, 8, 505, '1', '1', '1', '1'),
(86, 8, 427, '1', '1', '1', '1'),
(87, 8, 542, '1', '1', '1', '1'),
(88, 8, 540, '1', '1', '1', '1'),
(89, 8, 356, '1', '1', '1', '1'),
(90, 8, 282, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `category` varchar(11) DEFAULT NULL,
  `banner_image` varchar(160) NOT NULL,
  `title` varchar(140) NOT NULL,
  `description` text NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `page_meta_description` varchar(150) NOT NULL,
  `page_meta_keywords` mediumtext NOT NULL,
  `url_content` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `add_banner` varchar(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `category`, `banner_image`, `title`, `description`, `youtube`, `page_meta_description`, `page_meta_keywords`, `url_content`, `url`, `add_banner`, `created`, `modified`) VALUES
(1, NULL, '', 'home', '', '', '', '', '', NULL, '1', '2015-09-10 17:47:38', '2015-09-10 17:47:38'),
(2, '1', 'saf_bg.jpg', 'Striving To Create Opportunities For Children From Underprivileged Backgrounds', 'We are a registered non-profit organization, supported by the STL Group and by our dedicated employees that volunteer serve this cause.', 'https://www.youtube.com/watch?v=TgKfEr0Z75Y', '', '', '', NULL, '0', '2015-09-10 17:49:21', '2016-07-28 09:53:08'),
(3, NULL, 'contact_banner.jpg', 'contact us', '', '', '', '', '', NULL, '0', '2015-09-25 05:46:09', '2015-09-25 05:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_image` varchar(140) DEFAULT NULL,
  `file` varchar(160) NOT NULL,
  `title` varchar(140) NOT NULL,
  `content` longtext NOT NULL,
  `event_date` date DEFAULT NULL,
  `time` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_thumb` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `link_id`, `name`, `description`, `img_thumb`, `created`, `modified`) VALUES
(1, 11, 'Dzorwulu A&B Primary School', '', '', '2015-09-10 21:32:41', '2016-11-02 06:32:40'),
(2, 12, 'Oyibi School', '', '', '2015-09-10 21:33:12', '2016-06-11 07:19:31'),
(3, 13, 'Gye Nyame Mobile Clinic', '', '', '2015-09-10 21:33:41', '2015-10-05 11:13:23'),
(4, 14, 'Akplortorkor Roman Catholic Basic School', '', '', '2015-09-10 21:34:05', '2015-10-05 11:13:37'),
(5, 15, 'Supporting a local NGO', '', '', '2015-09-10 21:34:38', '2016-06-11 08:33:09'),
(6, 25, 'GOAL', 'How time flies!! The first year of the GOAL PROJECT has come to an end! This special occasion was marked by a fun-filled party held at the Dzorwulu A&B Primary School and was attended by all mentors, mentees and GOAL staff.\r\nIt was a very exciting day, filled with music, bouncy castles, face painting and group games. All the  mentorâ€™s received Certificates of Appreciation alongside the menteeâ€™s that received educational gifts. Everyone enjoyed many snacks and a hearty lunch. \r\nA wonderful time was held by all and we look forward to celebrating future graduates of the GOAL PROJECT.\r\nThank you to all mentors and mentees for your willingness to participate in this exciting new program and for paving the way for the future.', '', '2015-09-19 12:03:03', '2016-06-28 10:52:48'),
(7, 24, 'Others', '', '', '2015-09-19 12:03:54', '2015-09-24 19:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `img_thumb` varchar(100) NOT NULL,
  `default_img` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `gallery_id`, `name`, `img_file`, `img_thumb`, `default_img`, `created`, `modified`) VALUES
(14, 1, '', 'Dzarwulu_A_B_primary_school_1.JPG', '', 0, '2015-09-19 11:32:29', '2015-09-19 11:32:29'),
(15, 1, '', 'Dzarwulu_A_B_primary_school_2.jpg', '', 0, '2015-09-19 11:32:31', '2015-09-19 11:32:31'),
(5, 2, '', 'Oiby_1.jpg', '', 0, '2015-09-11 11:54:15', '2015-09-11 11:54:15'),
(25, 3, '', 'DAY_ONE_44.JPG', '', 0, '2015-09-19 12:55:52', '2015-09-19 12:55:52'),
(24, 3, '', 'DAY_ONE_28.JPG', '', 0, '2015-09-19 12:55:50', '2015-09-19 12:55:50'),
(23, 3, '', 'DAY_ONE_26.JPG', '', 0, '2015-09-19 12:55:47', '2015-09-19 12:55:47'),
(9, 4, '', 'Akplortorkor_Roman_Catholic_Basic_School_1.jpg', '', 0, '2015-09-11 11:59:28', '2015-09-11 11:59:28'),
(10, 4, '', 'Akplortorkor_Roman_Catholic_Basic_School_2.jpg', '', 0, '2015-09-11 11:59:30', '2015-09-11 11:59:30'),
(11, 4, '', 'Akplortorkor_Roman_Catholic_Basic_School_3.jpg', '', 0, '2015-09-11 11:59:32', '2015-09-11 11:59:32'),
(17, 1, '', 'Dzarwulu_A_B_primary_school_4.JPG', '', 0, '2015-09-19 11:32:35', '2015-09-19 11:32:35'),
(18, 1, '', 'DZARWULU_999.JPG', '', 0, '2015-09-19 11:32:36', '2015-09-19 11:32:36'),
(19, 1, '', 'DZARWULU_INSTEAD_OF_BARBARA.JPG', '', 0, '2015-09-19 11:32:37', '2015-09-19 11:32:37'),
(20, 1, '', 'DZARWULU_INSTEAD_OF_THE_MAN.JPG', '', 0, '2015-09-19 11:32:39', '2015-09-19 11:32:39'),
(26, 3, '', 'DAY_TWO_4.JPG', '', 0, '2015-09-19 12:55:55', '2015-09-19 12:55:55'),
(27, 3, '', 'DAY_TWO_55.JPG', '', 0, '2015-09-19 12:55:57', '2015-09-19 12:55:57'),
(28, 3, '', 'DAY_TWO_69.JPG', '', 0, '2015-09-19 12:55:59', '2015-09-19 12:55:59'),
(29, 3, '', 'DAY_TWO_100.jpg', '', 0, '2015-09-19 12:56:02', '2015-09-19 12:56:02'),
(30, 3, '', 'DAY_TWO_111.jpg', '', 0, '2015-09-19 12:56:04', '2015-09-19 12:56:04'),
(31, 3, '', 'DAY_TWO_118.JPG', '', 0, '2015-09-19 12:56:05', '2015-09-19 12:56:05'),
(32, 6, '', '25A5014.png', '', 0, '2016-06-28 12:17:25', '2016-06-28 12:17:25'),
(33, 6, '', '25A5060.png', '', 0, '2016-06-28 12:17:25', '2016-06-28 12:17:25'),
(34, 6, '', '25A5078.png', '', 0, '2016-06-28 12:17:25', '2016-06-28 12:17:25'),
(35, 6, '', '25A5127.png', '', 0, '2016-06-28 12:17:25', '2016-06-28 12:17:25'),
(36, 6, '', '25A5171.png', '', 0, '2016-06-28 12:17:26', '2016-06-28 12:17:26'),
(37, 6, '', '25A5202.png', '', 0, '2016-06-28 12:17:26', '2016-06-28 12:17:26'),
(38, 6, '', '25A5259.png', '', 0, '2016-06-28 12:17:26', '2016-06-28 12:17:26'),
(39, 6, '', '25A5269.png', '', 0, '2016-06-28 12:17:26', '2016-06-28 12:17:26'),
(40, 6, '', '25A5280.png', '', 0, '2016-06-28 12:17:27', '2016-06-28 12:17:27'),
(41, 6, '', '25A5287.png', '', 0, '2016-06-28 12:17:27', '2016-06-28 12:17:27'),
(42, 6, '', '25A5310.png', '', 0, '2016-06-28 12:17:27', '2016-06-28 12:17:27'),
(43, 6, '', '25A5335.png', '', 0, '2016-06-28 12:17:27', '2016-06-28 12:17:27'),
(44, 6, '', '25A5346.png', '', 0, '2016-06-28 12:17:28', '2016-06-28 12:17:28'),
(45, 6, '', '25A5390.png', '', 0, '2016-06-28 12:17:28', '2016-06-28 12:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(255) DEFAULT NULL,
  `story` text,
  `summary` text,
  `publish` int(11) NOT NULL DEFAULT '1',
  `archive` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `file_image` varchar(160) NOT NULL,
  `file_image_1` varchar(160) NOT NULL,
  `file_image_2` varchar(160) NOT NULL,
  `file_image_3` varchar(160) NOT NULL,
  `file` varchar(160) DEFAULT NULL,
  `file_1` varchar(160) DEFAULT NULL,
  `file_2` varchar(160) DEFAULT NULL,
  `file_3` varchar(160) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `timestamp` varchar(160) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `story`, `summary`, `publish`, `archive`, `image`, `file_image`, `file_image_1`, `file_image_2`, `file_image_3`, `file`, `file_1`, `file_2`, `file_3`, `category`, `id`, `slug`, `news_date`, `created`, `modified`, `timestamp`) VALUES
('April 2016 TREE PLANTING', NULL, NULL, 1, 0, '', 'april_2016_t_umbnail.jpg', '', '', '', 'April_2016_SAF_Newsletter_1.pdf', NULL, NULL, NULL, '1', 22, 'april-2016-tree-planting', '2016-04-01', '2016-05-12 05:36:01', '2016-05-12 05:36:01', ''),
('Mar 2016 FEEDING PROJECT', NULL, NULL, 1, 0, '', 'SAF_March_2016_FEEDING_PROJECT_t_umbnail.jpg', '', '', '', 'SAF_March_2016_FEEDING_PROJECT_small.pdf', NULL, NULL, NULL, '1', 17, 'mar-2016-feeding-project', '2016-03-01', '2016-03-31 06:44:27', '2016-03-31 06:44:27', ''),
('Feb 2016 NUTRITION', NULL, NULL, 1, 0, '', 'SAF_NUTRITION_FEB_2016_t_umbnail.jpg', '', '', '', 'SAF_NUTRITION_FEB_2016_shrunk.pdf', NULL, NULL, NULL, '1', 16, 'feb-2016-nutrition', '2016-02-01', '2016-03-31 06:43:23', '2016-03-31 06:43:23', ''),
('Sep 2015 GOAL', NULL, NULL, 1, 0, '', 'september_2015_t_umbnail.jpg', '', '', '', 'september_2015_newsletter.pdf', NULL, NULL, NULL, '1', 15, 'sep-2015-goal', '2015-09-01', '2016-03-31 06:40:34', '2016-03-31 06:40:34', ''),
('Jun 2015 RECYCLING', NULL, NULL, 1, 0, '', 'june_2015_t_umbnail.jpg', '', '', '', 'june_2015_newsletter.pdf', NULL, NULL, NULL, '1', 14, 'jun-2015-recycling', '2015-06-01', '2016-03-31 06:39:19', '2016-03-31 06:39:19', ''),
('Mar 2015 COLOURS', NULL, NULL, 1, 0, '', 'march_2015_t_umbnail.jpg', '', '', '', 'march_2015_newsletter.pdf', NULL, NULL, NULL, '1', 13, 'mar-2015-colours', '2015-03-01', '2016-03-31 06:34:30', '2016-03-31 06:34:30', ''),
('WHO WE ARE', NULL, NULL, 1, 0, '', 'december_2014_t_umbnail-0.jpg', '', '', '', 'december_2014_newsletter-0.pdf', NULL, NULL, NULL, '1', 23, 'who-we-are-2', '2016-05-01', '2016-05-12 05:38:21', '2016-05-12 05:39:07', ''),
('SAF News', NULL, NULL, 1, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 'saf-news', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
('GOAL News', NULL, NULL, 1, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 2, 'goal-news', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
('SCHOOL VACATION AT NEW AMANFUL', NULL, NULL, 1, 0, '', 'vacation_1-1.jpg', '', '', '', 'vacation_1.pdf', NULL, NULL, NULL, '1', 46, 'school-vacation-at-new-amanful', '2016-05-02', '2016-07-20 12:32:00', '2016-07-20 12:32:00', ''),
('SAF IN TAKORADI', NULL, NULL, 1, 0, '', 'SAF_TAKORADI_t_umbnail_2-0.jpg', '', '', '', 'SAF_TAKORADI_1-0.pdf', NULL, NULL, NULL, '1', 45, 'saf-in-takoradi-2', '2016-07-20', '2016-07-20 12:25:39', '2016-07-20 12:27:11', ''),
('GOAL', NULL, NULL, 1, 0, '', 'FormatFactoryGOAL_PARTY_t_umbnail.jpg', '', '', '', 'G1.pdf', NULL, NULL, NULL, '2', 40, 'goal', '2016-06-01', '2016-06-24 07:34:00', '2016-06-24 07:34:00', ''),
('GOAL ORIENTATION WORKSHOP 2016-2017', NULL, NULL, 1, 0, '', 'goal_t_umbnail_2.jpg', '', '', '', 'goal_workshop_2.pdf', NULL, NULL, NULL, '2', 50, 'goal-orientation-workshop-2016-2017', '2016-09-07', '2016-09-07 04:37:47', '2016-09-07 04:37:47', '');

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(11) DEFAULT NULL,
  `project_category` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `page_layout` varchar(1) NOT NULL DEFAULT '0',
  `website` varchar(200) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `partner_logo` varchar(255) NOT NULL,
  `page_image` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `page_type` varchar(1) NOT NULL DEFAULT '0',
  `add_content` varchar(1) NOT NULL DEFAULT '0',
  `overview` varchar(1) NOT NULL DEFAULT '0',
  `action` varchar(20) DEFAULT NULL,
  `secure` varchar(1) NOT NULL DEFAULT '0',
  `hide` varchar(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`id`, `slug`, `category`, `project_category`, `title`, `content`, `page_layout`, `website`, `icon`, `partner_logo`, `page_image`, `file`, `youtube_link`, `page_type`, `add_content`, `overview`, `action`, `secure`, `hide`, `created`, `modified`) VALUES
(1, 'about-us-2', NULL, NULL, 'about us', '', '0', NULL, '', '', '', '', NULL, '1', '1', '0', NULL, '0', '0', '2015-09-10 18:20:24', '2016-11-02 06:00:08'),
(2, 'about-us', '1', NULL, 'about us', '', '1', NULL, '', '', '', '', NULL, '1', '1', '0', NULL, '0', '0', '2015-09-10 18:42:49', '2015-09-10 18:42:49'),
(3, 'striving-to-create-opportunities-for-children-from-underprivileged-backgrounds', '2', NULL, 'Striving to create opportunities for children from underprivileged backgrounds', '<p>The STL-Amandi Foundation (SAF) is a Ghanaian registered non-profit organization that has been set up by the <a href=\"http://www.stlghana.com\" target=\"_blank\">STL Group</a>&nbsp;and its dedicated employees to support and promote the education, health and welfare of the children in our communities. One of STL Group&#39;s core business areas is in construction (Amandi) and we use our knowledge and assets to help reconstruct schools and medical centers for the towns and villages in which we work.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SAF has delivered many education, health and welfare-related projects. Here is a snapshot of what we have achieved:</p>\r\n\r\n<ul>\r\n	<li>Providing assistance and medical treatment for individuals in need.</li>\r\n	<li>Funding a mobile clinic that provides healthcare services in areas with no access to hospitals.</li>\r\n	<li>Building and renovating schools with structures that were hazardous for the children attending them.</li>\r\n	<li>Allocating resources to grants, sponsorships and donations for computer equipment, libraries and all other educational resources required.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For the past few years, SAF has&nbsp;focused its&nbsp;attention on improving the provision of public schools for underprivileged Ghanaian children. These schools are often underfunded.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h6>We give of ourselves</h6>\r\n\r\n<p><a href=\"http://www.amandi.com\" target=\"_blank\">Amandi</a> &ndash; the construction arm of STL Group &ndash; is responsible for renovating these public schools. Initially, our work is focused on schools in Accra, the capital of Ghana, and schools along the coastline. Over time, we intend to expand our school renovation project into other areas of the country.</p>\r\n\r\n<p>In addition to improving the fabric of the school buildings, STL Group&#39;s dedicated employees give some of their time each week through the SAF program&nbsp;to support the children who attend these schools. This voluntary work provides extra-curriculum help with language, reading, music, art, photography and other areas in which our staff have knowledge to impart. Our enthusiastic volunteers have been known to bring in musicians and painters to visit the children and encourage their creativity. We always remember to have fun!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h6>The continuous joy of giving back</h6>\r\n\r\n<p>Technology is the great enabler and SuperTech is delighted to be in a position&nbsp;to exploit&nbsp;it in order to to enhance the educational and employment prospects of the children in our schools. We now sponsor a computer science technical qualification that provides some of our pupils with a scholarship to attend university. Subsequently, these students pay back their college fee by working for STL Group and volunteering in turn so that the next generation of children benefits from the new talent.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Whilst&nbsp;we are proud of our endeavors, we cannot afford to be complacent about our achievements &ndash; there is still so much to do. Primary school enrollment levels and staff retention, particularly in rural areas, continue to be a cause for concern at one end of the education spectrum, with high levels of youth unemployment at the other. STL Group cannot resolve all of Ghana&rsquo;s education and employment challenges singlehandedly, but we are determined to improve our children&rsquo;s future through continuing our extra curriculum supplement to the standard syllabus and enhancing the infrastructure in which learning takes place.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', NULL, '', '', '', '', NULL, '1', '0', '0', NULL, '0', '0', '2015-09-10 18:28:39', '2016-06-11 06:49:59'),
(4, 'we-aim-to-give-every-child-in-br-ghana-an-equal-chance', '2', NULL, 'We aim to give every child in  <br />Ghana an equal chance.', '<p>SAF has carried out many projects in the fields of education, health and welfare.<br />\r\n<br />\r\nOur extra curriculum work focuses on giving individual attention to each and every child, as well as creating group projects that meet class requirements. The individual attention that these students receive is not only to promote their educational skills, but also to give them a feeling that there is someone there for them, someone who cares.</p>\r\n', '2', NULL, 'saf_message-0.png', '', 'GOAL_ALSO_ABOUT_SAF.jpg', '', NULL, '1', '0', '0', NULL, '0', '0', '2015-09-10 18:37:16', '2016-06-11 06:51:25'),
(5, 'children-are-at-the-center-of-everything-we-do-2', '1', NULL, 'Children are at the center of everything we do.', '<p>The STL-Amandi Foundation exists as a vehicle for STL Group to give back to the communities in which it works. STL invests a large portion of its budget to SAF to enable us to implement new initiatives and to provide continuing support for our existing projects.<br />\r\n<br />\r\nAt SAF we&nbsp;set ourselves basic guidelines when we undertake all new projects:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Starting from the bottom.</strong><br />\r\n	The support and investment provided is allocated to those in need.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Work in partnership</strong><br />\r\n	We fulfill our vision of a brighter future through collaboration with those we want to support.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Remember who we are working for</strong><br />\r\n	The students of the community are always at the center of our work and all projects are intended to give them practical skills to benefit them along the way.</p>\r\n	</li>\r\n</ul>\r\n', '4', NULL, '', '', '', '', NULL, '1', '0', '0', NULL, '0', '0', '2015-09-10 20:28:31', '2016-06-11 06:59:35'),
(6, 'saf-managed-a-number-of-social-projects-and-humanitarian-gestures-including', '1', NULL, 'SAF managed a number of social projects and humanitarian gestures, including:', '<ul class=\"list-style-ii\">\r\n	<li>Providing assistance and medical treatment for individuals in need.</li>\r\n	<li>Funding a mobile clinic that provides healthcare services in areas that have no access to hospitals.</li>\r\n	<li>Building and renovating schools that are hazardous to those studying in them.</li>\r\n	<li>Allocating our resources towards grants, sponsorships and donations of computer equipment, libraries and more.</li>\r\n</ul>\r\n\r\n<p>Every child deserves an opportunity to acquire what we know as &quot;the basic needs&quot;, such as shelter,<br />\r\nfood, love, security and education. SAF focuses its works in Ghana on supporting exactly that with an emphasis<br />\r\non the existing educational sector, because we believe that education is the main path to development.<br />\r\n<br />\r\nWe encourage you to read on to learn more about our projects.</p>\r\n', '5', NULL, 'saf_Helping_the_community_icon.png', '', '', '', NULL, '2', '0', '0', NULL, '0', '0', '2015-09-10 20:44:19', '2015-10-06 10:57:35'),
(7, 'community-projects', NULL, NULL, 'Community Projects', '<h2>Giving back</h2>\r\n', '0', NULL, '', '', '', '', NULL, '2', '1', '0', NULL, '0', '0', '2015-09-10 20:18:53', '2015-09-28 17:55:05'),
(8, 'philosophy-2', '1', NULL, 'Philosophy', '<p>At SAF we live and work by the premise that every child deserves to have its basic needs met in terms of shelter, food, love, security and education. We are fortunate to be able to support the provision of education for children living in the Ghanaian communities in which we work. We follow the basic principle, that education is the main path to betterment. With a solid educational foundation, Ghana&rsquo;s children will have much more improved future prospects.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h6>Vision</h6>\r\n\r\n<ul>\r\n	<li>We believe that better education is followed by a brighter future.</li>\r\n	<li>We strive to create a Ghana where there is equal opportunity for all of its children.</li>\r\n	<li>We appreciate that all children are different and deserving of individual attention.</li>\r\n</ul>\r\n', '1', NULL, '', '', '', '', NULL, '1', '1', '0', NULL, '0', '0', '2015-09-10 18:44:57', '2016-06-11 06:52:45'),
(9, 'mission', '8', NULL, 'Mission', '<ul>\r\n	<li>To give every child in Ghana a better future through education.</li>\r\n	<li>To reassure every child that there is someone in their life who cares about them.</li>\r\n	<li>Starting with the primary schools in Accra, we endeavor to reach all of Ghana&rsquo;s regions.</li>\r\n	<li>We will not give up until every child benefits from the goals we set.</li>\r\n</ul>', '3', NULL, 'saf_philosophy_icon.png', '', '', '', NULL, '1', '0', '0', NULL, '0', '0', '2015-09-10 18:47:13', '2015-09-25 10:03:33'),
(10, 'projects', NULL, NULL, 'projects', '', '0', NULL, '', '', '', '', NULL, '4', '1', '0', NULL, '0', '0', '2015-09-10 21:02:51', '2015-09-10 21:02:51'),
(11, 'dzorwulu-a-b-primary-school', '10', 'education', 'Dzorwulu A&B Primary School', '<p>SAF has improved the quality of education for children at this school in two ways. Firstly, by providing financial support through grants and sponsorships. Secondly, and perhaps more importantly, by working alongside the children and their teachers in the classrooms. This hands-on approach gives the SAF volunteers a better understanding of what is required, as well as allowing them to give support to pupils in English and other topics of interest through one-on-one tutoring. Our years of involvement in education have taught us that, above all else, children need someone they can trust and depend on.</p>\r\n', '0', NULL, '', '', 'Dzarwulu_A_B_primary_school_1-0.JPG', '', 'https://vimeo.com/187527097', '4', '0', '0', NULL, '0', '0', '2015-09-10 21:32:41', '2016-11-02 06:32:40'),
(12, 'oyibi-school', '10', 'education', 'Oyibi School', '<p>SAF&rsquo;s first project was the adoption of one of the most disadvantaged schools in the Greater Accra Region of Ghana. After full consultation with teachers and pupils:</p>\r\n\r\n<ul>\r\n	<li>SAF renovated the old school building;</li>\r\n	<li>Installed glass windows, lights and fans;</li>\r\n	<li>Connected the school to the electricity and water supply;</li>\r\n	<li>Constructed a computer laboratory and library;</li>\r\n	<li>And furnished the school with desks, chairs and cupboards for both teachers and pupils.</li>\r\n</ul>\r\n\r\n<p>SAF continues to meet the school&rsquo;s ongoing expenses and review additional requests for assistance on a case-by-case basis.</p>\r\n', '0', NULL, '', '', 'Oiby_1-0.jpg', '', '', '4', '0', '0', NULL, '0', '0', '2015-09-10 21:33:12', '2016-06-11 07:19:31'),
(13, 'gye-nyame-mobile-clinic', '10', 'medical', 'Gye Nyame Mobile Clinic', '<p>Since 2007, SAF has been funding and supporting the <a href=\"#\">Gye Nyame Mobile Clinic</a> which provides professional psychiatric services and surgical treatments to children and adults in the Western and Ashanti regions of Ghana. The clinic is the brainchild of Dr. Ori Shwarzman and Dr. Britta Budde-Schwartzman. Countless infants and children have been treated for anemia, malaria, typhoid fever, diphtheria, cholera and AIDS. Many children and adult patients have undergone minor and complex surgical procedures successfully, while others have been provided with treatment and therapy for psychological disorders.</p>\r\n', '0', NULL, '', '', 'Gye_Nyame_Mobile_Clinic_2-0.JPG', '', '', '4', '0', '0', NULL, '0', '0', '2015-09-10 21:33:41', '2015-10-05 11:13:23'),
(14, 'akplortorkor-roman-catholic-basic-school', '10', 'education', 'Akplortorkor Roman Catholic Basic School', '<p>SAF completed a total refurbishment of Akplortorkor School, which is located in Atorkor. The school structure was significantly compromised, with large horizontal cracks appearing throughout the building. Roof pillars and reinforcements were eroding and rusted, and there were holes in the roof and floor, making the school a dangerous environment for the children and their teachers. SAF reinforced the structure and re-built parts which were beyond repair. The roof, windows and shutters were replaced, new doors were installed to all the classrooms and floors were re-surfaced. In addition, a new computer laboratory was built, furnished and equipped with computers.</p>\r\n', '0', NULL, '', '', 'Akplortorkor_Roman_Catholic_Basic_School_2-0.jpg', '', '', '4', '0', '0', NULL, '0', '0', '2015-09-10 21:34:05', '2015-10-05 11:13:37'),
(15, 'supporting-a-local-ngo-2', '10', 'local-support', 'Supporting a local NGO', '<p>SAF has worked with children that were found wandering the streets with nowhere to go. We have provided them with free education in line with the local syllabus, as well as extra curriculum support. SAF also refurbished / rebuilt the local school to provide safer conditions for pupils and staff. We settled the school&rsquo;s electricity bill as they were unable to make the payment and we installed a water tank to give daily access to fresh water. During holidays, we created activities for the children with catered dinners and provided workbooks for English training.</p>\r\n', '0', NULL, '', '', 'Supporting_a_local_NGO_A-0.jpg', '', '', '4', '0', '0', NULL, '0', '0', '2015-09-10 21:34:38', '2016-06-11 08:33:09'),
(16, 'partners', NULL, NULL, 'partners', '', '0', NULL, '', '', '', '', NULL, '3', '1', '0', NULL, '0', '0', '2015-09-10 22:29:52', '2015-09-10 22:29:52'),
(17, 'contact-us', NULL, NULL, 'contact us', '', '0', NULL, '', '', '', '', NULL, '5', '1', '0', NULL, '0', '0', '2015-09-10 22:32:18', '2015-09-10 22:32:18'),
(18, 'contact-info-2', '17', NULL, 'contact info', '<p><strong>SAF (STL-AMANDI FOUNDATION)</strong><br />\r\n226 Osibisa Close Airport Residential Area<br />\r\nPO Box KIA 30408<br />\r\nAccra<br />\r\nGhana</p>\r\n\r\n<p>Tel: +233 30&nbsp;2782646/7&nbsp;<br />\r\nEmail:&nbsp;<strong>info@safghana.org</strong></p>\r\n', '0', NULL, '', '', '', '', NULL, '5', '0', '0', NULL, '0', '0', '2015-09-10 22:32:37', '2016-11-02 06:00:21'),
(19, 'amandi', '16', NULL, 'Amandi', '', '0', 'http://www.amandi.com', '', 'amandi.png', '', '', NULL, '3', '0', '0', NULL, '0', '0', '2015-09-10 22:44:56', '2015-09-10 22:44:56'),
(20, 'supertech', '16', NULL, 'SuperTech', '', '0', 'http://www.stlghana.com', '', 'stl.png', '', '', NULL, '3', '0', '0', NULL, '0', '0', '2015-09-10 22:45:37', '2015-09-10 22:45:37'),
(22, 'newsletter-2', NULL, NULL, 'newsletter', '', '0', NULL, '', '', '', '', NULL, '6', '1', '0', NULL, '0', '0', '2015-09-10 22:56:43', '2015-10-08 08:17:54'),
(23, 'renovations-2', '10', NULL, 'Renovations', '<h5>Renovation of Atorkor Village School</h5>\r\n\r\n<p>As part of SAF&rsquo;s program for advancing education in rural areas, we renovated Atorkor Village School, which included modernization of the building infrastructure and classrooms, and resolving environmental security issues, such as building collapse. In addition, we set up a media class with computers. SAF continues to provide technical and financial support to the school, including paying teachers&rsquo; wages.</p>\r\n\r\n<h5>Renovation of xxx School</h5>\r\n\r\n<p>Similarly, SAF revamped xxx School to make it structurally safe, and a suitable and encouraging place for teachers to work and children to learn. We provided new classrooms and equipment to improve the standard of educational attainment for all pupils.</p>\r\n\r\n<h5>Renovation of xxx School</h5>\r\n\r\n<p>Here again, SAF improved the fabric of the school building and provided new books, sports equipment and outdoor play areas. All enhancements were designed to be low maintenance and sustainable.</p>\r\n', '0', NULL, '', '', 'Renov_6.jpg', '', '', '4', '0', '0', NULL, '0', '1', '2015-09-19 12:03:02', '2015-09-24 19:52:36'),
(24, 'others-2', '10', NULL, 'Others', '<h5>New community clinic in Atigleme (Volta region)</h5>\r\n\r\n<p>SAF has built a local general practice medical clinic for the community in Atigleme (Volta region). This clinic is one of health posts supported by the medical staff of the Gye Nyame mobile clinic.</p>\r\n', '0', NULL, '', '', '', '', '', '4', '0', '0', NULL, '0', '1', '2015-09-19 12:03:54', '2015-09-24 19:52:46'),
(25, 'generations-of-academic-leaders-goal', NULL, NULL, 'Generations of academic leaders (GOAL)', '<p>GOAL is a newly launched SAF mentoring program that pairs second-year students at the University of Ghana and other local college students with underprivileged children in the community. A student acts as a &lsquo;big brother&rsquo; or &lsquo;big sister&rsquo; to support a child and help them realize their potential by being a positive role model. Through having responsibility for a younger child, the student learns about local social issues, develops their nurturing and leadership skills and also benefits from SAF financial support towards their education.</p>\r\n', '0', NULL, '', '', '', '', 'https://vimeo.com/187525279', '7', '1', '0', NULL, '0', '0', '2015-09-24 15:07:52', '2016-11-02 09:55:28'),
(26, 'an-independent-professional-committee', '25', NULL, 'An independent professional committee', '<p>An independent professional committee decides the pairing between child and student using the following criteria: the child needs to be from an underprivileged background, the student needs to be excelling in their studies and there must be an equal number of male and female student mentors.&nbsp;</p>\r\n', '1', NULL, '', '', 'GOAL_ALSO_ABOUT_SAF.jpg', '', NULL, '7', '1', '0', NULL, '0', '0', '2015-09-24 15:36:37', '2015-09-24 15:36:37'),
(27, 'goal-is-coordinated-by-ma-students', '25', NULL, 'GOAL is coordinated by MA students', '<p>GOAL is coordinated by MA students working in the field of education, social work or psychology, who will use this work as part of their thesis. The project has its own Enrichment and Communication Center, equipped with educational games, books, videos, art materials and computers that are available for use by the mentors with their mentees.</p>\r\n', '1', NULL, '', '', 'GOAL_IMG_2030.jpg', '', NULL, '7', '1', '0', NULL, '0', '0', '2015-09-24 15:38:22', '2015-09-24 15:38:22'),
(28, 'mentors-and-mentees', '25', NULL, 'Mentors and mentees ', '<p>Mentors and mentees will meet twice a week for two-hour sessions throughout the academic year. Meetings will be held mainly at the child&rsquo;s house with their parents&rsquo; consent. All activities, including homework, games and social outings, will be supervised and monitored by the coordinators.</p>\r\n', '1', NULL, '', '', 'GOAL_IMG_2040.jpg', '', NULL, '7', '1', '0', NULL, '0', '0', '2015-09-24 15:39:58', '2015-09-24 15:39:58'),
(29, 'relationship-between-mentor-and-mentee', '25', NULL, 'Relationship between mentor and mentee', '<p>While the intention is to build a fulfilling relationship between the mentor and the mentee, most of the children will have complex educational, emotional and behavioral needs, and the GOAL coordinators are responsible for training and supporting the student mentors in this new and challenging role. All mentors will attend a coordinator-led workshop before they begin mentoring and will subsequently meet monthly with the coordinators throughout the academic year.</p>\r\n', '2', NULL, '', '', '', '', NULL, '7', '1', '0', NULL, '0', '0', '2015-09-24 15:41:25', '2015-09-24 15:41:25'),
(30, 'saf-intends-goal-to-be-a-self-perpetuating-ongoing-project', '25', NULL, 'SAF intends GOAL to be a self-perpetuating ongoing project.', '<p>SAF intends GOAL to be a self-perpetuating ongoing project. As the mentees grow in confidence and maturity they, in turn, will become students and mentors to the next cohort of school children. Following graduation, the student mentors will move into responsible roles within their communities, well equipped to lead the next generation and continue the cycle.</p>\r\n', '3', NULL, '', '', '', '', NULL, '7', '1', '0', NULL, '0', '0', '2015-09-24 15:43:00', '2015-09-24 15:43:00'),
(31, 'during-this-pilot-year-50-university-of-ghana-second-year-students-will-mentor-100-second-grade-pupils-from-dzorwulu-a-b-primary-school', '25', NULL, 'During this pilot year, 50 University of Ghana second-year students will mentor 100 second-grade pupils from Dzorwulu A&B Primary School.', '<p>For this, SAF has made up to 50 scholarships available for the mentees at the University of Ghana. After this initial phase, we will be looking to extend this worthwhile project by providing additional scholarships.&nbsp;</p>\r\n', '4', NULL, '', '', 'GOAL_WIDE.jpg', '', NULL, '7', '1', '0', NULL, '0', '0', '2015-09-24 15:47:59', '2016-01-20 02:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `slug`, `name`, `created`, `modified`) VALUES
(1, 'education', 'Education', '2015-10-05 00:00:00', '2015-10-05 00:00:00'),
(2, 'medical', 'Medical', '2015-10-05 00:00:00', '2015-10-05 00:00:00'),
(3, 'local-support', 'Local Support', '2015-10-05 00:00:00', '2015-10-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrator', '2012-07-03 20:15:14', '2012-07-03 20:15:14'),
(2, 'User', '2012-07-11 18:38:46', '2012-07-11 18:38:46'),
(3, 'Clients', '2015-06-17 10:58:29', '2015-06-17 10:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(160) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role_id`, `created`, `modified`) VALUES
(1, 'Administrator', 'admin', '45f54f46144393e5be431a9092857b7f49782128', 1, '2012-07-03 20:20:22', '2015-01-09 03:08:34'),
(2, 'SAF Admin', 'SAF_Admin', 'f557fdcd57aca3608af932dba7ea3bc5d627b835', 1, '2015-09-19 13:11:44', '2016-02-29 02:48:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=924;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
