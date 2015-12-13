CREATE DATABASE IF NOT EXISTS ksiegozbior DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE ksiegozbior;

CREATE TABLE IF NOT EXISTS autor (
  id_autor int unsigned NOT NULL auto_increment,
  imie varchar(50) NOT NULL,
  nazwisko varchar(100) NOT NULL,
  data_ur date,
  aktywny enum('T', 'N') default 'T',

  PRIMARY KEY  (id_autor),  

  INDEX index_imie_nazwisko (imie, nazwisko),
  INDEX index_nazwisko_imie (nazwisko, imie)
   
);

CREATE TABLE IF NOT EXISTS ksiazka (
  id_ksiazka int unsigned NOT NULL auto_increment,
  tytul varchar(150) NOT NULL,
  isbn bigint unsigned,  
  liczba_str int unsigned,
  opis varchar(255),
  cena_netto decimal(7, 2) NOT NULL,
  cena_brutto decimal(7, 2) NOT NULL,
  aktywna enum('T', 'N') default 'T',

  PRIMARY KEY  (id_ksiazka),  
  
  INDEX index_tytul(tytul),  
  INDEX index_isbn(isbn)
   
);

CREATE TABLE IF NOT EXISTS autor_ksiazka (
  id_autor int unsigned NOT NULL,
  id_ksiazka int unsigned NOT NULL,

  PRIMARY KEY (id_autor, id_ksiazka),

  CONSTRAINT autor_ksiazka_autor_FK
    FOREIGN KEY autor_FK(id_autor) REFERENCES autor(id_autor)
    ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT autor_ksiazka_ksiazka_FK
    FOREIGN KEY ksiazka_FK(id_ksiazka) REFERENCES ksiazka(id_ksiazka)
    ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE IF NOT EXISTS gatunek (
  id_gatunek int unsigned NOT NULL auto_increment,
  nazwa varchar(30) NOT NULL,
  aktywny enum('T', 'N') default 'T',

  PRIMARY KEY (id_gatunek),

  INDEX index_nazwa_gatunek(nazwa)
);

CREATE TABLE IF NOT EXISTS ksiazka_gatunek (
  id_ksiazka int unsigned NOT NULL,
  id_gatunek int unsigned NOT NULL,

  PRIMARY KEY(id_ksiazka, id_gatunek),

  CONSTRAINT ksiazka_gatunek_ksiazka_FK 
    FOREIGN KEY ksiazka_FK(id_ksiazka) REFERENCES ksiazka(id_ksiazka)
    ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT ksiazka_gatunek_gatunek_FK
    FOREIGN KEY gatunek_FK(id_gatunek) REFERENCES gatunek(id_gatunek)
    ON UPDATE CASCADE ON DELETE RESTRICT
);

