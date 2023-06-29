create database tranoko;
\c tranoko;
create table emplacement(
    idEmplacement int primary key,
    nom varchar(500) default null,
    longitude varchar(900) default null,
    latitude varchar(900)
);
create table foyer(
    idFoyer serial primary key,
    nom varchar(100) not null,
    motDePasse varchar(100)not null,
    idEmplacement int,
    foreign key (idEmplacement) references emplacement(idEmplacement)
);
create table pack(
    idPack serial primary key,
    dateInstallation date default current_date,
    idFoyer int,
    foreign key (idFoyer) references foyer(idFoyer)
);
create table utilisateur(
    idUtilisateur serial primary key,
    nom varchar(100) not null,
    prenom varchar(100) not null,
    dateDeNaissance date not null,
    idFoyer int,
    email varchar(100) default null,
    numero varchar(100) default null,
    motDePasse varchar(100) not null,
    estAdmin int default 0,
    foreign key (idFoyer) references foyer(idFoyer)
);
-- le resaka vente de avy any amin ny vente no lasa misy produit vaovao ao amin foyer fa tsy ajouterProduit fa ny admin no manao an izany
-- le oe lampe,anay sa pub a olonkafa,le nom an le societe
create table categorie(
    idcategorie serial primary key,
    nomCategorie varchar(100)
);
-- le pack ohatra oe lampe controlable
create table produitsDeVente(
    idproduitsDeVente serial primary key,
    idcategorie int,
    nom varchar(150),
    nombre float not null,
    prixUnitaire float not null,
    description varchar(300),
    prixAbonnementService float,
    foreign key(idcategorie) references categorie(idcategorie)
);
-- eto le mi insert anaty produit an le olona amin izay
create table factureClient(
    idfactureclient serial primary key,
    idproduitsDeVente int,
    nombre int,
    dateDemande date default current_date,
    dateAjout date,
    idUtilisateur int,
    foreign key(idUtilisateur) references utilisateur(idUtilisateur),
    foreign key(idproduitsDeVente) references produitsDeVente(idproduitsDeVente)
);
-- ny produits tokony hanana ny sariny
create table produit(
    idProduit serial primary key,
    emplacement varchar(100) default null,
    prix float not null,
    idPack int,
    idfactureclient int,
    description varchar(300),
    foreign key(idfactureclient) references factureClient(idfactureclient),
    foreign key (idPack) references pack(idPack)
);
create table produitOnOff(
    idProduit int,
    dateDebut timestamp default current_timestamp,
    dateFin timestamp not null,
    foreign key (idProduit) references produit(idProduit)
);
create table parametre(
    idParametre serial primary key,
    idProduit int,
    minTension float not null,
    maxTension float not null,
    foreign key (idProduit) references produit(idProduit)
);
create table consommationJour(
    idConsommationJour serial primary key,
    idProduit int,
    consommation float not null,
    jour timestamp default current_date,
    foreign key (idProduit) references produit(idProduit)
);
create table disfonctionnement(
    idDisfonctionnement serial primary key,
    idProduit int,
    idUtilisateur int,
    note varchar(500) default null,
    foreign key (idProduit) references produit(idProduit),
    foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);
-- le reponses an le disfonctionnement
create table disfonctionnementReponses(
    idDisfonctionnement int,
    idUtilisateur int,
    note varchar(500) not null,
    foreign key(idDisfonctionnement) references disfonctionnement(idDisfonctionnement),
    foreign key (idUtilisateur) references utilisateur(idUtilisateur)
);
create table notification(
    idNotification serial primary key,
    idPack int,
    idUtilisateur int,
    action varchar(500) not null,
    dateNotif timestamp default current_date,
    foreign key (idUtilisateur) references utilisateur(idUtilisateur),
    foreign key (idPack) references pack(idPack)
);
create table payement(
 idPayement serial primary key,
 reference varchar(500),
 idUtilisateur int,
 datePayement date default current_date,
 datePaye date not null,
 prix float not null,
 foreign key (idUtilisateur) references utilisateur(idUtilisateur)
); 

-- alter table produitsDeVente add column prixAbonnementService float;
insert into categorie values(default,'Tranoko');

insert into produitsDeVente values(default,1,'lampe controlable à distance',45,20000,'un outil pour controler vos lampes et toutes autres lumières',250);

insert into produitsDeVente values(default,1,'interrupteur controlable à distance',45,20000,'controlez vos interrupteur de loin',250);
