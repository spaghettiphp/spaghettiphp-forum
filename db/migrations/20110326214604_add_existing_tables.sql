CREATE TABLE `boards` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

CREATE TABLE `profiles` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(12) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

CREATE TABLE `roles` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `topics` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `board_id` int(12) NOT NULL,
  `topic_id` int(12) unsigned NOT NULL,
  `user_id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `format` varchar(25) NOT NULL DEFAULT 'textile',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

CREATE TABLE `users` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
