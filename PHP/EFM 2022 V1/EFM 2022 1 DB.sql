CREATE DATABASE location;

USE location ;

CREATE TABLE clients (id_client int primary key, cin varchar(10), nom varchar(20), prenom varchar(20), email varchar(20), password varchar(20));
CREATE TABLE typebImmo(id_type int primary key, libelle varchar(20));
CREATE TABLE immobilier(id_immobilier int primary key, titre varchar(20), adresse varchar(30), prixlocation int, id_type boolean); 
CREATE TABLE location(id_location int, id_immobilier int, id_client int, date_debut_location date, date_fin_location date);

ALTER TABLE immobilier
ADD FOREIGN KEY (id_type) REFERENCES typebImmo (id_type);

ALTER TABLE location
ADD FOREIGN KEY (id_immobilier) REFERENCES immobilier (id_immobilier);

ALTER TABLE location
ADD FOREIGN KEY (id_client) REFERENCES clients (id_client);

ALTER TABLE clients 
MODIFY id_client INT AUTO_INCREMENT;
DROP TABLE location;
DROP TABLE clients;

select* from clients;