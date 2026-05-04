CREATE DATABASE IF NOT EXISTS db_connect;
USE db_connect;

CREATE TABLE IF NOT EXISTS Filiere (
    NomF VARCHAR(100) PRIMARY KEY,
    description VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS Etudiant (
    matricule VARCHAR(100) PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    adresse VARCHAR(100),
    date_naissance DATE,
    email VARCHAR(100),
    filiere VARCHAR(100),
    FOREIGN KEY (filiere) REFERENCES Filiere(NomF)
);

INSERT IGNORE INTO Filiere VALUES ('LI1', 'Licence Info 1');
INSERT IGNORE INTO Filiere VALUES ('LI2', 'Licence Info 2');
INSERT IGNORE INTO Filiere VALUES ('LI3', 'Licence Info 3');
