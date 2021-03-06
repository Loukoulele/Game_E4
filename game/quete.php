<?php
session_start();
?>
<?php
include 'header/header.php';
include 'calldb.php';
include 'calldb_quizz.php';
//include 'quizz.php';

 ?>

<?php

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


  $_SESSION['id'] = $quizz_return['id'];





 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>World of Quest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="icon" href="../img/game.png" />
  <!--<audio src="song/song1.mp3" autoplay loop></audio>-->

</head>
<?php


$lvl = 250;

if ($joueurs['niveau'] == 2)
{
  $lvl = $lvl * 2;
}
if ($joueurs['niveau'] == 3)
{
  $lvl = $lvl * 2 * 2;
}
if ($joueurs['niveau'] == 4)
{
  $lvl = $lvl * 2 * 2 * 2;
}
 ?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><img src="<?php echo'../img/' . $joueurs['image']; ?>" class="rounded mx-auto d-block" alt="..." width="55" heigh="55"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link"><strong><?php echo ' ' . $joueurs['pseudo']; ?></p><span class="sr-only">(current)</span></strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Niveau : <?php echo ' ' . $joueurs['niveau']; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Expérience : <?php echo ' ' . $joueurs['experience_joueurs']; ?> /  <?php echo ' ' . $lvl; ?></a>
      </li>
    </ul>
  </div>
</nav>
<?php include 'side_menu/side_menu.php'; ?>

<div class="card col-sm-10">

 <img src="../img/zelda.gif" class="rounded mx-auto d-block">
 <h3 class="text-center">Question : </h3>
  <h4 class="text-center"><?php //rand ( 0 , $quizz.length() - 1 )
                                 echo ' ' . $quizz_return['question']; ?></h4>
</br/>

 <table>
   <form class="form" role="form" method="POST" action="quizz.php">
    <tr>
      <?php echo '<th><input type="radio" name="rep_form" value="' . $quizz_return['reponse'] . '" checked> Réponse 1</th>'?>
      <?php
        $bonne_rep_return = $quizz_return['reponse'];
        $_SESSION['bonne_rep'] = $bonne_rep_return;

      ?>
      <?php echo '<th><input type="radio" name="rep_form" value="' . $quizz_return['reponse2_f'] . '"> Réponse 2</th>'?>
      <?php echo '<th><input type="radio" name="rep_form" value="' . $quizz_return['reponse3_f'] . '"> Réponse 3</th>'?>
      <?php echo '<th><input type="radio" name="rep_form" value="' . $quizz_return['reponse4_f'] . '"> Réponse 4</th>'?>
    </tr>

    <tr>
      <td><?php echo ' ' . $quizz_return['reponse']; ?></td>
      <td><?php echo ' ' . $quizz_return['reponse2_f']; ?></td>
      <td><?php echo ' ' . $quizz_return['reponse3_f']; ?></td>
      <td><?php echo ' ' . $quizz_return['reponse4_f']; ?></td>
      <td><input class="btn btn-primary" type="submit" value="Valider"></td>
    </tr>
    </form>
  </table>

  <hr/>
  <br/>
</card>
</body>
