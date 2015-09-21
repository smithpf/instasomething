CREATE DATABASE IF NOT EXISTS instasomething ;

CREATE TABLE `Posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `file_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


ALTER TABLE `Posts` ADD `post_date` datetime 
