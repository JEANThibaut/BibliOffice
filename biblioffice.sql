DROP DATABASE IF EXISTS biblioffice_php;
CREATE DATABASE IF NOT EXISTS biblioffice_php CHARACTER SET 'utf8' ;
USE biblioffice_php;

DROP USER IF EXISTS 'BibliOffice'@'localhost';
CREATE USER 'BibliOffice'@'localhost' IDENTIFIED BY 'MdPadmin';
GRANT ALL PRIVILEGES ON biblioffice_php. * TO 'BibliOffice'@'localhost';


CREATE TABLE customer (

    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    birth_date DATE NOT NULL,
    postal_code VARCHAR(15) NOT NULL,
    city VARCHAR(100) NOT NULL,
    phone INT(13) NOT NULL,
    mail VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE books ( 

    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    writter VARCHAR(255) NOT NULL,
    release_date VARCHAR (255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    book_description TEXT NOT NULL,
    editor VARCHAR(255) NOT NULL,
    loaning_status VARCHAR(255) NOT NULL,
    loaning_date DATE,
    customer_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id) 
);


INSERT INTO customer (id, firstname, lastname, birth_date, postal_code, city, phone, mail)
VALUES
(1, 'Remy', 'Fasola', '1974-08-15','76000','Rouen', 0645454545, 'RemyFasola@mail.fr'),
(2, 'Claire', 'VOYANCE', '1987-02-14','76000', 'Rouen', 0612121212, 'ClaireVoyance@mail.fr'),
(3,'Gerard', 'MENVUMIEUX', '1975-09-06', '76800', 'Saint Etienne du Rouvray', 0678787878, 'GerardMenvumieux@mail.fr');

INSERT INTO books (id, title, writter, release_date, category, book_description, editor, loaning_status, loaning_date, customer_id)
VALUES
(1, 'Les Fleurs du mal', 'Charles Baudelaire', '1867', 'Poésie', 'Recueil de poèmes du célèbre auteur englobant la casi-totalité de ses oeuvres de 1840 à 1867, date de son décès', 'Folio', 'Disponible',null,null),
(2, 'Les Misérables', 'Victor Hugo', '1962', 'Roman', 'Roman qui décrit la vie de pauvres gens dans Paris au 19e siècle et plus particulièrement le destin du bagnard Jean Valjean', 'Gallimard', 'Indisponible', '2021-06-15', 2),
(3, 'Le Petit Prince','Anthoine de Saint-Exupéry', '1943', 'conte', 'Oeuvre poétique et philosophique sous forme de conte pour enfant', 'Gallimard', 'Indisponible', '2021-06-12', 1),
(4, 'Hamlet', 'William Shakespeare', '1603', 'Théâtre', "Pièce emblématique narrant l'histoire du Prince de Danemark, hanté par son defunt père, menant sa vengeance contre son oncle Claudius devenu roi à son tour", 'Larousse', 'Disponible',null,null);