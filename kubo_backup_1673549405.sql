# ABMS : MySQL database backup
#
# Generated: Thursday 12. January 2023
# Hostname: localhost
# Database: kubo
# --------------------------------------------------------


#
# Delete any existing table `accessorylist`
#

DROP TABLE IF EXISTS `accessorylist`;


#
# Table structure of table `accessorylist`
#



CREATE TABLE `accessorylist` (
  `accessoryid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`accessoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `businessinfo`
#

DROP TABLE IF EXISTS `businessinfo`;


#
# Table structure of table `businessinfo`
#



CREATE TABLE `businessinfo` (
  `n` int(11) NOT NULL AUTO_INCREMENT,
  `contactnumber` text NOT NULL,
  `email` text NOT NULL,
  `gcash_name` text DEFAULT NULL,
  `gcash_number` text DEFAULT NULL,
  PRIMARY KEY (`n`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO businessinfo VALUES("1","09287605387","weakadika@yahoo.com","David Salon","09204736933");



#
# Delete any existing table `colorlist`
#

DROP TABLE IF EXISTS `colorlist`;


#
# Table structure of table `colorlist`
#



CREATE TABLE `colorlist` (
  `colorid` int(11) NOT NULL AUTO_INCREMENT,
  `colorname` text NOT NULL,
  PRIMARY KEY (`colorid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `furniturelist`
#

DROP TABLE IF EXISTS `furniturelist`;


#
# Table structure of table `furniturelist`
#



CREATE TABLE `furniturelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `sample` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO furniturelist VALUES("4","Bamboo Rocking Chair","2800","22122022054823a1.jpg");
INSERT INTO furniturelist VALUES("5","Colored Weaved Rattan Dining Chair","1200","22122022054913a2.jpg");
INSERT INTO furniturelist VALUES("6","Gemelina 7 Seater Sala Set","28000","22122022055000a3.jpg");
INSERT INTO furniturelist VALUES("7","Madre Cacao Wooden Varnished Sala Set","30000","22122022055024a4.jpg");
INSERT INTO furniturelist VALUES("8","Magkuno Ironwood Furniture Set","18000","22122022055049a5.jpg");
INSERT INTO furniturelist VALUES("9","Maulawin Sala Set Natural Varnished","33000","22122022055113a6.jpg");
INSERT INTO furniturelist VALUES("10","Molave Coffee Table Set","22500","22122022055134a7.jpg");
INSERT INTO furniturelist VALUES("11","Narra Sala Set 311 Natural Varnished","10800","22122022055805a8.jpg");
INSERT INTO furniturelist VALUES("12","Natural Color Weave Seat with Metal Frame Chair","1350","22122022055826a9.jpg");
INSERT INTO furniturelist VALUES("13","Presossa Rattan Weave Chair","1899","22122022055921b1.jpg");
INSERT INTO furniturelist VALUES("14","Rattan Coffee Table with Weave Rattan Chair Set","4450","22122022055950b2.jpg");
INSERT INTO furniturelist VALUES("15","Yman's Ordinary Hanging Swing Chair","1599","22122022060019b3.jpg");
INSERT INTO furniturelist VALUES("16","Yman's Solid Metal Swing Chair","2699","22122022060039b4.jpg");
INSERT INTO furniturelist VALUES("17","Yman's Swing Chair 01","2199","22122022060101b5.jpg");



#
# Delete any existing table `homemessages`
#

DROP TABLE IF EXISTS `homemessages`;


#
# Table structure of table `homemessages`
#



CREATE TABLE `homemessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `hutsizelist`
#

DROP TABLE IF EXISTS `hutsizelist`;


#
# Table structure of table `hutsizelist`
#



CREATE TABLE `hutsizelist` (
  `sizeid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `sample` text DEFAULT NULL,
  PRIMARY KEY (`sizeid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO hutsizelist VALUES("2","Cottage Type 4x4","12000","221220220130254x4.jpg");
INSERT INTO hutsizelist VALUES("3","Cottage Type 5x5","15000","22122022013428");
INSERT INTO hutsizelist VALUES("4","Cottage Type 6x6","23000","22122022013541");
INSERT INTO hutsizelist VALUES("5","Cottage Type 7x7","24000","22122022013606");
INSERT INTO hutsizelist VALUES("6","Cottage Type 7x10","30000","221220220137367x10.jpg");
INSERT INTO hutsizelist VALUES("7","Cottage Type 7x12","35000","221220220137527x12.jpg");
INSERT INTO hutsizelist VALUES("8","Room Type 5x5","25000","22122022014120");
INSERT INTO hutsizelist VALUES("9","Room Type 6x6","32000","22122022014136");
INSERT INTO hutsizelist VALUES("10","Room Type 7x7","37000","22122022014153");
INSERT INTO hutsizelist VALUES("11","Room Type 7x10","40000","22122022014214");
INSERT INTO hutsizelist VALUES("12","Room Type 7x12","45000","22122022014222");



#
# Delete any existing table `materiallist`
#

DROP TABLE IF EXISTS `materiallist`;


#
# Table structure of table `materiallist`
#



CREATE TABLE `materiallist` (
  `materialid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`materialid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `projects`
#

DROP TABLE IF EXISTS `projects`;


#
# Table structure of table `projects`
#



CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `customer` text NOT NULL,
  `hutsize` text NOT NULL,
  `huttype` text NOT NULL,
  `color` text NOT NULL,
  `cost` int(11) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `users`
#

DROP TABLE IF EXISTS `users`;


#
# Table structure of table `users`
#



CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `avatar` text DEFAULT NULL,
  `number` text NOT NULL,
  `email` text DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO users VALUES("1","admin","d033e22ae348aeb5660fc2140aec35850c4da997","admin","Developer","07102022043143vex2copy.png","09287605386","windowsxdmi@gmail.com");



#
# Delete any existing table `woodlist`
#

DROP TABLE IF EXISTS `woodlist`;


#
# Table structure of table `woodlist`
#



CREATE TABLE `woodlist` (
  `woodid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`woodid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


