<?php
  require 'DatabaseGame.php'; // Différence entre require et include : require obligatoire sinon echec

  $db = DatabaseGame::connect();
  $statement = $db->prepare('SELECT pseudo, niveau, experience_joueurs, image
                          FROM joueurs WHERE pseudo = ?');
  $statement->execute(array($_SESSION['pseudo']));
  $joueurs = $statement->fetch();
  DatabaseGame::disconnect();


  $db_t = DatabaseGame::connect();
  $statement_t = $db_t->prepare('SELECT *
                          FROM quizz');
  $exp_quizz = $statement_t->fetch();
  DatabaseGame::disconnect();

 ?>
