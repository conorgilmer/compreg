CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` char(1) not null,
  `icu_code` int(4) not null,
  `icu_rating` int(4) not null,
  `fide_rating` int(4) not null,
  `blitz_rating` int(4) not null,
  `federation` char(3)  not null,
  `tstamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;
