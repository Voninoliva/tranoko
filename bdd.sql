--ny nom no mitondra ny photo
create table produit(
    idproduit serial primary key,
    nom varchar(100),
    prix numeric,
    description varchar(3000)
);

create table photoproduit(
    idphotoproduit serial primary key,
    path varchar(100)
);

create table detailproduitphoto(
    idproduit int,
    idphotoproduit int,

);

insert into foyer values(default,'Rakoto','root',28);
insert into utilisateur values(default,'Miora','Oliva','09-09-2004',1,'vm@gmail.com','0340000000','root',1);

insert into pack values(default,'18-06-2023',1);

insert into produit values(default,'cuisine',250,1,null,'lampe pour la cuisine');
insert into produit values(default,'couloir',250,1,null,'interrupteur pour la cuisine');
insert into produit values(default,'chambre',250,1,null,'lampe pour la chambre');
alter table produit add column sary varchar(500);
update produit set sary='chambreACoucher.png' where idproduit=1;
update produit set sary='couloir0.png' where idproduit=2;
update produit set sary='salleManger.png' where idproduit=3;
insert into produitonoff values(1,to_timestamp('2019/06/10 10:00:00','yyyy/mm/dd hh:mi:ss'),to_timestamp('2019/06/10 10:00:00','yyyy/mm/dd hh:mi:ss'));
insert into produitonoff values(2,to_timestamp('2019/06/10 10:00:00','yyyy/mm/dd hh:mi:ss'),to_timestamp('2023/06/30 10:00:00','yyyy/mm/dd hh:mi:ss'));
insert into produitonoff values(3,to_timestamp('2019/06/10 10:00:00','yyyy/mm/dd hh:mi:ss'),current_timestamp);


select pack.idfoyer from pack join utilisateur on pack.idfoyer=utilisateur.idfoyer where utilisateur.idutilisateur=

select consommationJour.* from produit
join consommationJour on produit.idproduit=consommationJour.idproduit
join pack on produit.idpack=pack.idpack
where pack.idfoyer=



-- Janvier
INSERT INTO consommationJour (idProduit, consommation, jour)
VALUES
    (1, 10.5, '2023-01-01'),
    (2, 8.2, '2023-01-01'),
    (3, 12.9, '2023-01-01'),
    (1, 9.7, '2023-01-02'),
    (2, 7.3, '2023-01-02'),
    (3, 10.6, '2023-01-02');
    -- Ajoutez plus de données ici selon vos besoins

-- Février
INSERT INTO consommationJour (idProduit, consommation, jour)
VALUES
    (1, 8.3, '2023-02-01'),
    (2, 6.1, '2023-02-01'),
    (3, 9.8, '2023-02-01'),
    (1, 9.1, '2023-02-02'),
    (2, 7.6, '2023-02-02'),
    (3, 11.2, '2023-02-02');
    -- Ajoutez plus de données ici selon vos besoins

-- Mars
INSERT INTO consommationJour (idProduit, consommation, jour)
VALUES
    (1, 10.2, '2023-03-01'),
    (2, 7.9, '2023-03-01'),
    (3, 11.6, '2023-03-01'),
    (1, 8.6, '2023-03-02'),
    (2, 6.8, '2023-03-02'),
    (3, 10.3, '2023-03-02');
    -- Ajoutez plus de données ici selon vos besoins

-- Avril
INSERT INTO consommationJour (idProduit, consommation, jour)
VALUES
    (1, 9.8, '2023-04-01'),
    (2, 7.1, '2023-04-01'),
    (3, 11.4, '2023-04-01'),
    (1, 7.9, '2023-04-02'),
    (2, 6.4, '2023-04-02'),
    (3, 9.2, '2023-04-02');
    -- Ajoutez plus de données ici selon vos besoins

-- ... Répétez le même schéma pour les mois de mai à décembre ...

-- Mai
INSERT INTO consommationJour (idProduit, consommation, jour)
VALUES
    (1, 11.4, '2023-05-01'),
    (2, 8.9, '2023-05-01'),
    (3, 12.5, '2023-05-01'),
    (1, 10.1, '2023-05-02'),
    (2, 8.3, '2023-05-02'),
    (3, 11.7, '2023-05-02');
    -- Ajoutez plus de données ici selon vos besoins

-- Juin
alter table disfonctionnement add column idfoyer int;
alter table disfonctionnement add constraint fk_disfonctionnement_idfoyer foreign key(idfoyer) references foyer(idfoyer);


