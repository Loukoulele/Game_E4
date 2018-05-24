<?php
  require_once '../Database.php'; // Différence entre require et include : require obligatoire sinon echec

  $db = Database::connect();
  $statement = $db->prepare('SELECT id, pseudo, niveau, experience_joueurs, image
                          FROM joueurs WHERE pseudo = ?');
  $statement->execute(array($_SESSION['pseudo']));
  $joueurs = $statement->fetch();
  Database::disconnect();
 ?>
