CREATE DATABASE pawheaven;
USE pawheaven;

CREATE TABLE admin(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    identifiant varchar(200),
    password varchar(200)
);

INSERT INTO admin (identifiant, password) 
VALUES 
    ('dorian', 'dorian'),
    ('mariem', 'mariem'),
    ('maria', 'maria');


CREATE TABLE clients(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    lastname varchar(200),
    firstname varchar(200),
    email varchar(200),
    password varchar(200),
);

CREATE TABLE animaux(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(200),
    age int,
    sex varchar(20),
    race varchar(200),
    espece varchar(200),
    description varchar(1000)
);