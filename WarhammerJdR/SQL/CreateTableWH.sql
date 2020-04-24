CREATE TABLE `wh_pjstat`(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_joueur INT,
  capaCaC INT,
  capaCaCAug INT,
  capaTir INT,
  capaTirAug INT,
  forcep INT,
  forcepAug INT,
  endu INT,
  enduAug INT,
  agi INT,
  agiAug INT,
  initiative INT,
  initiativeAug INT,
  dexterite INT,
  dexteriteAug INT,
  intel INT,
  intelAug INT,
  forceMen INT,
  forceMenAug INT,
  sociabilite INT,
  sociabiliteAug INT,
  destin INT,
  chance INT,
  resilience INT,
  determination INT,
  motivation varchar(30),
  mouvement INT,
  pointExpTot INT,
  pointExpDep INT
)

CREATE TABLE `wh_pjcar` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomJoueur VARCHAR(25),
  nomPerso VARCHAR(25),
  race VARCHAR(15),
  classe VARCHAR(20),
  carriere VARCHAR(30),
  echelon VARCHAR(30),
  age INT,
  taille VARCHAR(5),
  cheveux VARCHAR(10),
  yeux VARCHAR(10)
)

CREATE TABLE `wh_test` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_joueur INT,
  competence VARCHAR(25),
  valeurFiche INT,
  valeurDes INT,
  resultat VARCHAR(10),
  degreReussite INT,
  automatique VARCHAR(3)
);

CREATE TABLE `wh_compbase` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_joueur INT,
  competence VARCHAR(25),
  caracteristique VARCHAR(25),
  augmentation INT
);

CREATE TABLE `wh_compspe` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_joueur INT,
  competence VARCHAR(25),
  caracteristique VARCHAR(25),
  augmentation INT
);

CREATE TABLE `wh_lexique` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(50),
  descourte VARCHAR(255),
  deslongue VARCHAR(600)
)

CREATE TABLE `wh_talent` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_joueur INT, 
  id_talent INT
)

CREATE TABLE `wh_testcombat` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_joueur INT,
  competence VARCHAR(25),
  valeurFiche INT,
  valeurDes INT,
  resultat VARCHAR(10),
  degreReussite INT,
  automatique VARCHAR(3)
);