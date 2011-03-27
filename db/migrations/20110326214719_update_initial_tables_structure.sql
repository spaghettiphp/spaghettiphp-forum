ALTER TABLE `boards`
  CHANGE COLUMN `name` `title` varchar(255),
  ENGINE=InnoDB
  DEFAULT CHARSET=utf8;

DROP TABLE `roles`;

ALTER TABLE `topics`
  ENGINE=InnoDB
  DEFAULT CHARSET=utf8;

ALTER TABLE `users`
  DROP COLUMN `role_id`,
  DROP INDEX `role_id`,
  ADD COLUMN `modified` datetime NOT NULL AFTER `created`,
  ENGINE=InnoDB
  DEFAULT CHARSET=utf8;