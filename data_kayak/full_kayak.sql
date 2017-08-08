/*
Navicat MySQL Data Transfer

Source Server         : MySQL Local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : kayak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-09 06:33:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bookservices
-- ----------------------------
DROP TABLE IF EXISTS `bookservices`;
CREATE TABLE `bookservices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_id` int(11) NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_service` date NOT NULL,
  `places_of_pick_up` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_of_pick_up` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_adults` int(11) NOT NULL,
  `number_of_children` int(11) NOT NULL,
  `your_request` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of bookservices
-- ----------------------------
INSERT INTO `bookservices` VALUES ('1', '1', '01684066046', 'thanhdongqn94@gmail.com', '2', 'Danang airport to Danang', '2017-07-31', '1', '09:30 PM', '1', '1', '1', '0');

-- ----------------------------
-- Table structure for booktours
-- ----------------------------
DROP TABLE IF EXISTS `booktours`;
CREATE TABLE `booktours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `would_you_like_to_go_on_a` varchar(255) DEFAULT NULL,
  `desired_start_date` datetime DEFAULT NULL,
  `number_of_adults` int(11) DEFAULT NULL,
  `number_of_children_under4years_old` int(11) DEFAULT NULL,
  `number_of_children_over4years_old` int(11) DEFAULT NULL,
  `any_special_requests` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of booktours
-- ----------------------------
INSERT INTO `booktours` VALUES ('2', '1', 'FULL DAY PADDLE – CAM KIM ISLAND', 'Đức Long Nguyễn', '1222444992', 'ndlong@sdc.ud.edu.vn', null, null, null, null, null, null, '1', '2017-07-09 05:17:10', '2017-07-09 10:46:49');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `status` bit(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Tours', 'Tag', 'Description', '0', '', '2017-06-28 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('2', 'Services', null, null, '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('3', 'Responsible Travel', null, null, '0', '', '2017-06-28 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('4', 'Hafl Day', null, null, '1', '', '2017-06-28 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('5', 'Full day', null, null, '1', '', '2017-06-28 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `categories` VALUES ('6', '2 Day 1 Night', null, null, '1', '', '2017-06-28 00:00:00', '2017-07-09 10:51:16');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_email2` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_phone2` varchar(255) DEFAULT NULL,
  `contact_add` varchar(255) DEFAULT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'Hoi An Kayak Tour', 'hoiankayaktours@gmail.com', 'info@hoiankayaktours.com', '+84 9 7943 7338', '+84 9 7943 7338', 'Thuan Tinh Pier - Tran Nhan Tong<br/>StreetHamlet 2 Cam Thanh Village,  <br/> Hoi An City, Vietnam', '0962112102', null, '2017-08-06 12:38:53');

-- ----------------------------
-- Table structure for custom_link
-- ----------------------------
DROP TABLE IF EXISTS `custom_link`;
CREATE TABLE `custom_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_link
-- ----------------------------
INSERT INTO `custom_link` VALUES ('1', '1', 'category name', 'http://qno.ndlong.me/', null, '', '2017-07-30 09:53:32', '2017-07-30 09:53:32');
INSERT INTO `custom_link` VALUES ('2', '2', 'tour services', 'http://unl.cn', null, '', '2017-07-30 09:53:51', '2017-07-30 09:53:51');
INSERT INTO `custom_link` VALUES ('3', '2', 'category name', 'http://qno.ndlong.me/', null, '', '2017-07-30 09:55:57', '2017-07-30 09:56:29');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image_feature` varchar(1000) DEFAULT NULL,
  `videos` varchar(255) NOT NULL,
  `intro` text,
  `content` text,
  `status` bit(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('2', 'RIVER CLEAN UP', 'tags', 'description', 'top', '3', 'images/project/Pm4dObYc08CDOBt86Y5xmod0oF5rLuGl84rXIKs7.jpeg,images/project/6Ymi4rHWcVCag40uibqsKv0vTifZWunF9mGQ1KPt.jpeg,images/project/o8KFbbXCbYlab4qlklkpaTnl0WiVmncOjeB7cZhQ.jpeg,images/project/eCAVuMCB7KQjPPffYPyYAEYVI7OkAVeQowxgvrQ5.jpeg,images/project/OBBm2t5LOmDUQfVCbVvIGOhIuwOZAsD98GkZ8iwu.jpeg,', 'https://www.youtube.com/watch?v=kPGcsfpWpFo', 'River clean up is organized every week by Hoi An Kayak tours. It is organized to make inspiration and encourage for the local people and tourist, cleaning up the Thu Bon river together, advancing their awareness about the enviroment', '<p>River clean up is organized every week by Hoi An Kayak tours. It is organized to make inspiration and encourage for the local people and tourist, cleaning up the Thu Bon river together, advancing their awareness about the enviroment</p>\r\n\r\n<p>&nbsp;</p>', '', '2017-07-09 11:32:29', '2017-07-09 11:58:35');
INSERT INTO `news` VALUES ('3', 'project 1', 'tag', 'description', 'top', '3', 'images/project/e4jtky1CFEjS1lezShRjcXmkRDNeQXOyeTPncvVq.jpeg', 'https://www.youtube.com/watch?v=nix0kfgSQsM', 'this is intro', '<h1><strong>Detail</strong></h1>\r\n\r\n<h1><strong>The detail</strong></h1>', '', '2017-08-07 13:59:39', '2017-08-07 13:59:39');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transfer_from` int(11) NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distance` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `price_4seat` int(11) NOT NULL,
  `price_7seat` int(11) NOT NULL,
  `price_16seat` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('1', '1', 'Danang airport to Danang', '35', '40', '1000', '900', '800', '1');
INSERT INTO `services` VALUES ('2', '1', 'Danang airport to Hoi An', '35', '40', '1000', '900', '800', '1');
INSERT INTO `services` VALUES ('3', '1', 'Danang airport to Lang Co beach', '35', '40', '1000', '900', '800', '1');
INSERT INTO `services` VALUES ('4', '1', 'Danang airport to Hue', '35', '40', '1000', '900', '800', '1');
INSERT INTO `services` VALUES ('5', '1', 'Danang airport to Hoi An', '35', '40', '1000', '900', '800', '1');
INSERT INTO `services` VALUES ('6', '2', 'Hoi An to Hue via Hai Van tunnels', '35', '40', '1000', '900', '800', '1');

-- ----------------------------
-- Table structure for slides
-- ----------------------------
DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` bit(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slides
-- ----------------------------
INSERT INTO `slides` VALUES ('4', 'ABC', 'images/slides/jEWxGd89lzM8nKOxhdOqINY1iAfXUtWm9juWIu9P.jpeg', 'de', '0', '0', '\0', '2017-07-09 13:04:51', '2017-07-09 13:22:24');
INSERT INTO `slides` VALUES ('5', 'slide 2', 'images/slides/DzoqGK2UCy4Tx3FhkmqP86pSylHfEVw3aHvprnFL.jpeg', 'arival', '0', '0', '\0', '2017-07-09 13:05:30', '2017-07-09 13:22:12');

-- ----------------------------
-- Table structure for tour_services
-- ----------------------------
DROP TABLE IF EXISTS `tour_services`;
CREATE TABLE `tour_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tour_services
-- ----------------------------
INSERT INTO `tour_services` VALUES ('1', 'kayak 2', 'images/tour_service/ooCThICRwauFqPKY4mjB3MiRtZTkFJ6vQZQoYWV4.png', null, '2017-07-30 09:01:15', '2017-07-30 09:03:42');
INSERT INTO `tour_services` VALUES ('2', 'Camping', 'images/tour_service/YJy8xprioh97bJg5NWyP2PMmD3XxJTkLCtQDuTAz.png', 'this is link', '2017-07-30 09:04:07', '2017-07-30 09:04:59');
INSERT INTO `tour_services` VALUES ('3', 'Cycling', 'images/tour_service/jdswDfig7vmD3YZa72XKhQmXEYlkk7BXTN005pie.png', 'http://qno.ndlong.me/', '2017-07-30 09:04:31', '2017-07-30 09:04:31');

-- ----------------------------
-- Table structure for tours
-- ----------------------------
DROP TABLE IF EXISTS `tours`;
CREATE TABLE `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `image_feature` varchar(255) DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `intro` text,
  `content` text,
  `pickup` varchar(500) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `services` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` bit(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tours
-- ----------------------------
INSERT INTO `tours` VALUES ('11', 'FULL DAY PADDLE – CAM KIM ISLAND', 'this is tag', 'this is description', '5', 'images/tours/jba26O1rhhfMsHqCF4DSfMzycxezsMDnbkbXDe16.jpeg', 'images/tours/Y9KLnM2qMYIRh8WoFQtu5GHEXsTYDCDUIMEiS18b.jpeg,images/tours/mLavq8NDcCTYk4sgLmFLPvBjvU6O0cUbFg5FPCKA.jpeg,images/tours/1E7eqsQZFekk1AjtFjZw0BmKrX4tpRWuc9SuuRsW.jpeg,', null, 'This full day paddle kayak tour is geared towards those who are up for a bit of a challenge, as it takes in some 24km of paddling. You will have a full day paddling on the Thu Bon River to Cam Kim Island.', '<p><strong>Tour Program&nbsp;</strong></p>\r\n\r\n<p>This full day paddle kayak tour is geared towards those who are up for a bit of a challenge, as it takes in some 24km of paddling. You will have a full day paddling on the Thu Bon River to Cam Kim Island. On this unique adventure,&nbsp; your hard work will be rewarded by all the great sights of the Thu Bon River and you will witness firsthand the importance of the river to the Vietnamese people, their culture and the economy. The daily life of local people around the island and the beauty of the natural environment will give you an unforgettable memory.</p>\r\n\r\n<p>Cam Kim Island is a great day trip to escape the busy town of Hoi An. It is opportunity to experience rural living from the view of the river, all within a short distance of town. The island is a beautiful rural area, with a lot of vegetation, little temples and nice rice fields.</p>\r\n\r\n<p>Lunch is included in the tour along with some light refreshments and water, it can be&nbsp; either a picnic lunch on the island or a a local restaurant stop, depending on the weather</p>\r\n\r\n<h3><strong>WHAT IS PROVIDED?</strong></h3>\r\n\r\n<p>Return transfers to/from hotel, English speaking guide, kayak &amp; paddle, life jacket, drybag, picnic lunch, light refreshments and drinking water.</p>\r\n\r\n<h3><strong>WHAT IS NOT INCLUDED?</strong></h3>\r\n\r\n<p>Additional food and beverage, personal expenses and any other items not mentioned in inclusion list.</p>\r\n\r\n<h3><strong>PRICE</strong></h3>\r\n\r\n<p>1-2 pax, $87 per person<br />\r\n3-4 pax, $75 per person<br />\r\n5-6 pax, $65 per person<br />\r\n7 pax +, please contact us for large group pricing</p>', '8h00 Am', 'Full Day', ',2,3', '87$', null, '', '2017-07-09 02:43:08', '2017-07-09 04:48:34');
INSERT INTO `tours` VALUES ('12', 'HALF DAY PADDLE TO TRA QUE ORGANIC VILLAGE ORGANIC VILLAGE OKE LONG', null, null, '4', 'images/tours/npnGl5PTZWcb42rayewMM6OUTbQV3kt24UF1rVp0.jpeg', 'images/tours/T5LjgQYcaXOQGVrhjBMIng4HH1RpielBYHBcNC31.jpeg,images/tours/0up8DxqSDPP5mLe31xlL5IKCr5sAw69lIrB11RxX.jpeg,images/tours/En3nu4ZXf0S7vjhjteEeoLl4BZECoDgu7TDcYB8K.jpeg,', null, 'We will pick you up at your hotel in Hoi An and bring you to our office. The trip will begin with kayaking on the Thu Bon River and then out onto the Tra Que River – the best kayaking route in Hoi An.', '<h2><big><strong>Tour program:</strong></big></h2>\r\n\r\n<p>We will pick you up at your hotel in Hoi An and bring you to our office. The trip will begin with kayaking on the Thu Bon River and then out onto the Tra Que River &ndash; the best kayaking route in Hoi An. This is a wonderful opportunity to see life on the river, traditional fishing methods, do a spot of bird watching and observe our community at play. Interact with the fishermen and women.</p>\r\n\r\n<p>We put down the paddles midway through the tour to take a short walk to Tra Que Organic Village. Here you will learn how the local people plant a variety of herbs and vegetables. Take a breather and enjoy a refreshing special drink made from local herbs.</p>\r\n\r\n<p><em>Feb to Sep: the afternoon session gives the opportunity to admire the beauty of the sun setting over the river as you paddle back &ndash; it is magical!</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>WHAT IS PROVIDED?</strong></h2>\r\n\r\n<p>Return transfers to/from hotel, English speaking guide, kayak &amp; paddle, life jacket, drybag and drinking water.</p>\r\n\r\n<h2><strong>WHAT IS NOT INCLUDED?</strong></h2>\r\n\r\n<p>Additional food and beverage, personal expenses and any other items not mentioned in inclusion list.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>PRICE</strong></h2>\r\n\r\n<p>1-2 pax, $45 per person<br />\r\n3-4 pax, $37 per person<br />\r\n5-6 pax, $31 per person<br />\r\n7 pax +, please contact us for large group pricing<br />\r\n<strong>Children polisy&nbsp;:&nbsp;</strong>free for children under 5 years old , &nbsp;children from 6 &ndash; 10 years old 50% charge , up to 10 years old 100% charge&nbsp;</p>', 'Morning 8,30 and afternoon 13.00', '4,30 hours', ',2,3', '20', null, '', '2017-07-09 03:11:54', '2017-07-17 13:02:40');
INSERT INTO `tours` VALUES ('13', 'tour test service', 'tag', 'this is description', '4', 'images/tours/n5JglXe9rwAPmLRBsA4476dczmuLKlqZ9VkhrUMG.jpeg', 'images/tours/GXt7DMUQnPkHYxCanGFxErfdeC5nt4nwtl3KgDzu.jpeg,images/tours/F1TiyGNaNra0UecMTo450TClLF9QtZhCgAM5tLc9.jpeg,images/tours/TXcuFm9axQYZbNL7yX0mLwNb2epywxzrWjBb39Mv.jpeg,', null, 'intro', '<p>this is content</p>', 'pickup', 'duration', ',2,35', '85', null, '', '2017-08-06 13:50:40', '2017-08-06 13:52:46');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Long', 'mrlong.itqn@gmail.com', '$2y$10$7vu.WejGyPJx9gJmglxleOODkkBgm5ZNqbszUkJWq76ZZw5NRPGq2', '2BCmt9xN2My6qbR8027z0upN6Lrb8xnqImL4jfd1fqldhkrKVKjnm9qvoPDQ', '2017-07-02 14:45:31', '2017-07-02 14:45:31');
