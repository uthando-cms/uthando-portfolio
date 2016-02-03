
CREATE TABLE IF NOT EXISTS `portfolio` (
  `portfolioId` int(10) unsigned NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `portfolio` ADD PRIMARY KEY (`portfolioId`);

ALTER TABLE `portfolio` MODIFY `portfolioId` int(10) unsigned NOT NULL AUTO_INCREMENT;
