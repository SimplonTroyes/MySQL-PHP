### MySQL-PHP
Découvrir MySQL avec PHP  
### Dictionnaire des données, MCD....  
### Liens utiles  
[Cours SQL](http://sql.sh/)  
[MySQL](http://dev.mysql.com/doc/)  
Le fichier requetes_chenil.sql contient les requêtes nécessaires pour obtenir certaines informations.  
A partir de ce fichier, construire le site du chenil qui devra reprendre les informations suivantes :  
  - liste des chiens
  - insertion, suppression d'un chien
  - modification d'une information sur le proprietaire
  - etc... Vous pouvez créer vos propres fonctions.  

Le site doit être développé en utilisant PHP / MySQL et en utilisant **l'architecture MVC** (Model View Controller).  
Le fichier controller accueil (par exemple) appelle le fichier model accueil et le fichier view accueil.  
Exemple de fichier c_accueil.php :  
    `<?php  
    include ('m_accueil.php');  
    include ('v_accueil.php');  
    ?>`  
    
    
Lien vers le chenil et fichiers correspondants :  
* [Chenil](https://github.com/SimplonTroyes/PHP/tree/master/chenil3)
