<?php

require '../Database.php'

$db = Database::connect();

class quest
{

  private $_experience
  private $_timer

  public function dailyquest()
  {
    $statement = $db->prepare('SELECT experience')
  }




}




 ?>
