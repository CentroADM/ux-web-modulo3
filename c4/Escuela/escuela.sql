CREATE DATABASE escuela;

CREATE TABLE alumno(
       id int NOT NULL AUTO_INCREMENT,
       edad int,
       nombre varchar(30),
       correo varchar(50),
       genero varchar(1),
       PRIMARY KEY(ID)
       );
