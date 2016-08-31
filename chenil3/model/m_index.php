<?php
include('config.inc.php');

/* Liste des chiens */
function tousLesChiens(){
  // 1st way to connect to database with error message
  try{
    $bdd = new PDO("mysql:host=localhost;dbname=chenil;charset=utf8;", USER, 'tintin');
  }
  catch(PDOException $error){
    $error->getMessage().'<p></p>';
  }
  // 2nd way to connect to the Database
  $bdd = new PDO("mysql:host=localhost;dbname=chenil;charset=utf8;", USER, PWD);
  $sql='SELECT * from chiens ORDER BY nom_ch ASC';
  $resultat = $bdd->query('SET NAMES utf8');// set UTF8 for the fields of the Database
  $resultat = $bdd->query($sql);
  if($resultat):
    $listeChiens = $resultat->fetchAll();
    return $listeChiens;
  else:
    die('Erreur de requête');
  endif;
}

function tousLesProprio(){
  $bdd = new PDO("mysql:host=localhost;dbname=chenil;charset=utf8;", USER, PWD);
  $sql='SELECT * from proprietaires ORDER BY nom_pro ASC';
  $resultat = $bdd->query('SET NAMES utf8');//Affichage UTF8
  $resultat = $bdd->query($sql);
  $listeProprio = $resultat->fetchAll();
  return $listeProprio;

}

  function ajoutChien($nomChien,$raceChien){
  $bdd = new PDO("mysql:host=localhost;dbname=chenil;charset=utf8;", USER, PWD);
  // $sql = ('INSERT INTO chiens(nom_ch,race_ch,sexe_ch,num_cage_,code_pro_)
  //         VALUES ('.$nomChien.','.$raceChien.','.$sexeChien.','.$numCage.','.$codePro.')');
  //$result = $bdd->query($sql);

  $sql = 'INSERT INTO chiens (nom_ch, race_ch)
          VALUES(:nom_ch,:race_ch)';
  $req = $bdd->prepare($sql);
  $req->execute(array(
                "nom_ch" => $nomChien,
                "race_ch" => $raceChien
              ));


}
function modifChien($num_ch){

}
function supprChien($numChien){
  $bdd = new PDO("mysql:host=localhost;dbname=chenil;charset=utf8;", USER, PWD);
  $sql='DELETE FROM chiens WHERE num_ch="'.$numChien.'"';
  $resultat = $bdd->query($sql);
  if($resultat):
    die('OK suppression');
  else:
    die('PB requête');
  endif;
}



 ?>
