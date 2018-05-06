<?php

require 'Database.php'; // Différence entre require et include : require obligatoire sinon echec



  private $exp;


  public function add_experience()
  {
    $db = Database::connect();
    $statement = $db->prepare('SELECT experience FROM joueurs');
    $statement->execute(array($pseudo));
    $joueur = $statement->fetch();
    Database::disconnect();
  }

 ?>
