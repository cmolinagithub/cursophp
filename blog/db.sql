CREATE TABLE `dbblog`.`contenido` 
( `id` INT NOT NULL AUTO_INCREMENT 
, `titulo` VARCHAR(50) NOT NULL , `fecha` DATETIME NOT NULL 
, `comentario` TEXT NOT NULL , `imagen` VARCHAR(100) NOT NULL 
, PRIMARY KEY (`id`)) ENGINE = InnoDB;
