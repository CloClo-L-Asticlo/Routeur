-- MySQL Script generated by MySQL Workbench
-- Mon May 31 10:47:56 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Auto-Route
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Auto-Route` ;

-- -----------------------------------------------------
-- Schema Auto-Route
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Auto-Route` DEFAULT CHARACTER SET utf8 ;
USE `Auto-Route` ;

-- -----------------------------------------------------
-- Table `Auto-Route`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Auto-Route`.`User` ;

CREATE TABLE IF NOT EXISTS `Auto-Route`.`User` (
  `idUser` INT(11) NOT NULL AUTO_INCREMENT,
  `nameUser` VARCHAR(45) NOT NULL,
  `emailUser` VARCHAR(65) NOT NULL,
  `passwordUser` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE INDEX `idUser_UNIQUE` (`idUser` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Auto-Route`.`Information`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Auto-Route`.`Information` ;

CREATE TABLE IF NOT EXISTS `Auto-Route`.`Information` (
  `idInformation` INT(11) NOT NULL AUTO_INCREMENT,
  `idUser` INT(11) NOT NULL,
  `dataInformation` VARCHAR(500) NULL,
  PRIMARY KEY (`idInformation`),
  UNIQUE INDEX `idInformation_UNIQUE` (`idInformation` ASC) ,
  INDEX `idUser_idx` (`idUser` ASC) ,
  CONSTRAINT `idUser`
    FOREIGN KEY (`idUser`)
    REFERENCES `Auto-Route`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
