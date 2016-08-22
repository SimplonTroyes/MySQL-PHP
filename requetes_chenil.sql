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
INNER JOIN proprietaires
ON chiens.code_pro_ = proprietaires.code_pro
WHERE nom_pro = 'SEGO';
7
DELETE FROM chiens WHERE num_ch = 1;
8
SELECT num_cage_,nom_ch, nom_pro
FROM proprietaires
INNER JOIN chiens
ON chiens.code_pro_ = proprietaires.code_pro
ORDER BY num_cage_,nom_ch ASC;
