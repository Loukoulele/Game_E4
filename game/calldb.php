<?php

  require 'Database.php'; // Différence entre require et include : require obligatoire sinon echec

  $db = Database::connect();
  $statement = $db->prepare('SELECT pseudo, classe, niveau, experience
                          FROM joueurs');
  $statement->execute(array($pseudo));
  $joueur = $statement->fetch();
  Database::disconnect();

 ?>
