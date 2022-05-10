CREATE DATABASE `registration`;
USE `registration`;

CREATE TABLE `users` (
	`id` INT(100) NOT NULL AUTO_INCREMENT,
	`avatar` VARCHAR(100),
	`username` VARCHAR(100),
	`surname` VARCHAR(100),
	`password` VARCHAR(100),
	`email` VARCHAR(100),
	`created_at` TIMESTAMP,
	PRIMARY KEY (`id`)
); 