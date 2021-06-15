DROP DATABASE IF EXISTS biblioffice_php;
CREATE DATABASE IF NOT EXISTS biblioffice_php CHARACTER SET 'utf8' ;
USE biblioffice_php;

DROP USER IF EXISTS 'BibliOffice'@'localhost';
CREATE USER 'BibliOffice'@'localhost' IDENTIFIED BY 'MdPadmin';
GRANT ALL PRIVILEGES ON biblioffice_php. * TO 'BibliOffice'@'localhost';
