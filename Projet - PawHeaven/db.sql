CREATE DATABASE pawheaven;
USE pawheaven;

CREATE TABLE admin(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    identifiant varchar(200),
    password varchar(200)
);

CREATE TABLE clients(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    lastname varchar(200),
    firstname varchar(200),
    email varchar(200),
    confemail(200),
    password varchar(200),
    confpassword varchar(200)
);

CREATE TABLE animaux(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom varchar(200),
    sex varchar(20),
    espece varchar(200),
    race varchar(200),
    description varchar(1000)
);