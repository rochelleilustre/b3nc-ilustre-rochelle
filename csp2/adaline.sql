CREATE TABLE `purchase` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`reference_number` varchar(255) NOT NULL UNIQUE,
	`total` DECIMAL NOT NULL,
	`shipping_status_id` INT NOT NULL,
	`customer_id` INT(5) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `product` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`product_name` varchar(255) NOT NULL,
	`price` DECIMAL NOT NULL,
	`volume_id` INT(11) NOT NULL,
	`description` varchar(255) NOT NULL,
	`gender_id` INT(11) NOT NULL,
	`brand_id` INT(3) NOT NULL,
	`stocks` INT(11) NOT NULL,
	`packaging_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL UNIQUE,
	`image` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`contact` varchar(255) NOT NULL,
	`role` BINARY NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `shipping_status` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `my_cart` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`product_id` INT(11) NOT NULL,
	`quantity` INT(11) NOT NULL,
	`subtotal` DECIMAL(11) NOT NULL,
	`buyer_id` INT(11) NOT NULL,
	`date` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `gender` (
	`id` INT(1) NOT NULL AUTO_INCREMENT,
	`name` varchar NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `volume` (
	`id` INT(2) NOT NULL AUTO_INCREMENT,
	`name` varchar NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `brand` (
	`id` INT(3) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `packaging` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `customer` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL UNIQUE,
	`image` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`address` TEXT(255) NOT NULL,
	`contact` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `guest` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL UNIQUE,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`address` TEXT(255) NOT NULL,
	`contact` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `place_order` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`product_id` INT(11) NOT NULL,
	`quantity` INT(11) NOT NULL,
	`subtotal` DECIMAL(11) NOT NULL,
	`buyer_id` INT(11) NOT NULL,
	`reference_number` varchar(10) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `purchase` ADD CONSTRAINT `purchase_fk0` FOREIGN KEY (`shipping_status_id`) REFERENCES `shipping_status`(`id`);

ALTER TABLE `product` ADD CONSTRAINT `product_fk0` FOREIGN KEY (`volume_id`) REFERENCES `volume`(`id`);

ALTER TABLE `product` ADD CONSTRAINT `product_fk1` FOREIGN KEY (`gender_id`) REFERENCES `gender`(`id`);

ALTER TABLE `product` ADD CONSTRAINT `product_fk2` FOREIGN KEY (`brand_id`) REFERENCES `brand`(`id`);

ALTER TABLE `product` ADD CONSTRAINT `product_fk3` FOREIGN KEY (`packaging_id`) REFERENCES `packaging`(`id`);

ALTER TABLE `my_cart` ADD CONSTRAINT `my_cart_fk0` FOREIGN KEY (`product_id`) REFERENCES `product`(`id`);

ALTER TABLE `place_order` ADD CONSTRAINT `place_order_fk0` FOREIGN KEY (`product_id`) REFERENCES `product`(`id`);

ALTER TABLE `place_order` ADD CONSTRAINT `place_order_fk1` FOREIGN KEY (`reference_number`) REFERENCES `purchase`(`reference_number`);

