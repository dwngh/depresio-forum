
CREATE SCHEMA `tc_forum`;

CREATE TABLE `tc_forum`.`users` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`username` VARCHAR(255) NOT NULL , 
	`password` VARCHAR(255) NOT NULL , 
	`created` DATETIME NOT NULL , 
	`modified` DATETIME NOT NULL , 
	PRIMARY KEY (`id`), UNIQUE (`username`)) ENGINE = InnoDB;

	
CREATE TABLE `tc_forum`.`threads` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(255) NOT NULL , 
	`user_id` INT NOT NULL , 
	`created` DATETIME NOT NULL , 
	`archived` BOOLEAN NOT NULL DEFAULT FALSE , 
	PRIMARY KEY (`id`), 
	FULLTEXT (`name`),
	FOREIGN KEY user_key(user_id) REFERENCES users(id)
) ENGINE = InnoDB;
	
CREATE TABLE `tc_forum`.`posts` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`content` TEXT NOT NULL , 
	`user_id` INT NOT NULL , 
	`thread_id` INT NOT NULL , 
	`modified` DATETIME NOT NULL , 
	PRIMARY KEY (`id`),
	
) ENGINE = InnoDB;