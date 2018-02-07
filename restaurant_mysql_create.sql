CREATE TABLE `menu` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`category_id` INT(11) NOT NULL,
	`description` varchar(255) NOT NULL,
	`price` DECIMAL NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `customers` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`delivery_address` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` INT(11) NOT NULL,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `staff` (
	`id` INT(11) NOT NULL,
	`username` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_items` (
	`id` INT(11) NOT NULL,
	`menu_id` INT(11) NOT NULL,
	`quantity` INT(11) NOT NULL,
	`order_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`customer_id` INT(11) NOT NULL,
	`staff_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `menu` ADD CONSTRAINT `menu_fk0` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk0` FOREIGN KEY (`menu_id`) REFERENCES `menu`(`id`);

ALTER TABLE `order_items` ADD CONSTRAINT `order_items_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`staff_id`) REFERENCES `staff`(`id`);

