-- MySQL Script generated by MySQL Workbench
-- Sat Oct  6 12:07:06 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema FID
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `FID` ;

-- -----------------------------------------------------
-- Schema FID
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `FID` DEFAULT CHARACTER SET utf8 ;
USE `FID` ;

-- -----------------------------------------------------
-- Table `FID`.`type_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FID`.`type_users` ;

CREATE TABLE IF NOT EXISTS `FID`.`type_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `description` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FID`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FID`.`users` ;

CREATE TABLE IF NOT EXISTS `FID`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `name` VARCHAR(45) NULL,
  `last_name` VARCHAR(100) NULL,
  `telephone` VARCHAR(45) NULL,
  `address` VARCHAR(100) NULL,
  `avatar_image` VARCHAR(200) NULL,
  `type_users_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FID`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FID`.`categories` ;

CREATE TABLE IF NOT EXISTS `FID`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FID`.`subcategories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FID`.`subcategories` ;

CREATE TABLE IF NOT EXISTS `FID`.`subcategories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `categories_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FID`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FID`.`products` ;

CREATE TABLE IF NOT EXISTS `FID`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `product_code` VARCHAR(45) NOT NULL,
  `product_type` VARCHAR(45) NOT NULL,
  `size` VARCHAR(45) NULL,
  `color` VARCHAR(45) NULL,
  `is_popular` TINYINT NULL,
  `price` FLOAT NOT NULL,
  `price_list` FLOAT NULL,
  `quantity` DOUBLE NULL,
  `description` VARCHAR(200) NULL,
  `image` VARCHAR(200) NULL,
  `categories_id` INT NOT NULL,
  `subcategories_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FID`.`purcharse_orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FID`.`purcharse_orders` ;

CREATE TABLE IF NOT EXISTS `FID`.`purcharse_orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `total` FLOAT NULL,
  `purcharse_order_date` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
COMMENT = '		';


-- -----------------------------------------------------
-- Table `FID`.`purcharse_order_details`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FID`.`purcharse_order_details` ;

CREATE TABLE IF NOT EXISTS `FID`.`purcharse_order_details` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantity` DOUBLE NOT NULL,
  `price` FLOAT NOT NULL,
  `products_id` INT NOT NULL,
  `purcharse_orders_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
