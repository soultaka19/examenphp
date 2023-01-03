create database agent;

use agent;

create table agent(
    id int primary key auto_increment,
    nom varchar(255),
    salaire int,
    prime int,
    commission int   
);

--id,nom,salaire,prime,commission