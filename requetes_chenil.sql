# Requêtes Chenil

1
INSERT INTO chiens (num_ch,nom_ch,race_ch,sexe_ch,code_pro_,num_cage_) VALUES (5,'titi', 'berger','m',2,3);
2
INSERT INTO chiens (num_ch,nom_ch) VALUES (6, 'buzbuze');
3
UPDATE chiens SET sexe_ch = 'm', code_pro_ = 6, num_cage_ = 7 WHERE num_ch = 6;
4
SELECT nom_pro, tel_pro FROM proprietaires;
5
SELECT nom_ch FROM chiens WHERE sexe_ch = 'm';
6
SELECT nom_ch, nom_pro
FROM chiens
INNER JOIN proprietaires ON chiens.code_pro_ = proprietaires.code_pro
WHERE nom_pro = 'SEGO';
7
DELETE FROM chiens WHERE num_ch = 1;
8
SELECT num_cage_,nom_ch, nom_pro
FROM proprietaires
INNER JOIN chiens ON chiens.code_pro_ = proprietaires.code_pro
ORDER BY num_cage_,nom_ch ASC;
9
SELECT nom_ch, nom_pro, ville_pro
FROM chiens
INNER JOIN proprietaires ON chiens.code_pro_ = proprietaires.code_pro
WHERE ville_pro='Saint Julien' OR ville_pro = 'Troyes';
10
SELECT COUNT(num_ch) as TotalNbChiens
FROM chiens;
11
SELECT nom_ch,nom_al
FROM chiens
INNER JOIN manger ON chiens.num_ch = manger.num_ch_
INNER JOIN aliments ON manger.code_al_ = aliments.code_al
WHERE nom_ch='balou';
12
DELETE FROM manger
WHERE daterepas < '2012-02-01';
13
UPDATE cages
SET nbmax_ch = 1 WHERE surface < 4;
14
UPDATE manger
SET quantite = quantite *1.2 WHERE num_ch = 1;

# On peut ajouter des synonymes pour les noms de tables en leur affectant une lettre.
# Généralement on prend la première lettre de la table.
# Exemple pour la table chiens la lettre c ce qui donne dans le INNER JOIN
# INNER JOIN chiens c ON c.num_ch = m.num_ch_

15
SELECT chiens.num_ch, nom_ch, SUM(quantite) AS Total
FROM chiens c
INNER JOIN manger m ON c.num_ch = m.num_ch_
GROUP BY num_ch;
16
SELECT AVG(quantite) AS MoyenneNourriture
FROM manger m
INNER JOIN chien c ON m.num_ch_ = c.num_ch
WHERE sexe_ch ='m';
17
SELECT nom_pro, SUM(quantite)*0.75 AS Tarif
FROM proprietaires p
INNER JOIN chiens c ON c.code_pro_ = p.code_pro
18
SELECT daterepas AS 'DateRepas', nom_al AS Aliment, SUM(quantite) as 'QuantiteJournaliere'
FROM aliments a
INNER JOIN manger m ON m.code_al_ = a.code_al
GROUP BY daterepas, nom_al;
