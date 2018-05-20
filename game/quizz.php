<?php
session_start();
include 'calldb.php';
require 'Database.php';

class Quizz
{
  $experience = 0;
  $question = false;

  function __construct($p_experience, $p_question)
  {
    $this->experience = $p_experience;
    $this->question = $p_question;
  }





  public function check_quizz()
  {

    if ($question == true)
    {
      echo "Bonne réponse";
      return $joueurs['experience'] + $experience;
    }

  }
}








 ?>
