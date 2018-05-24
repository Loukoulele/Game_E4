<?php
include 'calldb.php';
include 'calldb_quizz.php';

/*class Quizz
{
  $reponse_a_check = $_POST['rep_form'];
  $exp_joueurs = $joueurs['experience_joueurs'];
  $exp_quizz = $quizz['experience_quizz'];
  $bonne_rep = $quizz['reponse'];

  function __construct($p_expJoueurs, $p_expQuizz, $p_question)
  {
    $this->exp_joueurs = $p_expJoueurs;
    $this->exp_quizz = $p_expQuizz;
    $this->question = $p_question;
  }

  public function check_quizz()
  {
    if ($reponse_a_check == $bonne_rep)
    {
        echo "Bonne réponse";
        //return $exp_joueurs = $exp_joueurs + $exp_quizz;
    }
  }
}*/

$reponse_a_check = $_POST['rep_form'];
$exp_joueurs = $joueurs['experience_joueurs'];
$exp_quizz = $quizz['experience_quizz'];
$bonne_rep = $quizz['reponse'];

if ($reponse_a_check == $bonne_rep)
{
    echo "Bonne réponse";
    header("Location: quizz.php");
    //yes
    //return $exp_joueurs = $exp_joueurs + $exp_quizz;
}
?>
