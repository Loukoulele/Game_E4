<?php
include 'calldb.php';
include 'calldb_quizz.php'

class Quizz
{
  $exp_joueurs = $joueurs['experience_joueurs'];
  $exp_quizz = $quizz['experience_quizz'];
  $question = false;

  function __construct($p_expJoueurs, $p_expQuizz, $p_question)
  {
    $this->exp_joueurs = $p_expJoueurs;
    $this->exp_quizz = $p_expQuizz;
    $this->question = $p_question;
  }

  public function check_quizz()
  {
    if ($question == true)
    {
      echo "Bonne réponse";
      return $exp_joueurs = $exp_joueurs + $exp_quizz;
    }
  }
}
 ?>
