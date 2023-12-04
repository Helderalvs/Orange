drop database if exists orange_JV_24;
create database orange_JV_24;
use orange_JV_24;

create table client (
    idclient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    email varchar(50),
    primary key(idclient)
);

create table produit (
    idproduit int(3) not null auto_increment,
    designation varchar(50),
    prixachat decimal(5,2),
    etat varchar(50),
    dateAchat date,
    idclient int(3), 
    primary key (idproduit),
    foreign key (idclient) references client(idclient)
);

create table technicien(
    idtech int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    email varchar(50),
    primary key(idtech)
);

create table intervention(
    idinter int(3) not null auto_increment,
    dateinter date,
    prixinter decimal(5,2),
    rapport varchar(50),
    idproduit int(3),
    idtech int(3),
    primary key (idinter),
    foreign key (idproduit) references produit(idproduit),
    foreign key (idtech) references technicien(idtech)
);