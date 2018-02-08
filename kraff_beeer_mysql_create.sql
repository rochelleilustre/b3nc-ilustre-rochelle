CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`role_id` varchar(255) NOT NULL,
	`image` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	`contact` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` INT(11) NOT NULL,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`category_id` varchar(255) NOT NULL,
	`quantity` INT NOT NULL,
	`price` INT NOT NULL,
	`stocks` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT(11) NOT NULL,
	`order_number` INT(11) NOT NULL AUTO_INCREMENT,
	`customer_id` INT(11) NOT NULL AUTO_INCREMENT,
	`total` DECIMAL(11) NOT NULL AUTO_INCREMENT,
	`order_id` DECIMAL(11) NOT NULL,
	`status_id` varchar(255) NOT NULL,
	`payment_status` varchar NOT NULL,
	`order_date` varchar NOT NULL,
	`staff_id` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_items` (
	`id` INT(11) NOT NULL,
	`subtotal` DECIMAL(11) NOT NULL,
	`item_id` varchar(255) NOT NULL,
	`quantity` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` INT(11) NOT NULL,
	`category` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `status` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`status` varchar(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `role` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`role` varchar(11) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `payment` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`status` varchar NOT NULL AUTO_INCREMENT,
	`payment_date` DATETIME NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `role`(`id`);

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`customer_id`) REFERENCES `users`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`order_id`) REFERENCES `order_items`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk2` FOREIGN KEY (`status_id`) REFERENCES `status`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk3` FOREIGN KEY (`payment_status`) REFERENCES `payment`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk4` FOREIGN KEY (`staff_id`) REFERENCES `users`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk0` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`);

