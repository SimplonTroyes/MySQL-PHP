<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INDEX</title>
  </head>
  <body>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<p>

</p>

<?php
// appel à une fonction liste infos BDD

// var_dump($tousLesChiens);
foreach($tousLesChiens as $chien):
  echo $chien['nom_ch'].' || ';
endforeach;
 ?>
<p>
  <div class="">
    Supprimer un chien
    <p>
      <form class="" action="../controller/c_suprchien.php" method="post">
        Nom du chien :
        <select class="" name="numChien">
          <?php
          foreach($tousLesChiens as $chien):
            echo '<option value="'.$chien['num_ch'].'">'.$chien['nom_ch'].'</option>';
          endforeach;
          ?>
        </select>
        <input type="submit" name="name" value="Suppression">
      </form>
    </p>
  </div>
  <div class="">
    Ajouter un chien
    <p>
      <form class="" action="../controller/c_ajoutchien.php" method="post">
        Nom du chien : <input type="text" name="nomChien"><br>
        Race du Chien : <input type="text" name="raceChien"><br>
        <input type="submit" name="name" value="Ajout Chien">
      </form>
    </p>
  </div>
</p>
  </body>
</html>
