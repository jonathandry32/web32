/*drop database epiz_33516652_XXX;
create database epiz_33516652_XXX;
use epiz_33516652_XXX;*/
create table membre(
	idmembre int auto_increment primary key,
	email varchar(50),
	password varchar(20),
	name varchar(20),
	numero varchar(13),
	admin int
);
insert into membre(email,password,name,numero,admin) values ('admin@admin.net','admin','Administrateur','0123456789',1);
insert into membre(email,password,name,numero,admin) values ('bot@user.to','bot','bot','0123456789',0);
insert into membre(email,password,name,numero,admin) values ('jonapiso@gmail.com','jo','Jo','0123456789',0);
insert into membre(email,password,name,numero,admin) values ('bayron@gmail.com','01234','Kingsley','0123456789',0);

create table categorie(
	idcategorie int auto_increment primary key,
	name varchar(20)
);
insert into categorie(name) values ("Vetement");
insert into categorie(name) values ("Livre");
insert into categorie(name) values ("Jeux");

create table objet (
	idobjet int auto_increment primary key,
	idcategorie int,
	name varchar(30),
	proprietaire int,
	prix double,
	description varchar(50),
	foreign key (idcategorie) references categorie(idcategorie),
	foreign key (proprietaire) references membre(idmembre)
);

create table demande(
	iddemande int auto_increment primary key,
	acheteur int,
	donne int,
	vendeur int,
	recu int,
	foreign key (acheteur) references membre(idmembre), 
	foreign key (vendeur) references membre(idmembre), 
	foreign key (donne) references objet(idobjet), 
	foreign key (recu) references objet(idobjet) 
);

create table historic(
	acheteur int,
	objet_a int,
	vendeur int,
	objet_v int,
	daty date,
	foreign key (acheteur) references membre(idmembre), 
	foreign key (vendeur) references membre(idmembre) 
);


create table picture(
    idpic int auto_increment primary key,
    idobjet int,
    name varchar(50),
	foreign key (idobjet) references objet(idobjet)
);

insert into objet(idcategorie,proprietaire,name,description,prix) values(1,4,'Chemise','Taille L,a carreaux',1250);
insert into objet(idcategorie,proprietaire,name,description,prix) values(1,4,'pantalon','Taille slim,Cargo',1500);
insert into objet(idcategorie,proprietaire,name,description,prix) values(1,4,'Casque','Protection solid ',2000);
insert into objet(idcategorie,proprietaire,name,description,prix) values(1,3,'costard','Pour homme, gentlamen',3500);
insert into objet(idcategorie,proprietaire,name,description,prix) values(2,3,'Cd','Compilation',4000);
insert into objet(idcategorie,proprietaire,name,description,prix) values(3,4,'Equipement','Pour les chantiers',4500);
insert into objet(idcategorie,proprietaire,name,description,prix) values(1,2,'gilet','Pour les architectes',5000);
insert into objet(idcategorie,proprietaire,name,description,prix) values(3,3,'montre','Horloge de jeux',5100);
insert into objet(idcategorie,proprietaire,name,description,prix) values(3,2,'PS4','playstation game',5250);
insert into objet(idcategorie,proprietaire,name,description,prix) values(3,3,'PS5','playstation game',5500);


insert into picture(idobjet,name) values(1,'chemise.jpg');
insert into picture(idobjet,name) values(2,'pantalon.jpg');
insert into picture(idobjet,name) values(3,'casque.jpg');
insert into picture(idobjet,name) values(4,'costar.jpg');
insert into picture(idobjet,name) values(5,'cd.jpg');
insert into picture(idobjet,name) values(6,'instru.jpg');
insert into picture(idobjet,name) values(7,'jilet.png');
insert into picture(idobjet,name) values(8,'montre.jpg');
insert into picture(idobjet,name) values(9,'ps4.jpg');
insert into picture(idobjet,name) values(10,'ps5.jpg');

create table multiple(
	idmultiple int auto_increment primary key,
	acheteur int,
	vendeur int,
	recu int,
	foreign key (acheteur) references membre(idmembre), 
	foreign key (vendeur) references membre(idmembre),
	foreign key (recu) references objet(idobjet) 
);
create table detail_multiple(
	idmultiple int,
	donne int,
	foreign key (idmultiple) references multiple(idmultiple), 
	foreign key (donne) references objet(idobjet)
);