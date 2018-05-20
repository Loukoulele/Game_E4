<?php
  session_start();
  ?>
<?php
  require 'Database.php'; // Différence entre require et include : require obligatoire sinon echec

  $db = Database::connect();
  $statement = $db->prepare('SELECT pseudo, classe, niveau, experience, image
                          FROM joueurs');
  $joueurs = $statement->fetch();
  Database::disconnect();

 ?>
