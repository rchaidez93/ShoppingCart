
CREATE TABLE `books_rating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(13) NOT NULL DEFAULT '',
  `one_star` int(10) unsigned NOT NULL DEFAULT '0',
  `two_star` int(10) unsigned NOT NULL DEFAULT '0',
  `three_star` int(10) unsigned NOT NULL DEFAULT '0',
  `four_star` int(10) unsigned NOT NULL DEFAULT '0',
  `five_star` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10033 DEFAULT CHARSET=latin1