<?php
  require 'DatabaseGame.php'; // Différence entre require et include : require obligatoire sinon echec

  $db = DatabaseGame::connect();
  $statement = $db->prepare('SELECT pseudo, niveau, experience, image
                          FROM joueurs');
  $joueurs = $statement->fetch();
  DatabaseGame::disconnect();

 ?>
