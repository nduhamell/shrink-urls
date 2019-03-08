CREATE TABLE IF NOT EXISTS `urls` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `url` varchar(50) NOT NULL,
 `entry` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );