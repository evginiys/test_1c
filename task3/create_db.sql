CREATE TABLE `1с`.`book`
( `ISBN` INT(250) NOT NULL AUTO_INCREMENT ,
 `pages` INT(255) NOT NULL
, `name` VARCHAR(100) NOT NULL ,
  `date` DATE NOT NULL
, PRIMARY KEY (`ISBN`)) ENGINE = InnoDB;

CREATE TABLE `1с`.`genre`
( `id` INT(250) NOT NULL ,
 `name` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `1с`.`author`
( `id` INT(250) NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(250) NOT NULL ,
 `surname` VARCHAR(250) NOT NULL ,
  PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `1с`.`book_genre`
( `id` INT(250) NOT NULL AUTO_INCREMENT ,
 `id_book` INT(250) NOT NULL ,
  `id_genre` INT(250) NOT NULL ,
   PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE book_genre
    ADD FOREIGN KEY (id_book) REFERENCES book(ISBN),
    ADD FOREIGN KEY (id_genre) REFERENCES genre(id);

CREATE TABLE `1с`.`book_author`
( `id` INT(250) NOT NULL AUTO_INCREMENT ,
 `id_book` INT(250) NOT NULL ,
 `id_author` INT(250) NOT NULL ,
 PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE book_author
    ADD FOREIGN KEY (id_book) REFERENCES book(ISBN),
    ADD FOREIGN KEY (id_author) REFERENCES author(id);