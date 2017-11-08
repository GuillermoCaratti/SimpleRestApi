CREATE DATABASE test23;
GRANT USAGE ON *.* TO user23@localhost IDENTIFIED BY 'pass23';
GRANT ALL PRIVILEGES ON test23.* TO user23@localhost ;
USE test23;

CREATE TABLE Producto(
       id INT NOT NULL AUTO_INCREMENT,
       nombre VARCHAR(30) NOT NULL,
       precio FLOAT NOT NULL,
       PRIMARY KEY (id)
);


INSERT INTO Producto (nombre,precio)
VALUES ('Pantalon',320.30);

INSERT INTO Producto (nombre,precio)
VALUES ('Remera',200);

CREATE TABLE Usuarios(
       id INT NOT NULL AUTO_INCREMENT,
       usuario VARCHAR(30) NOT NULL,
       pass VARCHAR(30) NOT NULL,
       role INT NOT NULL,
       PRIMARY KEY (id)
);

INSERT INTO Usuarios (usuario,pass,role) VALUES ('admin','admin',1);
INSERT INTO Usuarios (usuario,pass,role) VALUES ('user','passw0rd',0);
