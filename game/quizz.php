<?php
session_start();
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
$lvl_joueurs = $joueurs['niveau'];

if (!empty($_POST['rep_form']))
{
  $db_exp = Database::connect();
  $statement_id = $db_exp->prepare('SELECT quizz_done FROM joueurs WHERE pseudo = ?');
  $statement_id->execute(array($_SESSION['pseudo']));
  $statement_id = $statement_id->fetch();
  $quizz_done = $statement_id[0];
  $quizz_id = $quizz_done . "," . strval($quizz['id']);

  $statement_quest = $db_exp->prepare('UPDATE joueurs SET quizz_done = (?) WHERE pseudo = ?');
  $statement_quest->execute(array($quizz_id, $_SESSION['pseudo']));


  $statement_quizz = $db->query('SELECT id FROM quizz');

  $test = array();

  while($quizz_id2 = $statement_quizz->fetch())
  {
    $test[] = $quizz_id2['id'];
  }
  $tabs = explode(",", $quizz_id);


  $diff = array_diff($test, $tabs);

  $idKey = array_rand($diff);
  $id_return = $diff[$idKey];
  //var_dump($id_return);
  //die;



  $db_q = Database::connect();
  $statement_q = $db_q->prepare('SELECT * FROM quizz WHERE id = ?');
  $statement_q->execute(array($id_return));
  $quizz_return = $statement_q->fetch();
  Database::disconnect();

  var_dump($quizz_return);
  die;





if ($reponse_a_check == $bonne_rep)
{
    $exp_joueurs = $exp_joueurs + $exp_quizz;

    $statement_exp = $db_exp->prepare('UPDATE joueurs SET experience_joueurs = (?) WHERE pseudo = ?');
    $statement_exp->execute(array($exp_joueurs, $_SESSION['pseudo']));

    Database::disconnect();
}
}

if ($lvl_joueurs == 1)
{
  if ($exp_joueurs >= 250)
  {
    $db_checkexp1 = Database::connect();
    $statement_checkexp1 = $db_checkexp1->prepare('UPDATE joueurs SET experience_joueurs = 0 WHERE pseudo = ?');
    $statement_checkexp1->execute(array($_SESSION['pseudo']));
    Database::disconnect();

    $db_checklvl1 = Database::connect();
    $statement_checklvl1 = $db_checklvl1->prepare('UPDATE joueurs SET niveau = 2 WHERE pseudo = ?');
    $statement_checklvl1->execute(array($_SESSION['pseudo']));
    Database::disconnect();
  }
}

if ($lvl_joueurs == 2)
{
  if ($exp_joueurs >= 500)
  {
    $db_checkexp2 = Database::connect();
    $statement_checkexp2 = $db_checkexp2->prepare('UPDATE joueurs SET experience_joueurs = 0 WHERE pseudo = ?');
    $statement_checkexp2->execute(array($_SESSION['pseudo']));
    Database::disconnect();

    $db_checklvl2 = Database::connect();
    $statement_checklvl2 = $db_checklvl2->prepare('UPDATE joueurs SET niveau = 3 WHERE pseudo = ?');
    $statement_checklvl2->execute(array($_SESSION['pseudo']));
    Database::disconnect();
  }
}

if ($lvl_joueurs == 3)
{
  if ($exp_joueurs >= 1000)
  {
    $db_checkexp3 = Database::connect();
    $statement_checkexp3 = $db_checkexp3->prepare('UPDATE joueurs SET experience_joueurs = 0 WHERE pseudo = ?');
    $statement_checkexp3->execute(array($_SESSION['pseudo']));
    Database::disconnect();

    $db_checklvl3 = Database::connect();
    $statement_checklvl3 = $db_checklvl3->prepare('UPDATE joueurs SET niveau = 4 WHERE pseudo = ?');
    $statement_checklvl3->execute(array($_SESSION['pseudo']));
    Database::disconnect();
  }
}

if ($lvl_joueurs == 4)
{
  if ($exp_joueurs >= 2000)
  {
    $db_checkexp4 = Database::connect();
    $statement_checkexp4 = $db_checkexp4->prepare('UPDATE joueurs SET experience_joueurs = 0 WHERE pseudo = ?');
    $statement_checkexp4->execute(array($_SESSION['pseudo']));
    Database::disconnect();

    $db_checklvl4 = Database::connect();
    $statement_checklvl4 = $db_checklvl4->prepare('UPDATE joueurs SET niveau = 5 WHERE pseudo = ?');
    $statement_checklvl4->execute(array($_SESSION['pseudo']));
    Database::disconnect();
  }
}

  header("Location: quete.php");
?>
