create database homelight;
\c homelight
create table emplacement(
 idEmplacement int primary key,
 nom varchar(500) default null,
 longitude varchar(900) default null,
 latitude varchar(900)
);


create table foyer(
 idFoyer serial primary key,
 nom varchar(100) default 'Home' ,
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
create table produit(
 idProduit serial primary key,
 emplacement varchar(100) not null,
 prix float not null,
 idPack int,
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
 idDisfnctionnement serial primary key,
 idProduit int,
 idUtilisateur int,
 note varchar(500) default null,
 foreign key (idProduit) references produit(idProduit),
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
insert into emplacement values(1 , Ambalavao Haute Matsiatra ,default,default);
insert into emplacement values(2 , 'Ambanja Région Diana ',default,default);
insert into emplacement values(3 , 'Ambato-Boeny Boeny ',default,default);
insert into emplacement values(4 , 'Ambatofinandrahana Amoron i Mania ',default,default);
insert into emplacement values(5 , 'Ambatolampy Vakinankaratra ',default,default);
insert into emplacement values(6 , 'Ambatomainty Melaky ',default,default);
insert into emplacement values(7 , 'Ambatondrazaka Alaotra-Mangoro ',default,default);
insert into emplacement values(8 , 'Ambilobe Région Diana ',default,default);
insert into emplacement values(9 , 'Amboasary-Atsimo Anosy ',default,default);
insert into emplacement values(10, ' Ambohidratrimo Analamanga ',default,default);
insert into emplacement values(11, ' Ambohimahasoa Haute Matsiatra ',default,default);
insert into emplacement values(12, ' Ambositra Amoron i Mania ',default,default);
insert into emplacement values(13, ' Ambovombe-Androy Androy ',default,default);
insert into emplacement values(14, ' Ampanihy Atsimo-Andrefana ',default,default);
insert into emplacement values(15, ' Amparafaravola Alaotra-Mangoro ',default,default);
insert into emplacement values(16, ' Analalava Sofia ',default,default);
insert into emplacement values(17, ' Andapa Sava ',default,default);
insert into emplacement values(18, ' Andilamena Alaotra-Mangoro ',default,default);
insert into emplacement values(19, ' Andramasina Analamanga ',default,default);
insert into emplacement values(20, ' Anjozorobe Analamanga ',default,default);
insert into emplacement values(21, ' Ankazoabo Atsimo-Andrefana ',default,default);
insert into emplacement values(22, ' Ankazobe Analamanga ',default,default);
insert into emplacement values(23, ' Anosibe An ala Alaotra-Mangoro ',default,default);
insert into emplacement values(24, ' Antalaha Sava ',default,default);
insert into emplacement values(25, ' Antanambao Manampotsy Atsinanana ',default,default);
insert into emplacement values(26, ' Antananarivo Atsimondrano Analamanga ',default,default);
insert into emplacement values(27, ' Antananarivo Avaradrano Analamanga ',default,default);
insert into emplacement values(28, ' Antananarivo-Renivohitra Analamanga ',default,default);
insert into emplacement values(29, ' Antanifotsy Vakinankaratra ',default,default);
insert into emplacement values(30, ' Antsalova Melaky ',default,default);
insert into emplacement values(31, ' Antsirabe I Vakinankaratra ',default,default);
insert into emplacement values(32, ' Antsirabe II Vakinankaratra ',default,default);
insert into emplacement values(33, ' Antsiranana I(anciennement Diego-Suarez) Région Diana ',default,default);
insert into emplacement values(34, ' Antsiranana II Région Diana ',default,default);
insert into emplacement values(35, ' Antsohihy Sofia ',default,default);
insert into emplacement values(36, ' Arivonimamo Itasy ',default,default);
insert into emplacement values(37, ' Bealanana Sofia ',default,default);
insert into emplacement values(38, ' Befandriana Avaratra(Befandriana-Nord) Sofia ',default,default);
insert into emplacement values(39, ' Befotaka Atsimo-Atsinanana ',default,default);
insert into emplacement values(40, ' Bekily Androy ',default,default);
insert into emplacement values(42, ' Belo sur Tsiribihina Menabe ',default,default);
insert into emplacement values(41, ' Beloha Androy ',default,default);
insert into emplacement values(43, ' Benenitra Atsimo-Andrefana ',default,default);
insert into emplacement values(44, ' Beroroha Atsimo-Andrefana ',default,default);
insert into emplacement values(45, ' Besalampy Melaky ',default,default);
insert into emplacement values(46, ' Betafo Vakinankaratra ',default,default);
insert into emplacement values(47, ' Betioky-Atsimo Atsimo-Andrefana ',default,default);
insert into emplacement values(48, ' Betroka Anosy ',default,default);
insert into emplacement values(49, ' Boriziny(anciennement Port-Bergé) Sofia ',default,default);
insert into emplacement values(91, ' District de Nosy Be Région Diana ',default,default);
insert into emplacement values(92, ' District de Nosy Boraha(anciennement Sainte-Marie) Analanjirofo ',default,default);
insert into emplacement values(50, ' Fandriana Amoron i Mania ',default,default);
insert into emplacement values(51, ' Farafangana Atsimo-Atsinanana ',default,default);
insert into emplacement values(52, ' Faratsiho Vakinankaratra ',default,default);
insert into emplacement values(54, ' Fenoarivo Atsinanana(Fenerive-Est) Analanjirofo ',default,default);
insert into emplacement values(53, ' Fenoarivobe Bongolava ',default,default);
insert into emplacement values(55, ' Fianarantsoa Haute Matsiatra ',default,default);
insert into emplacement values(56, ' Iakora Ihorombe ',default,default);
insert into emplacement values(57, ' Ifanadiana Vatovavy-Fitovinany ',default,default);
insert into emplacement values(58, ' Ihosy Ihorombe ',default,default);
insert into emplacement values(59, ' Ikalamavony Haute Matsiatra ',default,default);
insert into emplacement values(60, ' Ikongo Vatovavy-Fitovinany ',default,default);
insert into emplacement values(61, ' Isandra Haute Matsiatra ',default,default);
insert into emplacement values(62, ' Ivohibe Ihorombe ',default,default);
insert into emplacement values(63, ' Kandreho Betsiboka ',default,default);
insert into emplacement values(64, ' Lalangina Haute Matsiatra ',default,default);
insert into emplacement values(65, ' Maevatanana Betsiboka ',default,default);
insert into emplacement values(66, ' Mahabo Menabe ',default,default);
insert into emplacement values(67, ' Mahajanga I Boeny ',default,default);
insert into emplacement values(68, ' Mahajanga II Boeny ',default,default);
insert into emplacement values(69, ' Mahanoro Atsinanana ',default,default);
insert into emplacement values(70, ' Maintirano Melaky ',default,default);
insert into emplacement values(71, ' Mampikony Sofia ',default,default);
insert into emplacement values(72, ' Manakara Vatovavy-Fitovinany ',default,default);
insert into emplacement values(73, ' Mananara Avaratra(Mananara-Nord) Analanjirofo ',default,default);
insert into emplacement values(74, ' Manandriana Amoron i Mania ',default,default);
insert into emplacement values(75, ' Mananjary Vatovavy-Fitovinany ',default,default);
insert into emplacement values(76, ' Mandoto Vakinankaratra ',default,default);
insert into emplacement values(77, ' Mandritsara Sofia ',default,default);
insert into emplacement values(78, ' Manja Menabe ',default,default);
insert into emplacement values(79, ' Manjakandriana Analamanga ',default,default);
insert into emplacement values(80, ' Maroantsetra Analanjirofo ',default,default);
insert into emplacement values(81, ' Marolambo Atsinanana ',default,default);
insert into emplacement values(82, ' Marovoay Boeny ',default,default);
insert into emplacement values(83, ' Miandrivazo Menabe ',default,default);
insert into emplacement values(84, ' Miarinarivo Itasy ',default,default);
insert into emplacement values(85, ' Midongy Atsimo Atsimo-Atsinanana ',default,default);
insert into emplacement values(86, ' Mitsinjo Boeny ',default,default);
insert into emplacement values(87, ' Morafenobe Melaky ',default,default);
insert into emplacement values(88, ' Moramanga Alaotra-Mangoro ',default,default);
insert into emplacement values(89, ' Morombe Atsimo-Andrefana ',default,default);
insert into emplacement values(90, ' Morondava Menabe ',default,default);
insert into emplacement values(93, ' Nosy Varika Vatovavy-Fitovinany ',default,default);
insert into emplacement values(94, ' Sakaraha Atsimo-Andrefana ',default,default);
insert into emplacement values(95, ' Sambava Sava ',default,default);
insert into emplacement values(96, ' Soalala Boeny ',default,default);
insert into emplacement values(97, ' Soanierana Ivongo Analanjirofo ',default,default);
insert into emplacement values(98, ' Soavinandriana Itasy ',default,default);
insert into emplacement values(99, ' Taolanaro(Taolagnaro) Anosy ',default,default);
insert into emplacement values(100, ' Toamasina I Atsinanana ',default,default);
insert into emplacement values(101, ' Toamasina II Atsinanana ',default,default);
insert into emplacement values(102, ' Toliara I Atsimo-Andrefana ',default,default);
insert into emplacement values(103, ' Toliara II Atsimo-Andrefana ',default,default);
insert into emplacement values(104, ' Tsaratanana Betsiboka ',default,default);
insert into emplacement values(105, ' Tsihombe Androy ',default,default);
insert into emplacement values(106, ' Tsiroanomandidy Bongolava ',default,default);
insert into emplacement values(107, ' Vangaindrano Atsimo-Atsinanana ',default,default);
insert into emplacement values(108, ' Vatomandry Atsinanana ',default,default);
insert into emplacement values(109, ' Vavatenina Analanjirofo ',default,default);
insert into emplacement values(110, ' Vohemar Sava ',default,default);
insert into emplacement values(112, ' Vohibato Haute Matsiatra ',default,default);
insert into emplacement values(111, ' Vohibinany(anciennement Brickaville) Atsinanana ',default,default);
insert into emplacement values(113, ' Vohipeno Vatovavy-Fitovinany ',default,default);
insert into emplacement values(114, ' Vondrozo Atsimo-Atsinanana ',default,default);