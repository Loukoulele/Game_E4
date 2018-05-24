<?php
  require_once '../Database.php'; // Différence entre require et include : require obligatoire sinon echec

$db_t = Database::connect();
$statement_t = $db_t->prepare('SELECT * FROM quizz');
$statement_t->execute();
$quizz = $statement_t->fetch();
Database::disconnect();

?>
